<?php
/**
 * Created by PhpStorm.
 * User: carlosocarvalho
 * Date: 16/07/2015
 * Time: 02:39
 */

namespace carlosocarvalho\Disqus;


class Disqus {


    private static $shortname = 'blog';

    function __construct(){
      $CI =& get_instance();
      $CI->config->load('disqus',TRUE);
      $config = $CI->config->item('disqus');
      self::$shortname = $config['disqus']['disqus_name'];
    }

    static function render(){
       new Disqus();
       return self::view('disqus',['disqus_name'=>self::$shortname]);
    }


    protected static function view($view, $data){
        extract($data);
       require_once __DIR__.'/views/'.$view.'.php';
    }



}