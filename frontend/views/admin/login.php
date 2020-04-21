<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = ucfirst(Yii::$app->controller->id) . ' [' . ucfirst(Yii::$app->controller->action->id) . ']';
?>
<p>Авторизация</p>
<?php $form = ActiveForm::begin([
    'method' => 'POST',
    'options' => [
        'class' => 'admin'
    ]])
?>
    <p><?= Html::input('text', 'login', 'admin', ['class' => 'lead']) ?></p>
    <p><?= Html::input('text', 'password', '1234', ['class' => 'lead']) ?></p>
    <p><?= Html::input('submit', 'submit', 'Войти', ['class' => 'button']) ?></p>
<?php $form->end() ?>
<?php if (isset($error)): ?>
    <p class="error"><?= $error ?></p>
<?php endif ?>
