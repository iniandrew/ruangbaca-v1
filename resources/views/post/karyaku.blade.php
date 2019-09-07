@extends('layouts.siswa')

@section('content')

        <div class="row">  

          @if ($posts->count() < 1)          

          <div class="alert alert-info alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h4><i class="icon fa fa-info"></i> Belum ada Karya</h4>
              <h4>Ayo bikin karya<a href="{{ route('post.create') }}"> Disini</a></h4>
          </div>

           @else

            @foreach ($posts as $post)
          <div class="col-md-6">
            
            
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
                {{-- <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Mark as read">
                  <i class="fa fa-circle-o"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button> --}}
                <form action="{{ route('post.destroy', $post) }}" method="POST">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <a 
                    href="{{ route('post.edit', $post) }}" type="button" class="btn btn-box-tool" title="Edit"><i class="fa fa-edit"></i>
                  </a>
                  <button type="submit" class="btn btn-box-tool" title="Delete"><i class="fa fa-times"></i> </button>                  
                </form>

              </div>
              <!-- /.box-tools -->
              </div>
            <!-- /.box-header -->
              <div class="box-body">
              <!-- post text -->              
                <p>{{ str_limit($post->content, 400, '...') }}</p> 

              <!-- Social sharing buttons -->
              {{-- <button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button> --}}
                {{-- <a href="{{ route('post.edit', $post)  }}" class="btn btn-info"> Edit</a> --}}
                
                {{-- <form action="{{ route('post.destroy', $post) }}" method="POST">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                  <button type="submit" class="btn btn-box-tool"><i class="fa fa-times"></i> Delete</button>              
                </form> --}}
                <div class="box-header with-border">
                  <span class="pull-right text-muted">45 likes - 2 comments</span>
                </div>
              </div>                        
            <!-- /.box-body -->            
        <!-- /.col -->
            </div>
                   
          </div>         
    @endforeach
    
<!-- div for row -->
        </div>            
<!-- div for row -->  

<!-- paginate -->    

    {{ $links->links() }}
    @endif

@endsection