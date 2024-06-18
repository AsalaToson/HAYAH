<!DOCTYPE html>
<html lang="">
<head>
    <title>My Medical Record</title>
    <link rel="icon" type="image/png" href="favicon.ico"/>
    <link rel="stylesheet" href="{{asset('../../css/style.css')}}">
</head>
<body>
<div class="container">
    <div class="container">
        <div style="display: flex; justify-content: space-between; margin-bottom: 20px; ">
            <img src="{{asset('site/assets/images/logo2.png')}}" alt="1" style="height: 75px; width: 200px;">
            <div style="display: flex;"><img src="{{asset("../site/assets/images/care.png")}}" alt="2" style="height: 75px; width: 80px;">
                <h3 style="text-align: center;"> Mother Care <br>Hospital Mangaement System</h3></div>


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
        </div>
    </div>
</div>
</body>
</html>
