<?php

namespace app\generators\crud;

use Yii;
use yii\gii\CodeFile;
use yii\gii\generators\model\Generator as BaseGenerator;

class Generator extends BaseGenerator
{
    public $templates = [
        'default' => '@vendor/mynamespace/my-yii2-generators/src/generators/crud/default',
    ];

    public function generate()
    {
        $files = parent::generate();

        $className = $this->modelClass;
        $baseName = basename(str_replace('\\', '/', $className));

        // Repository
        $files[] = new CodeFile(
            Yii::getAlias('@app/repositories/' . $baseName . 'Repository.php'),
            $this->render('repository.php', ['className' => $baseName])
        );

        // Factory
        $files[] = new CodeFile(
            Yii::getAlias('@app/factories/' . $baseName . 'Factory.php'),
            $this->render('factory.php', ['className' => $baseName])
        );

        // Service
        $files[] = new CodeFile(
            Yii::getAlias('@app/services/' . $baseName . 'Service.php'),
            $this->render('service.php', ['className' => $baseName])
        );

        return $files;
    }
}
