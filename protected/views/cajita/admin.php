<?php
/* @var $this CajitaController */
/* @var $model ModelCajita */

$this->breadcrumbs=array(
	'Model Cajitas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ModelCajita', 'url'=>array('index')),
	array('label'=>'Create ModelCajita', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#model-cajita-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Model Cajitas</h1>

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
	'id'=>'model-cajita-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_cajita',
		'cajas_id_cajas',
		'usuarios_id_usuarios',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
