<?php
/**
 * Created by PhpStorm.
 * User: carlos
 * Date: 7/29/14
 * Time: 1:57 PM
 */
namespace InvoiceSystemRepository;
use User;

class EloquentUserRepository implements UserRepository
{

    public function all()
    {

        return User::all();
    }

    public function find($id)
    {
        return User::find($id);

    }

    public function create($data)
    {
        return User::create($data);
    }

    public function findOrFail($id)
    {
        return User::findOrFail($id);
    }
}