<?php
/* @var $this TransaccionesController */
/* @var $model ModelTransacciones */

$this->breadcrumbs=array(
	'Model Transacciones'=>array('index'),
	$model->id_transacciones=>array('view','id'=>$model->id_transacciones),
	'Update',
);

$this->menu=array(
	array('label'=>'List ModelTransacciones', 'url'=>array('index')),
	array('label'=>'Create ModelTransacciones', 'url'=>array('create')),
	array('label'=>'View ModelTransacciones', 'url'=>array('view', 'id'=>$model->id_transacciones)),
	array('label'=>'Manage ModelTransacciones', 'url'=>array('admin')),
);
?>

<h1>Update ModelTransacciones <?php echo $model->id_transacciones; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>