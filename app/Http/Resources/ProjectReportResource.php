<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProjectReportResource extends JsonResource
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
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'date_start' => $this->date_start,
            'date_end' => $this->date_end,
            'project_review'=> $this->project_review,
            'project_goal'=> $this->project_goal,
            'supervisors' => SupervisorExpertResource::collection($this->whenLoaded('supervisors')),
            
        ];
    }
}
