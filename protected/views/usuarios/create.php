<?php
/* @var $this UsuariosController */
/* @var $model ModelUsuarios */

$this->breadcrumbs=array(
	'Model Usuarioses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ModelUsuarios', 'url'=>array('index')),
	array('label'=>'Manage ModelUsuarios', 'url'=>array('admin')),
);
?>

<h1>Create ModelUsuarios</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>