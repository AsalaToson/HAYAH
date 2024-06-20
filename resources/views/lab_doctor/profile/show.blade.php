@extends('lab_doctor.dashboard.parent')

@section('content')
    <h1>Profile...</h1>
    <div class="inner_content">
        <h3> Profile</h3><br>
        <hr>

        <div class="profile">
            @if ($labDoctor->image)
                <img  width="500px" height="550"  src="{{ asset('Dashboard/image/labDoctor/'.$labDoctor->image) }}" alt="Profile Image">
            @else
                <img src="" alt="profileimage" style="height: 400px; width: 500px">
            @endif


            <div class="profileData">
                <h2>{{$labDoctor->name}}</h2>
                <p><b>Name:</b>{{$labDoctor->name}}</p>
                <p><b>Age:</b>{{$labDoctor->age}}</p>
                <p><b>Gender:</b>{{$labDoctor->gender}}</p>
                <p><b>Phone:</b>{{$labDoctor->phone}}</p>
                <p><b>Email:</b>{{$labDoctor->email}}</p>
                <p><b>Experience:</b>{{$labDoctor->experience}}</p>

            </div>
        </div>
        <a href="{{route('labProfile.edit')}}"> <button type="button" class="btn btn-primary"  id="dbutton" >
                <i class="fas fa-edit"></i> Edit
            </button></a>
    </div>
@endsection
