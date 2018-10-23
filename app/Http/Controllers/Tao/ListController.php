<?php
    /**
     * Created by PhpStorm.
     * User: Administrator
     * Date: 2018/10/23
     * Time: 16:11
     */

namespace App\Http\Controllers\Tao;


class ListController extends BaseController
{
    public function goodsList()
    {
        return view('tao.list.list');
    }

    public function goodsDetail()
    {
        return view('tao.detail.detail');
    }
}