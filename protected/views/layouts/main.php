<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<?php //Yii::app() -> bootstrap -> register(); ?>

<div class="container" id="page">

	<div id="header">
		<table>
			<tr>
				<td>
					<div id="logo"><img align="left" src="images/cnj.jpg"/></div>
				</td>
				<td>
					<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
				</td>
			</tr>
		</table>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Inicio', 'url'=>array('/site/index')),
				array('label'=>'Alumnos', 'url'=>array('/alumno/index'),'visible'=>Yii::app()->user->checkAccess('PROFESOR')),
				array('label'=>'Alumnos', 'url'=>array('/alumno/index'),'visible'=>Yii::app()->user->checkAccess('ADMINISTRADOR')),
				array('label'=>'Asignar Curso', 'url'=>array('/cursa/index'),'visible'=>Yii::app()->user->checkAccess('PROFESOR')),
				array('label'=>'Asignar Curso', 'url'=>array('/cursa/index'),'visible'=>Yii::app()->user->checkAccess('ADMINISTRADOR')),
				array('label'=>'Cursos', 'url'=>array('/curso/index'),'visible'=>Yii::app()->user->checkAccess('ADMINISTRADOR')),
				array('label'=>'Profesores', 'url'=>array('/profesor/index'),'visible'=>Yii::app()->user->checkAccess('ADMINISTRADOR')),
				array('label'=>'Asignar Profesor', 'url'=>array('/imparte/index'),'visible'=>Yii::app()->user->checkAccess('ADMINISTRADOR')),
				array('label'=>'Evaluar', 'url'=>array('/evaluar/index'),'visible'=>Yii::app()->user->checkAccess('PROFESOR')),
				array('label'=>'Evaluar', 'url'=>array('/evaluar/index'),'visible'=>Yii::app()->user->checkAccess('ADMINISTRADOR')),
				array('label'=>'Informe', 'url'=>array('/informe/index'),'visible'=>Yii::app()->user->checkAccess('PROFESOR')),
				array('label'=>'Informe', 'url'=>array('/informe/index'),'visible'=>Yii::app()->user->checkAccess('ADMINISTRADOR')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
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
		Copyright &copy; <?php echo date('Y'); ?> por Colegio niño Jesús, Lota.<br/>
		Todos los derechos reservados.<br/>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
