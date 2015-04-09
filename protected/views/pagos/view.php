<?php
/* @var $this PagosController */
/* @var $model ModelPagos */

$this->breadcrumbs=array(
	'Model Pagoses'=>array('index'),
	$model->id_pagos,
);

$this->menu=array(
	array('label'=>'List ModelPagos', 'url'=>array('index')),
	array('label'=>'Create ModelPagos', 'url'=>array('create')),
	array('label'=>'Update ModelPagos', 'url'=>array('update', 'id'=>$model->id_pagos)),
	array('label'=>'Delete ModelPagos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pagos),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ModelPagos', 'url'=>array('admin')),
);
?>

<h1>View ModelPagos #<?php echo $model->id_pagos; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_pagos',
		'monto',
		'fecha_pago',
		'referencia',
		'tipo_deposito',
		'bancos_id_bancos',
		'cajita_id_cajita',
		'status_id_status',
	),
)); ?>
