<?php
/* @var $this CobrosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Model Cobroses',
);

$this->menu=array(
	array('label'=>'Create ModelCobros', 'url'=>array('create')),
	array('label'=>'Manage ModelCobros', 'url'=>array('admin')),
);
?>

<h1>Model Cobroses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
