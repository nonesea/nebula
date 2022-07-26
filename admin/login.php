<?php require __DIR__ . '/common.php'; ?>
<?php $user->hasLogin() && $response->redirect('/'); ?>
<?php require __DIR__ . '/header.php'; ?>
<div class="nebula-login">
    <div class="board">
        <h1 class="title">Nebula</h1>
        <form class="login-form" action="/user/login" method="post">
            <input class="login-input" type="text" name="account" placeholder="用户名" value="<?= \Nebula\Helpers\Cookie::get('account', '') ?>">
            <input class="login-input" type="password" name="password" placeholder="密码">
            <button class="login-btn">登录</button>
        </form>
        <div class="tools">
            <a href="/">返回首页</a>
            <?php if ($options->boolParse('allowRegister')) : ?>
                <a href="/admin/register.php">立即注册</a>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php require __DIR__ . '/footer.php'; ?>
