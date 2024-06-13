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
        .alert {
            background-color: #f44336;
            color: #fff;
            padding: 10px;
            margin-bottom: 20px;
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
<div class="container">
    <div class="container">
        <div style="display: flex; justify-content: space-between; margin-bottom: 20px; ">
            <img src="{{asset('site/assets/images/logo2.png')}}" alt="1" style="height: 75px; width: 200px;">
            <div style="display: flex;"><img src="{{asset("../site/assets/images/care.png")}}" alt="2" style="height: 75px; width: 80px;">
                <h3 style="text-align: center;"> Mother Care <br>Hospital Mangaement System</h3></div>
        </div>

            <h1>My Medical Records </h1>
            <div class="container3" style="display: flex;">

            </div>

            <h2>Personal Information</h2>
            <table>
                <tr>
                    <th>Name</th>
                    <td>{{$mother->name}}</td>
                </tr>
                <tr>
                    <th>Age</th>
                    <td>{{$mother->age}}</td>
                </tr>
                                    <tr>
                                        <th>Gender</th>
                                        <td>Female</td>
                                    </tr>
                <tr>
                    <th>Contact Details</th>
                    <td>{{$mother->phone}}<br>{{$mother->email}}</td>
                </tr>
                                    <tr>
                                        <th>Emergency Contact Information</th>
                                        <td>Name: Adham <br>Phone: 555-5678</td>
                                    </tr>
            </table>
            <h2>Medical History</h2>
            <table>

                <tr class="str">
                    <th class="sth">Date</th>
                    <th class="sth">Doctor Name</th>
                    <th class="sth">Blood Pressure</th>
                    <th class="sth">Baby Size</th>
                    <th class="sth">Weight</th>
                    <th class="sth">Sugar Rate</th>
                    <th class="sth">Medication</th>

                </tr>
                    @foreach ($records as $record)
                        <tr >
                            <td class="std">{{$record->created_at}}</td>
                            <td class="std">{{$record->doctor->name}}</td>
                            <td class="std">{{$record->blood_pressure}}</td>
                            <td class="std">{{$record->baby_size}}</td>
                            <td class="std">{{$record->Weight}}</td>
                            <td class="std">{{$record->sugar_rate}}</td>
                            <td class="std">{{$record->medication}}</td>


                        </tr>

                    @endforeach
            </table>
            {{--                <h2>Test Results</h2>--}}
            {{--                <table>--}}
            {{--                    <tr>--}}
            {{--                        <th>Lab Test Results</th>--}}
            {{--                        <td><a href="#" class="lab-test-results">Click here to access</a></li></td>--}}
            {{--                    </tr>--}}
            {{--                    <tr>--}}
            {{--                        <th>Radiology Reports</th>--}}
            {{--                        <td><a href="#" class="lab-test-results">Click here to access</a></li></td>--}}
            {{--                    </tr>--}}

            {{--                </table>--}}


            {{--                --}}

            {{--                <table>--}}
            {{--                    <h2>Prescription</h2>--}}
            {{--                    <tr>--}}
            {{--                        <th>Previous Illnesses or Surgeries</th>--}}
            {{--                        <td>None</td>--}}
            {{--                    </tr>--}}
            {{--                    <tr>--}}
            {{--                        <th>Allergies</th>--}}
            {{--                        <td>Pollen, peanuts</td>--}}
            {{--                    </tr>--}}
            {{--                    <tr>--}}
            {{--                        <th>Medications</th>--}}
            {{--                        <td>Aspirin (2 tablets every 4 hours)</td>--}}
            {{--                    </tr>--}}
            {{--                </table>--}}

{{--            <table>--}}
{{--                <h2>Billing Information</h2>--}}
{{--                <tr>--}}
{{--                    <th>Medical Bills</th>--}}
{{--                    <td>100 LE</td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <th>Insurance Coverage</th>--}}
{{--                    <td>60%</td>--}}
{{--                </tr>--}}

{{--            </table>--}}

    </div>
</div>
</body>
</html>
