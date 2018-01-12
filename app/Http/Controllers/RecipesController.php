<?php

namespace App\Http\Controllers;

use App\Http\Resources\RecipesAll;
use App\Http\Resources\RecipesResource;
use App\Recipes;
use Illuminate\Http\Request;

class RecipesController extends Controller
{
        public function index(Recipes $recipes){
            return new RecipesAll($recipes::all());
        }

        public function show(Recipes $recipes){
            return $recipes;
        }

        public function store(Request $request){
            $recipe=Recipes::create($request->all());
            return response()->json($recipe,201);
        }

        public function update(Request $request,Recipes $recipes){
            $recipes->update($request->all());
            return response()->json($recipes,200);
        }

        public function delete(Recipes $recipes){
            $recipes->delete();
            return response()->json(null,204);
        }


}
