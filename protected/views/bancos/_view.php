<?php
/* @var $this BancosController */
/* @var $data ModelBancos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_bancos')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_bancos), array('view', 'id'=>$data->id_bancos)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_banco')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_banco); ?>
	<br />


</div>