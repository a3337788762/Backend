@extends('layouts.app')

@section('css')

@endsection

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">後台</a></li>
            <li class="breadcrumb-item"><a href="/admin/news">最新消息管理</a></li>
            <li class="breadcrumb-item active" aria-current="page">新增</li>
        </ol>
    </nav>

    <form method="POST" action="/admin/news/store" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">
                標題
                <small class="text-danger">不可超過20字</small>
            </label>
            <input type="text" name="title" class="form-control" id="title" required>
        </div>

        <div class="form-group">
            <label for="sub_title">
                副標題
                <small class="text-danger">不可超過20字</small>
            </label>
            <input type="text" name="sub_title" class="form-control" id="sub_title" required>
        </div>

        <div class="form-group">
            <label for="file">上傳照片</label>
            <input name="image_url" type="file" class="form-control-file" id="file">
        </div>

        <div class="form-group">
            <label for="text">景點名稱</label>
            <input name="text" type="text" class="form-control" id="text" required>
        </div>

        <button type="submit" class="btn btn-primary">新增</button>
    </form>
@endsection

@section('js')

@endsection
