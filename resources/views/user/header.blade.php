
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resume</title>
    <link rel="icon" href="img/fatimalakhal.jpg" type="image/x-icon">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/aos.css" rel="stylesheet">
    <!-- main style -->
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!-- Preloader -->
<div id="preloader">
    <div id="status">

        <div class="preloader" aria-busy="true" aria-label="Loading, please wait." role="progressbar">
        </div>

    </div>
</div>
<!-- ./Preloader -->

<!-- header -->
<header class="navbar-fixed-top">
    <nav style="background: #111116; display: flex; align-items: center; padding: 10px; justify-content: space-between;">
        <div class="navbar-toggler" id="mobile-menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
        <h1 style="color: blue; margin-left: 100px; padding-bottom: 10px; font-size: 20px; white-space: nowrap;"> < / > CODING < / > </h1>
        <ul id="nav-list">
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="{{'#about'}}">About</a></li>
            <li><a href="{{'#skills'}}">Skills</a></li>
            <li><a href="{{'#projects'}}">Projects</a></li>
            <li><a href="{{'#contact'}}">Contact</a></li>
        </ul>
    </nav>

</header>


<!-- ./header -->

<!-- home -->
<div class="section" id="home" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="disply-table">
            <div class="table-cell" data-aos="fade-up" data-aos-delay="0">
                <h4 style="color:#3f729b;">Fatima Lakhal</h4>
                <h1 style="color:white;">BACK-END -<br />  DEVELOPER </h1> </div>
        </div>
    </div>
</div>

<style>
    .navbar-toggler {
        display: none; /* مخفي في الشاشات الكبيرة */
        flex-direction: column;
        cursor: pointer;
        padding: 10px;
    }




    .navbar-toggler .bar {
        height: 3px;
        width: 25px;
        background: white;
        margin: 4px;
    }

    /* إخفاء القائمة بشكل افتراضي على الشاشات الكبيرة */
    nav {
        display: flex;
        justify-content: center; /* توسيط العناصر بشكل كامل */
        align-items: center; /* محاذاة العناصر عمودياً */
        width: 100%; /* تأكد من أن شريط التنقل يمتد على كامل العرض */
    }

    #nav-list {
        display: flex;
        flex-direction: row; /* عرض العناصر في صف */
        justify-content: center; /* توسيط العناصر في القائمة */
        padding: 0; /* إزالة الحشو */
        margin: 0 50px 0 0; /* إضافة مسافة من اليمين */
    }

    #nav-list li {
        margin: 0 15px; /* إضافة مسافات بين العناصر بشكل أفقي */
    }


    @media (max-width: 768px) {
        #nav-list {
            display: none; /* إخفاء القائمة بشكل افتراضي */
            flex-direction: column;
            width: 4%;
            top: 60px; /* تعديل حسب ارتفاع شريط التنقل */
        }

        .navbar-toggler {
            display: flex; /* عرض الزر على الشاشات الصغيرة */
            position: absolute; /* يجعل الزر في موضع ثابت */
            top: 15px; /* ضبط المسافة من الأعلى */
            right: 10px; /* ضبط المسافة من اليمين */
            z-index: 1000; /* التأكد من أن الزر فوق العناصر الأخرى */
            margin-right: 50px;
            margin-top: 15px;
        }




        h1 {
            font-size: 16px; /* حجم خط أصغر */
            margin-right: 50px; /* إزالة الهوامش */
            padding-bottom: 15px; /* تقليل الحشو */
            text-align: left; /* محاذاة النص إلى اليسار */
            width: 100%; /* تأكد من أن h1 يمتد عبر العرض الكامل */
            order: -10; /* لجعل h1 يظهر أولاً في flexbox */
        }


        nav {
            flex-direction: column; /* تغيير الاتجاه إلى عمودي */
            align-items: center; /* توسيط العناصر */
        }

        #nav-list.active {
            display: flex; /* إظهار القائمة عند تفعيلها */
        }
        #nav-list {
            flex-direction: column; /* عرض عناصر القائمة عمودياً */
            padding: 0; /* إزالة الحشو */
        }

        #nav-list li {
            margin: 1px 0; /* إضافة مسافات بين العناصر */
            text-align: right; /* محاذاة النص إلى اليمين */
        }



    }
</style>



    <script>
        const mobileMenu = document.getElementById('mobile-menu');
        const navList = document.getElementById('nav-list');

        mobileMenu.addEventListener('click', () => {
        navList.classList.toggle('show');
    });
</script>

