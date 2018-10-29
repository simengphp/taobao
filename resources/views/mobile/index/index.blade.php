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
    @include('mobile.common.top')
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
    @include('mobile.common.goods')
    <div class="cxx-loading" style="display: block;"><span class="am-text-sm"><i class="am-icon-spinner am-icon-pulse am-margin-right-xs"></i>商品正在赶来的路上，请稍后</span></div>

</div>
<!--end内容-->


<!--end内容-->

<!--底部-->


<!--end底部-->
@include('mobile.common.footer')
</body></html>