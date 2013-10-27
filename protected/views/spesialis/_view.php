<?php
/* @var $this SpesialisController */
/* @var $data Spesialis */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_spesialis')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_spesialis), array('view', 'id'=>$data->id_spesialis)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_spesialist')); ?>:</b>
	<?php echo CHtml::encode($data->nama_spesialist); ?>
	<br />


</div>