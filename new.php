<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<h1>New Task</h1>
<?= view('tasks/form', ['action' => site_url('tasks'), 'task' => []]) ?>
<?= $this->endSection() ?>
