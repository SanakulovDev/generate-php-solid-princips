<?php

namespace mynamespace;

class MyYii2Generators
{
    /**
     * Yii2 Gii generatorlarini ro'yxatga olish uchun yordamchi metod.
     * Bu metod Yii konfiguratsiya faylida chaqirilishi mumkin.
     */
    public static function registerGenerators()
    {
        return [
            'crud' => [
                'class' => 'mynamespace\generators\crud\Generator',
            ],
        ];
    }
}
