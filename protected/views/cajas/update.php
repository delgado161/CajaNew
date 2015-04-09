<?php
/* @var $this CajasController */
/* @var $model ModelCajas */

$this->breadcrumbs=array(
	'Model Cajases'=>array('index'),
	$model->id_cajas=>array('view','id'=>$model->id_cajas),
	'Update',
);

$this->menu=array(
	array('label'=>'List ModelCajas', 'url'=>array('index')),
	array('label'=>'Create ModelCajas', 'url'=>array('create')),
	array('label'=>'View ModelCajas', 'url'=>array('view', 'id'=>$model->id_cajas)),
	array('label'=>'Manage ModelCajas', 'url'=>array('admin')),
);
?>

<h1>Update ModelCajas <?php echo $model->id_cajas; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>