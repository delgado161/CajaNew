<?php
/* @var $this CajitaController */
/* @var $model ModelCajita */

$this->breadcrumbs=array(
	'Model Cajitas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ModelCajita', 'url'=>array('index')),
	array('label'=>'Manage ModelCajita', 'url'=>array('admin')),
);
?>

<h1>Create ModelCajita</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>