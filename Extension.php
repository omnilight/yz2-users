<?php

namespace yz\users;


/**
 * Class Extension
 */
class Extension extends \yii\base\Extension
{
	public static function init()
	{
		parent::init();

		\Yii::$app->i18n->translations['yz/users'] = [
			'class' => 'yii\i18n\PhpMessageSource',
			'basePath' => '@yz/users/messages',
			'sourceLanguage' => 'en-US',
		];
	}

} 