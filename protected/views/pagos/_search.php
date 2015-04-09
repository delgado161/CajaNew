<?php
/* @var $this PagosController */
/* @var $model ModelPagos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_pagos'); ?>
		<?php echo $form->textField($model,'id_pagos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'monto'); ?>
		<?php echo $form->textField($model,'monto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_pago'); ?>
		<?php echo $form->textField($model,'fecha_pago'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'referencia'); ?>
		<?php echo $form->textField($model,'referencia',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_deposito'); ?>
		<?php echo $form->textField($model,'tipo_deposito',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bancos_id_bancos'); ?>
		<?php echo $form->textField($model,'bancos_id_bancos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cajita_id_cajita'); ?>
		<?php echo $form->textField($model,'cajita_id_cajita'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status_id_status'); ?>
		<?php echo $form->textField($model,'status_id_status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->