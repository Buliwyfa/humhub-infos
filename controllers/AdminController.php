<?php
/**
 * File : humhub / DefaultController.php
 * User : Matthieu SCHMIT
 * Date : 26/04/17
 * Time : 18:35
 */

namespace humhub\modules\infos\controllers;

use Yii;
use humhub\modules\admin\components\Controller;
use humhub\modules\infos\models\Edit;

class AdminController extends Controller {

    /**
     *
     */
    public function actionIndex() {
        $form = new Edit();
        if ($form->load(Yii::$app->request->post()) && $form->validate() && $form->save()) {
            return $this->redirect(Url::to(['/infos/admin/index']));
        }
        return $this->render('index', ['model' => $form]);
    }
}
