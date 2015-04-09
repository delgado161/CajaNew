<?php
/* @var $this PrestamosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Model Prestamoses',
);

$this->menu=array(
	array('label'=>'Create ModelPrestamos', 'url'=>array('create')),
	array('label'=>'Manage ModelPrestamos', 'url'=>array('admin')),
);
?>

<h1>Model Prestamoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
