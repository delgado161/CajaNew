<?php
/* @var $this IntPrestamoController */
/* @var $model ModelIntPrestamo */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_int_prestamo'); ?>
		<?php echo $form->textField($model,'id_int_prestamo'); ?>
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
		<?php echo $form->label($model,'prestamos_id_prestamos'); ?>
		<?php echo $form->textField($model,'prestamos_id_prestamos'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->