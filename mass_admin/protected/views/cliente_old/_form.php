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



	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cedula_cliente'); ?>
		<?php echo $form->textField($model,'cedula_cliente',array('size'=>10,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'cedula_cliente'); ?>


		<?php echo $form->labelEx($model,'nombre_cliente'); ?>
		<?php echo $form->textField($model,'nombre_cliente',array('size'=>10,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'nombre_cliente'); ?>

		<?php echo $form->labelEx($model,'apellido_cliente'); ?>
		<?php echo $form->textField($model,'apellido_cliente',array('size'=>10,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'apellido_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono_celular_cliente'); ?>
		<?php echo $form->textField($model,'telefono_celular_cliente',array('size'=>10,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'telefono_celular_cliente'); ?>


		<?php echo $form->labelEx($model,'telefono_casa_cliente'); ?>
		<?php echo $form->textField($model,'telefono_casa_cliente',array('size'=>10,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'telefono_casa_cliente'); ?>
	

		<?php echo $form->labelEx($model,'telefono_oficina_cliente'); ?>
		<?php echo $form->textField($model,'telefono_oficina_cliente',array('size'=>10,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'telefono_oficina_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tarjeta_cliente'); ?>
		<?php echo $form->textField($model,'tarjeta_cliente'); ?>
		<?php echo $form->error($model,'tarjeta_cliente'); ?>


 <?php echo $form->labelEx($model,'fecha_caducidad_cliente'); ?> 
		
<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
   'model'=>$model,
   'attribute'=>'fecha_caducidad_cliente',
   'value'=>$model->fecha_caducidad_cliente,
   'language' => 'es',
   'htmlOptions' => array('readonly'=>"readonly"),
   'options'=>array(
    'autoSize'=>true,
    'defaultDate'=>$model->fecha_caducidad_cliente,
    'dateFormat'=>'yy-mm-dd',    
    'showAnim'=>'fold', // 'show' (the default), 'slideDown', 'fadeIn', 'fold'
    'showOn'=>'button', // 'focus', 'button', 'both'
    'buttonText'=>Yii::t('ui','Fecha'),
    
    'selectOtherMonths'=>true,
    
    'showButtonPanel'=>true,
    'showOn'=>'button',
    'showOtherMonths'=>true, 
    'changeMonth' => 'true', 
    'changeYear' => 'true', 
    'maxDate'=> "+20Y",
    ),
  )); 
 ?>

		

	</div>

	<div class="row">

<?php echo $form->labelEx($model,'codigo_seguridad_cliente'); ?> <?php echo $form->textField($model,'codigo_seguridad_cliente',array('size'=>3)); ?>   
<?php echo $form->error($model,'codigo_seguridad_cliente'); ?> 

 <?php echo $form->labelEx($model,'fecha_vencimiento_cliente'); ?> 

<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
   'model'=>$model,
   'attribute'=>'fecha_vencimiento_cliente',
   'value'=>$model->fecha_vencimiento_cliente,
   'language' => 'es',
   'htmlOptions' => array('readonly'=>"readonly"),
   'options'=>array(
    'autoSize'=>true,
    'defaultDate'=>$model->fecha_vencimiento_cliente,
    'dateFormat'=>'yy-mm-dd',    
    'showAnim'=>'fold', // 'show' (the default), 'slideDown', 'fadeIn', 'fold'
    'showOn'=>'button', // 'focus', 'button', 'both'
    'buttonText'=>Yii::t('ui','Fecha'),
    
    'selectOtherMonths'=>true,
    
    'showButtonPanel'=>true,
    'showOn'=>'button',
    'showOtherMonths'=>true, 
    'changeMonth' => 'true', 
    'changeYear' => 'true', 
    'maxDate'=> "+20Y",
    ),
  )); 
 ?>

		<?php echo $form->error($model,'banco_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'asesor_cliente'); ?>
		<?php echo $form->textField($model,'asesor_cliente',array('size'=>10,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'asesor_cliente'); ?>


		<?php echo $form->labelEx($model,'ciudad_cliente'); ?>
		<?php echo $form->textField($model,'ciudad_cliente',array('size'=>10,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'ciudad_cliente'); ?>


		<?php echo $form->labelEx($model,'direcion_cliente'); ?>
		<?php echo $form->textArea($model,'direcion_cliente',array('size'=>10,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'direcion_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status_cliente'); ?>

<?php echo $form->dropDownList($model, 'status_cliente',array('1'=>'Pendiente', '2'=>'No Quiere el Servicio', '3'=>'Llamar despues','4'=>'Vendido','5'=>'Venta Devuelta','6'=>'Entregado')); ?>
		<?php echo $form->error($model,'status_cliente'); ?>

		<?php echo $form->labelEx($model,'obcervacion_asesor_cliente'); ?>
		<?php echo $form->textArea($model,'obcervacion_asesor_cliente',array('size'=>10,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'obcervacion_asesor_cliente'); ?>

		<?php echo $form->labelEx($model,'autorizacion_cliente'); ?>
		<?php echo $form->textField($model,'autorizacion_cliente'); ?>
		<?php echo $form->error($model,'autorizacion_cliente'); ?>

		<?php echo $form->labelEx($model,'fecha_autorizacion_cliente'); ?>

<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
   'model'=>$model,
   'attribute'=>'fecha_autorizacion_cliente',
   'value'=>$model->fecha_autorizacion_cliente,
   'language' => 'es',
   'htmlOptions' => array('readonly'=>"readonly"),
   'options'=>array(
    'autoSize'=>true,
    'defaultDate'=>$model->fecha_autorizacion_cliente,
    'dateFormat'=>'yy-mm-dd',    
    'showAnim'=>'fold', // 'show' (the default), 'slideDown', 'fadeIn', 'fold'
    'showOn'=>'button', // 'focus', 'button', 'both'
    'buttonText'=>Yii::t('ui','Fecha'),
    
    'selectOtherMonths'=>true,
    
    'showButtonPanel'=>true,
    'showOn'=>'button',
    'showOtherMonths'=>true, 
    'changeMonth' => 'true', 
    'changeYear' => 'true', 
    'maxDate'=> "+20Y",
    ),
  )); 
 ?>		


		<?php echo $form->error($model,'fecha_autorizacion_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'recap_cliente'); ?>
		<?php echo $form->textField($model,'recap_cliente',array('size'=>10)); ?>
		<?php echo $form->error($model,'recap_cliente'); ?>


		<?php echo $form->labelEx($model,'voucher_cliente'); ?>
		<?php echo $form->textField($model,'voucher_cliente',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'voucher_cliente'); ?>


		<?php echo $form->labelEx($model,'centro_auto_cliente'); ?>
		<?php echo $form->textField($model,'centro_auto_cliente',array('size'=>10)); ?>
		<?php echo $form->error($model,'centro_auto_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'monto_cliente'); ?>
		<?php echo $form->textField($model,'monto_cliente',array('size'=>10)); ?>
		<?php echo $form->error($model,'monto_cliente'); ?>



		<?php echo $form->labelEx($model,'courier_cliente'); ?>
		<?php echo $form->textField($model,'courier_cliente',array('size'=>10,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'courier_cliente'); ?>
	
		<?php echo $form->labelEx($model,'fecha_envio_cliente'); ?>

<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
   'model'=>$model,
   'attribute'=>'fecha_envio_cliente',
   'value'=>$model->fecha_envio_cliente,
   'language' => 'es',
   'htmlOptions' => array('readonly'=>"readonly"),
   'options'=>array(
    'autoSize'=>true,
    'defaultDate'=>$model->fecha_envio_cliente,
    'dateFormat'=>'yy-mm-dd',    
    'showAnim'=>'fold', // 'show' (the default), 'slideDown', 'fadeIn', 'fold'
    'showOn'=>'button', // 'focus', 'button', 'both'
    'buttonText'=>Yii::t('ui','Fecha'),
    
    'selectOtherMonths'=>true,
    
    'showButtonPanel'=>true,
    'showOn'=>'button',
    'showOtherMonths'=>true, 
    'changeMonth' => 'true', 
    'changeYear' => 'true', 
    'maxDate'=> "+20Y",
    ),
  )); 
 ?>		


		<?php echo $form->error($model,'fecha_envio_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_entrega_cliente'); ?>

<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
   'model'=>$model,
   'attribute'=>'fecha_entrega_cliente',
   'value'=>$model->fecha_entrega_cliente,
   'language' => 'es',
   'htmlOptions' => array('readonly'=>"readonly"),
   'options'=>array(
    'autoSize'=>true,
    'defaultDate'=>$model->fecha_entrega_cliente,
    'dateFormat'=>'yy-mm-dd',    
    'showAnim'=>'fold', // 'show' (the default), 'slideDown', 'fadeIn', 'fold'
    'showOn'=>'button', // 'focus', 'button', 'both'
    'buttonText'=>Yii::t('ui','Fecha'),
    
    'selectOtherMonths'=>true,
    
    'showButtonPanel'=>true,
    'showOn'=>'button',
    'showOtherMonths'=>true, 
    'changeMonth' => 'true', 
    'changeYear' => 'true', 
    'maxDate'=> "+20Y",
    ),
  )); 
 ?>	

		<?php echo $form->error($model,'fecha_entrega_cliente'); ?>

		<?php echo $form->labelEx($model,'carta_cliente'); ?>
		<?php echo $form->textField($model,'carta_cliente',array('size'=>10,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'carta_cliente'); ?>



		<?php echo $form->labelEx($model,'copia_ci_cliente'); ?>
		<?php echo $form->dropDownList($model, 'status_cliente',array('1'=>'No', '2'=>'Si')); ?>

		<?php echo $form->error($model,'copia_ci_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_pago_asesor_cliente'); ?>
		
<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
   'model'=>$model,
   'attribute'=>'fecha_pago_asesor_cliente',
   'value'=>$model->fecha_pago_asesor_cliente,
   'language' => 'es',
   'htmlOptions' => array('readonly'=>"readonly"),
   'options'=>array(
    'autoSize'=>true,
    'defaultDate'=>$model->fecha_pago_asesor_cliente,
    'dateFormat'=>'yy-mm-dd',    
    'showAnim'=>'fold', // 'show' (the default), 'slideDown', 'fadeIn', 'fold'
    'showOn'=>'button', // 'focus', 'button', 'both'
    'buttonText'=>Yii::t('ui','Fecha'),
    
    'selectOtherMonths'=>true,
    
    'showButtonPanel'=>true,
    'showOn'=>'button',
    'showOtherMonths'=>true, 
    'changeMonth' => 'true', 
    'changeYear' => 'true', 
    'maxDate'=> "+20Y",
    ),
  )); 
 ?>	

<?php echo $form->error($model,'fecha_pago_asesor_cliente'); ?>


		<?php echo $form->labelEx($model,'pago_banco_cliente'); ?>
		<?php echo $form->textField($model,'pago_banco_cliente', array('size'=>10)); ?>
		<?php echo $form->error($model,'pago_banco_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'smart_cliente'); ?>
		<?php echo $form->textField($model,'smart_cliente',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'smart_cliente'); ?>
	

		<?php echo $form->labelEx($model,'pago_curier_cliente'); ?>
		<?php echo $form->textField($model,'pago_curier_cliente',array('size'=>10)); ?>
		<?php echo $form->error($model,'pago_curier_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'obcervacion_encargado_cliente'); ?>
		<?php echo $form->textField($model,'obcervacion_encargado_cliente',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'obcervacion_encargado_cliente'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->