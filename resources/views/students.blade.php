<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student record</title>
</head>
<body>
  <table border="1" style="width:100%; text-align:center">
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Marks</th>
    <th>Number</th>
    <tbody>
      @foreach($student as $info)
      <tr>
        <td>{{$info->id}}</td>
        <td>{{$info->name}}</td>
        <td>{{$info->email}}</td>
        <td>
          @foreach($info->studentresultmany as $infomany)
          {{$infomany->marks}}%
          <br>
          @endforeach
        </td>
        <td>{{$info->number}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>