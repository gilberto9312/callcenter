<?php
/* @var $this TblUserController */
/* @var $model TblUser */



$this->menu=array(
	array('label'=>'Lista de Usuarios', 'url'=>array('index')),
	array('label'=>'Crear Usuarios', 'url'=>array('create')),
	array('label'=>'Gestionar Usuarios', 'url'=>array('admin')),
);
?>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>

PALOMEQUE CANTOS RENE PATRICIO
