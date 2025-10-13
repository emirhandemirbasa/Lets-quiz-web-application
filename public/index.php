<?php include 'partials/header.php'?>
<head>
    <style>
        body{
            background: linear-gradient(110deg, #202020ff, #161616ff);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin:0;
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: white;
        }
        .startBox{
            position: fixed;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 400px;
            flex-direction: column;
            z-index: 0;
        }
        .btn{
            width: 200px;
            border-radius: 20px;
            border:none;
            height: 50px;
            background: linear-gradient(35deg, #13b76aff, #00b725ff);
            color: #F0F0F0;
            font-size: 18px;
            font-weight: 700;
            box-shadow: rgba(58, 237, 82, 0.25) 0px 14px 28px, rgba(75, 243, 63, 0.22) 0px 10px 10px;
            transition: all ease-in-out 0.33s;
            margin-bottom:30px
        }
        .btn:hover{
            cursor: pointer;
            transform: scale(1.1);
        }

        .title{
            color: #a600ffff;
            font-size: 20px;
            font-weight: 500;
            text-shadow: rgba(159, 58, 237, 0.25) 0px 14px 28px, rgba(183, 63, 243, 0.22) 0px 10px 10px;
            margin-bottom: 70px;
            text-align: center;
        }

        .limered{
            background: linear-gradient(35deg, #cd4343ff, #eb2222ff);
            box-shadow: rgba(237, 58, 58, 0.25) 0px 14px 28px, rgba(243, 63, 63, 0.22) 0px 10px 10px;
        }
        p i{
            font-size:25px;
        }
    </style>
</head>


<div class="startBox" id="startParent">
    <p class="title"><i class="fa-solid fa-circle-question"></i><br>Let's Quiz Uygulamasına Hoşgeldin!</p>
    <button class="btn" id="startBtn">Başla</button>
    <button class="btn limered">Kurallar</button>
</div>

<?php include 'partials/rules-modal.php'?>
<?php include 'Views/quizs.php'?>
<?php include 'Views/createquiz.php'?>
<?php include 'Views/quest.php'?>
<?php include 'partials/footer.php'?>

<script src="../public/js/start.js"></script>
