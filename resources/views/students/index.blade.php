<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Students Index</title>
  {{-- <link rel="stylesheet" href="/css/app.css"> --}}
  {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}

  {{-- @livewireStyles --}}
</head>
<body>
  <h1>Students Index</h1>

  {{-- <ul>
    @foreach($students as $student)
      <li>{{ $student->full_name }}, {{ $student->ft_pt_status }}, {{ $student->credit_hours_enrolled }}</li>
    @endforeach
  </ul> --}}

  <table>
    <thead>
      <tr>
        <th>Last Name</th>
        <th>First Name</th>
        <th>Class</th>
        <th>Entry Type</th>
        <th>Cr Hrs Enrolled</th>
        <th>FtPtStatus</th>
        <th>Major</th>
        <th>IsAthlete</th>
      </tr>
    </thead>
    <tbody>
      @foreach($students as $student)
        <tr>
          <td>{{ $student->last_name }}</td>
          <td>{{ $student->first_name }}</td>
          <td>{{ $student->class }}</td>
          <td>{{ $student->entry_type }}</td>
          <td>{{ $student->credit_hours_enrolled }}</td>
          <td>{{ $student->ft_pt_status }}</td>
          <td>{{ $student->major }}</td>
          <td>{{ $student->is_an_athlete }}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
  {{-- @livewire('datatable') --}}

  {{-- @livewireScripts --}}

  {{-- <script src="/js/app.js"></script> --}}
</body>
</html>
