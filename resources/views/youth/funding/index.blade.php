@extends('youth.layout.layout')

@section('main')
    <main>
        <div class="container">
            <section>

                <div class="row">
                    <div class="col-12 col-xl-12 col-xxl-12 mb-5">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="heading title display-2 text-center fw-bold">طلبات التمويل الخاصة بي</h1>
                                <div class="row">
                                    @foreach($requests as $item)
                                        <div class="col-4">
                                            <div class="card h-100">
                                                <img src="{{asset('assets/img/illustration/donation.png')}}"
                                                     class="card-img-top"
                                                     alt="image">
                                                <div class="card-body">
                                                    <a href="{{route('youth.funding.show', $item->id)}}"><h5 class="card-title display-6 fw-bold">{{$item->title}}</h5></a>
                                                    <div class="progress progress-lg my-3">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="25"
                                                             aria-valuemin="0" aria-valuemax="100"
                                                             style="width: 25%;"></div>
                                                    </div>
                                                    <p class="card-text">
                                                        تم
                                                        جمع {{$item->donations->first()?$item->donations->first()->donated_amount:0}}
                                                        $ من أصل
                                                        {{$item->amount}}$
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- List End -->


                </div>
            </section>
        </div>
    </main>
@endsection
