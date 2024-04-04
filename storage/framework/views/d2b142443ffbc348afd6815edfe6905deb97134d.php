<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Atte</title>
  <link rel="stylesheet" href="<?php echo e(asset('css/sanitize.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/common.css')); ?>">
  <?php echo $__env->yieldContent('css'); ?>
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <div class="header-utilities">
        <a class="header__logo" href="/">
          退勤アプリ
        </a>
        <nav>
          <ul class="header-nav">
            <?php if(Auth::check()): ?>
            <li class="header-nav__item">
              <a class="header-nav__link" href="/mypage">マイページ</a>
            </li>
            <li class="header-nav__item">
              <form class="form" action="/logout" method="post">
               <?php echo csrf_field(); ?>
                <button class="header-nav__button">ログアウト</button>
              </form>
            </li>
            <?php endif; ?>
          </ul>
        </nav>
      </div>
    </div>
  </header>

  <main>
    <?php echo $__env->yieldContent('content'); ?>
  </main>
</body>

</html><?php /**PATH /var/www/resources/views/layouts/app.blade.php ENDPATH**/ ?>