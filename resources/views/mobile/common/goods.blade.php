<!--商品列表-->
<section class="cxx-goods">
    <ul class="cxx-goods-list">
        @foreach($goods_list as $k=>$v)
            <li class="am-margin-top cxx-prize" data-url="/index.php/m/goods/index/id/564586794159.html">
                <div class="cxx-goods-box am-padding-xs"><div class="am-inline-block">
                        <a href="http://tao.517zhe.com/index.php/m/goods/index/id/564586794159.html">
                            <img src="/uploads/{{$v->pic}}" class="cxx-image lazy">
                        </a>
                    </div>
                    <div class="am-g am-fr" style="width:65%; height:10rem;">
                        <div class="am-u-sm-8 am-padding-left-0 am-padding-right-sm" style="border-right: .1rem dashed #eeeeee;">
                            <span class="line-clamp am-text-sm am-margin-bottom-xs">{{$v->title}}</span>
                            <div class="am-cf am-margin-bottom-xs" style="line-height:2.3rem">
                                <span class="cxx-text-pink">￥<em>{{$v->new_price}}</em></span>
                                <span class="am-text-xs cxx-color-gray am-margin-left-xs am-padding-top-xs" style="text-decoration:line-through">
                                    ￥{{$v->old_price}}</span>
                            </div>
                            <div class="am-cf" style="line-height:1.3rem">
                                <span class="am-text-xs cxx-text-light-grey am-fl">已抢购{{$v->ticket_num}}%</span>
                                <span class="am-text-xs cxx-text-light-grey am-fr">剩余{{$v->ticket_num}}</span>
                            </div>
                            <div class="cxx-process-bar am-fl">
                                <span style="width: 16%"></span>
                            </div>
                        </div>
                        <div class="am-text-center am-u-sm-4 am-padding-0" style="line-height:1.2">
                            <div class="am-vertical-align-middle" style="margin-top:-9px;">
                                <div class="am-round top-found am-inline-block am-text-center">

                                </div>
                                <div>
                                    <span class="am-text-sm">￥</span>
                                    <span class="am-text-xl">{{$v->ticket}}</span>
                                </div><span class="am-text-xs" style="color:rgba(0,0,0,0.5);">优惠券</span><br>
                                <a href="javascript:void(0);" data-id="564586794159" class="cxx-goods-buy am-text-sm cxx-text-pink am-radius am-block am-padding-xs am-margin-top-sm">领券购买</a>
                                <div class="am-round bottom-found am-inline-block am-text-center">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
</section>