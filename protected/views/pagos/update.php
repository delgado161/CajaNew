<?php
/* @var $this PagosController */
/* @var $model ModelPagos */

$this->breadcrumbs=array(
	'Model Pagoses'=>array('index'),
	$model->id_pagos=>array('view','id'=>$model->id_pagos),
	'Update',
);

$this->menu=array(
	array('label'=>'List ModelPagos', 'url'=>array('index')),
	array('label'=>'Create ModelPagos', 'url'=>array('create')),
	array('label'=>'View ModelPagos', 'url'=>array('view', 'id'=>$model->id_pagos)),
	array('label'=>'Manage ModelPagos', 'url'=>array('admin')),
);
?>

<h1>Update ModelPagos <?php echo $model->id_pagos; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>