@extends('lab_doctor.dashboard.parent')

@section('content')
    <h1>Profile...</h1>
    <div class="inner_content">
        <h3> Profile</h3><br>
        <hr>

        <div class="profile">
            @if ($labDoctor->image)
                <img  width="400px" height="350"  src="{{ asset('Dashboard/image/labDoctors/'.$labDoctor->image) }}" alt="Profile Image">
            @else
                <img src="" alt="profileimage" style="height: 200px; width: 300px">
            @endif

            <div class="profileData">
                <h2>{{$labDoctor->name}}</h2>
                <p><b>Name:</b>{{$labDoctor->name}}</p>
                <p><b>Age:</b>{{$labDoctor->age}}</p>
                <p><b>Age:</b>{{$labDoctor->phone}}</p>
                <p><b>Email:</b>{{$labDoctor->email}}</p>
                <p><b>Experience:</b>{{$labDoctor->experience}}</p>

            </div>
        </div>
        <a href="{{route('labProfile.edit')}}"> <button type="button" class="btn btn-primary"  id="dbutton" >
                <i class="fas fa-edit"></i> Edit
            </button></a>
    </div>
@endsection
