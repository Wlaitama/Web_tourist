<?php
    require "../client/Sign_up_files/include/db_connect.php";
    require_once "Home_files/include/db_connect.php"; 

?>
<!DOCTYPE html>
<html data-ng-app="website" lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"><style type="text/css">
[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}.ng-animate-shim{visibility:hidden;}.ng-anchor{position:absolute;}</style>
            <meta charset="utf-8">
        <title>Путешествие</title>
        <link rel="SHORTCUT ICON" href="favicon_1132.ico" type="image/vnd.microsoft.icon">                                 
<link rel="canonical" href="Tours.php">
<meta property="og:title" content="Tours">
<meta property="og:type" content="website">
                            <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    
            <link rel="stylesheet" href="Tours_files/assets.css">
            <script src="https://kit.fontawesome.com/5bc6752132.js" crossorigin="anonymous"></script>
        <style>
@import url(//fonts.googleapis.com/css?family=Lora:regular,italic,700,700italic|Merriweather:300,300italic,regular,italic,700,700italic,900,900italic|Mr+Dafoe:regular|Open+Sans:300,300italic,regular,italic,600,600italic,700,700italic,800,800italic&subset=latin-ext,cyrillic,cyrillic-ext,vietnamese,latin,greek,greek-ext);
</style>
        <link rel="stylesheet" href="Tours_files/styles.css" id="moto-website-style"> 
</head>
<body class="moto-background moto-website_live">
        
    <div class="page">

        <header id="section-header" class="header moto-section" data-widget="section" data-container="section">
                                    <div class="moto-widget moto-widget-block moto-bg-color5_5 moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto" data-widget="block" data-spacing="sasa" style="background-color:;" data-bg-position="left top">
    
    <div class="container-fluid">
        <div class="row">
            <div class="moto-cell col-sm-12" data-container="container">
                
            <div data-widget-id="wid_1581490767_qqi7e8u99" class="moto-widget moto-widget-spacer moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto moto-visible-on_tablet_hidden moto-visible-on_mobile-h_hidden moto-visible-on_mobile-v_hidden" data-widget="spacer" data-preset="default" data-spacing="aaaa" data-visible-on="+desktop">
    <div class="moto-widget-spacer-block" style="height:15px"></div>
</div><div class="moto-widget moto-widget-container undefined moto-container_header_5e43a1fc2 moto-sticky__bootstrapped" data-visible-on="" data-widget="container" data-container="container" data-css-name="moto-container_header_5e43a1fc2" data-bg-position="left top" data-moto-sticky="{}" style="">
    
    
    
<div class="moto-widget moto-widget-row row-fixed moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto moto-justify-content_center" data-grid-type="sm" data-widget="row" data-spacing="aaaa" style="" data-bg-position="left top" data-visible-on="-">
    
    <div class="container-fluid">
        <div class="row" data-container="container">
            
                
                    <div class="moto-widget moto-widget-row__column moto-cell col-sm-2" data-widget="row.column" data-bgcolor-class="" data-container="container" style="" data-bg-position="left top">
    
<div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="aaaa" data-animation="">
    <div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_system_1"><span class="moto-color1_3"></span><a href="Home.php" data-action="page" data-id="1" class="moto-link"><span class="moto-color1_3">GrodnoTravel</span></a><span class="moto-color1_3"></span><br></p></div>
</div></div><div class="moto-widget moto-widget-row__column moto-cell col-sm-10" data-widget="row.column" data-bgcolor-class="" data-container="container" style="" data-bg-position="left top">
    
<div data-widget-id="wid__menu__5e43a18592daf" class="moto-widget moto-widget-menu moto-preset-2 moto-align-right moto-align-center_mobile-h moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-preset="2" data-widget="menu">
            <a href="#" class="moto-widget-menu-toggle-btn"><i class="moto-widget-menu-toggle-btn-icon fa fa-bars"></i></a>
        <ul class="moto-widget-menu-list moto-widget-menu-list_horizontal">
            <li class="moto-widget-menu-item">
            <a href="Home.php" data-action="page" class="moto-widget-menu-link moto-widget-menu-link-level-1 moto-link">Главная</a>
        </li><li class="moto-widget-menu-item moto-widget-menu-item-has-submenu">
    <a href="About_us.php" data-action="page" class="moto-widget-menu-link moto-widget-menu-link-level-1 moto-widget-menu-link-submenu moto-widget-menu-link-active moto-link">О нас<span class="fa moto-widget-menu-link-arrow"></span></a>
                <ul class="moto-widget-menu-sublist">
                    <li class="moto-widget-menu-item">
    <a href="FAQ.php" data-action="page" class="moto-widget-menu-link moto-widget-menu-link-level-2 moto-link">FAQ</a>
        </li>
                    <li class="moto-widget-menu-item moto-widget-menu-item-has-submenu">
    <a href="Events.php" data-action="page" class="moto-widget-menu-link moto-widget-menu-link-level-2 moto-widget-menu-link-submenu moto-link">Факты<span class="fa moto-widget-menu-link-arrow"></span></a>
                <ul class="moto-widget-menu-sublist">
                    <li class="moto-widget-menu-item">
    <a href="Contacts.php" data-action="page" class="moto-widget-menu-link moto-widget-menu-link-level-3 moto-link">Контакты</a>
        </li>
            </ul>

        </li>
                    <li class="moto-widget-menu-item">
    <a href="Testimonials.php" data-action="page" class="moto-widget-menu-link moto-widget-menu-link-level-2 moto-link">Рекомендации</a>
        </li>
            </ul>

        </li><li class="moto-widget-menu-item">
    <a href="Tours.php" data-action="page" class="moto-widget-menu-link moto-widget-menu-link-level-1 moto-link">Путешествие</a>
        </li><li class="moto-widget-menu-item">
    <a href="Gallery.php" data-action="page" class="moto-widget-menu-link moto-widget-menu-link-level-1 moto-link">Галерея</a>
        </li><li class="moto-widget-menu-item">
    <a href="Services.php" data-action="page" class="moto-widget-menu-link moto-widget-menu-link-level-1 moto-link">Сервисы</a>
        </li><li class="moto-widget-menu-item">
    <a href="Our Team.php" data-action="page" class="moto-widget-menu-link moto-widget-menu-link-level-1 moto-link">Наша команда</a>
        </li><li class="moto-widget-menu-item">
    <a href="Contacts.php" data-action="page" class="moto-widget-menu-link moto-widget-menu-link-level-1 moto-link">Контакты</a>
        </li>        </ul>
    </div></div>

    <?php
    if (isset($_SESSION['logged_user'])) {
    ?>
        <form  class="profile" method="POST" enctype="multipart/form-data">
        <?php if(isset($fsmsg)){ ?><div class="alert alert-danger" role="alert" style="color:green;"> <?php echo $fsmsg; ?></div><?php } ?>
        <p><img src="<?php echo $_SESSION['logged_user']->filename;?>"> Здравствуйте <?php echo $_SESSION['logged_user']->fam;?> <?php echo $_SESSION['logged_user']->ima; ?>!
        <input class="img_profile" type="file" name="filename" onchange="this.form.submit()"></p>
        <p><a href="../client/logout.php">Выйти</a></p>
        </form>
    <?php } else {header("Location: ../client/Login_up.php");} ?> 
            
        </div>
    </div>

</div><div class="moto-sticky-pseudo-element" style="display: none; height: 50px; width: 1903px;"></div><div data-widget-id="wid_1581490776_4idqlrmsf" class="moto-widget moto-widget-spacer moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto moto-visible-on_tablet_hidden moto-visible-on_mobile-h_hidden moto-visible-on_mobile-v_hidden" data-widget="spacer" data-preset="default" data-spacing="aaaa" data-visible-on="+desktop">
    <div class="moto-widget-spacer-block" style="height:15px"></div>
</div></div>
        </div>
    </div>
</div>            
        </header>

        <section id="section-content" class="content page-10 moto-section" data-widget="section" data-container="section">
                                    <div class="moto-widget moto-widget-block moto-spacing-top-large moto-spacing-right-auto moto-spacing-bottom-large moto-spacing-left-auto" data-widget="block" data-spacing="lala" style="background-color:;background-image:url(Aboutus_files/images/фон.jpg);background-position:center;background-repeat:no-repeat;background-size:cover;" data-bg-image="Aboutus_files/images/фон.jpg" data-bg-position="center">
    
    <div class="container-fluid">
        <div class="row">
            <div class="moto-cell col-sm-12" data-container="container">
                
                    
                        <div class="moto-widget moto-widget-row row-fixed moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-grid-type="sm" data-widget="row" data-spacing="aaaa" style="" data-bg-position="left top">
    
    <div class="container-fluid">
        <div class="row" data-container="container">
            
                
                    <div class="moto-widget moto-widget-row__column moto-cell col-sm-12" data-widget="row.column" data-bgcolor-class="" data-container="container" style="" data-bg-position="left top">
    
        
            <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="aaaa" data-animation="">
    <div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_system_2">Наслаждайтесь незабываемым</p><h1 class="moto-text_system_5">Путешествие по Гродно</h1></div>
</div>   
</div>
</div>
    </div>
</div></div>
        </div>
    </div>
</div><div class="moto-widget moto-widget-block moto-spacing-top-large moto-spacing-right-auto moto-spacing-bottom-large moto-spacing-left-auto" data-widget="block" data-spacing="lala" style="background-color:;" data-bg-position="left top">
    
    <div class="container-fluid">
        <div class="row">
            <div class="moto-cell col-sm-12" data-container="container">
                
                    
                        <div class="moto-widget moto-widget-row row-fixed moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-grid-type="sm" data-widget="row" data-spacing="aaaa" style="" data-bg-position="left top">
    
    <div class="container-fluid">
        <div class="row" data-container="container">
            
                
                    <div class="moto-widget moto-widget-row__column moto-cell col-sm-12" data-widget="row.column" data-bgcolor-class="" data-container="container" style="" data-bg-position="left top">

            <div class="moto-widget moto-widget-row moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-grid-type="sm" data-widget="row" data-spacing="aaaa" style="" data-bg-position="left top">
    
    <div class="container-fluid">
        <div class="row" data-container="container">
            
                
                    <div class="moto-widget moto-widget-row__column moto-cell col-sm-3" data-widget="row.column" data-bgcolor-class="" data-container="container" style="" data-bg-position="left top">
    
        
            <div data-widget-id="wid__image__5c1023a956dd8" class="moto-widget moto-widget-image moto-preset-default moto-align-center moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto  " data-widget="image">
                        <span class="moto-widget-image-link">
                <img class="moto-widget-image-picture lazyloaded" data-id="" title="" alt="" src="Tours_files/images/<?php $result = mysqli_query($link, "SELECT * FROM table_mesto WHERE mesto_id='5' "); $food = mysqli_fetch_assoc($result); echo $food["image"] ?>">
            </span>
            </div>
        
    
        
            <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="aasa" data-animation="">
    <div class="moto-widget-text-content moto-widget-text-editable"><p style="text-align: center;" class="moto-text_system_11"><?php $result = mysqli_query($link, "SELECT * FROM table_mesto WHERE mesto_id='5' "); $food = mysqli_fetch_assoc($result); echo $food["nazv"] ?></p><p style="text-align: center;" class="moto-text_system_11">&nbsp;</p><h3 style="text-align: center;" class="moto-text_system_12"><a target="_self" data-action="url" class="moto-link" href="#"><?php $result = mysqli_query($link, "SELECT * FROM table_mesto WHERE mesto_id='5' "); $food = mysqli_fetch_assoc($result); echo $food["title"] ?></a></h3></div>
</div>
        
    
</div>
  <div class="moto-widget moto-widget-row__column moto-cell col-sm-3" data-widget="row.column" data-bgcolor-class="" data-container="container" style="" data-bg-position="left top">
    
        
            <div data-widget-id="wid__image__5c1023a9575b6" class="moto-widget moto-widget-image moto-preset-default moto-align-center moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto  " data-widget="image">
                        <span class="moto-widget-image-link">
                <img src="Tours_files/images/<?php $result = mysqli_query($link, "SELECT * FROM table_mesto WHERE mesto_id='6' "); $food = mysqli_fetch_assoc($result); echo $food["image"] ?>" class="moto-widget-image-picture lazyloaded" data-id="" title="" alt="">
            </span>
            </div>
        
    
        
            <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="aasa" data-animation="">
            <div class="moto-widget-text-content moto-widget-text-editable"><p style="text-align: center;" class="moto-text_system_11"><?php $result = mysqli_query($link, "SELECT * FROM table_mesto WHERE mesto_id='6' "); $food = mysqli_fetch_assoc($result); echo $food["nazv"] ?></p><p style="text-align: center;" class="moto-text_system_11">&nbsp;</p><h3 style="text-align: center;" class="moto-text_system_12"><a target="_self" data-action="url" class="moto-link" href="#"><?php $result = mysqli_query($link, "SELECT * FROM table_mesto WHERE mesto_id='6' "); $food = mysqli_fetch_assoc($result); echo $food["title"] ?></a></h3></div>
</div>
        
    
</div>

                
            
                
                    <div class="moto-widget moto-widget-row__column moto-cell col-sm-3" data-widget="row.column" data-bgcolor-class="" data-container="container" style="" data-bg-position="left top">
    
        
            <div data-widget-id="wid__image__5c1023a9578b4" class="moto-widget moto-widget-image moto-preset-default moto-align-center moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto  " data-widget="image">
                        <span class="moto-widget-image-link">
                <img src="Tours_files/images/<?php $result = mysqli_query($link, "SELECT * FROM table_mesto WHERE mesto_id='1' "); $food = mysqli_fetch_assoc($result); echo $food["image"] ?>" class="moto-widget-image-picture lazyloaded" data-id="" title="" alt="">
            </span>
            </div>
        
    
        
            <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="aasa" data-animation="">
            <div class="moto-widget-text-content moto-widget-text-editable"><p style="text-align: center;" class="moto-text_system_11"><?php $result = mysqli_query($link, "SELECT * FROM table_mesto WHERE mesto_id='1' "); $food = mysqli_fetch_assoc($result); echo $food["nazv"] ?></p><p style="text-align: center;" class="moto-text_system_11">&nbsp;</p><h3 style="text-align: center;" class="moto-text_system_12"><a target="_self" data-action="url" class="moto-link" href="#"><?php $result = mysqli_query($link, "SELECT * FROM table_mesto WHERE mesto_id='1' "); $food = mysqli_fetch_assoc($result); echo $food["title"] ?></a></h3></div>
</div>
        
    
</div>

                
            
                
                    <div class="moto-widget moto-widget-row__column moto-cell col-sm-3" data-widget="row.column" data-bgcolor-class="" data-container="container" style="" data-bg-position="left top">
    
        
            <div data-widget-id="wid__image__5c1023a957bbb" class="moto-widget moto-widget-image moto-preset-default moto-align-center moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto  " data-widget="image">
                        <span class="moto-widget-image-link">
                <img src="Tours_files/images/<?php $result = mysqli_query($link, "SELECT * FROM table_mesto WHERE mesto_id='2' "); $food = mysqli_fetch_assoc($result); echo $food["image"] ?>" class="moto-widget-image-picture lazyloaded" data-id="" title="" alt="">
            </span>
            </div>
        
    
        
            <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="aasa" data-animation="">
            <div class="moto-widget-text-content moto-widget-text-editable"><p style="text-align: center;" class="moto-text_system_11"><?php $result = mysqli_query($link, "SELECT * FROM table_mesto WHERE mesto_id='2' "); $food = mysqli_fetch_assoc($result); echo $food["nazv"] ?></p><p style="text-align: center;" class="moto-text_system_11">&nbsp;</p><h3 style="text-align: center;" class="moto-text_system_12"><a target="_self" data-action="url" class="moto-link" href="#"><?php $result = mysqli_query($link, "SELECT * FROM table_mesto WHERE mesto_id='2' "); $food = mysqli_fetch_assoc($result); echo $food["title"] ?></a></h3></div>
</div>
        
    
</div>

                
            
        </div>
    </div>
</div>
        
    
<div class="moto-widget moto-widget-row moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-grid-type="sm" data-widget="row" data-spacing="aaaa" style="" data-bg-position="left top">
    
    <div class="container-fluid">
        <div class="row" data-container="container">
            
                
                    <div class="moto-widget moto-widget-row__column moto-cell col-sm-3" data-widget="row.column" data-bgcolor-class="" data-container="container" style="" data-bg-position="left top">
    
        
            <div data-widget-id="wid__image__5c1023a957ec8" class="moto-widget moto-widget-image moto-preset-default moto-align-center moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto  " data-widget="image">
                        <span class="moto-widget-image-link">
                <img src="Tours_files/images/<?php $result = mysqli_query($link, "SELECT * FROM table_mesto WHERE mesto_id='3' "); $food = mysqli_fetch_assoc($result); echo $food["image"] ?>" class="moto-widget-image-picture lazyloaded" data-id="190" title="" alt="">
            </span>
            </div>
        
    
        
            <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="aasa" data-animation="">
            <div class="moto-widget-text-content moto-widget-text-editable"><p style="text-align: center;" class="moto-text_system_11"><?php $result = mysqli_query($link, "SELECT * FROM table_mesto WHERE mesto_id='3' "); $food = mysqli_fetch_assoc($result); echo $food["nazv"] ?></p><p style="text-align: center;" class="moto-text_system_11">&nbsp;</p><h3 style="text-align: center;" class="moto-text_system_12"><a target="_self" data-action="url" class="moto-link" href="#"><?php $result = mysqli_query($link, "SELECT * FROM table_mesto WHERE mesto_id='3' "); $food = mysqli_fetch_assoc($result); echo $food["title"] ?></a></h3></div>
</div>
        
    
</div>

                
            
                
                    <div class="moto-widget moto-widget-row__column moto-cell col-sm-3" data-widget="row.column" data-bgcolor-class="" data-container="container" style="" data-bg-position="left top">
    
        
            <div data-widget-id="wid__image__5c1023a9581e4" class="moto-widget moto-widget-image moto-preset-default moto-align-center moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto  " data-widget="image">
                        <span class="moto-widget-image-link">
                <img src="Tours_files/images/<?php $result = mysqli_query($link, "SELECT * FROM table_mesto WHERE mesto_id='4' "); $food = mysqli_fetch_assoc($result); echo $food["image"] ?>" class="moto-widget-image-picture lazyloaded" data-id="191" title="" alt="">
            </span>
            </div>
        
    
        
            <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="aasa" data-animation="">
            <div class="moto-widget-text-content moto-widget-text-editable"><p style="text-align: center;" class="moto-text_system_11"><?php $result = mysqli_query($link, "SELECT * FROM table_mesto WHERE mesto_id='4' "); $food = mysqli_fetch_assoc($result); echo $food["nazv"] ?></p><p style="text-align: center;" class="moto-text_system_11">&nbsp;</p><h3 style="text-align: center;" class="moto-text_system_12"><a target="_self" data-action="url" class="moto-link" href="#"><?php $result = mysqli_query($link, "SELECT * FROM table_mesto WHERE mesto_id='4' "); $food = mysqli_fetch_assoc($result); echo $food["title"] ?></a></h3></div>
</div>
        
    
</div>

                
            
                
                    <div class="moto-widget moto-widget-row__column moto-cell col-sm-3" data-widget="row.column" data-bgcolor-class="" data-container="container" style="" data-bg-position="left top">
    
        
            <div data-widget-id="wid__image__5c1023a9584f6" class="moto-widget moto-widget-image moto-preset-default moto-align-center moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto  " data-widget="image">
                        <span class="moto-widget-image-link">
                <img src="Tours_files/images/<?php $result = mysqli_query($link, "SELECT * FROM table_mesto WHERE mesto_id='7' "); $food = mysqli_fetch_assoc($result); echo $food["image"] ?>" class="moto-widget-image-picture lazyloaded" data-id="189" title="" alt="">
            </span>
            </div>
        
    
        
            <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="aasa" data-animation="">
            <div class="moto-widget-text-content moto-widget-text-editable"><p style="text-align: center;" class="moto-text_system_11"><?php $result = mysqli_query($link, "SELECT * FROM table_mesto WHERE mesto_id='7' "); $food = mysqli_fetch_assoc($result); echo $food["nazv"] ?></p><p style="text-align: center;" class="moto-text_system_11">&nbsp;</p><h3 style="text-align: center;" class="moto-text_system_12"><a target="_self" data-action="url" class="moto-link" href="#"><?php $result = mysqli_query($link, "SELECT * FROM table_mesto WHERE mesto_id='7' "); $food = mysqli_fetch_assoc($result); echo $food["title"] ?></a></h3></div>
</div>
        
    
</div>

                
            
                
                    <div class="moto-widget moto-widget-row__column moto-cell col-sm-3" data-widget="row.column" data-bgcolor-class="" data-container="container" style="" data-bg-position="left top">
    
        
            <div data-widget-id="wid__image__5c1023a9587ef" class="moto-widget moto-widget-image moto-preset-default moto-align-center moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto  " data-widget="image">
                        <span class="moto-widget-image-link">
                <img src="Tours_files/images/<?php $result = mysqli_query($link, "SELECT * FROM table_mesto WHERE mesto_id='8' "); $food = mysqli_fetch_assoc($result); echo $food["image"] ?>" class="moto-widget-image-picture lazyloaded" data-id="192" title="" alt="">
            </span>
            </div>
        
    
        
            <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="aasa" data-animation="">
            <div class="moto-widget-text-content moto-widget-text-editable"><p style="text-align: center;" class="moto-text_system_11"><?php $result = mysqli_query($link, "SELECT * FROM table_mesto WHERE mesto_id='8' "); $food = mysqli_fetch_assoc($result); echo $food["nazv"] ?></p><p style="text-align: center;" class="moto-text_system_11">&nbsp;</p><h3 style="text-align: center;" class="moto-text_system_12"><a target="_self" data-action="url" class="moto-link" href="#"><?php $result = mysqli_query($link, "SELECT * FROM table_mesto WHERE mesto_id='8' "); $food = mysqli_fetch_assoc($result); echo $food["title"] ?></a></h3></div>
</div>
        
    
</div>

                
            
        </div>
    </div>
</div></div>

                
            
        </div>
    </div>
</div>
                    
                
            </div>
        </div>
    </div>
</div>            
        </section>
    </div>

    <footer id="section-footer" class="footer moto-section moto-sticky__bootstrapped" data-widget="section" data-container="section" data-moto-sticky="{mode:'smallHeight', direction:'bottom', mobile: 0}">
                                <div class="moto-widget moto-widget-block moto-bg-color2_4 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="block" data-spacing="aaaa" style="background-color:;" data-bg-position="left top">
    
    <div class="container-fluid">
        <div class="row">
            <div class="moto-cell col-sm-12" data-container="container">
                
            <div data-widget-id="wid__spacer__5b025eb15f618" class="moto-widget moto-widget-spacer moto-preset-default moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto " data-widget="spacer" data-preset="default" data-spacing="saaa" data-visible-on="+desktop,tablet,mobile-h,mobile-v">
    <div class="moto-widget-spacer-block" style="height:10px"></div>
</div><div class="moto-widget moto-widget-row row-fixed moto-justify-content_center moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-grid-type="sm" data-widget="row" data-spacing="aaaa" style="" data-bg-position="left top">
    
    <div class="container-fluid">
        <div class="row" data-container="container">
            
                
                    <div class="moto-widget moto-widget-row__column moto-cell col-sm-4" data-widget="row.column" data-bgcolor-class="" data-container="container" style="" data-bg-position="left top">
    
<div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="aaaa" data-animation="">
    <div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_216"><span class="moto-color5_5"><strong>Не ждите больше. Свяжитесь С Нами!</strong></span><br></p></div>
</div></div><div class="moto-widget moto-widget-row__column moto-cell col-sm-6" data-widget="row.column" data-bgcolor-class="" data-container="container" style="" data-bg-position="left top">
    
<div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="sasa" data-animation="">
    <div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_216"><a href="tel:1234567890" data-action="call" class="moto-link"><span class="moto-color5_5">+375(33)1234567</span></a><span class="moto-color5_5">&nbsp;&nbsp; <strong>24/7</strong></span><span class="moto-color5_5"> </span><span class="moto-color4_3">Специализированная Поддержка Клиентов</span></p></div>
</div></div><div class="moto-widget moto-widget-row__column moto-cell col-sm-2" data-widget="row.column" data-bgcolor-class="" data-container="container" style="" data-bg-position="left top">
    
<div data-widget-id="wid__button__5b025eb15f85c" class="moto-widget moto-widget-button moto-preset-default moto-align-right moto-align-right_mobile-h moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto  " data-widget="button">
            <a href="#" data-action="popup" data-popup-id="8" class="moto-widget-button-link moto-size-small moto-link"><span class="fa moto-widget-theme-icon"></span> <span class="moto-widget-button-label">ЗАКАЖИТЕ ПОЕЗДКУ</span></a>
    </div></div>

                
            
        </div>
    </div>
</div><div data-widget-id="wid__spacer__5b025eb15fa34" class="moto-widget moto-widget-spacer moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto " data-widget="spacer" data-preset="default" data-spacing="aasa" data-visible-on="+desktop,tablet,mobile-h,mobile-v">
    <div class="moto-widget-spacer-block" style="height:10px"></div>
</div></div>
        </div>
    </div>
</div><div class="moto-widget moto-widget-block moto-bg-color2_3 moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="block" data-spacing="maaa" style="background-color:;" data-bg-position="left top">
    
    <div class="container-fluid">
        <div class="row">
            <div class="moto-cell col-sm-12" data-container="container">
                
            <div class="moto-widget moto-widget-row row-fixed moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-grid-type="sm" data-widget="row" data-spacing="aaaa" style="" data-bg-position="left top">
    
    <div class="container-fluid">
        <div class="row" data-container="container">
            
                
                    <div class="moto-widget moto-widget-row__column moto-cell col-sm-6" data-widget="row.column" data-bgcolor-class="" data-container="container" style="" data-bg-position="left top">
    
<div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="aasa" data-animation="">
    <div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_216"><strong>О нас</strong></p></div>
</div><div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="aasa" data-animation="">
    <div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_system_10">Бронирование, отзывы и советы по отелям, курортам, рейсам, аренде жилья, туристическим пакетам и многое другое!<br></p></div>
</div><div id="wid_1526882200_02njv3qem" data-widget-id="wid_1526882200_02njv3qem" class="moto-widget moto-widget-social-links-extended moto-preset-default moto-align-left moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto  " data-widget="social_links_extended" data-preset="default">
        <ul class="moto-widget-social-links-extended__list">
                <li class="moto-widget-social-links-extended__item moto-widget-social-links-extended__item-1">
            <a href="#" class="moto-widget-social-links-extended__link" target="_self">
                <span class="moto-widget-social-links-extended__icon fa fa-facebook"></span>
            </a>
        </li>
                <li class="moto-widget-social-links-extended__item moto-widget-social-links-extended__item-2">
            <a href="#" class="moto-widget-social-links-extended__link" target="_self">
                <span class="moto-widget-social-links-extended__icon fa fa-twitter"></span>
            </a>
        </li>
                <li class="moto-widget-social-links-extended__item moto-widget-social-links-extended__item-3">
            <a href="#" class="moto-widget-social-links-extended__link" target="_self">
                <span class="moto-widget-social-links-extended__icon fa fa-google-plus"></span>
            </a>
        </li>
                <li class="moto-widget-social-links-extended__item moto-widget-social-links-extended__item-4">
            <a href="#" class="moto-widget-social-links-extended__link" target="_self">
                <span class="moto-widget-social-links-extended__icon fa fa-pinterest"></span>
            </a>
        </li>
            </ul>
    <style type="text/css">
                                                        </style>
    </div></div><div class="moto-widget moto-widget-row__column moto-cell col-sm-6" data-widget="row.column" data-bgcolor-class="" data-container="container" style="" data-bg-position="left top">
    
<div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="aasa" data-animation="">
    <div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_216"><strong></strong><strong>Меню</strong><strong></strong><br></p></div>
</div><div class="moto-widget moto-widget-row moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-grid-type="sm" data-widget="row" data-spacing="aaaa" style="" data-bg-position="left top">
    
    <div class="container-fluid">
        <div class="row" data-container="container">
            
                
                    <div class="moto-widget moto-widget-row__column moto-cell col-sm-4" data-widget="row.column" data-bgcolor-class="" data-container="container" style="" data-bg-position="left top">
    
                    <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="aaaa" data-animation="">
    <div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_system_13"><a href="Home.php" data-action="page" data-id="1" class="moto-link">Главная</a><br><a href="About_us.php" data-action="page" data-id="9" class="moto-link">О нас</a><br><a href="Tours.php" data-action="page" data-id="10" class="moto-link">Путешетсвие</a><br></p></div>
</div></div><div class="moto-widget moto-widget-row__column moto-cell col-sm-4" data-widget="row.column" data-bgcolor-class="" data-container="container" data-bg-position="left top">
    
<div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="aaaa" data-animation="">
    <div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_system_13"><a href="Gallery.php" data-action="page" data-id="11" class="moto-link">Галерея</a><br><a href="Services.php" data-action="page" data-id="12" class="moto-link">Сервисы</a><br><a href="Our Team.php" data-action="page" data-id="13" class="moto-link">Наша команда</a><br></p></div>
</div></div><div class="moto-widget moto-widget-row__column moto-cell col-sm-4" data-widget="row.column" data-bgcolor-class="" data-container="container" data-bg-position="left top">
    
<div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="aaaa" data-animation="">
    <div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_system_13"><a href="Testimonials.php" data-action="page" data-id="17" class="moto-link">Рекомендация</a><br><a href="Blog.php" data-action="blog.index" data-id="3" class="moto-link">Блог</a><br><a href="Contacts.php" data-action="page" data-id="14" class="moto-link">Контакты</a><br></p></div>
</div></div>

                
            
        </div>
    </div>
</div></div>

                
            
        </div>
    </div>
</div><div data-widget-id="wid__divider_horizontal__5b025eb163522" class="moto-widget moto-widget-divider moto-preset-3 moto-align-left moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto  " data-widget="divider_horizontal" data-preset="3">
    <hr class="moto-widget-divider-line" style="max-width:100%;width:100%;">
</div><div class="moto-widget moto-widget-row row-fixed moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto" data-grid-type="sm" data-widget="row" data-spacing="sasa" style="" data-bg-position="left top">
    
    <div class="container-fluid">
        <div class="row" data-container="container">
            
                
                    <div class="moto-widget moto-widget-row__column moto-cell col-sm-12" data-widget="row.column" data-bgcolor-class="" data-container="container" style="" data-bg-position="left top">
    
<div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="aaaa" data-visible-on="-" data-animation="">
    <div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_system_10">Copyright 2020&nbsp;- GrodnoTravel - <a data-action="page" data-id="18" class="moto-link" href="Privacy Policy.php">Все Права Защищены</a></p></div>
</div></div>

                
            
        </div>
    </div>
</div></div>
        </div>
    </div>
</div>            
    </footer><div class="moto-sticky-pseudo-element" style="display: none; height: 554px; width: 1903px;"></div>

                     <div data-moto-back-to-top-button="" class="moto-back-to-top-button animated">
        <a ng-click="toTop($event)" class="moto-back-to-top-button-link">
            <span class="moto-back-to-top-button-icon fa"></span>
        </a>
    </div>
                
<div data-moto-widget-callback="" class="moto-widget-callback moto-widget-callback_closed moto-preset-default">
    <div class="moto-widget-callback__wrapper">
        <div class="moto-widget-callback__open-button moto-widget-callback__thumbnail-wrapper moto-widget-callback__thumbnail-wrapper_icon">
            <div class="moto-widget-callback__overlay moto-widget-callback__overlay_open-button"></div>
                        <div class="moto-widget-callback__thumbnail moto-widget-callback__thumbnail_icon fa fa-fw fa-phone"></div>
    
        </div>
        <div class="moto-widget-callback__body" style="display: none;">
            <div class="moto-widget-callback__agent moto-widget-callback__thumbnail-wrapper moto-widget-callback__thumbnail-wrapper_image">
                            <div class="moto-widget-callback__thumbnail moto-widget-callback__thumbnail_image" style="background-image: url();"></div>
    
            </div>
            <div class="moto-widget-callback__description moto-widget-text">
                <p class="moto-text_system_8" style="text-align: center;">Джон Смит</p><p class="moto-text_system_11" style="text-align: center;">Агент</p><p class="moto-text_system_11" style="text-align: center;">&nbsp;</p><p class="moto-text_system_11" style="text-align: center;"><a class="moto-link" data-action="call" href="tel:+112233445566"><span class="fa"></span> +112233445566</a></p>            </div>
                        <div class="moto-widget-callback__close-button">×</div>
        </div>
    </div>
</div>                <script src="Tours_files/website.js" type="text/javascript" data-cfasync="false"></script>
    <script type="text/javascript" data-cfasync="false">
        var websiteConfig = websiteConfig || {};
        websiteConfig.address = 'https://template64201.motopreview.com/';
        websiteConfig.addressHash = '7c87eae1770d8c2c41a10703cb3a5cae';
        websiteConfig.apiUrl = '/api.php';
        websiteConfig.preferredLocale = 'en_US';
        websiteConfig.preferredLanguage = websiteConfig.preferredLocale.substring(0, 2);
                websiteConfig.back_to_top_button = {"topOffset":300,"animationTime":500,"type":"theme"};
                websiteConfig.popup_preferences = {"loading_error_message":"The content could not be loaded."};
        websiteConfig.lazy_loading = {"enabled":true};
        websiteConfig.cookie_notification = {"enabled":false,"content":"content_hash":"6610aef7f7138423e25ee33c75f23279","controls":{"visible":"close,accept","accept":{"label":"Got it","preset":"default","size":"medium","cookie_lifetime":365}}};
                angular.module('website.plugins', []);
    </script>
    <script src="Tours_files/website_002.js" type="text/javascript" data-cfasync="false"></script>
        <script type="text/javascript">$.fn.motoGoogleMap.setApiKey('AIzaSyCPbz3W389x_owB2TlrqPuMEYCTFVuRvMY');</script>
                
    
    

</body></html>