<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VansResource extends JsonResource {
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
   */
  public function toArray($request) {
    return [
      'name' => $this->name,
      'rate' => $this->rate,
      'category' => $this->category,
      'description' => $this->description,
      'owner' => $this->owner,
      'image' => $this->image,
    ];
  }
}
