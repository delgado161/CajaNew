<?php
/* @var $this CobrosController */
/* @var $model ModelCobros */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'model-cobros-form',
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
		<?php echo $form->textField($model,'monto',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'monto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'transacciones_id_transacciones'); ?>
		<?php echo $form->textField($model,'transacciones_id_transacciones'); ?>
		<?php echo $form->error($model,'transacciones_id_transacciones'); ?>
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