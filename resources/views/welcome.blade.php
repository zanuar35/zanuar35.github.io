<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Investani</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="tsUDTmimE0AknOEiA1RzkADm8eVoKVX1rHIJTRMc">
    <meta name="description"
      content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ut tortor rutrum massa efficitur tincidunt vel nec lacus. Curabitur porta aliquet diam, eu gravida neque lacinia in. Praesent eget orci id sem commodo aliquet.">
    <meta name="keywords" content="Crowdfunding,crowfund,fundme,campaign">
    <link rel="shortcut icon" href="https://i.ibb.co/zRPPP3J/logoinves.png">

   
    <link href="{!! asset('assets/core.css') !!}" rel="stylesheet">
    <link href="{!! asset('assets/master.css') !!}" rel="stylesheet">

  
    <script src="https://connect.facebook.net/en_US/sdk.js?hash=a761286953d477c0ae0dbb63db367f1d&amp;ua=modern_es6"
      async="" crossorigin="anonymous"></script>
    <script id="facebook-jssdk"
      src="//connect.facebook.net/en_US/sdk.js#xfbml=1&amp;version=v2.8&amp;appId=833373956732438"></script>
    <script type="text/javascript">
      // URL BASE
      var URL_BASE = "";
      // ReadMore
      var ReadMore = "View more...";
      var ReadLess = "View less...";
    </script>
  
    <style>
      ::selection {
        background-color: #f45302;
        color: white;
      }
      
      .logo-footer{
        margin-left : 530px;
      }
      

      ::moz-selection {
        background-color: #f45302;
        color: white;
      }
  
      ::webkit-selection {
        background-color: #f45302;
        color: white;
      }
  
      .footer-wrapper .footer-main {
        border-top: 2px solid #0d2b2e;
       }

      .pt-4, .py-4 {
          padding-top: 1.5rem!important;
      }
      .pb-2, .py-2 {
          padding-bottom: .5rem!important;
      }
      .w-100 {
          width: 100%!important;
      }

      body a,
      a:hover,
      a:focus,
      a.page-link,
      .btn-outline-primary {
        color: #f45302;
      }
  
      .btn-primary:not(:disabled):not(.disabled).active,
      .btn-primary:not(:disabled):not(.disabled):active,
      .show>.btn-primary.dropdown-toggle,
      .btn-primary:hover,
      .btn-primary:focus,
      .btn-primary:active,
      .btn-primary,
      .btn-primary.disabled,
      .btn-primary:disabled,
      .custom-checkbox .custom-control-input:checked~.custom-control-label::before,
      .page-item.active .page-link,
      .page-link:hover {
        background-color: #f45302;
        border-color: #f45302;
      }
  
      .bg-primary,
      .dropdown-item:focus,
      .dropdown-item:hover,
      .dropdown-item.active,
      .dropdown-item:active,
      .owl-theme .owl-dots .owl-dot.active span,
      .owl-theme .owl-dots .owl-dot:hover span,
      #updates li:hover:before {
        background-color: #f45302 !important;
      }
  
      .owl-theme .owl-dots .owl-dot.active span::before,
      .owl-theme .owl-dots .owl-dot:hover span::before,
      .form-control:focus,
      .custom-checkbox .custom-control-input:indeterminate~.custom-control-label::before,
      .custom-control-input:focus:not(:checked)~.custom-control-label::before,
      .custom-select:focus,
      .btn-outline-primary {
        border-color: #f45302;
      }
  
      .custom-control-input:not(:disabled):active~.custom-control-label::before,
      .custom-control-input:checked~.custom-control-label::before,
      .btn-outline-primary:hover,
      .btn-outline-primary:focus,
      .btn-outline-primary:not(:disabled):not(.disabled):active {
        color: #fff;
        background-color: #f45302;
        border-color: #f45302;
      }
  
      .ribbon-1 {
        z-index: 999;
      }
    </style>
    <!-- Scripts -->
    <script>
      window.Laravel = { "csrfToken": "tsUDTmimE0AknOEiA1RzkADm8eVoKVX1rHIJTRMc" }    </script>
    <script src="chrome-extension://mooikfkahbdckldjjndioackbalphokd/assets/prompt.js"></script>
    <style type="text/css" data-fbcssmodules="css:fb.css.basecss:fb.css.dialog css:fb.css.iframewidget">
      .fb_hidden {
        position: absolute;
        top: -10000px;
        z-index: 10001
      }
  
      .fb_reposition {
        overflow: hidden;
        position: relative
      }
  
      .fb_invisible {
        display: none
      }
  
      .fb_reset {
        background: none;
        border: 0;
        border-spacing: 0;
        color: #000;
        cursor: auto;
        direction: ltr;
        font-family: "lucida grande", tahoma, verdana, arial, sans-serif;
        font-size: 11px;
        font-style: normal;
        font-variant: normal;
        font-weight: normal;
        letter-spacing: normal;
        line-height: 1;
        margin: 0;
        overflow: visible;
        padding: 0;
        text-align: left;
        text-decoration: none;
        text-indent: 0;
        text-shadow: none;
        text-transform: none;
        visibility: visible;
        white-space: normal;
        word-spacing: normal
      }
  
      .fb_reset>div {
        overflow: hidden
      }
  
      @keyframes fb_transform {
        from {
          opacity: 0;
          transform: scale(.95)
        }
  
        to {
          opacity: 1;
          transform: scale(1)
        }
      }
  
      .fb_animate {
        animation: fb_transform .3s forwards
      }
  
      .fb_dialog {
        background: rgba(82, 82, 82, .7);
        position: absolute;
        top: -10000px;
        z-index: 10001
      }
  
      .fb_dialog_advanced {
        border-radius: 8px;
        padding: 10px
      }
  
      .fb_dialog_content {
        background: #fff;
        color: #373737
      }
  
      .fb_dialog_close_icon {
        background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;
        cursor: pointer;
        display: block;
        height: 15px;
        position: absolute;
        right: 18px;
        top: 17px;
        width: 15px
      }
  
      .fb_dialog_mobile .fb_dialog_close_icon {
        left: 5px;
        right: auto;
        top: 5px
      }
  
      .fb_dialog_padding {
        background-color: transparent;
        position: absolute;
        width: 1px;
        z-index: -1
      }
  
      .fb_dialog_close_icon:hover {
        background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent
      }
  
      .fb_dialog_close_icon:active {
        background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent
      }
  
      .fb_dialog_iframe {
        line-height: 0
      }
  
      .fb_dialog_content .dialog_title {
        background: #6d84b4;
        border: 1px solid #365899;
        color: #fff;
        font-size: 14px;
        font-weight: bold;
        margin: 0
      }
  
      .fb_dialog_content .dialog_title>span {
        background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;
        float: left;
        padding: 5px 0 7px 26px
      }
  
      body.fb_hidden {
        height: 100%;
        left: 0;
        margin: 0;
        overflow: visible;
        position: absolute;
        top: -10000px;
        transform: none;
        width: 100%
      }
  
      .fb_dialog.fb_dialog_mobile.loading {
        background: url(https://static.xx.fbcdn.net/rsrc.php/v3/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;
        min-height: 100%;
        min-width: 100%;
        overflow: hidden;
        position: absolute;
        top: 0;
        z-index: 10001
      }
  
      .fb_dialog.fb_dialog_mobile.loading.centered {
        background: none;
        height: auto;
        min-height: initial;
        min-width: initial;
        width: auto
      }
  
      .fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner {
        width: 100%
      }
  
      .fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content {
        background: none
      }
  
      .loading.centered #fb_dialog_loader_close {
        clear: both;
        color: #fff;
        display: block;
        font-size: 18px;
        padding-top: 20px
      }
  
      #fb-root #fb_dialog_ipad_overlay {
        background: rgba(0, 0, 0, .4);
        bottom: 0;
        left: 0;
        min-height: 100%;
        position: absolute;
        right: 0;
        top: 0;
        width: 100%;
        z-index: 10000
      }
  
      #fb-root #fb_dialog_ipad_overlay.hidden {
        display: none
      }
  
      .fb_dialog.fb_dialog_mobile.loading iframe {
        visibility: hidden
      }
  
      .fb_dialog_mobile .fb_dialog_iframe {
        position: sticky;
        top: 0
      }
  
      .fb_dialog_content .dialog_header {
        background: linear-gradient(from(#738aba), to(#2c4987));
        border-bottom: 1px solid;
        border-color: #043b87;
        box-shadow: white 0 1px 1px -1px inset;
        color: #fff;
        font: bold 14px Helvetica, sans-serif;
        text-overflow: ellipsis;
        text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0;
        vertical-align: middle;
        white-space: nowrap
      }
  
      .fb_dialog_content .dialog_header table {
        height: 43px;
        width: 100%
      }
  
      .fb_dialog_content .dialog_header td.header_left {
        font-size: 12px;
        padding-left: 5px;
        vertical-align: middle;
        width: 60px
      }
  
      .fb_dialog_content .dialog_header td.header_right {
        font-size: 12px;
        padding-right: 5px;
        vertical-align: middle;
        width: 60px
      }
  
      .fb_dialog_content .touchable_button {
        background: linear-gradient(from(#4267B2), to(#2a4887));
        background-clip: padding-box;
        border: 1px solid #29487d;
        border-radius: 3px;
        display: inline-block;
        line-height: 18px;
        margin-top: 3px;
        max-width: 85px;
        padding: 4px 12px;
        position: relative
      }
  
      .fb_dialog_content .dialog_header .touchable_button input {
        background: none;
        border: none;
        color: #fff;
        font: bold 12px Helvetica, sans-serif;
        margin: 2px -12px;
        padding: 2px 6px 3px 6px;
        text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0
      }
  
      .fb_dialog_content .dialog_header .header_center {
        color: #fff;
        font-size: 16px;
        font-weight: bold;
        line-height: 18px;
        text-align: center;
        vertical-align: middle
      }
  
      .fb_dialog_content .dialog_content {
        background: url(https://static.xx.fbcdn.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;
        border: 1px solid #4a4a4a;
        border-bottom: 0;
        border-top: 0;
        height: 150px
      }
  
      .fb_dialog_content .dialog_footer {
        background: #f5f6f7;
        border: 1px solid #4a4a4a;
        border-top-color: #ccc;
        height: 40px
      }
  
      #fb_dialog_loader_close {
        float: left
      }
  
      .fb_dialog.fb_dialog_mobile .fb_dialog_close_icon {
        visibility: hidden
      }
  
      #fb_dialog_loader_spinner {
        animation: rotateSpinner 1.2s linear infinite;
        background-color: transparent;
        background-image: url(https://static.xx.fbcdn.net/rsrc.php/v3/yD/r/t-wz8gw1xG1.png);
        background-position: 50% 50%;
        background-repeat: no-repeat;
        height: 24px;
        width: 24px
      }
  
      @keyframes rotateSpinner {
        0% {
          transform: rotate(0deg)
        }
  
        100% {
          transform: rotate(360deg)
        }
      }
  
      .fb_iframe_widget {
        display: inline-block;
        position: relative
      }
  
      .fb_iframe_widget span {
        display: inline-block;
        position: relative;
        text-align: justify
      }
  
      .fb_iframe_widget iframe {
        position: absolute
      }
  
      .fb_iframe_widget_fluid_desktop,
      .fb_iframe_widget_fluid_desktop span,
      .fb_iframe_widget_fluid_desktop iframe {
        max-width: 100%
      }
  
      .fb_iframe_widget_fluid_desktop iframe {
        min-width: 220px;
        position: relative
      }
  
      .fb_iframe_widget_lift {
        z-index: 1
      }
  
      .fb_iframe_widget_fluid {
        display: inline
      }
  
      .fb_iframe_widget_fluid span {
        width: 100%
      }
    </style>
    </head>
    <body class="antialiased">
        <div id="fb-root" class=" fb_reset">
      <div style="position: absolute; top: -10000px; width: 0px; height: 0px;">
        <div></div>
      </div>
    </div>
    <script>(function (d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=833373956732438";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
  
    <div class="popout font-default"></div>
    <div class="btn-block text-center showBanner py-2" style="display:none;">
      <i ></i> This site uses cookies, by continuing to use the service, you accept our use of
      cookies
      <button class="btn btn-sm btn-primary" id="close-banner">Got It!</button>
    </div>
  
  
    <div id="search">
      <button type="button" class="close">×</button>
      <form autocomplete="off" action="" method="get">
        <input type="text" value="" name="q" id="btnItems" placeholder="Enter Search Query...">
        <button type="submit" class="btn btn-lg no-shadow btn-trans custom-rounded d-none btn_search"
          id="btnSearch">Search</button>
      </form>
    </div>
  
    <header>
      <nav class="navbar navbar-expand-md navbar-inverse fixed-top py-3  scroll ">
        <div class="container d-flex font-weight-bold">
          <a class="navbar-brand" href="/welcome">
            <img src="https://i.ibb.co/fxZ8GPN/Group-1336-4.png" style="max-width: 100px;"
              class="align-baseline" alt="Fundme | Crowdfunding Platform">
          </a>
          <ul class="navbar-nav ml-auto d-lg-none">
            <li class="nav-item">
              <a class="nav-link search" href="#search"><i class="fa fa-search"></i></a>
            </li>
          </ul>
  
          <button class="navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
  
            <div class="d-lg-none text-right">
              <a href="javascript:;" class="close-menu" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false"><i class="fa fa-times"></i></a>
            </div>
  
            <ul class="navbar-nav mr-auto">
  
              <li class="nav-item ">
                <a class="nav-link" href="/carakerja">Cara Kerja</a>
              </li>

              <li class="nav-item ">
                <a class="nav-link" href="/produk">Produk Dan Layanan</a>
              </li>
  
            
            <li class="nav-item d-none d-lg-block">
                <a class="nav-link search" href="#search"><i><img src="https://www.clipartmax.com/png/full/74-742441_preamps-white-search-icon-svg.png" widht="18" height="18" alt=""></i></a>
              </li>
            </ul>
  
            <ul class="navbar-nav ml-auto">
  
  
              <li class="nav-item mr-1">
                <a class="nav-link" href="/login">Login</a>
              </li>
  
              <li class="nav-item">
                <a class="nav-link btn btn-primary pr-3 pl-3 btn-create no-hover"
                  href="/create">Buat Pengajuan</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
  
    <main role="main">
      <!-- CAROUSEL -->
      <div id="myCarousel" class="carousel slide carousel-fade mb-0" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class=""></li>
          <li data-target="#myCarousel" data-slide-to="1" class=""></li>
          <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
  
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item carousel-cover"
            style="background: url('https://images.pexels.com/photos/3019836/pexels-photo-3019836.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500') no-repeat center center #232a29; background-size: cover;">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1 class="vivify driveInLeft delay-500 display-4">Bantu Petani di Era Pandemi Covid-19</h1>
                <p class="vivify fadeInBottom delay-600">Dengan Investani : Platform bagi hasil di Peternakan dan Pertanian</p>
                <p class="vivify fadeInRight"><a class="btn btn-lg btn-primary"
                    href="#proyek" role="button">Lihat Proyek</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item carousel-cover"
            style="background: url('https://images.pexels.com/photos/4911723/pexels-photo-4911723.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940') no-repeat center center #232a29; background-size: cover;">
            <div class="container">
              <div class="carousel-caption">
                <h1 class="vivify fadeInTop delay-600 display-4">Pendanaan Berdampak untuk Masa Depan Petani</h1>
                <p class="vivify fadeInBottom delay-600">Melalui pendanaan dari Anda, kita wujudkan ekosistem pertanian yang lebih baik untuk kesejahteraan petani Indonesia.</p>
                <p class="vivify fadeInLeft"><a class="btn btn-lg btn-primary"
                    href="#proyek" role="button">Lihat Proyek</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item carousel-cover active"
            style="background: url('https://images.pexels.com/photos/2804327/pexels-photo-2804327.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500') no-repeat center center #232a29; background-size: cover;">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1 class="vivify fadeInBottom delay-600 display-4">Semua orang bisa menanam</h1>
                <p class="vivify fadeInTop delay-600">Anda bisa merasakan bagaimana memiliki dan mengelola pertanian dan peternakan tanpa harus memiliki lahan, kemampuan, dan akses market
                </p>
                <p class="vivify fadeInRight"><a class="btn btn-lg btn-primary"
                    href="#proyek" role="button">Lihat Proyek</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!-- ./ CAROUSEL -->
  
      <div class="section py-5">
        <div class="btn-block text-center mb-5">
          <h1>Apa Saja Keunggulannya</h1>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="card campaigns mb-4 shadow-sm">
                <a href="" class="p-relative">
                  <img class="card-img-top"
                    src="https://i.ibb.co/Nm1vkSG/Group-1337.png"
                    alt="Demo Page">
                </a>
                <div class="card-body">
                  <h5 class="card-title text-truncate">
                    <a href="" class="text-dark">
                      Sesuai Prinsip Syariah
                    </a>
                  </h5>
                  <div class="progress progress-xs mb-4">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 0.00%">
                    </div>
                  </div>
                  <p class="card-text text-truncate">Kegiatan yang dilakukan bebas dari transaksi <br> yang dilarang oleh syariat Islam.</p>
                  <hr>
                </div>
              </div>
            </div><!-- /col -->

            

            <div class="col-md-4">
              <div class="card campaigns mb-4 shadow-sm">
                <a href="" class="p-relative">
                  <img class="card-img-top"
                    src="https://i.ibb.co/LgJ9NXf/Group-1337-1.png"
                    alt="Demo Page">
                </a>
                <div class="card-body">
                  <h5 class="card-title text-truncate">
                    <a href="" class="text-dark">
                      Transparan
                    </a>
                  </h5>
                  <div class="progress progress-xs mb-4">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 0.00%">
                    </div>
                  </div>
                  <p class="card-text text-truncate">Tidak ada beban biaya dan prosedur yang <br> tersembunyi</p>
                  <hr>
                </div>
              </div>
            </div><!-- /col -->

            <div class="col-md-4">
              <div class="card campaigns mb-4 shadow-sm">
                <a href="" class="p-relative">
                  <img class="card-img-top"
                    src="https://i.ibb.co/6Ysxqq1/Group-1337-2.png"
                    alt="Gallery 1">
                </a>
                <div class="card-body">
                  <h5 class="card-title text-truncate">
                    <a href="" class="text-dark">
                      Mudah Bagi Pemula
                    </a>
                  </h5>
                  <div class="progress progress-xs mb-4">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 0.12%">
                    </div>
                  </div>
                  <p class="card-text text-truncate">Tidak banyak syarat untuk mengajukan proyek</p>
    
                


                  <hr>
                </div>
              </div>
            </div><!-- /col -->
      </div>
      </div>
      </div>
  
  
      <!-- Featured Campaigns -->


      <div class="section py-5">
        <div class="btn-block text-center mb-5">
          <span class="display-4 text-warning"><i><img src="https://www.iconpacks.net/icons/1/free-award-icon-1362-thumb.png" widht="80" height="80" alt=""></i></span>
          <h1>Proyek Pilihan</h1>
        </div>


        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="card campaigns mb-4 shadow-sm">
                <a href="/1" class="p-relative">
                  <div class="ribbon-1" title="Featured Campaign"><i><img src="https://www.iconpacks.net/icons/1/free-award-icon-1362-thumb.png" widht="30" height="30" alt=""></i></div>
                  <img class="card-img-top"
                    src="https://i.pinimg.com/564x/d7/9c/be/d79cbe055eecf1f8f5ee7d9b0e2ca6fa.jpg"
                    alt="Charity Vimeo"  height="265">
                </a>
                <div class="card-body">
                  <small class="btn-block mb-1"><p
                      class="text-muted"><i><img src="https://www.iconpacks.net/icons/1/free-award-icon-1362-thumb.png" widht="30" height="30" alt=""></i>Pertanian</p></small>
                  <h5 class="card-title text-truncate">
                    <a href="/1" class="text-dark">
                      Tomat Merah
                    </a>
                  </h5>
                  <div class="progress progress-xs mb-4">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 61%">
                    </div>
                  </div>
                  <p class="card-text text-truncate">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ut
                    tortor rutru...</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <strong>Rp 30.500.000</strong>
                    <small class="font-weight-bold">61%</small>
                  </div>
                  <small class="text-muted">dari Rp 50.000.000</small>
                  <hr>
                  <div class="d-flex justify-content-between align-items-center">
                    <span class="text-truncate">
                      <img src="https://i.ibb.co/xYr4BtD/default.jpg" width="25"
                        height="25" class="rounded-circle avatar-campaign">
                      <small>by <strong>Ahmad Muhadi</strong></small>
                    </span>
  
  
  
  
                 <small class="text-truncate"><i><img src="https://images.vexels.com/media/users/3/132607/isolated/preview/86e952b378eaa8c5ea573fa2bf280d5b-wall-clock-icon-by-vexels.png" height="12" widht="12" alt=""></i> No deadline</small>
                  </div>
                </div>
              </div>
            </div><!-- /col -->
            <div class="col-md-4">
              <div class="card campaigns mb-4 shadow-sm">
                <a href="/2" class="p-relative">
                  <div class="ribbon-1" title="Featured Campaign"><i ><img src="https://www.iconpacks.net/icons/1/free-award-icon-1362-thumb.png" widht="30" height="30" alt=""></i></div>
                  <img class="card-img-top"
                    src="https://beritabaik.id/static/upload/content/images/20200416/1587026814708-18EEF12D-49D2-4EE8-9274-96D3F3230E77-3138-00000372A22679D3.jpg "
                    alt="Community help" height="265">
                </a>
                <div class="card-body">
                  <small class="btn-block mb-1"><p
                      class="text-muted"><i><img src="https://www.iconpacks.net/icons/1/free-award-icon-1362-thumb.png" widht="30" height="30" alt=""></i>Peternakan</p></small>
                  <h5 class="card-title text-truncate">
                    <a href="/2" class="text-dark">
                      Ternak Burung Gemak
                    </a>
                  </h5>
                  <div class="progress progress-xs mb-4">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 73.15%">
                    </div>
                  </div>
                  <p class="card-text text-truncate">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ut
                    tortor rutru...</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <strong>Rp. 183.250.000</strong>
                    <small class="font-weight-bold">73%</small>
                  </div>
                  <small class="text-muted">dari Rp 250.000.000</small>
                  <hr>
                  <div class="d-flex justify-content-between align-items-center">
                    <span class="text-truncate">
                      <img src="https://i.ibb.co/xYr4BtD/default.jpg" width="25"
                        height="25" class="rounded-circle avatar-campaign">
                      <small>by <strong>Agus Lukito</strong></small>
                    </span>
  
  
  
  
                   <small class="text-truncate"><i><img src="https://images.vexels.com/media/users/3/132607/isolated/preview/86e952b378eaa8c5ea573fa2bf280d5b-wall-clock-icon-by-vexels.png" height="12" widht="12" alt=""></i> No deadline</small>
                  </div>
                </div>
              </div>
            </div><!-- /col -->
            <div class="col-md-4">
              <div class="card campaigns mb-4 shadow-sm">
                <a href="/3" class="p-relative">
                  <div class="ribbon-1" title="Featured Campaign"><i><img src="https://www.iconpacks.net/icons/1/free-award-icon-1362-thumb.png" widht="30" height="30" alt=""></i></div>
                  <img class="card-img-top"
                    src="https://cdn.akurat.co/images/uploads/images/akurat_20190810063740_77VHC7.jpg"
                    alt="Budidaya Ikan Lele" height="265">
                </a>
                <div class="card-body">
                  <small class="btn-block mb-1"><p
                      class="text-muted"><i><img src="https://www.iconpacks.net/icons/1/free-award-icon-1362-thumb.png" widht="30" height="30" alt=""></i>Perikanan</p></small>
                  <h5 class="card-title text-truncate">
                    <a href="/3" class="text-dark">
                      Budidaya Ikan Lele
                    </a>
                  </h5>
                  <div class="progress progress-xs mb-4">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 88.12%">
                    </div>
                  </div>
                  <p class="card-text text-truncate">This is a test description.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <strong>Rp 265.000.000</strong>
                    <small class="font-weight-bold">88%</small>
                  </div>
                  <small class="text-muted">dari Rp 300.000.000</small>
                  <hr>
                  <div class="d-flex justify-content-between align-items-center">
                    <span class="text-truncate">
                      <img src="https://i.ibb.co/xYr4BtD/default.jpg" width="25" height="25"
                        class="rounded-circle avatar-campaign">
                      <small>by <strong>Subiandono</strong></small>
                    </span>
                    <small class="text-truncate"><i><img src="https://images.vexels.com/media/users/3/132607/isolated/preview/86e952b378eaa8c5ea573fa2bf280d5b-wall-clock-icon-by-vexels.png" height="12" widht="12" alt=""></i> No deadline</small>
                  </div>
                </div>
              </div>
            </div><!-- /col -->
          </div>
        </div>
  

  
      <!-- New Campaigns
      ========================= -->
      <div class="section py-5" id="proyek">
        <div class="btn-block text-center mb-5">
          <h1 >Temukan Proyek Terbaru</h1>
        </div>
         <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="card campaigns mb-4 shadow-sm">
                <a href="" class="p-relative">
                  
                  <img class="card-img-top"
                    src="https://www.riauonline.co.id/foto/bank/images2/padi-di-sawah.jpg"
                    alt="Charity Vimeo"  height="265">
                </a>
                <div class="card-body">
                  <small class="btn-block mb-1"><p
                      class="text-muted"><i><img src="https://www.iconpacks.net/icons/1/free-award-icon-1362-thumb.png" widht="30" height="30" alt=""></i>Pertanian</p></small>
                  <h5 class="card-title text-truncate">
                    <a href="" class="text-dark">
                      Beras Super
                    </a>
                  </h5>
                  <div class="progress progress-xs mb-4">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 61%">
                    </div>
                  </div>
                  <p class="card-text text-truncate">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ut
                    tortor rutru...</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <strong>Rp 30.500.000</strong>
                    <small class="font-weight-bold">61%</small>
                  </div>
                  <small class="text-muted">dari Rp 50.000.000</small>
                  <hr>
                  <div class="d-flex justify-content-between align-items-center">
                    <span class="text-truncate">
                      <img src="https://i.ibb.co/xYr4BtD/default.jpg" width="25"
                        height="25" class="rounded-circle avatar-campaign">
                      <small>by <strong>Prakosa Prasetyo S.H</strong></small>
                    </span>
  
  
  
  
                 <small class="text-truncate"><i><img src="https://images.vexels.com/media/users/3/132607/isolated/preview/86e952b378eaa8c5ea573fa2bf280d5b-wall-clock-icon-by-vexels.png" height="12" widht="12" alt=""></i> No deadline</small>
                  </div>
                </div>
              </div>
            </div><!-- /col -->
            <div class="col-md-4">
              <div class="card campaigns mb-4 shadow-sm">
                <a href="/2" class="p-relative">
                  
                  <img class="card-img-top"
                    src="https://s3-ap-southeast-1.amazonaws.com/8villages/e0b65e17-8097-4aa1-aa35-5cc21269f5d7-mobile.jpg"
                    alt="Community help" height="265">
                </a>
                <div class="card-body">
                  <small class="btn-block mb-1"><p
                      class="text-muted"><i><img src="https://www.iconpacks.net/icons/1/free-award-icon-1362-thumb.png" widht="30" height="30" alt=""></i>Peternakan</p></small>
                  <h5 class="card-title text-truncate">
                    <a href="/2" class="text-dark">
                      Jagung Manis
                    </a>
                  </h5>
                  <div class="progress progress-xs mb-4">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 73.15%">
                    </div>
                  </div>
                  <p class="card-text text-truncate">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ut
                    tortor rutru...</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <strong>Rp. 183.250.000</strong>
                    <small class="font-weight-bold">73%</small>
                  </div>
                  <small class="text-muted">dari Rp 250.000.000</small>
                  <hr>
                  <div class="d-flex justify-content-between align-items-center">
                    <span class="text-truncate">
                      <img src="https://i.ibb.co/xYr4BtD/default.jpg" width="25"
                        height="25" class="rounded-circle avatar-campaign">
                      <small>by <strong>Laras Padma Haryanti</strong></small>
                    </span>
                   <small class="text-truncate"><i><img src="https://images.vexels.com/media/users/3/132607/isolated/preview/86e952b378eaa8c5ea573fa2bf280d5b-wall-clock-icon-by-vexels.png" height="12" widht="12" alt=""></i> No deadline</small>
                  </div>
                </div>
              </div>
            </div><!-- /col -->
            
            <div class="col-md-4">
              <div class="card campaigns mb-4 shadow-sm">
                <a href="/3" class="p-relative">
                  
                  <img class="card-img-top"
                    src="https://awsimages.detik.net.id/community/media/visual/2019/01/30/d0445f95-9b85-4f85-9b22-3717e9d728a4_169.jpeg?w=700&q=90"
                    alt="Budidaya Ikan Lele" height="265">
                </a>
                <div class="card-body">
                  <small class="btn-block mb-1"><p
                      class="text-muted"><i><img src="https://www.iconpacks.net/icons/1/free-award-icon-1362-thumb.png" widht="30" height="30" alt=""></i>Perikanan</p></small>
                  <h5 class="card-title text-truncate">
                    <a href="/3" class="text-dark">
                      Tambak Udang
                    </a>
                  </h5>
                  <div class="progress progress-xs mb-4">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 88.12%">
                    </div>
                  </div>
                  <p class="card-text text-truncate">This is a test description.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <strong>Rp 265.000.000</strong>
                    <small class="font-weight-bold">88%</small>
                  </div>
                  <small class="text-muted">dari Rp 300.000.000</small>
                  <hr>
                  <div class="d-flex justify-content-between align-items-center">
                    <span class="text-truncate">
                      <img src="https://i.ibb.co/xYr4BtD/default.jpg" width="25" height="25"
                        class="rounded-circle avatar-campaign">
                      <small>by <strong>Lanang Sirait M.TI.</strong></small>
                    </span>
                    <small class="text-truncate"><i><img src="https://images.vexels.com/media/users/3/132607/isolated/preview/86e952b378eaa8c5ea573fa2bf280d5b-wall-clock-icon-by-vexels.png" height="12" widht="12" alt=""></i> No deadline</small>
                  </div>
                </div>
              </div>
            </div><!-- /col -->
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="card campaigns mb-4 shadow-sm">
                <a href="/1" class="p-relative">
                  
                  <img class="card-img-top"
                    src="https://alamtani.com/wp-content/uploads/2014/04/budidaya-cabe.jpg"
                    alt="Charity Vimeo"  height="265">
                </a>
                <div class="card-body">
                  <small class="btn-block mb-1"><p
                      class="text-muted"><i><img src="https://www.iconpacks.net/icons/1/free-award-icon-1362-thumb.png" widht="30" height="30" alt=""></i>Pertanian</p></small>
                  <h5 class="card-title text-truncate">
                    <a href="/1" class="text-dark">
                      Cabai Merah
                    </a>
                  </h5>
                  <div class="progress progress-xs mb-4">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 61%">
                    </div>
                  </div>
                  <p class="card-text text-truncate">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ut
                    tortor rutru...</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <strong>Rp 30.500.000</strong>
                    <small class="font-weight-bold">61%</small>
                  </div>
                  <small class="text-muted">dari Rp 50.000.000</small>
                  <hr>
                  <div class="d-flex justify-content-between align-items-center">
                    <span class="text-truncate">
                      <img src="https://i.ibb.co/xYr4BtD/default.jpg" width="25"
                        height="25" class="rounded-circle avatar-campaign">
                      <small>by <strong>Ozy Irawan M.M.</strong></small>
                    </span>
  
  
  
  
                 <small class="text-truncate"><i><img src="https://images.vexels.com/media/users/3/132607/isolated/preview/86e952b378eaa8c5ea573fa2bf280d5b-wall-clock-icon-by-vexels.png" height="12" widht="12" alt=""></i> No deadline</small>
                  </div>
                </div>
              </div>
            </div><!-- /col -->
            <div class="col-md-4">
              <div class="card campaigns mb-4 shadow-sm">
                <a href="/2" class="p-relative">
                  
                  <img class="card-img-top"
                    src="https://www.agronet.co.id/files/media/news/images/645x372/-_180424192657-181.JPG"
                    alt="Community help" height="265">
                </a>
                <div class="card-body">
                  <small class="btn-block mb-1"><p
                      class="text-muted"><i><img src="https://www.iconpacks.net/icons/1/free-award-icon-1362-thumb.png" widht="30" height="30" alt=""></i>Peternakan</p></small>
                  <h5 class="card-title text-truncate">
                    <a href="/2" class="text-dark">
                      Peternakan Kambing Etawa
                    </a>
                  </h5>
                  <div class="progress progress-xs mb-4">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 73.15%">
                    </div>
                  </div>
                  <p class="card-text text-truncate">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ut
                    tortor rutru...</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <strong>Rp. 183.250.000</strong>
                    <small class="font-weight-bold">73%</small>
                  </div>
                  <small class="text-muted">dari Rp 250.000.000</small>
                  <hr>
                  <div class="d-flex justify-content-between align-items-center">
                    <span class="text-truncate">
                      <img src="https://i.ibb.co/xYr4BtD/default.jpg" width="25"
                        height="25" class="rounded-circle avatar-campaign">
                      <small>by <strong>Prabowo Narpati</strong></small>
                    </span>
                   <small class="text-truncate"><i><img src="https://images.vexels.com/media/users/3/132607/isolated/preview/86e952b378eaa8c5ea573fa2bf280d5b-wall-clock-icon-by-vexels.png" height="12" widht="12" alt=""></i> No deadline</small>
                  </div>
                </div>
              </div>
            </div><!-- /col -->
            
            <div class="col-md-4">
              <div class="card campaigns mb-4 shadow-sm">
                <a href="/3" class="p-relative">
                  
                  <img class="card-img-top"
                    src="https://paktanidigital.com/artikel/wp-content/uploads/2020/04/bisnisfuncom-1024x768.jpg"
                    alt="Budidaya Ikan Lele" height="265">
                </a>
                <div class="card-body">
                  <small class="btn-block mb-1"><p
                      class="text-muted"><i><img src="https://www.iconpacks.net/icons/1/free-award-icon-1362-thumb.png" widht="30" height="30" alt=""></i>Perikanan</p></small>
                  <h5 class="card-title text-truncate">
                    <a href="/3" class="text-dark">
                      Peternakan Domba Merino
                    </a>
                  </h5>
                  <div class="progress progress-xs mb-4">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 88.12%">
                    </div>
                  </div>
                  <p class="card-text text-truncate">This is a test description.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <strong>Rp 265.000.000</strong>
                    <small class="font-weight-bold">88%</small>
                  </div>
                  <small class="text-muted">dari Rp 300.000.000</small>
                  <hr>
                  <div class="d-flex justify-content-between align-items-center">
                    <span class="text-truncate">
                      <img src="https://i.ibb.co/xYr4BtD/default.jpg" width="25" height="25"
                        class="rounded-circle avatar-campaign">
                      <small>by <strong>Wardi Balamantri Anggriawan</strong></small>
                    </span>
                    <small class="text-truncate"><i><img src="https://images.vexels.com/media/users/3/132607/isolated/preview/86e952b378eaa8c5ea573fa2bf280d5b-wall-clock-icon-by-vexels.png" height="12" widht="12" alt=""></i> No deadline</small>
                  </div>
                </div>
              </div>
            </div><!-- /col -->
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="card campaigns mb-4 shadow-sm">
                <a href="/1" class="p-relative">
                  
                  <img class="card-img-top"
                    src="https://thegorbalsla.com/wp-content/uploads/2020/03/Cara-Menanam-Ubi-Cilembu.jpg"
                    alt="Charity Vimeo"  height="265">
                </a>
                <div class="card-body">
                  <small class="btn-block mb-1"><p
                      class="text-muted"><i><img src="https://www.iconpacks.net/icons/1/free-award-icon-1362-thumb.png" widht="30" height="30" alt=""></i>Pertanian</p></small>
                  <h5 class="card-title text-truncate">
                    <a href="/1" class="text-dark">
                      Ubi Cilembu
                    </a>
                  </h5>
                  <div class="progress progress-xs mb-4">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 61%">
                    </div>
                  </div>
                  <p class="card-text text-truncate">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ut
                    tortor rutru...</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <strong>Rp 30.500.000</strong>
                    <small class="font-weight-bold">61%</small>
                  </div>
                  <small class="text-muted">dari Rp 50.000.000</small>
                  <hr>
                  <div class="d-flex justify-content-between align-items-center">
                    <span class="text-truncate">
                      <img src="https://i.ibb.co/xYr4BtD/default.jpg" width="25"
                        height="25" class="rounded-circle avatar-campaign">
                      <small>by <strong>Ivan Bala Samosir M.Pd</strong></small>
                    </span>
  
  
  
  
                 <small class="text-truncate"><i><img src="https://images.vexels.com/media/users/3/132607/isolated/preview/86e952b378eaa8c5ea573fa2bf280d5b-wall-clock-icon-by-vexels.png" height="12" widht="12" alt=""></i> No deadline</small>
                  </div>
                </div>
              </div>
            </div><!-- /col -->
            <div class="col-md-4">
              <div class="card campaigns mb-4 shadow-sm">
                <a href="/2" class="p-relative">
                  
                  <img class="card-img-top"
                    src="https://travelspromo.com/wp-content/uploads/2020/02/Wisata-Petik-Apel-Agro-Rakyat.-Foto-Gmap-Doriani-Lingga-1024x682.jpg"
                    alt="Community help" height="265">
                </a>
                <div class="card-body">
                  <small class="btn-block mb-1"><p
                      class="text-muted"><i><img src="https://www.iconpacks.net/icons/1/free-award-icon-1362-thumb.png" widht="30" height="30" alt=""></i>Peternakan</p></small>
                  <h5 class="card-title text-truncate">
                    <a href="/2" class="text-dark">
                      Perkebunan Apel Malang
                    </a>
                  </h5>
                  <div class="progress progress-xs mb-4">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 73.15%">
                    </div>
                  </div>
                  <p class="card-text text-truncate">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ut
                    tortor rutru...</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <strong>Rp. 183.250.000</strong>
                    <small class="font-weight-bold">73%</small>
                  </div>
                  <small class="text-muted">dari Rp 250.000.000</small>
                  <hr>
                  <div class="d-flex justify-content-between align-items-center">
                    <span class="text-truncate">
                      <img src="https://i.ibb.co/xYr4BtD/default.jpg" width="25"
                        height="25" class="rounded-circle avatar-campaign">
                      <small>by <strong>Pardi Gunarto M.Kom.</strong></small>
                    </span>
                   <small class="text-truncate"><i><img src="https://images.vexels.com/media/users/3/132607/isolated/preview/86e952b378eaa8c5ea573fa2bf280d5b-wall-clock-icon-by-vexels.png" height="12" widht="12" alt=""></i> No deadline</small>
                  </div>
                </div>
              </div>
            </div><!-- /col -->
            
            <div class="col-md-4">
              <div class="card campaigns mb-4 shadow-sm">
                <a href="/3" class="p-relative">
                  
                  <img class="card-img-top"
                    src="https://bulelengkab.go.id/assets/instansikab/80/artikel/kualitas-ikan-patin-indonesia-berstandar-internasional-84.jpg"
                    alt="Budidaya Ikan Lele" height="265">
                </a>
                <div class="card-body">
                  <small class="btn-block mb-1"><p
                      class="text-muted"><i><img src="https://www.iconpacks.net/icons/1/free-award-icon-1362-thumb.png" widht="30" height="30" alt=""></i>Perikanan</p></small>
                  <h5 class="card-title text-truncate">
                    <a href="/3" class="text-dark">
                      Budidaya Ikan Patin
                    </a>
                  </h5>
                  <div class="progress progress-xs mb-4">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 88.12%">
                    </div>
                  </div>
                  <p class="card-text text-truncate">This is a test description.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <strong>Rp 265.000.000</strong>
                    <small class="font-weight-bold">88%</small>
                  </div>
                  <small class="text-muted">dari Rp 300.000.000</small>
                  <hr>
                  <div class="d-flex justify-content-between align-items-center">
                    <span class="text-truncate">
                      <img src="https://i.ibb.co/xYr4BtD/default.jpg" width="25" height="25"
                        class="rounded-circle avatar-campaign">
                      <small>by <strong>Cemeti Karta Sitorus S.IP</strong></small>
                    </span>
                    <small class="text-truncate"><i><img src="https://images.vexels.com/media/users/3/132607/isolated/preview/86e952b378eaa8c5ea573fa2bf280d5b-wall-clock-icon-by-vexels.png" height="12" widht="12" alt=""></i> No deadline</small>
                  </div>
                </div>
              </div>
            </div><!-- /col -->
          </div>
        </div>
        
        <!-- End Proyek terbaru -->
</div>
</div>
  
      <!-- Counter -->
      <div class="py-5 bg-success text-white">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="d-flex py-3 my-3 my-lg-0 justify-content-center">
                <span class="mr-3 display-4"><i><img src="https://pics.freeicons.io/uploads/icons/png/14629823311535956910-512.png" width="120" alt=""></i></span>
                <div>
                  <h3 class="mb-0"><span class="counter">1,554</span></h3>
                  <h5 class="font-weight-light text-uppercase">Mitra Bergabung</h5>
                </div>
              </div>
  
            </div>
            <div class="col-md-4">
              <div class="d-flex py-3 my-3 my-lg-0 justify-content-center">
                <span class="mr-3 display-4"><i><img src="http://cdn.onlinewebfonts.com/svg/img_500780.png" width="100" alt=""></i></span>
                <div>
                  <h3 class="mb-0"><span class="counter">562</span></h3>
                  <h5 class="font-weight-light text-uppercase">Proyek</h5>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="d-flex py-3 my-3 my-lg-0 justify-content-center">
                <span class="mr-3 display-4"><i><img src="http://cdn.onlinewebfonts.com/svg/img_528122.png" width="100" alt=""></i></span>
                <div>
                  <h3 class="mb-0"> Rp.<span class="counter">10.120,000,000</span></h3>
                  <h5 class="font-weight-light text-uppercase">Dana Telah disalurkan </h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  
  
      <div class="jumbotron m-0 text-white text-center position-relative rounded-0">
        <div class="parallax-cover bg-cover" style="background-image: url('https://images.pexels.com/photos/4911723/pexels-photo-4911723.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940')"></div>
        <div class="container position-relative">
          <h1>Pendanaan Berdampak untuk Masa Depan UMKM</h1>
          <p>Crowdfunding Platform</p>
          <p><a class="btn btn-primary p-2 px-5 btn-lg" href="/create"
              role="button">Buat Proyek</a></p>
        </div>
      </div>
  
      <!-- FOOTER -->
      <div class="py-5 bg-dark-2 text-light">
        <img  class="logo-footer" src="https://i.ibb.co/fxZ8GPN/Group-1336-4.png" width: 100px , height:100px >
        <footer class="container">
          <div class="footer-main pt-4 pb-2 w-100">
	<div class="col-12">
		<div class="row pt-2">
			<p class="fw-bold px-3 px-md-0">Perhatian</p>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="row">
					<ul class="menu-list-order-number pt-3 pb-5 fs-14">
						<li>1. Layanan Pinjam Meminjam Berbasis Teknologi Informasi merupakan kesepakatan perdata antara
							Pemberi Pinjaman dengan Penerima Pinjaman, sehingga segala risiko yang timbul dari
							kesepakatan tersebut ditanggung sepenuhnya oleh masing-masing pihak.</li>
						<li>2. Risiko kredit atau gagal bayar ditanggung sepenuhnya oleh Pemberi Pinjaman. Tidak ada
							lembaga atau otoritas negara yang bertanggung jawab atas risiko gagal bayar ini.</li>
						<li>3. Penyelenggara dengan persetujuan dari masing-masing Pengguna (Pemberi Pinjaman dan/atau
							Penerima Pinjaman) dapat mengakses, memperoleh, menyimpan, mengelola, dan/atau menggunakan
							data pribadi Pengguna ("Pemanfaatan Data") pada atau di dalam benda, perangkat elektronik
							(termasuk smartphone atau telepon seluler), perangkat keras (hardware) maupun lunak
							(software), dokumen elektronik, aplikasi atau sistem elektronik milik Pengguna atau yang
							dikuasai Pengguna, dengan memberitahukan tujuan, batasan, dan mekanisme Pemanfaatan Data
							tersebut kepada Pengguna yang bersangkutan sebelum memperoleh persetujuan yang dimaksud.
						</li>
						<li>4.Pemberi Pinjaman yang belum memiliki pengetahuan dan pengalaman pinjam meminjam, disarankan
							untuk tidak menggunakan layanan ini.</li>
						<li>5. Penerima Pinjaman harus mempertimbangkan tingkat bunga pinjaman dan biaya lainnya sesuai
							dengan kemampuan dalam melunasi pinjaman.</li>
						<li>5. Setiap kecurangan tercatat secara digital di dunia maya dan dapat diketahui masyarakat luas
							di media sosial.</li>
						<li>6. Pengguna harus membaca dan memahami informasi ini sebelum membuat keputusan menjadi Pemberi
							Pinjaman atau Penerima Pinjaman.</li>
						<li>7. Pemerintah yaitu dalam hal ini Otoritas Jasa Keuangan, tidak bertanggung jawab atas setiap
							pelanggaran atau ketidakpatuhan oleh Pengguna, baik Pemberi Pinjaman maupun Penerima
							Pinjaman (baik karena kesengajaan atau kelalaian Pengguna) terhadap ketentuan peraturan
							perundang-undangan maupun kesepakatan atau perikatan antara Penyelenggara dengan Pemberi
							Pinjaman dan/atau Penerima Pinjaman.</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
        </footer>
      </div>
  
     
    </main>
  
    <script src="https://fundme.miguelvasquez.net/public/js/core.min.js"></script>
    <script src="https://fundme.miguelvasquez.net/public/js/jqueryTimeago.js"></script>
    <script src="https://fundme.miguelvasquez.net/public/js/app-functions.js"></script>
    <script src="https://js.stripe.com/v3/"></script>
  
    <script type="text/javascript">

      pagination('https://fundme.miguelvasquez.net/ajax/campaigns?page=', 'Error occurred');

      // Owl Carousel
      $('.owl-carousel').owlCarousel({
        margin: 10,
        items: 18,
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 2
          },
          1000: {
            items: 4
          }
        }
      });


    </script>
  
    <script type="text/javascript">
      Cookies.set('cookieBanner');

      $(document).ready(function () {
        if (Cookies('cookieBanner'));
        else {
          $('.showBanner').fadeIn();
          $("#close-banner").click(function () {
            $(".showBanner").slideUp(50);
            Cookies('cookieBanner', true);
          });
        }
      });
    </script>
    <div id="bodyContainer"></div>
  
  
    <iframe frameborder="0" allowtransparency="true" scrolling="no" name="__privateStripeMetricsController7210"
      allowpaymentrequest="true"
      src="https://js.stripe.com/v3/m-outer-d6c2bdb836ab7d041671a72774049a01.html#url=https%3A%2F%2Ffundme.miguelvasquez.net%2F&amp;title=Fundme%20%7C%20Crowdfunding%20Platform&amp;referrer=https%3A%2F%2Ffundme.miguelvasquez.net%2Fcampaign%2F1131%2Ftest&amp;muid=cfc0f39d-c475-44db-93a3-296fd96d1519a67b71&amp;sid=420e8b77-bf72-4709-997c-6caa5dc3666267f353&amp;version=6&amp;preview=false"
      aria-hidden="true" tabindex="-1"
      style="border: none !important; margin: 0px !important; padding: 0px !important; width: 1px !important; min-width: 100% !important; overflow: hidden !important; display: block !important; visibility: hidden !important; position: fixed !important; height: 1px !important; pointer-events: none !important; user-select: none !important;"></iframe>
  
    </body>
</html>
