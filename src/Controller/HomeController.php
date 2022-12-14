<?php

namespace App\Controller;

use App\Controller\AppController;


class HomeController extends AppController
{
    /** CONSTRUCTOR */
    public function initialize()
    {
        parent::initialize();
        $this->viewBuilder()->layout('landPageLayout');
    }

    public function landPage()
    {
    }
}
