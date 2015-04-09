<?php
/* @var $this CajasController */
/* @var $model ModelCajas */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_cajas'); ?>
		<?php echo $form->textField($model,'id_cajas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'monto_inscripcion'); ?>
		<?php echo $form->textField($model,'monto_inscripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'monto_mensualidad'); ?>
		<?php echo $form->textField($model,'monto_mensualidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'int_socios'); ?>
		<?php echo $form->textField($model,'int_socios'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'int_terceros'); ?>
		<?php echo $form->textField($model,'int_terceros'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dia_pago'); ?>
		<?php echo $form->textField($model,'dia_pago'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dias_a_prestamo'); ?>
		<?php echo $form->textField($model,'dias_a_prestamo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numero_cuenta'); ?>
		<?php echo $form->textField($model,'numero_cuenta',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'int_mora_prestamo'); ?>
		<?php echo $form->textField($model,'int_mora_prestamo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'int_mensualidad'); ?>
		<?php echo $form->textField($model,'int_mensualidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bancos_id_bancos'); ?>
		<?php echo $form->textField($model,'bancos_id_bancos'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->