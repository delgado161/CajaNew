<?php
/* @var $this CajitaController */
/* @var $model ModelCajita */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'model-cajita-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cajas_id_cajas'); ?>
		<?php echo $form->textField($model,'cajas_id_cajas'); ?>
		<?php echo $form->error($model,'cajas_id_cajas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuarios_id_usuarios'); ?>
		<?php echo $form->textField($model,'usuarios_id_usuarios'); ?>
		<?php echo $form->error($model,'usuarios_id_usuarios'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->