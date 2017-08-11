<?php

App::uses('AdminAppController', 'Controller/Admin');

class UsersController extends AdminAppController{

  public function beforeFilter(){
    parent::beforeFilter();
    $this->layout = 'default';
    $this->Auth->allow('admin_add','admin_logout');
    #if($this->action == 'admin_login' || $this->action == 'admin_logout'){
    #}else{
    #  if($this->userRow['User']['role'] != 'administrator') throw new MethodNotAllowedException();
    #}
  }



  public function admin_add(){
    if($this->request->is('get')){ return; }
    if ($this->User->save($this->request->data)) {
      return $this->redirect(['action'=>'admin_login']);
    }
  }

  public function admin_login(){
    if($this->request->is('get')){ return; }
    if($this->request->is('post')){
      if($this->Auth->login()){
        $this->redirect($this->Auth->redirect());
      } else {
        echo ('失敗しました');
      }

    }

  }

}
