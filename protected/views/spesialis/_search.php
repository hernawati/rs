<?php
/* @var $this SpesialisController */
/* @var $model Spesialis */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_spesialis'); ?>
		<?php echo $form->textField($model,'id_spesialis',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_spesialist'); ?>
		<?php echo $form->textField($model,'nama_spesialist',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->