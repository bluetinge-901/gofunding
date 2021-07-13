<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

$this->title = 'Masuk';
// $this->params['breadcrumbs'][] = $this->title;

?>
<div class="hidden-sm hidden-xs">
    <br><br><br><br>
</div>
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="site-login panel panel-default text-center">
            <div class="panel-body">
                <h2>Hi, User!</h2>
                <h4>welcome to Login page Login provided by parichay identification system with full 126 bit secured</h4>
                <hr>
                <?php
                $form = ActiveForm::begin([
                        'id' => 'login-form',
                        // 'layout' => 'horizontal',
                        // 'fieldConfig' => [
                        //     'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
                        //     'labelOptions' => ['class' => 'col-lg-1 control-label'],
                        // ],
                ]);

                ?>

                <?= $form->field($model, 'username')->textInput(['placeholder' => 'Username', 'autofocus' => true])->label(false) ?>
                <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Password'])->label(false) ?>
                <?php // $form->field($model, 'rememberMe')->checkbox()  ?>

                <div class="form-group">
                    <div class="">
                        <?= Html::submitButton('Masuk', ['class' => 'btn btn-success btn-md btn-block', 'name' => 'login-button']) ?>
                    </div>
                </div>
                <hr>
                <p> Don't have account? <a href="<?= Url::to('signup') ?>">List</a> Now.</p>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
