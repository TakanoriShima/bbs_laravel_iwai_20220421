@extends('layouts.app')
@section('title', '新規投稿')
@section('header', '新規投稿')
@section('content')
            <div class="row mt-2">
                <form class="col-sm-12" action="/messages" method="POST" enctype="multipart/form-data">
                    <!-- CSRF 対策 トークン作成 -->
                    {{ csrf_field() }}
                    <!-- 1行 -->
                    <div class="form-group row">
                        <label class="col-2 col-form-label">名前</label>
                        <div class="col-10">
                            <!-- oldメソッドで直前に入力した内容を表示できるようにし、そうでなければ$messageが持つnameを表示-->
                            <input type="text" class="form-control" name="name" value="{{ old('name') ? old('name') : $message->name }}">
                        </div>
                    </div>
                
                    <!-- 1行 -->
                    <div class="form-group row">
                        <label class="col-2 col-form-label">タイトル</label>
                        <div class="col-10">
                            <!-- oldメソッドで直前に入力した内容を表示できるようにし、そうでなければ$messageが持つtitleを表示-->
                            <input type="text" class="form-control" name="title" value="{{ old('title') ? old('title') : $message->title }}">
                        </div>
                    </div>
                    
                    <!-- 1行 -->
                    <div class="form-group row">
                        <label class="col-2 col-form-label">内容</label>
                        <div class="col-10">
                            <!-- oldメソッドで直前に入力した内容を表示できるようにし、そうでなければ$messageが持つbodyを表示-->
                            <input type="text" class="form-control" name="body" value="{{ old('body') ? old('body') : $message->body }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-2 col-form-label">画像アップロード</label>
                        <div class="col-3">
                            <input type="file" name="image" accept='image/*' onchange="previewImage(this);">
                        </div>
                        <div class="col-7">
                            <img id="preview" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" style="max-width:200px;">
                        </div>
                    </div>
                    
                    <!-- 1行 -->
                    <div class="form-group row">
                        <div class="offset-2 col-10">
                            <button type="submit" class="col-sm-3 btn btn-primary">投稿</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row mt-5">
                <a href="/" class="col-sm-2 btn btn-danger">投稿一覧へ戻る</a>
            </div>
@endsection