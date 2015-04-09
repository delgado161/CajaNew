<?php
/* @var $this BancosController */
/* @var $model ModelBancos */

$this->breadcrumbs=array(
	'Model Bancoses'=>array('index'),
	$model->id_bancos,
);

$this->menu=array(
	array('label'=>'List ModelBancos', 'url'=>array('index')),
	array('label'=>'Create ModelBancos', 'url'=>array('create')),
	array('label'=>'Update ModelBancos', 'url'=>array('update', 'id'=>$model->id_bancos)),
	array('label'=>'Delete ModelBancos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_bancos),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ModelBancos', 'url'=>array('admin')),
);
?>

<h1>View ModelBancos #<?php echo $model->id_bancos; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_bancos',
		'nombre_banco',
	),
)); ?>
