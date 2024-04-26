@extends('doctor.dashboard.parent')

@section('content')
    <h1>Profile...</h1>
    <div class="inner_content">
        <h3> Profile</h3><br>
        <hr>

        <div class="profile">
{{--            <img src="images/R.jpg" alt="profileimage" style="height: 200px;">--}}
            @if ($doctor->image)
{{--                <img width="400px" height="350" src="Dashboard/image/doctors/{{ $doctor->image->filename }}" alt="Doctor Image"><br>--}}
                <img   src="{{ asset('Dashboard/image/doctors/'.$doctor->image) }}" alt="Profile Image">
            @else
                <img src="" alt="profileimage"
                     style="height: 200px; width: 300px">
            @endif

            <div class="profileData">
                <h2>{{$doctor->name}}</h2>
                <p><b>Name:</b>{{$doctor->name}}</p>
                <p><b>Age:</b>{{$doctor->age}}</p>
                <p><b>Email:</b>{{$doctor->email}}</p>
                <p><b>Experience:</b>{{$doctor->experience}}</p>

            </div>
        </div>
        <a href="{{route('profile.edit')}}"> <button type="button" class="btn btn-primary"  id="dbutton" >
                <i class="fas fa-edit"></i> Edit
            </button></a>
    </div>
@endsection
