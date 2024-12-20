<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::all();
        return view("roles.index", compact("roles"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // % restituisco un form VUOTO da popolare
        return view("roles.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoleRequest $request)
    {
        $formData = $request->validate();
        $role = Role::create($formData);
        return redirect()->route("role.show", [ "id" => $role->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $role = Role::findOrFail($id);
        return view("roles.show", compact("role"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, string $id )
    {

        $role = Role::findOrFail($id);
        return view("roles.edit", compact("role"));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoleRequest $request, string $id)
    {
        $formData = $request->validate();
        $role = Role::findOrFail($id);

        $role->update($formData);

        return redirect()->route("role.show", [ "id" => $role->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $role = Role::findOrFail($id);
        $role->delete();
        return redirect()->route("role.index");
    }

}
