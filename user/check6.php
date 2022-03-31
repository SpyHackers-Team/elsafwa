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
            $_SESSION['rightAnswer1_6'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score1_6'] = 1;
        }
        else {
            $_SESSION['wrongAnswer1_6'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer1_6'] = $quiz;
        }
        header("Location: pages/exam6.php#card1");
    }
}
if ($do == 'second') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quiz = $_POST['quiz'];
        if ($quiz == 120) {
            $_SESSION['rightAnswer2_6'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score2_6'] = 1;
        }
        else {
            $_SESSION['wrongAnswer2_6'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer2_6'] = $quiz;
        }
        header("Location: pages/exam6.php#card2");
    }
}
if ($do == 'third') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quiz = $_POST['quiz'];
        if ($quiz == 120) {
            $_SESSION['rightAnswer3_6'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score3'] = 1;
        }
        else {
            $_SESSION['wrongAnswer3_6'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer3'] = $quiz;
        }
        header("Location: pages/exam6.php#card3");
    }
}
if ($do == 'fourth') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quiz = $_POST['quiz'];
        if ($quiz == 120) {
            $_SESSION['rightAnswer4_6'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score4'] = 1;
        }
        else {
            $_SESSION['wrongAnswer4_6'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer4_6'] = $quiz;
        }
        header("Location: pages/exam6.php#card4");
    }
}
if ($do == 'fifth') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quiz = $_POST['quiz'];
        if ($quiz == 120) {
            $_SESSION['rightAnswer5_6'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score5_6'] = 1;
        }
        else {
            $_SESSION['wrongAnswer5_6'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer5_6'] = $quiz;
        }
        header("Location: pages/exam6.php#card5");
    }
}
if ($do == 'sixth') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quiz = $_POST['quiz'];
        if ($quiz == 120) {
            $_SESSION['rightAnswer6_6'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score6_6'] = 1;
        }
        else {
            $_SESSION['wrongAnswer6_6'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer6_6'] = $quiz;
        }
        header("Location: pages/exam6.php#card6");
    }
}
if ($do == 'seventh') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quiz = $_POST['quiz'];
        if ($quiz == 120) {
            $_SESSION['rightAnswer7_6'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score7_6'] = 1;
        }
        else {
            $_SESSION['wrongAnswer7_6'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer7_6'] = $quiz;
        }
        header("Location: pages/exam6.php#card7");
    }
}
if ($do == 'eighth') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quiz = $_POST['quiz'];
        if ($quiz == 120) {
            $_SESSION['rightAnswer8_6'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score8_6'] = 1;
        }
        else {
            $_SESSION['wrongAnswer8_6'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer8_6'] = $quiz;
        }
        header("Location: pages/exam6.php#card8");
    }
}
if ($do == 'ninth') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quiz = $_POST['quiz'];
        if ($quiz == 120) {
            $_SESSION['rightAnswer9_6'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score9_6'] = 1;
        }
        else {
            $_SESSION['wrongAnswer9_6'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer9_6'] = $quiz;
        }
        header("Location: pages/exam6.php#card9");
    }
}
if ($do == 'tenth') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quiz = $_POST['quiz'];
        if ($quiz == 120) {
            $_SESSION['rightAnswer10_6'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score10_6'] = 1;
        }
        else {
            $_SESSION['wrongAnswer10_6'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer10_6'] = $quiz;
        }
        header("Location: pages/exam6.php#card10");
    }
}
if ($do == 'eleven') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quiz = $_POST['quiz'];
        if ($quiz == 120) {
            $_SESSION['rightAnswer11_6'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score11_6'] = 1;
        }
        else {
            $_SESSION['wrongAnswer11_6'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer11_6'] = $quiz;
        }
        header("Location: pages/exam6.php#card11");
    }
}
if ($do == 'twelve') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quiz = $_POST['quiz'];
        if ($quiz == 120) {
            $_SESSION['rightAnswer12_6'] = '<span style="color: #0f0;font-size: 20px;">إجابة صحيحة</span>';
            $_SESSION['score12_6'] = 1;
        }
        else {
            $_SESSION['wrongAnswer12_6'] = '<span style="color: #f00;font-size: 20px;">إجابة خاطئة</span>';
            $_SESSION['answer12_6'] = $quiz;
        }
        header("Location: pages/exam6.php#card12");
    }
}