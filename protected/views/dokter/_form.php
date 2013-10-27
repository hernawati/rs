<?php
/* @var $this DokterController */
/* @var $model Dokter */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dokter-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'kode_dokter'); ?>
		<?php echo $form->textField($model,'kode_dokter',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'kode_dokter'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_dokter'); ?>
		<?php echo $form->textField($model,'nama_dokter',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nama_dokter'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_spesialis'); ?>
		<?php echo $form->textField($model,'id_spesialis',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'id_spesialis'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->