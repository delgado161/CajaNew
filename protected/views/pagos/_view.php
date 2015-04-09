<?php
/* @var $this PagosController */
/* @var $data ModelPagos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pagos')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_pagos), array('view', 'id'=>$data->id_pagos)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('monto')); ?>:</b>
	<?php echo CHtml::encode($data->monto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_pago')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_pago); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('referencia')); ?>:</b>
	<?php echo CHtml::encode($data->referencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_deposito')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_deposito); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bancos_id_bancos')); ?>:</b>
	<?php echo CHtml::encode($data->bancos_id_bancos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cajita_id_cajita')); ?>:</b>
	<?php echo CHtml::encode($data->cajita_id_cajita); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('status_id_status')); ?>:</b>
	<?php echo CHtml::encode($data->status_id_status); ?>
	<br />

	*/ ?>

</div>