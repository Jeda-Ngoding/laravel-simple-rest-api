<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{

    public $status;
    public $messages;
    public $data;

    public function __construct($status, $messages,$data)
    {
        $this->status = $status;
        $this->messages = $messages;
        $this->data = $data;
    }

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'success'   => $this->status,
            'message'   => $this->messages,
            'data'      => $this->data
        ];
    }
}
