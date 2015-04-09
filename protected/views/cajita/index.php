<?php
/* @var $this CajitaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Model Cajitas',
);

$this->menu=array(
	array('label'=>'Create ModelCajita', 'url'=>array('create')),
	array('label'=>'Manage ModelCajita', 'url'=>array('admin')),
);
?>

<h1>Model Cajitas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
