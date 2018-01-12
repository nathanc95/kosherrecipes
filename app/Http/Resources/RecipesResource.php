<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class RecipesResource extends Resource
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
            'id'=>$this->id,
            'user_id'=>$this->user_id,
            'vegan'=>$this->vegan,
            'cashrout'=>$this->cashrout,
            'difficulty'=>$this->difficulty,
            'holidays'=>$this->holidays,
            'cost'=>$this->cost,
            'time'=>$this->time,
            'ingredients'=>$this->ingredients,
            'recipe'=>$this->recipe,
            'country'=>$this->country,
            'reply'=>$this->reply,
            'picture'=>$this->picture,
            'created_at'=>$this->created_at,
            'updated_at'=>$this->updated_at

        ];
    }
}
