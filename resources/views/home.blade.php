@extends('_layout')

@section('content')
    <link rel="stylesheet" href="https://cdn.rawgit.com/noraesae/perfect-scrollbar/db7ff682/dist/css/perfect-scrollbar.min.css"/>
    <div class="page-home">
        <div class="hero">
            <div class="container">
                <h1>Welcome to DMIS Laboratory</h1>
                <p>
                    Our research interests lie in big data mining which aims to find models,<br>
                    algorithms, and systems for any kinds of data analysis with applications on<br>
                    knowledge discovery, learning, and anomaly detection.
                </p>
                <h2>Specifically, we focus on the following research topics:</h2>
                <ul class="topics">
                    <li>
                        <img src="/img/web.png" alt="Web data mining">
                    </li>
                    <li>
                        <img src="/img/bio.png" alt="Bio data mining">
                    </li>
                    <li>
                        <img src="/img/stock.png" alt="Stock market data mining">
                    </li>
                </ul>
            </div>
        </div>
        <div class="news">
            <div class="container">
                <h1>What's New about DMIS Lab</h1>
                <div class="news-container">
                    <div class="news-section">
                        <label class="news-category">DMIS in Media</label>
                        <ul class="news-list" id="news-list">
                            <li><a href="/news?id=dream_pro"><strong><img src="/img/new-256.png" width="20" height="20" /> [Nov. 2017]</strong> 고려대학교 강재우 교수 연구팀 - 미국 국립 암 연구원의 유전단백체 연구센터 (NCI-CPTAC) 주최, 암 환자의 단백질 활성도를 예측하는 NCI-CPTAC DREAM Proteogenomics Challenge에 참가하여 대회 역사상 한국팀 최초 우승! </a></li>
                            <li><a href="/news?id=dream_dcp"><strong>[Mar. 2016]</strong> 세계 10대 제약회사 "AstraZeneca" 주최, 항암제 병합 치료의 효능을 예측하는 The AstraZeneca-Sanger Drug Combination Prediction Challenge에 참여하여 전 세계 62팀 중 Stanford University(6위), MIT(11위)를 제치고 2위 입상. </a></li>
                            <li><a href="/news?id=dream_dpd"><strong>[Oct. 2016]</strong> 생물학적 네트워크에서 질병에 연관된 모듈을 발굴하는 Disease Module Identification DREAM Challenge: Discover disease pathways in genomic networks 대회에 참여하여 전체 42팀 중 종합성적 공동2위 달성. </a></li>
                        </ul>
                    </div>
                    <div class="news-section">
                        <label class="news-category">Accepted Paper</label>
                        <ul class="news-list" id="paper-list">
                            <li><a href="/publications"><strong><img src="/img/new-256.png" width="20" height="20" /> [Apr. 2018]</strong> IJCAI 2018 Accepted! - Content-Aware Hierarchical Point-of-Interest Embedding Model for Successive POI Recommendation </a></li>
                            <li><a href="/publications"><strong>[Apr. 2018]</strong> IJCAI 2018 Accepted! - Content-Aware Hierarchical Point-of-Interest Embedding Model for Successive POI Recommendation </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="hire">
            <div class="container">
                <h1>HIRING - ALWAYS OPEN</h1>
                <ul class="hire-list">
                    <li>
                        <img src="/img/icon1.png" alt="Undergraduate students">
                        <div class="desc">Undergraduate Students</div>
                    </li>
                    <li>
                        <img src="/img/icon2.png" alt="Graduate students">
                        <div class="desc">Graduate Students</div>
                    </li>
                    <li>
                        <img src="/img/icon3.png" alt="Post-doctoral">
                        <div class="desc">Post-Doctoral</div>
                    </li>
                </ul>
                <label class="feel-free">Feel free to ask us at any time!</label>
                <a href="/about#contact" class="goto-contact">Go to Contact</a>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.rawgit.com/noraesae/perfect-scrollbar/db7ff682/dist/js/perfect-scrollbar.min.js"></script>
    <script>
        Ps.initialize(document.getElementById('news-list'));
        Ps.initialize(document.getElementById('paper-list'));
    </script>
@endsection