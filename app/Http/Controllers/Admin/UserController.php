<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUsers;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $service;

    public function __construct(UserService $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        $users = $this->service->getAll(
            filter: $request->get('filter', '')
        );
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(StoreUsers $request)
    {
        $this->service->create($request->validated());
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
    public function edit(string $id)
    {
        if(!$user = $this->service->findById($id))
            redirect()->back();
        return view('admin.users.edit',compact('user'));
    }
    public function update(Request $request, string $id)
    {
        dd($request->all());
    }
    public function destroy(string $id)
    {
        //
    }
}
