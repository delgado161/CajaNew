<?php
/* @var $this TransaccionesController */
/* @var $data ModelTransacciones */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_transacciones')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_transacciones), array('view', 'id'=>$data->id_transacciones)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('monto')); ?>:</b>
	<?php echo CHtml::encode($data->monto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pagos_id_pagos')); ?>:</b>
	<?php echo CHtml::encode($data->pagos_id_pagos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_id_status')); ?>:</b>
	<?php echo CHtml::encode($data->status_id_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuarios_id_usuarios')); ?>:</b>
	<?php echo CHtml::encode($data->usuarios_id_usuarios); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_pago_id_tipo_pago')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_pago_id_tipo_pago); ?>
	<br />


</div>