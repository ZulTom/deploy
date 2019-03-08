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
    <p style="border-style:solid;border-color:black; background-color:grey ;"><b> If you have any problems you or anything I have forgotten from Ustadh Abdul Haqq feel free to email me at manhajattulaab@gmail.com or whatsapp me at 006738963807. <br></b>
      Ustadh Abdul Haqq youtube channel: <a style="color:black;" href="https://www.youtube.com/channel/UC7v--XK1hZIXHL99W3WceAA">Youtube Channel</a>
    </p>
  </div>
</div>
<div class="container">
  <div class="row">
<table class="table table-dark">
  <thead>
    <tr>
      
      <th scope="col">Subject</th>
      <th scope="col">Date Added</th>
      <th scope="col">Download</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($audio as $value)
    <tr>
      
      <td>{{$value->subject}}</td>
      <td>{{$value->created_at}}</td>
      <td><a href="{{$value->filelink}}" class="btn btn-outline-light btn-sm">Download</a></td>
    </tr>
    @endforeach
  </tbody>

</table>
{{ $audio->links() }}

</div>
</div>
  




<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ url('/js/script.js') }}"></script>

</body>
</html>
        
