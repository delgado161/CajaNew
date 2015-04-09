<?php
/* @var $this PrestamosController */
/* @var $model ModelPrestamos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'model-prestamos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_solicitud'); ?>
		<?php echo $form->textField($model,'fecha_solicitud'); ?>
		<?php echo $form->error($model,'fecha_solicitud'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_aprobacion'); ?>
		<?php echo $form->textField($model,'fecha_aprobacion'); ?>
		<?php echo $form->error($model,'fecha_aprobacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cantidad_solicitada'); ?>
		<?php echo $form->textField($model,'cantidad_solicitada'); ?>
		<?php echo $form->error($model,'cantidad_solicitada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cantidad_aprobada'); ?>
		<?php echo $form->textField($model,'cantidad_aprobada'); ?>
		<?php echo $form->error($model,'cantidad_aprobada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observacion'); ?>
		<?php echo $form->textField($model,'observacion',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'observacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'motivo'); ?>
		<?php echo $form->textField($model,'motivo',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'motivo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mes_pago'); ?>
		<?php echo $form->textField($model,'mes_pago',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'mes_pago'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_prestamo'); ?>
		<?php echo $form->textField($model,'tipo_prestamo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'tipo_prestamo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status_id_status'); ?>
		<?php echo $form->textField($model,'status_id_status'); ?>
		<?php echo $form->error($model,'status_id_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cajita_id_cajita'); ?>
		<?php echo $form->textField($model,'cajita_id_cajita'); ?>
		<?php echo $form->error($model,'cajita_id_cajita'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->