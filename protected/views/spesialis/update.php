<?php
/* @var $this SpesialisController */
/* @var $model Spesialis */

$this->breadcrumbs=array(
	'Spesialises'=>array('index'),
	$model->id_spesialis=>array('view','id'=>$model->id_spesialis),
	'Update',
);

$this->menu=array(
	array('label'=>'List Spesialis', 'url'=>array('index')),
	array('label'=>'Create Spesialis', 'url'=>array('create')),
	array('label'=>'View Spesialis', 'url'=>array('view', 'id'=>$model->id_spesialis)),
	array('label'=>'Manage Spesialis', 'url'=>array('admin')),
);
?>

<h1>Update Spesialis <?php echo $model->id_spesialis; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>