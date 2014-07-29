<?php
/**
 * Created by PhpStorm.
 * User: carlos
 * Date: 7/29/14
 * Time: 1:39 PM
 */

namespace InvoiceSystemRepository;

interface UserRepository
{
    public function all();
    public function find($id);
    public function create($input);

}