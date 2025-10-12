
const myModal = document.getElementById("myModal");

const button = document.getElementById("modalClose");

const kurallar = document.querySelector(".btn.limered");


button.addEventListener("click",()=>{
    myModal.style.animation = "fadeOut 2s ease forwards";
    setTimeout(()=>{
        myModal.style.display="none";
    },2000)
})

kurallar.addEventListener("click",()=>{
    myModal.style.animation = "fadeIn 2s ease forwards";
    myModal.style.display="flex";
})