<?php
/* @var $this IntMensualidadController */
/* @var $model ModelIntMensualidad */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_int_mensualidad'); ?>
		<?php echo $form->textField($model,'id_int_mensualidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'monto'); ?>
		<?php echo $form->textField($model,'monto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'monto_cancelado'); ?>
		<?php echo $form->textField($model,'monto_cancelado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cajita_id_cajita'); ?>
		<?php echo $form->textField($model,'cajita_id_cajita'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->