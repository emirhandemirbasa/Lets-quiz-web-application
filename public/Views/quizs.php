<?php $baslik = "Let's Quiz | Quizler"?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

        .quizes {
            display: none;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 100%;
            max-width: 900px;
        }

        .quizs-title {
            font-size: 20px;
            margin-bottom: 30px;
            text-align: center;
            padding: 0 10px;
        }

        .table-wrapper {
            margin-top: 20px;
            overflow-y: auto;
            overflow-x: auto;
            border-radius: 20px;
            border: 2px solid #038c9b;
            max-height: 400px;
            width: 100%;
            box-shadow: rgba(255, 255, 255, 0.1) 0px 6px 25px 0px;
            background-color: #2f2f2f;
            animation: fade 1.3s ease forwards;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            min-width: 600px;
        }

        tr th {
            background-color: #007dc1ff;
            padding: 15px;
            text-align: center;
            position: sticky;
            z-index: 1;
            top: 0;
            font-size: 16px;
        }

        tr {
            background-color: #505050ff;
        }

        tr:nth-child(even) {
            background-color: #1b1b1bff;
        }

        tr:hover {
            background-color: #486c92;
            transition: 0.3s;
        }

        td {
            padding: 10px;
            text-align: center;
            font-size: 15px;
            word-break: break-word;
        }

        .quizs-startBtn {
            background: #038c9b;
            color: white;
            border: none;
            border-radius: 10px;
            padding: 8px 15px;
            cursor: pointer;
            transition: 0.3s;
            font-size: 15px;
            width: 100%;
            text-align: center;
            text-decoration: none;
        }

        .quizs-startBtn:hover {
            background: #05a1b3;
        }

        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #2e2e2e;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb {
            background: #038c9b;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #05a1b3;
        }

        @media (max-width: 768px) {
            .quizs-title {
                font-size: 18px;
                margin-bottom: 20px;
            }

            table {
                font-size: 14px;
                min-width: 100%;
            }

            tr th,
            td {
                padding: 10px 6px;
            }

            .quizs-startBtn {
                font-size: 14px;
                padding: 6px 10px;
                border-radius: 8px;
            }

            .table-wrapper {
                max-height: 300px;
            }
        }

        @media (max-width: 480px) {
            body {
                padding: 5px;
            }

            .quizs-title {
                font-size: 16px;
            }

            table {
                font-size: 13px;
            }

            td, th {
                padding: 8px 4px;
            }

            .quizs-startBtn {
                font-size: 13px;
                padding: 5px 8px;
            }

            .table-wrapper {
                max-height: 250px;
            }
        }

        .back-btn{
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
        .back-btn:hover{
            cursor: pointer;
            transform: rotate(360deg) scale(0.9);
        }
        
@media (max-width: 768px) { /*tablet için */
    .back-btn {
        width: 55px;
        height: 55px;
        left: 20px;
        bottom: 20px;
    }
}

@media (max-width: 480px) { /*tel için*/
    .back-btn {
        width: 50px;
        height: 50px;
        left: 15px;
        bottom: 15px;
    }
}




    </style>
</head>

<div class="quizes" id="quizler">
    <p class="title">Aşağıda bulunan quizlerden birine başlayabilir veya kendiniz bir quiz oluşturabilirsiniz!</p>
    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>Quiz Adı</th>
                    <th>Quiz Açıklaması</th>
                    <th>Seçenekler</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>
    <div class="quizs-startBtn" id="quizs-create" style="margin-top: 20px; background-color:orangered;text-transform:uppercase;">
        <i class="fa-solid fa-plus"></i> Bİr Quiz Oluştur</div>
    </div>
    <div class="back-btn" id="geriBtn" style="display: none;">
        <i class="fa-solid fa-arrow-left" style="font-size:25px;"></i>
    </div>

<?php
    function getQuizes(){
        require '../../Models/connection.php';
        $sql = "SELECT * FROM quiz_bilgileri";
        $stmt = mysqli_prepare($baglanti,$sql);
        mysqli_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        mysqli_stmt_close($stmt);
        mysqli_close($baglanti);
        return $result;
    }    
?>
