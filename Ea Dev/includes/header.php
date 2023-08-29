<?php include "./config.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emmanuel Ekpo</title>

    <link rel="stylesheet" href="./assets/fonts/Butler_Stencil_Webfont/stylesheet.css">
    <link rel="stylesheet" href="./assets/fonts/Butler_Webfont/stylesheet.css">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Jost:wght@500;600;700;800;900&family=Russo+One&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="./assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="./assets/css/plugins.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/light.css">

    <link rel="stylesheet" href="./assets/icon-fonts/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="./assets/icon-fonts/remixicon/remixicon.css"> 
    <link rel="shortcut icon" href="./assets/images/ealogo1.png" type="image/x-icon">


    <link rel='stylesheet' id='syne-fonts-css' href='https://fonts.googleapis.com/css2?family=Syne%3Awght%40600%3B700%3B800&amp;display=swap&amp;ver=1.0.0' type='text/css' media='all' />
    <link rel='stylesheet' id='syne-core-css' href='wp-content/themes/syne/assets/css/syne-core1f1c.css?ver=1692441236' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-frontend-css' href='wp-content/plugins/elementor/assets/css/frontend-lite.mina44d.css?ver=3.13.4' type='text/css' media='all' />

    <link rel='stylesheet' id='elementor-post-6-css' href='wp-content/uploads/elementor/css/post-6d996.css?ver=1679799913' type='text/css' media='all' />

</head>



<body class="smooth-scroll">


    <div id="preloader" class="preloader">
        <div class="percentage">0%</div>
        <div class="progress"></div>
    </div>
    
    <div class="tavonline-overlay"></div>
    
    
    <div id="cursor">
        <i class="fa-solid fa-magnifying-glass"></i>
        <i class="ri-arrow-right-up-line"></i>
        <div class="cursor__bg"></div>
    </div>

    <div id="content-scroll" data-scrollbar>
        <div class="site-wrap" data-barba="wrapper">
        <main  data-barba="container">


        <header>
            <div class="header-container">
                <div class="row px-0 gx-0">
                    <div class="col-xl-2 col-md-6 col-6">
                        <a href="./"  class="logo"><img src="./assets/images/ealogo.png" alt="logo"  style="width: 5vh" ></a>
                    </div>
                    <div class="col-xl-10 col-md-6 col-6">
                        <div class="burger-menu" data-cursor="medium">
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

            <div class="overlay-menu">
                <div class="close">
                    <i class="ri-close-line"></i>
                </div>
                <div class="row overlay-wrap">
                    <div class="col-xl-8 col-md-7 left-area">
                        <nav>
                            <ul>
                                <li class="menu-item-has-children">
                                    <a href="index.php">Home</a>
                                </li>
                                <li class="menu-item-has-children"><a href="about.php">About</a></li>
                                <li class="menu-item-has-children"><a href="projects-grid.php">Portfolio</a></li>
                                <li class="menu-item-has-children"><a href="contact.php">Reach Me</a></li>
                            </ul>
                        </nav> 
                    </div>
                    <div class="col-xl-4 col-md-5 right-area">
                        <ul>
                            <li><span class="title">Brief Me</span></li>
                            <li><a href="mailto:ekpoemmanuelsg@gmail.com" target="_blank">ekpoemmanuelsg@gmail.com</a></li>
                            <li><a href="tel:2363355823" target="_blank">Tel. +1 236 335 5823</a></li>
                        </ul>
                        <ul>
                            <li style="transform: translateX(-12%);"><?php include "./components/resume.php" ?> <!-- RESUME --></li>
                        </ul>
                        <ul>
                            <li><span class="title">Follow me</span></li>
                            <li>
                                <ul class="social-links">
                                    <?php foreach($socialLinks as $i) : ?>
                                        <li><a href="<?php echo $i['url'] ?>" target="_blank"><?php echo $i['title'] ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>