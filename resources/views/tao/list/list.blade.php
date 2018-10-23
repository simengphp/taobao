@include('tao.common.header')
<body>
@include('tao.common.top')
<div class="cate-box">
    <div class="tab-area fixed">
        <div class="wrapper hori-cate-area">
            <div class="cate-l-1">
                <div class="wrapper">
                    <a href="http://tao.517zhe.com/" class=""><i class="cate-icon"></i> 全部分类</a>
                    <a class="" href="http://tao.517zhe.com/index.php/index/cate/index/id/1.html">
                        <i class="cate-icon"></i> 女装                </a>
                    <a class="active" href="http://tao.517zhe.com/index.php/index/cate/index/id/2.html">
                        <i class="cate-icon"></i> 男装                </a>
                    <a class="" href="http://tao.517zhe.com/index.php/index/cate/index/id/3.html">
                        <i class="cate-icon"></i> 鞋子                </a>
                    <a class="" href="http://tao.517zhe.com/index.php/index/cate/index/id/4.html">
                        <i class="cate-icon"></i> 箱包                </a>
                    <a class="" href="http://tao.517zhe.com/index.php/index/cate/index/id/5.html">
                        <i class="cate-icon"></i> 母婴                </a>
                    <a class="" href="http://tao.517zhe.com/index.php/index/cate/index/id/6.html">
                        <i class="cate-icon"></i> 内衣                </a>
                    <a class="" href="http://tao.517zhe.com/index.php/index/cate/index/id/7.html">
                        <i class="cate-icon"></i> 美妆                </a>
                    <a class="" href="http://tao.517zhe.com/index.php/index/cate/index/id/8.html">
                        <i class="cate-icon"></i> 配饰                </a>
                    <a class="" href="http://tao.517zhe.com/index.php/index/cate/index/id/9.html">
                        <i class="cate-icon"></i> 居家                </a>
                    <a class="" href="http://tao.517zhe.com/index.php/index/cate/index/id/10.html">
                        <i class="cate-icon"></i> 文体                </a>
                    <a class="" href="http://tao.517zhe.com/index.php/index/cate/index/id/11.html">
                        <i class="cate-icon"></i> 数码                </a>
                    <a class="" href="http://tao.517zhe.com/index.php/index/cate/index/id/12.html">
                        <i class="cate-icon"></i> 电器                </a>
                    <a class="" href="http://tao.517zhe.com/index.php/index/cate/index/id/13.html">
                        <i class="cate-icon" _hover-ignore="1"></i> 美食                </a>
                    <a class="" href="http://tao.517zhe.com/index.php/index/cate/index/id/14.html">
                        <i class="cate-icon"></i> 其他                </a>
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
            if(_top >= 180){
                $('.tab-area').addClass('fixed');
            }else{
                $('.tab-area').removeClass('fixed');
            }
        });

    });
</script>
<div class="wrapper home-wrapper">
    <div id="couponList" class="zk-list clearfix">
        <div class="zk-item">
            <div class="img-area">

                <span class="goods-new">新品</span>                    <div class="lq">
                    <a href="http://tao.517zhe.com/index.php/index/click/index/id/577190165935/coupon_id/b7e61da8506d4032b62c5ef85d847eb3.html" target="_blank" rel="nofollow">
                        <div class="lq-t">
                            <p class="lq-t-d1">领优惠券</p>
                            <p class="lq-t-d2">省<span>100</span>元</p>
                        </div>
                        <div class="lq-b"></div>
                    </a>
                </div>

                <div class="bottom-info">
                    <p class="time-count" data-endtime="1540223999"><i class="cate-icon"></i></p>
                </div>
                <a href="http://tao.517zhe.com/index.php/index/goods/index/id/577190165935.html" target="_blank" title="【今日下单89元】新款男士外套韩版个性新潮上衣帅气夹克男装休闲">
                    <img alt="【今日下单89元】新款男士外套韩版个性新潮上衣帅气夹克男装休闲" data-original="https://gd2.alicdn.com/imgextra/i2/2498859834/O1CN012MW1NTdwiaxOgku_!!2498859834.jpg_310x310.jpg" class="lazy" src="%E3%80%90%E7%94%B7%E8%A3%851%E6%8A%98%E8%B5%B7%E3%80%91%E6%96%B0%E6%AC%BE%E6%97%B6%E5%B0%9A%E7%94%B7%E8%A3%85,%E6%BD%AE%E6%B5%81%E5%93%81%E7%89%8C%E7%94%B7%E8%A3%85,%E5%85%A8%E5%9C%BA1%E6%8A%98%E8%B5%B7%E9%99%90%E9%87%8F%E7%A7%92%E6%9D%80-517%E6%8A%98%E7%BD%91-%E6%B7%98%E5%AE%9D%E5%A4%A9%E7%8C%AB%E6%AF%94%E4%BB%B7%E4%BC%98%E6%83%A0%E5%88%B8%E7%99%BD%E8%8F%9C%E7%A7%92%E6%9D%80%E7%89%B9%E4%BB%B7%E7%BA%A2%E5%8C%85%E8%BF%94%E5%88%A9%E7%BD%91_files/O1CN012MW1NTdwiaxOgku_2498859834.jpg" style="opacity: 1;">
                </a>
            </div>
            <p class="title-area elli">

                <span class="post-free">
                    包邮
                </span>

                【今日下单89元】新款男士外套韩版个性新潮上衣帅气夹克男装休闲            </p>
            <div class="raw-price-area">现价：¥189<p class="sold">已领 1632 张券</p></div>
            <div class="info">
                <div class="price-area">
                    <span class="price">
                        ¥
                        <em class="number-font" style="font-size: 26px;">
                            89                        </em>
                        <i>
                        </i>
                    </span>
                </div>
                <div class="buy-area">
                    <a href="http://tao.517zhe.com/index.php/index/click/index/id/577190165935/coupon_id/b7e61da8506d4032b62c5ef85d847eb3.html" target="_blank" rel="nofollow">
                                            <span class="coupon-amount">
                                                            去淘宝
                                                    </span>
                        <span class="btn-title">火速领券</span>
                    </a>
                </div>
                <div class="platform-area">
                    <img src="%E3%80%90%E7%94%B7%E8%A3%851%E6%8A%98%E8%B5%B7%E3%80%91%E6%96%B0%E6%AC%BE%E6%97%B6%E5%B0%9A%E7%94%B7%E8%A3%85,%E6%BD%AE%E6%B5%81%E5%93%81%E7%89%8C%E7%94%B7%E8%A3%85,%E5%85%A8%E5%9C%BA1%E6%8A%98%E8%B5%B7%E9%99%90%E9%87%8F%E7%A7%92%E6%9D%80-517%E6%8A%98%E7%BD%91-%E6%B7%98%E5%AE%9D%E5%A4%A9%E7%8C%AB%E6%AF%94%E4%BB%B7%E4%BC%98%E6%83%A0%E5%88%B8%E7%99%BD%E8%8F%9C%E7%A7%92%E6%9D%80%E7%89%B9%E4%BB%B7%E7%BA%A2%E5%8C%85%E8%BF%94%E5%88%A9%E7%BD%91_files/platform_taobao.png">淘宝
                </div>
            </div>
        </div>
    </div>
    <div class="page">
        <ul class="pagination"><li class="disabled"><span>«</span></li> <li class="active"><span>1</span></li><li><a href="http://tao.517zhe.com/index.php/index/cate/index/id/2.html?id=2&amp;page=2">2</a></li><li><a href="http://tao.517zhe.com/index.php/index/cate/index/id/2.html?id=2&amp;page=3">3</a></li><li><a href="http://tao.517zhe.com/index.php/index/cate/index/id/2.html?id=2&amp;page=4">4</a></li><li><a href="http://tao.517zhe.com/index.php/index/cate/index/id/2.html?id=2&amp;page=5">5</a></li><li><a href="http://tao.517zhe.com/index.php/index/cate/index/id/2.html?id=2&amp;page=6">6</a></li><li><a href="http://tao.517zhe.com/index.php/index/cate/index/id/2.html?id=2&amp;page=7">7</a></li><li><a href="http://tao.517zhe.com/index.php/index/cate/index/id/2.html?id=2&amp;page=8">8</a></li><li class="disabled"><span>...</span></li><li><a href="http://tao.517zhe.com/index.php/index/cate/index/id/2.html?id=2&amp;page=91">91</a></li><li><a href="http://tao.517zhe.com/index.php/index/cate/index/id/2.html?id=2&amp;page=92">92</a></li> <li><a href="http://tao.517zhe.com/index.php/index/cate/index/id/2.html?id=2&amp;page=2">»</a></li></ul>    </div>
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
            var ajaxUrl = "/index.php/index/ajax_request/suggest.html",
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
                                window.location.href= "/index.php/index/so/index.html" + "?wd=" + q;

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

@include('tao.common.return')

<div style="display:none">
</div>
</body></html>