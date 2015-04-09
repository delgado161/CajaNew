<?php
/* @var $this CajasController */
/* @var $model ModelCajas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'model-cajas-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'monto_inscripcion'); ?>
		<?php echo $form->textField($model,'monto_inscripcion'); ?>
		<?php echo $form->error($model,'monto_inscripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'monto_mensualidad'); ?>
		<?php echo $form->textField($model,'monto_mensualidad'); ?>
		<?php echo $form->error($model,'monto_mensualidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'int_socios'); ?>
		<?php echo $form->textField($model,'int_socios'); ?>
		<?php echo $form->error($model,'int_socios'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'int_terceros'); ?>
		<?php echo $form->textField($model,'int_terceros'); ?>
		<?php echo $form->error($model,'int_terceros'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dia_pago'); ?>
		<?php echo $form->textField($model,'dia_pago'); ?>
		<?php echo $form->error($model,'dia_pago'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dias_a_prestamo'); ?>
		<?php echo $form->textField($model,'dias_a_prestamo'); ?>
		<?php echo $form->error($model,'dias_a_prestamo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numero_cuenta'); ?>
		<?php echo $form->textField($model,'numero_cuenta',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'numero_cuenta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'int_mora_prestamo'); ?>
		<?php echo $form->textField($model,'int_mora_prestamo'); ?>
		<?php echo $form->error($model,'int_mora_prestamo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'int_mensualidad'); ?>
		<?php echo $form->textField($model,'int_mensualidad'); ?>
		<?php echo $form->error($model,'int_mensualidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bancos_id_bancos'); ?>
		<?php echo $form->textField($model,'bancos_id_bancos'); ?>
		<?php echo $form->error($model,'bancos_id_bancos'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->