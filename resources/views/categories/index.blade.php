@extends('layout');
@section('content');

<!-- expected premiere -->
<section class="section section--bg" data-bg="{{ URL::asset('img/section/section.jpg') }}">
    <div class="container">
        <div class="row">
            <!-- section title -->
            <div class="col-12">
                <h2 class="section__title">Expected premiere</h2>
            </div>
            <!-- end section title -->

            @foreach ($titles as $title)
            <!-- card -->
            <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                <div class="card">
                    <div class="card__cover">
                        <img src="{{ URL::asset($title->thumbnail) }}" alt="">
                        <a href="/{{ $title->page_id }}" class="card__play">
                            <i class="icon ion-ios-play"></i>
                        </a>
                    </div>
                    <div class="card__content">
                        <h3 class="card__title"><a href="/{{ $title->page_id }}">{{ $title->name }}</a></h3>
                        <span class="card__category">
                            <a href="#">{{ $title->category }}</a>
                            <a href="#">{{ $title->genre }}</a>
                        </span>
                        <span class="card__rate"><i class="icon ion-ios-star">{{ $title->rating }}</i></span>
                    </div>
                </div>
            </div>
            <!-- end card -->
            @endforeach

            <!-- section btn -->
            <div class="col-12">
                <a href="/{{ $title->page_id }}" class="section__btn">Show more</a>
            </div>
            <!-- end section btn -->
        </div>
    </div>
</section>
<!-- end expected premiere -->

<!-- partners -->
<section class="section">
    <div class="container">
        <div class="row">
            <!-- section title -->
            <div class="col-12">
                <h2 class="section__title section__title--no-margin">Our Partners</h2>
            </div>
            <!-- end section title -->

            <!-- section text -->
            <div class="col-12">
                <p class="section__text section__text--last-with-margin">It is a long <b>established</b> fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using.</p>
            </div>
            <!-- end section text -->

            <!-- partner -->
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <a href="#" class="partner">
                    <img src="{{ URL::asset('img/partners/themeforest-light-background.png') }}" alt="" class="partner__img">
                </a>
            </div>
            <!-- end partner -->

            <!-- partner -->
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <a href="#" class="partner">
                    <img src="{{ URL::asset('img/partners/audiojungle-light-background.png') }}" alt="" class="partner__img">
                </a>
            </div>
            <!-- end partner -->

            <!-- partner -->
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <a href="#" class="partner">
                    <img src="{{ URL::asset('img/partners/codecanyon-light-background.png') }}" alt="" class="partner__img">
                </a>
            </div>
            <!-- end partner -->

            <!-- partner -->
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <a href="#" class="partner">
                    <img src="{{ URL::asset('img/partners/photodune-light-background.png') }}" alt="" class="partner__img">
                </a>
            </div>
            <!-- end partner -->

            <!-- partner -->
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <a href="#" class="partner">
                    <img src="{{ URL::asset('img/partners/activeden-light-background.png') }}" alt="" class="partner__img">
                </a>
            </div>
            <!-- end partner -->

            <!-- partner -->
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <a href="#" class="partner">
                    <img src="{{ URL::asset('img/partners/3docean-light-background.png') }}" alt="" class="partner__img">
                </a>
            </div>
            <!-- end partner -->
        </div>
    </div>
</section>
<!-- end partners -->
@endsection;