<?php

namespace Admin\Controller;

// use Admin\Model\User\UserRepository;

class DashboardController extends AdminController
{
    public function index()
    {
        $userModel = $this->load->model('User');

        $userModel->repository->test();
        
        $this->view->render('dashboard');
    }
}