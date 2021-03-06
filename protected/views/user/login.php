<?php
$this->pageTitle='登录 - ' . Yii::app()->name;
$this->breadcrumbs=array(
	'登录',
);
?>

<h1>登录</h1>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>


	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('登录',array('class'=>'button')); ?>
        <b><?php echo CHtml::link('注册帐号',array('user/register'));?></b>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
<hr />
<div class="login-method">
    <?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl.'/images/weibo_login.png','',array()),Yii::app()->weibo->loginUrl);?>
</div>

