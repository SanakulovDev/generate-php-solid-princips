<?php
namespace app\repositories;

use app\models\<?= $className ?>;

class <?= $className ?>Repository
{
    public function getAll()
    {
        return <?= $className ?>::find()->all();
    }

    public function getById($id)
    {
        return <?= $className ?>::findOne($id);
    }

    public function save(<?= $className ?> $model)
    {
        return $model->save();
    }
}
