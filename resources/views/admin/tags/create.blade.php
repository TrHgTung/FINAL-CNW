@extends('layouts.admin')

@section('content')
        <div class="card">
            <div class="card-header">
                <h3>Tạo thẻ mới
                    <a href="{{ route('admin.tags.index') }}" class="btn btn-primary float-right">
                        Quay lại
                    </a>
                </h3>     
            </div>
            <div class="card-body">
                <form action="{{ route('admin.tags.store') }}" method="post">
                    @csrf 
                    <div class="form-group">
                        <label for="name">Tên</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Lưu</button>
                    </div>
                </form>
            </div>
@endsection
