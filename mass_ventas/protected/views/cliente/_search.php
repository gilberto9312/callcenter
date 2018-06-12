<?php
/* @var $this ClienteController */
/* @var $model Cliente */
/* @var $form CActiveForm */
?>

  
<div class="wide form">

<form name="miformulario">
<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>


	<div class="row" style="display:none">
		<?php echo $form->label($model,'asesor_cliente'); ?>
		<?php echo $form->textField($model,'asesor_cliente',array('size'=>20,'maxlength'=>20,'value'=>Yii::app()->user->name)); ?>
	</div>
</form>
	<div class="row buttons">
		
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
