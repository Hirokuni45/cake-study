<?php

class AdminAppController extends AppController {

  public function beforeFilter(){
    $this->layout = 'admin';
    $this->Auth->deny();
  }

}
