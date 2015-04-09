<?php
/* @var $this CajasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Model Cajases',
);

$this->menu=array(
	array('label'=>'Create ModelCajas', 'url'=>array('create')),
	array('label'=>'Manage ModelCajas', 'url'=>array('admin')),
);
?>

<h1>Model Cajases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
