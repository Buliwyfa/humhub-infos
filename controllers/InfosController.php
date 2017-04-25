<?php
/**
 * File : humhub / ContainerController.php
 * User : Matthieu SCHMIT
 * Date : 28/04/17
 * Time : 02:50
 */

namespace humhub\modules\infos\controllers;

use \humhub\components\Controller;

class InfosController extends Controller {

    public function actionIndex() {
        return $this->renderAjax('index', []);
    }

    public function actionNewinfo() {
        return $this->renderAjax('newinfo');
    }
  
}

