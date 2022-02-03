<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BebaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'Ime: ' => $this->resource->ime,
            'Prezime: ' => $this->resource->prezime,
            'Tezina: ' => $this->resource->tezina,
            'Doktor: ' => new DoktorResource($this->resource->doktor)
        ];
    }
}
