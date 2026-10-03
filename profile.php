<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<h1>Profile</h1>
<?php if (session()->has('user_id')): ?><p>Logged in as <strong><?= esc(session()->get('full_name')) ?></strong>.</p><?php else: ?><p>This page is public. Log in to manage tasks.</p><?php endif; ?>
<?= $this->endSection() ?>
