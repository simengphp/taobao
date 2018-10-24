<?php
    /**
     * Created by PhpStorm.
     * User: Administrator
     * Date: 2018/10/24
     * Time: 8:55
     */

namespace App\Providers;

use App\Model\Tao\ClassName;
use App\Model\Tao\Friend;
use App\Model\Tao\Nav;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class TaoServiceProvider extends AppServiceProvider
{
    public function boot(Request $request)
    {
        /**获取分类*/
        $class_list = (new ClassName())->classList();
        /**获取导航栏*/
        $nav_list = (new Nav())->navList();
        /**获取友情链接*/
        $friend_link = (new Friend())->friendList();
        View::share("friend_link", $friend_link);
        View::share("class_list", $class_list);
        View::share("nav_list", $nav_list);
    }
}