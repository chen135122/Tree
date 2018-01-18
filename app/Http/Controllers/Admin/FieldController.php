<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Api\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FieldController extends ApiController
{
    public function toggleField(Request $request)
    {
        $id = $request->input('id');

        Auth::user()->fields()->toggle($id);

        return $this->toJson();
    }
}
