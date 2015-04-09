<?php
/* @var $this BancosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Model Bancoses',
);

$this->menu=array(
	array('label'=>'Create ModelBancos', 'url'=>array('create')),
	array('label'=>'Manage ModelBancos', 'url'=>array('admin')),
);
?>

<h1>Model Bancoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
