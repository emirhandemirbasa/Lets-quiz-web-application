<head>
  <style>
    .question {
      border-radius: 50%;
      width: 100px;
      height: 100px;
      background-color: #262626ff;
      margin-bottom: 30px;
      display: flex;
      justify-content: center;
      align-items: center;
      box-shadow: rgba(111, 0, 155, 0.25) 0px 54px 55px,
        rgba(111, 0, 155, 0.12) 0px -12px 30px,
        rgba(111, 0, 155, 0.12) 0px 4px 6px,
        rgba(111, 0, 155, 0.17) 0px 12px 13px,
        rgba(111, 0, 155, 0.09) 0px -3px 5px;
    }

    .questions {
      height: 400px;
      background-color: #333333ff;
      width: 600px;
      border-radius: 40px;
    }

    #questions {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      display: none;
    }

    .question i {
      font-size: 50px;
    }

    .question-info {
      height: auto;
      min-width: 300px;
      max-width: 600px;
      border-radius: 40px;
      background-color: #333333ff;
      margin-bottom: 20px;
    }

    .question-info p {
      font-size: 17px;
      font-weight: 600;
      text-align: center;
    }

    #genel-sorular {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    #genel-sorular p {
      font-size: 18px;
      font-weight: 500;
      text-align: center;
      background-color: #016094ff;
      border-radius: 20px;
      margin: 20px 40px;
      min-height: 100px;
      max-height: 120px;
    }

    .chose {
      background-color: #2a2a2aff;
      width: 47%;
      border-radius: 20px;
      height: 70px;
      display: flex;
      justify-content: start;
      align-items: center;
      margin: 5px;
    }

    #radiobtn {
      width: 30px;
      height: 30px;
      margin-left: 20px;
    }

    .chose-text {
      font-size: 14px;
      font-weight: 400;
    }

    #chosens {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: row;
      flex-wrap: wrap;
    }

    .cevaplaBtn {
      background: linear-gradient(135deg, #0bae0bff, #009500ff);
      color: white;
    }

    .btn-quest {
      border-radius: 20px;
      border: none;
      height: 50px;
      width: 47%;
      margin-top: 20px;
      margin-left: 10px;
      font-size: 18px;
      transition: all 0.33s ease-in-out;
    }

    .atlaBtn {
      background: linear-gradient(135deg, #ae360bff, #953c00ff);
      color: white;
    }

    .btn-quest:hover {
      cursor: pointer;
      transform: scale(0.85);
    }

    /* ✅ Tablet görünümü (481px - 1024px) */
    @media screen and (max-width: 1024px) {
      .questions {
        width: 90%;
        height: auto;
      }

      .question-info {
        max-width: 90%;
        width: 100%;
      }

      .chose {
        width: 100%;
        height: auto;
        padding: 10px;
      }

      .btn-quest {
        width: 95%;
        font-size: 16px;
      }
    }

    /* ✅ Mobil görünümü (max 480px) */
    @media screen and (max-width: 480px) {
      .question {
        width: 80px;
        height: 80px;
      }

      #genel-sorular{
        width: 100%;
      }

      #questions{
        width: 100%;
      }

      .question i {
        font-size: 40px;
      }

      .question-info {
        min-width: unset;
        width: 90%;
        border-radius: 25px;
        padding: 10px;
      }

      .question-info p {
        font-size: 15px;
      }

      .questions {
        width: 100%;
        border-radius: 25px;
        height: auto;
        padding: 15px;
      }

      #chosens {
        flex-direction: column;
        flex-wrap: nowrap;
      }

      .chose {
        width: 100%;
        height: auto;
        padding: 8px;
      }

      .chose-text {
        font-size: 13px;
      }

      #radiobtn {
        width: 24px;
        height: 24px;
      }

      .btn-quest {
        width: 100%;
        margin-left: 0;
        font-size: 15px;
      }
    }
    .cikisBtn{
        width: 100%;
        border-radius: 20px;
        height: 50px;
        background-color: red;
        color: white;
        border:none;
        transition: all 0.33s ease-in-out;
        font-size: 18px;
        font-weight: 600;
        display: none;
        justify-content: center;
        align-items: center;
    }
    .cikisBtn:hover{
        transform: scale(0.9);
    }
  </style>
</head>


<div id="questions">
  <div class="question">
    <i class="fa-solid fa-question"></i>
  </div>
  <div class="question-info">
    <p id="ustbilgi">adas<br>1/4</p>
  </div>
  <button class="cikisBtn" id="cikisBtn"><p>ÇIKIŞ YAP</p></button>
  <div id="genel-sorular">
    <div class="questions">
      <p>2+2 Toplamı kaçtır?</p>
      <div id="chosens">
        <div class="chose">
          <input type="radio" name="radibtn" id="radiobtn" value="Şık1">
          <h1 class="chose-text">2+2 sonucunun toplamı 4'tür.</h1>
        </div>
        <div class="chose">
          <input type="radio" name="radibtn" id="radiobtn" value="Şık2">
          <h1 class="chose-text">2+2 sonucunun toplamı 3'tür.</h1>
        </div>
        <div class="chose">
          <input type="radio" name="radibtn" id="radiobtn" value="Şık3">
          <h1 class="chose-text">2+2 sonucunun toplamı 5'tir.</h1>
        </div>
        <div class="chose">
          <input type="radio" name="radibtn" id="radiobtn" value="Şık4">
          <h1 class="chose-text">2+2 sonucunun toplamı 22’dir.</h1>
        </div>
      </div>
      <button class="cevaplaBtn btn-quest">CEVAPLA</button>
      <button class="atlaBtn btn-quest">SORUYU ATLA</button>
    </div>
  </div>
</div>