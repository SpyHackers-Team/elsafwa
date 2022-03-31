<?php
session_start();
session_unset();
session_destroy();?>

<!DOCTYPE html>
<html lang="ar">
    <head>
        <title>El-Safwa car</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
        <link rel="icon" href="img/logo-tran.png">
        <link rel="stylesheet" href="assets/style.css">
        <link href="fontawesome-free-6.0.0-web/css/all.min.css" rel="stylesheet">
        <link href="fontawesome-free-6.0.0-web/css/fontawesome.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    </head>
    <body>
            <!-------------------- Navbar -------------------->
        <nav class="navbar grid">
            <i class="fa-solid fa-list-ul" id="menuIcon1"></i>
            <ul class="menuList grid" id="menuList">
                <i class="fa-solid fa-xmark" id="menuIcon2"></i>
                <li class="active"><a href="index.php">الرئيسية</a></li>
                <li><a href="pages/Beginner's-course.html">انواع الكورسات <i class="fa-solid fa-angle-down" style="display: initial; font-size: 14px"></i></a>
                    <ul>
                        <li><a href="pages/Beginner's-course.html">كورس المبتدئين</a></li>
                        <li><a href="pages/Exercise-course.html">كورس ممارسة ( تكميلى )</a></li>
                        <li><a href="pages/Professional-course.html">كورس محترفين</a></li>
                        <li><a href="pages/private-course.html">كورس مخصص</a></li>
                    </ul>
                </li>
                <li><a href="pages/driver's-license.html">استخراج رخصة القيادة</a></li>
                <li><a href="pages/contact-us.php">اتصل بنا</a></li>
            </ul>
            <img src="img/logo-tran.png">
        </nav>
            <!-------------------- Haeder -------------------->
        <header>
            <img src="img/02.png" class="header-bg">
            <img src="img/maxresdefault.jpg" class="header-mask">
            <div class="intro grid">
                <h1>اكاديمية الصفوة</h1>
                <p>لتعليم قيادة السيارات بالاسكندرية</p>
                <p>مدرسة متخصصة لتعليم مبادئ واساسيات وفنيات تعليم قيادة السيارات باسكندرية على يد خبراء ومدربين ومدربات متخصصون من الشباب الخبرة فى مجال تعليم القيادة</p>
            </div>
        </header>
            <!------------------- Courses -------------------->
        <section class="courses grid">
            <h1>انواع الكورسات</h1>
            <p>اكاديمة الصفوة لتعليم قيادة السيارات بالاسكندرية تقدم مجموعة من الكورسات تناسب جميع المستويات بأعلى مستوى من الكفاءة على يد امهر المدربين والمدربات بسيارات حديثة مانوال واتوماتك</p>
            <div class="courses-item grid">
                <div class="child">
                    <div class="face grid">
                        <i class="fa-solid fa-gauge-high"></i>
                        <h2>كورس محترفين</h2>
                    </div>
                    <div class="back grid">
                        <h3> كورس محترفين : كورس يشمل مهارات وفنيات متقدمة متخصصة لمن يتقدمون الى وظائف مثل السائقين الدرجة الاولى والتانية والمهنية والتالتة
                        </h3>
                        <a href="pages/Professional-course.html" class="btn btn1">...للمزيد</a>
                        <i class="fa-solid fa-gauge-high"></i>
                    </div>
                </div>
                <div class="child">
                    <div class="face grid">
                        <i class="fa-solid fa-car"></i>
                        <h2>كورس المبتدئين</h2>
                    </div>
                    <div class="back grid">
                        <h3>كورس المبتدئين لتعليم سواقة السيارات : كورس مخصص للمبتدئين فى تعلم السواقة دون ادنى معرفة مسبقة بالقيادة والسواقة </h3>
                        <a href="pages/Beginner's-course.html" class="btn btn1">...للمزيد</a>
                        <i class="fa-solid fa-car"></i>
                    </div>
                </div>
                <div class="child">
                    <div class="face grid">
                        <i class="fa-solid fa-road"></i>
                        <h2>كورس ممارسة ( تكميلى )</h2>
                    </div>
                    <div class="back grid">
                        <h3> كورس ممارسة ( تكميلى ) : هو كورس ممارسة لايتقيد بعدد من الحصص وهو لمن لديهم معرفة مسبقة بفنيات القيادة والاساسيات ولديهم الرهبة </h3>
                        <a href="pages/Exercise-course.html" class="btn btn1">...للمزيد</a>
                        <i class="fa-solid fa-road"></i>
                    </div>
                </div>
            </div>
        </section>
            <!------------------- Driver's license -------------------->
        <section class="license grid">
            <img src="img/MG_0055.png">
            <div class="grid">
                <h2>استخراج رخصة القيادة</h2>
                <p>اكاديمية الصفوة لتعليم قيادة السيارات تؤهلك تأهيل تام لاجتياز اختبارات استخارج الرخصة واجتياز الاختبار النظرى والعملى للرخصة الخاصة والمهنية اجتياز تام كما يمكنك دخول نموذج للاختبار النظرى للرخصة المصرية من خلال موقعنا</p>
                <div class="buttons grid">
                    <a href="pages/driver's-license.html" class="btn btn2">استخراج رخصة القيادة</a>
                    <a href="pages/get-license.html" class="btn btn2">الاوراق المطلوبة لاستخراج الرخصة</a>
                    <a href="pages/user-login.php" class="btn btn2">امتحان رخصة القيادة</a>
                </div>
            </div>
        </section>
            <!------------------- Different cars -------------------->
        <section class="cars">
            <div class="counter-up">
                <div class="content">
                    <div class="box">
                        <i class="fa-solid fa-users"></i>
                        <h2 class="counter">11</h2>
                        <p>عدد المدربين</p>
                    </div>
                    <div class="box">
                        <i class="fa-solid fa-car-side"></i>
                        <h2 class="counter">11</h2>
                        <p>عدد السيارات</p>
                    </div>
                    <div class="box">
                        <i class="fa-solid fa-flag"></i>
                        <h2 class="counter">6</h2>
                        <p>اماكن التدريب</p>
                    </div>
                    <div class="box">
                        <i class="fa-solid fa-user-check"></i>
                        <h2 class="counter">21055</h2>
                        <p>عدد المتدربين</p>
                    </div>
                </div>
            </div>
        </section>
        <!------------------- Training places -------------------->
        <section class="training-places grid">
            <h1>اماكن التدريب</h1>
            <p>التدريب بجميع شوارع اسكندرية الرئيسية : سموحة - المعمورة - الهانوفيل - سيدى بشر - البيطاش - ابو قير - المنتزه - المندرة - محرم بك - الطريق الزراعى - طريق الكورنيش - طريق ابوقير - الصحراوى</p>
        </section>
        <!------------------- Footer -------------------->
        <footer class="footer grid">
            <div class="footer-content grid">
                <h1>مدربين على اعلى مستوى من الخبرة</h1>
                <p>يتميز مركز الصفوة لتعليم قيادة السيارات بالاسكندرية بوجودة نخبة مميزة من افضل المدربين والمدربات الذين لديهم خبرة وباع طويل فى التدريب على السواقة وفق منهج اكاديمى مدروس يؤهلك للتعامل مع كل الظروف والطرق</p>
            </div>
            <div class="copy-rigth">
                <p>El-Safwa Car - Total by SPYteam</p>
            </div>
        </footer>
        <script src="assets/script.js"></script>
        <script src="assets/Navbar.js"></script>
    </body>
</html>