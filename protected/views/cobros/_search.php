<?php
/* @var $this CobrosController */
/* @var $model ModelCobros */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_cobros'); ?>
		<?php echo $form->textField($model,'id_cobros'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'monto'); ?>
		<?php echo $form->textField($model,'monto',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'transacciones_id_transacciones'); ?>
		<?php echo $form->textField($model,'transacciones_id_transacciones'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prestamos_id_prestamos'); ?>
		<?php echo $form->textField($model,'prestamos_id_prestamos'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->