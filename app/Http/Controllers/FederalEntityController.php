<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FederalEntity;
use Illuminate\Support\Facades\DB;

class FederalEntityController extends Controller
{
    public function FederalEntities(){
        $FederalEntities = FederalEntity::all()->where('Deleted', 0);
        return $FederalEntities;
    }

    public function GetAFederalEntity(Request $request){
        $name = $request->query('Name', null);
        $active = $request->query('Active');

        $feredalEntities = FederalEntity::when($name, function($query, $name){
                return $query->where('name', $name);
            })
            ->when($active, function($query, $active) {
                return $query->where('active', $active);
            })
            ->where('Deleted', 0)
            ->get();
        
        return $feredalEntities;
        // return "hola";
    }
}
