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



	<div class="row">
		<?php echo $form->labelEx($model,'id_user'); ?>
		<?php echo $form->textField($model,'id_user',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'id_user'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton(hoal); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->