<?php
/**
 * Created by PhpStorm.
 * User: lidia
 * Date: 02/03/17
 * Time: 17:08
 */

use yii\helpers\Html;
use yii\widgets\LinkPager;
use app\models\Section;

$this->title = Html::encode("{$news-> title}");
?>

<div class="row">
    <div class="col-md-12">
        <div class="col-md-2">
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
        </div>
        <div class="col-md-10">
            <h1>Статья успешно удалена! </h1>
            <?= Html::a('На главную', ['news/index'], ['class'=>'aqua']) ?>
            <br class="jumbotron">


            <div class = "story_content">


            </div>
        </div>
    </div>
