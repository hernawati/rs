<?php
/* @var $this SpesialisController */
/* @var $model Spesialis */

$this->breadcrumbs=array(
	'Spesialises'=>array('index'),
	$model->id_spesialis,
);

$this->menu=array(
	array('label'=>'List Spesialis', 'url'=>array('index')),
	array('label'=>'Create Spesialis', 'url'=>array('create')),
	array('label'=>'Update Spesialis', 'url'=>array('update', 'id'=>$model->id_spesialis)),
	array('label'=>'Delete Spesialis', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_spesialis),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Spesialis', 'url'=>array('admin')),
);
?>

<h1>View Spesialis #<?php echo $model->id_spesialis; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_spesialis',
		'nama_spesialist',
	),
)); ?>
