@extends('layouts.siswa_fixed')

@section('content')
                    
@section('page_header')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Karya
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
              <h3 class="box-title">Tambah Karya</h3>
            </div>
            <!-- /.box-header -->            
            <div class="box-body">
              <form action="{{ route('post.store') }}" method="POST">
                {{ csrf_field() }}
                <!-- text input -->
                <div class="form-group">
                  <label for="title">Judul Karya</label>
                  <input type="text" name="title" maxlength="25" class="form-control{{ $errors->has('title') ? ' has-error' : '' }}" placeholder="Judul Karya" value="{{ old('title') }}">

                  @if ($errors->has('title'))
										<span class="help-block">
											<strong>{{ $errors->first('title') }}</strong>
										</span>
									@endif
                </div>                

                <!-- textarea -->
                <div class="form-group">
                  <label for="content">Content</label>
                  <textarea class="form-control{{ $errors->has('content') ? ' has-error' : '' }}" name="content" rows="6" placeholder="Content" minlength="400">{{ old('content') }}</textarea>

                  @if ($errors->has('content'))
										<span class="help-block">
											<strong>{{ $errors->first('content') }}</strong>
										</span>
									@endif
                </div>                                                

                <!-- select -->
                <div class="form-group">
                  <label for="category">Kategori</label>
                  <select name="category" class="form-control{{ $errors->has('category') ? ' has-error' : '' }}">
                    <option value="">-</option>
                    @foreach($categories as $category)
                      <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                  </select>

                  @if ($errors->has('category'))
										<span class="help-block">
											<strong>{{ $errors->first('category') }}</strong>
										</span>
									@endif
                </div>

                <div class="form-group">
                  <label for="genre">Genre</label>
                  <select name="genre" class="form-control{{ $errors->has('genre') ? ' has-error' : '' }}">
                    <option value="">-</option>
                    @foreach($genres as $genre)
                      <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                    @endforeach
                    </select>

                    @if ($errors->has('genre'))
                      <span class="help-block">
                        <strong>{{ $errors->first('genre') }}</strong>
                      </span>
									  @endif
                  
                </div>
                
              <div class="box-footer">
                <a href="{{ url()->previous() }}" type="submit" class="btn btn-default">Cancel</a>
                <button type="submit" class="btn btn-info pull-right">Posting Karya</button>
              </div>

              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->                

@endsection