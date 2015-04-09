<?php
/* @var $this IntPrestamoController */
/* @var $model ModelIntPrestamo */

$this->breadcrumbs=array(
	'Model Int Prestamos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ModelIntPrestamo', 'url'=>array('index')),
	array('label'=>'Manage ModelIntPrestamo', 'url'=>array('admin')),
);
?>

<h1>Create ModelIntPrestamo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>