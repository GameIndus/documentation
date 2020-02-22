<div class="tutorial-header-container">
    <div class="hero-1"><?= $title ?></div>
    <div class="hero-2"><i class="fa fa-<?= $icon ?>"></i> <?= $name ?></div>
</div>
<div class="tutorial-header-bar">
    <div class="left">
        <div class="tutorial-badge"><?= $badge ?></div>
        Tutoriel : <?= $subname ?>
    </div>
    <div class="right">
        <?php if (!empty($next)): ?>
            <a href="/<?= $next['url'] ?>" title="<?= $next['title'] ?>">
                <div class="action-bar">
                    <span><?= $next['title'] ?></span> <i class="fa fa-angle-right"></i>
                </div>
            </a>
        <?php endif; ?>

        <?php if (!empty($previous)): ?>
            <a href="/<?= $previous['url'] ?>" title="<?= $previous['title'] ?>">
                <div class="action-bar">
                    <i class="fa fa-angle-left"></i> <span><?= $previous['title'] ?></span>
                </div>
            </a>
        <?php endif; ?>
    </div>
    <div class="clear"></div>
</div>
