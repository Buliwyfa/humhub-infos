<?php
/**
 * File : humhub / Edit.php
 * User : Matthieu SCHMIT
 * Date : 26/04/17
 * Time : 18:39
 */

namespace humhub\modules\infos\models;

use yii;

class Edit extends yii\base\Model {

    public $active;
    public $title;
    public $message;

    public function init() {
        $settings = Yii::$app->getModule('infos')->settings;
        $this->title = $settings->get('title');
        $this->message = $settings->get('message');
        $this->active = $settings->get('active');
    }

    /**
     * Declares the validation rules.
     */
    public function rules() {
        return array(
            array(['title', 'message'], 'required'),
            array(['active'], 'safe')
        );
    }

    /**
     * Declares customized attribute labels.
     * If not declared here, an attribute would have a label that is
     * the same as its name with the first letter in upper case.
     */
    public function attributeLabels() {
        return array(
            'active' => Yii::t('InfosModule.forms_InfosEdit', 'Active'),
            'title' => Yii::t('InfosModule.forms_InfosEdit', 'Title'),
            'message' => Yii::t('InfosModule.forms_InfosEdit', 'Message'),
        );
    }

    /**
     * Saves the given form settings.
     */
    public function save() {
        $module = Yii::$app->getModule('infos');
        $module->settings->set('title', $this->title);
        $module->settings->set('message', $this->message);

        if ($this->active) {
            $module->settings->set('active', true);
        } else {
            $module->settings->set('active', false);
        }
    }
}
