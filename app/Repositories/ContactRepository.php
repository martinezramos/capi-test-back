<?php

namespace App\Repositories;

use App\Interfaces\ContactRepositoryInterface;
use App\Models\Contact;

class ContactRepository implements ContactRepositoryInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function index(){
        return Contact::all();
    }

    public function getById($id){
       return Contact::findOrFail($id);
    }

    public function store(array $data){
       return Contact::create($data);
    }

    public function update(array $data,$id){
       return Contact::whereId($id)->update($data);
    }

    public function delete($id){
       Contact::destroy($id);
    }


}
