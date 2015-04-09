<?php
/* @var $this PrestamosController */
/* @var $model ModelPrestamos */

$this->breadcrumbs=array(
	'Model Prestamoses'=>array('index'),
	$model->id_prestamos=>array('view','id'=>$model->id_prestamos),
	'Update',
);

$this->menu=array(
	array('label'=>'List ModelPrestamos', 'url'=>array('index')),
	array('label'=>'Create ModelPrestamos', 'url'=>array('create')),
	array('label'=>'View ModelPrestamos', 'url'=>array('view', 'id'=>$model->id_prestamos)),
	array('label'=>'Manage ModelPrestamos', 'url'=>array('admin')),
);
?>

<h1>Update ModelPrestamos <?php echo $model->id_prestamos; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>