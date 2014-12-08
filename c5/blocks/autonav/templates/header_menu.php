<?php defined('C5_EXECUTE') or die("Access Denied.");
$navItems = $controller->getNavItems();
?>
<div class="contain-to-grid sticky">
    <nav class="top-bar" data-topbar role="navigation">
        <ul class="title-area">
            <li class="name"><h1><a href="/">ホーム</a></h1></li>
            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
        </ul>
        <section class="top-bar-section">
            <ul class="left">
            <?php foreach ($navItems as $ni) {
                $classes = array();
                if ($ni->isCurrent) {
                        $classes[] = 'nav-selected';
                }
                if ($ni->inPath) {
                        $classes[] = 'nav-path-selected';
                }
                if ($ni->isFirst) {
                        $classes[] = 'first';
                }
                $classes = implode(" ", $classes);
            ?>
                <li class="<?php echo $classes?>">
                        <a class="<?php echo $classes?>" href="<?php echo $ni->url?>" target="<?php echo $ni->target?>"><?php echo $ni->name?></a>
                </li>
            <?php } ?>
            </ul>
        </section>
    </nav>
</div>
