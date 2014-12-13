<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>
    <footer class="site-footer">
        <div class="row">
            <div class="large-12 columns">
            <?php
                $a = new GlobalArea('Map');
                $a->display();
            ?>
            </div>
            <div class="footer-text">
            <?php
                $a = new GlobalArea('Footer');
                $a->display();
            ?>
            </div>
        </div>
    </footer>
    <script src="<?php echo $this->getThemePath(); ?>/js/lib/foundation.min.js"></script>
    <script src="<?php echo $this->getThemePath(); ?>/js/app.js"></script>
</div>
<?php  Loader::element('footer_required'); ?>
</body>
</html>
