<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<div class="row">
    <div class="col-xs-9"></div>
    <div class="col-xs-4">
        <?php foreach ($sectionview as $view): ?>

            <?php if ($view->level ==1):?>
                <h3><a href=""> <?=Html::encode("{$view->title}")?><br/></a></h3>
            <?php else : ?>
                <?php if ($view->level ==2):?>
                    <h4><a href=""> ---- <?=Html::encode("{$view->title}")?><br/> </a></h4>
                <?php else :?>
                    <a href=""> ---------- <?=Html::encode("{$view->title}")?><br/> </a>
                <?php endif; ?>
            <?php endif; ?>


        <?php endforeach; ?>
    </div>
    <div class="col-xs-6">
        <h1>Добавление новости </h1>
        <?php $form = ActiveForm::begin(); ?>


        <?= $form->field($model,'title')->textInput()->label('Введите заголовок новости:'); ?>
        <?= $form->field($model,'abstract')->label('Введите кратокое содержание новости:'); ?>
        <?= $form->field($model,'text')->label('Введите текст новости:'); ?>

        <div class="form-group">
            <?= Html::submitButton('Отправить',['class'=>'btn bth-primary']) ?>

        </div>


    </div>
</div>




<?php ActiveForm::end(); ?>

