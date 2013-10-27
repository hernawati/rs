<?php
/* @var $this SpesialisController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Spesialises',
);

$this->menu=array(
	array('label'=>'Create Spesialis', 'url'=>array('create')),
	array('label'=>'Manage Spesialis', 'url'=>array('admin')),
);
?>

<h1>Spesialises</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
