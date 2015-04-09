<?php
/* @var $this CajitaController */
/* @var $data ModelCajita */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cajita')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_cajita), array('view', 'id'=>$data->id_cajita)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cajas_id_cajas')); ?>:</b>
	<?php echo CHtml::encode($data->cajas_id_cajas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuarios_id_usuarios')); ?>:</b>
	<?php echo CHtml::encode($data->usuarios_id_usuarios); ?>
	<br />


</div>