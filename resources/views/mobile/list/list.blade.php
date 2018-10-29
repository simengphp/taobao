@include('mobile.common.header')
<body>
<div class="am-sticky-placeholder" style="height: 81px; margin: 0px;">
    <div class="cxx-header" data-am-sticky="{animation: &#39;slide-top&#39;}" style="margin: 0px;">
        <header class="am-padding-vertical-xs cxx-background-pink">
            <div class="am-g">
                <div class="am-u-sm-1 am-text-center" onclick="$(&#39;.scroll-wrapper&#39;).empty();history.go(-1);">
                    <i class="am-icon-angle-left am-text-xl" style="color:#fff;line-height:30px;"></i>
                </div>

                <div class="am-u-sm-10 am-text-center am-text-lg" style="color:#fff;line-height:30px;">9.9包邮</div>
                <div class="am-u-sm-1 am-text-center" style="padding-left: 0rem;">
                    <a href="http://tao.517zhe.com/index.php/m/index/index.html">
                        <i class="am-icon-home am-text-xl" style="color:#fff;line-height:30px;"></i>
                    </a>
                </div>
            </div>
        </header>
        <nav id="nav-wrap">

            <ul>
                @foreach($class_list as $k=>$val)
                <li class="item on">
                    <a href="">
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
            $('#drop-down').click(
                function(){
                    var action = $(this).attr('data-action');
                    if(action == 'down'){
                        $('.drop-down-bg-wrap i').attr({ class: "am-icon-angle-up am-text-xl" });
                        $('.cxx-header').css({'z-index':'1200'});
                        $('.cxx-more-cate').slideDown('fast');
                        $('.cxx-transparent-bg').show();
                        $(this).attr('data-action','up');
                    }
                    if(action == 'up'){
                        $('.cxx-transparent-bg').hide();
                        $('.cxx-more-cate').slideUp('fast');
                        $('.cxx-header').css({'z-index':'999'});
                        $('.cxx-transparent-bg').hide();
                        $(this).attr('data-action','down');
                    }
                }
            );
            $('.cxx-transparent-bg').on('click',function(){

                $('.cxx-transparent-bg').hide();
            });

        </script>

    </div></div>

<!--分类列表-->
@include('mobile.common.top')
<!--主题内容-->

<!--商品列表-->
@include('mobile.common.goods')
<div class="cxx-loading"></div>
</div>
<!--end内容-->

<!--end内容-->

<!--底部-->


<!--end底部-->
@include('mobile.common.footer')
</body></html>