<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\GuardRequest;
use App\Models\Guard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GuardController extends Controller
{

    public function index()
    {
        return view('admin.guards.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.guards.create');
    }


    public function store(GuardRequest $request)
    {
        $data = $request->only(['name', 'description', 'user_id']);

        Guard::create($data);

        return back()->with('status', '创建成功');
    }


    public function show(Guard $guard)
    {
        return view('admin.guards.show', compact('guard'));
    }


    public function edit(Guard $guard)
    {
        return view('admin.guards.edit', compact('guard'));
    }


    public function update(GuardRequest $request, Guard $guard)
    {
        $data = $request->only(['name', 'description', 'user_id']);

        $guard->update($data);

        return back()->with('status', '修改成功');
    }

    public function destroy(Guard $guard)
    {
        $guard->delete();

        return back()->with('status', '删除成功');
    }
}
