const quizAdi = document.getElementsByName("quizName")[0];
const quizAciklama = document.getElementsByName("quizDescription")[0];
const quizMenu = document.getElementsByName("menu")[0];
const quizSayisi = document.getElementsByName("quizCount")[0];
const olustur = document.getElementsByName("createBtn")[0];
const createBox = document.querySelector(".createBox");
const durum = document.getElementById("durum");
const test = document.getElementById("createTestQuizID");

const ileriBtn = document.getElementById("ileri");
const iileri = document.getElementById("i_ileri");

var quizDizisi = {};

var sayac = 1;

olustur.addEventListener("click", () => {
    if (quizAdi.value==""){
        showError("Quiz adı kısmını boş bırakmayın!");
        return;
    }
    if (quizAciklama.value==""){
        showError("Quiz Açıklama kısmını boş bırakmayın!");
        return;
    }
    if (quizMenu.value=="0"){
        showError("Lütfen bir quiz tipi seçin!");
        return;
    }
    if (quizSayisi.value==""){
        showError("Lütfen bir quiz soru sayısı girin!");
        return;
    }          
    if (Number(quizSayisi.value)> 20){
        showError("Maksimum 20 soru oluşturabilirsiniz!");
        return;
    }  
    if (Number(quizSayisi.value)<=0){
        showError("Geçersiz bir soru sayısı girdiniz!");
        return;
    }     
    hideError();
    if (quizMenu.value == 1) {
       /* quizDizisi = {
            ad: "ada",
            aciklama: "",
            quizTip: "dogruYanlis",
            quizSayisi: 0,
            sorular: [{
                soru: "DENEME",
                dogruMu: true
            }
            ]
        }
        quizDizisi["quizTip"] = "dogruYanlis";
        */
    }
    else if (quizMenu.value == 2) {
        quizDizisi = {
            ad: "",
            aciklama: "",
            quizTip: "",
            quizSayisi: 0,
            sorular: []
        }
        quizDizisi["quizTip"] = "test";
    }
    quizDizisi["ad"] = quizAdi.value;
    quizDizisi["aciklama"] = quizAciklama.value;
    quizDizisi["quizSayisi"] = quizSayisi.value;
    createBox.style.display = "none";
    test.style.display = "flex";
    iileri.classList.add("fa-solid","fa-forward");
    durum.innerHTML = sayac+"/"+quizDizisi["quizSayisi"];
    console.log(quizDizisi["ad"]+" "+quizDizisi["aciklama"]+" "+quizDizisi["quizTip"]+" "+quizDizisi["quizSayisi"]);
})

const testSoru = document.getElementsByName("soru")[0];
const a = document.getElementsByName("choseA")[0];
const b = document.getElementsByName("choseB")[0];
const c = document.getElementsByName("choseC")[0];
const d = document.getElementsByName("choseD")[0];
const cevap = document.getElementsByName("cevap")[0];
const quizs = document.getElementById("quizler");

ileriBtn.addEventListener("click",()=>{
    if (testSoru.value == ""){
        showError("Soru kısmı boş bırakılamaz!");
        return;
    }else if (a.value==""){
        showError("Lütfen A şıkkını boş bırakmayın!");
        return;
    }else if (b.value==""){
       showError("Lütfen B şıkkını boş bırakmayın!"); 
       return;
    }else if (c.value==""){
       showError("Lütfen C şıkkını boş bırakmayın!"); 
       return;
    }else if (d.value==""){
       showError("Lütfen B şıkkını boş bırakmayın!"); 
       return;
    }else if (cevap.value=="-1"){
       showError("Lütfen sorunuzun cevabını seçin!"); 
       return;
    }
    quizDizisi.sorular.push({
        soru: testSoru.value,
        siklar: [a.value,b.value,c.value,d.value],
        dogruSik:cevap.value
    })
    console.log("Soru eklendi:", quizDizisi.sorular);
    sayac++;
    if(sayac>quizDizisi["quizSayisi"]){
        fetch('Views/ekle.php',{
            method:"POST",
            headers:{
                'Content-Type':'application/json'
            },
            body: JSON.stringify(quizDizisi)
        })   
        .then(response => response.text())
        .then(data => {
            console.log(data);
            dataUpdate();
        });
        test.style.display = "none";
        quizs.style.display = "flex";

    }
    if (sayac==quizDizisi["quizSayisi"]){
        iileri.classList.remove("fa-solid","fa-forward");
        iileri.classList.add("fa-solid","fa-plus");
        ileriBtn.style.backgroundColor = "green"
    }
    hideError();
    guncelle();
    diziTemizle();
})

function guncelle(){
    quizAdi.value="";
    quizAciklama.value="";
    quizMenu.selectedIndex = 0;
    quizSayisi.value = "";
    a.value = "";
    b.value="";
    c.value="";
    d.value = "";
    testSoru.value="";
    cevap.selectedIndex = 0;
    durum.innerHTML = sayac+"/"+quizDizisi["quizSayisi"];
}

const quizolusturliste = document.getElementById("quizs-create");

quizolusturliste.addEventListener("click",()=>{
    quizs.style.display = "none";
    createBox.style.display = "flex";
})

function showError(message){
  const box = document.getElementById("errorBox");
  const msg = document.getElementById("errorMessage");
  msg.textContent = message || "Bilinmeyen bir hata oluştu.";
  box.style.display = "block";
}

function hideError(){
  document.getElementById("errorBox").style.display = "none";
}

function diziTemizle(tip){
    if (tip == "test"){
        quizDizisi = {
            ad: "",
            aciklama: "",
            quizTip: "",
            quizSayisi: 0,
            sorular: []
        }
    }
}