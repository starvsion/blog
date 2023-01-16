<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ContactMe extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request): array
    {
        return
           [
               'id'         => $this->id,
               'name'       => $this->name,
               'email'      => $this->email,
               'message'    => $this->message,
               'created_at' => $this->created_at->toDateString(),
               'status'     => empty($this->read_at)
                   ? 'New'
                   : 'Read',
           ];
    }
}
