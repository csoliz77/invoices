<?php
/**
 * Created by PhpStorm.
 * User: carlos
 * Date: 7/28/14
 * Time: 11:46 AM
 */

class Item extends Eloquent {

    protected $table = 'items';

    public function invoice(){

        return $this->belongsTo('Invoice');
    }
}