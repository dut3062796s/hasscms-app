<?php

/**
 * HassCMS (http://www.hassium.org/)
 *
 * @link http://github.com/hasscms for the canonical source repository
 * @copyright Copyright (c) 2016-2099 Hassium Software LLC.
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/*
 * @var yii\web\View $this
 * @var dektrium\user\models\ResendForm $model
 */

$this->title = Yii::t('user', 'Request new confirmation message');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container user-module">
	<div class="row">
		<div class="col-md-6 col-md-offset-3 ">
			<div class="panel panel-default panel-page">
				<div class="panel-heading">
					<h2 class="panel-title"><?= Html::encode($this->title) ?></h2>
				</div>
				<div class="panel-body">
					<ul class="nav nav-tabs mbl">
						<li class="active js-find-by-email"><a style="cursor: pointer;">邮箱地址
						</a></li>
					</ul>
                <?php
                
$form = ActiveForm::begin([
                    'id' => 'resend-form',
                    'enableAjaxValidation' => true,
                    'enableClientValidation' => false
                ]);
                ?>

                <?= $form->field($model, 'email',['options'=>["class"=>"form-group mb40"]])?>

                <?= Html::submitButton(Yii::t('user', 'Continue'), ['class' => 'btn btn-primary btn-block']) ?><br>

                <?php ActiveForm::end(); ?>
            	</div>
			</div>
		</div>
	</div>
</div>

