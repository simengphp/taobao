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






<script src="{{asset('/tao/mobile/static/saved_resource')}}" type="text/javascript" charset="utf-8" async=""></script>