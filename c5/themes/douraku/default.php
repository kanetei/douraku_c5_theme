<?php 
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>
    <footer class="row">
        <div class="large-12 columns">
        <?php
            $a = new Area('Main');
            $a->display($c);
        ?>
        </div>
    </footer>

<?php $this->inc('elements/footer.php'); ?>
