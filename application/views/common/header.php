<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-grid.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-reboot.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/custom.css') ?>?q=">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://masonry.desandro.com/masonry.pkgd.js"></script>
</head>
<body style="background: url('<?php echo base_url('assets/images/metal.jpg'); ?>'); background-repeat: no-repeat;-webkit-background-size: ;background-size: cover;z-index:-10;">
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="<?php echo site_url('home');?>">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo site_url('home');?>">Home <span class="sr-only">(current)</span></a>
            </li>
<!--            <li class="nav-item">-->
<!--                <a class="nav-link" href="--><?php //echo site_url('artists');?><!--">Artists</a>-->
<!--            </li>-->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('albums');?>">Albums</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('genres');?>">Genres</a>
            </li>
        </ul>

    </div>
</nav>