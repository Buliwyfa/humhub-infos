<?php
/**
 * File : humhub / index.php
 * User : Matthieu SCHMIT
 * Date : 26/04/17
 * Time : 19:11
 */

use humhub\compat\CActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;

?>


<div class="panel panel-default">
    <div class="panel-heading"><?php echo Yii::t('InfosModule.views_admin_index', 'Information Panel Configuration'); ?></div>
    <div class="panel-body">

        <?php $form = CActiveForm::begin(); ?>

        <?php echo $form->errorSummary($model); ?>


        <div class="form-group">
            <div class="checkbox">
                <label>
                    <?= $form->checkBox($model, 'active'); ?> <?= $model->getAttributeLabel('active'); ?>
                </label>
            </div>
        </div>
        <?= $form->field($model, 'title', ['inputOptions' =>['class' => 'form-control']]); ?>
        <?= $form->error($model, 'title'); ?>
        <hr>
        <br>
        <b style="color:red">Use html syntax for the message !</b>
        <br>
        <br>
        <div class="form-group">
            <?= $form->field($model, 'message', ['inputOptions' => ['class' => 'form-control', 'id' => 'newMessageText']])->textarea(); ?>
            <?php echo \humhub\widgets\MarkdownEditor::widget(array('fieldId' => 'newMessageText')); ?>
            <?= $form->error($model, 'message'); ?>
        </div>

        <hr>

        <?= Html::submitButton(Yii::t('InfosModule.views_admin_index', 'Save'), array('class' => 'btn btn-primary')); ?>
        <a class="btn btn-default" href="<?= Url::to(['/admin/module']); ?>"><?= Yii::t('InfosModule.views_admin_index', 'Back to modules'); ?></a>

        <?php CActiveForm::end(); ?>

    </div>
</div>












