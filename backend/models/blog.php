<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "blog".
 *
 * @property integer $id
 * @property string $titulo
 * @property string $contenido
 * @property integer $publicar
 * @property string $imagen
 */
class blog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blog';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['titulo', 'contenido', 'publicar', 'imagen'], 'required'],
            [['contenido'], 'string'],
            [['publicar'], 'integer'],
            [['titulo'], 'string', 'max' => 100],
            [['imagen'], 'string', 'max' => 11],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'titulo' => 'Titulo',
            'contenido' => 'Contenido',
            'publicar' => 'Publicar',
            'imagen' => 'Imagen',
        ];
    }
}
