<?php
/* @var $this IntMensualidadController */
/* @var $data ModelIntMensualidad */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_int_mensualidad')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_int_mensualidad), array('view', 'id'=>$data->id_int_mensualidad)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('monto')); ?>:</b>
	<?php echo CHtml::encode($data->monto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('monto_cancelado')); ?>:</b>
	<?php echo CHtml::encode($data->monto_cancelado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cajita_id_cajita')); ?>:</b>
	<?php echo CHtml::encode($data->cajita_id_cajita); ?>
	<br />


</div>