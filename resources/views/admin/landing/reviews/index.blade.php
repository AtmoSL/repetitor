@extends('admin.layouts.app')

@section('content')
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Begin Page Content -->
            <div class="container-fluid">
                @include('admin.landing.reviews.result_messages')

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Отзывы</h1>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Фото</th>
                                        <th>Имя</th>
                                        <th>Класс</th>
                                        <th>Предмет</th>
                                        <th>Текст</th>
                                        <th>Статус публликаци</th>
                                        <th>
                                            <div class="d-grid gap-2">
                                                <a href="{{ route('admin.landing.reviews.create') }}"
                                                    class="btn btn-primary">Добавить</a>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>id</th>
                                        <th>Фото</th>
                                        <th>Имя</th>
                                        <th>Класс</th>
                                        <th>Предмет</th>
                                        <th>Текст</th>
                                        <th>Статус публликаци</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($reviews as $review)
                                        <tr>
                                            <td>{{ $review->id }}</td>
                                            <td><img src="{{ asset('/storage/img/reviews/' . $review->photo_path) }}"
                                                    class="rounded-circle shadow-1 mb-4 mb-lg-0" alt="$review->photo_path"
                                                    width="150" height="150" /></td>
                                            <td>{{ $review->name }}</td>
                                            <td>{{ $review->class }}</td>
                                            <td>{{ $review->subject->title }}</td>
                                            <td>{{ $review->text }}</td>
                                            <td>{{ $review->is_published }}</td>
                                            <td><a href="{{ route('admin.landing.reviews.edit', $review->id) }}"
                                                    class="btn btn-primary">Редактировать</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @if ($reviews->total() > $reviews->count())
                                {{ $reviews->links() }}
                            @endif

                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Footer -->

    </div>
@endsection
