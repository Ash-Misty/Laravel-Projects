<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray( $request): array
    {
        return [
            'id'=>(string)$this->id,
             'attributes'=>[
                 'register_number'=>(string)$this->register_no,
                'department'=>(string)$this->department
             ],
            'relationships'=>[
                'name'=>$this->name,
               'email'=>$this->email
            ],
        ];
    }
}
