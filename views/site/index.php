<?php

use yii\helpers\Url;
use yii\widgets\LinkPager;
?>
<div class="row">
    <div class="col-md-12">
        <?php foreach ($articles as $article): ?>
            <div class="card mb-3">
                <div class="row">
                    <div class="col-md-4">
                        <a href="<?= Url::toRoute(['site/view', 'id' => $article->id]); ?>"><img src="<?= $article->getImage(); ?>" width="350"></a>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <a href="<?= Url::toRoute(['site/view', 'id' => $article->id]); ?>"><h5 class="card-title"><?= $article->title; ?></h5></a>
                            <p class="card-text"><?= $article->description; ?></p>
                            <p class="card-text"><small class="text-muted">Posted: <?= $article->date; ?></small></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php
    echo LinkPager::widget([
        'pagination' => $pagination,
    ]);
?>