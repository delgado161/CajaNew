<?php
/* @var $this TipoPagoController */
/* @var $model ModelTipoPago */

$this->breadcrumbs=array(
	'Model Tipo Pagos'=>array('index'),
	$model->id_tipo_pago=>array('view','id'=>$model->id_tipo_pago),
	'Update',
);

$this->menu=array(
	array('label'=>'List ModelTipoPago', 'url'=>array('index')),
	array('label'=>'Create ModelTipoPago', 'url'=>array('create')),
	array('label'=>'View ModelTipoPago', 'url'=>array('view', 'id'=>$model->id_tipo_pago)),
	array('label'=>'Manage ModelTipoPago', 'url'=>array('admin')),
);
?>

<h1>Update ModelTipoPago <?php echo $model->id_tipo_pago; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>