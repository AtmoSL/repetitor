<div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">

        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        @for ($i = 2; $i <= count($reviews); $i++)
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $i - 1 }}"
                aria-label="Slide {{ $i }}"></button>
        @endfor
    </div>
    <div class="carousel-inner">

        @foreach ($reviews as $key => $review)
            <!-- Single item -->
            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-10 col-xl-8">
                        <div class="row">
                            <div class="col-lg-4 d-flex justify-content-center">
                                <img src="{{ asset('/storage/img/reviews/' . $review->photo_path) }}"
                                    class="rounded-circle shadow-1 mb-4 mb-lg-0" alt="woman avatar" width="150"
                                    height="150" />
                            </div>
                            <div class="col-9 col-md-9 col-lg-7 col-xl-8 text-center text-lg-start mx-auto mx-lg-0">
                                <h4 class="mb-4">{{ $review->name }}</h4>
                                <p class="mb-0 pb-3">
                                    Класс: {{ $review->class }}
                                    </br>
                                    Предмет: {{ $review->subject->title}}
                                    </br>
                                    {{ $review->text }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Предыдущий</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Следующий</span>
    </button>
</div>
