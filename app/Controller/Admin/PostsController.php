<?php

App::uses('AdminAppController', 'Controller/Admin');

class PostsController extends AdminAppController{

  public function admin_index(){}


  public function admin_logout(){
    $this->Auth->logout();
    $this->redirect(['action' => 'admin_index']);
  }

}
