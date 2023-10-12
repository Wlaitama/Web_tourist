<?php
    require "../client/Sign_up_files/include/db_connect.php";
    require_once "Home_files/include/db_connect.php";
    $respop = mysqli_query($link,"SELECT * FROM table_mesto WHERE pop='1'");
    $resed = mysqli_query($link,"SELECT * FROM table_pitanie WHERE pop='1'");
    $resotz = mysqli_query($link,"SELECT * FROM table_otziv WHERE pop='1'");
?>
<!DOCTYPE html>
<html data-ng-app="website" lang="ru">
    <head>
<meta charset="UTF-8">
<meta http-equiv="content-type" content="text/html"><style>.gm-style .gm-style-mtc label,.gm-style .gm-style-mtc div{font-weight:400}
</style><style>.gm-control-active>img{box-sizing:content-box;display:none;left:50%;pointer-events:none;position:absolute;top:50%;transform:translate(-50%,-50%)}.gm-control-active>img:nth-child(1){display:block}.gm-control-active:hover>img:nth-child(1),.gm-control-active:active>img:nth-child(1){display:none}.gm-control-active:hover>img:nth-child(2),.gm-control-active:active>img:nth-child(3){display:block}
</style><style>.gm-ui-hover-effect{opacity:.6}.gm-ui-hover-effect:hover{opacity:1}
</style><style>.gm-style .gm-style-cc span,.gm-style .gm-style-cc a,.gm-style .gm-style-mtc div{font-size:10px;box-sizing:border-box}
</style><style>@media print {  .gm-style .gmnoprint, .gmnoprint {    display:none  }}@media screen {  .gm-style .gmnoscreen, .gmnoscreen {    display:none  }}</style><style>.gm-style-pbc{transition:opacity ease-in-out;background-color:rgba(0,0,0,0.45);text-align:center}.gm-style-pbt{font-size:22px;color:white;font-family:Roboto,Arial,sans-serif;position:relative;margin:0;top:50%;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%)}
</style><style>.gm-style img{max-width: none;}.gm-style {font: 400 11px Roboto, Arial, sans-serif; text-decoration: none;}</style><style type="text/css">
[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}
.ng\:form{display:block;}.ng-animate-shim{visibility:hidden;}.ng-anchor{position:absolute;}</style>
<title>Главная</title>
<link rel="SHORTCUT ICON" href="favicon_1132.ico" type="image/vnd.microsoft.icon">
<link rel="stylesheet" href="Home_files/assets.css">
<style>
@import url(//fonts.googleapis.com/css?family=Lora:regular,italic,700,700italic|Merriweather:300,300italic,regular,italic,700,700italic,900,900italic|Mr+Dafoe:regular|Open+Sans:300,300italic,regular,italic,600,600italic,700,700italic,800,800italic&subset=latin-ext,cyrillic,cyrillic-ext,vietnamese,latin,greek,greek-ext);
</style>
        
<script src="https://kit.fontawesome.com/5bc6752132.js" crossorigin="anonymous"></script>
</head>
<body>

</body>
</html>