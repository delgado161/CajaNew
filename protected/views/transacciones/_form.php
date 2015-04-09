<?php
/* @var $this TransaccionesController */
/* @var $model ModelTransacciones */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'model-transacciones-form',
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
		<?php echo $form->labelEx($model,'pagos_id_pagos'); ?>
		<?php echo $form->textField($model,'pagos_id_pagos'); ?>
		<?php echo $form->error($model,'pagos_id_pagos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status_id_status'); ?>
		<?php echo $form->textField($model,'status_id_status'); ?>
		<?php echo $form->error($model,'status_id_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuarios_id_usuarios'); ?>
		<?php echo $form->textField($model,'usuarios_id_usuarios'); ?>
		<?php echo $form->error($model,'usuarios_id_usuarios'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_pago_id_tipo_pago'); ?>
		<?php echo $form->textField($model,'tipo_pago_id_tipo_pago'); ?>
		<?php echo $form->error($model,'tipo_pago_id_tipo_pago'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->