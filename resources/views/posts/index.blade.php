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
            
            <!-- card -->
            <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                <div class="card">
                    <div class="card__cover">
                        <img src="{{ URL::asset('img/covers/cover.jpg') }}" alt="">
                        <a href="#" class="card__play">
                            <i class="icon ion-ios-play"></i>
                        </a>
                    </div>
                    <div class="card__content">
                        <h3 class="card__title"><a href="#">I Dream in Another Language</a></h3>
                        <span class="card__category">
                            <a href="#">Action</a>
                            <a href="#">Triler</a>
                        </span>
                        <span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span>
                    </div>
                </div>
            </div>
            <!-- end card -->

            <!-- card -->
            <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                <div class="card">
                    <div class="card__cover">
                        <img src="{{ URL::asset('img/covers/cover3.jpg') }}" alt="">
                        <a href="#" class="card__play">
                            <i class="icon ion-ios-play"></i>
                        </a>
                    </div>
                    <div class="card__content">
                        <h3 class="card__title"><a href="#">Benched</a></h3>
                        <span class="card__category">
                            <a href="#">Comedy</a>
                        </span>
                        <span class="card__rate"><i class="icon ion-ios-star"></i>7.1</span>
                    </div>
                </div>
            </div>
            <!-- end card -->

            <!-- card -->
            <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                <div class="card">
                    <div class="card__cover">
                        <img src="{{ URL::asset('img/covers/cover2.jpg') }}" alt="">
                        <a href="#" class="card__play">
                            <i class="icon ion-ios-play"></i>
                        </a>
                    </div>
                    <div class="card__content">
                        <h3 class="card__title"><a href="#">Whitney</a></h3>
                        <span class="card__category">
                            <a href="#">Romance</a>
                            <a href="#">Drama</a>
                            <a href="#">Music</a>
                        </span>
                        <span class="card__rate"><i class="icon ion-ios-star"></i>6.3</span>
                    </div>
                </div>
            </div>
            <!-- end card -->

            <!-- card -->
            <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                <div class="card">
                    <div class="card__cover">
                        <img src="{{ URL::asset('img/covers/cover6.jpg') }}" alt="">
                        <a href="#" class="card__play">
                            <i class="icon ion-ios-play"></i>
                        </a>
                    </div>
                    <div class="card__content">
                        <h3 class="card__title"><a href="#">Blindspotting</a></h3>
                        <span class="card__category">
                            <a href="#">Comedy</a>
                            <a href="#">Drama</a>
                        </span>
                        <span class="card__rate"><i class="icon ion-ios-star"></i>7.9</span>
                    </div>
                </div>
            </div>
            <!-- end card -->

            <!-- card -->
            <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                <div class="card">
                    <div class="card__cover">
                        <img src="{{ URL::asset('img/covers/cover4.jpg') }}" alt="">
                        <a href="#" class="card__play">
                            <i class="icon ion-ios-play"></i>
                        </a>
                    </div>
                    <div class="card__content">
                        <h3 class="card__title"><a href="#">I Dream in Another Language</a></h3>
                        <span class="card__category">
                            <a href="#">Action</a>
                            <a href="#">Triler</a>
                        </span>
                        <span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span>
                    </div>
                </div>
            </div>
            <!-- end card -->

            <!-- card -->
            <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                <div class="card">
                    <div class="card__cover">
                        <img src="{{ URL::asset('img/covers/cover5.jpg') }}" alt="">
                        <a href="#" class="card__play">
                            <i class="icon ion-ios-play"></i>
                        </a>
                    </div>
                    <div class="card__content">
                        <h3 class="card__title"><a href="#">Benched</a></h3>
                        <span class="card__category">
                            <a href="#">Comedy</a>
                        </span>
                        <span class="card__rate"><i class="icon ion-ios-star"></i>7.1</span>
                    </div>
                </div>
            </div>
            <!-- end card -->

            <!-- section btn -->
            <div class="col-12">
                <a href="#" class="section__btn">Show more</a>
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