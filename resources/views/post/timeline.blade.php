@extends('layouts.siswa_collapsed')

@section('content')

        <div class="row">        
            @foreach ($posts as $post)
            <div class="col-md-4 col-xs-12">
            
            
          <!-- Box Comment -->
          <div class="box box-widget">
            <div class="box-header with-border">
              <div class="user-block">
                <img class="img-circle" src="{{ asset('dashboard/dist/img/user1-128x128.jpg') }}" alt="User Image">
                <span class="username"><a href="{{ route('readmore', $post->slug) }}">{{ strtoupper($post->title) }}</a></span>
                <span class="description">{{ $post->user->name }} - {{ $post->created_at->diffForHumans() }}</span>
              </div>
              <!-- /.user-block -->
              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Mark as read">
                  <i class="fa fa-circle-o"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                {{-- <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button> --}}
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- post text -->              
              <p>{{ str_limit($post->content, 400) }} <a href="{{ route('readmore', $post->slug) }}">Read More</a></p> 

              <!-- Social sharing buttons -->
              {{-- <button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button> --}}              
              <button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
              <button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Comment</button>
              <span class="pull-right text-muted">45 likes - 2 comments</span>
            </div>
            <!-- /.box-body -->            
        <!-- /.col -->
      </div>
             
    </div>    
    @endforeach

  </div>
    {{ $posts->links() }}


@endsection