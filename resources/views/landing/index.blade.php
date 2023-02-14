@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('store') }}">\
        @csrf
        <div class="container">
            @include('landing.result_messages')


            <div class="row justify-content-center">
                <div class="col-md-8">


                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Ваше имя</label>
                                        <input name="name" value="{{ $feedBack->name }}" type="text" id="name"
                                            class="form-control" minlength="3" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="class_id">Класс</label>
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

                                    <div class="form-group">
                                        <label for="subject_id">Предмет</label>
                                        <select name="subject_id" class="form-control" placeholder="Предет" id="subject_id"
                                            required>
                                            <option value="" selected disabled>Предмет</option>
                                            @foreach ($subjectList as $subjectOption)
                                                <option value="{{ $subjectOption->id }}">
                                                    {{ $subjectOption->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="target_id">Цель</label>
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

                                    <div class="form-group">
                                        <label for="contacts">Контакты для связи</label>
                                        <input name="contacts" value="{{ $feedBack->contacts }}" type="text"
                                            id="contacts" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="format_id">Форма обучения</label>
                                        <select name="format_id" class="form-control" placeholder="Фора обучения"
                                            id="format_id" required>
                                            <option value="" selected disabled>Форма обучения</option>
                                            @foreach ($formatList as $formatList)
                                                <option value="{{ $formatList->id }}">
                                                    {{ $formatList->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Сохранить</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </form>
@endsection
