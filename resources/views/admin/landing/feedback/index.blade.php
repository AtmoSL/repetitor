@extends('layouts.app')

@section('content')
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Заявки</h1>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Имя</th>
                                        <th>Класс</th>
                                        <th>Предмет</th>
                                        <th>Цель</th>
                                        <th>Коонтакты</th>
                                        <th>Форма обучения</th>
                                        <th>Статус</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Имя</th>
                                        <th>Класс</th>
                                        <th>Предмет</th>
                                        <th>Цель</th>
                                        <th>Контакты</th>
                                        <th>Форма обучения</th>
                                        <th>Статус</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($feedBacks as $feedBack)
                                        <tr>
                                            <td>{{ $feedBack->name }}</td>
                                            <td>{{ $feedBack->class_id }}</td>
                                            <td>{{ $feedBack->subject_id }}</td>
                                            <td>{{ $feedBack->target_id }}</td>
                                            <td>{{ $feedBack->contacts }}</td>
                                            <td>{{ $feedBack->format_id }}</td>
                                            <td>{{ $feedBack->status_id }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @if ($feedBacks->total() > $feedBacks->count())
                                {{ $feedBacks->links() }}
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
