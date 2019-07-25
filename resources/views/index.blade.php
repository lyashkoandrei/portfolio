@extends('layouts.app')

@section('content')

    <style>
        .bg-primary {
            background-color: {{$about->color}} !important;
        }
        .text-primary {
            color: {{$about->color}} !important;
        }
        nav.bg-primary a {
            color: #fff !important;
        }
        a {
            color: {{$about->color}} !important;
        }
        .social-icons a:hover {
            background-color: {{$about->color}} !important;
        }
    </style>

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
        <div class="w-100">
            <h1 class="mb-0">{{$about->name}}
                <span class="text-primary">{{$about->surname}}</span>
            </h1>
            <div class="subheading mb-5">{{$about->address}} · {{$about->tel}} ·
                <a href="mailto:{{$about->email}}">{{$about->email}}</a>
            </div>
            <p class="lead mb-5">{{$about->description}}</p>
            <div class="social-icons">
                <a href="{{$about->linkedin}}">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="{{$about->github}}">
                    <i class="fab fa-github"></i>
                </a>
                <a href="{{$about->twitter}}">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="{{$about->facebook}}">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="{{$about->stackoverflow}}">
                    <i class="fab fa-stack-overflow"></i>
                </a>
            </div>
        </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="experience">
        <div class="w-100">
            <h2 class="mb-5">Experience</h2>
            @foreach($experience as $e => $v)
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="resume-content">
                        <h3 class="mb-0">{{ $v -> position}}</h3>
                        <div class="subheading mb-3">{{$v -> company}}</div>
                        <p>{{$v->description}}</p>
                    </div>
                    <div class="resume-date text-md-right">
                        <span class="text-primary">{{$v->years}}</span>
                    </div>
                </div>
            @endforeach
        </div>

    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="education">
        <div class="w-100">
            <h2 class="mb-5">Education</h2>

            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                <div class="resume-content">
                    <h3 class="mb-0">University of Colorado Boulder</h3>
                    <div class="subheading mb-3">Bachelor of Science</div>
                    <div>Computer Science - Web Development Track</div>
                    <p>GPA: 3.23</p>
                </div>
                <div class="resume-date text-md-right">
                    <span class="text-primary">August 2006 - May 2010</span>
                </div>
            </div>

            <div class="resume-item d-flex flex-column flex-md-row justify-content-between">
                <div class="resume-content">
                    <h3 class="mb-0">James Buchanan High School</h3>
                    <div class="subheading mb-3">Technology Magnet Program</div>
                    <p>GPA: 3.56</p>
                </div>
                <div class="resume-date text-md-right">
                    <span class="text-primary">August 2002 - May 2006</span>
                </div>
            </div>

        </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="skills">
        <div class="w-100">
            <h2 class="mb-5">Skills</h2>

            <div class="subheading mb-3">Programming Languages &amp; Tools</div>
            <ul class="list-group dev-icons list-group-flush">
                <li class="list-group-item">
                    <i class="fab fa-php"></i>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: {{$v->percentage}}%;"
                             aria-valuenow={{$v->percentage}} aria-valuemin="0"
                             aria-valuemax="100">{{$v->percentage}}%</div>
                    </div>
                </li>
                <li class="list-inline-item">
                    <i class="fab fa-html5"></i>
                </li>
                <li class="list-inline-item">
                    <i class="fab fa-css3-alt"></i>
                </li>
                <li class="list-inline-item">
                    <i class="fab fa-js-square"></i>
                </li>
                <li class="list-inline-item">
                    <i class="fab fa-wordpress"></i>
                </li>
            </ul>

            <div class="subheading mb-3">Workflow</div>
            <ul class="fa-ul mb-0">
                <li>
                    <i class="fa-li fa fa-check"></i>
                    Mobile-First, Responsive Design</li>
                <li>
                    <i class="fa-li fa fa-check"></i>
                    Cross Browser Testing &amp; Debugging</li>
                <li>
                    <i class="fa-li fa fa-check"></i>
                    Cross Functional Teams</li>
                <li>
                    <i class="fa-li fa fa-check"></i>
                    Agile Development &amp; Scrum</li>
            </ul>
        </div>
    </section>

    <hr class="m-0">

@endsection