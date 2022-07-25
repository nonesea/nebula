<?php require __DIR__ . '/common.php'; ?>
<?php $options->boolParse('allowRegister') || $options->response->redirect('/'); ?>
<?php $user->hasLogin() && $options->response->redirect('/'); ?>
<?php require __DIR__ . '/header.php'; ?>
<div class="nebula-login">
    <div class="board">
        <h1 class="title">Nebula</h1>
        <form class="login-form" action="/user/register" method="post">
            <input class="login-input" type="text" name="username" placeholder="用户名">
            <div class="group">
                <input class="login-input" type="email" name="email" placeholder="邮箱">
                <button type="button" class="login-btn">发送</button>
            </div>
            <input class="login-input" type="text" name="code" placeholder="验证码">
            <input class="login-input" type="password" name="password" placeholder="密码">
            <input class="login-input" type="password" name="confirmPassword" placeholder="确认密码">
            <button class="login-btn">注册</button>
        </form>
        <div class="tools">
            <a href="/admin/login.php">返回登陆</a>
        </div>
    </div>
</div>
<?php require __DIR__ . '/footer.php'; ?>
