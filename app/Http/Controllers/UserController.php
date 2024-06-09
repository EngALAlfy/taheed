<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(25);
        return view("admin.users.index", compact("users"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.users.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        $data = $request->validated();

        if (isset($data["password"])) {
            $data["password"] = Hash::make($data["password"]);
        }


        User::create($data);

        flash()->success(__('Users') . ": " . __("created successfully"));
        return redirect()->route("admin.users.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view("admin.users.show", compact("user"));
    }

    public function profile()
    {
        $user = auth()->user();
        return view("admin.users.profile", compact("user"));
    }

    public function editProfile()
    {
        $user = auth()->user();
        return view("admin.users.edit", compact("user"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view("admin.users.edit", compact("user"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $data = $request->validated();


        if (isset($data["password"])) {
            $data["password"] = Hash::make($data["password"]);
        } else {
            unset($data["password"]);
        }

        $user->update($data);
        flash()->success(__('Users') . ": " . __("updated successfully"));
        return redirect()->route("admin.users.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        DB::beginTransaction();
        $user->delete();
        DB::commit();
        flash()->success(__('Users') . ": " . __("deleted successfully"));
        return redirect()->route("admin.users.index");
    }
}
