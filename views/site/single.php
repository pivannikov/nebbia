<?php

use yii\helpers\Url;

?>
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="blog-area">
                    <div class="blog-area-part">
                        <h2><?= $article->title; ?></h2>
                        <div>
                            <img src="<?= $article->getImage(); ?>" alt="" width="500">
                        </div>
                        <div class="single-content">
                            <div>
                                <span>
                                    <? foreach ($tags as $tag):?>
                                        <a href="<?= Url::toRoute(['site/tag', 'id' => $article->id]) ?>" class="btn btn-default"><?= $tag->title;?></a>
                                    <? endforeach;?>
                                </span>
                                <br>
                            </div>
                            <p><?= $article->content; ?></p>
                            <span><?= $article->date; ?></span>
                        </div>
                    </div>

                    <div class="commententries">
                        <h3>Comments</h3>

                        <ul class="commentlist">
                            <li>
                                <article class="comment">
                                    <header class="comment-author">
                                        <img src="img/author-1.jpg" alt="">
                                    </header>
                                    <section class="comment-details">
                                        <div class="author-name">
                                            <h5><a href="#">Selina Gomez</a></h5>
                                            <p>February 25 2017</p>
                                        </div>
                                        <div class="comment-body">
                                            <p>is simply dummy text of the printing and typesetting industry.
                                                Lorem Ipsum has been the industry's standard </p>
                                        </div>
                                    </section>
                                </article>
                            </li>
                        </ul>

                    </div>

                    <form action="#" method="get">
                        <div class="name">
                            <input type="text" name="" id="" placeholder="Name" class="name">
                        </div>
                        <div class="email">
                            <input type="email" name="" id="" placeholder="Email" class="email">
                        </div>
                        <div class="comment">
                            <input type="text" name="" id="" placeholder="Comment" class="comment">
                        </div>
                        <div class="post">
                            <input type="submit" value="Post">
                        </div>
                    </form>

                </div>
            </div>
        </div>



