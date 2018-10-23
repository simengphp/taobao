@include('tao.common.header')
<body>
@include('tao.common.top')
<div class="cate-box">
    <div class="tab-area" style="display:none">
        <div class="wrapper hori-cate-area">
            <div class="cate-l-1">
                <div class="wrapper">
                    <a href="http://tao.517zhe.com/" class=""><i class="cate-icon"></i> 今日新品</a>
                    @foreach($class_list as $k => $v)
                    <a href="" class="iconfont {{$v->icon}}"><i class="cate-icon"></i> {{$v->class_name}}</a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="wrapper">
            <div class="order-area">
                <ul class="sort-type">
                    <li data-sort="default" style="padding-left: 15px;"><i class="cate-icon" style="font-size:14px"></i> 排序筛选</li>
                    <li data-sort="default" class="active">默认 <i class="cate-icon" style="font-size:14px"></i></li>
                    <li data-sort="new" class="">最新 <i class="cate-icon" style="font-size:14px"></i></li>
                    <li data-sort="volume" class="">销量 <i class="cate-icon" style="font-size:14px"></i></li>
                    <li data-sort="minPrice" class="">价格 <i class="cate-icon" style="font-size:14px"></i></li>
                    <li data-sort="quan" class="">券额 <i class="cate-icon" style="font-size:14px"></i></li>
                    <li data-sort="receive" class="">剩余 <i class="cate-icon" style="font-size:14px"></i></li>
                </ul>
                <ul class="price-filter">
                    <li data-price="10" class=""><span><i></i></span>10元券</li>
                    <li data-price="20" class=""><span><i></i></span>20元券</li>
                    <li data-price="50" class=""><span><i></i></span>50元券</li>
                    <li data-price="100" class=""><span><i></i></span>100元券</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function(){
        $(document).on('scroll',function(){
            var _top = $(document).scrollTop();
            if(_top >= 400){
                backToTop
                $('.cate-box .tab-area').show();
                $('.tab-area').addClass('fixed');
            }else{

                $('.tab-area').removeClass('fixed');
                $('.cate-box  .tab-area').hide();
            }
        });
    });
</script>
<div class="wrapper home-oper-area">
    <div class="cate-area">
        @foreach($class_list as $k => $v)
        <a class="cate-item" href="#">
            <div class="inner">
                <i class="iconfont {{$v->icon}}"></i>  {{$v->class_name}}
            </div>
        </a>
        @endforeach
    </div>
    <!--广告轮播-->
    <div class="banner-top">
        <div class="banner-area swiper-container swiper-container-horizontal">
            <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-1320px, 0px, 0px);"><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3" style="width: 660px;"><a target="_blank" class="swiper-slide swiper-slide-duplicate" href="http://tao.517zhe.com/index.php/index/index/index.html" data-swiper-slide-index="4" style="width: 660px;">
                        <img style="width: 100%;" src="./static/2e2f035fdb44fd7aef2b3ab67a8c32da.jpg">
                    </a></div>
                <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="0" style="width: 660px;"><a target="_blank" class="swiper-slide swiper-slide-duplicate" href="http://tao.517zhe.com/index.php/index/index/index.html" data-swiper-slide-index="1" style="width: 660px;">
                        <img style="width: 100%;" src="./static/f5db60e410ad97487a71f10d861c4ce4.png">
                    </a></div>
                <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="1" style="width: 660px;"><a target="_blank" class="swiper-slide swiper-slide-duplicate" href="http://tao.517zhe.com/index.php/index/index/index.html" data-swiper-slide-index="2" style="width: 660px;">
                        <img style="width: 100%;" src="./static/ece0a32d59275b31a3ac7cf7a8a35855.jpg">
                    </a></div>
                <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="2" style="width: 660px;"><a target="_blank" class="swiper-slide swiper-slide-duplicate" href="http://tao.517zhe.com/index.php/index/index/index.html" data-swiper-slide-index="3" style="width: 660px;">
                        <img style="width: 100%;" src="./static/bb2233e4c493ba257ae21ee13e98540b.jpg">
                    </a></div>
                <div class="swiper-slide" data-swiper-slide-index="3" style="width: 660px;"><a target="_blank" class="swiper-slide swiper-slide-duplicate" href="http://tao.517zhe.com/index.php/index/index/index.html" data-swiper-slide-index="4" style="width: 660px;">
                        <img style="width: 100%;" src="./static/2e2f035fdb44fd7aef2b3ab67a8c32da.jpg">
                    </a></div>

                <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0" style="width: 660px;"><a target="_blank" class="swiper-slide swiper-slide-duplicate" href="http://tao.517zhe.com/index.php/index/index/index.html" data-swiper-slide-index="1" style="width: 660px;">
                        <img style="width: 100%;" src="./static/f5db60e410ad97487a71f10d861c4ce4.png">
                    </a></div></div>

            <div class="swiper-bottom">
                <div class="swiper-pager"><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span></div>
            </div>

        </div>

        <div class="top-right-banner">
            <a href="http://tao.517zhe.com/index.php/index/index/index.html" target="_blank" title="轮播右侧">
                <img src="./static/7735baf4429b335f5626f2698e0f51cf.jpg" title="轮播右侧广告">
            </a>


        </div>

    </div>


    <div class="small-banner-area">
        <div href="javascript:;" class="small-banner-item">
            <a target="_blank" href="http://tao.517zhe.com/index.php/index/index/index.html">
                <img src="./static/a8283a0300dd1c29e699a56cc9c71b00.jpg">
                <p class="title">新款短袖</p>
            </a>
        </div>
        <div href="javascript:;" class="small-banner-item">
            <a target="_blank" href="http://tao.517zhe.com/index.php/index/index/index.html">
                <img src="./static/78de719addf37e44acd6b8651cc9c434.jpg">
                <p class="title">唇妆</p>
            </a>
        </div>
        <div href="javascript:;" class="small-banner-item">
            <a target="_blank" href="http://tao.517zhe.com/index.php/index/index/index.html">
                <img src="./static/bd3f3c9bbd13b0227c8d97d82a714aae.jpg">
                <p class="title">薄款外套</p>
            </a>
        </div>
        <div href="javascript:;" class="small-banner-item">
            <a target="_blank" href="http://tao.517zhe.com/index.php/index/index/index.html">
                <img src="./static/2d09d5722be9dc0f42f613ba82b56263.jpg">
                <p class="title">单肩包</p>
            </a>
        </div>
        <div href="javascript:;" class="small-banner-item">
            <a target="_blank" href="http://tao.517zhe.com/index.php/index/index/index.html">
                <img src="./static/d11dd600269309f1578ac6e7ecc41627.jpg">
                <p class="title">男士T恤</p>
            </a>
        </div>
        <div href="javascript:;" class="small-banner-item">
            <a target="_blank" href="http://tao.517zhe.com/index.php/index/index/index.html">
                <img src="./static/5fc14b1bb6e1a63011a658c8bafefd3d.jpg">
                <p class="title">气质美裙</p>
            </a>
        </div>

    </div>
</div>
<div class="wrapper home-wrapper">
    <div id="couponList" class="zk-list clearfix">

        <div class="zk-item">
            <div class="img-area">

                <span class="goods-new">新品</span>                    <div class="lq">
                    <a href="http://tao.517zhe.com/index.php/index/click/index/id/566343208075/coupon_id/65675c8b51484b20b366d9c82919c459.html" target="_blank" rel="nofollow">
                        <div class="lq-t">
                            <p class="lq-t-d1">领优惠券</p>
                            <p class="lq-t-d2">省<span>5</span>元</p>
                        </div>
                        <div class="lq-b"></div>
                    </a>
                </div>

                <div class="bottom-info">
                    <p class="time-count" data-endtime="1540223999"><i class="cate-icon"></i></p>
                </div>
                <a href="http://tao.517zhe.com/index.php/index/goods/index/id/566343208075.html" target="_blank" title="猫咪蹭痒器墙角蹭毛器猫咪按摩神器蹭脸猫抓板挠痒器玩具猫咪用品">
                    <img alt="猫咪蹭痒器墙角蹭毛器猫咪按摩神器蹭脸猫抓板挠痒器玩具猫咪用品" data-original="https://img.alicdn.com/imgextra/i1/3822022360/TB2JcMUlXOWBuNjy0FiXXXFxVXa_!!3822022360.jpg_310x310.jpg" class="lazy" src="./static/TB2JcMUlXOWBuNjy0FiXXXFxVXa_3822022360.jpg" style="opacity: 1;">
                </a>
            </div>
            <p class="title-area elli">

                <span class="post-free">
                    包邮
                </span>

                猫咪蹭痒器墙角蹭毛器猫咪按摩神器蹭脸猫抓板挠痒器玩具猫咪用品            </p>
            <div class="raw-price-area">现价：¥18<p class="sold">已领 239 张券</p></div>
            <div class="info">
                <div class="price-area">
                    <span class="price">
                        ¥
                        <em class="number-font" style="font-size: 26px;">
                            13                        </em>
                        <i>
                        </i>
                    </span>
                </div>
                <div class="buy-area">
                    <a href="http://tao.517zhe.com/index.php/index/click/index/id/566343208075/coupon_id/65675c8b51484b20b366d9c82919c459.html" target="_blank" rel="nofollow">
                                            <span class="coupon-amount">
                                                            去淘宝
                                                    </span>
                        <span class="btn-title">火速领券</span>
                    </a>
                </div>
                <div class="platform-area">
                    <img src="./static/platform_taobao.png">淘宝
                </div>
            </div>
        </div>
    </div>
    <div class="page">
        <ul class="pagination"><li class="disabled"><span>«</span></li> <li class="active"><span>1</span></li><li><a href="http://tao.517zhe.com/?page=2">2</a></li><li><a href="http://tao.517zhe.com/?page=3">3</a></li><li><a href="http://tao.517zhe.com/?page=4">4</a></li><li><a href="http://tao.517zhe.com/?page=5">5</a></li><li><a href="http://tao.517zhe.com/?page=6">6</a></li><li><a href="http://tao.517zhe.com/?page=7">7</a></li><li><a href="http://tao.517zhe.com/?page=8">8</a></li><li class="disabled"><span>...</span></li><li><a href="http://tao.517zhe.com/?page=1004">1004</a></li><li><a href="http://tao.517zhe.com/?page=1005">1005</a></li> <li><a href="http://tao.517zhe.com/?page=2">»</a></li></ul>    </div>
</div>
@include('tao.common.footer')
<script type="text/javascript">
    ;$(function(){
        var sort = "";
        switch(sort)
        {
            case 'volume':
                $('.sort-type').find('.active').attr('data-sort','minVolume');
                $('.sort-type').find('.active i').toggleClass("sort_desc").html('');
                break;
            case 'minVolume':
                $('.sort-type').find('.active').attr('data-sort','volume');
                $('.sort-type').find('.active i').toggleClass("sort_asc").html('');
                break;
            case 'price':
                $('.sort-type').find('.active').attr('data-sort','minPrice');
                $('.sort-type').find('.active i').toggleClass("sort_asc").html('');
                break;
            case 'minPrice':
                $('.sort-type').find('.active').attr('data-sort','price');
                $('.sort-type').find('.active i').toggleClass("sort_desc").html('');
                break;
            case 'quan':
                $('.sort-type').find('.active').attr('data-sort','minQuan');
                $('.sort-type').find('.active i').toggleClass("sort_desc").html('');
                break;
            case 'minQuan':
                $('.sort-type').find('.active').attr('data-sort','quan');
                $('.sort-type').find('.active i').toggleClass("sort_asc").html('');
                break;
            case 'surplus':
                $('.sort-type').find('.active').attr('data-sort','receive');
                $('.sort-type').find('.active i').toggleClass("sort_desc").html('');
                break;
            case 'receive':
                $('.sort-type').find('.active').attr('data-sort','surplus');
                $('.sort-type').find('.active i').toggleClass("sort_asc").html('');
                break;


        }
        $('.sort-type li').each(function(){
            $(this).bind('click', function(){
                var sort = $(this).attr('data-sort');
                $('input[name=sort]').val($(this).attr('data-sort'));
                if($('.price-filter li').hasClass('active')){
                    $('input[name=price]').val($('.price-filter').find('.active').attr('data-price'));
                }
                document.filterForm.submit();
            });
        });

        $('.price-filter li').each(function(){
            $(this).bind('click', function(){
                $('input[name=price]').val($(this).attr('data-price'));
                if($('.sort-type li').hasClass('active')){
                    $('input[name=sort]').val($('.sort-type').find('.active').attr('data-sort'));
                }
                document.filterForm.submit();
            });
        });

        $('#keyword').bind('input propertychange', function() {
            var ajaxUrl = "index.php/index/ajax_request/suggest.html",
                keyword = $(this).val();
            $.getJSON(ajaxUrl,{keyword:keyword},function(result){
                if (result.code == 1) {
                    if (keyword) {
                        $('.suggest').addClass("dropdown");
                        $(".suggest").html(result.data);
                        $("#suggest ul li a").each(function() {
                            $(this).on('click', function(){
                                var  q = $(this).attr('data-keyword');
                                $('#keyword').val(q);
                                $('.suggest').removeClass("dropdown");
                                window.location.href= "index.php/index/so/index.html" + "?wd=" + q;

                            });

                        });
                    }
                }
            })
        });

        $("body").on('click',function() {
            $('.dropdown-menu').remove();
        });

        $('.search-btn').on('click',function(){
            document.soForm.submit();
        })

        $(document).on('scroll',function(){
            var _top = $(document).scrollTop();
            if(_top >= 400){
                $('#backToTop').show();
            }else{
                $('#backToTop').hide();
            }
        });

        $("#backToTop").click(function(){
            if ($('html').scrollTop()) {
                $('html').animate({ scrollTop: 0 }, 1000);
                return false;
            }
            $('body').animate({ scrollTop: 0 }, 1000);
            return false;
        });
    });
</script>
<script type="text/javascript" src="{{ asset('./tao/pc/static/swiper3.js') }}"></script>
<script type="text/javascript">
    $(function(){
        var sw = new Swiper('.banner-area',{
            autoplay: 3000,
            loop:true,
            pagination: '.swiper-pager'
        });

        //头部搜索框js:
        $('.select-area div').not( $(".select-area-img") ).click(function(){
            var a = $(this).attr("data-id");
            $('#type').val(a);
            $(this).addClass("selected").siblings().removeClass("selected");

        })
    });
</script>
@include('tao.common.return')

<div style="display:none">
</div>

</body>
</html>