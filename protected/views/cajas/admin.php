<?php
/* @var $this CajasController */
/* @var $model ModelCajas */

$this->breadcrumbs=array(
	'Model Cajases'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ModelCajas', 'url'=>array('index')),
	array('label'=>'Create ModelCajas', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#model-cajas-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Model Cajases</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'model-cajas-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_cajas',
		'nombre',
		'monto_inscripcion',
		'monto_mensualidad',
		'int_socios',
		'int_terceros',
		/*
		'dia_pago',
		'dias_a_prestamo',
		'numero_cuenta',
		'int_mora_prestamo',
		'int_mensualidad',
		'bancos_id_bancos',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
