@extends('admin.parent')

@section('content')

        <h1>Profile...</h1>
        <div class="inner_content">
            <h3> Profile</h3><br>
            <hr>

            <div class="profile">
{{--                @if ($admins->image)--}}
{{--                    <img  width="400px" height="350"  src="{{ asset('Dashboard/image/doctors/'.$admins->image) }}" alt="Profile Image">--}}
{{--                @else--}}
{{--                    <img src="" alt="profileimage" style="height: 200px; width: 300px">--}}
{{--                @endif--}}

                <div class="profileData">
                    <h2>{{$admins->name}}</h2>
                    <p><b>Name:</b>{{$admins->name}}</p>
                    <p><b>Age:</b>{{$admins->age}}</p>
                    <p><b>Email:</b>{{$admins->email}}</p>
                    <p><b>Experience:</b>{{$admins->experience}}</p>

                </div>
            </div>
            <a href="{{route('profile.edit2')}}"> <button type="button" class="btn btn-primary"  id="dbutton" >
                    <i class="fas fa-edit"></i> Edit
                </button></a>
        </div>
        @endsection







