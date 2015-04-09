<?php
/* @var $this PrestamosController */
/* @var $model ModelPrestamos */

$this->breadcrumbs=array(
	'Model Prestamoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ModelPrestamos', 'url'=>array('index')),
	array('label'=>'Manage ModelPrestamos', 'url'=>array('admin')),
);
?>

<h1>Create ModelPrestamos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>