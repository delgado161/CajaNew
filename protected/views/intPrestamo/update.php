<?php
/* @var $this IntPrestamoController */
/* @var $model ModelIntPrestamo */

$this->breadcrumbs=array(
	'Model Int Prestamos'=>array('index'),
	$model->id_int_prestamo=>array('view','id'=>$model->id_int_prestamo),
	'Update',
);

$this->menu=array(
	array('label'=>'List ModelIntPrestamo', 'url'=>array('index')),
	array('label'=>'Create ModelIntPrestamo', 'url'=>array('create')),
	array('label'=>'View ModelIntPrestamo', 'url'=>array('view', 'id'=>$model->id_int_prestamo)),
	array('label'=>'Manage ModelIntPrestamo', 'url'=>array('admin')),
);
?>

<h1>Update ModelIntPrestamo <?php echo $model->id_int_prestamo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>