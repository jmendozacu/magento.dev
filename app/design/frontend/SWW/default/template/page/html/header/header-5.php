<div id="header">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <a class="logo" href="<?php echo $this->getUrl('') ?>" title="<?php echo $this->getLogoAlt() ?>">
                    <img src="<?php echo $this->getLogoSrc() ?>" alt="<?php echo $this->getLogoAlt() ?>" />
                </a>
            </div>
            <div class="col-md-4 pull-right">
                <?php echo $this->getChildHtml('top_cart') ?>
            </div>
        </div>
    </div>
</div>
<!-- Navigation -->
<nav class="navbar navbar-default navbar-main" role="navigation">
    <div class="container">
        <div class="row">
            <div class="navbar-header">
                <a class="navbar-brand visible-xs" href="#"><?php echo $this->__('Categories') ?></a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <span class="sr-only"><?php echo $this->__('Toggle Navigation') ?></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse navbar-main-collapse">
                <?php echo $this->getChildHtml('topMenu') ?>
                <?php echo $this->getChildHtml('topSearch') ?>
            </div>
        </div>
    </div>
</nav>
header 5 is empty