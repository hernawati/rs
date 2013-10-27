<?php
/* @var $this SpesialisController */
/* @var $model Spesialis */

$this->breadcrumbs=array(
	'Spesialises'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Spesialis', 'url'=>array('index')),
	array('label'=>'Manage Spesialis', 'url'=>array('admin')),
);
?>

<h1>Create Spesialis</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>