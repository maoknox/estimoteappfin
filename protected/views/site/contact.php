<?php
    Yii::app()->clientScript->registerCssFile("https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css");
    Yii::app()->clientScript->registerScriptFile("https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js",CClientScript::POS_END);
    Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl."/js/Est_1.js",CClientScript::POS_END);
?>
<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
	'Contact',
);
?>
<div id="divEstContact">
    <audio id="myAudio1" >
      <source src="http://www.music.helsinki.fi/tmt/opetus/uusmedia/esim/a2002011001-e02-128k.mp3" controls>
      <!--<source src="horse.mp3" type="audio/mpeg">-->
      <p>Tu navegador no implementa el elemento audio</p>
    </audio>
</div>
