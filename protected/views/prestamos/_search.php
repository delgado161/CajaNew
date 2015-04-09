<?php
/* @var $this PrestamosController */
/* @var $model ModelPrestamos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_prestamos'); ?>
		<?php echo $form->textField($model,'id_prestamos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_solicitud'); ?>
		<?php echo $form->textField($model,'fecha_solicitud'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_aprobacion'); ?>
		<?php echo $form->textField($model,'fecha_aprobacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cantidad_solicitada'); ?>
		<?php echo $form->textField($model,'cantidad_solicitada'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cantidad_aprobada'); ?>
		<?php echo $form->textField($model,'cantidad_aprobada'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'observacion'); ?>
		<?php echo $form->textField($model,'observacion',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'motivo'); ?>
		<?php echo $form->textField($model,'motivo',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mes_pago'); ?>
		<?php echo $form->textField($model,'mes_pago',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_prestamo'); ?>
		<?php echo $form->textField($model,'tipo_prestamo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status_id_status'); ?>
		<?php echo $form->textField($model,'status_id_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cajita_id_cajita'); ?>
		<?php echo $form->textField($model,'cajita_id_cajita'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->