<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function getOwners()
    {
        $owners = Owner::query()
            ->get();

        return response()->json($owners);
    }
    
    public function createOwner(Request $request)
    {
        $owner = Owner::create($request->all());

        return response()->json($owner, 201);
    }
    
    public function updateOwner(Owner $owner, Request $request)
    {
        $owner->update($request->all()); // method1
        
        //method 2
        $owner->fill($request->all()); // nincs mentve
        $owner->save(); // ment

        //method 3
        $owner->name = $request->get("name");
        $owner->save();

        return response()->json($owner);
    }
    
    public function deleteOwner(Owner $owner)
    {
        $owner->delete();

        return response()->json("", 204);
    }
}
