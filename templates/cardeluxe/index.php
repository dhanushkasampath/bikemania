<?php defined('_JEXEC') or die('Restricted access'); ?>
<?php require_once dirname(__FILE__).DIRECTORY_SEPARATOR.'customizer.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />
</head>

<body>
<div id="header-line" class="clr">
<div id="header-structure">
<div id="logo">
<img class="logo" src="<?php echo $this->baseurl ?>/<?php echo "$logo"; ?>" />
</div>
<?php if($this->countModules('header')) : ?>
<div id="header">
<jdoc:include type="modules" name="header" style="none" />
</div>
<?php endif; ?>
</div>
</div>
<?php if($this->countModules('menu') or $this->countModules('search')) : ?>
<div id="menu-line" class="clr">
<div id="menu-structure">
<div id="menu-bg">
<?php if($this->countModules('menu')) : ?>
<div id="menu">
<jdoc:include type="modules" name="menu" style="none" />
</div>
<?php endif; ?>
<?php if($this->countModules('search')) : ?>
<div id="search">
<jdoc:include type="modules" name="search" style="none" />
</div>
<?php endif; ?>
</div>
</div>
</div>
<div id="spacer-line" class="clr">
<div id="spacer-structure">
<div id="spacer-bg">
&nbsp;
</div>
</div>
</div>
<?php endif; ?>
<?php if($this->countModules('banner')) : ?>
<div id="banner-line" class="clr">
<div id="banner-structure">
<jdoc:include type="modules" name="banner" style="none" />
</div>
</div>
<?php endif; ?>
<div class="clr">
<div id="content-structure">
<?php if($this->countModules('left')) : ?>
<div id="left<?php echo getDesign($left,$right); ?>" class="design">
<jdoc:include type="modules" name="left" style="webtag" />
</div>
<?php endif; ?>
<div id="content<?php echo getDesign($left,$right); ?>">
<div id="content" class="clr">
<jdoc:include type="message" />
<jdoc:include type="component" />
</div>
</div>
<?php if($this->countModules('right')) : ?>
<div id="right<?php echo getDesign($left,$right); ?>" class="design">
<jdoc:include type="modules" name="right" style="webtag" />
</div>
<?php endif; ?>
</div>
</div>
<?php if($this->countModules('footer1') or $this->countModules('footer2')) : ?>
<div id="footer-line" class="clr">
<div id="footer-structure" class="<?php echo $footer_width; ?>">
<?php if($this->countModules('footer1')) : ?>
<div class="footer one">
<jdoc:include type="modules" name="footer1" style="webtag" />
</div>
<?php endif; ?>
<?php if($this->countModules('footer2')) : ?>
<div class="footer two">
<jdoc:include type="modules" name="footer2" style="webtag" />
</div>
<?php endif; ?>
</div>
</div>
<?php endif; ?>
<div id="copy-line" class="clr">
<div id="copy-structure">
<div id="copy-bg">
<div id="copy">Copyright &copy; <?php echo date("Y"); ?> <?php echo "$sitename"; ?>. All Right Reserved.</div>
<div id="powered">Powered By <a href="http://www.joomlaperfect.com" target="_blank">Joomla Perfect</a></div>
</div>
</div>
</div>
<div id="spacer" class="clr">&nbsp;</div>
</body>
</html>