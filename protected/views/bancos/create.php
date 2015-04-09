<?php
/* @var $this BancosController */
/* @var $model ModelBancos */

$this->breadcrumbs=array(
	'Model Bancoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ModelBancos', 'url'=>array('index')),
	array('label'=>'Manage ModelBancos', 'url'=>array('admin')),
);
?>

<h1>Create ModelBancos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>