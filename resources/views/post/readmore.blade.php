@extends('layouts.siswa')

@section('content')

        <div class="row">                    
            <div class="col-md-12 col-xs-12">

          <!-- Box Comment -->
          <div class="box box-widget">
            <div class="box-header with-border">
              <div class="user-block">
                <img class="img-circle" src="{{ asset('dashboard/dist/img/user1-128x128.jpg') }}" alt="User Image">
                <span class="username">{{ strtoupper($post->title) }} | <small>{{ $post->genre->name }}</small></span>
                <span class="description">{{ $post->user->name }} - {{ $post->created_at->diffForHumans() }}</span>
              </div>
              <!-- /.user-block -->
              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Mark as read">
                  <i class="fa fa-circle-o"></i></button>                
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- post text -->              
              <p>{{ $post->content }}</p> 

              <!-- Social sharing buttons -->
              {{-- <button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button> --}}
              <button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
              <button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Comment</button>
              <span class="pull-right text-muted">{{ count($comments) }} Komentar</span>
            </div>
            <!-- /.box-body -->
            @foreach ($post->comment()->get() as $comment)
            <div class="box-footer box-comments">                            
              <!-- /.box-comment -->
              <div class="box-comment">
                <!-- User image -->
                <img class="img-circle img-sm" src="{{ asset('dashboard/dist/img/user2-160x160.jpg') }}" alt="User Image">

                <div class="comment-text">
                      <span class="username">
                        {{ $comment->user->name }}
                        <span class="text-muted pull-right">{{ $comment->created_at->diffForHumans() }}</span>
                      </span><!-- /.username -->
                  {{ $comment->pesan }}
                </div>
                <!-- /.comment-text -->
              </div>
              <!-- /.box-comment -->
            </div>
            @endforeach

            <!-- /.box-footer -->
            <div class="box-footer">
              <form action="{{ route('post.comment', $post) }}" method="POST">
                {{ csrf_field() }}

                <img class="img-responsive img-circle img-sm" src="{{ asset('dashboard/dist/img/user2-160x160.jpg') }}" alt="Alt Text">
                <!-- .img-push is used to add margin to elements next to floating images -->
                <div class="img-push">                  
                  <input type="text" name="comment" class="form-control input-sm" placeholder="Press enter to post comment">
                </div>
              </form>
            </div>
            <!-- /.box-footer -->  
        <!-- /.col -->
      </div>
             
    </div>        

  </div>
    


@endsection