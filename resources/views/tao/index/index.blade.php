<!DOCTYPE html>
<html>
<head>
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <title>测试</title>
    <meta name="keywords" content="测试">
    <meta name="description" content="测试">
    <link href="{{ asset('./tao/pc/static/common.css') }}" rel="stylesheet">
    <script src="{{ asset('./tao/pc/static/jquery-1.js') }}"></script>
    <script src="{{ asset('./tao/pc/static/common.js') }}" type="text/javascript"></script>
</head>
<body>
<div class="header" id="header">
    <div class="header-bar">
        <i class="close"></i>
        <div class="wrapper">
            <p class="coll-desc">按<strong>Ctrl&nbsp;+&nbsp;D</strong>,将517折网-淘宝天猫比价优惠券白菜秒杀特价红包返利网放入收藏夹，优惠券信息一手掌握！</p>
        </div>
    </div>
    <div class="header-top">
        <div class="wrapper">
            <a href="http://tao.517zhe.com/" class="logo-area">
                <img class="logo" alt="517折网-淘宝天猫比价优惠券白菜秒杀特价红包返利网" src="./static/431146a6721db3903acf99c29d94f9f3.png">
            </a>
            <div class="slogan-area">
                <i class="slogan-icon cate-icon"></i>
                <p>正品好货</p>
                <i class="slogan-icon cate-icon"></i>
                <p>人工精选</p>
                <i class="slogan-icon cate-icon"></i>
                <p>内部领券</p>
                <i class="slogan-icon cate-icon"></i>
                <p>全场包邮</p>
            </div>
            <div class="search-area">
                <form name="soForm" action="index.php/index/so/index.html" method="get" id="soform">

                    <!-- <select name="type" class="type-input-area">
                        <option value="0"  class='selected'>本站搜索</option>
                        <option value="1" >超级搜索</option>
                    </select> -->

                    <div class="select-area">
                        <div class="select-area-img"></div>
                        <div class="selected " data-id="0">本站 </div>
                        <div class="" data-id="1">全网 </div>
                    </div>
                    <input name="type" value="0" id="type" type="hidden">
                    <div class="input-area">
                        <i>
                        </i>

                        <input id="keyword" autocomplete="off" onblur="this.value==''?this.value=this.title:null" onfocus="this.value==this.title?this.value='':null" title="输入关键词或淘宝链接" placeholder="输入关键词" class="search-input" name="wd" type="text">

                    </div>
                    <a href="javascript:;" class="search-btn">搜索</a>
                </form>
            </div>
            <div id="suggest" class="suggest"></div>
        </div>
    </div>


    <div class="tab-area-plh">
        <div class="tab-area">
            <div class="wrapper">
                <div class="cate-area">
                    <a class="cate-item jxtj active" href="http://tao.517zhe.com/">
                        <span class="cate-rec">精选推荐</span>
                    </a>
                    <a href="http://tao.517zhe.com/index.php/index/jiu/index.html" class="cate-item ">
                        9块9包邮                    </a>
                    <a href="http://tao.517zhe.com/index.php/index/ershi/index.html" class="cate-item ">
                        20元封顶                    </a>
                    <a href="http://tao.517zhe.com/index.php/index/history/index.html" class="cate-item ">
                        我的足迹                    </a>
                    <a href="http://tao.517zhe.com/index.php/index/live/index.html" class="cate-item ">
                        优惠直播                    </a>

                </div>
                <div style="line-height:40px;float:right;color:#FFF; right;margin-top:-40px;margin-right:20px;font-size:15px">
                    <a style="line-height:40px;color:#FFF;margin-right:10px;" href="http://tao.517zhe.com/index.php/index/user/register.html">注册</a>  <a style="line-height:40px;color:#FFF;" href="http://tao.517zhe.com/index.php/index/user/login.html">登录</a>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="cate-box">
    <div class="tab-area" style="display:none">
        <div class="wrapper hori-cate-area">
            <div class="cate-l-1">
                <div class="wrapper">
                    <a href="http://tao.517zhe.com/" class=""><i class="cate-icon"></i>  今日新品</a>
                    <a href="http://tao.517zhe.com/index.php/index/cate/index/id/1.html" class=""><i class="cate-icon"></i> 女装</a>
                    <a href="http://tao.517zhe.com/index.php/index/cate/index/id/2.html" class=""><i class="cate-icon"></i> 男装</a>
                    <a href="http://tao.517zhe.com/index.php/index/cate/index/id/3.html" class=""><i class="cate-icon"></i> 鞋子</a>
                    <a href="http://tao.517zhe.com/index.php/index/cate/index/id/4.html" class=""><i class="cate-icon"></i> 箱包</a>
                    <a href="http://tao.517zhe.com/index.php/index/cate/index/id/5.html" class=""><i class="cate-icon"></i> 母婴</a>
                    <a href="http://tao.517zhe.com/index.php/index/cate/index/id/6.html" class=""><i class="cate-icon"></i> 内衣</a>
                    <a href="http://tao.517zhe.com/index.php/index/cate/index/id/7.html" class=""><i class="cate-icon"></i> 美妆</a>
                    <a href="http://tao.517zhe.com/index.php/index/cate/index/id/8.html" class=""><i class="cate-icon"></i> 配饰</a>
                    <a href="http://tao.517zhe.com/index.php/index/cate/index/id/9.html" class=""><i class="cate-icon"></i> 居家</a>
                    <a href="http://tao.517zhe.com/index.php/index/cate/index/id/10.html" class=""><i class="cate-icon"></i> 文体</a>
                    <a href="http://tao.517zhe.com/index.php/index/cate/index/id/11.html" class=""><i class="cate-icon"></i> 数码</a>
                    <a href="http://tao.517zhe.com/index.php/index/cate/index/id/12.html" class=""><i class="cate-icon"></i> 电器</a>
                    <a href="http://tao.517zhe.com/index.php/index/cate/index/id/13.html" class=""><i class="cate-icon"></i> 美食</a>
                    <a href="http://tao.517zhe.com/index.php/index/cate/index/id/14.html" class=""><i class="cate-icon"></i> 其他</a>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <div class="order-area">
                <ul class="sort-type">
                    <li data-sort="default" style="padding-left: 15px;"><i class="cate-icon" style="font-size:14px"></i> 排序筛选</li>
                    <li data-sort="default" class="active">默认 <i class="cate-icon" style="font-size:14px"></i></li>
                    <li data-sort="new" class="">最新 <i class="cate-icon" style="font-size:14px"></i></li>
                    <li data-sort="volume" class="">销量 <i class="cate-icon" style="font-size:14px"></i></li>
                    <li data-sort="minPrice" class="">价格 <i class="cate-icon" style="font-size:14px"></i></li>
                    <li data-sort="quan" class="">券额 <i class="cate-icon" style="font-size:14px"></i></li>
                    <li data-sort="receive" class="">剩余 <i class="cate-icon" style="font-size:14px"></i></li>
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
        <a class="cate-item" href="http://tao.517zhe.com/index.php/index/cate/index/id/1.html">
            <div class="inner">
                <i class="cate-icon"></i> 女装            </div>
        </a>
        <a class="cate-item" href="http://tao.517zhe.com/index.php/index/cate/index/id/2.html">
            <div class="inner">
                <i class="cate-icon"></i> 男装            </div>
        </a>
        <a class="cate-item" href="http://tao.517zhe.com/index.php/index/cate/index/id/3.html">
            <div class="inner">
                <i class="cate-icon"></i> 鞋子            </div>
        </a>
        <a class="cate-item" href="http://tao.517zhe.com/index.php/index/cate/index/id/4.html">
            <div class="inner">
                <i class="cate-icon"></i> 箱包            </div>
        </a>
        <a class="cate-item" href="http://tao.517zhe.com/index.php/index/cate/index/id/5.html">
            <div class="inner">
                <i class="cate-icon"></i> 母婴            </div>
        </a>
        <a class="cate-item" href="http://tao.517zhe.com/index.php/index/cate/index/id/6.html">
            <div class="inner">
                <i class="cate-icon"></i> 内衣            </div>
        </a>
        <a class="cate-item" href="http://tao.517zhe.com/index.php/index/cate/index/id/7.html">
            <div class="inner">
                <i class="cate-icon"></i> 美妆            </div>
        </a>
        <a class="cate-item" href="http://tao.517zhe.com/index.php/index/cate/index/id/8.html">
            <div class="inner">
                <i class="cate-icon"></i> 配饰            </div>
        </a>
        <a class="cate-item" href="http://tao.517zhe.com/index.php/index/cate/index/id/9.html">
            <div class="inner">
                <i class="cate-icon"></i> 居家            </div>
        </a>
        <a class="cate-item" href="http://tao.517zhe.com/index.php/index/cate/index/id/10.html">
            <div class="inner">
                <i class="cate-icon"></i> 文体            </div>
        </a>
        <a class="cate-item" href="http://tao.517zhe.com/index.php/index/cate/index/id/11.html">
            <div class="inner">
                <i class="cate-icon"></i> 数码            </div>
        </a>
        <a class="cate-item" href="http://tao.517zhe.com/index.php/index/cate/index/id/12.html">
            <div class="inner">
                <i class="cate-icon"></i> 电器            </div>
        </a>
        <a class="cate-item" href="http://tao.517zhe.com/index.php/index/cate/index/id/13.html">
            <div class="inner">
                <i class="cate-icon"></i> 美食            </div>
        </a>
        <a class="cate-item" href="http://tao.517zhe.com/index.php/index/cate/index/id/14.html">
            <div class="inner">
                <i class="cate-icon"></i> 其他            </div>
        </a>
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
<div class="footer">
    <div class="footer-top">
        <div class="wrapper">
            <div class="yl">
                <p style="padding-top: 8px;" class="head">友情链接:</p>
                <div class="yl-links">
                    <a href="http://baidu.com/" target="_blank">百度</a>
                    <a href="http://www.517zhe.com/" target="_blank">517折</a>

                </div>
            </div>

            <div class="logo-slogan">
                <div class="qr-code">
                    <a title="517折网-淘宝天猫比价优惠券白菜秒杀特价红包返利网" href="http://tao.517zhe.com/">
                        <img alt="517折网-淘宝天猫比价优惠券白菜秒杀特价红包返利网" src="./static/7de274e80b29e07dd4ebbb14eca8611d.png">
                    </a>
                </div>
                <div class="txt">
                    <div class="logo">517折网-淘宝天猫比价优惠券白菜秒杀特价红包返利网</div>
                    <p class="s1">聪明的人，都会省钱</p>
                    <p class="s2">购物省钱神器</p>
                </div>
            </div>
        </div>
    </div>
    <div style="display:none">
        <form name="filterForm" action="/" method="get">
            <input name="page" value="1" type="text">
            <input name="sort" value="default" type="text">
            <input name="price" value="0" type="text">
            <input name="wd" type="text">
            <input type="submit">
        </form>
    </div>
    <div class="footer-bootom">
        <div class="wrapper">
            <p>517折网-淘宝天猫比价优惠券白菜秒杀特价红包返利网  <a href="http://www.miitbeian.gov.cn/" target="_blank"></a>　　Copyright @2018-2019 517折网 517zhe.com  All Rights Reserved</p>
        </div>
    </div>
</div>
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
<div style="margin-left: 590px;" class="side-fixed-menu">
    <div id="backToTop" class="menu-item" style="display:none">
        <i class=" cate-icon"></i>
        <p>返回顶部</p>
    </div>
    <a target="_blank" href="http://tao.517zhe.com/index.php/index/history/index.html"><div class="menu-item" id="toHis"><i class=" cate-icon" style="font-size:22px;"></i><p>浏览记录</p></div></a>

</div>

<div style="display:none">
</div>

</body>
</html>