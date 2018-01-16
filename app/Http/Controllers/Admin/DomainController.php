<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\DomainRequest;
use App\Models\Domain;
use App\Http\Controllers\Controller;

class DomainController extends Controller
{

    public function index()
    {
        $domains = Domain::latest()->get();

        return view('admin.domains.index', compact('domains'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.domains.create');
    }


    public function store(DomainRequest $request)
    {
        $data = $request->only(['name', 'description']);

        Domain::create($data);

        return back()->withErrors(['name' => '添加成功']);
    }

    public function edit(Domain $domain)
    {
        return view('admin.domains.edit', compact('domain'));
    }


    public function update(DomainRequest $request, Domain $domain)
    {
        $data = $request->only(['name', 'description']);
        $domain->update($data);

        return back()->withErrors(['name' => '修改成功']);
    }

    public function destroy(Domain $domain)
    {
        // 删除之前验证是否用用户存在这个部门
        $domain->delete();

        return back()->with('status', '删除成功');
    }
}
