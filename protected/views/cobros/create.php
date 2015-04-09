<?php
/* @var $this CobrosController */
/* @var $model ModelCobros */

$this->breadcrumbs=array(
	'Model Cobroses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ModelCobros', 'url'=>array('index')),
	array('label'=>'Manage ModelCobros', 'url'=>array('admin')),
);
?>

<h1>Create ModelCobros</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>