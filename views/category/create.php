<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h2 class="page-header">Categories</h2>

<ul class="list-group">
  <?php foreach($categories as $category) : ?>
    <li><?php echo $category->name; ?></li>
  <?php endforeach; ?>

</ul>
