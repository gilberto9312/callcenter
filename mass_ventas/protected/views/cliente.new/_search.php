<?php
/* @var $this ClienteController */
/* @var $model Cliente */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_cliente'); ?>
		<?php echo $form->textField($model,'id_cliente',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cedula_cliente'); ?>
		<?php echo $form->textField($model,'cedula_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_cliente'); ?>
		<?php echo $form->textField($model,'nombre_cliente',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apellido_cliente'); ?>
		<?php echo $form->textField($model,'apellido_cliente',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono_celular_cliente'); ?>
		<?php echo $form->textField($model,'telefono_celular_cliente',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono_casa_cliente'); ?>
		<?php echo $form->textField($model,'telefono_casa_cliente',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono_oficina_cliente'); ?>
		<?php echo $form->textField($model,'telefono_oficina_cliente',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'correo_cliente'); ?>
		<?php echo $form->textField($model,'correo_cliente',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tarjeta_cliente'); ?>
		<?php echo $form->textField($model,'tarjeta_cliente',array('size'=>19,'maxlength'=>19)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_caducidad_tc_cliente'); ?>
		<?php echo $form->textField($model,'fecha_caducidad_tc_cliente',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'codigo_seguridad_cliente'); ?>
		<?php echo $form->textField($model,'codigo_seguridad_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_venta_cliente'); ?>
		<?php echo $form->textField($model,'fecha_venta_cliente',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asesor_cliente'); ?>
		<?php echo $form->textField($model,'asesor_cliente',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ciudad_cliente'); ?>
		<?php echo $form->textField($model,'ciudad_cliente',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'provincia_cliente'); ?>
		<?php echo $form->textField($model,'provincia_cliente',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direcion_cliente'); ?>
		<?php echo $form->textField($model,'direcion_cliente',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'banco_cliente'); ?>
		<?php echo $form->textField($model,'banco_cliente',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'franquicia_cliente'); ?>
		<?php echo $form->textField($model,'franquicia_cliente',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status_cliente'); ?>
		<?php echo $form->textField($model,'status_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'super_realiza_pos'); ?>
		<?php echo $form->textField($model,'super_realiza_pos',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'autorizacion_cliente'); ?>
		<?php echo $form->textField($model,'autorizacion_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'trans_cliente'); ?>
		<?php echo $form->textField($model,'trans_cliente',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'plazo_cliente'); ?>
		<?php echo $form->textField($model,'plazo_cliente',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_autorizacion_cliente'); ?>
		<?php echo $form->textField($model,'fecha_autorizacion_cliente',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'recap_cliente'); ?>
		<?php echo $form->textField($model,'recap_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'voucher_cliente'); ?>
		<?php echo $form->textField($model,'voucher_cliente',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'centro_auto_cliente'); ?>
		<?php echo $form->textField($model,'centro_auto_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'monto_cliente'); ?>
		<?php echo $form->textField($model,'monto_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'courier_cliente'); ?>
		<?php echo $form->textField($model,'courier_cliente',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_envio_cliente'); ?>
		<?php echo $form->textField($model,'fecha_envio_cliente',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_entrega_cliente'); ?>
		<?php echo $form->textField($model,'fecha_entrega_cliente',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'carta_cliente'); ?>
		<?php echo $form->textField($model,'carta_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'copia_ci_cliente'); ?>
		<?php echo $form->textField($model,'copia_ci_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_pago_asesor_cliente'); ?>
		<?php echo $form->textField($model,'fecha_pago_asesor_cliente',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pago_banco_cliente'); ?>
		<?php echo $form->textField($model,'pago_banco_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'obsequio_cliente'); ?>
		<?php echo $form->textField($model,'obsequio_cliente',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pago_curier_cliente'); ?>
		<?php echo $form->textField($model,'pago_curier_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'obcervacion_asesor_cliente'); ?>
		<?php echo $form->textField($model,'obcervacion_asesor_cliente',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'obcervacion_encargado_cliente'); ?>
		<?php echo $form->textField($model,'obcervacion_encargado_cliente',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->