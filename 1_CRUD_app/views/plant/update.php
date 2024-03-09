<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Plant $model */

$this->title = 'Update Plant: ' . $model->name;

?>
<div class="plant-update">

    <h1>Update Plant: <?= $model->name ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
