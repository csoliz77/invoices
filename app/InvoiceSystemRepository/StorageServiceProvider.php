<?php
/**
 * Created by PhpStorm.
 * User: carlos
 * Date: 7/29/14
 * Time: 2:05 PM
 */
namespace InvoiceSystemRepository;
use Illuminate\Support\ServiceProvider;

class StorageServiceProvider extends ServiceProvider {

    public function register(){
        $this->app->bind(
            'InvoiceSystemRepository\UserRepository',
            'InvoiceSystemRepository\EloquentUserRepository'
        );
    }
} 