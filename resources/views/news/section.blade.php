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

    <div id="logo"><img src="img/pc_logo.png" alt=""></div>
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
            <img src="img/LINE.png" style="float:left;">
            <img src="img/youtube.png" style="float:left; padding-left:10px">
            <img src="img/fb.png" style="float:left;padding-left:10px">
            <img src="img/IG.png" style="float:left;padding-left:10px">
        </div>
    </div>

    <div id="marquee-box">
        <h4><span class="badge badge-secondary" style="background:white;color:black; padding-right:10px;">快訊</span>實領15萬？外交官打臉口譯哥 公布明細月薪逾28萬元</h4>
    </div>

    <div class="Section_main">
        <div class='title'>
            <h2>日大阪府立高中入學考 刪報名表「性別欄」</h2>
            <div class='title_inner'>
                <img src="img/section_title_pic.jpg" alt="">
                <p>2018/1/16中央社</p>
            </div>
        </div>

        <div class="main">
            <i></i>
            <img src="img/section_main_pic.jpg" alt="">
            <i></i>
            <div class='row'>
                <p>日本大阪府教育廳針對明年春天舉行的府立高中入學考試，為顧及LGBT（同性戀、雙性戀和跨性別者）學生的想法，且性別並不影響考試及招生，決定刪除報名表上的性別欄。</p>
                <p>日本產經新聞報導，大阪府教育廳決定從明年春天舉行的府立高中入學考試時，刪除報名表上的性別欄。</p>
                <p>教育廳表示，顧及LGBT學生對填寫性別有所排斥，所以做出這樣的決定。</p>
                <p>但與報名表同時提出、由各國中所做的調查書，因為校方必須掌握學生的健康狀況，所以仍留有性別欄。</p>
                <p>福岡縣教育委員會也決定，明年的縣立高中入學考試的報名表及準考證，也會刪除性別欄。</p>
                <p>日本讀賣新聞報導，由於縣立高中入學考試並沒有限制男女招生名額，福岡縣教育委員會高校教育課表示，所以不寫性別對招生沒有任何影響。</p>
                <p>日本放送協會（NHK）報導，各地方政府如何處理入學考試報名表性別欄，文部科學省初等中等教育局兒童生徒課表示，目前尚未掌握全日本的狀況，所以並不清楚。</p>
            </div>

        </div>


    </div>

    <div id='keyword'>
        <div style="height:800px">
            <h4><img src="img/con1.png" alt=""> <b>推薦閱讀</b></h4>
            @for ($i = 0; $i < 6; $i++)
                <div class='inner'>
                    <a href="#">
                        <img src="img/keyword1.jpg" alt="">
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
        <div style="height:800px;margin-bottom:75px">
            <h4><img src="img/con1.png" alt=""> <b>國際人氣瀏覽</b></h4>
            @for ($i = 0; $i < 6; $i++)
                <div class='inner'>
                    <a href="#">
                        <img src="img/keyword1.jpg" alt="">
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
                    <img src="img/bottom_tag.png" alt="">
                </div>
                <div class="right">
                    <p>東森電視事業股份有限公司 10041 台北市忠孝西路一段4號14樓 客服專線：02-2388-5918 隱私權政策</p>
                    <p style="display:block;margin-left:75px">服務時間：週一至週五 09:00-20:00｜傳真：02-2388-5846｜客服信箱：service@ebc.net.tw</p>
                    <p style="display:block;margin-left:360px">東森電視 版權所有 © 2019 EBC All Rights Reserved</p>
                </div>
            </div>
        </div>

    </div>
@endsection