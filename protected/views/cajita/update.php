<?php
/* @var $this CajitaController */
/* @var $model ModelCajita */

$this->breadcrumbs=array(
	'Model Cajitas'=>array('index'),
	$model->id_cajita=>array('view','id'=>$model->id_cajita),
	'Update',
);

$this->menu=array(
	array('label'=>'List ModelCajita', 'url'=>array('index')),
	array('label'=>'Create ModelCajita', 'url'=>array('create')),
	array('label'=>'View ModelCajita', 'url'=>array('view', 'id'=>$model->id_cajita)),
	array('label'=>'Manage ModelCajita', 'url'=>array('admin')),
);
?>

<h1>Update ModelCajita <?php echo $model->id_cajita; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>