<?php
/* @var $this TblUserController */
/* @var $dataProvider CActiveDataProvider */


$this->menu=array(
	array('label'=>'Crear Usuarios', 'url'=>array('create')),
	array('label'=>'Gestionar Usuarios', 'url'=>array('admin')),
);
?>

<h1>Lista de Usuarios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
