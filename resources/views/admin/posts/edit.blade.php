@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">Yangilikni tahrirlash</h1></div>
                </div>
                <hr>
                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Voy!</strong> Kiritishda xatolik.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <form action="{{route('admin.posts.update',$post)}}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                    <div class="form-group">
                        <label for="header">Titul</label>
                        <input type="text" name="header" class="form-control" id="header" placeholder="Titul" value="{{$post->header}}">
                    </div>
                    <div class="form-group">
                        <label for="description">Tekst</label>
                        <textarea  class="form-control"  name="description" id="description" rows="10">{{$post->description}}</textarea>
                    </div>
                        <div class="form-group">
                        <label for="img">Rasm qo'shish</label>
                        <input type="file" name="img" class="form-control" id="img">
                    </div>
                    <button type="submit" class="btn btn-primary">Saqlash</button>
                    <input type="reset" class="btn btn-danger" value="Tozalash">
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
