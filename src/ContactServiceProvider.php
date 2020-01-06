<?php
namespace Itobaz\Contact;
use Carbon\Laravel\ServiceProvider;

class ContactServiceProvider extends ServiceProvider{

    public function boot(){
      $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }
    public function register(){
        
    }

}