<?php
/* @var $this CajasController */
/* @var $data ModelCajas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cajas')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_cajas), array('view', 'id'=>$data->id_cajas)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('monto_inscripcion')); ?>:</b>
	<?php echo CHtml::encode($data->monto_inscripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('monto_mensualidad')); ?>:</b>
	<?php echo CHtml::encode($data->monto_mensualidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('int_socios')); ?>:</b>
	<?php echo CHtml::encode($data->int_socios); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('int_terceros')); ?>:</b>
	<?php echo CHtml::encode($data->int_terceros); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dia_pago')); ?>:</b>
	<?php echo CHtml::encode($data->dia_pago); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('dias_a_prestamo')); ?>:</b>
	<?php echo CHtml::encode($data->dias_a_prestamo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero_cuenta')); ?>:</b>
	<?php echo CHtml::encode($data->numero_cuenta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('int_mora_prestamo')); ?>:</b>
	<?php echo CHtml::encode($data->int_mora_prestamo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('int_mensualidad')); ?>:</b>
	<?php echo CHtml::encode($data->int_mensualidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bancos_id_bancos')); ?>:</b>
	<?php echo CHtml::encode($data->bancos_id_bancos); ?>
	<br />

	*/ ?>

</div>