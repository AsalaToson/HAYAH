@extends('admin.parent')

@section('content')


        <h1>Add Lab Doctors</h1>
        <div class="inner_content">
            <h3>Add Lab Doctors</h3><br>
            <hr>

            <form id="add-patient-form" action="{{route('lab_doctors.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="first-name"> Lab Doctors Name</label><br/>
                    <input type="text" id="first-name" name="name" required placeholder=" Lab Doctors Name">
                </div>

                <div class="form-group">
                    <label for="phone">Phone </label><br/>
                    <input type="tel" id="phone" name="phone"  required placeholder="phone number">
                </div>
                <div class="form-group">
                    <label for="email">Email</label><br/>
                    <input type="email" id="email" name="email" required placeholder="Email">
                </div>

                <div class="form-group">
                    <label for="password">Password</label><br/>
                    <input type="text" id="password" name="password" required placeholder="password">
                </div>

                <div class="form-group">
                    <label for="age">Age</label><br/>
                    <input type="text" id="age" name="age" required placeholder="age">
                </div>


                <div class="form-group">
                    <label for="Experience">Experience</label><br/>
                    <input type="text" id="Experience" name="experience" required placeholder="Experience">
                </div>

                <div class="form-group">
                    <label for="gender">Gender</label><br/>
                    <select id="gender" name="gender" required>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        {{--                        <option value="other">Other</option>--}}

                    </select>
                </div>

                <div class="form-group">
                    <label for="Experience">address</label><br/>
                    <input type="text" id="address" name="address" required placeholder="address">
                </div>

                <div class="form-group">
                    <label for="Experience">image</label><br/>
                    <input type="file" id="image" name="image" required placeholder="image">
                </div>


                <br>
                <div class="form-group">
                    <input type="checkbox" id="checkbox1" name="checkbox1" value="value1" >
                    <label for="checkbox1" style="font-size: large;">Please confrim</label>
                </div><br>


                <button type="submit">Add Lab Doctors</button>
            </form>

        </div>

@endsection



