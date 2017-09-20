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
                            <li><a href="/news?id=news01"><strong>[Nov. 2016]</strong> 고려대학교 강재우 교수 연구팀, 암치료에 새 희망 쏘다.</a></li>
                            <li><a href="/news?id=news02"><strong>[Nov. 2016]</strong> 고려대학교 강재우 교수 연구팀, 암 text text 치료에 새 희망 쏘다.</a></li>
                            <li><a href="/news?id=news01"><strong>[Nov. 2016]</strong> 고려대학교 강재우 text 교수 연구팀, 암치료에 새 희망 쏘다.</a></li>
                            <li><a href="/news?id=news01"><strong>[Nov. 2016]</strong> 고려대학교 강재우 교수 연구팀, 암치료에 새 희망 쏘다.</a></li>
                            <li><a href="/news?id=news01"><strong>[Nov. 2016]</strong> 고려대학교 강재우 교수 연구팀, 암치료에 새 희망 쏘다.</a></li>
                        </ul>
                    </div>
                    <div class="news-section">
                        <label class="news-category">Accepted Paper</label>
                        <ul class="news-list" id="paper-list">
                            <li><a href="/publications"><strong>[Nov. 2016]</strong> 고려대학교 강재우 교수 연구팀, 암치료에 새 희망 쏘다.</a></li>
                            <li><a href="/publications"><strong>[Nov. 2016]</strong> 고려대학교 강재우 교수 연구팀, 암 text text 치료에 새 희망 쏘다.</a></li>
                            <li><a href="/publications"><strong>[Nov. 2016]</strong> 고려대학교 강재우 text 교수 연구팀, 암치료에 새 희망 쏘다.</a></li>
                            <li><a href="/publications"><strong>[Nov. 2016]</strong> 고려대학교 강재우 교수 연구팀, 암치료에 새 희망 쏘다.</a></li>
                            <li><a href="/publications"><strong>[Nov. 2016]</strong> 고려대학교 강재우 교수 연구팀, 암치료에 새 희망 쏘다</a></li>
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