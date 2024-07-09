<?php
namespace app\factories;

use app\models\<?= $className ?>;

class <?= $className ?>Factory
{
    public function create(array $attributes)
    {
        $model = new <?= $className ?>();
        $model->attributes = $attributes;
        return $model;
    }
}
