@include('mobile.common.header')
<body>
<!--头部-->

<!--end头部-->

<!--内容-->

<script src="{{asset('/tao/mobile/static/al')}}" async="" type="text/javascript"></script>
<script src="{{asset('/tao/mobile/static/sl.js')}}" type="text/javascript" async=""></script>
<script type="text/javascript">_slot_id = "ab9c15b1-bd95-438d-b25c-0ebf4cfc274e";</script>
<script type="text/javascript">_slot_id = "10d93fe8-6f99-4e03-87f8-b7e00b03173f";</script>
<script type="text/javascript">_slot_id = "b93ca00c-9af8-4ea1-b668-1b1c435459f9";</script>
<div class="cxx-main" id="top">
    <div class="am-sticky-placeholder" style="height: 81px; margin: 0px;"><div class="cxx-header" data-am-sticky="{animation: &#39;slide-top&#39;}" style="margin: 0px;">
            <header class="am-padding-vertical-xs cxx-background-pink">
                <div class="am-g">
                    <div class="am-u-sm-1 am-text-center drop-down" data-action="down">
                        <i class="am-icon-bars am-text-xl" style="color:#fff;line-height:30px;"></i>
                    </div>

                    <div class="am-u-sm-10 am-text-center">
                        <form action="http://tao.517zhe.com/index.php/m/so/index.html" name="soForm" class="am-form am-text-sm">
                            <input id="key" name="wd" type="text" class="cxx-text am-radius am-padding-horizontal-xs cxx-text-white" placeholder="输入关键词搜索" value="">


                        </form></div>
                    <div class="am-u-sm-1 am-text-left search-btn" style="padding-left: 0rem;">
                        <i class="am-icon-search am-text-xl" style="color:#fff;line-height:30px;"></i>
                    </div>

                </div>
            </header>
            <nav id="nav-wrap">

                <ul>
                    <li class="item ">
                        <a href="/mobile/index">
                            <span style="">全部</span>
                        </a>
                    </li>
                    @foreach($class_list as $k=>$val)
                    <li class="item " data-id="{{ $val->id }}">
                        <a href="/mobile/goods?class_id={{ $val->id }}">
                            <span style="">{{ $val->class_name }}</span>
                        </a>
                    </li>
                    @endforeach
                </ul>
                <div id="drop-down" data-action="down">
                    <div class="drop-down-bg-wrap">
                        <i class="am-icon-angle-down am-text-xl"></i>
                    </div>

                </div>



            </nav>
            <script type="text/javascript">
                ;$(function(){
                    $('#drop-down, .drop-down').click(
                        function(){
                            var action = $('#drop-down, .drop-down').attr('data-action');
                            if(action == 'down'){
                                $('.drop-down-bg-wrap i').attr({ class: "am-icon-angle-up am-text-xl" });
                                $('.cxx-header').css({'z-index':'1200'});
                                $('.cxx-more-cate').slideDown('fast');
                                $('.cxx-transparent-bg').show();
                                $('#drop-down, .drop-down').attr('data-action','up');
                            }
                            if(action == 'up'){
                                $('.drop-down-bg-wrap i').attr({ class: "am-icon-angle-down am-text-xl" });
                                $('.cxx-transparent-bg').hide();
                                $('.cxx-more-cate').slideUp('fast');
                                $('.cxx-header').css({'z-index':'999'});
                                $('.cxx-transparent-bg').hide();
                                $('#drop-down, .drop-down').attr('data-action','down');
                            }
                        }
                    );
                    // $('.search-btn').on('click',function(){
                    //         if($('#key').val()==''){
                    //             return false;
                    //         }
                    //         document.soForm.submit();
                    //     })
                    $('.cxx-transparent-bg').on('click',function(){
                        var action = $('#drop-down, .drop-down').attr('data-action');
                        if(action == 'up'){
                            $('.drop-down-bg-wrap i').attr({ class: "am-icon-angle-down am-text-xl" });
                            $('.cxx-transparent-bg').hide();
                            $('.cxx-more-cate').slideUp('fast');
                            $('.cxx-header').css({'z-index':'999'});
                            $('.cxx-transparent-bg').hide();
                            $('#drop-down, .drop-down').attr('data-action','down');
                        }
                        $('.cxx-transparent-bg').hide();
                    });
                });
            </script>
            <script>
                ;$(function(){
                    $('#key').click(function(){
                        var url ="/index.php/m/search/index.html";
                        window.location.href = url;
                        // alert(1);
                    })

                });

            </script>
        </div></div>

    <!--分类列表-->
    <div class="cxx-more-cate">
        <ul style="width:100%">
            @foreach($class_list as $k=>$val)
                <li class=" " data-id="{{ $val->id }}">
                    <a href="/mobile/goods?class_id={{ $val->id }}">
                        <span style="">{{ $val->class_name }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="cxx-transparent-bg"></div>

    <!--主题内容-->


    <!--轮播广告-->
    <div data-am-widget="slider" class="am-slider am-slider-a1 am-no-layout" data-am-slider="{&quot;directionNav&quot;:false}">

        <div class="am-viewport" style="overflow: hidden; position: relative;">
            <ul class="am-slides" style="width: 1200%; transition-duration: 0s; transform: translate3d(-414px, 0px, 0px);">
                @foreach($pic_list as $k=>$v)
                <li class="clone" aria-hidden="true" style="width: 414px; margin-right: 0px; float: left; display: block;">
                    <a target="_blank" href="">
                        <img src="/uploads/{{$v->pic}}" data-original="" class="lazy" draggable="false">
                        <div class="cxx-slider-font">
                        </div>
                        <div class="cxx-slider-shadow"></div>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
        <ol class="am-control-nav am-control-paging">

        </ol>
    </div>

    <!--专题列表-->
    <div class="cxx-circle-nav">
        <ul class="cxx-circle-nav-list">
            @foreach($pic_bottom_list as $k=>$v)
            <li>
                <a href="" class="">
                    <img src="/uploads/{{$v->pic}}" title="{{$v->alt}}">
                </a>
                <span>{{$v->alt}}</span>
            </li>
           @endforeach
        </ul>
    </div>
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
    <div class="cxx-loading" style="display: block;"><span class="am-text-sm"><i class="am-icon-spinner am-icon-pulse am-margin-right-xs"></i>商品正在赶来的路上，请稍后</span></div>

</div>
<!--end内容-->


<!--end内容-->

<!--底部-->


<!--end底部-->
<!--返回顶部-->
<div class="am-gotop-fixed am-active" style="bottom:65px;">
    <a href="http://tao.517zhe.com/index.php/m/user/login.html" title="">
        <i class="am-gotop-icon am-round" style="font-style:normal;font-size:0.65rem;line-height:4rem;margin-bottom:0.25rem;">登录 </i>
    </a>
    <a href="http://tao.517zhe.com/index.php/m/cate/index/id/4.html#top" title="">
        <i class="am-gotop-icon am-icon-angle-up am-round" style="line-height:4rem;font-size: 2.4rem;"></i>
    </a>
</div>
<script src="{{asset('/tao/mobile/static/amazeui.min.js')}}"></script>
<script src="{{asset('/tao/mobile/static/clipboard.min.js')}}"></script>
<script>
    $(function() {
        var wd = "";
        isLock = true;
        p = 1;
        $('.cxx-goods-list').off('click').on('click', '.cxx-prize', function(e) {

            if($(".cxx-goods-list").length == 0) return;
            var scrollTop = window.pageYOffset
                || document.documentElement.scrollTop
                || document.body.scrollTop
                || 0;
            window.localStorage.setItem("p", $('#p').html());
            window.localStorage.setItem("top", scrollTop);
            window.localStorage.setItem("html", $(".cxx-goods-list").html());
            window.localStorage.setItem("page", $(".cxx-this-page").parent().html());
            window.localStorage.setItem("url", window.location.href);
            window.location.href = $(this).attr('data-url');
        });
        if(window.localStorage.getItem("url") == window.location.href && window.localStorage.getItem("top") != "null") {
            $(".cxx-goods-list").html(window.localStorage.getItem("html"));
            $("img.lazy").lazyload();
            $(".cxx-this-page").parent().html(window.localStorage.getItem("page"));
            document.body.scrollTop = window.localStorage.getItem("top");
            p = parseInt(window.localStorage.getItem("p"));
            window.localStorage.setItem("p", "null");
            window.localStorage.setItem("top", "null");
            window.localStorage.setItem("html", "null");
        }else{
            cxxia.goodList({p:p,wd:wd, type:'post', url:"/index.php/m/cate/index/id/4.html"});
        }

        //取窗口可视范围的高度
        function getClientHeight(){
            var clientHeight=0;
            if(document.body.clientHeight&&document.documentElement.clientHeight){
                var clientHeight=(document.body.clientHeight<document.documentElement.clientHeight)?document.body.clientHeight:document.documentElement.clientHeight;
            }else{
                var clientHeight=(document.body.clientHeight>document.documentElement.clientHeight)?document.body.clientHeight:document.documentElement.clientHeight;
            }
            return clientHeight;
        }
        //取窗口滚动条高度
        function getScrollTop(){
            var scrollTop=0;
            if(document.documentElement&&document.documentElement.scrollTop){
                scrollTop=document.documentElement.scrollTop;
            }else if(document.body){
                scrollTop=document.body.scrollTop;
            }
            return scrollTop;
        }
        //取文档内容实际高度
        function getScrollHeight(){
            return Math.max(document.body.scrollHeight,document.documentElement.scrollHeight);
        }

        $(window).scroll(function () {
            var h=$(this).scrollTop();
            if(h>10){
                $(".cxx-loading").show().html('<span class="am-text-sm"><i class="am-icon-spinner am-icon-pulse am-margin-right-xs"></i>商品正在赶来的路上，请稍后</span>');
            }else{
                $(".cxx-loading").fadeOut('fast');
            }

            var height=getClientHeight();
            var theight=getScrollTop();
            var rheight=getScrollHeight();
            var bheight=rheight-theight-height;
            if (bheight <= 56 && isLock) {
                p = p + 1;
                isLock = false;
                cxxia.goodList({p:p, wd:wd,type:'post', url:"/index.php/m/cate/index/id/4.html"});
                isLock = true;
            }
        });
    });
</script>
<script>
    setTimeout(function() {
        window.addEventListener("popstate", function(e) {
            window.location.hash
        }, false)
    }, 300);
    $(function() {




    });
</script>

<div style="display:none">
</div>
<script type="text/javascript">
    (function(win,doc){
        var s = doc.createElement("script"), h = doc.getElementsByTagName("head")[0];
        if (!win.alimamatk_show) {
            s.charset = "gbk";
            s.async = true;
            s.src = "https://alimama.alicdn.com/tkapi.js";
            h.insertBefore(s, h.firstChild);
        };
        var o = {
            pid: "mm_21833901_42424081_45499350294",/*推广单元ID，用于区分不同的推广渠道*/
            appkey: "",/*通过TOP平台申请的appkey，设置后引导成交会关联appkey*/
            unid: "",/*自定义统计字段*/
            type: "click" /* click 组件的入口标志 （使用click组件必设）*/
        };
        win.alimamatk_onload = win.alimamatk_onload || [];
        win.alimamatk_onload.push(o);
    })(window,document);
</script>






<script src="{{asset('/tao/mobile/static/saved_resource')}}" type="text/javascript" charset="utf-8" async=""></script></body></html>