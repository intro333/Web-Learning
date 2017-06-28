<?php

use Presenter;

class ApiPresenter extends Presenter 
{
    public function fullName()
    {
        return trim($this->model->full_name . ' ' . $this->model->last_name);
    }

    public function createdAt()
    {
        return $this->model->created_at;
    }

    public function isActive()
    {
        return (bool) $this->model->is_active;
    }

//    public function role()
//    {
//        if ($this->model->is_admin) {
//            return 'Admin';
//        }
//
//        return 'User';
//    }
}

$presenter = new ApiPresenter(new Model());;