<?php
/* @var $this UsuariosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Model Usuarioses',
);

$this->menu=array(
	array('label'=>'Create ModelUsuarios', 'url'=>array('create')),
	array('label'=>'Manage ModelUsuarios', 'url'=>array('admin')),
);
?>

<h1>Model Usuarioses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
