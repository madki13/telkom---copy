<?php

use app\models\Berita;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\ListView;


/** @var yii\web\View $this */
/** @var app\models\BeritaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Berita';
$this->params['breadcrumbs'][] = $this->title;
?>



<div id="berita-index">

    <h1><?= Html::encode($this->title) ?></h1>



    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="container">
        <div class="row">
            <div class="row">
            <?php
                echo ListView::widget( [
                    'dataProvider' => $dataProvider,
                    'pager' => ['options' => ['class' => 'pagination col-md-12', 'maxButtonCount'=>4]],
                    'itemView' => 'blog/listNews',
                    'summary'=>'',
                ]); ?>

            </div>

        </div>

    </div>

</div> 

<?php /* <div class="Berita-index">
    <?= GridView::widget($dataProvider, $searchModel, $this->title,
    [
        ['class' => 'kartik\grid\SerialColumn'],
            'id',
            'judul',
            'konten:ntext',
            'penulis',
            'tanggal_terbit',
            //  'photo',
        [
            'class' => ActionColumn::className(),
            'width' => '150px',
            'urlCreator' => function ($action, $model, $key, $index, $column) {
                return Url::toRoute([$action, 'id' => $model->id]);
            }
        ],
    ]) ?>
</div> */