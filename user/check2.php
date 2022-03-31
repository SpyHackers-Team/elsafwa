<?php

session_start();

$do = '';
if (isset($_GET['do']))
    $do = $_GET['do'];
else header("index.php");

$count1 = 0;
$count2 = 0;
$count3 = 0;
$count4 = 0;
$count5 = 0;
$count6 = 0;
$count7 = 0;
$count8 = 0;
$count9 = 0;
$count10 = 0;
$count11 = 0;
$count12 = 0;

if ($do == 'first') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quiz = $_POST['quiz'];
        if ($quiz == 120) {
            $_SESSION['rightAnswer1_2'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score1_2'] = 1;
        }
        else {
            $_SESSION['wrongAnswer1_2'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer1_2'] = $quiz;
        }
        header("Location: pages/exam2.php#card1");
    }
}
if ($do == 'second') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quiz = $_POST['quiz'];
        if ($quiz == 120) {
            $_SESSION['rightAnswer2_2'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score2_2'] = 1;
        }
        else {
            $_SESSION['wrongAnswer2_2'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer2_2'] = $quiz;
        }
        header("Location: pages/exam2.php#card2");
    }
}
if ($do == 'third') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quiz = $_POST['quiz'];
        if ($quiz == 120) {
            $_SESSION['rightAnswer3_2'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score3_2'] = 1;
        }
        else {
            $_SESSION['wrongAnswer3_2'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer3_2'] = $quiz;
        }
        header("Location: pages/exam2.php#card3");
    }
}
if ($do == 'fourth') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quiz = $_POST['quiz'];
        if ($quiz == 120) {
            $_SESSION['rightAnswer4_2'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score4_2'] = 1;
        }
        else {
            $_SESSION['wrongAnswer4_2'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer4_2'] = $quiz;
        }
        header("Location: pages/exam2.php#card4");
    }
}
if ($do == 'fifth') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quiz = $_POST['quiz'];
        if ($quiz == 120) {
            $_SESSION['rightAnswer5_2'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score5_2'] = 1;
        }
        else {
            $_SESSION['wrongAnswer5_2'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer5_2'] = $quiz;
        }
        header("Location: pages/exam2.php#card5");
    }
}
if ($do == 'sixth') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quiz = $_POST['quiz'];
        if ($quiz == 120) {
            $_SESSION['rightAnswer6_2'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score6_2'] = 1;
        }
        else {
            $_SESSION['wrongAnswer6_2'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer6_2'] = $quiz;
        }
        header("Location: pages/exam2.php#card6");
    }
}
if ($do == 'seventh') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quiz = $_POST['quiz'];
        if ($quiz == 120) {
            $_SESSION['rightAnswer7_2'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score7_2'] = 1;
        }
        else {
            $_SESSION['wrongAnswer7_2'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer7_2'] = $quiz;
        }
        header("Location: pages/exam2.php#card7");
    }
}
if ($do == 'eighth') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quiz = $_POST['quiz'];
        if ($quiz == 120) {
            $_SESSION['rightAnswer8_2'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score8_2'] = 1;
        }
        else {
            $_SESSION['wrongAnswer8_2'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer8_2'] = $quiz;
        }
        header("Location: pages/exam2.php#card8");
    }
}
if ($do == 'ninth') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quiz = $_POST['quiz'];
        if ($quiz == 120) {
            $_SESSION['rightAnswer9_2'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score9_2'] = 1;
        }
        else {
            $_SESSION['wrongAnswer9_2'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer9_2'] = $quiz;
        }
        header("Location: pages/exam.php#card9");
    }
}
if ($do == 'tenth') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quiz = $_POST['quiz'];
        if ($quiz == 120) {
            $_SESSION['rightAnswer10_2'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score10_2'] = 1;
        }
        else {
            $_SESSION['wrongAnswer10_2'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer10_2'] = $quiz;
        }
        header("Location: pages/exam2.php#card10");
    }
}
if ($do == 'eleven') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quiz = $_POST['quiz'];
        if ($quiz == 120) {
            $_SESSION['rightAnswer11_2'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score11_2'] = 1;
        }
        else {
            $_SESSION['wrongAnswer11_2'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer11_2'] = $quiz;
        }
        header("Location: pages/exam2.php#card11");
    }
}
if ($do == 'twelve') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quiz = $_POST['quiz'];
        if ($quiz == 120) {
            $_SESSION['rightAnswer12_2'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score12'] = 1;
        }
        else {
            $_SESSION['wrongAnswer12_2'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer12'] = $quiz;
        }
        header("Location: pages/exam2.php#card12");
    }
}