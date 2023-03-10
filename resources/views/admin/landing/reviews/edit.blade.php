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
                                    <h1 class="h3 mb-2 text-gray-800">Редактированние отзыва</h1>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('admin.landing.reviews.update', $review->id) }}"
                                        enctype="multipart/form-data">
                                        @method('PATCH')
                                        @csrf
                                        <div class="form__group mb-3">
                                            <label for="name" class="form-label">Имя</label>
                                            <input type="name" class="form-control" id="name"
                                                aria-describedby="name" name="name" value="{{ $review->name }}">
                                        </div>

                                        <div class="form__group mb-3">
                                            <label for="class" class="form-label">Класс</label>
                                            <input type="class" class="form-control" id="class"
                                                aria-describedby="class" name="class" value="{{ $review->class }}">
                                        </div>

                                        <div class="form__group mb-3">
                                            <label for="subject_id" class="form-label">Предмет</label>
                                            <select class="form-select" aria-label="Default select example"
                                                name="subject_id">
                                                @foreach ($subjects as $subject)
                                                    <option value="{{ $subject->id }}"
                                                        {{ $subject->id == $review->subject_id ? 'selected' : '' }}>
                                                        {{ $subject->title }} </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form__group mb-3">
                                            <label for="text" class="form-label">Текст</label>
                                            <textarea type="text" name="text" class="form-control" id="text" aria-describedby="text">{{ $review->text }}</textarea>
                                        </div>


                                        <div class="form__group mb-3">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <div class="review__img">
                                                        <img src="{{ asset('/storage/img/reviews/' . $review->photo_path) }}"
                                                            class="img-thumbnail" alt="...">
                                                    </div>
                                                </div>
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
                                            <label for="is_published" class="form-label">Статус публикации</label>
                                            <select class="form-select" aria-label="Default select example"
                                                name="is_published">
                                                <option value="1"
                                                    {{ $review->is_published ? 'selected' : '' }}>
                                                    Опубликовано</option>
                                                <option value="0"
                                                    {{ !$review->is_published ? 'selected' : '' }}>
                                                    Не опубликовано</option>
                                            </select>
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
