<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ContientSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Contient';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contient-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Créer Contient', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Num_Eleve',
            'Num_Classe',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
