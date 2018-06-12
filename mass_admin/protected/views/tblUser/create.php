<?php
/* @var $this TblUserController */
/* @var $model TblUser */

$this->menu=array(
	array('label'=>'Lista de Usuarios', 'url'=>array('index')),
	array('label'=>'Gestionar Usuarios', 'url'=>array('admin')),
);
?>

<h1>Crear Usuarios</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>