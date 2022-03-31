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
            $_SESSION['rightAnswer1_10'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score1_10'] = 1;
        }
        else {
            $_SESSION['wrongAnswer1_10'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer1_10'] = $quiz;
        }
        header("Location: pages/exam10.php#card1");
    }
}
if ($do == 'second') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quiz = $_POST['quiz'];
        if ($quiz == 120) {
            $_SESSION['rightAnswer2_10'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score2_10'] = 1;
        }
        else {
            $_SESSION['wrongAnswer2_10'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer2_10'] = $quiz;
        }
        header("Location: pages/exam10.php#card2");
    }
}
if ($do == 'third') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quiz = $_POST['quiz'];
        if ($quiz == 120) {
            $_SESSION['rightAnswer3_10'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score3_10'] = 1;
        }
        else {
            $_SESSION['wrongAnswer3_10'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer3_10'] = $quiz;
        }
        header("Location: pages/exam10.php#card3");
    }
}
if ($do == 'fourth') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quiz = $_POST['quiz'];
        if ($quiz == 120) {
            $_SESSION['rightAnswer4_10'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score4_10'] = 1;
        }
        else {
            $_SESSION['wrongAnswer4_10'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer4_10'] = $quiz;
        }
        header("Location: pages/exam10.php#card4");
    }
}
if ($do == 'fifth') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quiz = $_POST['quiz'];
        if ($quiz == 120) {
            $_SESSION['rightAnswer5_10'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score5_10'] = 1;
        }
        else {
            $_SESSION['wrongAnswer5_10'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer5_10'] = $quiz;
        }
        header("Location: pages/exam10.php#card5");
    }
}
if ($do == 'sixth') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quiz = $_POST['quiz'];
        if ($quiz == 120) {
            $_SESSION['rightAnswer6_10'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score6_10'] = 1;
        }
        else {
            $_SESSION['wrongAnswer6_10'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer6_10'] = $quiz;
        }
        header("Location: pages/exam10.php#card6");
    }
}
if ($do == 'seventh') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quiz = $_POST['quiz'];
        if ($quiz == 120) {
            $_SESSION['rightAnswer7_10'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score7_10'] = 1;
        }
        else {
            $_SESSION['wrongAnswer7_10'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer7_10'] = $quiz;
        }
        header("Location: pages/exam10.php#card7");
    }
}
if ($do == 'eighth') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quiz = $_POST['quiz'];
        if ($quiz == 120) {
            $_SESSION['rightAnswer8_10'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score8_10'] = 1;
        }
        else {
            $_SESSION['wrongAnswer8_10'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer8_10'] = $quiz;
        }
        header("Location: pages/exam10.php#card8");
    }
}
if ($do == 'ninth') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quiz = $_POST['quiz'];
        if ($quiz == 120) {
            $_SESSION['rightAnswer9_10'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score9_10'] = 1;
        }
        else {
            $_SESSION['wrongAnswer9_10'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer9_10'] = $quiz;
        }
        header("Location: pages/exam10.php#card9");
    }
}
if ($do == 'tenth') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quiz = $_POST['quiz'];
        if ($quiz == 120) {
            $_SESSION['rightAnswer10_10'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score10_10'] = 1;
        }
        else {
            $_SESSION['wrongAnswer10_10'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer10_10'] = $quiz;
        }
        header("Location: pages/exam10.php#card10");
    }
}
if ($do == 'eleven') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quiz = $_POST['quiz'];
        if ($quiz == 120) {
            $_SESSION['rightAnswer11_10'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score11_10'] = 1;
        }
        else {
            $_SESSION['wrongAnswer11_10'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer11_10'] = $quiz;
        }
        header("Location: pages/exam10.php#card11");
    }
}
if ($do == 'twelve') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quiz = $_POST['quiz'];
        if ($quiz == 120) {
            $_SESSION['rightAnswer12_10'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score12_10'] = 1;
        }
        else {
            $_SESSION['wrongAnswer12_10'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer12_10'] = $quiz;
        }
        header("Location: pages/exam10.php#card12");
    }
}