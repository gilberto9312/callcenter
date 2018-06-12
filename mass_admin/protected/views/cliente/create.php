<?php
/* @var $this ClienteController */
/* @var $model Cliente */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Inicio', 'url'=>array('index')),
	array('label'=>'Todos los Clientes', 'url'=>array('todos')),
	array('label'=>'Filtrar Por Status', 'url'=>array('admin')),
);
?>

<h1>Create Cliente</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>