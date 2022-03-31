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
            $_SESSION['rightAnswer1_4'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score1_4'] = 1;
        }
        else {
            $_SESSION['wrongAnswer1_4'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer1_4'] = $quiz;
        }
        header("Location: pages/exam4.php#card1");
    }
}
if ($do == 'second') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quiz = $_POST['quiz'];
        if ($quiz == 120) {
            $_SESSION['rightAnswer2_4'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score2_4'] = 1;
        }
        else {
            $_SESSION['wrongAnswer2_4'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer2_4'] = $quiz;
        }
        header("Location: pages/exam4.php#card2");
    }
}
if ($do == 'third') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quiz = $_POST['quiz'];
        if ($quiz == 120) {
            $_SESSION['rightAnswer3_4'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score3_4'] = 1;
        }
        else {
            $_SESSION['wrongAnswer3_4'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer3_4'] = $quiz;
        }
        header("Location: pages/exam4.php#card3");
    }
}
if ($do == 'fourth') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quiz = $_POST['quiz'];
        if ($quiz == 120) {
            $_SESSION['rightAnswer4_4'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score4_4'] = 1;
        }
        else {
            $_SESSION['wrongAnswer4_4'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer4_4'] = $quiz;
        }
        header("Location: pages/exam4.php#card4");
    }
}
if ($do == 'fifth') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quiz = $_POST['quiz'];
        if ($quiz == 120) {
            $_SESSION['rightAnswer5_4'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score5_4'] = 1;
        }
        else {
            $_SESSION['wrongAnswer5_4'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer5_4'] = $quiz;
        }
        header("Location: pages/exam4.php#card5");
    }
}
if ($do == 'sixth') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quiz = $_POST['quiz'];
        if ($quiz == 120) {
            $_SESSION['rightAnswer6_4'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score6_4'] = 1;
        }
        else {
            $_SESSION['wrongAnswer6_4'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer6_4'] = $quiz;
        }
        header("Location: pages/exam4.php#card6");
    }
}
if ($do == 'seventh') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quiz = $_POST['quiz'];
        if ($quiz == 120) {
            $_SESSION['rightAnswer7_4'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score7_4'] = 1;
        }
        else {
            $_SESSION['wrongAnswer7_4'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer7_4'] = $quiz;
        }
        header("Location: pages/exam4.php#card7");
    }
}
if ($do == 'eighth') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quiz = $_POST['quiz'];
        if ($quiz == 120) {
            $_SESSION['rightAnswer8_4'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score8_4'] = 1;
        }
        else {
            $_SESSION['wrongAnswer8_4'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer8_4'] = $quiz;
        }
        header("Location: pages/exam4.php#card8");
    }
}
if ($do == 'ninth') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quiz = $_POST['quiz'];
        if ($quiz == 120) {
            $_SESSION['rightAnswer9_4'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score9_4'] = 1;
        }
        else {
            $_SESSION['wrongAnswer9_4'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer9_4'] = $quiz;
        }
        header("Location: pages/exam4.php#card9");
    }
}
if ($do == 'tenth') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quiz = $_POST['quiz'];
        if ($quiz == 120) {
            $_SESSION['rightAnswer10_4'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score10_4'] = 1;
        }
        else {
            $_SESSION['wrongAnswer10_4'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer10_4'] = $quiz;
        }
        header("Location: pages/exam4.php#card10");
    }
}
if ($do == 'eleven') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quiz = $_POST['quiz'];
        if ($quiz == 120) {
            $_SESSION['rightAnswer11_4'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score11_4'] = 1;
        }
        else {
            $_SESSION['wrongAnswer11_4'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer11_4'] = $quiz;
        }
        header("Location: pages/exam4.php#card11");
    }
}
if ($do == 'twelve') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quiz = $_POST['quiz'];
        if ($quiz == 120) {
            $_SESSION['rightAnswer12_4'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score12_4'] = 1;
        }
        else {
            $_SESSION['wrongAnswer12_4'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer12_4'] = $quiz;
        }
        header("Location: pages/exam4.php#card12");
    }
}