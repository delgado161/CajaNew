<?php
/* @var $this UsuariosController */
/* @var $model ModelUsuarios */

$this->breadcrumbs=array(
	'Model Usuarioses'=>array('index'),
	$model->id_usuarios=>array('view','id'=>$model->id_usuarios),
	'Update',
);

$this->menu=array(
	array('label'=>'List ModelUsuarios', 'url'=>array('index')),
	array('label'=>'Create ModelUsuarios', 'url'=>array('create')),
	array('label'=>'View ModelUsuarios', 'url'=>array('view', 'id'=>$model->id_usuarios)),
	array('label'=>'Manage ModelUsuarios', 'url'=>array('admin')),
);
?>

<h1>Update ModelUsuarios <?php echo $model->id_usuarios; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>