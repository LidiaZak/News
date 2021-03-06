<?php
/**
 * Created by PhpStorm.
 * User: lidia
 * Date: 08/02/17
 * Time: 16:40
 */
use yii\helpers\Html;
use yii\widgets\LinkPager;
use app\models\Section;

$this->title = 'Новости';
?>

<div class="row">
    <div class="col-md-12"></div>
    <div class="col-md-4">

        <?php foreach ($sectionview as $view): ///news/index/15 ?>

            <?php if ($view->level ==1):?>
                <?= Html::a(Html::encode("{$view->title}"), ['section/'.$view->id]) ?><br>

            <?php else : ?>
                <?php if ($view->level ==2):?>
                    <?= Html::a("------".Html::encode("{$view->title}"), ['section/'.$view->id]) ?><br>
                <?php else :?>
                    <?= Html::a("----------".Html::encode("{$view->title}"), ['section/'.$view->id]) ?><br>
                <?php endif; ?>
            <?php endif; ?>


        <?php endforeach; ?>
    <br/><br/>
        <?= Html::a('Добавить новость', ['site/entry'], ['class'=>'btn btn-primary']) ?> <br/>
        <?= Html::a('Добавить секцию', ['section/index'], ['class'=>'btn btn-primary']) ?> <br/>



    </div>
    <div class="col-md-8">

        <br class="jumbotron">
        <h1 class = "mainheader">Новости</h1>





            <?php



            foreach ($news as $newsitem): ?>



                <?php $imagePath = '/images/thumb_'.$newsitem->images->id.".".$newsitem->images->mimetype;
               ?>




                    <div class = "news_item">

                        <a class="picturelink" href="http://basic.lydia.ns.local/news/index">
                            <?= Html::img($imagePath, ['alt'=>'some', 'class'=>'thing']);?>
                         </a>


                    </div>
                    <div class = "story_content">
                        <?php
                        $date = substr($newsitem->created,0,16);
                        ?>
                        <h5><?=Html::encode("{$date}") ?></h5>
                        <h4><a href=""><?=Html::encode("{$newsitem-> title}") ?></a></h4>
                        <h5><?=Html::encode("{$newsitem->abstract}") ?></h5>


                        <?= Html::a('Читать полностью', ['news/'.$newsitem->id], ['class'=>'btn btn-primary']) ?> <br/>
                    </div>

            <?php endforeach; ?>




        <?= LinkPager::widget(['pagination'=>$pagination]) ?>


    </div>
    </div>



































