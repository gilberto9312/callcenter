<?php
/* @var $this ClienteController */
/* @var $model Cliente */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cliente-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_cliente'); ?>
		<?php echo $form->textField($model,'nombre_cliente',array('size'=>20,'maxlength'=>20,'readonly'=>"readonly")); ?>
		<?php echo $form->error($model,'nombre_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellido_cliente'); ?>
		<?php echo $form->textField($model,'apellido_cliente',array('size'=>20,'maxlength'=>20,'readonly'=>"readonly")); ?>
		<?php echo $form->error($model,'apellido_cliente'); ?>
	</div>
<div class="row">
		<?php echo $form->labelEx($model,'cedula_cliente'); ?>
		<?php echo $form->textField($model,'cedula_cliente'); ?>
		<?php echo $form->error($model,'cedula_cliente'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'telefono_celular_cliente'); ?>
		<?php echo $form->textField($model,'telefono_celular_cliente',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'telefono_celular_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono_casa_cliente'); ?>
		<?php echo $form->textField($model,'telefono_casa_cliente',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'telefono_casa_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono_oficina_cliente'); ?>
		<?php echo $form->textField($model,'telefono_oficina_cliente',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'telefono_oficina_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'correo_cliente'); ?>
		<?php echo $form->textField($model,'correo_cliente',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'correo_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ciudad_cliente'); ?>
		<?php echo $form->textField($model,'ciudad_cliente',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'ciudad_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'provincia_cliente'); ?>
		<?php echo $form->textField($model,'provincia_cliente',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'provincia_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direcion_cliente'); ?>
		<?php echo $form->textField($model,'direcion_cliente',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'direcion_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'franquicia_cliente'); ?>
		<?php echo $form->textField($model,'franquicia_cliente',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'franquicia_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'banco_cliente'); ?>
		<?php echo $form->textField($model,'banco_cliente',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'banco_cliente'); ?>
	</div>




<div class="row">
		<?php echo $form->labelEx($model,'fecha_caducidad_tc_cliente'); ?>
		<?php echo $form->textField($model,'fecha_caducidad_tc_cliente',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'fecha_caducidad_tc_cliente'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'tarjeta_cliente'); ?>
		<?php echo $form->textField($model,'tarjeta_cliente',array('size'=>19,'maxlength'=>19)); ?>
		<?php echo $form->error($model,'tarjeta_cliente'); ?>
	</div>



	

	<div class="row">
		<?php echo $form->labelEx($model,'codigo_seguridad_cliente'); ?>
		<?php echo $form->textField($model,'codigo_seguridad_cliente'); ?>
		<?php echo $form->error($model,'codigo_seguridad_cliente'); ?>
	</div>



	<div class="row">
		<?php echo $form->labelEx($model,'monto_cliente'); ?>
		<?php echo $form->textField($model,'monto_cliente'); ?>
		<?php echo $form->error($model,'monto_cliente'); ?>
	</div>


<div class="row">
		<?php echo $form->labelEx($model,'trans_cliente'); ?>
		<?php echo $form->textField($model,'trans_cliente',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'trans_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'plazo_cliente'); ?>
		<?php echo $form->textField($model,'plazo_cliente',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'plazo_cliente'); ?>
	</div>

	
<div class="row">
		<?php echo $form->labelEx($model,'obcervacion_asesor_cliente'); ?>
		<?php echo $form->textArea($model,'obcervacion_asesor_cliente',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'obcervacion_asesor_cliente'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'obsequio_cliente'); ?>
		<?php echo $form->textField($model,'obsequio_cliente',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'obsequio_cliente'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'fecha_venta_cliente'); ?>
		<?php echo $form->textField($model,'fecha_venta_cliente',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'fecha_venta_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'asesor_cliente'); ?>
		<?php echo $form->textField($model,'asesor_cliente',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'asesor_cliente'); ?>
	</div>





	<div class="row">
		<?php echo $form->labelEx($model,'status_cliente'); ?>
		<?php echo $form->textField($model,'status_cliente'); ?>
		<?php echo $form->error($model,'status_cliente'); ?>
	</div>



	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->