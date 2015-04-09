<?php
/* @var $this StatusController */
/* @var $model ModelStatus */

$this->breadcrumbs=array(
	'Model Statuses'=>array('index'),
	$model->id_status=>array('view','id'=>$model->id_status),
	'Update',
);

$this->menu=array(
	array('label'=>'List ModelStatus', 'url'=>array('index')),
	array('label'=>'Create ModelStatus', 'url'=>array('create')),
	array('label'=>'View ModelStatus', 'url'=>array('view', 'id'=>$model->id_status)),
	array('label'=>'Manage ModelStatus', 'url'=>array('admin')),
);
?>

<h1>Update ModelStatus <?php echo $model->id_status; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>