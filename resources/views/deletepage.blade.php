<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="{{ url('/css/styles.css') }}" />
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>Manhaj At Tulaab</title>
</head>
<body>
  <!--start of navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      
      
      
    </ul>
    <div class="form-inline my-2 my-lg-0">
      
      <a href="{{ url('logout') }}" class="btn btn-danger" type="submit">Logout</a>
    </div>
  </div>
</nav>
<!--end of navbar-->
	{{ csrf_field() }}
    {{ method_field('DELETE') }}
  <div class="jumbotron jumbotron-fluid" id="jumbotron-text">
  <div class="container">
    <h1 class="display-4"><strong>Manhaj At Tulaab Audio</strong></h1>
    <p class="lead">Delete any audio</p>
  </div>
</div>
<div class="container">
  <div class="row">
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Subject</th>
      <th scope="col">Date Added</th>
      <th scope="col">FileLink</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($audio as $value)
    <form action=" {{ url('delete', $value->id) }}" method="GET" >
    	{{ csrf_field() }}
    	<input type="hidden" name="_method" value="delete" />
    <tr>    
    	
      <th scope="row">{{$value->id}}</th>
      <td>{{$value->subject}}</td>
      <td>{{$value->created_at}}</td>
      <td>{{$value->filelink}}</td>
      <td><input type="submit" name="submit"></td>
    </tr>
    </form>
    @endforeach
    
  </tbody>

</table>
<div class="pagination justify-content-center">{{ $audio->links('pagination::bootstrap-4') }}</div>
</div>

</div>
  




<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ url('/js/script.js') }}"></script>

</body>
</html>
        
