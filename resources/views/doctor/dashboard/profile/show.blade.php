@extends('doctor.dashboard.parent')

@section('content')

    <div class="short" >
        <h3 class="dash"> Profile</h3>
        <div class="top"> <i class="fa fa-home" ></i> <p  class="rout">  / Dashboard / Profile </p></div>
    </div>

    <div class="inner_content">
        <h3> Profile</h3><br>
        <hr>

        <div class="profile">
            @if ($doctor->image)
                <img  width="400px" height="350"  src="{{ asset('Dashboard/image/doctors/'.$doctor->image) }}" alt="Profile Image">
            @else
                <img src="" alt="profileimage" style="height: 200px; width: 300px">
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
