<?php
/* @var $this TransaccionesController */
/* @var $model ModelTransacciones */

$this->breadcrumbs=array(
	'Model Transacciones'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ModelTransacciones', 'url'=>array('index')),
	array('label'=>'Manage ModelTransacciones', 'url'=>array('admin')),
);
?>

<h1>Create ModelTransacciones</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>