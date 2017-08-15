<?php

  App::import('Lib', 'Feed');

  class RssShell extends AppShell{

    public $uses = ['Post'];

    const RSS_URL = 'https://headlines.yahoo.co.jp/rss/abema-c_int.xml';

    public function main(){

      $results = Feed::load('https://headlines.yahoo.co.jp/rss/abema-c_int.xml');
      #$tmpArray = json_decode(json_encode($results), true);
      #ob_start();
      #new dBug($tmpArray);
      #$out = ob_get_contents();
      #ob_end_clean();
      #$path = WWW_ROOT . 'shell.html';
      #file_put_contents($path, $out);
      #exit;
      foreach($results["channel"]['item'] as $item){
        #$this->Post->save($item);
        var_dump($item);
      }


    }

  }
