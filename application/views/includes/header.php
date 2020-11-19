<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--  stylesheets  -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">

    <!--  scripts  -->
    <script src="<?= base_url('assets/js/jquery.min.js') ?>" defer></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>" defer></script>
    <script src="<?= base_url('assets/js/parsley.js') ?>" defer></script>
    <script src="<?= base_url('assets/js/custom.js') ?>" defer></script>
    <title>Prueba Innovaly_Christian</title>
</head>
<body>
<?php if(!empty($this->session->userdata('email'))): ?>
    <?php $this->load->view('includes/navbar'); ?>
<?php endif; ?>
