<?php
/* @var $this PagosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Model Pagoses',
);

$this->menu=array(
	array('label'=>'Create ModelPagos', 'url'=>array('create')),
	array('label'=>'Manage ModelPagos', 'url'=>array('admin')),
);
?>

<h1>Model Pagoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
