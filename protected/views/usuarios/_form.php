<?php
/* @var $this UsuariosController */
/* @var $model ModelUsuarios */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'model-usuarios-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ci'); ?>
		<?php echo $form->textField($model,'ci',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'ci'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_doc'); ?>
		<?php echo $form->textField($model,'tipo_doc',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'tipo_doc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p_nombre'); ?>
		<?php echo $form->textField($model,'p_nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'p_nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'s_nombre'); ?>
		<?php echo $form->textField($model,'s_nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'s_nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'p_apellido'); ?>
		<?php echo $form->textField($model,'p_apellido',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'p_apellido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'s_apellido'); ?>
		<?php echo $form->textField($model,'s_apellido',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'s_apellido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'genero'); ?>
		<?php echo $form->textField($model,'genero',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'genero'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_nacimiento'); ?>
		<?php echo $form->textField($model,'fecha_nacimiento'); ?>
		<?php echo $form->error($model,'fecha_nacimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'login'); ?>
		<?php echo $form->textField($model,'login',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'login'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pasword'); ?>
		<?php echo $form->textField($model,'pasword',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'pasword'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'n_cuenta'); ?>
		<?php echo $form->textField($model,'n_cuenta',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'n_cuenta'); ?>
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