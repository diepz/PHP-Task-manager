@extends('home')

<div class="row">
    <div class="col-md-12">
        <h2>Thêm</h2>
    </div>
    <div class="col-md-12">
        <form method="post" action="{{ route('tasks.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Tên Học sinh</label>
                <input type="text" class="form-control @if($errors->has('name')) is-invalid @endif" name="name" >
                @if($errors->has('name') )
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
            </div>

            <div class="form-group">
                <label for="exampleFormControlFile1">Ngày sinh</label>
                <input type="date" name="birth" class="form-control " value="{{ date('Y-m-d') }}" required>
            </div>
            <div class="form-group">
                <label for="inputFileName">File Name</label>
                <input type="text"
                       class="form-control"
                       id="inputFileName"
                       name="inputFileName">
                <input type="file"
                       class="form-control-file"
                       id="inputFile"
                       name="inputFile">
            </div>

            <div class="form-group">
                <label for="exampleFormControlFile1">Ảnh</label>
                <input type="file" name="image" class="form-control-file" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email"
                       class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                       name="email" value="{{ old('email') }}" autofocus>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Thêm mới</button>
            <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
        </form>
    </div>
</div>

