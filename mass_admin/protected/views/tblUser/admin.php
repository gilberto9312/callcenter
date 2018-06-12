<?php
/* @var $this TblUserController */
/* @var $model TblUser */


$this->menu=array(
	array('label'=>'Lista de Usuarios', 'url'=>array('index')),
	array('label'=>'Crear Usuarios', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tbl-user-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gestionar Usuarios</h1>





<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tbl-user-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'password',
		'rol',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
