<?php
/* @var $this StatusController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Model Statuses',
);

$this->menu=array(
	array('label'=>'Create ModelStatus', 'url'=>array('create')),
	array('label'=>'Manage ModelStatus', 'url'=>array('admin')),
);
?>

<h1>Model Statuses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
