<?php
    /**
     * Created by PhpStorm.
     * User: Administrator
     * Date: 2018/10/23
     * Time: 16:11
     */

namespace App\Http\Controllers\Tao;


use App\Model\Tao\Article;
use Illuminate\Http\Request;

class ListController extends BaseController
{
    public function goodsList(Request $request)
    {
        /**获取商品*/
        $goods_list = (new Article())->goodsList(16,$request->all());
        return view('tao.list.list', ['goods_list'=>$goods_list]);
    }

    public function goodsDetail()
    {
        return view('tao.detail.detail');
    }
}