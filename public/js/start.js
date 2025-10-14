const baslaBtn = document.getElementById("startBtn");
const startBox = document.getElementById("startParent");
const backBtn = document.getElementById("geriBtn");
const ct = document.getElementById("createTestQuizID");

const quizTableBody = document.querySelector("tbody");

const questionBox = document.getElementById("questions");

backBtn.addEventListener("click", () => {
    console.log(quizTableBody)
    if (quizs.style.display == "flex") {
        startBox.style.display = "flex";
        backBtn.style.display = "none";
        quizs.style.display = "none";
        hideError();
    } else if (createBox.style.display == "flex") {
        createBox.style.display = "none";
        quizs.style.display = "flex";
        hideError();
    } else if (ct.style.display == "flex") {
        ct.style.display = "none";
        createBox.style.display = "flex";
        hideError();
    } else if (questionBox.style.display == "flex") {
        questionBox.style.display = "none";
        quizs.style.display = "flex";
        backBtn.style.bottom = "10px";
        backBtn.style.top = "";
    }

    const quizTableBody1 = document.querySelector("tbody");
    quizTableBody1.innerHTML="";
})


baslaBtn.addEventListener("click", async () => {
    if (backBtn.style.display == "none") {
        startBox.style.display = "none";
        quizs.style.display = "flex";
        backBtn.style.display = "flex";
    }
    dataUpdate();
});


async function dataUpdate() {
    const response = await fetch("../public/Views/test.php");
    const data = await response.json();

    // her quiz için tablo satırı oluştur
    data.forEach(q => {
        const trtr = document.createElement("tr");
        trtr.setAttribute("data-id", q.id);
        trtr.innerHTML = `
            <td>${q.quiz_adi}</td>
            <td>${q.quiz_aciklama}</td>
            <td><button class="quizs-startBtn">Başla</button></td>
        `;
        quizTableBody.appendChild(trtr);
    });
}


document.querySelector("tbody").addEventListener("click", async (e) => {
    if (e.target.classList.contains("quizs-startBtn")) {
        const parentRow = e.target.closest("tr");
        const quizID = parentRow.getAttribute("data-id");

        quizs.style.display = "none";
        questionBox.style.display = "flex";
        backBtn.style.top = "10px";

        const response = await fetch("../public/Views/getQuizQuestions.php", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({ id: quizID })
        });

        const result = await response.json();
        console.log("Gelen quiz:", result);

        showQuestionsSequentially(result.sorular, result.quiz_adi);

    }
});
const ustb = document.getElementById("ustbilgi");
const genelSorular = document.getElementById("genel-sorular");
const cikis = document.getElementById("cikisBtn");
const cevaplaBtn = document.querySelector(".cevaplaBtn");
const atlaBtn = document.querySelector(".atlaBtn");

function showQuestionsSequentially(sorular, quizAdi = "") {
    let index = 0;
    let dogruSayisi = 0;
    let yanlisSayisi = 0;
    let atlananSayisi = 0;

    const questionText = document.querySelector(".questions p");
    const choicesContainer = document.getElementById("chosens");

    function renderQuestion() {
        if (index >= sorular.length) {
            ustb.innerHTML = `
                Test Tamamlandı<br>
                Doğru: ${dogruSayisi} | Yanlış: ${yanlisSayisi} | Atlanan: ${atlananSayisi}
                <br>Toplam: ${sorular.length}/${sorular.length}
            `;
            cikis.style.display = "flex";
            genelSorular.style.display = "none";
            choicesContainer.innerHTML = "";
            cevaplaBtn.style.display = "none";
            atlaBtn.style.display = "none";
            return;
        }

        const q = sorular[index];

        ustb.innerHTML = `${quizAdi}<br>${index + 1}/${sorular.length}`;
        questionText.textContent = q.soru_metni;

        choicesContainer.innerHTML = "";
        q.siklar.forEach((sik, i) => {
            const div = document.createElement("div");
            div.classList.add("chose");
            div.innerHTML = `
                <input type="radio" name="radio" value="${i}">
                <h1 class="chose-text">${sik}</h1>
            `;
            choicesContainer.appendChild(div);
        });
    }

    function cevapla() {
        const secilen = document.querySelector('input[name="radio"]:checked');
        if (!secilen) {
            alert("Lütfen bir seçenek seç reisim 😎");
            return;
        }

        const secilenIndex = parseInt(secilen.value);
        const dogruIndex = parseInt(sorular[index].dogru); // örn: 2 (3. şık)

        if (secilenIndex === dogruIndex) {
            dogruSayisi++;
        } else {
            yanlisSayisi++;
        }

        index++;
        renderQuestion();
    }

    function atla() {
        atlananSayisi++;
        index++;
        renderQuestion();
    }

    cevaplaBtn.onclick = cevapla;
    atlaBtn.onclick = atla;

    renderQuestion();
}


cikis.addEventListener("click",()=>{
    questionBox.style.display = "none";
    genelSorular.style.display = "flex";
    cikis.style.display = "none";
    quizs.style.display = "flex";
    cevaplaBtn.style.display = "inline-block";
    atlaBtn.style.display = "inline-block";
})