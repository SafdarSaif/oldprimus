@foreach($universites as $uni)
<div class="col-12">
    <a href="/top-universities-colleges/{{$uni->slug}}" aria-label="{{$uni->name}}">
        <div class="card feature-card-12 border">
            <div class="card-body">
                <div class="row align-items-center">
                    <a href="/top-universities-colleges/{{$uni->slug}}" class="btn btn-primary uni_km d-none d-md-block"><span>Know More<i class="bi bi-arrow-right"></i></span></a>
                    <div class="col-md-3">
                        <a href="/top-universities-colleges/{{$uni->slug}}">
                            <img src="/{{$uni->logo}}" class="mb-3 uni_logo_bg" width="210" alt="{{$uni->name}}" />
                        </a>
                    </div>
                    <div class="col-md-9">
                        <div class="bg-success position-absolute right-0 top-0">
                            @if($uni->university_type == 1)
                            <p class="m-0 badge text-white">Regular</p>
                            @elseif($uni->university_type == 2)
                            <p class="m-0 badge text-white">Distance / Online</p>
                            @elseif($uni->university_type == 4)
                            <p class="m-0 badge text-white">WILP</p>
                            @else
                            <p class="m-0 badge text-white">Other</p>
                            @endif
                        </div>
                        <a href="/top-universities-colleges/{{$uni->slug}}">
                            <h4 class="subtitle mb-1">{{$uni->name}}</h4>
                        </a>
                        <p class="card-text mb-1"><span class="fw-bold">Location: </span><span>{{$uni->location}},</span> {{$uni->state}}</p>
                        <p class="card-text mb-1"><span class="fw-bold">Approved By: </span>
                            @foreach($appList as $app)
                            @if ($loop->parent->iteration === $loop->iteration)
                            @foreach($app as $a)
                            <span class="mx-1">{{$a}}</span>
                            @endforeach
                            @endif
                            @endforeach
                        </p>
                        <p class="card-text"><span class="fw-bold">Average Course Fee:</span> ₹<span>{{$uni->avgFee}}</span>/-</p>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>
@endforeach