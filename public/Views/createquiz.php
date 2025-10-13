<?php include 'partials/header.php' ?>

<head>
    <style>
        body {
            background: linear-gradient(110deg, #202020ff, #161616ff);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: white;
        }

        .back-btn {
            border-radius: 50%;
            position: fixed;
            left: 50px;
            bottom: 50px;
            background-color: #ff2a1eff;
            width: 70px;
            height: 70px;
            justify-content: center;
            align-items: center;
            display: flex;
            transition: all 0.33s ease-in-out;
            box-shadow: 0 4px 15px rgba(255, 42, 30, 0.4);
        }

        .back-btn:hover {
            cursor: pointer;
            transform: rotate(360deg) scale(0.9);
        }

        @media (max-width: 768px) {
            .back-btn {
                width: 55px;
                height: 55px;
                left: 20px;
                bottom: 20px;
            }
        }

        @media (max-width: 480px) {
            .back-btn {
                width: 50px;
                height: 50px;
                left: 15px;
                bottom: 15px;
            }
        }

.createBox {
    width: 400px;
    height: 550px;
    background-color: #272727ff;
    border-radius: 20px;
    display: none;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 20px 0;
    box-sizing: border-box;
    text-align: left;
}


/* Grup yapısı */
.group-box {
    display: flex;
    flex-direction: column;
    width: 90%;
    margin: 10px 0;
}

        .group-box p {
            margin: 0 0 5px 0;
            font-size: 14px;
            color: #ccc;
        }

.row {
    display: flex;
    justify-content: space-between;
    gap: 30px;
    width: 96%;
}

.row .group-box {
    width: 50%;
}

.form-control {
    width: 94%;
    height: 35px;
    font-size: 16px;
    border-radius: 15px;
    border: none;
    padding: 8px 12px;
    background-color: #1f1f1fff;
    color: white;
    outline: none;
    transition: all 0.2s ease-in-out;
}

.form-control:focus {
    box-shadow: 0 0 8px #3ee54fff;
    background-color: #1a1a1aff;
}

.createQuizBtn {
    width: 90%;
    height: 40px;
    border-radius: 20px;
    border: none;
    outline: none;
    background: linear-gradient(180deg, #3ee54fff, #06833cff);
    color: white;
    font-size: 15px;
    font-weight: 700;
    transition: all 0.33s ease-in-out;
    margin-top: 15px;
}

.createQuizBtn:hover {
    cursor: pointer;
    transform: scale(0.95);
}

        select.form-control {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
        }

        /* TEST QUİZ KODLARI */
.createTestQuiz {
    width: 400px;
    background-color: #065983ff;
    padding: 30px;
    margin-bottom: 50px;
    border-radius: 20px;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    display: none;
}


        /*DOĞRU-YANLIŞ KODLARI */
        .createTFQuiz {
            display: none;
        }


        .olustur-text{
            text-align: center;
            font-size: 18px;
            font-weight: 700;
            text-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
        }

        .geriOk{
            border-radius: 50%;
            width: 70px;
            height: 70px;
            background-color: #0086d4ff;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top:50px;
            transition: all 0.33s ease-in-out;
        }

        .geriOk i{
            font-size: 30px;
        }

        .geriOk:hover{
            cursor: pointer;
            transform: scale(0.8);
        }

/* Tablet */
@media (max-width: 768px) {
    .createBox,
    .createTestQuiz {
        width: 90%;
        height: auto;
        padding: 30px 20px;
    }

    .form-control {
        width: 100%;
        font-size: 15px;
    }

    .row {
        flex-direction: column;
        gap: 10px;
    }

    .row .group-box {
        width: 100%;
    }

    .createQuizBtn {
        font-size: 14px;
        height: 38px;
    }

    .geriOk {
        width: 60px;
        height: 60px;
        margin-top: 30px;
    }

    .geriOk i {
        font-size: 26px;
    }

    .olustur-text {
        font-size: 17px;
    }
}

/* Mobil (küçük ekranlar) */
@media (max-width: 480px) {
    body {
        padding: 10px;
    }

    .createBox,
    .createTestQuiz {
        width: 90%;
        border-radius: 15px;
        padding: 25px 15px;
        margin: 0;
    }

    .olustur-text {
        font-size: 16px;
        text-align: center;
    }

    .form-control {
        font-size: 14px;
        padding: 6px 10px;
    }

    .createQuizBtn {
        height: 36px;
        font-size: 14px;
    }

    .geriOk {
        width: 50px;
        height: 50px;
    }

    .geriOk i {
        font-size: 22px;
    }

    .row {
        flex-direction: column;
        gap: 8px;
    }

    .row .group-box {
        width: 100%;
    }
}        
    </style>
</head>

<div id="errorBox" style="
  background-color: #ffdddd;
  border: 1px solid #ff5c5c;
  color: #660000;
  padding: 10px 14px;
  border-radius: 5px;
  font-family: sans-serif;
  width: fit-content;
  margin: 10px auto;
  display: none;
  justify-content:center;
  align-items:center;
  flex-direction:column;
">
  <strong>Hata:</strong> <span id="errorMessage">Bir hata oluştu.</span>
</div>    

<div class="createBox">   
    <p class="olustur-text">Bir Quiz oluşturun!</p>

    <label class="group-box">
        <p>Quiz Adı:</p>
        <input type="text" name="quizName" class="form-control" style="width:90%">
    </label>
    <label class="group-box">
        <p>Quiz Açıklaması:</p>
        <input type="text" name="quizDescription" class="form-control" style="width:90%">
    </label>
    <label class="group-box">
        <p>Quiz Tipi:</p>
        <select name="menu" class="form-control" style="width:95%;">
            <option value="0">Seçiniz</option>
           <!-- <option value="1">Doğru-Yanlış</option>-->
            <option value="2">Test</option>
        </select>
    </label>
    <label class="group-box">
        <p>Soru Sayısı:</p>
        <input type="number" name="quizCount" max="20" min="1" class="form-control" style="width:90%">
    </label>
    <input type="submit" value="Quiz Oluştur" class="createQuizBtn" name="createBtn">
</div>

<div class="createTestQuiz" id="createTestQuizID">
    <p class="olustur-text">Bir soru oluşturun!</p>
    <label class="group-box">
        <p><i class="fa-solid fa-circle-question"></i> Sorunuz:</p>
        <input type="text" name="soru" id="" class="form-control">
    </label>
    <div class="row">
        <label class="group-box">
            <p>A:</p>
            <input type="text" name="choseA" id="" class="form-control">
        </label>
        <label class="group-box">
            <p>B:</p>
            <input type="text" name="choseB" id="" class="form-control">
        </label>
    </div>
    <div class="row">
        <label class="group-box">
            <p>C:</p>
            <input type="text" name="choseC" id="" class="form-control">
        </label>
        <label class="group-box">
            <p>D:</p>
            <input type="text" name="choseD" id="" class="form-control">
        </label>
    </div>
    <label class="group-box">
        <p>Cevap:</p>
        <select class="form-control" name="cevap" style="width:100%;">
            <option value="-1">Seçiniz</option>
            <option value="0">A</option>
            <option value="1">B</option>
            <option value="2">C</option>
            <option value="3">D</option>
        </select>
    </label>
    <p class="olustur-text" style="margin:0;" id="durum"></p>
    <div class="geriOk" id="ileri">
        <i id="i_ileri"></i>
    </div>
</div>
<!--
<div class="createTFQuiz">
    <label class="form-control">
        <p><i class="fa-solid fa-circle-question"></i> Sorunuz:</p>
        <input type="text" name="soru" id="" class="form-control">
    </label>
    <label class="form-control">
        <p>Cevap:</p>
        <select name="siklar" id="" class="form-control">
            <option value="0">Doğru</option>
            <option value="1">Yanlış</option>
        </select>
    </label>
</div>


-->
<script src="../public/js/createquiz.js"></script>
