<?php
use yii\helpers\Html;

$this->title = ucfirst(Yii::$app->controller->id) . ' [' . ucfirst(Yii::$app->controller->action->id) . ']';
?>
<div class="adminBlog">
    <div class="nav">
        <a href="?act=add" class="item">Добавить запись</a>
    </div>
    <?php if ($message): ?>
        <p class="message"><?= $message ?></p>
    <?php endif ?>
    <div class="blogList">
        <?php foreach ($blogList as $item): ?>
            <div class="item">
                <a href="/admin/blog?edit=<?= Html::encode($item->id) ?>" class="link">
                    <?= Html::encode($item->title) ?>
                </a>
                <span class="date">
                    <?= Html::encode(date('M j, Y \a\t g:i a', $item->date)) ?>
                </span>
            </div>
        <?php endforeach ?>
    </div>
</div>
