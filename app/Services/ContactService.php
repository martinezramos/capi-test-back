<?php

namespace App\Services;

class ContactService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function update($data, $request) {
        if ($request['phones'] ?? false) {
            $data->phones->sync();
        }
    }
}
