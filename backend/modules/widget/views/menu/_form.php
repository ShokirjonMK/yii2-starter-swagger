<?php

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;
use rmrevin\yii\fontawesome\FAS;

/**
 * @var $this  yii\web\View
 * @var $model common\models\WidgetMenu
 */

?>

<?php $form = ActiveForm::begin([
    'enableClientValidation' => false,
    'enableAjaxValidation' => true,
]) ?>
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">
                <?php echo Yii::t('backend', 'Create a new menu') ?>
            </h3>
        </div>
        <div class="card-body">
            <?php echo $form->errorSummary($model) ?>

            <?php echo $form->field($model, 'key')->textInput(['maxlength' => 1024]) ?>

            <?php echo $form->field($model, 'title')->textInput(['maxlength' => 512]) ?>

            <?php echo $form->field($model, 'items')->widget(trntv\aceeditor\AceEditor::class, [
                'mode' => 'json',
            ]) ?>

            <?php echo $form->field($model, 'status')->checkbox() ?>

        </div>
        <div class="card-footer">
            <?php echo Html::submitButton(
                $model->isNewRecord? FAS::icon('save').' '.Yii::t('backend', 'Create'):FAS::icon('save').' '. Yii::t('backend', 'Save Changes'),
                ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']
            ) ?>
        </div>
    </div>
<?php ActiveForm::end() ?>
