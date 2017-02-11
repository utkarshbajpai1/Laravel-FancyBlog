@extends('main')

@section('title' , '| Fancy Blog')

@section('cover')
      <section id="cover">
        <div id="cover-caption">
            <div class="container">
                <div class="col-sm-10 offset-sm-1">
                   
                    <h1>Welcome to FancyBlog!</h1>
                    <p>This is my Laravel Blog ipsum dolor sit amet, consectetur adipisicing elit. Quisquam dicta repellat modi magni illum, aperiam in suscipit ex animi vitae culpa officia cum sed, facilis recusandae impedit eligendi enim. Nihil.</p>
                    
                     <form action="" class="form-inline">
                        <div class="form-group">
                            <label class="sr-only">Name</label>
                            <input type="text" class="form-control form-control-lg" placeholder="enter name">

                        </div>
                        
                        <div class="form-group">
                            <label class="sr-only">Email</label>
                            <input type="text" class="form-control form-control-lg" placeholder="enter email">

                        </div>
                        
                        <button type="submit" class="btn btn-success btn-lg">login</button>
                    </form>
                    
                    <br>
                    
                    <a href="#nav-main" class="btn btn-secondary btn-sm" role="button">&darr;</a>
                     
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">

          <div class="jumbotron">
              <h1>Welcome to my Blog!</h1>
              <p class='lead'>Thank you so much for visiting . This is my test website with laravel . Please read my popular post!</p>
              <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
          </div><!-- end of jumbotron-->
         
         </div> 
    </div> <!--end of header .row-->


      <div class="row">
            <div class="col-md-8" style="background-color:lightblue;">

              @foreach($posts as $post)

                <div class="post">
                   <h3>{{ $post->title }}</h3>
                   <p>{{ $post->body }}</p>
                  <a href="{{ url('blog/' . $post->slug) }}" class="btn btn-primary">Read More</a> 

                <hr>

                @endforeach
            </div>

            
      </div>      <!--end of row content-->
@endsection      

@section('scripts')
  <script> confirm('hello u made it into the laravel') ;</script>
@endsection
