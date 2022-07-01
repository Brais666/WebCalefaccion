<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Pedido extends JsonResource
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
            'telephone' => $this->telefono,
            'address' => $this->address,
            'town' => $this->town,
            'dni' => $this->dni,
            'localidad' => $this->localidad,
            'provincia' => $this->provincia,
            'postCode' => (string)$this->CP,
            'telephone' => (string)$this->telefono,
        ];
    }
}
