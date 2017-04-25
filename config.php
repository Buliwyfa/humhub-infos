<?php
/**
 * File : humhub / config.php
 * User : Matthieu SCHMIT
 * Date : 26/04/17
 * Time : 19:17
 */

use humhub\modules\dashboard\widgets\Sidebar;
use humhub\widgets\TopMenu;

return [
    'id' => 'infos',
    'class' => 'humhub\modules\infos\Module',
    'namespace' => 'humhub\modules\infos',
    'events' => [
        ['class' => Sidebar::className(), 'event' => Sidebar::EVENT_INIT, 'callback' => ['humhub\modules\infos\Module', 'onDashboardSidebarInit']],
        ['class' => TopMenu::className(), 'event' => TopMenu::EVENT_INIT, 'callback' => ['humhub\modules\infos\Module', 'onTopMenuInit']],
    ],
];
