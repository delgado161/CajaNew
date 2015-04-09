<?php
/* @var $this CajitaController */
/* @var $model ModelCajita */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_cajita'); ?>
		<?php echo $form->textField($model,'id_cajita'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cajas_id_cajas'); ?>
		<?php echo $form->textField($model,'cajas_id_cajas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usuarios_id_usuarios'); ?>
		<?php echo $form->textField($model,'usuarios_id_usuarios'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->