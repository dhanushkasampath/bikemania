<?php
defined('_JEXEC') or die('Restricted access');
$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$logo = $this->params->get('logo');
$sitename = $app->getCfg('sitename');
$left = $this->countModules('left');
$right = $this->countModules('right');
$footer1 = $this->countModules('footer1');
$footer2 = $this->countModules('footer2');
if($footer1 && $footer2) { $footer_width = "footer49"; }
if(!$footer1 && $footer2) { $footer_width = "footer99"; }
if($footer1 && !$footer2) { $footer_width = "footer99"; }
if(!$footer1 && !$footer2) { $footer_width = "footer0"; }
function getDesign ($left, $right){
if ($left && !$right) { $design = "-left-col"; }
if ($right && !$left) { $design = "-right-col"; }
if ($left && $right) { $design = "-left-right"; }
if (!$left && !$right) { $design = "-no-col"; }
return $design; }
$doc->setMetaData( 'viewport', 'width=device-width, initial-scale=1.0' );
$doc->addStyleSheet(JUri::base() . 'templates/' . $this->template . '/css/template.css', $type = 'text/css');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/respond.min.js', 'text/javascript');
function powered_by(){ $file = dirname(__FILE__).DIRECTORY_SEPARATOR.'index.php'; $links = '<a href="http://www.joomlaperfect.com" target="_blank">'; $filedata = fopen($file,'r'); $cheaklink=fread($filedata,filesize($file)); fclose($filedata); if(strpos($cheaklink, $links)==0){ echo '<br><center>Template by www.webdesignbuilders.net</center>'; die; } } powered_by();
?>