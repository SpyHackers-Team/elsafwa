<?php include "../connect.php";

if (!isset($_SESSION['Username']))
    header("Location: user-login.php");

$score1 = 0;
$score2 = 0;
$score3 = 0;
$score4 = 0;
$score5 = 0;
$score6 = 0;
$score7 = 0;
$score8 = 0;
$score9 = 0;
$score10 = 0;
$score11 = 0;
$score12 = 0;

if (isset($_SESSION['score1_2']))
    $score1 = $_SESSION['score1_2'];

if (isset($_SESSION['score2_2']))
    $score2 = $_SESSION['score2_2'];

if (isset($_SESSION['score3_2']))
    $score3 = $_SESSION['score3_2'];

if (isset($_SESSION['score4_2']))
    $score4 = $_SESSION['score4_2'];

if (isset($_SESSION['score5_2']))
    $score5 = $_SESSION['score5_2'];

if (isset($_SESSION['score6_2']))
    $score6 = $_SESSION['score6_2'];

if (isset($_SESSION['score7_2']))
    $score7 = $_SESSION['score7_2'];

if (isset($_SESSION['score8_2']))
    $score8 = $_SESSION['score8_2'];

if (isset($_SESSION['score9_2']))
    $score9 = $_SESSION['score9_2'];

if (isset($_SESSION['score10_2']))
    $score10 = $_SESSION['score10_2'];

if (isset($_SESSION['score11_2']))
    $score11 = $_SESSION['score11_2'];

if (isset($_SESSION['score12_2']))
    $score12 = $_SESSION['score12_2'];

?>

<!DOCTYPE html>
<html lang="ar">
    <head>
        <title>El-Safwa car</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
        <link rel="icon" href="../img/logo-tran.png">
        <link rel="stylesheet" href="../assets/style.css">
        <link href="../fontawesome-free-6.0.0-web/css/all.min.css" rel="stylesheet">
        <link href="../fontawesome-free-6.0.0-web/css/fontawesome.min.css" rel="stylesheet">
    </head>
    <body>

        <section class="login-nav">
            <a href="../index.php"><i class="fa-solid fa-house"></i></a>
        </section>

        <!-------------------- Exam -------------------->
        <section class="exam">
            <div class="hero">
                <h1>امتحان ٢ رخصه القياده</h1>
                <div class="exam-box">
                    <div id="slide">
                        <div class="card" id="card1">
                            <h2>1 ما هي السرعة القانونية للطرق السريعة</h2>
                            <?php if (isset($_SESSION['rightAnswer1_2'])) echo $_SESSION['rightAnswer1_2']; if (isset($_SESSION['wrongAnswer1_2'])) echo $_SESSION['wrongAnswer1_2'];?>
                            <form class="grid" method="post" action="../check2.php?do=first">
                                <div class="mcq <?php if (isset($_SESSION['answer1_2']) && $_SESSION['answer1_2'] == 60) echo 'wrong_mcq';?>">
                                    <input type="radio" name="quiz" id="11" value="60">
                                    <label for="11"> 60 ك / الساعة</label>
                                </div>
                                <div class="mcq <?php if (isset($_SESSION['wrongAnswer1_2']) || isset($_SESSION['rightAnswer1_2'])) echo 'right_mcq';?>">
                                    <input type="radio" name="quiz" id="21" value="120">
                                    <label for="21"> 120 ك / ساعة </label>
                                </div>
                                <div class="mcq <?php if (isset($_SESSION['answer1_2']) && $_SESSION['answer1_2'] == 150) echo 'wrong_mcq';?>">
                                    <input type="radio" name="quiz" id="31" value="150">
                                    <label for="31"> 150 ك / ساعة</label>
                                </div>
                                <div class="mcq <?php if (isset($_SESSION['answer1_2']) && $_SESSION['answer1_2'] == 200) echo 'wrong_mcq';?>">
                                    <input type="radio" name="quiz" id="41" value="200">
                                    <label for="41"> 200 ك / ساعة</label>
                                </div>
                                <input type="submit" value="✓" class="no1 exam-submit" <?php if (isset($_SESSION['rightAnswer1_2']) || isset($_SESSION['wrongAnswer1_2'])) echo 'hidden';?>>
                            </form>

                            <div class="slidebar grid">
                                <i class="fa-solid fa-circle-up" id="downArrow"></i>
                                <i class="fa-solid fa-circle-down" id="upArrow"></i>
                            </div>
                        </div>
                        <div class="card" id="card2">
                            <h2>2 ما هي السرعة القانونية للطرق السريع</h2>
                            <?php if (isset($_SESSION['rightAnswer2_2'])) echo $_SESSION['rightAnswer2_2']; if (isset($_SESSION['wrongAnswer2_2'])) echo $_SESSION['wrongAnswer2_2'];?>
                            <form class="grid" method="post" action="../check2.php?do=second">
                                <div class="mcq <?php if (isset($_SESSION['answer2_2']) && $_SESSION['answer2_2'] == 60) echo 'wrong_mcq';?>">
                                    <input type="radio" name="quiz" id="12" value="60">
                                    <label for="12"> 60 ك / الساعة</label>
                                </div>
                                <div class="mcq <?php if (isset($_SESSION['wrongAnswer2_2']) || isset($_SESSION['rightAnswer2_2'])) echo 'right_mcq';?>">
                                    <input type="radio" name="quiz" id="22" value="120">
                                    <label for="22"> 120 ك / ساعة </label>
                                </div>
                                <div class="mcq <?php if (isset($_SESSION['answer2_2']) && $_SESSION['answer2_2'] == 150) echo 'wrong_mcq';?>">
                                    <input type="radio" name="quiz" id="32" value="150">
                                    <label for="32"> 150 ك / ساعة</label>
                                </div>
                                <div class="mcq <?php if (isset($_SESSION['answer2_2']) && $_SESSION['answer2_2'] == 200) echo 'wrong_mcq';?>">
                                    <input type="radio" name="quiz" id="42" value="200">
                                    <label for="42"> 200 ك / ساعة</label>
                                </div>
                                <input type="submit" value="✓" class="no2 exam-submit" <?php if (isset($_SESSION['rightAnswer2_2']) || isset($_SESSION['wrongAnswer2_2'])) echo 'hidden';?>>
                            </form>

                            <div class="slidebar grid">
                                <i class="fa-solid fa-circle-up" id="downArrow"></i>
                                <i class="fa-solid fa-circle-down" id="upArrow"></i>
                            </div>
                        </div>
                        <div class="card" id="card3">
                            <h2>3 ما هي السرعة القانونية للطرق السريعة</h2>
                            <?php if (isset($_SESSION['rightAnswer3_2'])) echo $_SESSION['rightAnswer3_2']; if (isset($_SESSION['wrongAnswer3_2'])) echo $_SESSION['wrongAnswer3_2'];?>
                            <form class="grid" method="post" action="../check2.php?do=third">
                                <div class="mcq <?php if (isset($_SESSION['answer3_2']) && $_SESSION['answer3_2'] == 60) echo 'wrong_mcq';?>">
                                    <input type="radio" name="quiz" id="13" value="60">
                                    <label for="13"> 60 ك / الساعة</label>
                                </div>
                                <div class="mcq <?php if (isset($_SESSION['wrongAnswer3_2']) || isset($_SESSION['rightAnswer3_2'])) echo 'right_mcq';?>">
                                    <input type="radio" name="quiz" id="23" value="120">
                                    <label for="23"> 120 ك / ساعة </label>
                                </div>
                                <div class="mcq <?php if (isset($_SESSION['answer3_2']) && $_SESSION['answer3_2'] == 150) echo 'wrong_mcq';?>">
                                    <input type="radio" name="quiz" id="33" value="150">
                                    <label for="33"> 150 ك / ساعة</label>
                                </div>
                                <div class="mcq <?php if (isset($_SESSION['answer3_2']) && $_SESSION['answer3_2'] == 200) echo 'wrong_mcq';?>">
                                    <input type="radio" name="quiz" id="43" value="200">
                                    <label for="43"> 200 ك / ساعة</label>
                                </div>
                                <input type="submit" value="✓" class="no3 exam-submit" <?php if (isset($_SESSION['rightAnswer3_2']) || isset($_SESSION['wrongAnswer3_2'])) echo 'hidden';?>>
                            </form>

                            <div class="slidebar grid">
                                <i class="fa-solid fa-circle-up" id="downArrow"></i>
                                <i class="fa-solid fa-circle-down" id="upArrow"></i>
                            </div>
                        </div>
                        <div class="card" id="card4">
                            <h2>4 ما هي السرعة القانونية للطرق السريعة</h2>
                            <?php if (isset($_SESSION['rightAnswer4_2'])) echo $_SESSION['rightAnswer4_2']; if (isset($_SESSION['wrongAnswer4_2'])) echo $_SESSION['wrongAnswer4_2'];?>
                            <form class="grid" method="post" action="../check2.php?do=fourth">
                                <div class="mcq <?php if (isset($_SESSION['answer4_2']) && $_SESSION['answer4_2'] == 60) echo 'wrong_mcq';?>">
                                    <input type="radio" name="quiz" id="14" value="60">
                                    <label for="14"> 60 ك / الساعة</label>
                                </div>
                                <div class="mcq <?php if (isset($_SESSION['wrongAnswer4_2']) || isset($_SESSION['rightAnswer4_2'])) echo 'right_mcq';?>">
                                    <input type="radio" name="quiz" id="24" value="120">
                                    <label for="24"> 120 ك / ساعة </label>
                                </div>
                                <div class="mcq <?php if (isset($_SESSION['answer4_2']) && $_SESSION['answer4_2'] == 150) echo 'wrong_mcq';?>">
                                    <input type="radio" name="quiz" id="34" value="150">
                                    <label for="34"> 150 ك / ساعة</label>
                                </div>
                                <div class="mcq <?php if (isset($_SESSION['answer4_2']) && $_SESSION['answer4_2'] == 200) echo 'wrong_mcq';?>">
                                    <input type="radio" name="quiz" id="44" value="200">
                                    <label for="44"> 200 ك / ساعة</label>
                                </div>
                                <input type="submit" value="✓" class="no4 exam-submit" <?php if (isset($_SESSION['rightAnswer4_2']) || isset($_SESSION['wrongAnswer4_2'])) echo 'hidden';?>>
                            </form>

                            <div class="slidebar grid">
                                <i class="fa-solid fa-circle-up" id="downArrow"></i>
                                <i class="fa-solid fa-circle-down" id="upArrow"></i>
                            </div>
                        </div>
                        <div class="card" id="card5">
                            <h2>5 ما هي السرعة القانونية للطرق السريعة</h2>
                            <?php if (isset($_SESSION['rightAnswer5_2'])) echo $_SESSION['rightAnswer5_2']; if (isset($_SESSION['wrongAnswer5_2'])) echo $_SESSION['wrongAnswer5_2'];?>
                            <form class="grid" method="post" action="../check2.php?do=fifth">
                                <div class="mcq <?php if (isset($_SESSION['answer5_2']) && $_SESSION['answer5_2'] == 60) echo 'wrong_mcq';?>">
                                    <input type="radio" name="quiz" id="15" value="60">
                                    <label for="15"> 60 ك / الساعة</label>
                                </div>
                                <div class="mcq <?php if (isset($_SESSION['wrongAnswer5_2']) || isset($_SESSION['rightAnswer5_2'])) echo 'right_mcq';?>">
                                    <input type="radio" name="quiz" id="25" value="120">
                                    <label for="25"> 120 ك / ساعة </label>
                                </div>
                                <div class="mcq <?php if (isset($_SESSION['answer5_2']) && $_SESSION['answer5_2'] == 150) echo 'wrong_mcq';?>">
                                    <input type="radio" name="quiz" id="35" value="150">
                                    <label for="35"> 150 ك / ساعة</label>
                                </div>
                                <div class="mcq <?php if (isset($_SESSION['answer5_2']) && $_SESSION['answer5_2'] == 200) echo 'wrong_mcq';?>">
                                    <input type="radio" name="quiz" id="45" value="200">
                                    <label for="45"> 200 ك / ساعة</label>
                                </div>
                                <input type="submit" value="✓" class="no5 exam-submit" <?php if (isset($_SESSION['rightAnswer5_2']) || isset($_SESSION['wrongAnswer5_2'])) echo 'hidden';?>>
                            </form>

                            <div class="slidebar grid">
                                <i class="fa-solid fa-circle-up" id="downArrow"></i>
                                <i class="fa-solid fa-circle-down" id="upArrow"></i>
                            </div>
                        </div>
                        <div class="card" id="card6">
                            <h2>6 ما هي السرعة القانونية للطرق السريعة</h2>
                            <?php if (isset($_SESSION['rightAnswer6_2'])) echo $_SESSION['rightAnswer6_2']; if (isset($_SESSION['wrongAnswer6_2'])) echo $_SESSION['wrongAnswer6_2'];?>
                            <form class="grid" method="post" action="../check2.php?do=sixth">
                                <div class="mcq <?php if (isset($_SESSION['answer6_2']) && $_SESSION['answer6_2'] == 60) echo 'wrong_mcq';?>">
                                    <input type="radio" name="quiz" id="16" value="60">
                                    <label for="16"> 60 ك / الساعة</label>
                                </div>
                                <div class="mcq <?php if (isset($_SESSION['wrongAnswer6_2']) || isset($_SESSION['rightAnswer6_2'])) echo 'right_mcq';?>">
                                    <input type="radio" name="quiz" id="26" value="120">
                                    <label for="26"> 120 ك / ساعة </label>
                                </div>
                                <div class="mcq <?php if (isset($_SESSION['answer6_2']) && $_SESSION['answer6_2'] == 150) echo 'wrong_mcq';?>">
                                    <input type="radio" name="quiz" id="36" value="150">
                                    <label for="36"> 150 ك / ساعة</label>
                                </div>
                                <div class="mcq <?php if (isset($_SESSION['answer6_2']) && $_SESSION['answer6_2'] == 200) echo 'wrong_mcq';?>">
                                    <input type="radio" name="quiz" id="46" value="200">
                                    <label for="46"> 200 ك / ساعة</label>
                                </div>
                                <input type="submit" value="✓" class="no6 exam-submit" <?php if (isset($_SESSION['rightAnswer6_2']) || isset($_SESSION['wrongAnswer6_2'])) echo 'hidden';?>>
                            </form>

                            <div class="slidebar grid">
                                <i class="fa-solid fa-circle-up" id="downArrow"></i>
                                <i class="fa-solid fa-circle-down" id="upArrow"></i>
                            </div>
                        </div>
                        <div class="card" id="card7">
                            <h2>7 ما هي السرعة القانونية للطرق السريعة</h2>
                            <?php if (isset($_SESSION['rightAnswer7_2'])) echo $_SESSION['rightAnswer7_2']; if (isset($_SESSION['wrongAnswer7_2'])) echo $_SESSION['wrongAnswer7_2'];?>
                            <form class="grid" method="post" action="../check2.php?do=seventh">
                                <div class="mcq <?php if (isset($_SESSION['answer7_2']) && $_SESSION['answer7_2'] == 60) echo 'wrong_mcq';?>">
                                    <input type="radio" name="quiz" id="17" value="60">
                                    <label for="17"> 60 ك / الساعة</label>
                                </div>
                                <div class="mcq <?php if (isset($_SESSION['wrongAnswer7_2']) || isset($_SESSION['rightAnswer7_2'])) echo 'right_mcq';?>">
                                    <input type="radio" name="quiz" id="27" value="120">
                                    <label for="27"> 120 ك / ساعة </label>
                                </div>
                                <div class="mcq <?php if (isset($_SESSION['answer7_2']) && $_SESSION['answer7_2'] == 150) echo 'wrong_mcq';?>">
                                    <input type="radio" name="quiz" id="37" value="150">
                                    <label for="37"> 150 ك / ساعة</label>
                                </div>
                                <div class="mcq <?php if (isset($_SESSION['answer7_2']) && $_SESSION['answer7_2'] == 200) echo 'wrong_mcq';?>">
                                    <input type="radio" name="quiz" id="47" value="200">
                                    <label for="47"> 200 ك / ساعة</label>
                                </div>
                                <input type="submit" value="✓" class="no7 exam-submit" <?php if (isset($_SESSION['rightAnswer7_2']) || isset($_SESSION['wrongAnswer7_2'])) echo 'hidden';?>>
                            </form>

                            <div class="slidebar grid">
                                <i class="fa-solid fa-circle-up" id="downArrow"></i>
                                <i class="fa-solid fa-circle-down" id="upArrow"></i>
                            </div>
                        </div>
                        <div class="card" id="card8">
                            <h2>8 ما هي السرعة القانونية للطرق السريعة</h2>
                            <?php if (isset($_SESSION['rightAnswer8_2'])) echo $_SESSION['rightAnswer8_2']; if (isset($_SESSION['wrongAnswer8_2'])) echo $_SESSION['wrongAnswer8_2'];?>
                            <form class="grid" method="post" action="../check2.php?do=eighth">
                                <div class="mcq <?php if (isset($_SESSION['answer8_2']) && $_SESSION['answer8_2'] == 60) echo 'wrong_mcq';?>">
                                    <input type="radio" name="quiz" id="18" value="60">
                                    <label for="18"> 60 ك / الساعة</label>
                                </div>
                                <div class="mcq <?php if (isset($_SESSION['wrongAnswer8_2']) || isset($_SESSION['rightAnswer8_2'])) echo 'right_mcq';?>">
                                    <input type="radio" name="quiz" id="28" value="120">
                                    <label for="28"> 120 ك / ساعة </label>
                                </div>
                                <div class="mcq <?php if (isset($_SESSION['answer8_2']) && $_SESSION['answer8_2'] == 150) echo 'wrong_mcq';?>">
                                    <input type="radio" name="quiz" id="38" value="150">
                                    <label for="38"> 150 ك / ساعة</label>
                                </div>
                                <div class="mcq <?php if (isset($_SESSION['answer8_2']) && $_SESSION['answer8_2'] == 200) echo 'wrong_mcq';?>">
                                    <input type="radio" name="quiz" id="48" value="200">
                                    <label for="48"> 200 ك / ساعة</label>
                                </div>
                                <input type="submit" value="✓" class="no8 exam-submit" <?php if (isset($_SESSION['rightAnswer8_2']) || isset($_SESSION['wrongAnswer8_2'])) echo 'hidden';?>>
                            </form>

                            <div class="slidebar grid">
                                <i class="fa-solid fa-circle-up" id="downArrow"></i>
                                <i class="fa-solid fa-circle-down" id="upArrow"></i>
                            </div>
                        </div>
                        <div class="card" id="card9">
                            <h2>9 ما هي السرعة القانونية للطرق السريعة</h2>
                            <?php if (isset($_SESSION['rightAnswer9_2'])) echo $_SESSION['rightAnswer9_2']; if (isset($_SESSION['wrongAnswer9_2'])) echo $_SESSION['wrongAnswer9_2'];?>
                            <form class="grid" method="post" action="../check2.php?do=ninth">
                                <div class="mcq <?php if (isset($_SESSION['answer9_2']) && $_SESSION['answer9_2'] == 60) echo 'wrong_mcq';?>">
                                    <input type="radio" name="quiz" id="19" value="60">
                                    <label for="19"> 60 ك / الساعة</label>
                                </div>
                                <div class="mcq <?php if (isset($_SESSION['wrongAnswer9_2']) || isset($_SESSION['rightAnswer9_2'])) echo 'right_mcq';?>">
                                    <input type="radio" name="quiz" id="29" value="120">
                                    <label for="29"> 120 ك / ساعة </label>
                                </div>
                                <div class="mcq <?php if (isset($_SESSION['answer9_2']) && $_SESSION['answer9_2'] == 150) echo 'wrong_mcq';?>">
                                    <input type="radio" name="quiz" id="39" value="150">
                                    <label for="39"> 150 ك / ساعة</label>
                                </div>
                                <div class="mcq <?php if (isset($_SESSION['answer9_2']) && $_SESSION['answer9_2'] == 200) echo 'wrong_mcq';?>">
                                    <input type="radio" name="quiz" id="49" value="200">
                                    <label for="49"> 200 ك / ساعة</label>
                                </div>
                                <input type="submit" value="✓" class="no9 exam-submit" <?php if (isset($_SESSION['rightAnswer9_2']) || isset($_SESSION['wrongAnswer9_2'])) echo 'hidden';?>>
                            </form>

                            <div class="slidebar grid">
                                <i class="fa-solid fa-circle-up" id="downArrow"></i>
                                <i class="fa-solid fa-circle-down" id="upArrow"></i>
                            </div>
                        </div>
                        <div class="card" id="card10">
                            <h2>10 ما هي السرعة القانونية للطرق السريعة</h2>
                            <?php if (isset($_SESSION['rightAnswer10_2'])) echo $_SESSION['rightAnswer10_2']; if (isset($_SESSION['wrongAnswer10_2'])) echo $_SESSION['wrongAnswer10_2'];?>
                            <form class="grid" method="post" action="../check2.php?do=tenth">
                                <div class="mcq <?php if (isset($_SESSION['answer10_2']) && $_SESSION['answer10_2'] == 60) echo 'wrong_mcq';?>">
                                    <input type="radio" name="quiz" id="10" value="60">
                                    <label for="10"> 60 ك / الساعة</label>
                                </div>
                                <div class="mcq <?php if (isset($_SESSION['wrongAnswer10_2']) || isset($_SESSION['rightAnswer10_2'])) echo 'right_mcq';?>">
                                    <input type="radio" name="quiz" id="20" value="120">
                                    <label for="20"> 120 ك / ساعة </label>
                                </div>
                                <div class="mcq <?php if (isset($_SESSION['answer10_2']) && $_SESSION['answer10_2'] == 150) echo 'wrong_mcq';?>">
                                    <input type="radio" name="quiz" id="30" value="150">
                                    <label for="30"> 150 ك / ساعة</label>
                                </div>
                                <div class="mcq <?php if (isset($_SESSION['answer10_2']) && $_SESSION['answer10_2'] == 200) echo 'wrong_mcq';?>">
                                    <input type="radio" name="quiz" id="40" value="200">
                                    <label for="40"> 200 ك / ساعة</label>
                                </div>
                                <input type="submit" value="✓" class="no10 exam-submit" <?php if (isset($_SESSION['rightAnswer10_2']) || isset($_SESSION['wrongAnswer10_2'])) echo 'hidden';?>>
                            </form>

                            <div class="slidebar grid">
                                <i class="fa-solid fa-circle-up" id="downArrow"></i>
                                <i class="fa-solid fa-circle-down" id="upArrow"></i>
                            </div>
                        </div>
                        <div class="card" id="card11">
                            <h2>11 ما هي السرعة القانونية للطرق السريعة</h2>
                            <?php if (isset($_SESSION['rightAnswer11_2'])) echo $_SESSION['rightAnswer11_2']; if (isset($_SESSION['wrongAnswer11_2'])) echo $_SESSION['wrongAnswer11_2'];?>
                            <form class="grid" method="post" action="../check2.php?do=eleven">
                                <div class="mcq <?php if (isset($_SESSION['answer11_2']) && $_SESSION['answer11_2'] == 60) echo 'wrong_mcq';?>">
                                    <input type="radio" name="quiz" id="111" value="60">
                                    <label for="111"> 60 ك / الساعة</label>
                                </div>
                                <div class="mcq <?php if (isset($_SESSION['wrongAnswer11_2']) || isset($_SESSION['rightAnswer11_2'])) echo 'right_mcq';?>">
                                    <input type="radio" name="quiz" id="211" value="120">
                                    <label for="211"> 120 ك / ساعة </label>
                                </div>
                                <div class="mcq <?php if (isset($_SESSION['answer11_2']) && $_SESSION['answer11_2'] == 150) echo 'wrong_mcq';?>">
                                    <input type="radio" name="quiz" id="311" value="150">
                                    <label for="311"> 150 ك / ساعة</label>
                                </div>
                                <div class="mcq <?php if (isset($_SESSION['answer11_2']) && $_SESSION['answer11_2'] == 200) echo 'wrong_mcq';?>">
                                    <input type="radio" name="quiz" id="411" value="200">
                                    <label for="411"> 200 ك / ساعة</label>
                                </div>
                                <input type="submit" value="✓" class="no11 exam-submit" <?php if (isset($_SESSION['rightAnswer11_2']) || isset($_SESSION['wrongAnswer11_2'])) echo 'hidden';?>>
                            </form>

                            <div class="slidebar grid">
                                <i class="fa-solid fa-circle-up" id="downArrow"></i>
                                <i class="fa-solid fa-circle-down" id="upArrow"></i>
                            </div>
                        </div>
                        <div class="card" id="card12">
                            <h2> 12 ما هي السرعة القانونية للطرق السريعة<?php if ((isset($_SESSION['rightAnswer1_2']) || isset($_SESSION['wrongAnswer1_2'])) && (isset($_SESSION['rightAnswer2_2']) || isset($_SESSION['wrongAnswer2_2'])) && (isset($_SESSION['rightAnswer3_2']) || isset($_SESSION['wrongAnswer3_2'])) && (isset($_SESSION['rightAnswer4_2']) || isset($_SESSION['wrongAnswer4_2'])) && (isset($_SESSION['rightAnswer5_2']) || isset($_SESSION['wrongAnswer5_2'])) && (isset($_SESSION['rightAnswer6_2']) || isset($_SESSION['wrongAnswer6_2'])) && (isset($_SESSION['rightAnswer7_2']) || isset($_SESSION['wrongAnswer7_2'])) && (isset($_SESSION['rightAnswer8_2']) || isset($_SESSION['wrongAnswer8_2'])) && (isset($_SESSION['rightAnswer9_2']) || isset($_SESSION['wrongAnswer9_2'])) && (isset($_SESSION['rightAnswer10_2']) || isset($_SESSION['wrongAnswer10_2'])) && (isset($_SESSION['rightAnswer11_2']) || isset($_SESSION['wrongAnswer11_2'])) && (isset($_SESSION['rightAnswer12_2']) || isset($_SESSION['wrongAnswer12_2']))) echo '<button onclick="window.location.href=\'#score\'" style="margin-right: 40px;font-size: 20px;background: #ed4134;color: #fff;border: none;padding: 10px;cursor: pointer;">Show Result</button>';?></h2>
                            <?php if (isset($_SESSION['rightAnswer12_2'])) echo $_SESSION['rightAnswer12_2']; if (isset($_SESSION['wrongAnswer12_2'])) echo $_SESSION['wrongAnswer12_2'];?>
                            <form class="grid" method="post" action="../check2.php?do=twelve">
                                <div class="mcq <?php if (isset($_SESSION['answer12_2']) && $_SESSION['answer12_2'] == 60) echo 'wrong_mcq';?>">
                                    <input type="radio" name="quiz" id="112" value="60">
                                    <label for="112"> 60 ك / الساعة</label>
                                </div>
                                <div class="mcq <?php if (isset($_SESSION['wrongAnswer12_2']) || isset($_SESSION['rightAnswer12_2'])) echo 'right_mcq';?>">
                                    <input type="radio" name="quiz" id="212" value="120">
                                    <label for="212"> 120 ك / ساعة </label>
                                </div>
                                <div class="mcq <?php if (isset($_SESSION['answer12_2']) && $_SESSION['answer12_2'] == 150) echo 'wrong_mcq';?>">
                                    <input type="radio" name="quiz" id="312" value="150">
                                    <label for="312"> 150 ك / ساعة</label>
                                </div>
                                <div class="mcq <?php if (isset($_SESSION['answer12_2']) && $_SESSION['answer12_2'] == 200) echo 'wrong_mcq';?>">
                                    <input type="radio" name="quiz" id="412" value="200">
                                    <label for="412"> 150 ك / ساعة</label>
                                </div>
                                <input type="submit" value="✓" class="no12 exam-submit" <?php if (isset($_SESSION['rightAnswer12_2']) || isset($_SESSION['wrongAnswer12_2'])) echo 'hidden';?>>
                            </form>

                            <div class="slidebar grid">
                                <a href="#card1"><i class="fa-solid fa-circle-up" id="downArrow"></i></a>
                            </div>
                        </div>
                        <div class="card" id="score">
                            <h2>النتيجة النهائية</h2>
                            <p><?php echo ($score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10 + $score11 + $score12);?>/12</p>
                            <p><?php echo ($score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10 + $score11 + $score12)/12*100; $finalScore = ($score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10 + $score11 + $score12)/12*100;?>% <span>(<?php if ($finalScore >= 80) echo 'ناجح'; else echo 'راسب';?>)</span></p>
                            <div class="next_btn">
                                <button onclick="window.location.href='exam3.php'">الاختبار التالي</button>
                            </div>
                            <div class="slidebar grid"></div>
                        </div>
                    </div>
                </div>
            </div>
         </section>
        <script src="../assets/slides.js"></script>
    </body>
</html>