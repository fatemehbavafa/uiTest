<div class="sidebar">
    <div class="main-menu">
        <div class="scroll">
            <ul class="list-unstyled">
                <li @if($menu=='users')class="active"@endif>
                    <a href="#user">
                        <i class="flaticon-user"></i>
                        <span>کاربران</span>
                    </a>
                </li>
                <li @if($menu=='website')class="active"@endif>
                    <a href="#website">
                        <i class="flaticon-web"></i> وبسایت
                    </a>
                </li>
                <li @if($menu=='questions')class="active"@endif>
                    <a href="#question">
                        <i class="flaticon-question"></i>  سوالات
                    </a>
                </li>
                <li @if($menu=='test')class="active"@endif>
                    <a href="#test">
                        <i class="flaticon-check"></i> تست
                    </a>
                </li>
            </ul>
        </div>
    </div>

</div>

