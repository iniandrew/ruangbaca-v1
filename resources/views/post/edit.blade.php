@extends('layouts.siswa_fixed')

@section('content')

    @if ($post->user_id != auth()->id())
        @include('templates.partials._404')
    @else

@section('page_header')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Edit Karya
            <small>Ruang Baca</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

@endsection

<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Edit Karya</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <form action="{{ route('post.update', $post) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <!-- text input -->
            <div class="form-group">
                <label for="title">Judul Karya</label>
                <input type="text" name="title" maxlength="25"
                       class="form-control{{ $errors->has('title') ? ' has-error' : '' }}" placeholder="Judul Karya"
                       value="{{ $post->title }}">

                @if ($errors->has('title'))
                    <span class="help-block">
											<strong>{{ $errors->first('title') }}</strong>
										</span>
                @endif
            </div>

            <!-- textarea -->
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control{{ $errors->has('content') ? ' has-error' : '' }}" name="content" rows="6"
                          placeholder="Content" minlength="400">{{ $post->content }}</textarea>

                @if ($errors->has('content'))
                    <span class="help-block">
											<strong>{{ $errors->first('content') }}</strong>
										</span>
                @endif
            </div>

            <!-- select -->
            <div class="form-group">
                <label>Kategori</label>
                <select name="category" class="form-control">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}"
                                @if($post->category_id === $category->id)
                                selected
                                @endif>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Genre</label>
                <select name="genre" class="form-control">
                    @foreach($genres as $genre)
                        <option value="{{ $genre->id }}"
                                @if($post->genre_id === $genre->id)
                                selected
                                @endif>{{ $genre->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="box-footer">
                <a href="{{ url()->previous() }}" type="submit" class="btn btn-default">Cancel</a>
                <button type="submit" class="btn btn-info pull-right">Edit</button>
            </div>

        </form>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->
@endif
@endsection