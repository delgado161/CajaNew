<?php
/* @var $this IntPrestamoController */
/* @var $model ModelIntPrestamo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'model-int-prestamo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'monto'); ?>
		<?php echo $form->textField($model,'monto'); ?>
		<?php echo $form->error($model,'monto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'monto_cancelado'); ?>
		<?php echo $form->textField($model,'monto_cancelado'); ?>
		<?php echo $form->error($model,'monto_cancelado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prestamos_id_prestamos'); ?>
		<?php echo $form->textField($model,'prestamos_id_prestamos'); ?>
		<?php echo $form->error($model,'prestamos_id_prestamos'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->