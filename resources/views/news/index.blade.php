@extends('layout.master')
@section('title')
    東森新聞網
@endsection

@section('content')
    <div id="head">
        <div class="left">
            <div class="breadcrumb-color">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb skin-white">
                        <li class="breadcrumb-item"><a href="#">EBC東森電視</a></li>
                        <li class="breadcrumb-item"><a href="#">東森Apps</a></li>
                        <li class="breadcrumb-item"><a href="#">東森美洲</a></li>
                        <li class="breadcrumb-item"><a href="#">简体</a></li>
                    </ol>
                </nav>
            </div>

        </div>

        <div class="right">
            <button class="calender"><i class="far fa-calendar-alt"></i></button>
            <input type="text" class="search" placeholder="請輸入關鍵字" list="keywordList">
            <datalist id="keywordList">
                <option>韓國瑜</option>
                <option>嚴凱泰</option>
                <option>孫安佐</option>
            </datalist>

            <button class="search-btn"><i class="fas fa-search"></i></button>
        </div>
    </div>

    <div id="logo"><img src={{url('/img/pc_logo.png')}} alt=""></div>
    <div id="nav">
        <div class="left">
            <div class="home">
                <i class="fas fa-home" style="cursor:pointer;"></i>
            </div>
            <div class="nav-item">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb skin-black">
                        <li class="breadcrumb-item"><a href="#"></a></li>
                        <li class="breadcrumb-item"><a href="#">即時</a></li>
                        <li class="breadcrumb-item"><a href="#">熱門</a></li>
                        <li class="breadcrumb-item"><a href="#">娛樂</a></li>
                        <li class="breadcrumb-item"><a href="#">總覽</a></li>
                        <li class="breadcrumb-item"><a href="#">影音</a></li>
                        <li class="breadcrumb-item"><a href="#">關鍵</a></li>
                        <li class="breadcrumb-item"><a href="#">直播</a></li>
                        <li class="breadcrumb-item"><a href="#">話題</a></li>
                    </ol>
                </nav>
            </div>

        </div>

        <div class="right" style="cursor:pointer;">
            <img src={{url("img/Line.png")}} style="float:left;">
            <img src={{url("img/youtube.png")}} style="float:left; padding-left:10px">
            <img src={{url("img/fb.png")}} style="float:left;padding-left:10px">
            <img src={{url("img/IG.png")}} style="float:left;padding-left:10px">
        </div>
    </div>

    <div id="marquee-box">
        <h4><span class="badge badge-secondary" style="background:white;color:black; padding-right:10px;">快訊</span>實領15萬？外交官打臉口譯哥 公布明細月薪逾28萬元</h4>
    </div>

    <div class="outside">
        <dl id="focus">
            <dd id = "SelectNew">
                <div class="text">
                    <span id='text_main'></span>
                    <i></i>
                </div>
            </dd>
            <dt>
                <div class="left-bt">
                    <li></li>
                    <img src={{url("img/arrow-left-w.gif")}}>
                </div>
                <div id="mainNew" class="main">
                    @foreach ($titleNews as $new)
                        <ul>
                            <img src={{url($new->img_src)}}>
                            <p>{{$new->title}}</p>
                        </ul>
                    @endforeach
                </div>
                <div class="right-bt">
                    <li></li>
                    <img src={{url("img/arrow-right-w.gif")}}>
                </div>
            </dt>
        </dl>
        <div id="focus2">
            <h4><img src={{url("img/con1.png")}} alt=""> 即時</h4>
            @for ($i = 0; $i < 8; $i++)
                <div class='inner'>
                    <a href="#">曾之喬美肌有一套 化身林宥嘉保養神隊友</a>
                </div>
            @endfor
                <a href="#" style="color:black;float:right;">看更多</a>
        </div>
    </div>

    <div class="rednumber">
            <h4><img src={{url("img/con1.png")}} alt=""> <b>熱門</b></h4>

            <div class="left_box">
                <ol>
                    <li><span class="tag" style="background-color:#02a8e4;">社會</span><span class="tag_title">肉圓父鐵棍猛打3下瘀血 兒泣：為什麼生下我…很想死</span></li>
                    <li><span class="tag" style="background-color:#db34a4;">娛樂</span><span class="tag_title">資深藝人澎澎尪驚傳去世！ 心肌梗塞享壽69歲</span></li>
                    <li><span class="tag" style="background-color:#02a8e4;">社會</span><span class="tag_title">狄鶯噤聲神隱35天 孫安佐揭真相！4字嗆爆貝克宇</span></li>
                    <li><span class="tag" style="background-color:#7a17c4;">生活</span><span class="tag_title">驚人3大功能曝光！超商外加裝「玻璃亭」網讚：長知識</span></li>
                    <li><span class="tag" style="background-color:#7a17c4;">生活</span><span class="tag_title">連3晚夢「女友出軌」…他醒來逼問竟招了 網全傻眼</span></li>
                </ol>
            </div>
            <div class="right_box">
                <ol start='6'>
                    <li><span class="tag" style="background-color:#7a17c4;">生活</span><span class="tag_title">肉圓父鐵棍猛打3下瘀血 兒泣：為什麼生下我…很想死</span></li>
                    <li><span class="tag" style="background-color:#db34a4;">娛樂</span><span class="tag_title">資深藝人澎澎尪驚傳去世！ 心肌梗塞享壽69歲</span></li>
                    <li><span class="tag" style="background-color:#db34a4;">娛樂</span><span class="tag_title">狄鶯噤聲神隱35天 孫安佐揭真相！4字嗆爆貝克宇</span></li>
                    <li><span class="tag" style="background-color:#94c516;">新奇</span><span class="tag_title">驚人3大功能曝光！超商外加裝「玻璃亭」網讚：長知識</span></li>
                    <li><span class="tag" style="background-color:#7a17c4;">生活</span><span class="tag_title">連3晚夢「女友出軌」…他醒來逼問竟招了 網全傻眼</span></li>
                </ol>
            </div>

    </div>

    @for ($i = 0; $i < 2; $i++)
        <div id="index">
            <div class="index_title"><h3> <img src={{url("img/con1.png")}}>不爽肉圓沒加辣！男暴打妻兒</h3></div>
            <div class='index_left'>
                <a href=""><img src={{url("img/index_new.jpg")}} alt=""></a>
            </div>
            <div class='index_right'>
                    <a href="#">
                        <div class='pic_left'>
                            <img src={{url("img/pic_right.jpg")}} alt="">
                        </div>
                        <div class='text'>
                            <p>家暴肉圓店爆紅 獨門辣椒醬秒完售！老闆娘超狂背景曝光</p>
                            <p style="color:#7F667F;font-size:15px">01/15 16:45</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class='pic_left'>
                            <img src={{url("img/pic_right.jpg")}} alt="">
                        </div>
                        <div class='text'>
                            <p>家暴肉圓店爆紅 獨門辣椒醬秒完售！老闆娘超狂背景曝光</p>
                            <p style="color:#7F667F;font-size:15px">01/15 16:45</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class='pic_left'>
                            <img src={{url("img/pic_right.jpg")}} alt="">
                        </div>
                        <div class='text'>
                            <p>家暴肉圓店爆紅 獨門辣椒醬秒完售！老闆娘超狂背景曝光</p>
                            <p style="color:#7F667F;font-size:15px">01/15 16:45</p>
                        </div>
                    </a>
            </div>
        </div>
    @endfor

    <div id='keyword'>
        <h4><img src={{url("img/con1.png")}} alt=""> <b>精彩關鍵</b></h4>

        @for ($i = 0; $i < 6; $i++)
            <div class='inner'>
                <a href="#">
                    <img src={{url("img/keyword1.jpg")}} alt="">
                    <p>政大選研民調：2020蔡英文、朱立倫加起來都還輸給柯文哲！！ 關鍵時刻20190115-4 黃暐瀚 謝龍介 吳子嘉 林國慶 朱學恒</p>
                    <p style="font-size:15px;">
                        觀看次數 12
                    </p>
                    <p style="font-size:15px;">
                        1天前
                    </p>
                </a>
            </div>
        @endfor
    </div>

    <div id='bottom_new'>

        @for ($i = 0; $i < 6; $i++)

            <div class='inner'>
                <h4><img src={{url("img/con1.png")}} alt=""> <b>社會</b></h4>
                <a href="#">
                    <img src={{url("img/bottom1.jpg")}} alt="">
                    <p>
                        家暴案私刑爭議 警籲理性勿觸法 <span>01/16 16:35</span>
                    </p>
                    <p>
                        一屋米蟲！生母投靠堂姊夫妻... <span>01/16 16:35</span>
                    </p>
                    <p style="margin-bottom:0">
                        家暴案私刑爭議 警籲理性勿觸法 <span>01/16 16:35</span>
                    </p>
                    <p style="float:right;border:none; margin-right:30px">看更多></p>
                </a>
            </div>
        @endfor
    </div>

    <div id='bottom'>
        <div class='inner'>
            <div class='breadcrumb_top'>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb skin-black">
                            <li class="breadcrumb-item"><a href="#">節目表</a></li>
                            <li class="breadcrumb-item"><a href="#">新聞自律委員會</a></li>
                            <li class="breadcrumb-item"><a href="#">資訊公開專區</a></li>
                            <li class="breadcrumb-item"><a href="#">取消訂閱推播</a></li>
                        </ol>
                    </nav>
            </div>
            <div class='breadcrumb_bottom'>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb skin-black">
                        <li class="breadcrumb-item"><a href="#">東森電視首頁</a></li>
                        <li class="breadcrumb-item"><a href="#">財經新聞台</a></li>
                        <li class="breadcrumb-item"><a href="#">綜合台</a></li>
                        <li class="breadcrumb-item"><a href="#">戲劇台</a></li>
                        <li class="breadcrumb-item"><a href="#">幼幼台</a></li>
                        <li class="breadcrumb-item"><a href="#">電影台</a></li>
                        <li class="breadcrumb-item"><a href="#">洋片台</a></li>
                        <li class="breadcrumb-item"><a href="#">超視</a></li>
                        <li class="breadcrumb-item"><a href="#">亞洲衛視</a></li>
                        <li class="breadcrumb-item"><a href="#">美洲衛視</a></li>
                        <li class="breadcrumb-item"><a href="#">YOYO幼兒園</a></li>
                        <li class="breadcrumb-item"><a href="#">東森創作</a></li>
                    </ol>
                </nav>
            </div>
            <div class='inner_bottom'>
                <div class='left'>
                    <img src={{url("img/bottom_tag.png")}} alt="">
                </div>
                <div class="right">
                    <p>東森電視事業股份有限公司 10041 台北市忠孝西路一段4號14樓 客服專線：02-2388-5918 隱私權政策</p>
                    <p style="display:block;margin-left:75px">服務時間：週一至週五 09:00-20:00｜傳真：02-2388-5846｜客服信箱：service@ebc.net.tw</p>
                    <p style="display:block;margin-left:360px">東森電視 版權所有 © 2019 EBC All Rights Reserved</p>
                </div>
            </div>
        </div>

    </div>
    <script>
        var oAct = new focusOn();
    </script>
@endsection
