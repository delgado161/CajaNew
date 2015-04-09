<?php
/* @var $this IntMensualidadController */
/* @var $model ModelIntMensualidad */

$this->breadcrumbs=array(
	'Model Int Mensualidads'=>array('index'),
	$model->id_int_mensualidad=>array('view','id'=>$model->id_int_mensualidad),
	'Update',
);

$this->menu=array(
	array('label'=>'List ModelIntMensualidad', 'url'=>array('index')),
	array('label'=>'Create ModelIntMensualidad', 'url'=>array('create')),
	array('label'=>'View ModelIntMensualidad', 'url'=>array('view', 'id'=>$model->id_int_mensualidad)),
	array('label'=>'Manage ModelIntMensualidad', 'url'=>array('admin')),
);
?>

<h1>Update ModelIntMensualidad <?php echo $model->id_int_mensualidad; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>