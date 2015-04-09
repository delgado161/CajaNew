<?php
/* @var $this IntPrestamoController */
/* @var $data ModelIntPrestamo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_int_prestamo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_int_prestamo), array('view', 'id'=>$data->id_int_prestamo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('monto')); ?>:</b>
	<?php echo CHtml::encode($data->monto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('monto_cancelado')); ?>:</b>
	<?php echo CHtml::encode($data->monto_cancelado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prestamos_id_prestamos')); ?>:</b>
	<?php echo CHtml::encode($data->prestamos_id_prestamos); ?>
	<br />


</div>