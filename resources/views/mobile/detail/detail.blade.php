@include('mobile.common.header')
<body>
<div class="cxx-main" id="top">
    <!--主体内容-->
    <div class="cxx-top-menu">
        <a href="javascript:void(0);" onclick="$(&#39;.scroll-wrapper&#39;).empty();history.back(-1);" class="cxx-go-back am-margin-top-sm am-margin-left-sm am-fl">
            <i class="am-icon-chevron-left am-text-center am-vertical-align-middle" style="width:35px"></i>
        </a>
        <a href="" class="cxx-go-back am-margin-top-sm am-margin-right-sm am-fr">
            <i class="am-icon-home am-text-center am-vertical-align-middle" style="width:35px"></i>
        </a>
    </div>
    <div>
        <ul class="am-gallery am-avg-sm-1 am-gallery-default am-padding-0 am-no-layout">
            <li class="am-padding-0">
                <div class="am-gallery-item">
                    <a href="">
                        <img src="/uploads/{{$goods_detail->pic}}" data-am-pureviewed="1">
                    </a>
                </div>
            </li>
        </ul>
        <div class="cxx-background-white am-padding-xs am-padding-top-sm clear">
            <div class="cxx-price am-text-sm am-u-sm-6 am-text-right">券后价<span class="am-text-xl am-margin-left-xs cxx-text-pink">￥{{$goods_detail->new_price}}</span></div>
            <div class="price ftA rt am-u-sm-6 am-text-left" style=" line-height: 1.6rem;border-left: solid .1rem #E6E4E4;">
                <span class="cxx-text-aaa" style="font-size: 1.2rem;"><del>￥<em style="font-style: normal;font-size: 1.3rem;">{{$goods_detail->old_price}}</em></del></span><br>
                <span class="cxx-text-aaa" style="font-size: 1.2rem;"><em style="font-style: normal;font-size: 1.3rem;">{{$goods_detail->ticket_num}}</em>个人购买</span>
            </div>
        </div>
        <div class="am-text-center cxx-background-white am-padding-xs am-padding-bottom-sm cxx-text-black">
            {{$goods_detail->title}}
        </div>
        <div class="cxx-background-white am-padding-horizontal-xs am-padding-vertical-sm am-text-sm" style="border-top: .1rem dashed #eeeeee;">
            <i class="cxx-text-pink am-icon-star-o am-padding-horizontal-xs"></i><strong>推荐理由</strong>
            <br>
            <div class="am-margin-top-xs am-margin-left-xs cxx-text-grey">【店铺通用券】户外畅游，安全必备，立体裁剪，超轻体，超耐用，强浮力，优质材料，为您的安全保驾护航。</div>
        </div>
    </div>

    <!--图文详情-->
    <div class="am-panel-group am-margin-vertical-sm">
        <div class="am-panel am-padding-horizontal-xs">
            <div class="am-panel-hd am-padding-left-0 am-padding-right-0 am-padding-vertical-xs ">
                <h4 class="am-panel-title am-collapsed am-text-sm" data-am-collapse="{parent: &#39;#accordion&#39;, target: &#39;#product-details&#39;}" data-goodsid="538155712337">
                    <i class="cxx-text-pink am-icon-picture-o am-padding-horizontal-xs"></i>商品图文详情<span class="am-text-xs cxx-text-pink">（点击展开）</span>
                    <i class="am-fr am-icon-sm am-icon-angle-right cxx-text-grey" id="change_icon"></i>
                </h4>
            </div>
            <div id="product-details" class="am-panel-collapse am-collapse" style="height: 0px;">
                <div class="am-panel-bd am-padding-0" style="border-top: 0">
                    <div class="am-tab-panel am-fade am-in am-active" id="content"></div>
                </div>
            </div>
        </div>
    </div>
    <!--猜你喜欢的-->
    <div class="cxx-goods-like clear">
        <div class="am-text-sm am-margin-vertical-xs am-padding-horizontal-xs">
            <span><i class="cxx-text-pink am-icon-heart-o am-padding-horizontal-xs"></i><strong>猜您喜欢</strong></span>
            <a href="http://tao.517zhe.com/index.php/m/index/index/cid/4.html" target="_self" class="coupon">
                <span class="am-fr am-text-xs cxx-text-grey">查看更多<i class="am-fr am-icon-sm am-icon-angle-right" id="change_icon"></i></span>
            </a>
        </div>
        <section class="goods">
            <ul class="goods-list-box list_box clear">

                <li>
                    <a class="goods-a" href="http://tao.517zhe.com/index.php/m/goods/index/id/549913165563.html" target="_self">
                        <img class="lazy" src="" data-original="2920352161.jpg" style="display: block;">
                    </a>
                    <a href="http://tao.517zhe.com/index.php/m/goods/index/id/549913165563.html" target="_self">
                        <h3>蓝冰雪儿童行李箱拉杆箱卡通旅行箱学生时尚书包18/19寸</h3>
                    </a>
                    <div class="list-price">
                        <a href="http://tao.517zhe.com/index.php/m/goods/index/id/549913165563.html" target="_self">
                            <span class="cxx-text-pink" style="font-size:14px"><i>券后 ￥</i>118</span>
                        </a>
                        <a href="http://tao.517zhe.com/index.php/m/goods/index/id/549913165563.html" target="_self" class="coupon">
                            <span class="am-text-xs am-padding-top-xs am-fr" style="color:#999">销量131</span>
                        </a>
                    </div>
                    <div class="lingquan">
                        <a href="http://tao.517zhe.com/index.php/m/goods/index/id/549913165563.html" class="coupon"><span style="">40元券</span></a>
                    </div>
                </li>
            </ul>
        </section>
    </div>
    <!--底部导航-->
    <div class="cxx-footer-menu cxx-background-white clear">
        <ul class="am-avg-sm-3">
            <li class="am-text-center">
                <a href="/mobile/index" class="am-padding-vertical-sm am-block cxx-text-grey">
                    <i class="am-icon-home am-text-center am-vertical-align-middle"></i>
                    <span class="am-text-xs am-text-center am-vertical-align-middle">首页</span>
                </a>
            </li>

            <li class="am-text-center">
                <a class="cxx-goods-browser am-padding-vertical-sm am-block  cxx-text-white" href="http://tao.517zhe.com/index.php/m/click/index.html?id=538155712337&amp;couponId=b346421a67cf47e49d3d0fa02e14254d&amp;title=%E6%95%91%E7%94%9F%E8%A1%A3%E6%88%90%E4%BA%BA%E5%8A%A0%E5%8E%9A%E9%A9%AC%E7%94%B2%E6%B5%B7%E9%92%93%E4%B8%93%E4%B8%9A%E6%95%91%E8%BA%AB%E4%BE%BF%E6%90%BA%E5%A4%A7%E6%B5%AE%E5%8A%9B%E8%83%8C%E5%BF%83%E6%B5%AE%E6%BD%9C%E6%B8%B8%E6%B3%B3%E9%92%93%E9%B1%BC%E8%BD%A6%E8%BD%BD&amp;img=https%3A%2F%2Fgd3.alicdn.com%2Fimgextra%2Fi3%2F2185948788%2FTB2d.Ydb4lmpuFjSZPfXXc9iXXa_%21%212185948788.jpg&amp;couponPrice=20&amp;discountPrice=88&amp;couponUrl=">
                    <i class="am-icon-internet-explorer am-text-center am-vertical-align-middle"></i>
                    <span class="am-text-xs am-text-center am-vertical-align-middle">领券购买</span>
                </a>
            </li>
            <li class="am-text-center">
                <a class="cxx-goods-taokouling am-padding-vertical-sm am-block  cxx-text-white" href="javascript:void(0)" data-id="538155712337" data-activityid="b346421a67cf47e49d3d0fa02e14254d" data-title="救生衣成人加厚马甲海钓专业救身便携大浮力背心浮潜游泳钓鱼车载" data-img="https://gd3.alicdn.com/imgextra/i3/2185948788/TB2d.Ydb4lmpuFjSZPfXXc9iXXa_!!2185948788.jpg" data-couponprice="20" data-discountprice="88" data-couponurl="">
                    <i class="am-icon-weixin am-text-center am-vertical-align-middle"></i>
                    <span class="am-text-xs am-text-center am-vertical-align-middle">淘口令购买</span>
                </a>
            </li>
        </ul>
    </div>

</div>
<!--end内容-->

<!--end内容-->

<!--底部-->


<!--end底部-->
@include('mobile.common.footer')
<script type="text/javascript">
    $(function() {
        $('.cxx-goods-taokouling').on('click', function() {
            var id = $(this).attr('data-id'),
                activityId = $(this).attr('data-activityId'),
                title = $(this).attr('data-title'),
                img = $(this).attr('data-img'),
                couponPrice = $(this).attr('data-couponPrice'),
                discountPrice = $(this).attr('data-discountPrice'),
                couponUrl = $(this).attr('data-couponUrl'),
                url = '/index.php/m/ajax_request/goodsdetails.html';
            $.getJSON(url,{id:id,couponId:activityId,title:title,img:img,couponPrice:couponPrice,discountPrice:discountPrice,couponUrl:couponUrl},function(data){
                if(data.code){
                    var goods = data.data, str = '';
                    str += '<div class="am-modal am-modal-alert cxx-modal" tabindex="-1"><div class="am-modal-dialog cxx-background-white">';
                    str += '<div class="taologo btndh" style="background-image:url(' + goods.img + ')"></div>';
                    str += '<div class="am-modal-bd  am-padding-top"><div class="taocon"><div class="taotitle am-padding-sm"><div class="cxx-tkl-detail">';
                    str += '<ul class="am-list am-text-left">';
                    str += '<li><b>【商品】</b>' + goods.title + '元</li>';
                    str += '<li style="color:#ff464e"><b>【券额】</b> ' + goods.coupon_price + '元</li>';
                    str += '<li style="color:#ff464e"><b>【券后价】</b> ' + goods.discount_price + '元</li>';
                    str += '</ul></div>';
                    str += '<div class="popwcontent" id="taocontent">';
                    str += '<textarea style="border:0;undefined" class="copybox share" id="copy_key_android_nb" data-taowords="复制框内整段文，打开【手机淘宝】即可【领取优惠券】并购买' + goods.taokouling + '">【下单链接】 一键复制，打开【手机淘宝】即可【领取优惠券】并购买' + goods.taokouling + '</textarea></div>';
                    str += '</div></div></div>';
                    str += '<div class="am-modal-footer"><span class="am-modal-btn cxx-text-pink cxx-goods-copy"  data-am-modal-confirm="false">一键复制</span> <span class="am-modal-btn cxx-text-pink" data-am-modal-cancel>关闭窗口</span></div></div></div>';
                    str += '<div class="am-dimmer am-active" data-am-dimmer="" style="display: block;"></div>';

                    $('body').append(str);

                    $('.cxx-modal').modal({target: 'cxx-modal',closeOnConfirm: false, closeViaDimmer: 0,width:300, dimmer:false});

                    var $confirm = $('.cxx-modal');
                    var $confirmBtn = $confirm.find('[data-am-modal-confirm]');
                    var $cancelBtn = $confirm.find('[data-am-modal-cancel]');
                    $confirmBtn.off('click.confirm.modal.amui').on('click', function() {

                        var clipboard = new Clipboard('.cxx-goods-copy', {
                            target: function() {
                                return document.querySelector('.copybox');
                            }
                        });

                        clipboard.on('success', function(e){
                            e.trigger.innerHTML='<div class="am-text-success"><i class="am-icon-check-circle am-margin-right-xs"></i>复制成功</div>';
                            e.clearSelection();
                            cxxia.tips({msg:'复制成功', icon:'', time:1000});
                            window.location.href="taobao://m.taobao.com/";
                        });

                        clipboard.on('error', function(e) {
                            cxxia.tips({msg:'由于您的浏览器不兼容或当前网速较慢，复制失败，请手动复制或更', icon:'', time:5000});
                        });


                    });

                    $cancelBtn.off('click.cancel.modal.amui').on('click', function() {
                        $confirmBtn.html('一键复制');
                        $('.cxx-modal, .am-dimmer.am-active').remove();
                        $('body').removeAttr('class').removeAttr('style');

                    });
                }else{
                    cxxia.tips({msg:data.msg, icon:'', time:1000});
                }

            });

        })
    });

</script>




</body></html>