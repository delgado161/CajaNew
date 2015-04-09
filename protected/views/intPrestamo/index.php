<?php
/* @var $this IntPrestamoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Model Int Prestamos',
);

$this->menu=array(
	array('label'=>'Create ModelIntPrestamo', 'url'=>array('create')),
	array('label'=>'Manage ModelIntPrestamo', 'url'=>array('admin')),
);
?>

<h1>Model Int Prestamos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
