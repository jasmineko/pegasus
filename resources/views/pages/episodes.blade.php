@extends('layout');
@section('content');

<!-- content -->
<section class="content">
    <div class="content__head">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- content tabs nav -->
                    <ul class="nav nav-tabs content__tabs" id="content__tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">NEW RELEASES</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">SERIES</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">DORAMA</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">CARTOONS</a>
                        </li>
                    </ul>
                    <!-- end content tabs nav -->
                    <h2 class="content__title">{{$title}}</h2>
                    <!-- end content title -->
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- content tabs -->
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tab-2" aria-labelledby="2-tab">
                @foreach ($episodes->pluck('season')->sortDesc()->unique() as $season)
                    <div class="row">
                    <h2 class="content__title">Season {{$season}}</h2>
                    @foreach (\App\Episode::episodes_by_season($episodes, $season) as $episode)
                        <!-- card -->
                            <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                                <div class="card">
                                    <div class="card__cover">
                                        <img src="{{ URL::asset($episode->thumbnail) }}" alt="">
                                        <a href="#" class="card__play">
                                            <i class="icon ion-ios-play"></i>
                                        </a>
                                    </div>
                                    <div class="card__content">
                                        <h3 class="card__title"><a href="#">{{ $episode->name }}</a></h3>
                                        <h3 class="card__title"><a href="#">Episode {{ $episode->episode_no }}</a></h3>
                                        <span class="card__category">
                                    </span>
                                        <span class="card__rate"><i class="icon ion-ios-star"></i>{{ $episode->rating }}</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end card -->
                        @endforeach
                    </div>
                    @endforeach

            </div>
        </div>
        <!-- end content tabs -->
    </div>
</section>
<!-- end content -->
@endsection;
