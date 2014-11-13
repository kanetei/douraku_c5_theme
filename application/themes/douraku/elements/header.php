<?php defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header_top.php');
$as = new GlobalArea('Header Search');
$blocks = $as->getTotalBlocksInArea();

?>

<header>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-xs-6">
                <?php
                $a = new GlobalArea('Header Site Title');
                $a->display();
                ?>
            </div>
            <div class="col-sm-6 col-xs-6">
                <?php
                $a = new GlobalArea('Header Navigation');
                $a->display();
                ?>
            </div>
            <div class="col-sm-12 col-xs-12"><?php $as->display(); ?></div>
        </div>
    </div>
</header>