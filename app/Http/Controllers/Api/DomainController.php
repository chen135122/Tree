<?php

namespace App\Http\Controllers\Api;

use App\Models\Domain;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DomainController extends ApiController
{
    public function index(Request $request)
    {
        $limit = $request->input('limit', 10);

        // 要显示的菜单
        $query = (new Domain())->newQuery()->latest();

        // 是否有查询
        if ($request->has('wd')) {
            $wd = $request->input('wd');
            $query->where('name', 'like', "%{$wd}%")
                ->orWhere('id', 'like', "%{$wd}%")
                ->orWhere('description', 'like', "%{$wd}%");
        }

        $roles = $query->paginate($limit);

        return $this->setExtendField('count', $roles->total())
            ->setData($roles->all())
            ->toJson();
    }
}
