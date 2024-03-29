@extends('donor.layout.layout')

@section('main')

    <main>
        <div class="container">

            <section>
                <div class="row">
                    <div class="col-8">
                        <div class="p-0">
                            <div class="glide glide-gallery" id="glideCarouselGallery">
                                <div class="glide glide-large">
                                    <div class="glide__track" data-glide-el="track">
                                        <ul class="glide__slides gallery-glide-custom">
                                            <li class="glide__slide p-0">
                                                <a href="{{asset('assets/img/product/large/product-1.webp')}}">
                                                    <img
                                                        alt="detail"
                                                        src="{{asset('assets/img/product/large/product-1.webp')}}"
                                                        class="responsive border-0 rounded-top-end rounded-top-start img-fluid mb-3 sh-50 w-100"
                                                    />
                                                </a>
                                            </li>
                                            <li class="glide__slide p-0">
                                                <a href="{{asset('assets/img/product/large/product-2.webp')}}">
                                                    <img
                                                        alt="detail"
                                                        src="{{asset('assets/img/product/large/product-2.webp')}}"
                                                        class="responsive border-0 rounded-top-end rounded-top-start img-fluid mb-3 sh-50 w-100"
                                                    />
                                                </a>
                                            </li>
                                            <li class="glide__slide p-0">
                                                <a href="{{asset('assets/img/product/large/product-3.webp')}}">
                                                    <img
                                                        alt="detail"
                                                        src="{{asset('assets/img/product/large/product-3.webp')}}"
                                                        class="responsive border-0 rounded-top-end rounded-top-start img-fluid mb-3 sh-50 w-100"
                                                    />
                                                </a>
                                            </li>
                                            <li class="glide__slide p-0">
                                                <a href="{{asset('assets/img/product/large/product-4.webp')}}">
                                                    <img
                                                        alt="detail"
                                                        src="{{asset('assets/img/product/large/product-4.webp')}}"
                                                        class="responsive border-0 rounded-top-end rounded-top-start img-fluid mb-3 sh-50 w-100"
                                                    />
                                                </a>
                                            </li>
                                            <li class="glide__slide p-0">
                                                <a href="{{asset('assets/img/product/large/product-5.webp')}}">
                                                    <img
                                                        alt="detail"
                                                        src="{{asset('assets/img/product/large/product-5.webp')}}"
                                                        class="responsive border-0 rounded-top-end rounded-top-start img-fluid mb-3 sh-50 w-100"
                                                    />
                                                </a>
                                            </li>
                                            <li class="glide__slide p-0">
                                                <a href="{{asset('assets/img/product/large/product-6.webp')}}">
                                                    <img
                                                        alt="detail"
                                                        src="{{asset('assets/img/product/large/product-6.webp')}}"
                                                        class="responsive border-0 rounded-top-end rounded-top-start img-fluid mb-3 sh-50 w-100"
                                                    />
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="glide glide-thumb mb-3">
                                    <div class="glide__track" data-glide-el="track">
                                        <ul class="glide__slides">
                                            <li class="glide__slide p-0">
                                                <img alt="thumb"
                                                     src="{{asset('assets/img/product/small/product-1.webp')}}"
                                                     class="responsive rounded-md img-fluid"/>
                                            </li>
                                            <li class="glide__slide p-0">
                                                <img alt="thumb"
                                                     src="{{asset('assets/img/product/small/product-2.webp')}}"
                                                     class="responsive rounded-md img-fluid"/>
                                            </li>
                                            <li class="glide__slide p-0">
                                                <img alt="thumb"
                                                     src="{{asset('assets/img/product/small/product-3.webp')}}"
                                                     class="responsive rounded-md img-fluid"/>
                                            </li>
                                            <li class="glide__slide p-0">
                                                <img alt="thumb"
                                                     src="{{asset('assets/img/product/small/product-4.webp')}}"
                                                     class="responsive rounded-md img-fluid"/>
                                            </li>
                                            <li class="glide__slide p-0">
                                                <img alt="thumb"
                                                     src="{{asset('assets/img/product/small/product-5.webp')}}"
                                                     class="responsive rounded-md img-fluid"/>
                                            </li>
                                            <li class="glide__slide p-0">
                                                <img alt="thumb"
                                                     src="{{asset('assets/img/product/small/product-6.webp')}}"
                                                     class="responsive rounded-md img-fluid"/>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="glide__arrows" data-glide-el="controls">
                                        <button
                                            class="btn btn-icon btn-icon-only btn-foreground hover-outline left-arrow"
                                            data-glide-dir="<">
                                            <i data-acorn-icon="chevron-left"></i>
                                        </button>
                                        <button
                                            class="btn btn-icon btn-icon-only btn-foreground hover-outline right-arrow"
                                            data-glide-dir=">">
                                            <i data-acorn-icon="chevron-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <h4 class="mb-3 heading display-3 fw-bold">{{$funding->title}}</h4>
                                <p class="card-text" style="line-height:2.5;font-size:20px;">
                                    {{$funding->description}}
                                </p>

                                <button class="btn btn-primary btn-lg w-100 text-large">تبرع الآن</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <!-- Summary Start -->
                        <div class="card mb-5 p-5">
                            <div class="card-title">
                                <h1>{{$funding->title}}</h1>
                            </div>
                            <div class="card-body mb-n5">
                                <div>
                                    <p class="card-text">
                                        تم جمع
                                        <sup
                                            style="font-size: 24px;font-weight:bold;">{{$donated_amount->first()?$donated_amount->first()->donated_amount:0}}
                                            $</sup>
                                        من أصل
                                        {{$funding->amount}}$
                                    </p>
                                    <div class="progress progress-lg my-3">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="25"
                                             aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                                    </div>
                                    <p class="card-text">
                                        {{$donations->count()}} داعم
                                    </p>
                                </div>
                                @if($message = Session::get('message'))
                                    <div class="alert alert-success">

                                        {{ $message }}
                                    </div>

                                @endif
                                <form method="POST" action="{{route('donor.donate', $funding->id)}}">
                                    @csrf
                                    <div class="btn-group w-100 mt-5 flex-row-reverse" role="group"
                                         aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="amount_option" value="10" id="btnradio1" checked="">
                                        <label class="btn btn-outline-primary" for="btnradio1">10$</label>
                                        <input type="radio" class="btn-check" name="amount_option" value="25" id="btnradio2">
                                        <label class="btn btn-outline-primary" for="btnradio2">25$</label>
                                        <input type="radio" class="btn-check" name="amount_option" value="50" id="btnradio3">
                                        <label class="btn btn-outline-primary" for="btnradio3">50$</label>
                                        <input type="radio" class="btn-check" name="amount_option" value="100" id="btnradio4">
                                        <label class="btn btn-outline-primary" for="btnradio4">100$</label>
                                    </div>
                                    <div class="mt-5">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="amount" placeholder="غيرذلك">
                                            <label style="right:0;">غير ذلك</label>
                                        </div>
                                    </div>
                                    <div class="mt-5">
                                        <button type="submit" class="btn-lg w-100 btn btn-primary">تبرع الآن!</button>
                                    </div>
                                </form>
                                <div class="mt-5">
                                    @foreach($donations as $item)
                                        <div class="row g-0 sh-6 mb-4">
                                            <div class="col-auto">
                                                <img src="{{asset('assets/img/illustration/dontaion-icon.png')}}"
                                                     class="card-img rounded-xl sh-6 sw-6" alt="thumb">
                                            </div>
                                            <div class="col">
                                                <div
                                                    class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                                                    <div class="d-flex flex-column">
                                                        <h3 class="heading text-alternate">{{$item->donor->first_name." ".$item->donor->last_name}}</h3>
                                                        <h3 class="heading fw-bold">{{$item->amount}}$</h3>
                                                    </div>
                                                    <div class="d-flex">
                                                        <h5>{{date_format($item->created_at, 'd/m/Y')}}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <button class="btn btn-outline-alternate w-100">شاهد الجميع</button>
                                </div>
                            </div>
                        </div>
                        <!-- Summary End -->
                    </div>
                </div>
            </section>
            <section class="mt-4">
                <h1 class="heading title display-1">اقتراحات لك</h1>
                <div class="row g-4">
                    @foreach($recommedndations as $item)
                        <div class="col-4">
                            <div class="card h-100">
                                <img src="{{asset('assets/img/illustration/donation.png')}}"
                                     class="card-img-top"
                                     alt="image">
                                <div class="card-body">
                                    <a href="{{route('donor.funding_details', $item->id)}}"><h5
                                            class="card-title display-6 fw-bold">{{$item->title}}</h5></a>
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
            </section>
        </div>
    </main>

@endsection
