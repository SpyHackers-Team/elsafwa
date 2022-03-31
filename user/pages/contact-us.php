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
            <!-------------------- Navbar -------------------->
        <nav class="navbar grid">
            <i class="fa-solid fa-list-ul" id="menuIcon1"></i>
            <ul class="menuList grid" id="menuList">
                <i class="fa-solid fa-xmark" id="menuIcon2"></i>
                <li><a href="../index.php">الرئيسية</a></li>
                <li><a href="Beginner's-course.html">انواع الكورسات <i class="fa-solid fa-angle-down" style="display: initial; font-size: 14px"></i></a>
                    <ul>
                        <li><a href="Beginner's-course.html">كورس المبتدئين</a></li>
                        <li><a href="Exercise-course.html">كورس ممارسة ( تكميلى )</a></li>
                        <li><a href="Professional-course.html">كورس محترفين</a></li>
                        <li><a href="private-course.html">كورس مخصص</a></li>
                    </ul>
                </li>
                <li><a href="driver's-license.html">استخراج رخصة القيادة</a></li>
                <li class="active"><a href="contact-us.php">اتصل بنا</a></li>
            </ul>
            <img src="../img/logo-tran.png">
        </nav>
            <!-------------------- Contact-us -------------------->
        <section class="contact-us grid">
            <div class="section-title">
                <h2>اتصل بنا</h2>
                <p><a href="../index.php"><i class="fa-solid fa-house-chimney"></i> الرئيسية</a> / اتصل بنا</p>
            </div>
            <div class="contact-content grid">
                <img src="../img/01.png">
                <div class="grid">
                    <h1>مركز الصفوة لتعليم قيادة السيارات</h1>
                    <p>التدريب على قيادة السياراة بجميع مناطيق الاسكندرية والتدريب وسط الزحام والطرق الوعرة والسريعة</p>
                    <h2>يمكنكم الحجز من خلال احد مقراتنا </h2>
                    <p>فرع سموحة : بجوار مديرية أمن اسكندرية أول كوبري 14 مايو عماره رقم 119 الدور الارضى</p>
                    <p>فرع  فيكتوريا : 14 شارع الجلاء فوق مستشفى الثغر – مجمع فيكتوريا التجارى – الدور الخامس</p>
                    <h2>للاستعلام عبر التليفون على</h2>
                    <p>034267812</p>
                    <p>01100129129</p>
                    <p>01201771643</p>
                </div>
            </div>
            <div class="booking-form grid">
                <h1>استمارة الحجز</h1>
                <form class="grid" method="post" action="reserve.php">
                    <div class="grid">
                        <input type="text" name="name" placeholder="الاسم" required>
                        <input type="tel" name="phone" placeholder="رقم الهاتف" required maxlength="11">
                    </div>
                    <div class="grid">
                        <select style="border: solid 1px;cursor: pointer;" name="reserve_day" required>
                            <option value="السبت">السبت</option>
                            <option value="الأحد">الأحد</option>
                            <option value="الإثنين">الإثنين</option>
                            <option value="الثلاثاء">الثلاثاء</option>
                            <option value="الأربعاء">الأربعاء</option>
                            <option value="الخميس">الخميس</option>
                        </select>
                        <select style="border: solid 1px;cursor: pointer;" name="reserve_time" required>
                            <option value="من ١١ الى ١٢">من ١١ الى ١٢</option>
                            <option value="من ١٢ الى ١">من ١٢ الى ١</option>
                            <option value="من ١ الى ٢">من ١ الى ٢</option>
                            <option value="من ٢ الى ٣">من ٢ الى ٣</option>
                            <option value="من ٣ الى ٤">من ٣ الى ٤</option>
                            <option value="من ٤ الى ٥">من ٤ الى ٥</option>
                            <option value="من ٥ الى ٦">من ٥ الى ٦</option>
                            <option value="من ٦ الى ٧">من ٦ الى ٧</option>
                            <option value="من ٧ الى ٨">من ٧ الى ٨</option>
                        </select>
                    </div>
                    <input type="submit" name="submit" value="ارسال">
                </form>
            </div>
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
        <script src="../assets/Navbar.js"></script>
    </body>
</html>