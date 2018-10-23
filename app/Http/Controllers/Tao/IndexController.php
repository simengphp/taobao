<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/6
 * Time: 10:16
 */

namespace App\Http\Controllers\Tao;

use App\Model\Tao\ClassName;

class IndexController extends BaseController
{
    public function index()
    {
        $class_list = (new ClassName())->classList();
        return view('tao.index.index', ['class_list'=>$class_list]);
    }
}
