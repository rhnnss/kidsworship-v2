<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GCPResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'image' => $this->commonTime->AllAsset->image,
            'name' => $this->name,
            'description' => $this->description,
            'common_time' => [
                'id' => $this->commonTime->id,
                'name' => $this->commonTime->name,
                'startTime' => $this->commonTime->startTime,
                'endTime' => $this->commonTime->endTime,
            ],
            'date' => $this->date,
            'created_time' => $this->created_time,
            'created_at' => $this->created_at
        ];
    }
}
