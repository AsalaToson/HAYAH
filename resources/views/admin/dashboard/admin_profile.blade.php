@extends('admin.parent')

@section('content')

    <div class="short" >
        <h3 class="dash"> Profile</h3>
        <div class="top"> <i class="fa fa-home" ></i> <p  class="rout"> / profile</p></div>
    </div>

        <div class="inner_content">
            <h3>My Profile</h3><br>
            <hr>

            <form id="add-patient-form" action="{{route('profile.update2')}}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="first-name">Receptionist Name</label><br/>
                    <input type="text" id="first-name" name="name" value="{{$admins->name}}" required placeholder="Receptionist name">
                </div>


                <div class="form-group">
                    <label for="phone">Phone </label><br/>
                    <input type="tel" id="phone" name="phone" value="{{$admins->phone}}"   required placeholder="phone number">
                </div>
                <div class="form-group">
                    <label for="email">Email</label><br/>
                    <input type="email" id="email" name="email" value="{{$admins->email}}" required placeholder="Email">
                </div>

                <div class="form-group">
                    <label for="Experience">Experience</label><br/>
                    <input type="text" id="Experience" name="experience" value="{{$admins->experience}}" required placeholder="Experience">
                </div>

                <div class="form-group">
                    <label for="password">Password</label><br/>
                    <input type="text" id="password" name="password" value="{{$admins->password}}" required placeholder="password">
                </div>

                <div class="form-group">
                    <label for="age">Age</label><br/>
                    <input type="text" id="age" name="age" value="{{$admins->age}}" required placeholder="age">
                </div>
                <br>
                <div class="form-group">
                    <input type="checkbox" id="checkbox1" name="checkbox1" value="value1" >
                    <label for="checkbox1" style="font-size: large;">Please confrim</label>
                </div><br>


                <button type="submit">Edit My Profile</button>
            </form>


        </div>
@endsection






