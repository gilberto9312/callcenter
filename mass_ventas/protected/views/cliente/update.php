<?php
/* @var $this ClienteController */
/* @var $model Cliente */



$this->menu=array(
	array('label'=>'Clientes', 'url'=>array('admin')),
	array('label'=>'Ver Entregadas', 'url'=>array('entrega%2Frentrega&Cliente%5Basesor_cliente%5D='.Yii::app()->user->name.'')),
	array('label'=>'Ver Rechazadas', 'url'=>array('rechazada%2Frechazada&Cliente%5Basesor_cliente%5D='.Yii::app()->user->name.'')),
	array('label'=>'Ver Guardadas', 'url'=>array('guardada%2Fguardadas&Cliente%5Basesor_cliente%5D='.Yii::app()->user->name.'')),
);

?>

<h1> Cliente <?php echo $model->id_cliente; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>