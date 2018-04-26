@extends('_layout')

@section('content')
    <div class="page-seminar">
        <div class="section section-dark">
            <div class="container">
                <h4 class="section-title">Weekly Seminar</h4>
                <div class="content">
                    <p>
                        Our DMIS lab has weekly seminars where members share their research projects related to data mining through presentation. Our aim is to facilitate a better academic and synergestic atmosphere where members can exchange their various research ideas through discussion. It is also a good opportunity to sharpen not only their research but also their presentation skills. <br>
                        Anyone who is interested may attend our weekly seminar which is held on Fridays. <br>
                        Below are one of the topics that has been discussed in our previous seminars. 
                    </p>
                    <h5>Previously Discussed Seminar Topics</h5>
                    <table class="table-schedule" cellspacing="0">
                        <tr>
                            <td>2018.04.20</td>
                            <td>Calendar Event Time Prediction and Biomedical Entity Search</td>
                            <td>김동현</td>
                        </tr>
                        <tr>
                            <td>2018.04.06</td>
                            <td>ChemProt DREAM Challenge and varDrugPub</td>
                            <td>임상락</td>
                        </tr>
                        <tr>
                            <td>2018.03.30</td>
                            <td>Machine Learning for Curing Diseases</td>
                            <td>전민지</td>
                        </tr>
                        <tr>
                            <td>2018.03.23</td>
                            <td>Deep Learning on Medical Images</td>
                            <td>정휘진</td>
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
                        Our DMIS lab has weekly study sessions for academic purposes.<br>
                        Anyone interested, please contact the coordinator of each study session.
                    </p>
                    <h5>On-going Study Sessions</h5>
                    <div class="table-session">
                        <div class="session-title">
                            Research Paper Implementation
                        </div>
                        <div class="session-detail">
                            <div class="name">Coordinator</div>
                            <div class="value">Jinhyuk Lee (jinhyuk@korea.ac.kr)</div>
                        </div>
                        <div class="session-detail">
                            <div class="name">Objective</div>
                            <div class="value">To develop an in-depth understanding of previous works related to data mining.</div>
                        </div>
                    </div>
                    <div class="table-session">
                        <div class="session-title">
                            Automatic Recommendation Task
                        </div>
                        <div class="session-detail">
                            <div class="name">Coordinator</div>
                            <div class="value">Raehyun Kim (lhkim20@gmail.com)</div>
                        </div>
                        <div class="session-detail">
                            <div class="name">Objective</div>
                            <div class="value">To discover various recommendation tasks applied with machine learning(?)</div>
                        </div>
                    </div>
                    <div class="table-session">
                        <div class="session-title">
                            Deep Learning Book 
                        </div>
                        <div class="session-detail">
                            <div class="name">Coordinator</div>
                            <div class="value">Hyunjae Kim (nowkim92@gmail.com)</div>
                        </div>
                        <div class="session-detail">
                            <div class="name">Objective</div>
                            <div class="value">To develop a sharper insight in deep learning through reading materials(Deep Learning by Goodfellow)</div>
                        </div>
                    </div>
                    <div class="table-session">
                        <div class="session-title">
                            Pattern Recognition Machine Learning
                        </div>
                        <div class="session-detail">
                            <div class="name">Coordinator</div>
                            <div class="value">Jinhyuk Lee (jinhyuk@korea.ac.kr)</div>
                        </div>
                        <div class="session-detail">
                            <div class="name">Objective</div>
                            <div class="value">To get a grasp of how to apply machine learning to pattern recognition tasks</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection