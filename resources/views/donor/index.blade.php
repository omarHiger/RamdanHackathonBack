@extends('donor.layout.layout')

@section('main')

    <main>
        <div class="container">

            <section>
                <div class="row">
                    <div class="col-12 col-xl-12 col-xxl-12 mb-5">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="heading title display-2 text-center fw-bold">آخر تطورات المشاريع التي تبرعت
                                    بها</h1>

                                <div class="search mb-5 w-75 text-center m-auto">
                                    <div class="d-flex">
                                        <div class="mb-3 filled lg flex-grow-1">
                                            <input class="form-control" placeholder="بحث">
                                            <i data-acorn-icon="search"></i>
                                        </div>
                                        <div>
                                            <button class="btn btn-primary me-3">بحث</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    @foreach($updates as $item)
                                        <div class="col-md-12 mb-5">
                                            <div class="d-flex justify-content-between">
                                                <div class="py-4 py-lg-0 px-lg-4 w-75">
                                                    <h1 class="display-3 fw-bold">{{$item->fundingRequest->title }}</h1>
                                                    <p style="line-height:2" class="h5">{{$item->description}}</p>
                                                    <div>
                                                        <span class="badge bg-primary rounded" style="font-size:14px;">{{$item->created_at->format('d-m-Y')}}</span>
                                                    </div>
                                                </div>
                                                <div><img class="rounded" width="500" height="200"
                                                          style="object-fit: fill;"
                                                          src="{{asset('assets/img/illustration/img-3.png')}}"/></div>

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
