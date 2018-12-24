<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="{{ url('/css/styles.css') }}" />
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>Manhaj At Tulaab</title>
</head>
<body>
  <div class="jumbotron jumbotron-fluid" id="jumbotron-text">
  <div class="container">
    <h1 class="display-4"><strong>Manhaj At Tulaab Audio</strong></h1>
    <p class="lead">Downloadable audio from Ustadh Abdul Haqq</p>
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
      <th scope="col">Download</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($audio as $value)
    <tr>
      <th scope="row">{{$value->id}}</th>
      <td>{{$value->subject}}</td>
      <td>{{$value->created_at}}</td>
      <td><a href="{{$value->filelink}}" class="btn btn-outline-light btn-sm">Download</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
  




<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ url('/js/script.js') }}"></script>

</body>
</html>
        
