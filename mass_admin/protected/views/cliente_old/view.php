<?php
/* @var $this ClienteController */
/* @var $model Cliente */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->id_cliente,
);

$this->menu=array(
	array('label'=>'List Cliente', 'url'=>array('index')),
	array('label'=>'Create Cliente', 'url'=>array('create')),
	array('label'=>'Update Cliente', 'url'=>array('update', 'id'=>$model->id_cliente)),
	array('label'=>'Delete Cliente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_cliente),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cliente', 'url'=>array('admin')),
);
?>

<h1>View Cliente #<?php echo $model->id_cliente; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_cliente',
		'cedula_cliente',
		'nombre_cliente',
		'apellido_cliente',
		'telefono_celular_cliente',
		'telefono_casa_cliente',
		'telefono_oficina_cliente',
		'tarjeta_cliente',
		'fecha_caducidad_cliente',
		'codigo_seguridad_cliente',
		'fecha_vencimiento_cliente',
		'banco_cliente',
		'asesor_cliente',
		'ciudad_cliente',
		'direcion_cliente',
		'status_cliente',
		'obcervacion_asesor_cliente',
		'autorizacion_cliente',
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
		'smart_cliente',
		'pago_curier_cliente',
		'obcervacion_encargado_cliente',
	),
)); ?>
