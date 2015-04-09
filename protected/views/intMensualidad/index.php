<?php
/* @var $this IntMensualidadController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Model Int Mensualidads',
);

$this->menu=array(
	array('label'=>'Create ModelIntMensualidad', 'url'=>array('create')),
	array('label'=>'Manage ModelIntMensualidad', 'url'=>array('admin')),
);
?>

<h1>Model Int Mensualidads</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
