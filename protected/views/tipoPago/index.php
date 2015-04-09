<?php
/* @var $this TipoPagoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Model Tipo Pagos',
);

$this->menu=array(
	array('label'=>'Create ModelTipoPago', 'url'=>array('create')),
	array('label'=>'Manage ModelTipoPago', 'url'=>array('admin')),
);
?>

<h1>Model Tipo Pagos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
