<?php
/**
 * File : humhub / InfosWidgets.php
 * User : Matthieu SCHMIT
 * Date : 26/04/17
 * Time : 21:54
 */

namespace humhub\modules\infos\widgets;

use humhub\modules\infos\models\Edit;

class InfosWidget extends \humhub\components\Widget {

    
    public function run() {
        $info = new Edit();
        $title = $info->title;
        $message = $info->message;
        if ($info->active) {
            return $this->render('infos', [
                'title' => $title,
                'message' => $message]);
        } else {
            return;
        }
    }

}
