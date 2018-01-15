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
        $guards = Guard::latest()->get();


        return view('admin.guards.index', compact('guards'));
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
        // 删除之前验证是否用用户存在这个部门
        $guard->delete();

        return back()->with('status', '删除成功');
    }
}
