<?php

class AdminAppController extends AppController {

  public function beforeFilter(){
    $this->layout = 'admin';
    $this->Auth->deny();

    $user = $this->Auth->user();
    $this->set(compact('user'));
  }

}
