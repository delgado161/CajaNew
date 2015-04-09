<?php
/* @var $this StatusController */
/* @var $model ModelStatus */

$this->breadcrumbs=array(
	'Model Statuses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ModelStatus', 'url'=>array('index')),
	array('label'=>'Manage ModelStatus', 'url'=>array('admin')),
);
?>

<h1>Create ModelStatus</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>