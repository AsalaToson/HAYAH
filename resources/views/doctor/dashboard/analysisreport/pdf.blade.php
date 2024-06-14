
<!DOCTYPE html>
<html lang="">
<head>
    <title>My Medical Record</title>
    <link rel="icon" type="image/png" href="favicon.ico"/>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url(/images/background.jpg);
            color: #333;
            margin: 0;
            padding: 0;
            background-size: cover;
            background-position: center;
            background-repeat:no-repeat
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0,0,0,.2);
        }
        h1 {
            font-size: 36px;
            margin-top: 0;
            background-color: #26aae1;
        }

        h2 {
            font-size: 24px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 20px;
        }
        table th, table td {
            padding: 8px;
            text-align: left;
            border: 1px solid #ddd;
        }
        table th {
            background-color: #f0f0f0;
            font-weight: normal;
        }


    </style>
</head>
<body>
<div class="container">
    <div class="container">

    <h3>Report Details</h3>
    <br>
    <hr>
    <div class="body" style="display: flex; flex-direction: column;">
        <table style="height: 100%;">
            <tr>
                <th>Patient Name</th>
                <td>{{$tests->user->name}}</td>
            </tr>
            <tr>
                <th>Test Date</th>
                <td>{{$tests->created_at}}</td>
            </tr>
            <tr>
                <th>Doctor Name</th>
                <td>{{$tests->doctor->name}}</td>
            </tr>
            <tr>
                <th>Analysis Name</th>
                <td>{{$tests->analysis_Name}}
                </td>
            </tr>
        </table>
        <h3>Test Result</h3>
        <!-- Add the image here -->
        <img src="{{ asset($tests->photo) }}" alt="Report Image" class="img-fluid mt-3">

    </div>
    </div>
</div>
</body>
</html>
