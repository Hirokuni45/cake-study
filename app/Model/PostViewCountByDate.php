<?php

class PostViewCountByDate extends AppModel {

  public $useTable = 'post_view_count_by_date';
  public $belongsTo = ['Post'];

}
