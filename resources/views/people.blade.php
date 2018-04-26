@extends('_layout')

@section('content')
    <div class="page-people">
        <div class="container">
            <div class="section">
                <div class="section-title">
                    Professor
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="person-info big" style="background-image: url(/img/people/jaewoo1.jpg)">
                            <div class="color-overlay"></div>
                            <div class="text-overlay">
                                <div class="name">
                                    Jaewoo Kang, Ph.D
                                </div>
                                <div class="title">
                                    Professor
                                </div>
                                <div class="detail">
                                	Department of Computer Science, Korea University<br>
                                    kangj AT korea.ac.kr <br>
                                    +82-2-3290-4840
                                </div>
                            </div>
                        </div>
                        <div class="person-profile">
                            <div class="profile-section-title">
                                Education
                            </div>
                            <div class="profile-section-content">
                                Ph.D., CS, University of Wisconsin-Madison, USA, 2003 <br>
                                M.S., CS, University of Colorado at Boulder, USA, 1996<br>
                                B.S., CS, Korea University, Seoul, South Korea, 1994<br>
                            </div>
                            <div class="profile-section-title">
                                Work Experience
                            </div>
                            <div class="profile-section-content">
                            	Associate Professor, North Carolina State University, Raleigh, NC, USA (2003-2006)<br>
                                CTO and Founder, WISEngine Inc., 2000
                            </div>
                            <div class="profile-section-title">
                                Other Affiliations
                            </div>
                            <div class="profile-section-content-small">
                                Dept. Head, Interdisciplinary Graduate Program in Bioinformatics <br>
                                P.I., BK21PLUS Big Data Scientist Human Resource Development Project <br>
                                Member, ACM and IEEE <br>
                                Editor and Program Committee, International journals and conferences including Journal of Computer Science and Engineering, IEEE ICDE, AAAI, ACM JCDL, DASFAA, ACM SIGMOD etc.


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @foreach($grades as $grade => $people)
                <div class="section">
                    <div class="section-title">
                        {{ $grade }}
                    </div>
                    <div class="section-content">
                        <div class="row">
                            @foreach($people as $person)
                                <div class="person-info" style="background-image: url({{ $person->imageUrl }})">
                                    <div class="color-overlay"></div>
                                    <div class="text-overlay">
                                        <div class="detail">
                                            <center><i>{{ $person->saying }}</i></center>
                                        </div>
                                        <div class="name">
                                            {{ $person->name }}
                                        </div>
                                        <div class="detail">
                                            {{ $person->position1 }}
                                        </div>
                                        <div class="detail">
                                            {{ $person->position2 }}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
@endsection