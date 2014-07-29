<?php
/**
 * Created by PhpStorm.
 * User: carlos
 * Date: 7/28/14
 * Time: 11:45 AM
 */

class Invoice extends Eloquent {

    protected $table = 'invoice';


    public function items() {

        return $this->hasMany('Item');
    }

    public function user(){
        return $this->belongsTo('User');
    }

} 