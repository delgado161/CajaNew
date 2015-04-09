<?php
/* @var $this PrestamosController */
/* @var $data ModelPrestamos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_prestamos')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_prestamos), array('view', 'id'=>$data->id_prestamos)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_solicitud')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_solicitud); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_aprobacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_aprobacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidad_solicitada')); ?>:</b>
	<?php echo CHtml::encode($data->cantidad_solicitada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidad_aprobada')); ?>:</b>
	<?php echo CHtml::encode($data->cantidad_aprobada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observacion')); ?>:</b>
	<?php echo CHtml::encode($data->observacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('motivo')); ?>:</b>
	<?php echo CHtml::encode($data->motivo); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('mes_pago')); ?>:</b>
	<?php echo CHtml::encode($data->mes_pago); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_prestamo')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_prestamo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_id_status')); ?>:</b>
	<?php echo CHtml::encode($data->status_id_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cajita_id_cajita')); ?>:</b>
	<?php echo CHtml::encode($data->cajita_id_cajita); ?>
	<br />

	*/ ?>

</div>