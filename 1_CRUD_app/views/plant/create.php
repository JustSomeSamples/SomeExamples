<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Plant $model */

?>
<div class="plant-create">

    <h1>Add new plant</h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
