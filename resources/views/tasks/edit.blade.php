@extends('home')
@section('title', 'Cập nhật công viêc')


<div class="row">
    <div class="col-md-12">
        <h2>Cập nhật </h2>
    </div>
    <div class="col-md-12">
        <form method="post" action="{{ route('tasks.update', $task->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Tên Học sinh</label>
                <input type="text" class="form-control" name="name" value="{{ $task->name }}" required>
            </div>


            <div class="form-group">
                <label>Ngày sinh</label>
                <input type="date" name="birth" class="form-control" value="{{ $task->birth }}" required>
            </div>
            <div class="form-group">
                <label>Ảnh-</label>
                <input type="file" name="image" class="form-control-file">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email"
                       class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                       name="email" value="{{ old('email') }}" autofocus>
            </div>
            <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
            <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
        </form>
    </div>
</div>

