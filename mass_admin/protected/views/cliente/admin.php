<?php
/* @var $this ClienteController */
/* @var $model Cliente */



$this->menu=array(
	array('label'=>'Inicio', 'url'=>array('index')),
	array('label'=>'Todos los Clientes', 'url'=>array('todos')),
	array('label'=>'Crear Cliente', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#cliente-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Filtrar Clientes Por Status</h1>



<?php echo CHtml::link('Filtrar Por Status','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->


<div id="Layer1" style="width:860px; height:900px; overflow:auto;">

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'cliente-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_cliente',
		'cedula_cliente',
		'nombre_cliente',
		'apellido_cliente',
		'telefono_celular_cliente',
		'telefono_casa_cliente',
		
		'telefono_oficina_cliente',
		'correo_cliente',
		'fecha_caducidad_tc_cliente',
		'codigo_seguridad_cliente',
		'fecha_venta_cliente',
		'asesor_cliente',
		'ciudad_cliente',
		'provincia_cliente',
		'direcion_cliente',
		'banco_cliente',
		'franquicia_cliente',
		
		'super_realiza_pos',
		'autorizacion_cliente',
		'trans_cliente',
		'plazo_cliente',
		'fecha_autorizacion_cliente',
		'recap_cliente',
		'voucher_cliente',
		'centro_auto_cliente',
		'monto_cliente',
		'codigo_cliente',
		'courier_cliente',
		'fecha_envio_cliente',
		'fecha_entrega_cliente',
		'carta_cliente',
		'copia_ci_cliente',
		'fecha_pago_asesor_cliente',
		'pago_banco_cliente',
		'obsequio_cliente',
		'pago_curier_cliente',
		'obcervacion_asesor_cliente',
		'obcervacion_encargado_cliente',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
</div>
