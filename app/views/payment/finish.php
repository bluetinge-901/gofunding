<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Payment ' . $response;
$this->params['breadcrumbs'][] = $this->title;
$this->params['breadcrumbs'][] = 'Finish';

?>

<?php if ($response == 'success') { ?>

    <div class="site-contact">
        <h1 class="text-center"><?= Html::encode($this->title) ?></h1>

        <div class="text-center">
            <h1>
            Thank you for your participation. We will check your payment, please wait.
            </h1>
        </div>
    </div>

<?php } else { ?>
    <div class="site-contact">
        <h1 class="text-center"><?= Html::encode($this->title) ?></h1>

        <div class="text-center">
            <h1>
            Payment failed, please contact us at email: oza.desk@gmail.com.com
            </h1>
        </div>
    </div>    
<?php } ?>