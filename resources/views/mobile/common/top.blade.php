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