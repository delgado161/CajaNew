<?php
/* @var $this TipoPagoController */
/* @var $model ModelTipoPago */

$this->breadcrumbs=array(
	'Model Tipo Pagos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ModelTipoPago', 'url'=>array('index')),
	array('label'=>'Manage ModelTipoPago', 'url'=>array('admin')),
);
?>

<h1>Create ModelTipoPago</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>