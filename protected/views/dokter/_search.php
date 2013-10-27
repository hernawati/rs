<?php
/* @var $this DokterController */
/* @var $model Dokter */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'kode_dokter'); ?>
		<?php echo $form->textField($model,'kode_dokter',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_dokter'); ?>
		<?php echo $form->textField($model,'nama_dokter',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_spesialis'); ?>
		<?php echo $form->textField($model,'id_spesialis',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->