<?php
/* @var $this CobrosController */
/* @var $model ModelCobros */

$this->breadcrumbs=array(
	'Model Cobroses'=>array('index'),
	$model->id_cobros=>array('view','id'=>$model->id_cobros),
	'Update',
);

$this->menu=array(
	array('label'=>'List ModelCobros', 'url'=>array('index')),
	array('label'=>'Create ModelCobros', 'url'=>array('create')),
	array('label'=>'View ModelCobros', 'url'=>array('view', 'id'=>$model->id_cobros)),
	array('label'=>'Manage ModelCobros', 'url'=>array('admin')),
);
?>

<h1>Update ModelCobros <?php echo $model->id_cobros; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>