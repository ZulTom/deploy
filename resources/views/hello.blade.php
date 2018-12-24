<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="{{ url('/css/styles.css') }}" />
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>Add Lecture</title>
</head>
<body>
  <div class="jumbotron jumbotron-fluid" id="jumbotron-text">
  <div class="container">
    <h1 class="display-4"><strong>Manhaj At Tulaab Audio</strong></h1>
    <p class="lead">Please add your lecture here!</p>
  </div>
</div>
<div class="container">
  <div class="row">
<table class="table table-dark">
  <thead>
    <tr>
      
      <th scope="col">Subject</th>
      <th scope="col">File upload</th>
      <th scope="col">Submit</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <form action="{{ url('addlecture') }}" method="post" enctype="multipart/form-data" >
         <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <td><input type="text" name="subject" value="Subject"></td>
      <td><input type="text" class="form-control-file" name="filelink"></td>
      <td><input type="submit" name="submit" value="submit"></td>
      </form>
    </tr>
   
  </tbody>
</table>
</div>
</div>
  




<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ url('/js/script.js') }}"></script>

</body>
</html>
        
