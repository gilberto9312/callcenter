<?php
/* @var $this ClienteController */
/* @var $data Cliente */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cliente')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_cliente), array('view', 'id'=>$data->id_cliente)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cedula_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->cedula_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->apellido_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono_celular_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->telefono_celular_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono_casa_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->telefono_casa_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono_oficina_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->telefono_oficina_cliente); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('tarjeta_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->tarjeta_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_caducidad_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_caducidad_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo_seguridad_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->codigo_seguridad_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_vencimiento_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_vencimiento_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('banco_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->banco_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asesor_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->asesor_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ciudad_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->ciudad_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direcion_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->direcion_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->status_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('obcervacion_asesor_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->obcervacion_asesor_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('autorizacion_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->autorizacion_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_autorizacion_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_autorizacion_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('recap_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->recap_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('voucher_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->voucher_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('centro_auto_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->centro_auto_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('monto_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->monto_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('courier_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->courier_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_envio_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_envio_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_entrega_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_entrega_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('carta_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->carta_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('copia_ci_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->copia_ci_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_pago_asesor_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_pago_asesor_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pago_banco_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->pago_banco_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('smart_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->smart_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pago_curier_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->pago_curier_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('obcervacion_encargado_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->obcervacion_encargado_cliente); ?>
	<br />

	*/ ?>

</div>