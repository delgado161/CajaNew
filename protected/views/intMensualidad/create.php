<?php
/* @var $this IntMensualidadController */
/* @var $model ModelIntMensualidad */

$this->breadcrumbs=array(
	'Model Int Mensualidads'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ModelIntMensualidad', 'url'=>array('index')),
	array('label'=>'Manage ModelIntMensualidad', 'url'=>array('admin')),
);
?>

<h1>Create ModelIntMensualidad</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>