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

    public function goodsDetail(Request $request)
    {
        /**获取商品*/
        $goods_detail = (new Article())->getOneDetail($request->g_id);
        $goods_detail['key'] = explode('|', $goods_detail['key']);
        /**获取商品相关*/
        $data['class_id'] = $goods_detail['class_id'];
        $goods_list = (new Article())->goodsList(16, $data);
        return view('tao.detail.detail', ['goods_list'=>$goods_list,'goods_detail'=>$goods_detail]);
    }
}