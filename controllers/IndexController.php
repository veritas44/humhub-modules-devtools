<?php

namespace humhub\modules\devtools\controllers;

use Yii;

/**
 * Defines the configure actions.
 *
 * @package humhub.modules.birthday.controllers
 * @author Sebastian Stumpf
 */
class IndexController extends \humhub\components\Controller
{
    
    public $subLayout = "@humhub/modules/devtools/views/index/_layout";

    /**
     * Configuration Action for Super Admins
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

}

?>
