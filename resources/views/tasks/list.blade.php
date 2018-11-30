@extends('home')


<div class="row">
    <div class="col-md-12">
        <h2>Danh sách Học sinh</h2>
    </div>
    <div class="col-12">

    </div>
    <div class="col-md-12">
            <table class="table x       x   ">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Birth</th>
                <th scope="col">Image</th>
                <th scope="col">File</th>

                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($tasks as $key => $task)
                <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $task->name }}</td>


                    <td>{{ $task->birth }}</td>

                    <td>
                        @if($task->image)
                            <img src="{{ asset('storage/'.$task->image) }}" alt="" style="width: 50px; height: 50px">
                        @else
                            {{'Chưa có ảnh'}}
                        @endif
                    </td>
                    <td> @if($task->inputFile)
                            <img src="{{ asset('storage/'.$task->inputFile) }}" alt=""
                                 style="width: 50px; height: 50px">
                        @else
                            {{'Chưa có file'}}
                        @endif
                    </td>

                    {{--<td>{{ $e_name }}</td>--}}
                    {{--<td>{{ $e_birth }}</td>--}}


                    <td><a href="{{ route('tasks.edit', $task->id) }}">sửa</a></td>
                    <td><a href="{{ route('tasks.destroy', $task->id) }}" class="text-danger"
                           onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{ route('tasks.create') }}" class="btn btn-primary">Thêm mới</a>
        <a href="{{ route('export') }}" class="btn btn-primary">Export File</a>

    </div>
</div>
