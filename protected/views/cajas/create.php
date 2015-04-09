<?php
/* @var $this CajasController */
/* @var $model ModelCajas */

$this->breadcrumbs=array(
	'Model Cajases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ModelCajas', 'url'=>array('index')),
	array('label'=>'Manage ModelCajas', 'url'=>array('admin')),
);
?>

<h1>Create ModelCajas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>