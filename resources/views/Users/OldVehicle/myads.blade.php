@extends('Users.Layout.base')

@section('title')
Old Vehicle
@endsection

@section('css-section')
     <link rel="stylesheet" href="{{URL::to('/')}}/log/css/style.css"> 

  
    <!-- Favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/png" href="{{URL::to('/')}}/Userassets/ico/favicon-16x16.png"/>
    <!-- Libs CSS
    ============================================ -->
    <link rel="stylesheet" href="{{URL::to('/')}}/Userassets/css/bootstrap/css/bootstrap.min.css">
    <link href="{{URL::to('/')}}/Userassets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/Userassets/js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/Userassets/js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/Userassets/css/themecss/lib.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/Userassets/js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/Userassets/js/minicolors/miniColors.css" rel="stylesheet">
    
    <link href="{{URL::to('/')}}/Userassets/js/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/Userassets/pe-icon-7-stroke/css/helper.html" rel="stylesheet">

    <!-- Theme CSS
    ============================================ -->
    <link href="{{URL::to('/')}}/Userassets/css/themecss/so_searchpro.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/Userassets/css/themecss/so_megamenu.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/Userassets/css/themecss/so_advanced_search.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/Userassets/css/themecss/so-listing-tabs.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/Userassets/css/themecss/so-categories.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/Userassets/css/themecss/so-newletter-popup.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/Userassets/css/themecss/so-latest-blog.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/Userassets/css/s1.css" rel="stylesheet">

    <link href="{{URL::to('/')}}/Userassets/css/footer/footer1.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/Userassets/css/s2.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/Userassets/css/header/header1.css" rel="stylesheet">
    <link id="color_scheme" href="{{URL::to('/')}}/Userassets/css/theme.css" rel="stylesheet"> 
    <link href="{{URL::to('/')}}/Userassets/css/responsive.css" rel="stylesheet">
    <!-- <link href="{{URL::to('/')}}/Userassets/css/s1.css" rel="stylesheet"> -->

    <link href="{{URL::to('/')}}/Userassets/js/lightslider/lightslider.css" rel="stylesheet">
     <!-- Google web fonts
    ============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Rubik:300,400,400i,500,600,700' rel='stylesheet' type='text/css'>     
    <style type="text/css">
         body{font-family:'Rubik', sans-serif;}
    </style>
    <style type="text/css">

            .custom-file-input 
            {
            position: relative;
            z-index: 2;
            width: 100%;
            height: calc(1.5em + .94rem + 2px);
            margin: 0;
            opacity: 0;
        }
       
        button, input {
            overflow: visible;
            border: none;

        }
        button, input, optgroup, select, textarea {
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
        }
        *, ::after, ::before {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;

        }
        input[type="file" i] {
    appearance: none;
    background-color: initial;
    cursor: default;
    align-items: baseline;
    color: inherit;
    text-overflow: ellipsis;
    white-space: pre;
    text-align: start !important;
    padding: initial;
    padding-bottom: 5px;
    border: initial;
    overflow: hidden !important;
}
.JbJAl{margin-top:20px;text-align:center;display:inline-block}._2PKSn Button{cursor:not-allowed}
._3IHtH{background:#fff;width:100%;z-index:4}._3IHtH ._3L_2z{width:100%;margin:0 auto;max-width:1280px;box-sizing:border-box}._3IHtH._2TN-s ._3L_2z{padding:0;overflow-y:auto}._3IHtH._2TN-s ._1IuJB ._1_ZOl{flex:1 1 0;display:inline}._3IHtH ._1IuJB{height:48px;margin:0;padding:0;list-style:none;font-size:14px;display:flex}._3IHtH ._1IuJB ._1_ZOl{display:inline-flex;text-align:center}._3IHtH ._1IuJB ._1_ZOl ._3kJ_d{border-bottom:1px solid #dbdbdb;color:#002f34;text-decoration:none;padding:0 16px;box-sizing:border-box;height:48px;line-height:48px;display:block;text-transform:uppercase}._3IHtH ._1IuJB ._1_ZOl ._3kJ_d._1Pf_G{color:#002f34;font-weight:700;border-bottom:5px solid #002f34}
._1_dLE{flex:1;padding-bottom:0;-ms-flex-preferred-size:auto}._1_dLE._2yGlg{background-color:#fff}._1_dLE._20mSp{background-color:#f2f4f5}._1U6Yu{width:100%;margin:0}._2nuC5{margin:0 auto;max-width:1280px}.JvlDc{filter:grayscale(1)}
._1jYKO{z-index:8;width:100%;min-height:48px;box-sizing:border-box}._1jYKO ._2XmAi{text-decoration:none;cursor:pointer}._1jYKO .f3R3d{margin:auto;width:100%;max-width:1200px;display:flex;justify-content:space-between}._1jYKO ._3-lxv{padding-right:8px}._1jYKO ._2sI8Z{display:flex;background:#ebeeef;padding:16px 0 32px;border-top:1px solid rgba(0,47,52,.2);font-size:14px;line-height:20px}@media only screen and (max-width:1280px){._1jYKO ._2sI8Z{padding:16px 16px 32px}}@media only screen and (max-width:960px){._1jYKO ._2sI8Z{padding:0;flex-direction:column;width:100%;border:none;background:#fff}}._1jYKO ._2sI8Z .fRN33{font-weight:700;text-transform:uppercase;flex-basis:20%}._1jYKO ._2sI8Z .fRN33 ul{padding:0;list-style:none;margin:8px 0 0}._1jYKO ._2sI8Z .fRN33 ._2XmAi{font-weight:400;text-transform:none;text-decoration:none;cursor:pointer;font-size:12px;color:#002f34;color:rgba(0,47,52,.64)}._1jYKO ._2sI8Z .fRN33 ._2XmAi:hover{color:#002f34}._1jYKO ._2sI8Z .fRN33._2oZEg{display:flex;flex-direction:column;justify-content:space-between}@media only screen and (max-width:960px){._1jYKO ._2sI8Z .fRN33 ._1NJc2.zE__2{justify-content:center}}._1jYKO ._2sI8Z .fRN33 ._1NJc2 .Ljcld{display:block}@media only screen and (max-width:960px){._1jYKO ._2sI8Z .fRN33 ._1NJc2 .Ljcld{font-weight:400;text-transform:none;font-size:16px}}._1jYKO ._2sI8Z .fRN33 ._1NJc2 ._2lcRE ._2XmAi{display:inline-block}._1jYKO ._2sI8Z .fRN33 ._1NJc2 ._2lcRE ._2XmAi span svg{width:23.5px;height:23.5px;padding-right:8px}._1jYKO ._2sI8Z .fRN33 ._1NJc2 ._2lcRE ._2XmAi span svg path{fill:rgba(0,47,52,.64)}._1jYKO ._2sI8Z .fRN33 ._1NJc2 ._2lcRE i{padding-right:8px}@media only screen and (max-width:960px){._1jYKO ._2sI8Z .fRN33 ._1NJc2{display:flex;align-items:center;justify-content:space-between;padding:16px;border-top:1px solid rgba(0,47,52,.2);border-bottom:1px solid rgba(0,47,52,.2)}}._1jYKO ._1P8AV{color:#fff;font-size:12px;line-height:18px;background:#002f34;padding:16px 0}@media only screen and (max-width:1280px){._1jYKO ._1P8AV{padding:16px}}._1jYKO ._1P8AV .f3R3d{flex-direction:row-reverse}._1jYKO ._1P8AV .fRN33 span{font-weight:700;padding-right:8px}._1jYKO ._1P8AV .fRN33 ._2XmAi{color:#fff}._1jYKO ._1P8AV._3OZhk .f3R3d{justify-content:center}._1jYKO div._3cDez._3cDez._3cDez._3mheL ._3hoLW{padding:0}._1jYKO div._3cDez._3cDez._3cDez._3mheL ._3hoLW>div{margin-left:12px}._1jYKO div._3cDez._3cDez._3cDez._3mheL .QgL4_,._1jYKO div._3cDez._3cDez._3cDez._3mheL .QgL4_ ._3mheL{padding:0}._1jYKO div._3cDez._3cDez._3cDez._3mheL ._3JCm_{padding:0 24px 32px}._1jYKO div._3cDez._3cDez._3cDez._3mheL ._2XmAi{padding-left:16px}._1jYKO div._3cDez._3cDez._3cDez ._2XmAi{margin:0;padding:8px 12px;background:#ebeeef}._1jYKO div._3cDez._3cDez._3cDez ._2XmAi li{font-size:14px;line-height:2.74;list-style-type:none}._1jYKO div._3cDez._3cDez._3cDez ._2XmAi li a{text-decoration:none;color:#000}._1jYKO div._3cDez._3cDez._3cDez ._3mOII{padding:16px 24px;font-size:16px;border-top:1px solid rgba(0,47,52,.2)}._1jYKO div._3cDez._3cDez._3cDez ._3mOII .aWS5h{text-decoration:none;color:#000;margin-left:12px}
._164_b:after,._164_b:before{content:"";font-family:olx-icons;speak:none;font-style:normal;font-weight:400;font-variant:normal;text-transform:none;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}
._1oy9H{background-color:rgba(0,47,52,.2)}
.y7nlv{width:100%}._17tTs{display:flex;align-items:center;width:100%;margin-top:2px;text-transform:uppercase;font-weight:700;cursor:pointer;color:#002f34}@media (-ms-high-contrast:none){._17tTs{align-items:center}}._17tTs ._3WCkv{font-size:14px;white-space:nowrap;text-overflow:ellipsis}._17tTs ._1YKEc{display:flex;align-items:center;margin-right:16px}.ryfc9{height:492px;top:40px;left:-16px;width:100%}._2NAUI{position:absolute;top:44px;display:flex;width:100%}@media only screen and (max-width:539px){._2NAUI{display:none}}._2NAUI li{width:100%}._2uhZ0{text-align:center;transition:transform .5s}._3K8ZG{transform:rotate(180deg)}._2um27{display:none;column-count:4;width:100%;box-shadow:0 4px 4px 0 rgba(0,0,0,.1);background-color:#fff;justify-content:space-between;padding:16px 16px 0}._2um27 ._1J5By{display:inline-block;padding:0 8px;box-sizing:border-box;margin-bottom:16px;width:100%}._2um27 ._30tGA{font-size:16px;font-weight:700;color:rgba(0,47,52,.64);height:unset;line-height:unset;padding:0;margin:12px 0}._2um27 ._30tGA:hover{color:#00a49f}._3o--i{display:block}._3AGJR{margin:8px 0}._3AGJR ._2fitb{padding:0;text-decoration:none;color:#002f34;font-size:14px}._3AGJR ._2fitb:hover{color:#00a49f}._2xg5B{display:flex;align-items:center;width:calc(100% - 152px)}._2xg5B ._18NX_{margin:0 8px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;min-width:32px}._2xg5B ._18NX_ a{text-transform:capitalize;font-weight:400;font-size:14px;color:#002f34;text-decoration:none}
.iNsaW{position:fixed;top:80px;left:50%;transform:translateX(-50%);width:auto;animation:_1RXhN .3s ease;z-index:9;min-width:160px}.iNsaW .NPczX{background-color:#fff;border:none}@keyframes _1RXhN{0%{transform:translate(-50%,-120px)}to{transform:translate(-50%)}}
.R3zTx{box-shadow:0 1px 4px 0 rgba(0,0,0,.1);margin:0 0 4px;z-index:9}._1HZl4{display:flex;margin-left:auto;margin-right:auto;max-width:1280px;position:relative}._1XEhX{height:44px}._1IaXM{padding:108px 16px 0}._2JssW{padding:68px 16px 0}
.araqd{padding:0 0 40px}@media only screen and (max-width:540px){.araqd{padding:0}}
.BCAyI{width:100%;margin:0 auto;height:68px}@media only screen and (max-width:1024px) and (min-width:540px){.BCAyI{min-width:1024px}}.BCAyI ._2fu44{display:flex;margin-left:auto;margin-right:auto;max-width:1280px;position:relative}.BCAyI ._23yNr{top:0;height:47px;background-color:#002f34}.BCAyI ._1B5Sf,.BCAyI ._23yNr{position:fixed;left:0;z-index:10;margin:0 auto;width:100%;box-sizing:border-box}.BCAyI ._1B5Sf{padding:10px 16px;background-color:#fff}.BCAyI ._1B5Sf._2FZ38{padding:16px 40px 16px 48px;background-color:#f8f9fa}.BCAyI ._1B5Sf:after{content:"";background-color:rgba(0,47,52,.03);position:absolute;top:0;left:0;z-index:-1;width:100%;height:100%}.BCAyI ._1B5Sf ._2KctL{margin:0 16px;display:flex;flex:1}@media only screen and (max-width:540px){.BCAyI ._1B5Sf ._2KctL{display:none}}.BCAyI ._1B5Sf ._2h-xp{display:none}.BCAyI .r45De{top:47px}.BCAyI ._2d97D{top:0}
._1Ow7B{z-index:10;width:100%;position:fixed;background:#fff;box-sizing:border-box;box-shadow:0 1px 4px 0 rgba(0,0,0,.1)}@media only screen and (max-width:1024px) and (min-width:540px){._1Ow7B{position:absolute;min-width:1024px}}._1Ow7B h1{margin-top:0}._1Ow7B .bbYwQ{position:relative;margin-right:15px;z-index:3}._1Ow7B .bbYwQ>span{float:left}._1Ow7B .bbYwQ ._2UKrO{color:#002f34;height:48px;width:48px}._1Ow7B .bbYwQ ._1vQjO{color:#002f34}@media only screen and (min-width:1024px){._1Ow7B .bbYwQ ._1vQjO{display:none}}._3JQLX{filter:grayscale(1)}
._2Y7K_{width:50%;float:left}@media only screen and (max-width:1023px){._2Y7K_{width:100%;float:none}}
._3W9XC{width:100%;display:flex;flex-direction:column;align-items:flex-start;justify-content:center}@media (-ms-high-contrast:none){._3W9XC{min-height:96px}}._18aBn{height:48px;display:flex;flex:1;background-color:initial;box-sizing:border-box;width:100%}@media only screen and (min-width:1024px){._18aBn{min-width:630px}}@media only screen and (max-width:960px){._18aBn{max-width:720px}}@media only screen and (max-width:1023px){._18aBn{width:100%}}._18aBn ._2C0uj{width:100%;display:inline-block;box-sizing:border-box;background-color:#fff}._18aBn ._2C0uj ._20jkh{border-style:none;color:#002f34;position:relative;height:100%;top:0;z-index:9}@media only screen and (max-width:1023px){._18aBn ._2C0uj ._20jkh{bottom:unset}}._18aBn ._2C0uj ul{top:calc(100% + 2px)}@media only screen and (max-width:1023px){._18aBn ._2C0uj ul{top:unset}}._18aBn ._2C0uj ul li[aria-selected=true]{background-color:#c8f8f6!important}._18aBn ._2C0uj fieldset{right:0;margin:0;width:100%;left:0}@media only screen and (max-width:1023px){._18aBn ._2C0uj fieldset{position:unset;margin:unset}}._18aBn ._2C0uj fieldset div input{border-radius:0;height:100%;width:100%;padding:0 8px;line-height:normal;-webkit-appearance:none}._18aBn ._2C0uj fieldset div input::placeholder{color:rgba(0,47,52,.64);left:unset;line-height:normal}._18aBn ._3b3oR{min-width:48px;height:48px;display:flex;cursor:pointer;background-color:#002f34;border-radius:0 4px 4px 0}._18aBn ._3b3oR span{margin:auto}@media (-ms-high-contrast:none){._18aBn ._3b3oR span{margin:12px}}._18aBn ._17_5W{pointer-events:none;background-color:rgba(0,47,52,.36)}._18aBn .zYZEU{display:flex;width:100%;margin-left:16px;height:48px;box-sizing:border-box;border:2px solid #002f34;border-radius:4px 0 0 4px}._18aBn .zYZEU:focus-within{border:1px solid #23e5db;outline:1px solid #23e5db;outline-offset:-2px}._18aBn .zYZEU ._2qKv9{background-color:#fff;max-width:40%}@media only screen and (max-width:1023px){._18aBn .zYZEU ._2qKv9{display:none}}._18aBn .zYZEU ._2qKv9 ._2gN1o{display:flex;justify-content:center;align-items:center;height:100%}._18aBn .zYZEU ._2qKv9 ._2gN1o .F_hJM{margin:0 24px 0 8px;font-size:12px;text-overflow:ellipsis;white-space:nowrap;overflow:hidden}._18aBn._3jXQ6,._18aBn._3jXQ6 ._3b3oR,._18aBn._3jXQ6 .zYZEU{height:40px}._2y6yH{left:0;position:absolute;top:62px;z-index:5}._5BLBJ{width:100%}
._14lZ9{float:right;height:100%;display:flex;align-items:center;margin-left:auto}._14lZ9 ._2sx1i{width:48px;height:48px;display:flex;justify-content:center;align-items:center}._14lZ9 ._2sx1i._3fqyU{position:relative}._14lZ9 ._2sx1i._3fqyU:after{top:8px;right:8px;width:11px;z-index:1;content:"";height:11px;border-radius:50%;position:absolute;background:#23e5db}._14lZ9 .J1zUM{margin:0 8px}._14lZ9 .RgSo4{margin:0 0 0 8px}._14lZ9 .RgSo4._1oFFI{margin:0 12px 0 20px}._14lZ9._110yh ._11r7x,._14lZ9._110yh ._11r7x>div>div>span,._14lZ9._110yh ._2sx1i,._14lZ9._110yh ._2sx1i>div>div>span,._14lZ9._110yh ._3vCh4{color:#002f34}._14lZ9._3Smpb ._11r7x,._14lZ9._3Smpb ._11r7x>div>div>span,._14lZ9._3Smpb ._2sx1i,._14lZ9._3Smpb ._2sx1i>div>div>span,._14lZ9._3Smpb ._3vCh4,._14lZ9._3Smpb ._3vCh4>div>div>span{color:#fff}
._26unB{text-align:left;position:relative}._26unB.dZA_8:after{top:8px;right:8px;width:11px;z-index:1;content:"";height:11px;border-radius:50%;position:absolute;background:#23e5db}._1bV47{width:100%;display:flex;justify-content:center;align-items:center}._1bV47._19IhO{top:0;z-index:1;height:50px;position:absolute;opacity:.9;background:#fff}._1bV47._1fnpV{height:300px}._1bV47 svg{display:block;stroke:#002f34}._2JQHf{z-index:10;display:block;position:absolute;box-sizing:border-box;background:#fff;top:53px;left:50%;width:304px;transform:translateX(-50%);box-shadow:0 1px 4px 0 rgba(0,0,0,.1);border-radius:4px}._2JQHf:after{bottom:100%;left:50%;content:" ";height:0;width:0;position:absolute;pointer-events:none;margin-left:-8px;border:8px solid transparent;border-bottom-color:#fff}._3v_OZ{width:100%;padding:0;height:40px;display:flex;justify-content:center;align-items:center;cursor:pointer;text-align:center;box-sizing:border-box;font-size:16px;color:#002f34;border-top:1px solid rgba(0,47,52,.2);text-transform:uppercase;font-weight:700}
._3POg8{width:100%;height:100%;display:flex;justify-content:center;align-items:center}._3POg8 .CqVOM{stroke:#002f34}
.ki4m2{text-align:center}.ki4m2 ._11WQ5{margin:32px 0 0;font-size:14px;color:#002f34}.ki4m2 ._1y85Y{color:rgba(0,47,52,.64);font-size:12px}.ki4m2 ._2yuFQ{width:100%;height:120px;overflow:hidden;margin:24px 0 0}.ki4m2 ._2yuFQ img{height:120px;height:auto}
._2-GoQ{width:80px;position:relative;display:flex;align-items:center;cursor:pointer}._328CR{cursor:pointer;margin:0 8px 0 0}._3nqdZ{right:32px;top:52px;width:288px;position:absolute;background:#fff;box-shadow:0 0 6px 0 rgba(0,0,0,.12),0 6px 6px 0 rgba(0,0,0,.24);border-radius:4px}._3nqdZ:after{bottom:100%;right:16px;content:" ";height:0;width:0;position:absolute;pointer-events:none;border:12px solid transparent;border-bottom-color:#fff}
._21nYN{position:relative;display:inline-block;width:104px;height:48px}._21nYN:after{content:"";position:absolute;width:98px;height:44px;box-shadow:0 2px 4px -1px rgba(0,0,0,.2),0 1px 10px 0 rgba(0,0,0,.12),0 4px 5px 0 rgba(0,0,0,.14);top:2px;left:3px;border-radius:24px;background:transparent;z-index:-1}._21nYN ._3V9PS{width:100%;height:100%}._21nYN ._2bClX{stroke:none;fill-rule:evenodd;fill-opacity:1}._21nYN ._2bClX._12yOz{fill:#fff}._21nYN ._2bClX._1OVwK{fill:#002f34}._21nYN ._2bClX._YBz-{fill:#ffce32}._21nYN ._2bClX._3uYj7{fill:#23e5db}._21nYN ._2bClX.BfroU{fill:#3a77ff}._21nYN .DrSmZ{display:inline-flex;align-items:center;position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);text-transform:uppercase;font-size:14px;font-weight:700;letter-spacing:.5px;color:#002f34}._21nYN .EgzsJ{display:inline-flex;margin-right:4px}
._2PDEF{display:flex;align-items:center;width:100%;margin-top:2px;justify-content:flex-end;text-transform:uppercase;font-weight:700;cursor:pointer;color:#002f34}@media (-ms-high-contrast:none){._2PDEF{align-items:center}}._2PDEF ._38j0w{font-size:14px;white-space:nowrap;text-overflow:ellipsis}._2PDEF .UFSX5{display:flex;align-items:center}._2L_dh{min-width:100px;position:relative}._2t8tU{text-align:center;transition:transform .5s}._2pSU8{transform:rotate(180deg)}._2Jv6i{display:none;column-count:1;width:200px;box-shadow:0 4px 12px 1px rgba(0,0,0,.5);border-radius:4px;background-color:#fff;justify-content:space-between;padding:16px 16px 0}._1u-oA{display:block}._2dtTP{position:absolute;margin-top:24px;left:-24px}._2dtTP ._2Jv6i:before{border-left:10px solid transparent;border-right:10px solid transparent;border-bottom:10px solid #fff;top:-10px;content:" ";height:0;left:50%;margin-left:-24px;position:absolute;width:0}
._3Wfs8 ul{margin:0;list-style:none;padding:0}._3Wfs8 li{cursor:pointer;padding:20px 0}._3Wfs8 li span{font-size:14px;line-height:20px;font-weight:700;color:#002f34}._3Wfs8 li ._3K1Q5{float:right}._3Wfs8 li ._3K1Q5 button{height:20px}
._2r6hS{height:48px;z-index:1}._2r6hS a{height:100%;display:block;line-height:48px}._2r6hS._2iSrO{height:40px}._2r6hS._2iSrO a{line-height:40px}._2r6hS._2iSrO a ._3KvQZ{vertical-align:middle;height:32px}
.hJUTK{display:block}
._3aOcc{display:flex;align-items:center;position:fixed;top:0;left:0;z-index:10;margin:0 auto;width:100%;height:47px;box-sizing:border-box;background-color:#002f34}._2VcXT{margin-left:auto}.OoFju{color:#fff}.QW4BB{width:37px;margin-left:auto;margin-right:20px}._3sxq9{cursor:pointer}._3w9mm{cursor:auto}
._3Ho5N{margin:0;padding:0;list-style:none}._2mrjn{margin-top:48px}
._2lQvP{border-radius:4px;box-shadow:0 1px 3px 0 rgba(0,47,52,.2),0 1px 3px 0 rgba(0,47,52,.2);display:flex;height:124px;margin-bottom:12px}._2lQvP ._3Lc-C{border-radius:4px 0 0 4px;width:140px}._2lQvP .cr9q7{margin:0 8px 0 16px;width:100%}._2lQvP .cr9q7 ._2iJX_{height:65%;display:flex;align-items:center;justify-content:space-between}._2lQvP .cr9q7 ._2iJX_ .VrUzc{width:52px;height:52px;border-radius:4px}._2lQvP .cr9q7 ._2iJX_ ._1AvCI{width:232px;height:18px}._2lQvP .cr9q7 ._2iJX_ ._2ddli{width:120px;height:26px}._2lQvP .cr9q7 ._2iJX_ ._3Qasq{width:92px;height:20px;border-radius:10px}._2lQvP .cr9q7 ._2iJX_ ._1_KXY,._2lQvP .cr9q7 ._2iJX_ ._3vFJC{width:232px;height:18px}._2lQvP .cr9q7 ._1cX-h{height:35%;border-top:1px solid rgba(0,47,52,.2)}._3o68c{animation-duration:1s;animation-fill-mode:forwards;animation-iteration-count:infinite;animation-name:_1o2_5;animation-timing-function:linear;background:rgba(0,47,52,.2);background-size:900px 104px;position:relative}@keyframes _1o2_5{0%{opacity:.3}50%{opacity:.7}to{opacity:.3}}
.ipDOb{display:flex}._1F2wj,.ipDOb{position:relative}._235Nc{border-radius:4px;box-shadow:0 1px 3px 0 rgba(0,47,52,.2),0 1px 3px 0 rgba(0,47,52,.2);margin-bottom:12px;font-size:14px;text-decoration:none;color:#002f34;line-height:1.5;display:block}._235Nc ._1sGNa{opacity:.36}._235Nc ._2wCc5{display:flex;font-size:12px;text-transform:uppercase;border-radius:4px 0 0 4px;min-width:120px;background-color:#ebeeef}._235Nc ._2wCc5 ._1JNIz{display:flex;justify-content:center;align-items:center;width:100%}._235Nc .KKH2X{margin:0 12px 0 16px;width:100%}._235Nc .KKH2X ._1py7L{display:inline-flex;justify-content:space-between;padding:12px 0 8px;width:100%}._235Nc .KKH2X ._1py7L ._1qu-C{display:flex;width:100%;height:45%;align-items:center}._235Nc .KKH2X ._1py7L ._3eKkH{width:8%;padding-right:16px}._235Nc .KKH2X ._1py7L .v4vud{min-width:25%;padding-right:16px}._235Nc .KKH2X ._1py7L ._11y0L{width:15%;padding-right:16px;direction:ltr}._235Nc .KKH2X ._1py7L ._14tgB{width:15%;padding-right:16px;text-align:center}._235Nc .KKH2X ._1py7L ._2ZAhs{width:35%;padding-right:16px}._235Nc .KKH2X ._1py7L .PoDMF{width:300px}._235Nc .KKH2X ._2Qa7-{min-height:44px;border-top:1px solid rgba(0,47,52,.2);display:flex;justify-content:space-between;align-items:center}
._2grx4{background-color:#fff;position:relative;height:160px;margin:0;overflow:hidden}._2grx4>div{display:flex;height:100%}._2grx4 img{display:block;margin:auto}._2grx4 img._1iGOp,._2grx4 img._1ABkm{max-width:100%;max-height:100%}._2grx4 img._1ABkm{width:100%}._2grx4 img._3Kg_w{max-height:100%}._2grx4 img._1N079{max-width:100%;max-height:100%;min-height:100%}._2grx4 img._1vZ1k{width:100%;object-fit:cover}._2grx4._3Km4V{height:100%;border-radius:4px;border:1px solid rgba(0,47,52,.2);height:60px;width:60px}@media only screen and (max-width:1024px){._2grx4._3Km4V{height:76px;width:76px}}._2grx4._3Km4V img{object-fit:cover;display:block;width:100%;height:100%}._2grx4:before{right:5px;width:50px;height:50px;bottom:-25px;line-height:35px;text-align:center;position:absolute;border-radius:50%;color:#23e5db;background-color:#fff;z-index:1}
._1czk1{width:100%;height:100%;display:block;position:absolute;top:0;left:0}._1czk1 ._1VzGN{display:inline-block;margin:0;padding:0;overflow:hidden;width:100%;height:100%}._1czk1 ._1VX6L{animation-duration:1s;animation-fill-mode:forwards;animation-iteration-count:infinite;animation-name:_30iKX;animation-timing-function:linear;background:rgba(0,47,52,.2);background-size:900px 104px;position:relative}@keyframes _30iKX{0%{opacity:.3}50%{opacity:.7}to{opacity:.3}}
._1jeI2{height:100%;font-size:10px;display:flex;align-items:center}._1jeI2 svg{padding-right:4px}._1jeI2 div:not(:last-child){border-right:1px solid #002f34;height:16px;padding-right:8px}._1jeI2 div:not(:first-child){padding-left:8px}._1jeI2 .GT-OG{white-space:nowrap}
._1GJpC{border-radius:10px;color:#fff;display:inline-flex;flex-direction:column;font-size:10px;font-weight:700;justify-content:center;min-height:20px;text-align:center;text-transform:uppercase;width:92px;height:20px;margin-bottom:4px}@media only screen and (max-width:960px){._1GJpC{width:auto;min-width:92px;margin-right:4px}}._1GJpC.d5og3{background-color:#ff2800}._1GJpC._1FXlQ{background-color:#ffce32;color:#002f34}._1GJpC._1j0aM{background-color:#fff}._1GJpC._1WND3,._1GJpC._1iwhN,._1GJpC._3uIUe,._1GJpC._3gFF2,._1GJpC._22mDE,._1GJpC._1dZqY{background-color:rgba(0,47,52,.64)}._1GJpC._1s1vR{background-color:#23e5db;color:#002f34}._1GJpC._2gL9K,._1GJpC._1qDin,._1GJpC._3y1L7{background-color:#002f34}
.grbJO{border-radius:4px 0 0 4px;height:100%;width:4px;background-color:#002f34;position:absolute}.grbJO._2TYP_{background-color:#ff2800}.grbJO._1lttl{background-color:#ffce32}.grbJO._2qGja{background-color:#23e5db}
._qMld{text-align:left;flex-direction:column;display:flex}._qMld>span,._qMld>span>strong{padding-left:4px}
._2bhQI{display:inline-flex}
.VFGEi{padding-right:4px}
._2kIsG{display:flex;letter-spacing:.4px;flex-direction:column}._2kIsG ._1bcS6{text-transform:uppercase;font-size:12px}
._14LDX{display:flex;flex-direction:column;line-height:20px;width:200px}._14LDX ._12XJ7{font-weight:700;overflow:hidden;white-space:nowrap;text-overflow:ellipsis}@media only screen and (max-width:320px){._14LDX ._12XJ7{max-width:150px}}._14LDX ._1zE4A{font-size:12px}
._3-H54{line-height:24px}
._2mpsl{margin:0;list-style:none;box-shadow:0 0 6px 0 rgba(0,0,0,.12),0 6px 6px 0 rgba(0,0,0,.24);padding:8px 0}._3Ny-z{align-items:center;color:#002f34;display:flex;font-size:14px;height:40px;padding-left:16px;user-select:none}._3Ny-z._37VL9{border-top:1px solid rgba(0,47,52,.2)}._3Ny-z:active,._3Ny-z:hover{background-color:#c8f8f6;cursor:pointer}
._3fyK1{align-items:center;display:inline-flex}._3fyK1>button{padding:8px}
.ZPd5-{display:flex;justify-content:space-between;padding:0 12px;align-items:center}.ZPd5-,._2DMiH{background-color:#fff6d9;line-height:20px;min-height:72px}._2DMiH{padding:12px}._2mUeC{display:flex;align-items:center}.v12Rl{display:flex}._2R25_{padding:0 0 0 8px}._26NdF,._3t2L7{font-size:16px;font-weight:700}._26NdF{border-bottom:2px solid;padding:0 10px}._3evus{background-color:#fff6d9;display:flex;align-items:center;padding:0 12px;line-height:20px;min-height:72px}._1o8x5{padding:0 0 0 6px}.NPs3E{margin:10px 0 0 36px;padding:0 25px!important}.xwrwX{display:flex;align-items:center;padding:12px;background-color:#fff6d9;line-height:18px}.dFSEn{padding:5px 0 0}._1WiPR{padding:0 25px!important}._14QPa{padding:0 10px 0 0}
._3ltq4{display:flex;margin:28px 0;justify-content:space-between}._3ltq4 .Bvr13{width:300px;padding-right:40px;padding-top:4px}._3ltq4 ._3OTAX{padding-top:4px;display:flex;align-items:baseline}
._3wMWd{font-size:14px}._3wMWd ._1Ki36{width:100%;height:36px;position:relative;display:inline-block;box-sizing:border-box;background-color:#fff;border-style:none}._3wMWd ._1Ki36 ._1Zar0{position:absolute;top:8px;left:8px}._3wMWd ._1Ki36 input{box-sizing:border-box;padding:0 8px 0 40px;border:1px solid rgba(0,47,52,.36);border-radius:4px;width:100%;height:100%}._3wMWd ._1Ki36 input:focus-within{border:1px solid #23e5db;outline:1px solid #23e5db;outline-offset:-2px}._3wMWd .PEFtB input{border:1px solid #ff2800}._3wMWd .PEFtB input:focus-within{border:1px solid #ff2800;outline:none}._3wMWd .PEFtB ._1-lA9{font-size:14px;color:#ff2800;padding-top:8px;word-break:break-all}
.oRIL0{padding:0 8px 0 0}
._384Y6{flex-basis:25%;display:flex;flex-direction:row-reverse}
.zXchP{margin:16px auto}._129nd{margin:64px auto}
._2kIkn{padding:16px;margin:16px 0;display:flex;border:1px solid rgba(0,47,52,.36);align-items:center;background:#3a77ff;border-radius:4px}@media only screen and (max-width:1024px){._2kIkn{margin:16px}}._2kIkn ._1L8RV{font-weight:700;font-size:16px;color:#fff}@media only screen and (max-width:1024px){._2kIkn ._1L8RV{font-size:16px}}._2kIkn ._28hrn{margin:0 0 0 72px;padding:0 0 0 10px}@media only screen and (max-width:1024px){._2kIkn ._28hrn{margin:0}}
._2Bchz,._3eWVB{display:flex}._2Bchz{flex:1;flex-direction:column;width:100%}._1IjcH{display:flex;margin-top:10px}
._38ssh{display:flex;flex-direction:column}._1Q45Q{display:flex;flex:1;flex-direction:column}
.rl3f9{margin:0 -8px;padding:0;list-style:none}.AueO0 li,._3mXOU li{height:266px;border-radius:4px;display:inline-block;vertical-align:top}._3mXOU ._20FqS,.AueO0 ._20FqS{width:100%;height:auto;text-align:center}._3mXOU li{width:calc(33.33333% - 16px)}.AueO0 li{width:calc(25% - 16px)}@media only screen and (max-width:1023px){.AueO0 li,._3mXOU li{width:calc(33.33333% - 16px)}}@media only screen and (max-width:539px){.AueO0 li,._3mXOU li{width:calc(50% - 16px);height:256px}}@media only screen and (max-width:320px){.AueO0 li,._3mXOU li{width:calc(100% - 16px)}}.Eo34-{margin:0;padding:0;list-style:none}@media only screen and (min-width:1024px){.Eo34-{max-width:693px}}._2vH9g li{width:calc(100% - 2px);max-height:495px;border-radius:4px;display:inline-block;vertical-align:top;padding-left:0;padding-right:0}._2vH9g ._20FqS{width:100%;height:auto;text-align:center;margin:0}@media only screen and (min-width:1024px){._2vH9g{max-width:693px}}@media only screen and (max-width:1023px){._2vH9g li{margin-top:5px;width:100%}}@media only screen and (max-width:539px){._2vH9g li{width:100%}}@media only screen and (max-width:319px){._2vH9g li{width:100%}}._3KneI{margin:0;padding:0;list-style:none}.CoZPP{margin-top:48px}._3-BhH li{width:calc(100% - 2px);max-height:208px;border-radius:4px;display:inline-flex;vertical-align:top;padding-left:0;padding-right:0}._3-BhH ._20FqS{width:100%;height:auto;text-align:center;margin:0;display:inline-block}@media only screen and (max-width:1023px){._3-BhH li{margin:8px 0}}@media only screen and (max-width:539px){._3-BhH li{width:100%}}@media only screen and (max-width:319px){._3-BhH li{width:100%}}
.O0qGQ{width:100%;overflow:hidden;box-sizing:border-box;background:#fff;border:1px solid rgba(0,47,52,.2);border-radius:4px;margin:0 0 8px;height:176px;display:flex;text-decoration:none}.O0qGQ ._3Zbou{flex:0 0 232px;margin:8px}.O0qGQ ._2JyJx{display:inline-block;padding:8px;width:62%}.O0qGQ ._2JyJx span{margin:0 0 8px;position:relative;z-index:2;height:16px;display:block}.O0qGQ ._2JyJx span:first-child{width:120px}.O0qGQ ._2JyJx span:last-child{width:200px}@media only screen and (max-width:959px){.O0qGQ{height:auto}.O0qGQ ._3Zbou{height:112px;flex:0 0 112px}}.WEmHn{width:100%;overflow:hidden;box-sizing:border-box;background:#fff;border:1px solid rgba(0,47,52,.2);border-radius:4px;margin:10px 10px 10px -4px;max-height:192px;width:98%}.WEmHn ._3Zbou{display:inline-block;height:192px;margin:0;padding:0;overflow:hidden;width:38%}.WEmHn ._2JyJx{display:inline-block;padding:24px 118px 108px 32px;background:#fff;width:62%}.WEmHn ._2JyJx span{margin:5px 0;padding:0 0 0 15px;position:relative;z-index:2}.WEmHn ._2JyJx span:first-child{width:101px;height:22px;display:block}.WEmHn ._2JyJx span:last-child{width:240.3px;height:22px;display:block}@media only screen and (max-width:959px){.WEmHn{width:98%;margin:0 auto}.WEmHn ._2JyJx{padding:14px 0 0 27px}.WEmHn ._2JyJx span:first-child{display:block;width:101px;height:22px}.WEmHn ._2JyJx span:last-child{display:block;width:240.3px;height:22px}}@media only screen and (max-width:539px){.WEmHn{margin:8px 0;display:flex}.WEmHn ._3Zbou{height:130px;width:130px}.WEmHn ._2JyJx{padding:15px 15px 10px 22px;flex:1}.WEmHn ._2JyJx span:first-child{display:block;width:64px;height:16px}.WEmHn ._2JyJx span:last-child{display:block;width:115px;height:16px}}._2JIfP{width:100%;overflow:hidden;box-sizing:border-box;background:#fff;border:1px solid rgba(0,47,52,.2);border-radius:4px;width:calc(33.33333% - 16px);margin:8px;padding:0}._2JIfP ._3Zbou{margin:0;padding:0;overflow:hidden;position:relative;height:160px}._2JIfP ._2JyJx{padding:20px;box-sizing:border-box;background:#fff;height:100px}._2JIfP ._2JyJx span{height:12px;display:block}._2JIfP ._2JyJx span:first-child{width:30%;margin-bottom:12px}._2JIfP ._2JyJx span:last-child{width:100%}@media only screen and (max-width:539px){._2JIfP{width:50%}}@media only screen and (max-width:319px){._2JIfP{width:100%}}.n36Vb{width:100%;overflow:hidden;box-sizing:border-box;background:#fff;border:1px solid rgba(0,47,52,.2);border-radius:4px;width:33%;margin:7px 0;padding:0 7px}.n36Vb ._3Zbou{margin:0;padding:0;overflow:hidden;position:relative;height:400px;max-width:100%}.n36Vb ._2JyJx{padding:20px;box-sizing:border-box;background:#fff}.n36Vb ._2JyJx span{height:12px;display:block}.n36Vb ._2JyJx span:first-child{width:30%;margin-bottom:12px}.n36Vb ._2JyJx span:last-child{width:100%}@media only screen and (max-width:539px){.n36Vb ._3Zbou{height:200px}}@media only screen and (max-width:319px){.n36Vb{width:100%}}._3yyG6{animation-duration:1s;animation-fill-mode:forwards;animation-iteration-count:infinite;animation-name:_15P-C;animation-timing-function:linear;background:rgba(0,47,52,.2);background-size:900px 104px;position:relative}@keyframes _15P-C{0%{opacity:.3}50%{opacity:.7}to{opacity:.3}}
._2VDJl,.EIR5N,._8HqL0{width:50%;position:relative;border-radius:3px;box-sizing:border-box}._2VDJl ._1KOFM,.EIR5N ._1KOFM,._8HqL0 ._1KOFM{display:flex;margin-top:auto;justify-content:space-between;text-transform:uppercase;color:rgba(0,47,52,.64);font-size:10px}._2VDJl ._1KOFM .zLvFQ,.EIR5N ._1KOFM .zLvFQ,._8HqL0 ._1KOFM .zLvFQ{text-transform:uppercase;margin-left:auto}._2VDJl>a,.EIR5N>a,._8HqL0>a{position:relative;text-decoration:none;width:100%;box-sizing:border-box;background:#fff;border:1px solid rgba(0,47,52,.2);overflow:hidden;border-radius:4px}._2VDJl>a>figure,.EIR5N>a>figure,._8HqL0>a>figure{position:relative;background-color:#fff;padding:8px;box-sizing:border-box}._2VDJl>a>figure>img,.EIR5N>a>figure>img,._8HqL0>a>figure>img{max-width:100%}._2VDJl>a>figure:before,.EIR5N>a>figure:before,._8HqL0>a>figure:before{right:5px;width:50px;height:50px;bottom:-25px;line-height:35px;text-align:center;position:absolute;border-radius:50%;color:#23e5db;background-color:#fff}._2VDJl>a>figure ._3LlRU,.EIR5N>a>figure ._3LlRU,._8HqL0>a>figure ._3LlRU{filter:blur(5px)}._2VDJl>a>figure noscript img,.EIR5N>a>figure noscript img,._8HqL0>a>figure noscript img{z-index:1}._2VDJl>a .IKo3_ ._89yzn,._2VDJl>a .IKo3_ ._2tW1I,._2VDJl>a .IKo3_ label,.EIR5N>a .IKo3_ ._89yzn,.EIR5N>a .IKo3_ ._2tW1I,.EIR5N>a .IKo3_ label,._8HqL0>a .IKo3_ ._89yzn,._8HqL0>a .IKo3_ ._2tW1I,._8HqL0>a .IKo3_ label{margin:5px 0;position:relative;z-index:2}._2VDJl>a .IKo3_ ._89yzn,.EIR5N>a .IKo3_ ._89yzn,._8HqL0>a .IKo3_ ._89yzn{margin-top:0}._2VDJl>a .IKo3_ ._2tW1I,.EIR5N>a .IKo3_ ._2tW1I,._8HqL0>a .IKo3_ ._2tW1I{color:rgba(0,47,52,.64);font-size:14px}._2VDJl>a .IKo3_ ._2TVI3,.EIR5N>a .IKo3_ ._2TVI3,._8HqL0>a .IKo3_ ._2TVI3{color:#002f34;font-size:14px;margin:2px 0 0;text-overflow:ellipsis;overflow:hidden;white-space:nowrap}._2VDJl>a .IKo3_ ._89yzn,.EIR5N>a .IKo3_ ._89yzn,._8HqL0>a .IKo3_ ._89yzn{direction:ltr;font-weight:700;margin-bottom:0;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;color:#002f34;font-size:20px}._2VDJl>a .IKo3_ ._2awF2,.EIR5N>a .IKo3_ ._2awF2,._8HqL0>a .IKo3_ ._2awF2{right:0;bottom:0;cursor:pointer;position:absolute;color:rgba(0,47,52,.36)}._2VDJl>a .IKo3_ ._2awF2:before,.EIR5N>a .IKo3_ ._2awF2:before,._8HqL0>a .IKo3_ ._2awF2:before{width:40px;height:40px;line-height:40px;text-align:center}._2VDJl>a._1X63c>div,.EIR5N>a._1X63c>div,._8HqL0>a._1X63c>div{border-left:5px solid #23e5db}._2VDJl>a._1X63c>div label,.EIR5N>a._1X63c>div label,._8HqL0>a._1X63c>div label{color:#23e5db;text-transform:uppercase}._2VDJl>a._1X63c>div label>span,.EIR5N>a._1X63c>div label>span,._8HqL0>a._1X63c>div label>span{font-size:12px}._2VDJl>a._1X63c>div i,.EIR5N>a._1X63c>div i,._8HqL0>a._1X63c>div i{color:#23e5db}._2VDJl>a._3pSnB>div,.EIR5N>a._3pSnB>div,._8HqL0>a._3pSnB>div{border-left:5px solid #23e5db}._2VDJl>a._3pSnB>div label,.EIR5N>a._3pSnB>div label,._8HqL0>a._3pSnB>div label{color:#23e5db;text-transform:uppercase}._2VDJl>a._3pSnB>div label>span,.EIR5N>a._3pSnB>div label>span,._8HqL0>a._3pSnB>div label>span{font-size:12px}._2VDJl>a._3pSnB>div i,.EIR5N>a._3pSnB>div i,._8HqL0>a._3pSnB>div i{color:#23e5db}._2VDJl>a._2ku78>div,.EIR5N>a._2ku78>div,._8HqL0>a._2ku78>div{border-left:5px solid #23e5db}._2VDJl>a._2ku78>div label,.EIR5N>a._2ku78>div label,._8HqL0>a._2ku78>div label{color:#23e5db;text-transform:uppercase}._2VDJl>a._2ku78>div label>span,.EIR5N>a._2ku78>div label>span,._8HqL0>a._2ku78>div label>span{font-size:12px}._2VDJl>a._2ku78>div i,.EIR5N>a._2ku78>div i,._8HqL0>a._2ku78>div i{color:#23e5db}._2VDJl>a._3NtM8>div,.EIR5N>a._3NtM8>div,._8HqL0>a._3NtM8>div{border-left:5px solid #002f34}._2VDJl>a._3NtM8>div label,.EIR5N>a._3NtM8>div label,._8HqL0>a._3NtM8>div label{color:#002f34;text-transform:uppercase}._2VDJl>a._3NtM8>div label>span,.EIR5N>a._3NtM8>div label>span,._8HqL0>a._3NtM8>div label>span{font-size:12px}._2VDJl>a._3NtM8>div i,.EIR5N>a._3NtM8>div i,._8HqL0>a._3NtM8>div i{color:#002f34}._2VDJl>a._2KosO>div,.EIR5N>a._2KosO>div,._8HqL0>a._2KosO>div{border-left:5px solid #ff2800}._2VDJl>a._2KosO>div label,.EIR5N>a._2KosO>div label,._8HqL0>a._2KosO>div label{color:#ff2800;text-transform:uppercase}._2VDJl>a._2KosO>div label>span,.EIR5N>a._2KosO>div label>span,._8HqL0>a._2KosO>div label>span{font-size:12px}._2VDJl>a._2KosO>div i,.EIR5N>a._2KosO>div i,._8HqL0>a._2KosO>div i{color:#ff2800}._2VDJl>a.W801C>div,.EIR5N>a.W801C>div,._8HqL0>a.W801C>div{border-left:5px solid #ff2800}._2VDJl>a.W801C>div label,.EIR5N>a.W801C>div label,._8HqL0>a.W801C>div label{color:#ff2800;text-transform:uppercase}._2VDJl>a.W801C>div label>span,.EIR5N>a.W801C>div label>span,._8HqL0>a.W801C>div label>span{font-size:12px}._2VDJl>a.W801C>div i,.EIR5N>a.W801C>div i,._8HqL0>a.W801C>div i{color:#ff2800}._2VDJl>a._2PWYV>div,.EIR5N>a._2PWYV>div,._8HqL0>a._2PWYV>div{border-left:5px solid #ff2800}._2VDJl>a._2PWYV>div label,.EIR5N>a._2PWYV>div label,._8HqL0>a._2PWYV>div label{color:#ff2800;text-transform:uppercase}._2VDJl>a._2PWYV>div label>span,.EIR5N>a._2PWYV>div label>span,._8HqL0>a._2PWYV>div label>span{font-size:12px}._2VDJl>a._2PWYV>div i,.EIR5N>a._2PWYV>div i,._8HqL0>a._2PWYV>div i{color:#ff2800}._2VDJl>a.gfr3_>div,.EIR5N>a.gfr3_>div,._8HqL0>a.gfr3_>div{border-left:5px solid rgba(0,47,52,.64)}._2VDJl>a.gfr3_>div label,.EIR5N>a.gfr3_>div label,._8HqL0>a.gfr3_>div label{color:rgba(0,47,52,.64);text-transform:uppercase}._2VDJl>a.gfr3_>div label>span,.EIR5N>a.gfr3_>div label>span,._8HqL0>a.gfr3_>div label>span{font-size:12px}._2VDJl>a.gfr3_>div i,.EIR5N>a.gfr3_>div i,._8HqL0>a.gfr3_>div i{color:rgba(0,47,52,.64)}._2VDJl .tjgMj,.EIR5N .tjgMj,._8HqL0 .tjgMj{color:rgba(0,47,52,.64);display:inline-block;max-width:70%;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}._2LYp_{position:absolute;z-index:7;top:0;right:0}._3XcQh{position:absolute;right:12px;top:138px;z-index:7}._3XcQh._3ZcW4{width:30px!important;z-index:0}._3XcQh._3apgb{top:96px}._3XcQh .j2681{width:30px;height:30px}.EIR5N{margin:8px;padding:0;text-align:left}.EIR5N>a{display:flex;flex-direction:column;width:100%;height:100%}.EIR5N>a>figure{margin:0;overflow:hidden}.EIR5N>a .IKo3_{display:flex;flex-direction:column;flex:1;position:relative;padding:8px 16px}@media only screen and (max-width:539px){.EIR5N>a .IKo3_ ._1KOFM .zLvFQ{display:none}}.EIR5N>a .IKo3_>label{font-size:14px}.EIR5N>a .IKo3_>label:before{margin-top:-5px;font-size:16px}.EIR5N>a .IKo3_ ._2Vp0i{display:initial}.EIR5N>a .IKo3_ ._2TVI3,.EIR5N>a .IKo3_ ._89yzn,.EIR5N>a .IKo3_ ._2tW1I,.EIR5N>a .IKo3_ label{text-align:left;display:block}.EIR5N>a .IKo3_ ._2tW1I{font-weight:400;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;margin-top:5px}.EIR5N>a .IKo3_ ._2tW1I._8WFAM{margin-top:8px}.EIR5N>a .IKo3_ ._2k0a5{list-style:none;margin-top:10px;height:24px;padding:9px 8px 0 15px;border-top:1px solid rgba(0,47,52,.2);color:rgba(0,47,52,.36);display:flex;align-items:center;justify-content:flex-start}.EIR5N>a .IKo3_ ._2k0a5>div{display:flex;align-items:center;margin-right:10px;height:100%}.EIR5N>a .IKo3_ ._2k0a5>div:last-child{margin-right:0}.EIR5N>a .IKo3_ ._2k0a5>div i{margin-right:5px}.EIR5N>a .IKo3_ ._2k0a5>div span{font-size:12px}.EIR5N>a .IKo3_ ._2k0a5>div._2qq2S i:before{font-size:24px}.EIR5N>a.fhlkh>div,.EIR5N>a._2ku78>div{position:static}.EIR5N>a.fhlkh>div label,.EIR5N>a._2ku78>div label{position:absolute;top:8px;left:8px;text-transform:uppercase;padding:0}.EIR5N>a.fhlkh>div label>span,.EIR5N>a._2ku78>div label>span{font-size:10px;padding:4px 8px;font-weight:700;display:block}.EIR5N>a._2ku78>div{border-left:5px solid #23e5db}.EIR5N>a._2ku78>div label>span{background-color:#23e5db;color:#002f34}.EIR5N>a.fhlkh>div{border-left:5px solid #ffce32}.EIR5N>a.fhlkh>div label>span{background-color:#ffce32;color:#002f34}._2-msB{position:absolute;bottom:90px;right:20px;z-index:7}._2-msB .j2681{width:40px;height:40px}._2VDJl{margin:7px 0;padding:0 7px}._2VDJl>a{width:100%;display:inline-block}._2VDJl>a>figure{margin:0;overflow:hidden;max-height:357px;height:357px}._2VDJl>a .IKo3_{display:flex;flex-direction:column;position:relative;padding:8px 16px}._2VDJl>a .IKo3_>label{font-size:14px}._2VDJl>a .IKo3_>label:before{margin-top:-5px;font-size:16px}._2VDJl>a .IKo3_ ._2TVI3,._2VDJl>a .IKo3_ ._89yzn,._2VDJl>a .IKo3_ ._2tW1I,._2VDJl>a .IKo3_ label{display:block}._2VDJl>a .IKo3_ ._2tW1I{margin:4px 0 8px;hyphens:auto;font-weight:400;word-wrap:break-word;overflow-wrap:break-word;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}._2VDJl>a .IKo3_ ._2tW1I._8WFAM{margin-top:8px}._2VDJl>a .IKo3_ ._2k0a5{list-style:none;margin:10px 0 0;height:24px;padding:9px 8px 0 15px;border-top:1px solid rgba(0,47,52,.2);color:rgba(0,47,52,.36)}._2VDJl>a .IKo3_ ._2k0a5 li{float:left;margin-right:10px}._2VDJl>a .IKo3_ ._2k0a5 li:last-child{margin-right:0}._2VDJl>a .IKo3_ ._2k0a5 li i{margin-right:5px}._2VDJl>a .IKo3_ ._2k0a5 li span{font-size:12px}._2VDJl>a .IKo3_ ._2k0a5 li._2-ug5 i:before{font-size:20px}._2VDJl>a .IKo3_ ._2k0a5 li._2qq2S i:before{font-size:24px}._2VDJl>a.fhlkh>div{position:static;border-left:5px solid #ffce32}._2VDJl>a.fhlkh>div label{text-transform:uppercase;position:absolute;top:8px;left:8px;padding:0}._2VDJl>a.fhlkh>div label>span{background-color:#ffce32;color:#002f34;font-size:10px;padding:5px 12px;font-weight:700}._3DPAp{position:absolute;bottom:-16px;left:10px;z-index:7}._3DPAp .j2681{width:30px;height:30px}._8HqL0{margin:7px 0;padding:0 7px}._8HqL0>a{width:100%;height:187px;display:flex}._8HqL0>a>figure{width:272px;min-width:272px;order:1;height:185px}._8HqL0>a>figure>img{margin:auto}._8HqL0>a .IKo3_{display:flex;flex-direction:column;order:2;overflow:hidden;width:100%;padding:24px 16px 8px}._8HqL0>a .IKo3_>:first-child{max-width:calc(100% - 40px)}._8HqL0>a .IKo3_ ._1KOFM{margin-top:auto}._8HqL0>a .IKo3_ ._2tW1I{hyphens:auto;word-wrap:break-word;overflow-wrap:break-word;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;display:block}._8HqL0>a .IKo3_ ._89yzn{display:block}._8HqL0>a .IKo3_ ._2k0a5{list-style:none;margin:10px 0 0;height:24px;padding:9px 8px 0 15px;border-top:1px solid rgba(0,47,52,.2);color:rgba(0,47,52,.36)}._8HqL0>a .IKo3_ ._2k0a5 li{float:left;margin-right:10px}._8HqL0>a .IKo3_ ._2k0a5 li:last-child{margin-right:0}._8HqL0>a .IKo3_ ._2k0a5 li i{margin-right:5px}._8HqL0>a .IKo3_ ._2k0a5 li span{font-size:12px}._8HqL0>a .IKo3_ ._2k0a5 li._2-ug5 i:before{font-size:20px}._8HqL0>a .IKo3_ ._2k0a5 li._2qq2S i:before{font-size:24px}._8HqL0>a.fhlkh>div{position:relative;border-left:5px solid #ffce32}._8HqL0>a.fhlkh>div label{display:block;text-transform:uppercase}._8HqL0>a.fhlkh>div label>span{background-color:#ffce32;color:#002f34;font-size:12px;padding:3px 9px 2px}@media only screen and (max-width:1024px){.EIR5N{width:25%}}@media only screen and (min-width:540px){._2VDJl .IKo3_{height:85px}}@media only screen and (min-width:1024px){._2VDJl ._1KOFM,.EIR5N ._1KOFM,._8HqL0 ._1KOFM{font-size:10px}._2VDJl ._8WFAM{max-width:95%;margin:8px 0 0}._8HqL0>a .IKo3_ ._2TVI3{margin:8px 0 0}._8HqL0>a .IKo3_ ._2tW1I{margin:16px 0 0}._8HqL0>a .IKo3_ ._2tW1I._8WFAM{max-width:95%;margin:8px 0 0}.tjgMj{text-transform:uppercase}.EIR5N.EIR5N{height:266px}.EIR5N{width:25%}.EIR5N .tjgMj{max-width:75%}._2VDJl>a .IKo3_ ._2tW1I{margin:2px 0 10px}}@media only screen and (max-width:539px){._2VDJl a .IKo3_ ._2tW1I,.EIR5N a .IKo3_ ._2tW1I,._8HqL0 a .IKo3_ ._2tW1I{font-size:12px}._8HqL0 ._1KOFM{text-transform:uppercase;font-size:10px}._8HqL0 .tjgMj{max-width:60%}._8HqL0 a{height:130px}._8HqL0 a figure{height:130px;width:130px;min-width:130px}._8HqL0 a .IKo3_{padding:8px 16px}._8HqL0 a .IKo3_ ._2tW1I._8WFAM{margin-top:8px}._2VDJl{display:flex;position:relative;flex-direction:column}._2VDJl a figure{height:200px}._2VDJl a .IKo3_{padding:8px 16px;height:85px;display:flex;flex-direction:column}._2VDJl a .IKo3_ ._2tW1I{margin:2px 0 12px}._2VDJl a .IKo3_ ._2tW1I._8WFAM{margin-top:8px}.EIR5N.EIR5N{height:264px}.EIR5N.EIR5N .tjgMj{max-width:unset}.EIR5N.EIR5N .IKo3_{padding:8px}.tjgMj{font-size:10px}}
._2a_T5{margin:8px;padding:8px;cursor:pointer;list-style:none;overflow:hidden;position:relative;box-sizing:border-box;background:#3a77ff}@media only screen and (min-width:1024px){._2a_T5{padding:16px}}._2a_T5 ._1n-u_{z-index:2;width:100%;height:100%;display:flex;position:relative;align-items:center;box-sizing:border-box;text-align:center;flex-direction:column}._2a_T5 ._3Nhk_{color:#fff;flex-grow:1;display:flex;flex-direction:column;overflow:hidden;margin-bottom:20px}._2a_T5 ._2zEP4{color:#fff;font-size:16px;margin:0}._2a_T5 ._12BFu{font-size:14px;line-height:normal;margin-bottom:0}._2a_T5 ._2hlCK{flex-shrink:0;width:100%}._2a_T5._31Uon ._12BFu{margin-top:20px}._2a_T5._1lhga,._2a_T5._33Zty{margin:5px 0}._2a_T5._1lhga ._12BFu,._2a_T5._33Zty ._12BFu{margin-top:8px}._2a_T5._33Zty ._1n-u_{padding:16px 40px}._2a_T5._33Zty ._1QYgi{top:-70%}._2a_T5._1lhga ._1n-u_{padding:40px}

/*# sourceMappingURL=desktop-usercontent.olx.6deb83c10717c545120d.css.map*/
</style> 



@endsection

@section('js-section')
<script src="{{URL::to('/')}}/log/js/jquery.min.js"></script>
  <script src="{{URL::to('/')}}/log/js/popper.js"></script>
  <script src="{{URL::to('/')}}/log/js/bootstrap.min.js"></script>
  <script src="{{URL::to('/')}}/log/js/main.js"></script>


    <!-- Include Libs & Plugins
    ============================================ -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="{{URL::to('/')}}/Userassets/js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="{{URL::to('/')}}/Userassets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{URL::to('/')}}/Userassets/js/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="{{URL::to('/')}}/Userassets/js/slick-slider/slick.js"></script>
    <script type="text/javascript" src="{{URL::to('/')}}/Userassets/js/themejs/libs.js"></script>
    <script type="text/javascript" src="{{URL::to('/')}}/Userassets/js/unveil/jquery.unveil.js"></script>
    <script type="text/javascript" src="{{URL::to('/')}}/Userassets/js/countdown/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="{{URL::to('/')}}/Userassets/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
    <script type="text/javascript" src="{{URL::to('/')}}/Userassets/js/datetimepicker/moment.js"></script>
    <script type="text/javascript" src="{{URL::to('/')}}/Userassets/js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" src="{{URL::to('/')}}/Userassets/js/jquery-ui/jquery-ui.min.js"></script>
    
    <script type="text/javascript" src="{{URL::to('/')}}/Userassets/js/lightslider/lightslider.js"></script>
    <!-- Theme files
    ============================================ -->
    
    <script type="text/javascript" src="{{URL::to('/')}}/Userassets/js/themejs/so_megamenu.js"></script>
    <script type="text/javascript" src="{{URL::to('/')}}/Userassets/js/themejs/addtocart.js"></script>
    <script type="text/javascript" src="{{URL::to('/')}}/Userassets/js/themejs/application.js"></script>    
   
    <script type="text/javascript"><!--
    // Check if Cookie exists
        if($.cookie('display')){
            view = $.cookie('display');
        }else{
            view = 'grid';
        }
        if(view) display(view);


    //--></script>
    <script src="{{URL::to('/')}}/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="{{URL::to('/')}}/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
   
 <script type="text/javascript">



$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
 
function loadModel(cid)
{
    $.ajax({
        url:"/getmodels",
        type:"POST",
        data:{"cid":cid},
        success:function(response){
            var obj = jQuery.parseJSON(response);
            //txtmodel
            var output="";
            $.each(obj, function(key,row) {
              output+='<option value="'+row.model_id+'">'+row.model_name+'</option>';
            }); 
            $("#txtmodel").html(output);
        },
        error:function()
        {
            alert("Error");
        }
    });
}


function loadcity(sid)
{
    $.ajax({
        url:"/getstate",
        type:"POST",
        data:{"sid":sid},
        success:function(response){
            var obj = jQuery.parseJSON(response);
            //txtmodel
            var output="";
            $.each(obj, function(key,row) {
              output+='<option value="'+row.city_id+'">'+row.city_name+'</option>';
            }); 
            $("#txtcity").html(output);
        },
        error:function()
        {
            alert("Error");
        }
    });
}



</script>
            

   <script type="text/javascript">
     $(document).on("click",".open-dialog",function(){
                var id = $(this).attr("data-id");
                $("#deleteid").val(id);
            });
        </script>     
        
    
       
@endsection




@section("main-section")
 <div class="main-container container">
        <ul class="breadcrumb">
            <li><a href="/Users/Home"><i class="fa fa-home"></i></a></li>
            <li><a >My Account</a></li>
            <li><a href="/Users/OldVehicle/myads">My Ads</a></li>
        </ul>


<div class="row">
     <h1 class="title">My Ads</h1>
     <br/><br/>
   @foreach($oldvehicle as $index => $old)
    <div class="_3eWVB">
        <div class="_2Bchz">
            <div>
                
                <ul class="_3Ho5N" data-aut-id="myAdViewListing">
                    <div class="_235Nc" data-aut-id="myadCard" >
                        <div class="_1F2wj">
                            <span class="grbJO" data-aut-id="myadsRibbon">
                                
                            </span>
                            <div class="ipDOb" style="width:1200px;">
                                <div class="_2wCc5">
                                     
                                    <span class="grbJO" data-aut-id="myadsRibbon">
                                        
                                    </span><div class="_1JNIz"><div class="_qMld" data-aut-id="myadsDatesCard">
                                        <span>
                                            <!-- <img src="{{URL::to('/')}}/Userassets/image/ad1.jpg" alt="slider3" style="height:244px;" class="img-responsive"> -->
                                            <strong data-aut-id="myadsDatesCardFrom" style="font-size:20px;">#{{++$index}}</strong>
                                        </span>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="KKH2X">
                                            <div class="_1py7L">
                                                <div class="_1qu-C">
                                                    <div class="_3eKkH">
                                                        <table>
                                                            <tr>
                                                                <td>
                                                        <figure class="_2grx4 _3Km4V" data-aut-id="myadsImage">
                                                            <img src="{{URL::to('/')}}/oldvehicle_img/{{ $old->img1 }}" alt="Tata Indica 2013 Petrol Good Condition" sizes="(min-width: 1280px) 100vw, (min-width: 1024px) 20vw, (min-width: 960px) 25vw, (min-width: 540px) 25vw, (min-width: 320px) 30vw, 35vw"  class="_1N079">
                </figure>
            </td>
        </tr>
        <tr>
            <td>
                <figure class="_2grx4 _3Km4V" data-aut-id="myadsImage">
                     <img src="{{URL::to('/')}}/oldvehicle_img/{{ $old->img2 }}" alt="Tata Indica 2013 Petrol Good Condition" sizes="(min-width: 1280px) 100vw, (min-width: 1024px) 20vw, (min-width: 960px) 25vw, (min-width: 540px) 25vw, (min-width: 320px) 30vw, 35vw"  class="_1N079">
                </figure>
            </td>
        </tr>
        <tr>
            <td>
                <figure class="_2grx4 _3Km4V" data-aut-id="myadsImage">
                     <img src="{{URL::to('/')}}/oldvehicle_img/{{ $old->img3 }}" alt="Tata Indica 2013 Petrol Good Condition" sizes="(min-width: 1280px) 100vw, (min-width: 1024px) 20vw, (min-width: 960px) 25vw, (min-width: 540px) 25vw, (min-width: 320px) 30vw, 35vw"  class="_1N079">
                    <noscript>
                        
                    </noscript>
                </figure>
            </td>
        </tr>
    </table>
            </div>
            <div class="v4vud">
                <div class="_14LDX" data-aut-id="myadsInfoCard">
                    <span class="_12XJ7" data-aut-id="myadsInfoCardTitle">{{$old->model_name}} - 
{{$old->company_name}}</span>
                    <span class="_1zE4A" data-aut-id="myadsInfoCardInfo" style="font-size: 15px;">{{$old->year}} - {{$old->km}}</span>
                </div>
            </div>
            <div class="_11y0L">
                <span class="_3-H54" data-aut-id="myadsPriceCard" style="font-size: 15px;">₹ {{$old->price}}</span>

                </div>
                <div class="_14tgB">
                    <label data-aut-id="statusLabel" class="_1GJpC _3gFF2" style="font-size: 12px;">{{$old->vehicle_numbers}}</label>
                </div>
                <div class="_14tgB">
                    <label data-aut-id="statusLabel" class="_1GJpC _3gFF2" style="font-size: 12px;">{{$old->contactno}}</label>
                </div>
                <div class="_2ZAhs">
                    <div class="_2bhQI" data-aut-id="myadsMessageCard">
                        <span data-aut-id="pendingMessage">{{$old->About_vehicle}} </span>
                    </div>

                </div>

            </div>
            <div class="PoDMF">
                <div class="rui-7JEZg">
                    <span class="rui-3pJ6W icon-more rui-1Sefm" role="button" tabindex="0" data-aut-id="">
                        <i class="rui-1XUas rui-3v4V0" title="More">
                            
                        </i>
                    </span>
                </div>
            </div>
        </div>
        <div class="_2Qa7-"><div class="">
            <div class="_1jeI2" data-aut-id="myadsStatistics">
                <div class="rui-3OlBh GT-OG" data-aut-id="view-stat">
                  
                    <span class="rui-2kwk7" style="font-size: 12px;">{{$old->addressline1}} {{$old->addressline2}}</span>
                    <span></span>
                </div>
                <div class="rui-3OlBh GT-OG" data-aut-id="like-stat">
                   
                    <span class="rui-2kwk7" style="font-size: 12px;">{{$old->landmark}} {{$old->pincode}}  {{$old->city_name}} {{$old->state_name}}</span>
                    <span></span>
                </div>
            </div>
        </div>
        <div class="_3fyK1" data-aut-id="myadsMainCTA">
            <button type="button" data-aut-id="monetizableButton" class="rui-3sH3b rui-2yJ_A rui-1zK8h _3bFmz btn btn-info " title="Edit" onclick="window.location='/Users/OldVehicle/updvehicle/{{ $old->o_id }}';" data-toggle="tooltip" data-original-title="Get Details" style="height: 40px;font-size: 15px;">
                <span>Edit</span>
            </button>
            &nbsp;&nbsp;
             <button type="button"  data-id="{{ $old->o_id }}" type="button" data-toggle="modal" data-target="#myModal" class="btn btn-danger open-dialog rui-3sH3b rui-2yJ_A rui-1zK8h _3bFmz " title="Remove"   style="height: 40px; font-size: 15px;" >
                <span>Remove</span>
            </button></div>
        </div>
    </div>
</div>
</div>
</a>
</ul>

</div>
<div class="araqd">
    
</div>
</div>
</div>
@endforeach
       


           

            <!-- <div id="content" class="col-sm-12">
                <h2 class="title">My Ads</h2>
                <div class="table-responsive">
                 
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td class="text-center">Ads Id</td>
                                <td class="text-center">Owner Name</td>
                                <td class="text-left">Model Name</td>
                                <td class="text-center">Company Name</td>
                                <td class="text-center">Year</td>
                                <td class="text-center">Vehicle Number</td>
                                <td class="text-center">Kolimeter</td>
                                <td class="text-right">Price</td>
                                <td class="text-right">About Vehicle</td>
                                <td class="text-right" style="width:400px;" >Image 1</td>
                                <td class="text-right" style="width:400px;">Image 2</td>
                                <td class="text-right" style="width:400px;">Image 3</td>
                                <td class="text-right">State</td>
                                <td class="text-right">City</td>
                                <td class="text-right">Address Line 1</td>
                                <td class="text-right">Address Line 2</td>
                                <td class="text-right">Landmark</td>
                                <td class="text-right">Pincode</td>
                                <td class="text-right">Contact No</td>
                                 <td class="text-right" colspan="2">Action</td>
                            </tr>
                        </thead>
                        <tbody>
                             @foreach($oldvehicle as $index => $old)
                            <tr>
                                <td class="text-center">

                                   {{++$index}}
                                </td>
                                <td class="text-left">{{$old->name}}</td>
                                <td class="text-left">{{$old->model_name}}</td>
                                <td class="text-center">{{$old->company_name}}</td>
                                <td class="text-center">{{$old->year}}</td>
                                <td class="text-center">{{$old->vehicle_numbers}}</td>
                                <td class="text-center">{{$old->km}}</td>
                                <td class="text-right">{{$old->price}}</td>
                                <td class="text-right">{{$old->About_vehicle}}</td>

                                

                            
                                <td class="text-center" style="width:400px;">
                                   <img src="{{URL::to('/')}}/oldvehicle_img/{{ $old->img1 }}" width="300" height="100"/></td>
                                                 <td class="text-center"><img src="{{URL::to('/')}}/oldvehicle_img/{{ $old->img2 }}" width="300" height="100"/></td>
                                                 <td class="text-center"><img src="{{URL::to('/')}}/oldvehicle_img/{{ $old->img3 }}" width="300" height="100"/></td>
                                <td class="text-right">{{$old->state_name}}</td>
                                <td class="text-right">{{$old->city_name}}</td>  
                                <td class="text-right">{{$old->addressline1}}</td>
                                <td class="text-center">{{$old->addressline2}}</td>
                                <td class="text-center">{{$old->landmark}}</td>
                                <td class="text-center">{{$old->pincode}}</td>
                                <td class="text-center">{{$old->contactno}}</td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-info" title="Edit" onclick="window.location='/Users/OldVehicle/updvehicle/{{ $old->o_id }}';" data-toggle="tooltip" data-original-title="Get Details" style=" border-radius: 4px;" ><i class="fa fa-eye" style="font-size: 20px; padding-top: 2px;"></i></button>
                                </td>
                                <td>
                                    <button  data-id="{{ $old->o_id }}" type="button" data-toggle="modal" data-target="#myModal" class="btn btn-danger open-dialog"  title="Remove"   style=" border-radius: 4px;" >
                                        <i class="fa fa-times-circle"  style="font-size: 20px; padding-top: 2px;">
                                            
                                        </i>
                                    </button>
                                   
                                </td>
                            </tr>
                        </tbody>
                         @endforeach
                    </table>
                   
                </div>

            </div>
           
        </div> -->


</div>
</div>

    <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title mt-0" id="myModalLabel">Delete Ad</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Are you sure remove your Ad?
                            </div>
                            <div class="modal-footer">
                                <form method="post" action="/deleteoldvehicle">
                                    <input type="hidden" name="_token" value="<?php  echo csrf_token(); ?>"/>
                                    <input type="hidden"  id="deleteid" name="deleteid" />
                                
                                
                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">No</button>
                                <input type="submit" class="btn btn-primary waves-effect waves-light" value="Yes"/>
                            </form>

                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

 

@endsection