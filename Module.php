<?php

namespace yz\users;

/**
 * Class Module
 * @package yz\users
 */
class Module extends \yz\Module
{
	/**
     * @inheritdoc
     */
	public function getName()
	{
		return \Yii::t('yz/users', 'Users');
	}

	/**
     * @inheritdoc
     */
	public function getDescription()
	{
		return \Yii::t('yz/users', 'User management module');
	}

	/**
     * @inheritdoc
     */
	public function getIcon()
	{
		return \yz\icons\Icons::o('people');
	}

	/**
     * @inheritdoc
     */
    public function getRoutes()
    {
        switch(true) {
            default:
            case YZ_APP_TYPE_FRONTEND:
                return [];
            case YZ_APP_TYPE_BACKEND:
                return [];
            case YZ_APP_TYPE_CONSOLE:
                return [];
        }
    }

	public function init()
	{
		parent::init();

		// custom initialization code goes here
	}
}
