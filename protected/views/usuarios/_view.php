<?php
/* @var $this UsuariosController */
/* @var $data ModelUsuarios */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_usuarios')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_usuarios), array('view', 'id'=>$data->id_usuarios)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ci')); ?>:</b>
	<?php echo CHtml::encode($data->ci); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_doc')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_doc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->p_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('s_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->s_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_apellido')); ?>:</b>
	<?php echo CHtml::encode($data->p_apellido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('s_apellido')); ?>:</b>
	<?php echo CHtml::encode($data->s_apellido); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('genero')); ?>:</b>
	<?php echo CHtml::encode($data->genero); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_nacimiento')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_nacimiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('login')); ?>:</b>
	<?php echo CHtml::encode($data->login); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pasword')); ?>:</b>
	<?php echo CHtml::encode($data->pasword); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('n_cuenta')); ?>:</b>
	<?php echo CHtml::encode($data->n_cuenta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bancos_id_bancos')); ?>:</b>
	<?php echo CHtml::encode($data->bancos_id_bancos); ?>
	<br />

	*/ ?>

</div>