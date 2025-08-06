<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vaccination Card</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('asset/img/favicons/picture1.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('asset/img/favicons/picture1.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('asset/img/favicons/picture1.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('asset/img/favicons/picture1.png') }}">
    <link rel="manifest" href="{{ URL::asset('asset/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="asset/img/favicons/picture1.png">
    <meta name="theme-color" content="#ffffff">
  <script src="{{ URL::asset('https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js') }}"></script>
  <script src="{{ URL::asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js') }}"></script>


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{ URL::asset('asset/css/theme.css') }}" rel="stylesheet" />
    <style>
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }

        td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
        }

        tr:nth-child(even) {
          background-color: white;
        }
        </style>
</head>
<body>
    <br><br>
        <div class="container">
            <div class="d-flex justify-content-end">
                <a class="btn btn-primary" href="{{ URL::to('downloadPDF/'.$cid) }}">Export to PDF
                    <input type="hidden" name="cid" value="{{ $cid }}">
                </a>
        </div>
<br><br><br>
<div class="container">
      <div class="row">
          <h1 class="text-center">Vaccination Card</h1>
        </div>
 </div>
    <!-- end of .container-->

  <br><br><br>
  <div class="container">
    <div class="row">
        <div class="col-md-4">
            <p style="font-size: 20px;"><b>Child Name :&nbsp;&nbsp;</b><u>{{ $child['firstname'] }}&nbsp;{{ $child['lastname'] }}</u></p>
        </div>
        <div class="col-md-4">
            <p style="font-size: 20px;"><b>Parent Name :&nbsp;&nbsp;</b><u>{{ $parent['firstname'] }}&nbsp;{{ $parent['lastname'] }}</u></p>
        </div>
        <div class="col-md-4">
            <p style="font-size: 20px;"><b>Date of Birth :&nbsp;&nbsp;</b><u>{{ $child['dob'] }}</u></p>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-4">
            <p style="font-size: 20px;"><b>Card ID :&nbsp;&nbsp;</b><u>{{ $child['id'] }}</u></p>
        </div>
        <div class="col-md-4">
            <p style="font-size: 20px;"><b>Gender :&nbsp;&nbsp;</b><u>{{ $child['gender'] }}</u></p>
        </div>
    </div>
  </div>
  <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div style="text-align: center"">
                            <h5>Vaccination Process</h5>
                        </div>
                    </div>
        <div class="card-block table-border-style">
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>Child Age</th>
                            <th>Vaccine Name</th>
                            <th>Vaccinator Name</th>
                            <th>Vaccination Date</th>
                            <th>Next Vaccination Date</th>
                          </tr>
                    </thead>
                    <tbody>
                        @foreach ($process as $single)
                        <tr>
                            <td>{{ $single->age }}</td>
                            <td>{{ $single->name }}</td>
                            <td>{{ $single->firstname }}&nbsp;{{ $single->lastname }}</td>
                            <td>{{ $single->vaccine_date }}</td>
                            <td>{{ $single->next_date }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        </div>
            </div>
        </div>
    </div>
</body>
</html>
