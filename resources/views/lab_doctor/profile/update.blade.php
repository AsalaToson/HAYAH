@extends('lab_doctor.dashboard.parent')

@section('content')
    <h1> Edit Profile...</h1>
    <div class="inner_content">
        <div class="col-12">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

        </div>
        <h3> Edit Profile</h3><br>
        <hr>
        <form id="add-patient-form" action="{{ route('labProfile.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">LabDoctor Name</label><br/>
                <input type="text" id="name" name="name" required placeholder="LabDoctor name" value="{{ $labDoctor->name }}">
            </div>

            <div class="form-group">
                <label for="age">Age</label><br/>
                <input type="text" id="age" name="age" required placeholder="Age" value="{{ $labDoctor->age }}">
            </div>
            <div class="form-group">
                <label for="phone">Phone </label><br/>
                <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required placeholder="phone number" value="{{ $labDoctor->phone }}">
            </div>
            <div class="form-group">
                <label for="email">Email</label><br/>
                <input type="email" id="email" name="email" required placeholder="Email" value="{{ $labDoctor->email }}">
            </div>
            <div class="form-group">
                <label for="gender">Gender</label><br/>
                <select id="gender" name="gender" required >
                    <option value="{{$labDoctor->gender}}"></option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>

                </select>
            </div>

            <div class="form-group">
                <label for="address">Address</label><br/>
                <input type="text" id="address" name="address" required placeholder="address" value="{{ $labDoctor->address }}">
            </div>
            <div class="form-group">
                <label for="experience">Experience</label><br/>
                <input type="text" id="experience" name="experience" required placeholder="experience" value="{{ $labDoctor->experience }}">
            </div>
            <div class="form-group">
                <label for="image">image</label><br/>
                <input type="file" id="image" name="image"  required placeholder="choose image"  >
                @if($labDoctor->image)
                    <img src="{{asset('Dashboard/image/labDoctors/'.$labDoctor->image)}}"
                         height="50px" width="50px" alt="">

                @else
                    <img src="{{asset('Dashboard/image/labDoctor/1.jpg')}}" height="50px"
                         width="50px" alt="">
                @endif
            </div>

            <br>

            <button type="submit" class="btn btn-primary">Update Profile</button>

        </form>

    </div>
@endsection
