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
		<?php echo $form->label($model,'status_cliente'); ?>
		<?php echo $form->dropDownList($model, 'status_cliente',array('1'=>'1=Por Pos Venta', '2'=>'2=Por Entrega', '3'=>'3=Entregada','4'=>'4=No Recibio','5'=>'5=No Desea Pos','6'=>'6=No Se Ubico','7'=>'7=Entregada y Pagada','8'=>'8=Falta de Fondos','9'=>'9=T.C Bloqueada','10'=>'10=No contesta','11'=>'11=No Desea','12'=>'12=No Posee T.C')); ?>



	</div>

	
	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->