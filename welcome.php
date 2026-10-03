<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<h1>Tasks for Today</h1>
<p>Welcome to Angela Catangay's task management system.</p>
<h2>Upcoming tasks</h2>
<?php if (empty($tasks)): ?><p>No active tasks yet.</p><?php endif; ?>
<?php foreach ($tasks as $task): ?><div class="card"><strong><?= esc($task['title']) ?></strong><br><small><?= esc($task['task_date']) ?></small></div><?php endforeach; ?>
<?= $this->endSection() ?>
