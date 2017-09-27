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
                        <div class="person-info big" style="background-image: url(//lorempixel.com/400/400)">
                            <div class="color-overlay"></div>
                            <div class="text-overlay">
                                <div class="name">
                                    Jaewoo Kang, Ph. D
                                </div>
                                <div class="detail">
                                    Department of Computer Science </br>
                                    and Radio Engineering Korea University
                                </div>
                                <div class="detail">
                                    hello@korea.ac.kr
                                </div>
                                <div class="detail">
                                    +82-2-123-5678
                                </div>
                            </div>
                        </div>
                        <div class="person-profile">
                            <div class="profile-section-title">
                                Education
                            </div>
                            <div class="profile-section-content">
                                Ph.D. in CS, University of Wisconsin–Madison, USA<br>
                                M.S.. in CS, University of Colorado Boulder, USA<br>
                                B.S. in CS, Korea University, South Korea<br>
                            </div>
                            <div class="profile-section-title">
                                Work Experience
                            </div>
                            <div class="profile-section-content">
                                Ph.D. in CS, University of Wisconsin–Madison, USA<br>
                                M.S.. in CS, University of Colorado Boulder, USA<br>
                                B.S. in CS, Korea University, South Korea<br>
                            </div>
                            <div class="profile-section-title">
                                Other Affiliations
                            </div>
                            <div class="profile-section-content">
                                Ph.D. in CS, University of Wisconsin–Madison, USA<br>
                                M.S.. in CS, University of Colorado Boulder, USA<br>
                                B.S. in CS, Korea University, South Korea<br>
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
                                        <div class="name">
                                            {{ $person->name }}
                                        </div>
                                        <div class="detail">
                                            {{ $person->position }}
                                        </div>
                                        <div class="detail">
                                            {{ $person->email }}
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