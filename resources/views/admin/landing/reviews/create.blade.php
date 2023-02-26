@extends('admin.layouts.app')

@section('content')
    <!-- Content Wrapper -->
    <div class="container">
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-sm-8">
                            @include('admin.landing.reviews.result_messages')
                            <div class="card shadow mb-4">
                                <div class="card-header">
                                    <h1 class="h3 mb-2 text-gray-800">Создание отзыва</h1>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('admin.landing.reviews.store') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form__group mb-3">
                                            <label for="name" class="form-label">Имя</label>
                                            <input type="name" class="form-control" id="name"
                                                aria-describedby="name" value="{{ $review->name }}" name="name">
                                        </div>

                                        <div class="form__group mb-3">
                                            <label for="class" class="form-label">Класс</label>
                                            <input type="class" class="form-control" id="class"
                                                aria-describedby="class" value="{{ $review->class }}" name="class">
                                        </div>

                                        <div class="form__group mb-3">
                                            <label for="subject_id" class="form-label">Предмет</label>
                                            <select class="form-select" aria-label="Default select example"
                                                name="subject_id">
                                                @foreach ($subjects as $subject)
                                                    <option value="{{ $subject->id }}">
                                                        {{ $subject->title }} </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form__group mb-3">
                                            <label for="text" class="form-label">Текст</label>
                                            <textarea type="text" class="form-control" name="text" id="text" aria-describedby="text">{{ $review->text }}</textarea>
                                        </div>


                                        <div class="form__group mb-3">
                                            <div class="row">
                                                <div class="col align-self-end">
                                                    <div class="review__file">
                                                        <label for="photo" class="form-label">Изменить
                                                            изображение</label>
                                                        <input class="form-control" type="file" id="photo"
                                                            name="photo">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form__group mb-3">
                                            <input class="form-check-input" type="checkbox" value="1" id="is_published"
                                                name="is_published">
                                            <label class="form-check-label" for="is_published">
                                                Опубликовать
                                            </label>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-sm-9 d-grid gap-2">
                                                <button type="submit" class="btn btn-primary">Сохранить</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Footer -->

        </div>
    </div>
@endsection
