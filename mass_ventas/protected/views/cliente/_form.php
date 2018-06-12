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
	'enableAjaxValidation'=>true,
)); ?>


	<?php echo $form->errorSummary($model); ?>



	<div class="row">
		<?php echo $form->labelEx($model,'fecha_venta_cliente'); ?>
<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
   'model'=>$model,
   'attribute'=>'fecha_venta_cliente',
   'value'=>$model->fecha_venta_cliente,
   'language' => 'es',
   'htmlOptions' => array('readonly'=>"readonly"),
   'options'=>array(
    'autoSize'=>true,
    'defaultDate'=>$model->fecha_venta_cliente,
    'dateFormat'=>'yy-mm-dd',
    
    'showAnim'=>'fold', // 'show' (the default), 'slideDown', 'fadeIn', 'fold'
    'showOn'=>'button', // 'focus', 'button', 'both'
    'buttonText'=>Yii::t('ui','Fecha de la venta'),
    
    
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

		<?php echo $form->error($model,'fecha_venta_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cedula_cliente'); ?>
		<?php echo $form->textField($model,'cedula_cliente'); ?>
		<?php echo $form->error($model,'cedula_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_cliente'); ?>
		<?php echo $form->textField($model,'nombre_cliente',array('size'=>20,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nombre_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellido_cliente'); ?>
		<?php echo $form->textField($model,'apellido_cliente',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'apellido_cliente'); ?>
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
				<?php echo $form->dropDownList($model,'franquicia_cliente',array('1'=>'1=Master','2'=>'2=Visa','3'=>'3=AMEX')); ?>
		<?php echo $form->error($model,'franquicia_cliente'); ?>
	</div>



	<div class="row">
		<?php echo $form->labelEx($model,'banco_cliente'); ?>
		<?php echo $form->textField($model,'banco_cliente',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'banco_cliente'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'tarjeta_cliente'); ?>
		
		<?php $this->widget('CMaskedTextField',array(
	'model'=>$model,
	'attribute'=>'tarjeta_cliente',
//	'name'=>'tarjeta_cliente',
	'mask'=>'9999-9999-9999-9999',
	'htmlOptions'=>array(
		'style'=>'width:120px;'
	),
)); ?>



		<?php echo $form->error($model,'tarjeta_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_caducidad_tc_cliente'); ?>
		

		<?php $this->widget('CMaskedTextField',array(
	'model'=>$model,
	'attribute'=>'fecha_caducidad_tc_cliente',
//	'name'=>'fecha_caducidad_tc_cliente',
	'mask'=>'99-99',
	'htmlOptions'=>array(
		'style'=>'width:80px;'
	),
)); ?>

		<?php echo $form->error($model,'fecha_caducidad_tc_cliente'); ?>
	</div>




	<div class="row">
		<?php echo $form->labelEx($model,'codigo_seguridad_cliente'); ?>
		<?php echo $form->textField($model,'codigo_seguridad_cliente',array('maxlength'=>3)); ?>
		<?php echo $form->error($model,'codigo_seguridad_cliente'); ?>
	</div>



	<div class="row">
		<?php echo $form->labelEx($model,'monto_cliente'); ?>
		<?php echo $form->textField($model,'monto_cliente'); ?>
		<?php echo $form->error($model,'monto_cliente'); ?>
	</div>


		<div class="row">
		<?php echo $form->labelEx($model,'trans_cliente'); ?>
			<?php echo $form->dropDownList($model,'trans_cliente',array('corriente'=>'Corriente','plazo'=>'Plazo')); ?>
		<?php echo $form->error($model,'trans_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'plazo_cliente'); ?>
		<?php echo $form->textField($model,'plazo_cliente',array('size'=>20,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'plazo_cliente'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'status_cliente'); ?>
<?php echo $form->dropDownList($model, 'status_cliente',array('0'=>'Pendiente','1'=>'Por Pos Venta','5'=>'No Desea Pos','10'=>'No contesta','11'=>'No Desea','12'=>'No Posee T.C','14'=>'Guardar')); ?>
		<?php echo $form->error($model,'status_cliente'); ?>
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



	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->