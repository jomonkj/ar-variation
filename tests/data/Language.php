<?php

namespace yii2tech\tests\unit\ar\variation\data;

use yii\db\ActiveRecord;

/**
 * @property int $id
 * @property string $name
 * @property string $locale
 */
class Language extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Language';
    }
}