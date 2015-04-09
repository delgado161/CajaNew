<?php
/* @var $this CobrosController */
/* @var $data ModelCobros */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cobros')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_cobros), array('view', 'id'=>$data->id_cobros)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('monto')); ?>:</b>
	<?php echo CHtml::encode($data->monto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('transacciones_id_transacciones')); ?>:</b>
	<?php echo CHtml::encode($data->transacciones_id_transacciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prestamos_id_prestamos')); ?>:</b>
	<?php echo CHtml::encode($data->prestamos_id_prestamos); ?>
	<br />


</div>