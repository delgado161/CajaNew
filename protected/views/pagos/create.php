<?php
/* @var $this PagosController */
/* @var $model ModelPagos */

$this->breadcrumbs=array(
	'Model Pagoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ModelPagos', 'url'=>array('index')),
	array('label'=>'Manage ModelPagos', 'url'=>array('admin')),
);
?>

<h1>Create ModelPagos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>