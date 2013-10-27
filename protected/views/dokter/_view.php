<?php
/* @var $this DokterController */
/* @var $data Dokter */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_dokter')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kode_dokter), array('view', 'id'=>$data->kode_dokter)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_dokter')); ?>:</b>
	<?php echo CHtml::encode($data->nama_dokter); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_spesialis')); ?>:</b>
	<?php echo CHtml::encode($data->id_spesialis); ?>
	<br />


</div>