<div class="footer">
    <div class="footer-top">
        <div class="wrapper">
            <div class="yl">
                <p style="padding-top: 8px;" class="head">友情链接:</p>
                <div class="yl-links">
                    @foreach($friend_link as $k => $v)
                    <a href="{{$v->value}}" target="_blank">{{$v->name}}</a>
                    @endforeach
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
    <div class="footer-bootom">
        <div class="wrapper">
            <p>517折网-淘宝天猫比价优惠券白菜秒杀特价红包返利网  <a href="http://www.miitbeian.gov.cn/" target="_blank"></a>　　Copyright @2018-2019 517折网 517zhe.com  All Rights Reserved</p>
        </div>
    </div>
</div>