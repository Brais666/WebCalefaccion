<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
            'name' => $this->name,
            'dni' => $this->dni,
            'surname' => 'test',
            'address' => $this->address,
            'localidad' => $this->localidad,
            'provincia' => $this->provincia,
            'postCode' => (string)$this->CP,
            'telephone' => (string)$this->telefono,
        ];
    }
}
