<?php

class Category extends AppModel {

  public $useTable = 'categories';
  public $hasMany = ['Post'];

}
