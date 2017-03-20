<?php
use yii\widgets\LinkPager;

/* @var $this \luya\web\View */
/* @var $provider \yii\data\ActiveDataProvider */
?>
<?php foreach($provider->models as $item): ?>
    <div class="well">
    <?php /* @var $item \luya\news\models\Article */ ?>
    <h2><?= $item->title; ?></h2>
    <div class="row">
        <div class="col-md-8">
            <?= $item->text; ?>
        </div>
        <div class="col-md-4">
            <?php if (($image = Yii::$app->storage->getImage($item->image_id))): ?>
            <img src="<?= $image->source; ?>" class="img-responsive" />
            <?php endif; ?>
        </div>
    </div>
    <p>
        <a href="<?= $item->detailUrl; ?>">Detail</a>
    </p>
    </div>
<?php endforeach; ?>

<?= LinkPager::widget(['pagination' => $provider->pagination]); ?>
