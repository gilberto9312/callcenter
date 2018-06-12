<?php
/* @var $this ClienteController */
/* @var $model Cliente */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Cliente', 'url'=>array('index')),
	array('label'=>'Create Cliente', 'url'=>array('create')),
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

<h1>Manage Clientes</h1>



<?php echo CHtml::link('Coloca tu Codigo','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'cliente-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		
		'cedula_cliente',
		'nombre_cliente',
		'apellido_cliente',
		'telefono_celular_cliente',
		'telefono_casa_cliente',
		
		'telefono_oficina_cliente',
		/*
		'tarjeta_cliente',
		'fecha_caducidad_tc_cliente',
		'codigo_seguridad_cliente',
		'fecha_venta_cliente',
		'asesor_cliente',
		'ciudad_cliente',
		'provincia_cliente',
		'direcion_cliente',
		'banco_cliente',
		'franquicia_cliente',
		'status_cliente',
		'super_realiza_pos',
		'autorizacion_cliente',
		'trans_cliente',
		'plazo_cliente',
		'fecha_autorizacion_cliente',
		'recap_cliente',
		'voucher_cliente',
		'centro_auto_cliente',
		'monto_cliente',
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
		*/
array(
			'class'=>'CButtonColumn',
			'template'=>'{llamar}',
		    'buttons'=>array
		    (
		        'llamar' => array
		        (
		            'label'=>'Llamar',
		            
		            'url'=>'Yii::app()->createUrl("/cliente/update", array("id"=>$data->id_cliente))',
		        ),

		    ),
		
	),
)));
?>
