@extends('layouts.app')
@section('content')
<div class="overlaytest js-overlay-thank-you" id="scs-pp">
    <div class="popuptest js-thank-you">
        <div class="success-heading">
            <img class="success" src="assets/images/success-icon.png" width="80">
        </div>
        <div class="success-content">
            <h2>Your message has been sent<br>
                Our manager will contact you soon</h2>
        </div>
    </div>
</div>

<section class="main">
    <div class="about">
        <p class="about-text">
            <b>
                {{ $comps[2]['body'] }}
            </b>
        </p>

        <div class="container cards">
            <div class="row">
                <div class="col align-self-start">
                    <img style="float: left" src='/assets/images/01_icon.png' alt="" width="150px">
                    <p class="w-50 mt-5 cards-text">
                        {!! $comps[4]['body'] !!}
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col align-self-end">
                    <img style="float: right" src='/assets/images/02_icon.png' alt="" width="150px">
                    <p class="w-50 mt-5 cards-text">
                        {!! $comps[5]['body'] !!}
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col align-self-start">
                    <img style="float: left" src='/assets/images/03_icon.png' alt="" width="150px">
                    <p class="w-50 mt-5 cards-text">
                        {!! $comps[6]['body'] !!}
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col align-self-end">
                    <img style="float: right" src='/assets/images/04_icon.png' alt="" width="150px">
                    <p class="w-50 mt-5 cards-text">
                        {!! $comps[7]['body'] !!}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="organization container">
        <h3 class="text-center"><b>{!! $comps[8]['body'] !!}</b></h3>
        <p class="org-text">
            {!! $comps[9]['body'] !!}
        </p>

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation" onmousedown="viewCommittee()">
                <a class="nav-link active" id="committee-tab" data-bs-toggle="tab" data-bs-target="#committee" type="button" role="tab" aria-controls="committee" aria-selected="true">Committee Members</a>
            </li>
            <li class="nav-item" role="presentation" onmousedown="viewHonor()">
                <a class="nav-link" id="honor-tab" data-bs-toggle="tab" data-bs-target="#honor" type="button" role="tab" aria-controls="honour" aria-selected="false">Honorary appointments</a>
            </li>
            <li class="nav-item" role="presentation" onmousedown="viewTeam()">
                <a class="nav-link" id="team-tab" data-bs-toggle="tab" data-bs-target="#team" type="button" role="tab" aria-controls="team" aria-selected="false">Our team</a>
            </li>
        </ul>



        <!--Committee Members-->
        <div class="tab-content container" id="myTabContent">
            <div class="tab-pane fade show active" id="committee" role="tabpanel" aria-labelledby="committee-tab">
                <div class="row">
                    <div class="col-md-7">
						@foreach($employees as $key => $employee)
						@if ($employee->type == 1)
                        <div class="card committee" id="committee{{ $key + 1 }}-left">
                            <div class="committee-header row">
                                <div class="committee-name col-md-6" id="committee-left">
                                    <h2><b>{{ $employee->fio }}</b></h2>
                                    <h6>{{ $employee->position }}</h6>
                                    <h8>{{ $employee->company }}</h8>
                                </div>
                                <div class="col-md-6">
                                    <img class="committee-photo" src="/images/employees/{{ $employee->img  }}">
                                </div>
                            </div>

                            <div class="card-body">
                                <p class="card-text"></p>
                            </div>
                        </div>
						@endif
						@endforeach
					</div>
                    <div class="offset-1"></div>
                    <div class="my_scroll_div col-md-4">
						@foreach($employees as $key => $employee)
						@if ($employee->type == 1)
                        <div class="card committee-small" id="committee{{ $key + 1 }}" onmousedown="openCommittee{{ $key + 1 }}left()">
                            <div class="committee-photo text-center">
                                <img class="committee-photo-small" src="/images/employees/{{ $employee->img  }}">
                            </div>
                            <div class="text-center">
                                <h4>{{ $employee->fio }}</h4>
                            </div>
                        </div>
						@endif
						@endforeach
                    </div>
                </div>
            </div>


            <!--Honorary appointments-->
            <div class="tab-pane fade" id="honor" role="tabpanel" aria-labelledby="honor-tab">
                <div class="row">
                    <div class="col-md-7">
						@php $i = 1; @endphp
						@foreach($employees as $key => $employee)
						@if ($employee->type == 2)
                        <div class="card honor" id="honor{{ $i }}-left">
                            <div class="honor-header row">
                                <div class="honor-name col-md-6" id="committee-left">
                                    <h2><b>{{ $employee->fio }}</b></h2>
                                    <h6>{{ $employee->position }}</h6>
                                    <h8>{{ $employee->company }}</h8>
                                </div>
                                <div class="col-md-6">
                                    <img class="committee-photo" src="/images/employees/{{ $employee->img  }}">
                                </div>
                            </div>

                            <div class="card-body">
                                <p class="card-text"></p>
                            </div>
                        </div>
						@php $i++; @endphp
						@endif
						@endforeach
                    </div>

                    <div class="offset-1"></div>
                    <div class="my_scroll_div col-md-4">
						@php $i = 1; @endphp
                        @foreach($employees as $employee)
						@if ($employee->type == 2)
                        <div class="card committee-small" id="honor{{ $i }}" onmousedown="openHonor{{ $i }}left()">
                            <div class="committee-photo text-center">
                                <img class="committee-photo-small" src="/images/employees/{{ $employee->img  }}">
                            </div>
                            <div class="text-center">
                                <h4>{{ $employee->fio }}</h4>
                            </div>
                        </div>
						@php $i++; @endphp
						@endif
						@endforeach
                    </div>
                </div>
            </div>


            <!--Our Team-->
            <div class="tab-pane fade" id="team" role="tabpanel" aria-labelledby="team-tab">
                <div class="row">
                    <div class="col-md-7">
						
						@foreach($employees as $employee)
						@if ($employee->type == 3)
                        <div class="card team" id="team{{ $employee->id }}-left">
                            <div class="team-header row">
                                <div class="team-name col-md-6" id="team-left">
                                    <h2><b>{{ $employee->fio }}</b></h2>
                                    <h6>{{ $employee->position }}</h6>
                                    <h8>{{ $employee->company }}</h8>
                                </div>
                                <div class="col-md-6">
                                    <img class="committee-photo" src="/images/employees/{{ $employee->img  }}">
                                </div>
                            </div>

                            <div class="card-body">
                                <p class="card-text"></p>
                            </div>
                        </div>
						@endif
						@endforeach
                    </div>

                    <div class="offset-1"></div>
                    <div class="col-md-4">

                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection
