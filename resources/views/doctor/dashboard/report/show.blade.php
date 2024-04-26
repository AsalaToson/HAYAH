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
            <div class="container">
                <div class="container">
                    @if (isset($message))
                        <p>{{ $message }}</p>
                    @else

                    <h1>My Medical Records </h1>
                        <div class="container3" style="display: flex;">
                        <a href="{{route('record.create',[$records->mother->id])}}"> <button type="button" class="download-button"  id="dbutton" >
                                <i class="fa fa-pencil" aria-hidden="true"></i>prescribe
                            </button></a>
                        </div>

                <h2>Personal Information</h2>
                <table>
                    <tr>
                        <th>Name</th>
                        <td>{{$records->mother->name}}</td>
                    </tr>
                    <tr>
                        <th>Age</th>
                        <td>{{$records->mother->age}}</td>
                    </tr>
                    {{--                    <tr>--}}
                    {{--                        <th>Gender</th>--}}
                    {{--                        <td>Female</td>--}}
                    {{--                    </tr>--}}
                    <tr>
                        <th>Contact Details</th>
                        <td>{{$records->mother->phone}}<br>{{$records->mother->email}}</td>
                    </tr>
                    {{--                    <tr>--}}
                    {{--                        <th>Emergency Contact Information</th>--}}
                    {{--                        <td>Name: Adham <br>Phone: 555-5678</td>--}}
                    {{--                    </tr>--}}
                </table>
                <h2>Medical History</h2>
                <table>
{{--                    @if (isset($records))--}}
{{--                        @foreach ($records as $record)--}}
                            <tr>
                                <th>Blood pressure</th>
                                <td>{{$records->bloodPressure}}</td>
                            </tr>
                            <tr>
                                <th>Baby Size</th>
                                <td>{{$records->babySize}}</td>
                            </tr>
                            <tr>
                                <th>Medications</th>
                                <td>{{$records->medication}}</td>
                            </tr>
{{--                        @endforeach--}}
{{--                    @endif--}}
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

                <table>
                    <h2>Billing Information</h2>
                    <tr>
                        <th>Medical Bills</th>
                        <td>100 LE</td>
                    </tr>
                    <tr>
                        <th>Insurance Coverage</th>
                        <td>60%</td>
                    </tr>

                </table>
                <a href= "{{route('record.pdf',[$records->mother->id])}}"  class="download-button" >Download</a>
                <a href="../test.html" class="home-button">Home</a>
    @endif

</div>
            </div>
            </body>
</html>
