<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/6
 * Time: 21:32
 */

namespace App\Http\Controllers\Auth\Manager;

class NavAuthController extends BaseAuthController
{
    protected $rules = [
        'name' => 'required|uniqueCommon:nav',
    ];

    protected $message = [
        'required' => '请输入:attribute',
        'unique_common' => ':attribute已经存在',
    ];

    protected $customAttributes = [
        'name' => '分类名称',
    ];
}
