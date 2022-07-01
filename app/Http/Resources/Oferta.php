<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Oferta extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $image =  url('/images/' . $this->image);
        // dd($image);
        return [
            'id' => $this->id,
            'oferta' => $this->oferta,
            'fecha_ini' => $this->fecha_ini,
            'fecha_fin' => $this->fecha_fin,
            'tipo' => $this->tipo,
            'link' => $this->link,
            'image' => asset('/images/banner3-2.jpg'),
        ];
    }
}
