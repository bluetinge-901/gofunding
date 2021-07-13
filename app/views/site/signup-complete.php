<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
?>
<hr>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="text-center">
				<h1>Congratulations, you've been</h1>
				<h3>Please create a campaign or donation at OdX</h3>
			</div>
		</div>
	</div>
	<hr>
	<div class="row text-center">
		<div class="col-md-12">
			<a href="<?= Url::to('/campaign/create') ?>">
				<div class="btn btn-primary">Galang Dana</div>
			</a> &nbsp&nbsp&nbsp&nbsp&nbsp
			<a href="<?= Url::to('/campaign/index') ?>">
				<div class="btn btn-primary">Donate or Invest</div>
			</a>
		</div>
	</div>
</div>