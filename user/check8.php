<?php

session_start();

$do = '';
if (isset($_GET['do']))
    $do = $_GET['do'];
else header("index.php");

if ($do == 'first') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quiz = $_POST['quiz'];
        if ($quiz == 120) {
            $_SESSION['rightAnswer1_8'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score1_8'] = 1;
        }
        else {
            $_SESSION['wrongAnswer1_8'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer1_8'] = $quiz;
        }
        header("Location: pages/exam8.php#card1");
    }
}
if ($do == 'second') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quiz = $_POST['quiz'];
        if ($quiz == 120) {
            $_SESSION['rightAnswer2_8'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score2_8'] = 1;
        }
        else {
            $_SESSION['wrongAnswer2_8'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer2_8'] = $quiz;
        }
        header("Location: pages/exam8.php#card2");
    }
}
if ($do == 'third') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quiz = $_POST['quiz'];
        if ($quiz == 120) {
            $_SESSION['rightAnswer3_8'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score3_8'] = 1;
        }
        else {
            $_SESSION['wrongAnswer3_8'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer3_8'] = $quiz;
        }
        header("Location: pages/exam8.php#card3");
    }
}
if ($do == 'fourth') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quiz = $_POST['quiz'];
        if ($quiz == 120) {
            $_SESSION['rightAnswer4_8'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score4_8'] = 1;
        }
        else {
            $_SESSION['wrongAnswer4_8'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer4_8'] = $quiz;
        }
        header("Location: pages/exam8.php#card4");
    }
}
if ($do == 'fifth') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quiz = $_POST['quiz'];
        if ($quiz == 120) {
            $_SESSION['rightAnswer5_8'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score5_8'] = 1;
        }
        else {
            $_SESSION['wrongAnswer5_8'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer5_8'] = $quiz;
        }
        header("Location: pages/exam8.php#card5");
    }
}
if ($do == 'sixth') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quiz = $_POST['quiz'];
        if ($quiz == 120) {
            $_SESSION['rightAnswer6_8'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score6_8'] = 1;
        }
        else {
            $_SESSION['wrongAnswer6_8'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer6_8'] = $quiz;
        }
        header("Location: pages/exam8.php#card6");
    }
}
if ($do == 'seventh') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quiz = $_POST['quiz'];
        if ($quiz == 120) {
            $_SESSION['rightAnswer7_8'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score7_8'] = 1;
        }
        else {
            $_SESSION['wrongAnswer7_8'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer7_8'] = $quiz;
        }
        header("Location: pages/exam8.php#card7");
    }
}
if ($do == 'eighth') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quiz = $_POST['quiz'];
        if ($quiz == 120) {
            $_SESSION['rightAnswer8_8'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score8'] = 1;
        }
        else {
            $_SESSION['wrongAnswer8_8'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer8'] = $quiz;
        }
        header("Location: pages/exam8.php#card8");
    }
}
if ($do == 'ninth') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quiz = $_POST['quiz'];
        if ($quiz == 120) {
            $_SESSION['rightAnswer9_8'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score9'] = 1;
        }
        else {
            $_SESSION['wrongAnswer9_8'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer9_8'] = $quiz;
        }
        header("Location: pages/exam8.php#card9");
    }
}
if ($do == 'tenth') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quiz = $_POST['quiz'];
        if ($quiz == 120) {
            $_SESSION['rightAnswer10_8'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score10_8'] = 1;
        }
        else {
            $_SESSION['wrongAnswer10_8'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer10_8'] = $quiz;
        }
        header("Location: pages/exam8.php#card10");
    }
}
if ($do == 'eleven') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quiz = $_POST['quiz'];
        if ($quiz == 120) {
            $_SESSION['rightAnswer11_8'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score11_8'] = 1;
        }
        else {
            $_SESSION['wrongAnswer11_8'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer11_8'] = $quiz;
        }
        header("Location: pages/exam8.php#card11");
    }
}
if ($do == 'twelve') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quiz = $_POST['quiz'];
        if ($quiz == 120) {
            $_SESSION['rightAnswer12_8'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score12_8'] = 1;
        }
        else {
            $_SESSION['wrongAnswer12_8'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer12_8'] = $quiz;
        }
        header("Location: pages/exam8.php#card12");
    }
}