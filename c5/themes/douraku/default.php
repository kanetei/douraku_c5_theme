<?php 
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>
    <div class="main">
        <div class="row">
            <div class="large-12 columns">
            <?php
                $a = new Area('Main');
                $a->display($c);
            ?>
            </div>
        </div>
    </div>

<?php $this->inc('elements/footer.php'); ?>
