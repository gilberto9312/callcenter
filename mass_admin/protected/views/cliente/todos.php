<?php
/* @var $this ClienteController */
/* @var $model Cliente */



$this->menu=array(
	array('label'=>'Inicio', 'url'=>array('index')),
	array('label'=>'Filtrar Por Status', 'url'=>array('admin')),
	array('label'=>'Crear Cliente', 'url'=>array('create')),
);

?>

<h1>Filtrar Clientes</h1>



<div id="Layer1" style="width:600px; height:400px; overflow:auto;">

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
