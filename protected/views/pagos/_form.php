<?php
/* @var $this PagosController */
/* @var $model ModelPagos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'model-pagos-form',
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
		<?php echo $form->labelEx($model,'fecha_pago'); ?>
		<?php echo $form->textField($model,'fecha_pago'); ?>
		<?php echo $form->error($model,'fecha_pago'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'referencia'); ?>
		<?php echo $form->textField($model,'referencia',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'referencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_deposito'); ?>
		<?php echo $form->textField($model,'tipo_deposito',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'tipo_deposito'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bancos_id_bancos'); ?>
		<?php echo $form->textField($model,'bancos_id_bancos'); ?>
		<?php echo $form->error($model,'bancos_id_bancos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cajita_id_cajita'); ?>
		<?php echo $form->textField($model,'cajita_id_cajita'); ?>
		<?php echo $form->error($model,'cajita_id_cajita'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status_id_status'); ?>
		<?php echo $form->textField($model,'status_id_status'); ?>
		<?php echo $form->error($model,'status_id_status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->