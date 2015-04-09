<?php
/* @var $this UsuariosController */
/* @var $model ModelUsuarios */

$this->breadcrumbs=array(
	'Model Usuarioses'=>array('index'),
	$model->id_usuarios,
);

$this->menu=array(
	array('label'=>'List ModelUsuarios', 'url'=>array('index')),
	array('label'=>'Create ModelUsuarios', 'url'=>array('create')),
	array('label'=>'Update ModelUsuarios', 'url'=>array('update', 'id'=>$model->id_usuarios)),
	array('label'=>'Delete ModelUsuarios', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_usuarios),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ModelUsuarios', 'url'=>array('admin')),
);
?>

<h1>View ModelUsuarios #<?php echo $model->id_usuarios; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_usuarios',
		'ci',
		'tipo_doc',
		'p_nombre',
		's_nombre',
		'p_apellido',
		's_apellido',
		'genero',
		'fecha_nacimiento',
		'login',
		'pasword',
		'n_cuenta',
		'bancos_id_bancos',
	),
)); ?>
