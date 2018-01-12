<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipes extends Model
{
    protected $fillable=['user_id','vegan','cashrout','difficulty
    ','holidays','cost','time','ingredients','recipe',
        'country','reply','picture'];
}
