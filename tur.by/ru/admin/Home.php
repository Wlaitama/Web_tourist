<?php
    require "../client/Sign_up_files/include/db_connect.php";
    require_once "Home_files/include/db_connect.php";
    $respop = mysqli_query($link,"SELECT * FROM table_mesto WHERE pop='1'");
    $resed = mysqli_query($link,"SELECT * FROM table_pitanie WHERE pop='1'");
    $resotz = mysqli_query($link,"SELECT * FROM table_otziv WHERE pop='1'");
    //$data = $_POST;
   // if(isset($data['del_mesto']))
    //{
      //  $del = "DELETE FROM table_mesto WHERE pop='1'"
    //}
?>
<?php
    if($_FILES["filename"]["size"] > 100*3*100)
    {
        $fsmsg = "Размер файла превышает 3 мб";
    }else
    {
    if(is_uploaded_file($_FILES["filename"]["tmp_name"]))
    {
        move_uploaded_file($_FILES["filename"]["tmp_name"], "../user/avatar/".$_FILES["filename"]["name"]);
        $data = $_POST;
        $id = $_SESSION['logged_user']->id;
        $user = R::load('users', $id);
        $user->filename = "../user/avatar/".$_FILES["filename"]["name"];
        R::store($user);
    }
    }
?>
<!DOCTYPE html>
<html data-ng-app="website" lang="ru">
    <head>
<meta charset="UTF-8">
<meta http-equiv="content-type" content="text/html"><style>.gm-style .gm-style-mtc label,.gm-style .gm-style-mtc div{font-weight:400}
</style><style>.gm-control-active>img{box-sizing:content-box;display:none;left:50%;pointer-events:none;position:absolute;top:50%;transform:translate(-50%,-50%)}.gm-control-active>img:nth-child(1){display:block}.gm-control-active:hover>img:nth-child(1),.gm-control-active:active>img:nth-child(1){display:none}.gm-control-active:hover>img:nth-child(2),.gm-control-active:active>img:nth-child(3){display:block}
</style><link type="text/css" rel="stylesheet" href="Home_files/css.css"><style>.gm-ui-hover-effect{opacity:.6}.gm-ui-hover-effect:hover{opacity:1}
</style><style>.gm-style .gm-style-cc span,.gm-style .gm-style-cc a,.gm-style .gm-style-mtc div{font-size:10px;box-sizing:border-box}
</style><style>@media print {  .gm-style .gmnoprint, .gmnoprint {    display:none  }}@media screen {  .gm-style .gmnoscreen, .gmnoscreen {    display:none  }}</style><style>.gm-style-pbc{transition:opacity ease-in-out;background-color:rgba(0,0,0,0.45);text-align:center}.gm-style-pbt{font-size:22px;color:white;font-family:Roboto,Arial,sans-serif;position:relative;margin:0;top:50%;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%)}
</style><style>.gm-style img{max-width: none;}.gm-style {font: 400 11px Roboto, Arial, sans-serif; text-decoration: none;}</style><style type="text/css">
[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}
.ng\:form{display:block;}.ng-animate-shim{visibility:hidden;}.ng-anchor{position:absolute;}</style>
<title>Главная</title>
<link rel="SHORTCUT ICON" href="favicon_1132.ico" type="image/vnd.microsoft.icon">

                                    
<link rel="canonical" href="Home.php">
<meta property="og:title" content="Home">
<meta property="og:type" content="website">
                            <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    
            <link rel="stylesheet" href="Home_files/assets.css">
        <style>
@import url(//fonts.googleapis.com/css?family=Lora:regular,italic,700,700italic|Merriweather:300,300italic,regular,italic,700,700italic,900,900italic|Mr+Dafoe:regular|Open+Sans:300,300italic,regular,italic,600,600italic,700,700italic,800,800italic&subset=latin-ext,cyrillic,cyrillic-ext,vietnamese,latin,greek,greek-ext);
</style>
        <link rel="stylesheet" href="Home_files/styles.css" id="moto-website-style">
<script src="https://kit.fontawesome.com/5bc6752132.js" crossorigin="anonymous"></script>
</head>
<body class="moto-background moto-website_live">
        
    
             

    <div class="page">

        <header id="section-header" class="header moto-section" data-widget="section" data-container="section">  
    <div class="container-fluid">   
        <div class="row">
            <div class="moto-cell col-sm-12" data-container="container">
                
            <div data-widget-id="wid__spacer__5b025d993cef7" class="moto-widget moto-widget-spacer moto-preset-default moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto " data-widget="spacer" data-preset="default" data-spacing="saaa" data-visible-on="+desktop,tablet,mobile-h,mobile-v">
    <div class="moto-widget-spacer-block" style="height:25px"></div>
</div>
<div class="moto-widget moto-widget-container undefined moto-container_header_5e439e451 moto-sticky__bootstrapped" data-visible-on="" data-widget="container" data-container="container" data-css-name="moto-container_header_5e439e451" data-bg-position="left top">    
<div class="moto-widget moto-widget-row row-fixed moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto moto-justify-content_center" data-grid-type="sm" data-widget="row" data-spacing="aaaa" data-bg-position="left top" data-visible-on="-">
    
    <div class="container-fluid">
        <div class="row" data-container="container">
            
                
                    <div class="moto-widget moto-widget-row__column moto-cell col-sm-2" data-widget="row.column" data-container="container" data-bg-position="left top">
    
<div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="aaaa">
    <div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_system_1"><a href="Home.php" data-action="page" data-id="1" class="moto-link">GrodnoTravel</a><br></p></div>
</div></div><div class="moto-widget moto-widget-row__column moto-cell col-sm-10" data-widget="row.column" data-container="container" data-bg-position="left top">
    
<div data-widget-id="wid__menu__5b025d9944f9c" class="moto-widget moto-widget-menu moto-preset-default moto-align-right moto-align-center_mobile-h moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-preset="default" data-widget="menu">
            <a href="#" class="moto-widget-menu-toggle-btn"><i class="moto-widget-menu-toggle-btn-icon fas fa-bars"></i></a>
            <ul class="moto-widget-menu-list moto-widget-menu-list_horizontal">
            <li class="moto-widget-menu-item">
    <a href="Home.php" data-action="page" class="moto-widget-menu-link moto-widget-menu-link-level-1 moto-widget-menu-link-active moto-link">Главная</a>
        </li><li class="moto-widget-menu-item">
            <a href="About_us.php" data-action="page" class="moto-widget-menu-link moto-widget-menu-link-level-1 moto-widget-menu-link-submenu moto-link">О нас<span class="fa moto-widget-menu-link-arrow"></span></a>
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
    </div>
    </div>
    
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

</div></div>
        </div>
    </div>            
        </header>

        <section id="section-content" class="content page-1 moto-section" data-widget="section" data-container="section">
                   <div class="moto-widget moto-widget-block moto-spacing-top-large moto-spacing-right-auto moto-spacing-bottom-large moto-spacing-left-auto" data-widget="block" data-spacing="lala" data-bg-position="left top">
    
    <div class="container-fluid">
        <div class="row">
            <div class="moto-cell col-sm-12" data-container="container">
                
            <div class="moto-widget moto-widget-row row-fixed moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-grid-type="sm" data-widget="row" data-spacing="aaaa" data-bg-position="left top">
    
    <div class="container-fluid">
        <div class="row" data-container="container">
            
                
        <div class="moto-widget moto-widget-row__column moto-cell col-sm-12" data-widget="row.column" data-bgcolor-class="" data-container="container" data-bg-position="left top">
    
    <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="aasa" data-animation="">
        <div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_normal">Обзор главных достопримечательностей города</p><h2 class="moto-text_system_6">Лучшие места для посещения в Гродно</h2></div>
    </div><div class="moto-widget moto-widget-row moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-grid-type="sm" data-widget="row" data-spacing="aaaa" data-bg-position="left top">
        
        <div class="container-fluid">
            <div class="row" data-container="container">
            <?php while($popm = mysqli_fetch_assoc($respop))
           {
               ?>
            <div class="moto-widget moto-widget-row__column moto-cell col-sm-3" data-widget="row.column" data-bgcolor-class="" data-container="container" data-bg-position="left top">
        <form method="POST">
        <div data-widget-id="wid__image__5b025cfec2bea" class="moto-widget moto-widget-image moto-preset-default moto-align-center moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto  " data-widget="image">
                                <span class="moto-widget-image-link">
                        <img src="Home_files/images/<?php echo $popm['image'] ?>" class="moto-widget-image-picture lazyload" data-id="154" alt="<?php echo $popm['alt'] ?>">
                    </span>
                    </div><div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="aasa" data-animation="">
            <div class="moto-widget-text-content moto-widget-text-editable"><p style="text-align: center;" class="moto-text_system_11">
            <?php echo $popm['nazv'] ?>
            </p><p style="text-align: center;" class="moto-text_system_11"><br></p><p style="text-align: center;" class="moto-text_system_12"><a href="#" target="_self" data-action="url" class="moto-link" style="line-height: 1"><?php echo $popm['title'] ?></a><br></p></div>
            <button type="submit" name="del_mesto" class="udal">Удалить</button> <button type="submit" name="red_mesto" class="red">Редактирование</button>
        </div>
           </form>
    </div>
        <?php  
           }
        ?>
        
        </div></div>
    

    </div>

</div>

</div>   
        </div>
    </div>
</div></div>
        </div>
    </div>
</div>
<div class="moto-widget moto-widget-block moto-spacing-top-large moto-spacing-right-auto moto-spacing-bottom-large moto-spacing-left-auto" data-widget="block" data-spacing="lala" data-bg-position="left top">
    
    <div class="container-fluid">
        <div class="row">
            <div class="moto-cell col-sm-12" data-container="container">
                
            <div class="moto-widget moto-widget-row row-gutter-0 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-grid-type="sm" data-widget="row" data-spacing="aaaa" data-bg-position="left top">
    
    <div class="container-fluid">
        <div class="row" data-container="container">
            
                
                    <div class="moto-widget moto-widget-row__column moto-cell col-sm-6" data-widget="row.column" data-container="container" data-bg-position="left top">
    
<div data-widget-id="wid__image__5b025cfec4dab" class="moto-widget moto-widget-image moto-preset-default  moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto  " data-widget="image">
                        <span class="moto-widget-image-link">
                <img data-src="Home_files/images/еда.png" class="moto-widget-image-picture lazyload" data-id="161" alt="">
            </span>
            </div></div><div class="moto-widget moto-widget-row__column moto-cell col-sm-4" data-widget="row.column" data-container="container" data-bg-position="left top">
    
            <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-small moto-spacing-bottom-small moto-spacing-left-small" data-widget="text" data-preset="default" data-spacing="asss">
    <div class="moto-widget-text-content moto-widget-text-editable"><h2 class="moto-text_system_6">ПОПУЛЯРНОЕ</h2></div>
</div>
<?php while($ed = mysqli_fetch_assoc($resed))
       {
           ?>
<div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-small moto-spacing-bottom-auto moto-spacing-left-small" data-widget="text" data-preset="default" data-spacing="asas">
    <div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_214"><span class="moto-color3_3"><strong><?php echo $ed['title'] ?></strong></span> <?php echo $ed['street'] ?><br></p><p class="moto-text_215"><?php echo $ed['type'] ?></p></div>
</div><div data-widget-id="wid__divider_horizontal__5b025cfec5045" class="moto-widget moto-widget-divider moto-preset-2 moto-align-left moto-spacing-top-small moto-spacing-right-small moto-spacing-bottom-small moto-spacing-left-small  " data-widget="divider_horizontal" data-preset="2">
    <hr class="moto-widget-divider-line" style="max-width:100%;width:100%;">
</div>
<?php
       } ?> 
</div><div class="moto-widget moto-widget-row__column moto-cell col-sm-2" data-widget="row.column" data-container="container" data-bg-position="left top">
    
</div>

                
            
        </div>
    </div>
</div></div>
        </div>
    </div>
</div><div class="moto-widget moto-widget-block moto-bg-color5_3 moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-medium moto-spacing-left-auto" data-widget="block" data-spacing="mama" data-bg-position="left top">
    
    <div class="container-fluid">
        <div class="row">
        <div class="moto-cell col-sm-12" data-container="container">
                
                <div data-widget-id="wid__carousel__5b025cfec68ca" class="moto-widget moto-widget-slider moto-widget-carousel moto-preset-2 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="carousel" data-preset="2">
            <div class="carousel-block">
                <div class="bx-wrapper" style="max-width: 999px;">
                    <div class="bx-viewport" aria-live="polite" style="width: 100%; overflow: hidden; position: relative; height: 433px;">
                        <div class="moto-widget-carousel-list" data-moto-carousel-options="{&quot;slideshowEnabled&quot;:true,&quot;slideshowDelay&quot;:5,&quot;showNextPrev&quot;:false,&quot;showPaginationDots&quot;:true,&quot;slideWidth&quot;:999,&quot;minSlides&quot;:1,&quot;maxSlides&quot;:1,&quot;moveSlides&quot;:1,&quot;margins&quot;:0,&quot;itemsCount&quot;:3}" style="width: 3215%; position: relative; transition-duration: 0s; transform: translate3d(-2637px, 0px, 0px);">
                        <?php while($otz = mysqli_fetch_assoc($resotz))
                            {
                        ?>
                        <div class="moto-widget-carousel-item" aria-hidden="true" style="height: 433px; float: left; list-style: outside none none; position: relative; width: 879px;">
                            <a class="moto-widget-carousel-link moto-link"><img src="Home_files/<?php echo $otz['image'] ?>" alt="Сандра Брайан"></a>
                                                        <div class="moto-widget-carousel-caption moto-widget-text"><p class="moto-text_system_12"><?php echo $otz['ima'] ?></p><p class="moto-text_system_12">&nbsp;</p><p class="moto-text_system_12"></p><p class="moto-text_system_12">&nbsp;</p><p class="moto-text_215"><?php echo $otz['chto'] ?></p><p class="moto-text_215">&nbsp;</p><p class="moto-text_system_8">
                                                        <?php echo $otz['text'] ?></p></div>
                                                </div>
                                                <?php
                                                } ?> 
                                        </div></div>
                                                <div class="bx-controls bx-has-pager">
                                                    </div></div></div>
        </div>
    </div></div>
        </div>
    </div>
</div>            
        </section>

    <footer id="section-footer" class="footer moto-section moto-sticky__bootstrapped" data-widget="section" data-container="section" data-moto-sticky="{mode:'smallHeight', direction:'bottom', mobile: 0}">
<div class="moto-widget moto-widget-block moto-bg-color2_3 moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="block" data-spacing="maaa" data-bg-position="left top">
    
    <div class="container-fluid">
        <div class="row">
            <div class="moto-cell col-sm-12" data-container="container">
                
            <div class="moto-widget moto-widget-row row-fixed moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-grid-type="sm" data-widget="row" data-spacing="aaaa" data-bg-position="left top">
    
    <div class="container-fluid">
        <div class="row" data-container="container">
            
                
                    <div class="moto-widget moto-widget-row__column moto-cell col-sm-6" data-widget="row.column" data-container="container" data-bg-position="left top">
    
<div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="aasa">
    <div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_216"><strong>О нас</strong></p></div>
</div><div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="aasa">
    <div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_system_10">Бронирование, отзывы и советы по отелям, курортам, рейсам, аренде жилья, туристическим пакетам и многое другое!<br></p></div>
</div><div id="wid_1526882200_02njv3qem" data-widget-id="wid_1526882200_02njv3qem" class="moto-widget moto-widget-social-links-extended moto-preset-default moto-align-left moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto  " data-widget="social_links_extended" data-preset="default">
        <ul class="moto-widget-social-links-extended__list">
                <li class="moto-widget-social-links-extended__item moto-widget-social-links-extended__item-1">
            <a href="#" class="moto-widget-social-links-extended__link" target="_self">
                <span class="moto-widget-social-links-extended__icon fa fa-facebook">
                    </span>
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
    </div></div><div class="moto-widget moto-widget-row__column moto-cell col-sm-6" data-widget="row.column" data-container="container" data-bg-position="left top">
    
<div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="aasa">
    <div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_216"><strong></strong><strong>Меню</strong><strong></strong><br></p></div>
</div><div class="moto-widget moto-widget-row moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-grid-type="sm" data-widget="row" data-spacing="aaaa" data-bg-position="left top">
    
    <div class="container-fluid">
        <div class="row" data-container="container">
            
                
                    <div class="moto-widget moto-widget-row__column moto-cell col-sm-4" data-widget="row.column" data-container="container" data-bg-position="left top">
    
<div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="aaaa">
    <div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_system_13"><a href="Home.php" data-action="page" data-id="1" class="moto-link">Главная</a><br><a href="About_us.php" data-action="page" data-id="9" class="moto-link">О нас</a><br><a href="Tours.php" data-action="page" data-id="10" class="moto-link">Путешествие</a><br></p></div>
</div></div><div class="moto-widget moto-widget-row__column moto-cell col-sm-4" data-widget="row.column" data-container="container" data-bg-position="left top">
    
<div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="aaaa">
    <div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_system_13"><a href="Gallery.php" data-action="page" data-id="11" class="moto-link">Галерея</a><br><a href="Services.php" data-action="page" data-id="12" class="moto-link">Сервисы</a><br><a href="Our Team.php" data-action="page" data-id="13" class="moto-link">Наша команда</a><br></p></div>
</div></div><div class="moto-widget moto-widget-row__column moto-cell col-sm-4" data-widget="row.column" data-container="container" data-bg-position="left top">
    
<div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="aaaa">
    <div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_system_13"><a href="Testimonials.php" data-action="page" data-id="17" class="moto-link">Рекомендация</a><br><a href="Blog.php" data-action="blog.index" data-id="3" class="moto-link">Факты</a><br><a href="Contacts.php" data-action="page" data-id="14" class="moto-link">Контакты</a><br></p></div>
</div></div>

                
            
        </div>
    </div>
</div></div>

                
            
        </div>
    </div>
</div><div data-widget-id="wid__divider_horizontal__5b025eb163522" class="moto-widget moto-widget-divider moto-preset-3 moto-align-left moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto  " data-widget="divider_horizontal" data-preset="3">
    <hr class="moto-widget-divider-line" style="max-width:100%;width:100%;">
</div><div class="moto-widget moto-widget-row row-fixed moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto" data-grid-type="sm" data-widget="row" data-spacing="sasa" data-bg-position="left top">
    
    <div class="container-fluid">
        <div class="row" data-container="container">
            
                
                    <div class="moto-widget moto-widget-row__column moto-cell col-sm-12" data-widget="row.column" data-container="container" data-bg-position="left top">
    
<div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="aaaa">
    <div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_system_10">Copyright 2020&nbsp;- GrodnoTravel - <a data-action="page" data-id="18" class="moto-link" href="Privacy Policy.php">Все Права Защищены</a></p></div>
</div></div>

                
            
        </div>
    </div>
</div></div>
        </div>
    </div>
</div>            
    </footer><div class="moto-sticky-pseudo-element" style="display: none; height: 554px; width: 1903px;"></div>

                     <div class="moto-back-to-top-button">
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
                            <div class="moto-widget-callback__thumbnail moto-widget-callback__thumbnail_image" style="background-image: url(/mt-demo/64200/64201/mt-content/uploads/2017/08/mt-1132-testimonials-img02.png);"></div>
    
            </div>
            <div class="moto-widget-callback__description moto-widget-text">
                <p class="moto-text_system_8" style="text-align: center;">Джон Смит</p><p class="moto-text_system_11" style="text-align: center;">Агент</p><p class="moto-text_system_11" style="text-align: center;">&nbsp;</p><p class="moto-text_system_11" style="text-align: center;"><a class="moto-link" data-action="call" href="tel:+112233445566"><span class="fa"></span> +112233445566</a></p></div>
                        <div class="moto-widget-callback__close-button">×</div>
        </div>
    </div>
</div>                <script src="FAQ_files/website.js" type="text/javascript" data-cfasync="false"></script>
    <script type="text/javascript" data-cfasync="false">
        var websiteConfig = websiteConfig || {};
        websiteConfig.address = 'Home.php';
        websiteConfig.addressHash = '7c87eae1770d8c2c41a10703cb3a5cae';
        websiteConfig.apiUrl = '/api.php';
        websiteConfig.preferredLocale = 'en_US';
        websiteConfig.preferredLanguage = websiteConfig.preferredLocale.substring(0, 2);
                websiteConfig.back_to_top_button = {"topOffset":300,"animationTime":500,"type":"theme"};
                websiteConfig.popup_preferences = {"loading_error_message":"The content could not be loaded."};
        websiteConfig.lazy_loading = {"enabled":true};
        websiteConfig.cookie_notification = {"enabled":false,"content":"<p class=\"moto-text_normal\">This website uses cookies to ensure you get the best experience on our website.<\/p>","content_hash":"6610aef7f7138423e25ee33c75f23279","controls":{"visible":"close,accept","accept":{"label":"Got it","preset":"default","size":"medium","cookie_lifetime":365}}};
                angular.module('website.plugins', []);
    </script>
    <script src="FAQ_files/website_002.js" type="text/javascript" data-cfasync="false"></script>
</body></html>