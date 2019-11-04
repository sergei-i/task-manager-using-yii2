<?php

namespace app\modules\admin\controllers;

use app\models\MyList;
use yii\web\Controller;
use Yii;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $tasks = MyList::getAll();
        return $this->render('index', ['tasks' => $tasks]);
    }

    public function actionEdit($id)
    {
        $task = MyList::getOne($id);

        if ($_POST['MyList']) {
            /*$task->title = $_POST['MyList']['title'];
            $task->description = $_POST['MyList']['description'];*/
            $task->attributes = $_POST['MyList'];
            if ($task->validate() && $task->save()) {
                return $this->redirect(['index']);
            }
        }

        return $this->render('edit', ['task' => $task]);
    }

    public function actionCreate()
    {
        $task = new MyList();

        if ($_POST['MyList']) {
            $task->title = $_POST['MyList']['title'];
            $task->description = $_POST['MyList']['description'];
            if ($task->validate() && $task->save()) {
                return $this->redirect(['index']);
            }
        }

        return $this->render('create', ['task' => $task]);
    }

    public function actionDelete($id)
    {
        $model = MyList::getOne($id);
        if ($model != null) {
            $model->delete();
        }
        return $this->redirect(['index']);
    }
}
