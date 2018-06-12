<?php
/* @var $this TblUserController */
/* @var $model TblUser */



$this->menu=array(
	array('label'=>'Lista de Usuarios', 'url'=>array('index')),
	array('label'=>'Crear Usuarios', 'url'=>array('create')),
	array('label'=>'Gestionar Usuarios', 'url'=>array('admin')),
);

 $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'password',
		'rol',
	),
)); ?>
