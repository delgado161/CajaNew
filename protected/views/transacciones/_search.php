<?php
/* @var $this TransaccionesController */
/* @var $model ModelTransacciones */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_transacciones'); ?>
		<?php echo $form->textField($model,'id_transacciones'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'monto'); ?>
		<?php echo $form->textField($model,'monto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pagos_id_pagos'); ?>
		<?php echo $form->textField($model,'pagos_id_pagos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status_id_status'); ?>
		<?php echo $form->textField($model,'status_id_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usuarios_id_usuarios'); ?>
		<?php echo $form->textField($model,'usuarios_id_usuarios'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_pago_id_tipo_pago'); ?>
		<?php echo $form->textField($model,'tipo_pago_id_tipo_pago'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->