<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\DomainRequest;
use App\Models\Domain;
use App\Http\Controllers\Controller;
use App\Models\Field;
use Illuminate\Support\Facades\Auth;

class DomainController extends Controller
{

    public function index()
    {
        $language = 'zh';
        // 要显示的菜单
        $roles_field = Field::where('table_name', 'domains')->get();

        $fields = [];
        foreach ($roles_field as $field) {
            $fields[] = [
                'id' => $field->id,
                'field_name' => $field->field_name,
                'title' => json_decode($field->json_data)->$language,
                'checked' => $field->users()->where('id', Auth::id())->exists()
            ];
        }


        return view('admin.domains.index', compact('fields'));
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
        // 移除所有用户所在的这个部门
        $domain->users()->detach();
        // 其他产品有可能有区域这个字段，以后加上验证

        if ($domain->delete()) {
            return ['msg' => '删除成功', 'code' => 200];
        } else {
            return ['msg' => '删除失败', 'code' => 401];
        }
    }
}
