<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= esc($title ?? 'Tasks for Today') ?></title>
    <style>
        body{font-family:Arial,sans-serif;max-width:900px;margin:30px auto;padding:0 18px;color:#222}nav{display:flex;gap:16px;flex-wrap:wrap;border-bottom:1px solid #ddd;padding-bottom:14px;margin-bottom:24px}a{color:#2457a6;text-decoration:none}.button{display:inline-block;background:#2457a6;color:white;border:0;padding:9px 13px;border-radius:4px;cursor:pointer}.danger{background:#a52b2b}.card{border:1px solid #ddd;border-radius:6px;padding:16px;margin:12px 0}label{display:block;margin-top:12px;font-weight:bold}input,textarea{width:100%;box-sizing:border-box;padding:9px;margin-top:5px;border:1px solid #bbb;border-radius:4px}textarea{min-height:100px}.notice{padding:10px;background:#edf5e9;margin:12px 0}.error{padding:10px;background:#faeaea;margin:12px 0;color:#8a1e1e}small{color:#666}.actions{display:flex;gap:8px;margin-top:12px}
    </style>
</head>
<body>
    <nav>
        <a href="<?= site_url('/') ?>">Welcome</a>
        <a href="<?= site_url('tasks') ?>">Task List</a>
        <a href="<?= site_url('about') ?>">About</a>
        <a href="<?= site_url('profile') ?>">Profile</a>
        <?php if (session()->has('user_id')): ?>
            <a href="<?= site_url('logout') ?>">Log out</a>
        <?php else: ?>
            <a href="<?= site_url('login') ?>">Log in</a>
        <?php endif; ?>
    </nav>

    <?php if (session()->getFlashdata('message')): ?><div class="notice"><?= esc(session()->getFlashdata('message')) ?></div><?php endif; ?>
    <?php if (session()->getFlashdata('error')): ?><div class="error"><?= esc(session()->getFlashdata('error')) ?></div><?php endif; ?>
    <?= $this->renderSection('content') ?>
</body>
</html>
