@extends('layouts.app')

@section('content')
    <section class="landing__main">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col">
                    <div class="landing__main__image">
                        <img src="{{ asset('/storage/img/landing/main_screen_photo.png') }}" />
                    </div>
                </div>
                <div class="col">
                    <h1 class="landing__title">Ваш репетитор</h1>
                    <div class="landning__main__text">
                        <p>
                            Индивидуальные занятия с репетитором
                        </p>
                    </div>
                    <div class="landing__main__feedback">
                        <a href="#feedback" class="landing__main__feedback__btn">Оформить заявку</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="landing__text">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col">
                    <div class="landing__text__photo">
                        <img src="{{ asset('/storage/img/landing/photo.png') }}" alt="">
                    </div>
                </div>
                <div class="col landing__text__text">
                    <p>
                        У Марка аутизм. Обучать подростка с такими особенностями нелегко. Восхищает находчивость и
                        профессионализм нашего преподавателя Виктора Кириенко. Вместе с Марком они добиваются
                        удивительных результатов! Огромная благодарность Виктору за уроки и за богатый исчерпывающий
                        фидбэк по окончании модуля джуниор. Благодарю платформу *** за возможность заниматься предметом
                        в формате онлайн, который прекрасно подходит для моего сына! С нетерпением ждем дальнейших
                        занятий.
                    </p>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col landing__text__text">
                    <p>
                        У Марка аутизм. Обучать подростка с такими особенностями нелегко. Восхищает находчивость и
                        профессионализм нашего преподавателя Виктора Кириенко. Вместе с Марком они добиваются
                        удивительных результатов! Огромная благодарность Виктору за уроки и за богатый исчерпывающий
                        фидбэк по окончании модуля джуниор. Благодарю платформу *** за возможность заниматься предметом
                        в формате онлайн, который прекрасно подходит для моего сына! С нетерпением ждем дальнейших
                        занятий.
                    </p>
                </div>
                <div class="col">
                    <div class="landing__text__photo">
                        <img src="{{ asset('/storage/img/landing/photo.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="landing__reviews">
        <div class="landing__reviews__title">
            <h2>
                Отзывы учеников
            </h2>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-auto">
                <div id="carouselExample" class="carousel slide landing__reviews__carousel" data-bs-ride="carousel">

                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>


                    <div class="carousel-inner">

                        <div class="carousel-item landing__reviews__carousel__item active">
                            <div class="landing__reviews__carousel__item__inner row">
                                <div class="landing__reviews__carousel__item__img col-md-auto">
                                    <img src="{{ asset('/storage/img/landing/photo.png') }}" alt="">
                                </div>
                                <div class="landing__reviews__carousel__item__content col">
                                    <div class="landing__reviews__carousel__item__content__title">
                                        Алиса<span>, 11Б</span>
                                    </div>
                                    <div class="landing__reviews__carousel__item__content__text">
                                        У Марка аутизм. Обучать подростка с такими особенностями нелегко. Восхищает
                                        находчивость
                                        и профессионализм нашего преподавателя Виктора Кириенко. Вместе с Марком они
                                        добиваются
                                        удивительных результатов! Огромная благодарность Виктору за уроки и за богатый
                                        исчерпывающий фидбэк по окончании модуля джуниор. Благодарю платформу *** за
                                        возможность
                                        заниматься предметом в формате онлайн, который прекрасно подходит для моего сына! С
                                        нетерпением ждем дальнейших занятий.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item landing__reviews__carousel__item">
                            <div class="landing__reviews__carousel__item__inner row">
                                <div class="landing__reviews__carousel__item__img col-md-auto">
                                    <img src="{{ asset('/storage/img/landing/photo.png') }}" alt="">
                                </div>
                                <div class="landing__reviews__carousel__item__content col">
                                    <div class="landing__reviews__carousel__item__content__title">
                                        Алиса<span>, 11Б</span>
                                    </div>
                                    <div class="landing__reviews__carousel__item__content__text">
                                        У Марка аутизм. Обучать подростка с такими особенностями нелегко. Восхищает
                                        находчивость
                                        и профессионализм нашего преподавателя Виктора Кириенко. Вместе с Марком они
                                        добиваются
                                        удивительных результатов! Огромная благодарность Виктору за уроки и за богатый
                                        исчерпывающий фидбэк по окончании модуля джуниор. Благодарю платформу *** за
                                        возможность
                                        заниматься предметом в формате онлайн, который прекрасно подходит для моего сына! С
                                        нетерпением ждем дальнейших занятий.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item landing__reviews__carousel__item">
                            <div class="landing__reviews__carousel__item__inner row">
                                <div class="landing__reviews__carousel__item__img col-md-auto">
                                    <img src="{{ asset('/storage/img/landing/photo.png') }}" alt="">
                                </div>
                                <div class="landing__reviews__carousel__item__content col">
                                    <div class="landing__reviews__carousel__item__content__title">
                                        Алиса<span>, 11Б</span>
                                    </div>
                                    <div class="landing__reviews__carousel__item__content__text">
                                        У Марка аутизм. Обучать подростка с такими особенностями нелегко. Восхищает
                                        находчивость
                                        и профессионализм нашего преподавателя Виктора Кириенко. Вместе с Марком они
                                        добиваются
                                        удивительных результатов! Огромная благодарность Виктору за уроки и за богатый
                                        исчерпывающий фидбэк по окончании модуля джуниор. Благодарю платформу *** за
                                        возможность
                                        заниматься предметом в формате онлайн, который прекрасно подходит для моего сына! С
                                        нетерпением ждем дальнейших занятий.
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Предыдущий</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Следующий</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="landing__feedback">
        <div class="container">
            <div class="landing__feedback__inner">
                <div class="row">
                    <div class=" col landing__feedback__content">
                        <div class="landing__feedback__inner__title">
                            <h3 id="feedback">
                                Запишись сейчас
                            </h3>
                        </div>
                        <div class="landing__feedback__inner__subtitle">
                            <p>
                                Оставь данные и я обязательно с тобой свяжусь
                            </p>
                        </div>
                        <div class="landing__feedback__form">

                            <form method="POST" action="{{ route('store') }}">
                                @csrf
                                <div class="container">
                                    @include('landing.result_messages')

                                    <div class="form-group landing__feedback__form__group">
                                        <input name="name" value="{{ $feedBack->name }}" type="text"
                                            id="name" class="form-control" minlength="3" placeholder="Ваше имя"
                                            required>
                                    </div>

                                    <div class="form-group landing__feedback__form__group">
                                        <select name="class_id" class="form-control" placeholder="Класс" id="class_id"
                                            required>
                                            <option value="" selected disabled>Класс</option>
                                            @foreach ($classList as $classOption)
                                                <option value="{{ $classOption->id }}">
                                                    {{ $classOption->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group landing__feedback__form__group">
                                        <select name="subject_id" class="form-control" placeholder="Предет"
                                            id="subject_id" required>
                                            <option value="" selected disabled>Предмет</option>
                                            @foreach ($subjectList as $subjectOption)
                                                <option value="{{ $subjectOption->id }}">
                                                    {{ $subjectOption->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group landing__feedback__form__group">
                                        <select name="target_id" class="form-control" placeholder="Цель" id="target_id"
                                            required>
                                            <option value="" selected disabled>Цель</option>
                                            @foreach ($targetList as $targetOption)
                                                <option value="{{ $targetOption->id }}">
                                                    {{ $targetOption->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group landing__feedback__form__group">
                                        <input name="contacts" value="{{ $feedBack->contacts }}" type="text"
                                            id="contacts" class="form-control" placeholder="Контакты для связи">
                                    </div>

                                    <div class="form-group form-group landing__feedback__form__group">
                                        <div class="form-control ">
                                            <div class="row justify-content-between">
                                                <div class="col-md-auto">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Очное обучение (СПб)
                                                    </label>
                                                </div>
                                                <div class="col-md-auto">
                                                    <input class="form-check-input" name type="checkbox" name="format_id" value="1"
                                                    id="flexCheckDefault">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group landing__feedback__form__group">
                                        <button type="submit" class="landing__feedback__form__btn">Оставить
                                            заявку</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="col landing__feedback__img">
                        <img src="{{ asset('/storage/img/landing/form__photo.png    ') }}" alt="">
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
