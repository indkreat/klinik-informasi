<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<style>
		table{
			border: 1px solid #ccc;
	    	font-size: 14px;
		}
		input{
			
    font-size: 12px;
    border: 1px solid #ccc;
    background: #ededed;
    line-height: 30px;
    margin-left: -2px;

		}
		#logo{
			background: #589fc8;
	    color: #fff;
	    font-family: fantasy;
	    font-size: 50px;
	    padding: 50px;
		}
		input[type="submit"]{
			cursor: pointer;
			padding: 5px 20px;
			background: #4dbeff;
    border: none;
    font-size: 15px;
		}
	</style>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Beranda', 'url'=>array('/site/index')),
				array('label'=>'Masuk', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Kelola Obat', 'url'=>array('/obat/index'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Kelola Wilayah', 'url'=>array('/wilayah/index'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Kelola Tindakan', 'url'=>array('/tindakan/index'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Kelola Pegawai', 'url'=>array('/pegawai/index'), 'visible'=>Yii::app()->user->getState('role') === 'admin'),
				array('label'=>'Keluar ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
