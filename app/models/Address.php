<?php
/**
 * Created by PhpStorm.
 * User: carlos
 * Date: 7/28/14
 * Time: 11:47 AM
 */

class Address extends Eloquent {

    protected $table = 'address';

    public function users(){

        return $this->belongsTo('User');
    }

}