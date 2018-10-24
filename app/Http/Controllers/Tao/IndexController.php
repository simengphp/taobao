<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/6
 * Time: 10:16
 */

namespace App\Http\Controllers\Tao;

use App\Model\Tao\ClassName;
use App\Model\Tao\Pic;

class IndexController extends BaseController
{
    public function index()
    {
        $pic_list = (new Pic())->picList(1);
        $pic_right = (new Pic())->onePic(2);
        //dd($pic_list);
        $pic_bottom_list = (new Pic())->picList(3);
        return view('tao.index.index', ['pic_list'=>$pic_list,
            'pic_right'=>$pic_right,'pic_bottom_list'=>$pic_bottom_list]);
    }
}
