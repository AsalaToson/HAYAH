
<!DOCTYPE html>
<html>
<head>
    <title>My Medical Record</title>
    <link rel="icon" type="image/png" href="{{asset('site/patient profile/favicon.ico')}}"/>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: url({{asset('site/patient profile/background.jpg')}});
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
        .alert {
            background-color: #f44336;
            color: #fff;
            padding: 10px;
            margin-bottom: 20px;
        }
        form input[type=text], form input[type=email], form input[type=tel], form select, form textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 20px;
            resize: vertical;
        }
        form input[type=submit] {
            background-color: #4CAF50;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        form input[type=submit]:hover {
            background-color: #3e8e41;
        }
        .download-button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;

            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .download-button:hover {
            background-color: #3e8e41;
        }
        .home-button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .home-button:hover {
            background-color: #3e8e41;
        }

    </style>
</head>
<body>

{{--@if (isset($recordss))--}}
{{--    @foreach ($recordss as $records)--}}
<a class="container">
    <h1>My Medical Records </h1>

    <h2>Personal Information</h2>
    <table>
        <tr>
            <th>Name</th>
            <td>  {{$records->name}}</td>
        </tr>
        <tr>
            <th>Age</th>
            <td>{{$records->age}}</td>
        </tr>
        <tr>
            <th>Gender</th>
            <td>Female</td>
        </tr>
        <tr>
            <th>Contact Details</th>
            <td>{{$records->phone}}<br>{{$records->email}}</td>
        </tr>
        <tr>
            <th>Emergency Contact Information</th>
            <td>Name: Adham <br>Phone: 555-5678</td>
        </tr>
    </table>
    <h2>Medical History</h2>
    <table>
        <tr>
            <th>Previous Illnesses or Surgeries</th>
            <td>{{$records->blood_pressure}}</td>
        </tr>
        <tr>
            <th>Allergies</th>
            <td>{{$records->blood_pressure}}</td>
        </tr>
        <tr>
            <th>Medications</th>
            <td>{{$records->medication}}</td>
        </tr>
    </table>


    </table>

