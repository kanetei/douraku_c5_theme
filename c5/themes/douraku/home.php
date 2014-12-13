<?php 
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>
    <div class="main">
        <div class="row slide">
            <div class="large-12 columns">
            <?php
                $a = new Area('Main');
                $a->display($c);
            ?>
            </div>
        </div>
        <div class="row main-contents">
            <div class="large-6 columns">
            <?php
                $a = new Area('Top Left');
                $a->display($c);
            ?>
            </div>
            <div class="large-6 columns">
            <?php
                $a = new Area('Top Right');
                $a->display($c);
            ?>
            </div>
        </div>
    </div>

<?php $this->inc('elements/footer.php'); ?>
