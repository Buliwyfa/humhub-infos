<?php
/**
 * File : humhub / Modules.php
 * User : Matthieu SCHMIT
 * Date : 26/04/17
 * Time : 18:33
 */

namespace humhub\modules\infos;

use yii;
use yii\helpers\Url;

class Module extends \humhub\components\Module {

    public $isCoreModule = true;

    /*
     * Add the panel on the sidebar
     */
    public static function onDashboardSidebarInit($event) {
        if (Yii::$app->user->isGuest) {
            return;
        }
        $event->sender->addWidget(widgets\InfosWidget::className(), [], ['sortOrder' => 1]);
    }
  
    /*
     * Add the item on the topmenu
     */
    public static function onTopMenuInit($event) {
        if (Yii::$app->user->isGuest) {
            return;
        }
        $event->sender->addItem([
            'label' => 'Infos',
            'url' => Url::to(['/infos/infos/index']),
            'icon' => '<i class="fa fa-info"></i>',
            'isActive' => (Yii::$app->controller->module && Yii::$app->controller->module->id == 'infos'),
            'sortOrder' => 500
        ]);
    }

}
