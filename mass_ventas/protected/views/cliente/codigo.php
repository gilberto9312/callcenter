<?php
/* @var $this ClienteController */
/* @var $model Cliente */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'cliente-form',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_cliente'); ?>
		<?php echo $form->textField($model,'id_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_user'); ?>
		<?php echo $form->textField($model,'id_user',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cedula_cliente'); ?>
		<?php echo $form->textField($model,'cedula_cliente',array('size'=>20,'maxlength'=>20)); ?>
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
		<?php echo $form->label($model,'nro_tarjeta_cliente'); ?>
		<?php echo $form->textField($model,'nro_tarjeta_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'codigo_seguridad_cliente'); ?>
		<?php echo $form->textField($model,'codigo_seguridad_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email_cliente'); ?>
		<?php echo $form->textField($model,'email_cliente',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nro_convencional_cliente'); ?>
		<?php echo $form->textField($model,'nro_convencional_cliente',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nrm_contacto_cliente'); ?>
		<?php echo $form->textField($model,'nrm_contacto_cliente',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ciudad_cliente'); ?>
		<?php echo $form->textField($model,'ciudad_cliente',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion_cliente'); ?>
		<?php echo $form->textField($model,'direccion_cliente',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->