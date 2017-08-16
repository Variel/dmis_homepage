@extends('_layout')

@section('content')
    <div class="page-seminar">
        <div class="section section-dark">
            <div class="container">
                <h4 class="section-title">Seminar</h4>
                <div class="content">
                    <p>
                        In DMIS seminar, we have talks about various topics of data mining related topics.<br>
                        Anyone interested can attend our seminar.
                    </p>
                    <h5>On-going Seminar Schedule</h5>
                    <table class="table-schedule" cellspacing="0">
                        <tr>
                            <td>2017.06.18</td>
                            <td>Question Answering with Subgraph Embeddings</td>
                            <td>Minji Yoon</td>
                        </tr>
                        <tr>
                            <td>2017.06.11</td>
                            <td>Linearized and Single-Pass Belief Propagation</td>
                            <td>Saehan Jo</td>
                        </tr>
                        <tr>
                            <td>2017.06.07</td>
                            <td>Music Emotion Recognition via End-to-End Multimodal Neural Networks</td>
                            <td>Byungsoo Jeon</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="section section-light">
            <div class="container">
                <h4 class="section-title">Study</h4>
                <div class="content">
                    <p>
                        In DMIS study, we have talks about various topics of data mining related topics.<br>
                        Anyone interested, please contact the coordinator of each study session.
                    </p>
                    <h5>On-going Study Session</h5>
                    <div class="table-session">
                        <div class="session-title">
                            NLP with Deep Learning (Stanford-CS224n)
                        </div>
                        <div class="session-detail">
                            <div class="name">Coordinator</div>
                            <div class="value">Jinhyuk Lee (jinhyuk@korea.ac.kr)</div>
                        </div>
                        <div class="session-detail">
                            <div class="name">Material</div>
                            <div class="value">http://web.stanford.edu/class/cs224n/index.html</div>
                        </div>
                    </div>
                    <div class="table-session">
                        <div class="session-title">
                            NLP with Deep Learning (Stanford-CS224n)
                        </div>
                        <div class="session-detail">
                            <div class="name">Coordinator</div>
                            <div class="value">Jinhyuk Lee (jinhyuk@korea.ac.kr)</div>
                        </div>
                        <div class="session-detail">
                            <div class="name">Material</div>
                            <div class="value">http://web.stanford.edu/class/cs224n/index.html</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection