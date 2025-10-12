<head>
    <style>
        .modal {
            z-index: 1;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: fadeIn 2s  ease forwards;
        }

        #myModal{
            display: none;
        }

        .modalBox {
            background-color: #1d1d1dff;
            height: 500px;
            opacity: 0.9;
            box-shadow: rgba(100, 100, 100, 0.25) 0px 14px 28px, rgba(105, 105, 105, 0.22) 0px 10px 10px;
            border-radius: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .close {
            border-radius: 10px;
            background-color: #CC0000;
            width: 90%;
            height: 30px;
            margin: 5px;
            border: none;
            color: white;
            cursor: pointer;
            transition: all 0.33s ease-in-out;
        }

        .close:hover{
            opacity: 0.9;
            transform: scale(0.9);
        }

        .rules {
            width: 100%;
            height: auto;
        }

        .rules p {
            display: block;
            margin: 0px 20px 20px 20px;
        }

        .baslik2 {
            text-align: center;
            font-size: 20px;
        }

        .rules-text {
            color: #737373ff;
            opacity: 1;
        }

        .rules p i {
            font-size: 15px;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-200px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
                background-color: rgb(0, 0, 0);
                background-color: rgba(0, 0, 0, 0.4);                
            }
        }
        @keyframes fadeOut {
            from {
                opacity: 1;
                transform: translateY(0);
                background-color: rgb(0, 0, 0);
                background-color: rgba(0, 0, 0, 0.4);
            }
            to {
               opacity: 0;
                transform: translateY(-200px);                            
            }
        }        
    </style>
</head>

<div class="modal" id="myModal">
    <div class="modalBox">
        <p class="baslik2"><i class="fa-solid fa-scale-balanced" style="color:darkgreen;font-size:30px"></i><br>Let's Quiz Kurallar</p>
        <div class="rules rules-text">
            <p><i class="fa-solid fa-arrow-right"></i><span> 2 Adet Quiz tipi bulunmaktadır.</span></p>
            <p><i class="fa-solid fa-arrow-right"></i><span> Doğru yanlış quiz tipinde doğru cevabı bulmaya çalışın.</span></p>
            <p><i class="fa-solid fa-arrow-right"></i><span> 4 şıklı quiz tipinde doğru olanı bulmaya çalışın.</span></p>
            <p><i class="fa-solid fa-arrow-right"></i><span> Cevabı seçtikten sonra bir sonraki soruya geçmeden önce sonucu görebilirsiniz.</span></p>
            <p><i class="fa-solid fa-arrow-right"></i><span> Quiz sonunda toplam skorunuzu görebilirsiniz.</span></p>
            <p><i class="fa-solid fa-arrow-right"></i><span> Lütfen sayfayı yenilemeyin, aksi takdirde ilerlemeniz sıfırlanır.</span></p>
        </div>
        <button class="close" id="modalClose">KAPAT</button>
    </div>
</div>

<script src="../public/js/modal.js"></script>