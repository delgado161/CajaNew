<?php
/* @var $this BancosController */
/* @var $model ModelBancos */

$this->breadcrumbs=array(
	'Model Bancoses'=>array('index'),
	$model->id_bancos=>array('view','id'=>$model->id_bancos),
	'Update',
);

$this->menu=array(
	array('label'=>'List ModelBancos', 'url'=>array('index')),
	array('label'=>'Create ModelBancos', 'url'=>array('create')),
	array('label'=>'View ModelBancos', 'url'=>array('view', 'id'=>$model->id_bancos)),
	array('label'=>'Manage ModelBancos', 'url'=>array('admin')),
);
?>

<h1>Update ModelBancos <?php echo $model->id_bancos; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>