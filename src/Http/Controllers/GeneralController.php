<?php
/**
 * Created by PhpStorm.
 * User: Manuk Minasyan
 * Date: 01/02/2019
 * Time: 22:25.
 */

namespace ManukMinasyan\LaravelPermissionManager\Http\Controllers;

use App\Http\Controllers\Controller;
use ManukMinasyan\LaravelPermissionManager\Traits\PermissionManagerTrait;

class GeneralController extends Controller
{
    use PermissionManagerTrait;

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('laravel-permission-manager::index');
    }
}
