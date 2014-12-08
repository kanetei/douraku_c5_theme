<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>
<!doctype html>
<html class="no-js" lang="<?php echo LANGUAGE?>">
<head>
    <?php  Loader::element('header_required'); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo $this->getThemePath(); ?>/css/app.css" />
    <script src="<?php echo $this->getThemePath(); ?>/js/lib/modernizr.js"></script>
</head>
<body>
<div class="page">
    <header class="row">
        <div class="large-12 columns">
        <?php
            $a = new GlobalArea('Site Title');
            $a->display();
        ?>
        </div>
    </header>
