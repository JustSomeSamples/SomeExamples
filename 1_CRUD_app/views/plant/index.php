<?php

use app\models\Plant;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\bootstrap5\Html;

/** @var yii\web\View $this */
/** @var app\models\PlantSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

?>
<div class="plant-index">

    <h1>Plants</h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'attribute' => 'name',
                'contentOptions' => ['style' => 'width: 70%;'],
            ],
            [
                'attribute' => 'height',
                'contentOptions' => ['style' => 'width: 10%;'],
            ],
            [
                'attribute' => 'age',
                'contentOptions' => ['style' => 'width: 10%;'],
            ],
            [
                'class' => ActionColumn::class,
                'contentOptions' => ['style' => 'width: 10%;'],
                'buttons' => [
                    'delete' => function ($url, $model) {
                        return Html::a(
                            (new ActionColumn())->icons['trash'],
                            $url,
                            [
                                'title' => Yii::t('yii', 'Delete \'' . $model->name . '\''),
                                'aria-label' => Yii::t('yii', 'Delete \'' . $model->name . '\''),
                                'data-pjax' => 0,
                                'data-confirm' => Yii::t('yii', 'Are you sure you want to delete \'' . $model->name . '\'?'),
                                'data-method' => 'post',
                            ]
                        );
                    },
                ],
            ],
        ],
    ]); ?>

</div>
