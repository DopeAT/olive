<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::withTranslation()->translatedIn(app()->getLocale())->get();

        return view('admin.roles.index', [
            'roles' => $roles
        ]);
    }
}
