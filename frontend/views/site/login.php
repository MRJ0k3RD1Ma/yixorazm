<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \common\models\LoginForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

    <form id="formAuthentication" class="mb-3" method="POST">
        <div class="mb-3">
            <label for="email" class="form-label">Login</label>
            <input type="text" class="form-control" id="email" name="LoginForm[username]" value="<?= $model->username?>" placeholder="Loginingizni kiriting" autofocus/>
        </div>
        <div class="mb-3 form-password-toggle">
            <div class="d-flex justify-content-between">
                <label class="form-label" for="password">Parol</label>
                <a href="#">
                    <small>Parolni unutdingizmi?</small>
                </a>
            </div>
            <div class="input-group input-group-merge">
                <input type="password" id="password" class="form-control" name="LoginForm[password]" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password"/>
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
            </div>
        </div>
        <div class="mb-3">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="LoginForm[rememberMe]" value="1" id="remember-me" />
                <label class="form-check-label" for="remember-me"> Eslab qolish </label>
            </div>
        </div>
        <div class="mb-3">
            <button class="btn btn-primary d-grid w-100" type="submit">Kirish</button>
        </div>
    </form>

    <?php ActiveForm::end(); ?>