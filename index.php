<?php 
include 'connection.php';
$result=mysqli_query($link,"Select * from login");
while($row5 = mysqli_fetch_array($result)){
?>
<html lang="ar" dir="rtl">
<head>
<style>
     
        @import  url('https://assets.salla.cloud/fonts/apple.css?v=v1.4.170');

    </style>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<meta name="theme-color" content="#0a60b9">
<meta name="apple-mobile-web-app-status-bar-style" content="#0a60b9">

<title><?php echo $row5['name']; ?></title>
<link rel="icon" type="image/jpeg" href="<?php echo 'data:image;base64 ,'.$row5['image'].' ';?>">
<link rel="apple-touch-icon-precomposed" href="image/logo.jpeg">

<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="https://cdn.salla.sa/PydyK/nTR77Nabl3TY4RrV5L21YeAdCfDSAYLlptwjr2hb.png">
<meta name="_token" content="cwXUMcR2sP0DuX0YZ2tNJb9RQloT9q6zqsoUlyEB">


<meta name="description" content=" <?php echo $row5['name']; ?> يقدم لكم افضل اشتراكات iptv بافضل الاسعار اشتراك istar iptv و aroma iptv و doom iptv و shark iptv  و falcon iptv و Tera iptv و duplex play و iptv smarters و اشتراك شارك و اشتراك فالكون و evdtv و اي بي تي في و اشتراك كوبرا و اشتراك myhd iptv و flix iptv و net iptv و shark tv و cobra iptv.">
<meta name="keywords" content="يقدم,لكم,افضل,اشتراكات,iptv,بافضل,الاسعار,اشتراك,istar,iptv,و,aroma,iptv,و,doom,iptv,و,shark,iptv,,و,falcon,iptv,و,Tera,iptv,و,duplex,play,و,iptv,smarters,و,اشتراك,شارك,و,اشتراك,فالكون,و,evdtv,و,اي,بي,تي,في,و,اشتراك,كوبرا,و,اشتراك,myhd,iptv,و,flix,iptv,و,net,iptv,و,shark,tv,و,cobra,iptv.">
<meta property="store:published_time" content="2020-08-18T20:07:52+03:00">
<meta property="og:description" content="<?php echo $row5['name'];?>يقدم لكم افضل اشتراكات  iptv بافضل الاسعار اشتراك istar iptv و aroma iptv و doom iptv و shark iptv  و falcon iptv و Tera iptv و duplex play و iptv smarters و اشتراك شارك و اشتراك فالكون و evdtv و اي بي تي في و اشتراك كوبرا و اشتراك myhd iptv و flix iptv و net iptv و shark tv و cobra iptv.">
<meta property="og:title" content="<?php echo $row5['name']; ?>">
<meta property="og:type" content="store">
<meta property="og:url" content="https://www.zoomtv.online/">
<meta property="og:locale" content="ar_AR">
<meta property="og:locale:alternate" content="ar_AR">
<meta property="og:locale:alternate" content="en_US">
<meta property="og:image" content="<?php echo 'data:image;base64 ,'.$row5['image'].' ';?>">
<meta property="og:image:width" content="600">
<meta property="og:image:height" content="300">
<meta name="twitter:description" content="<?php echo $row5['name']; ?> يقدم لكم افضل اشتراكات  iptv بافضل الاسعار اشتراك istar iptv و aroma iptv و doom iptv و shark iptv  و falcon iptv و Tera iptv و duplex play و iptv smarters و اشتراك شارك و اشتراك فالكون و evdtv و اي بي تي في و اشتراك كوبرا و اشتراك myhd iptv و flix iptv و net iptv و shark tv و cobra iptv.">
<meta name="twitter:image" content="<?php echo 'data:image;base64 ,'.$row5['image'].' ';?>">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo $row5['name']; ?>">
<meta name="twitter:url" content="https://www.zoomtv.online/">
<link rel="stylesheet" href="https://assets.salla.cloud/css/app.css?id=63b361170856db95b658"> 

<link rel="stylesheet" href="https://assets.salla.cloud/css/themes.css?id=3c657e93743b806ad655">

<link rel="stylesheet" href="https://assets.salla.cloud/themes/default/assets/css/slick-theme.css?v=v1.4.170">
<link rel="stylesheet" href="https://assets.salla.sa/cp/assets/css/icons/sallaicons/style.css">
<link rel="stylesheet" href="https://assets.salla.cloud/themes/theme_6/assets/css/main.css?v=v1.4.170">

<style type="text/css">
    :root {
        --main-color: #0a60b9;
        --main-text-color: #004099;
        --main-text-color2: #00065f;
        --infinte-color:#004099;
        --main-text-color-dark: #618b93;
        /* New Coloring Pattern: */
        --color-main: #0a60b9;
        --color-main-d: #94bec6;
        --color-main-l: #d4feff;
        --color-main-reverse: #2e5860;
        --color-text: #5a5a5a;
        --color-text-reverse: #2e5860;
        --color-title: #618b93;
    }
    .store-header, .header-bar, .store-header-min {
        background: var(--main-color);
        }
    .store-header h1 a, .store-header-min h1 {
        color: #fff;
        }
    .dropdown-store-header.open .dropdown-toggle, .dropdown-store-header.open .dropdown-toggle { background: var(--main-color); color: #fff; }
    /* .store-contact a { color: var(--main-text-color); } */
    /*a.media-heading, a.product-link { color: var(--main-text-color); }*/
    .pace-demo { background: var(--main-text-color) !important;/*darker*/ }
    .pace .pace-progress {
        background: var(--main-text-color2) !important;/*darker*/ }
    .add-cart { color: var(--main-text-color);/*darker*/ border: 1px solid var(--main-text-color);/*darker*/ }
    .add-cart:hover, .add-cart:focus, .add-cart-large:hover, .add-cart-large:focus, .order-btn:hover, .order-btn:focus { background: var(--main-text-color);/*darker*/ border-color: var(--main-text-color); }
    .cart-nav-submit, .cart-nav-more, .cart-nav-solid { background: var(--main-text-color);/*darker*/ border-color: var(--main-text-color);/*darker*/ }
    .add-cart-large, .order-btn { background: var(--main-text-color); border-color: var(--main-text-color); }
    .cart-nav-light:hover, .cart-nav-light:active, .cart-nav-light:focus { color: var(--main-color); }
    .cart-nav-light { border-color: var(--main-text-color);/*darker*/ color: var(--main-text-color);/*darker*/ }
    .cart-line { border-color: var(--main-color);/*lighter*/ }
    .cart-number { color: var(--main-text-color);/*lighter*/ border-color: var(--main-color);/*lighter*/ }
    .active-step .cart-number { background: var(--main-color); border-color: var(--main-color); }
    .cart-title { color: var(--main-color) !important;/*lighter*/ }
    #salla_bar { border-top-color: var(--main-color); }
    #salla_bar .checkout-button { background: var(--main-text-color); }
    .choice.border-info-600.text-info-800 {
        color: var(--main-text-color) !important; border-color: var(--main-text-color) !important; }
    .payment-method.active { background: var(--main-text-color) !important; }
    .pagination>.active>span{background-color: var(--main-text-color) !important; border-color: var(--main-text-color) !important;
        
    }
    /*.order-num { color: var(--main-text-color); }*/

        .product-side-container .product-order-container .panel-heading { background: var(--main-color) !important; border-bottom-color: var(--main-color) !important; color:  #fff  !important; }
    .testimonial-header, .owl-theme .owl-nav [class*=owl-] { background:  var(--main-color)  !important; }

    a:hover, a:focus { color: #fff; }
    .sub-nav__menu:hover svg { fill: var(--main-text-color); }

    .site-header__cart .badge { background: var(--main-text-color); }
    .circle-action:hover { background: var(--main-text-color) ;border-color: var(--main-text-color); }
    .sub-nav .main-menu > li:hover > a, .sub-nav .main-menu > li:hover > a > i { color: var(--main-text-color); }
    .sub-nav li > ul a:hover { color: var(--main-text-color2); }
    .slick-active button { background-color: var(--main-text-color) !important; }
    .product:hover .product-title { color: var(--main-text-color); }
    .product-price, .product-details__price { color: var(--main-text-color); }

    .product-add:hover { background-color: var(--main-color) !important; border-color: var(--main-color); }
    .sub-nav__menu:hover { color: var(--main-color) !important; }
    .login-container .border-yellow-dark { border-color: var(--main-text-color); }
    .login-container .text-yellow-dark { color: var(--main-text-color); }


    .sub-nav-header { background: var(--main-color); }
    .sub-nav-header a { color: var(--main-color); }
    .btn-primary { background: var(--main-text-color); border-color: var(--main-text-color); }
    .btn-primary:focus, .btn-primary.focus, .btn-primary:hover, .btn-primary:active, .btn-primary.active, .btn-primary.active:hover, .btn-primary:active:hover { background: var(--main-text-color2); border-color: var(--main-text-color2); }
    .page-box .panel-heading .product-title { color: var(--main-text-color) !important; }
    #ask_register_link { color: var(--main-text-color) !important; }
    .product-details__hot strong {
        color: var(--main-text-color) !important; }
    @media (min-width: 992px) {
        .sub-nav li > ul a:hover { background: var(--main-text-color); color: #fff; }
    }



    .site-header__cart .badge {
        background: var(--main-text-color); }
    .circle-action:hover { background: var(--main-text-color) ;border-color: var(--main-text-color); }
    .sub-nav .main-menu > li:hover > a { color: var(--main-text-color2); }
    .slick-active button { background-color: var(--main-text-color) !important; }
    .product:hover .product-title { color:var(--main-text-color); }
    .product-price:hover { color: var(--main-text-color); }
    .product-add:hover { background: var(--main-text-color); }
    .social__item a:hover { background: #fff;border-color: var(--main-text-color); }
    .footer-main {
        border-top-color: var(--main-color); }
    .feature-item__icon { border-color: var(--main-text-color); }
    .landing-page-feature-item__icon { color: var(--main-text-color); border-color: var(--main-text-color); }
    .checker span { border-color: var(--main-text-color) !important; }
    .btn-order-details { background: var(--main-text-color) !important; }
    .section-header .section--title { color: var(--main-text-color); }
     .product-title{margin-right:10px;}

    </style>
<link href="https://assets.salla.cloud/css/intlTelInput.css?id=53d3f9e5ce3c027b0bdd" rel="stylesheet">
<link rel="stylesheet" href="https://assets.salla.cloud/themes/theme_6/assets/css/theme-custom.css?v=v1.4.170">
<style>.salla-theme_6 .site-header .header-top {
    background-color:#0a60b9;
    width:100%;
}
.products-grid.eq-height .product.contain>:first-child .img-cont img, .products-grid.eq-height .thumbnail.contain>:first-child .img-cont img, .products-listing.eq-height .product.contain>:first-child .img-cont img, .products-listing.eq-height .thumbnail.contain>:first-child .img-cont img, body.salla-default #products_div.eq-height .product.contain>:first-child .img-cont img, body.salla-default #products_div.eq-height .thumbnail.contain>:first-child .img-cont img {
    max-height: 100%;
}
.salla-theme_6 .sub-nav .main-menu>li#offers a {
    height: 40px;
    background: #ffd333;
    min-height: 40px;
    border-radius: 14px;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
    border-bottom-right-radius: 5px;
    border-bottom-left-radius: 5px;
    color: #5a308e!important;
    padding-top: 0px;
    font-weight: 600;
}
.container {
    padding-left: 0;
    padding-right:0;
}
.salla-theme_6 .section {
    padding: 0!important;
}
.salla-theme_6 .site-header__cart {
    min-width: 185px;
    background-color: #ffd333;
    border-radius: 15px;
    border-top-left-radius: 25px;
    border-top-right-radius: 15px;
    border-bottom-right-radius: 15px;
    border-bottom-left-radius: 1px;
    border-right: #ffd333 solid 4px;
    border-top: 1.5px solid #ffd333;
    border-bottom: 1.5px solid #ffd333;
}
.site-header__cart strong {
    color: black;
}
.site-header__cart span {
    display: block;
    color: black;
}
.salla-theme_6 .site-header__cart>div:first-child .theme-icon-cart {
    font-size: 1.25rem;
}


.salla-theme_6 .site-header__cart>div:first-child {
    flex-basis: 50px;
    color: #fff;
    background-color: #fff;
}
.salla-theme_6 .sub-nav .main-menu>li {
    background-image: linear-gradient(#00c38b, #ffffff) !important;
    background-size: 3rem 2px, auto;
    background-repeat: no-repeat;
    background-repeat-x: no-repeat;
    background-repeat-y: no-repeat;
    background-position: center bottom;
    transition: all .2s ease-out;
    transition-property: all;
    transition-duration: 0.2s;
    transition-timing-function: ease-out;
    transition-delay: 0s;
}
.salla-theme_6.font-amazon-ember .main-menu>li>a, .salla-theme_6.font-apple .main-menu>li>a, .salla-theme_6.font-dubai .main-menu>li>a {
    padding: 5px 15px;
}
.salla-theme_6 .sub-nav .main-menu>li>a {
    min-height: 40px;
    padding: 5px 15px;
    line-height: 1.8;
    opacity: 1;
}
.salla-theme_6 .sub-nav .sub-nav-content {
    padding-bottom: 5px;
}
.salla-theme_6 .section-header .section--title {
    bottom: 7px;
}
.salla-theme_6 section.section.has-slider .products-listing.slick-slider {
    padding: 1rem;
}
body .section-header h2.section--title span {
    display: block;
    width: max-content;
    position: relative;
    margin-top: 20px;
    background-color: #ffffff;
    font-size: 15px;
    padding: 2px 17px 1px;
    padding-top: 3px;
    padding-right: 17px;
    padding-bottom: 7px;
    padding-left: 17px;
    border-radius: 23px 15px 15px 0;
    border-top-left-radius: 15px;
    border-top-right-radius: 1px;
    border-bottom-right-radius: 10px;
    border-bottom-left-radius: 15px;
    border: 1px solid #e0e0e0;
    border-right: #0a60b9 solid 5px;
}
.mb-4, .my-4 {
    margin-bottom: 0!important;
}
.circle-action {
    background: #ffd333;
    color: #000000;
    font-family: salla!important;
}
.salla-theme_6 .section-header .section-actions .button-more {
    height: 36px;
    padding: 0px 2rem;
    font-family: DINNextLTArabic-Regular;
    line-height: 38px;
    text-align: center;
    color: #ffffff;
    border-top-left-radius: 1px;
    border-top-right-radius: 15px;
    border-bottom-right-radius: 15px;
    border-bottom-left-radius: 15px;
    background: #0a60b9;
}
.salla-theme_6 .product {
    background-color: #fff;
    border-radius: 17px;
    border-top-left-radius: 17px;
    border-top-right-radius: 17px;
    border-bottom-right-radius: 17px;
    border-bottom-left-radius: 17px;
    border: #0a60b9 solid 1px;
}
    .products-grid.eq-height .product, .products-grid.eq-height .thumbnail, .products-listing.eq-height .product, .products-listing.eq-height .thumbnail, body.salla-default #products_div.eq-height .product, body.salla-default #products_div.eq-height .thumbnail {
    display: flex;
    align-items: flex-start;
    justify-content: flex-start;
    flex-direction: column;
    height:400px;
    margin: 0;
}
.salla-theme_6 .product .product-footer .product-add.add_to_cart_btn {
    position: relative;
    margin: 10px 0 0px;
    margin-top: 10px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
    padding: 10px 15px;
    padding-top: 10px;
    padding-right: 15px;
    padding-bottom: 10px;
    padding-left: 15px;
    border-radius: 15px;
    border-top-left-radius: 4px;
    border-top-right-radius: 4px;
    border-bottom-right-radius: 15px;
    border-bottom-left-radius: 15px;
    background-color: #f6f6f6;
    border:#0a60b9 solid 1px;
    border-top-style: solid;
    border-top-width: 1px;
    border-right-style: solid;
    border-right-width: 1px;
    border-bottom-style: solid;
    border-bottom-width: 1px;
    border-left-style: solid;
    border-left-width: 1px;
    border-image-source: initial;
    border-image-slice: initial;
    border-image-width: initial;
    border-image-outset: initial;
    border-image-repeat: initial;
    border-bottom: #0a60b9 solid 5px;
    border-bottom-width: 5px;
    border-bottom-style: solid;
    border-bottom-color: #0a60b9;
}
.feature-item__icon {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 50px;
    flex: 0 0 50px;
    display: inline-block;
    width: 120px;
    height: 120px;
    line-height: 104px;
    background-color: #f1f1f1;
    color: #6e637c;
    border-radius: 50%;
    border-top-left-radius: 50%;
    border-top-right-radius: 50%;
    border-bottom-right-radius: 50%;
    border-bottom-left-radius: 50%;
    font-size: 46px;
    border: 2px solid #582e8b;
    text-align: center;
    margin-bottom: 0.5rem;
    border-bottom: #0a60b9 solid 9px;
}
.sicon-rocket ,.sicon-crdit-card-alt
 ,.sicon-headset
{
    line-height: 100px!important;
}

.bg-brand {
    background-image: url(https://res.cloudinary.com/lomav/image/upload/v1621878396/400_oy206v.png);
}
.testimonials-item blockquote {
    border-top-left-radius: 24px;
    border-top-right-radius: 24px;
    border-bottom-right-radius: 24px;
    border-bottom-left-radius: 24px;
}
.salla-theme_6 footer .footer-title, .footer-main p, .store-contact, .footer-links, .social {
    text-align: center !important;
}
.footer-main {
    padding: 2rem 0;
    color: #fff;
    background-color: #0a60b9 !important;
}
.footer-main p {
    background: #fff !important;
    background-image: initial !important;
    background-position-x: initial !important;
    background-position-y: initial !important;
    background-size: initial !important;
    background-repeat-x: initial !important;
    background-repeat-y: initial !important;
    background-attachment: initial !important;
    background-origin: initial !important;
    background-clip: initial !important;
    background-color: #fff !important;
    padding: 10px !important;
    padding-top: 10px !important;
    padding-right: 5rem !important;
    padding-bottom: 10px !important;
    padding-left: 10px !important;
    padding-right: 5rem !important;
    position: relative !important;
    border-radius: 20px !important;
    color:black;
}
.footer-main p::before {
    content: "\f14a";
    font-family: fontawesome !important;
    font-size: 270%!important;
    position: absolute !important;
    right: 0.8rem !important;
    color: #009688;
    top: 57px !important;
    top: calc(61% - 2.5rem) !important;
}
.salla-theme_6 footer .footer-title span {
    color: #fff !important;
    font-size: 1.3rem !important;
    color: #f8f8f8 !important;
    border-bottom: #ffd333 solid 3px !important;
    padding-bottom: 10px !important;
}
.footer-main .container::after {
    content: "";
    text-align: center !important;
    display: block;
    height: 80px !important;
    background-image: url(image/logo.jpeg);
    background-size: contain !important;
    background-repeat: no-repeat !important;
    background-position: top center !important;
}
.sub-nav__menu svg {
    display: inline-block;
    vertical-align: middle;
    width: 30px;
    height: 30px;
    fill: #000000 !important;
    background: #ffd333;
    background-image: initial;
    background-position-x: initial;
    background-position-y: initial;
    background-size: initial;
    background-repeat-x: initial;
    background-repeat-y: initial;
    background-attachment: initial;
    background-origin: initial;
    background-clip: initial;
    background-color: #ffd333;
    border-radius: 1rem 1rem 0rem 1rem;
    border-top-left-radius: 1rem;
    border-top-right-radius: 1rem;
    border-bottom-right-radius: 0rem;
    border-bottom-left-radius: 1rem;
}
.salla-theme_6 .sub-nav .sub-nav-content {
    padding-bottom: 5px;
    background-color: #0a60b933;
    border: 1px solid #0a60b9;
    border-bottom:0;
    border-top-left-radius:20px;
}
.sub-nav-header {
    background-color: #0a60b933;
    border: 1px solid #0a60b9;
    border-bottom:0;
    border-top-left-radius:20px;
}
.sub-nav .main-menu li.sub-menu-header.categories-holder ul.store-categories li ul {
    background-color: #0a60b933;
    border:0;
}
header.categories-holder ul.store-categories li.active {
    background-color: #0a60b9;
}
.sub-nav .main-menu li.sub-menu-header.categories-holder>span {
    display: block;
    width: max-content;
    font-weight: 400;
    padding: 5px 15px!important;
    border: 5px solid #eee;
    background-color: #ffd333;
    color: black;
    border-radius: 25px;
    margin-right: 22%;
    margin-left: 23%;
    margin-bottom:10px;
}
.sub-nav .main-menu li#ls_switcher_mobile {
    border-top: 0;
}
.sub-nav .main-menu li.sub-menu-header.categories-holder ul.store-categories li a {
    min-height: 40px;
    padding: 5px 15px!important;
    font-size: 15px!important;
    background-color: #ffd333;
    margin-bottom: 10px;
    border: 5px solid #eee;
    border-bottom-left-radius: 25px;
    border-top-right-radius: 25px;
    border-top-left-radius:10px;
    margin-right:10px;
    margin-left:10px;
    color:#000000;
}
.sub-nav .main-menu li.sub-menu-header.categories-holder ul.store-categories li a:hover{
    background-color: #0a60b9;
    color:#ffffff;
}
.sub-nav-header::before {
    content: "";
    text-align: center !important;
    display: block;
    height: 120px !important;
    background-image: url(https://cdn.salla.sa/PydyK/nTR77Nabl3TY4RrV5L21YeAdCfDSAYLlptwjr2hb.png);
    background-size: contain !important;
    background-repeat: no-repeat !important;
    background-position: top center !important;
}
.sub-nav-header img {
    display: none;
}
.sub-nav .main-menu li.sub-menu-header.categories-holder ul.store-categories li.active {
    background-color: #0a60b933;
}
.sub-nav .main-menu li.sub-menu-header.categories-holder ul.store-categories li ul li a {
    min-height: 40px;
    padding: 5px 15px!important;
    font-size: 15px!important;
    background-color: #ffd333;
    margin-bottom: 10px;
    border: 5px solid #eee;
    border-bottom-left-radius: 25px;
    border-top-right-radius: 25px;
    border-top-left-radius:10px;
    margin-right:10px;
    margin-left:10px;
    color:#000000;
    
}
.sub-nav .main-menu li.sub-menu-logged-in a i {
    color: #fff;
}
.salla-theme_6 .sub-nav .main-menu>li>a {
    color: #fff;
}
.sub-nav .main-menu li.sub-menu-header.categories-holder ul.store-categories li ul li a:hover {
    background-color: #0a60b9;
    color:#ffffff;
}
.sub-nav .main-menu li.sub-menu-header.categories-holder ul.store-categories li {
    display: block!important;
    position: relative;
    border-bottom: 0;
}


.whatsapp-ico{
    fill: white;
    width: 50px;
    height: 50px;
    padding: 3px;
    background-color: #4dc247;
    border-radius: 50%;
    box-shadow: 2px 2px 6px rgba(0,0,0,0.4);
    /* box-shadow: 2px 2px 11px rgba(0,0,0,0.7); */
    position: fixed;
    bottom: 20px;
    right : 20px;
    z-index: 10;
}

.whatsapp-ico:hover{
    box-shadow: 2px 2px 11px rgba(0,0,0,0.7);
}

	#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {
  opacity: 0.7;
}

.modal {
  display: none;
  /* Hidden by default */
  position: fixed;
  /* Stay in place */
  z-index: 1;
  /* Sit on top */
  padding-top: 100px;
  /* Location of the box */
  left: 0;
  top: 0;
  width: 100%;
  /* Full width */
  height: 100%;
  /* Full height */
  overflow: auto;
  /* Enable scroll if needed */
  background-color: rgb(0, 0, 0);
  /* Fallback color */
  background-color: rgba(0, 0, 0, 0.9);
  /* Black w/ opacity */
}

.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

.modal-content,
#caption {
  animation-name: zoom;
  animation-duration: 0.6s;
}

@keyframes zoom {
  from {
    transform: scale(0)
  }
  to {
    transform: scale(1)
  }
}

.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

@media only screen and (max-width: 700px) {
  .modal-content {
    width: 100%;
  }
}

</style>

    
    
    
    
<style>.categories-nav::after{background: none}</style><style data-styled="active" data-styled-version="5.1.1"></style><style data-styled="active" data-styled-version="5.1.1"></style><style data-styled="active" data-styled-version="5.1.1"></style>
</head>
<body class="store-home salla-theme_6 color-mode-dark font-apple">
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TGFC6FV"
height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<?php 
include 'connection.php';
$result3=mysqli_query($link,"Select * from message");
while($row3=mysqli_fetch_array($result3)){
?>
<div class="store-notify" style="background-color: <?php echo $row3['background_color']; ?>; color:<?php echo $row3['color']; ?>">
<a href="" class="ajax" data-nonconfirm="true" data-type="GET" data-show-loading="false" id="notify-close">
<i class="sicon-cancel"></i>
</a>
<i class="sicon-explode"></i>
<p>
<?php echo $row3['msg']; ?>
</p>
</div>
<?php } ?>
<noscript>
    To get full functionality of this site you need to enable JavaScript. Here is how
    <a href="https://www.enable-javascript.com/" rel="nofollow noopener noreferrer"
       target="_blank">To enable JavaScript on webpage</a>.
</noscript>
<header class="site-header" style="margin-top: 40px;">

<div class="container py-3 header-top">
<div class="row header-wrapper">
<div class="col-md-3 logo-wrapper d-flex d-lg-block">

<h1 class="logo">
<a href="https://www.zoomtv.online/">
<img src="image/logo.jpeg" alt="">
</a>
</h1>
</div>
<div class="col-sm-12 col-md-6 d-lg-flex search-container">
<div class="search-wrapper">
<div id="search">
<form id="search_form" action="">
<div class="ui category search">
<div class="ui icon input">
<input id="searchbox" name="q" class="prompt form-control" type="text" placeholder="أدخل كلمة البحث" autocomplete="off">
<i class="search icon"></i>
</div>
<div class="results"></div>
</div>
</form>
</div> </div>
</div>

<div class="col-md-3 d-flex align-items-center d-lg-block actions-container">

</div>


</div>
</div>
</header>

<section class="section" data-type="banner">
<div class="container banner">
<a href="#">
<img src="image/logo1.jpeg" alt="">
</a>
</div>
</section>
<section class="section" data-type="banner">
<div class="container banner">
<a href="#">
<img src="image/logo2.jpeg" alt="">
</a>
</div>
</section>
  
   <?php 
include 'connection.php';
$result1=mysqli_query($link,"SELECT title1 FROM add_share INNER JOIN title_share ON add_share.title1=title_share.title GROUP BY title1 ORDER BY add_share.id

");
            while($row1 =mysqli_fetch_array($result1)){
            ?>
<section class="section">
<div class="container">
   
<div class="section-header d-flex">
<h2 class="section--title">
<span><?php echo $row1['title1']; ?></span>
</h2>
</div>
<div class="row products-grid eq-height">
     <?php 
include 'connection.php';
$result=mysqli_query($link,"select * from add_share





");
            while($row =mysqli_fetch_array($result)){
                if($row['title1']==$row1['title1']){
            ?>

 
<div class="col-xs-6 col-sm-4 col-lg-3">
<div class="product contain">
<a  rel="canonical">
<span class="img-cont">
      <?php echo '<img class="myImages" id="myImg" src="data:image;base64 ,'.$row['image'].'" >';?>
      <div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
</span> 
       
<script>
  var modal = document.getElementById('myModal');
// to all images -- note I'm using a class!
var images = document.getElementsByClassName('myImages');
// the image in the modal
var modalImg = document.getElementById("img01");
// and the caption in the modal
var captionText = document.getElementById("caption");

// Go through all of the images with our custom class
for (var i = 0; i < images.length; i++) {
  var img = images[i];
  // and attach our click listener for this image.
  img.onclick = function(evt) {
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
  }
}

var span = document.getElementsByClassName("close")[0];

span.onclick = function() {
  modal.style.display = "none";
}
    
</script>

<h3 class="product-title">
<?php echo $row['description']; ?>
</h3>
<p class="product-price hidden-md hidden-lg hidden-sm">
<span class="product-price" dir="ltr"> <?php echo $row['price']; ?></span>
</p>
</a>
<div class="product-footer">
<p class="product-price hidden-xs">
<span class="product-price" dir="ltr"> <?php echo $row['price']; ?></span>
</p>
<a href="buy.php?ID=<?php echo $row['id']; ?>"class="product-add add_to_cart_btn" data-product-id="1509076875" data-price="300" data-currency="SAR">
<span class="sicon-cart"></span>
<span>شراء</span>
</a>

</div>
</div>
</div>

<?php } 
}?>
</div>
</div>
</section>
<?php } ?>





<section class="u-light py-5 text-center">
<div class="container">
<h2 class="section--title mb-4">مزايا المتجر</h2>
<div class="row">
<div class="col-sm-6 col-md-4 feature-item">
<div class="feature-item__icon">
    <i class="sicon-crdit-card-alt"></i>
</div>


<h3> طرق دفع متعددة </h3>
<p>   فيزا - ابل باي    </p>

</div>
<div class="col-sm-6 col-md-4 feature-item">
<div class="feature-item__icon">
<i class="sicon-rocket"></i>
</div>
<h3> تفعيل اشتراك فوري </h3>
<p> يتم تفعيل اشتراك بعد الدفع مباشرة </p>
</div>
<div class="col-sm-6 col-md-4 feature-item">
<div class="feature-item__icon">
<i class="sicon-headset"></i>
</div>
<h3> الدعم الفني </h3>
<p> خدمة عملاء على مدار 24 ساعة </p>
</div>
</div>
</div>
</section>


<footer>
<div class="footer-main">
<div class="container">
<div class="row">
<div class="col-md-4">
<h2 class="footer-title">
<span>من نحن</span>
</h2>
<p>متجر zoom TV يقدم لكم خدمة القنوات والافلام والمسلسلات عبر اجهزتك الذكية عن طريق الانترنت بدون الحاجه الي طبق (دش) ، من أكبر أهدافنا كسب العميل و تقديم الخدمة بشكل إحترافي.</p>

<div class="store-contact">
</div>
<div class="store-certificate">
</div>
<div class="modal fade" id="tax_certificate_modal">
<div class="modal-dialog" role="document">
 <div class="modal-content">
<div class="modal-header no-border">
</div>
<div class="modal-body text-center">
</div>
</div>
</div>
</div> </div>

<div class="col-md-4">
<h2 class="footer-title">
<span>تواصل معنا</span>
</h2>
<ul class="social clearfix">
</ul>
</div>
</div>
</div>
</div>
<div class="footer-sub">
<div class="container">
<div class="fs-cont">
<div class="fs-rights">
<p class="mb-4 mb-md-0">
الحقوق محفوظة ZOOM TV © 2021
</p>
</div>
<div class="fs-payment">
<div class="icons">
<div class="store-certificate">
</div>
<div class="modal fade" id="tax_certificate_modal">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header no-border">
</div>
<div class="modal-body text-center">
</div>
</div>
</div>
</div> <div>
<img src="https://assets.salla.cloud/themes/default/assets/images/cc.png?v=v1.4.170" alt=" ">
<img src="https://assets.salla.cloud/themes/default/assets/images/applepay.svg?v=v1.4.170" alt=" ">
<img src="https://assets.salla.cloud/themes/default/assets/images/cod.png?v=v1.4.170" alt=" ">
</div>
</div>
</div>
</div>
</div>
</div>
</footer>
<div class="nav-overlay"></div>
<div id="div_ajax"></div>
<script type="text/javascript">
    var _token = 'cwXUMcR2sP0DuX0YZ2tNJb9RQloT9q6zqsoUlyEB';
    var _store = 'one1tv';
    var baseUrl = 'https://www.zoomtv.online/';
        //<![CDATA[
    var Salla = Salla || {};
    Salla.shop = "https://www.zoomtv.online/";
    Salla.token = "cwXUMcR2sP0DuX0YZ2tNJb9RQloT9q6zqsoUlyEB";
    Salla.theme = {'name': "theme_6"};
    Salla.Settings = {'arabic_numbers': "0"};
    //]]>
</script>
<script src="https://assets.salla.cloud/js/es.js?id=75078b7aedbbc5fa0a8f" type="text/javascript"></script>
<script src="https://assets.salla.cloud/js/app.js?id=e5bda08974cb5202ed4d" type="text/javascript"></script>
<script src="https://assets.salla.cloud/js/themes.js?id=745a2e19cea043d82a1d" type="text/javascript"></script>
<script type="application/javascript">
    window.Salla = window.Salla || {};
    window.Salla.Events = {"dashboard::page.view":{"route":"store.home","link":"https:\/\/one1-tv.com"},"services::facebook_pixel.init":{"services":{"facebook_pixel":{"pixel_id":"146470704196667"}}},"services::google_analytics.init":{"services":{"google_analytics":{"tracking_id":"UA-186689461-1"}}}};
</script>
<script src="https://assets.salla.cloud/vendor/salla/events.js" type="text/javascript"></script><script type="text/javascript">
    Salla.event.addEventListener('cart::add-item', function (event) {
        try {
            var cart_widget_summary = event.detail.data.data.cart;
            localStore.set('cart_widget_summary', cart_widget_summary);
        } catch (err) {
        }
    });

    Salla.event.addEventListener('cart::delete-item', function (event) {
        try {
            localStore.set('cart_widget_summary', event.detail.data.data.cart);
        } catch (err) {
        }
    });

    cart_widget_summary = localStore.get('cart_widget_summary');
    if (!!cart_widget_summary && Salla.cart.elements.badge.length) {
        Salla.cart.elements.badge.text(cart_widget_summary.count);

        var total = cart_widget_summary.total;
        if (typeof total == 'object' && total.hasOwnProperty('amount')) {
            total = total['amount'] + (total.hasOwnProperty('currency') ? ' ' + total['currency'] : '');
        }
        Salla.cart.elements.total.text(total);
    }
</script>
<script type="text/javascript" src="https://assets.salla.cloud/themes/default/assets/js/plugins/slick.js?v=v1.4.170"></script>
<script type="text/javascript" src="https://assets.salla.cloud/themes/theme_6/assets/js/app.js?v=v1.4.170"></script>
<script type="text/javascript" src="https://assets.salla.cloud/themes/default/assets/js/plugins/jquery-ui.min.js?v=v1.4.170"></script><div class="pace-demo hidden">
<script>



</script>
<div class="theme_tail_circle">
<div class="pace_progress" data-progress-text="60%" data-progress="60"></div>
<div class="pace_activity"></div>
</div>
</div>
<div id="div_ajax"></div>

 <?php 
include 'connection.php';
$result=mysqli_query($link,"select * from mobile");
            while($row =mysqli_fetch_array($result)){
            ?>



            <a href="https://wa.me/<?php echo $row['mobile']; ?>">
                <svg viewBox="0 0 32 32" class="whatsapp-ico">
                    <path d=" M19.11 17.205c-.372 0-1.088 1.39-1.518 1.39a.63.63 0 0 1-.315-.1c-.802-.402-1.504-.817-2.163-1.447-.545-.516-1.146-1.29-1.46-1.963a.426.426 0 0 1-.073-.215c0-.33.99-.945.99-1.49 0-.143-.73-2.09-.832-2.335-.143-.372-.214-.487-.6-.487-.187 0-.36-.043-.53-.043-.302 0-.53.115-.746.315-.688.645-1.032 1.318-1.06 2.264v.114c-.015.99.472 1.977 1.017 2.78 1.23 1.82 2.506 3.41 4.554 4.34.616.287 2.035.888 2.722.888.817 0 2.15-.515 2.478-1.318.13-.33.244-.73.244-1.088 0-.058 0-.144-.03-.215-.1-.172-2.434-1.39-2.678-1.39zm-2.908 7.593c-1.747 0-3.48-.53-4.942-1.49L7.793 24.41l1.132-3.337a8.955 8.955 0 0 1-1.72-5.272c0-4.955 4.04-8.995 8.997-8.995S25.2 10.845 25.2 15.8c0 4.958-4.04 8.998-8.998 8.998zm0-19.798c-5.96 0-10.8 4.842-10.8 10.8 0 1.964.53 3.898 1.546 5.574L5 27.176l5.974-1.92a10.807 10.807 0 0 0 16.03-9.455c0-5.958-4.842-10.8-10.802-10.8z" fill-rule="evenodd"></path>
                    </svg>
                    </a>
                    
                    <?php } ?>
                    
                   
</body>
</html>
<?php } ?>