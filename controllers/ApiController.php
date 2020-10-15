<?php


namespace app\controllers;


class ApiController extends SiteController
{
    public function actionDisplay()
    {
        return $this->render('post');
    }
}