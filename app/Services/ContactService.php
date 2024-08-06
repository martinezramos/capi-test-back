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
        $this->syncPhones($data, $request);
        $this->syncAddresses($data, $request);
        $this->syncEmails($data, $request);
    }

    public function syncPhones($data, $request) {
        if ($request['phones'] ?? false) {
            $data->phones()->delete();
            $phones = [];
            foreach ($request['phones']  as $key => $phone) {
                $phones[] = [
                    'contact_id' => $data->id,
                    'phone_number' => $phone['phone_number'],
                ];
            }
            $data->phones()->insert($phones);
        }
    }

    public function syncAddresses($data, $request) {
        if ($request['addresses'] ?? false) {
            $data->addresses()->delete();
            $addresses = [];
            foreach ($request['addresses']  as $key => $phone) {
                $addresses[] = [
                    'contact_id' => $data->id,
                    'address' => $phone['address'],
                ];
            }
            $data->addresses()->insert($addresses);
        }
    }

    public function syncEmails($data, $request) {
        if ($request['emails'] ?? false) {
            $data->emails()->delete();
            $emails = [];
            foreach ($request['emails']  as $key => $phone) {
                $emails[] = [
                    'contact_id' => $data->id,
                    'email' => $phone['email'],
                ];
            }
            $data->emails()->insert($emails);
        }
    }

}
