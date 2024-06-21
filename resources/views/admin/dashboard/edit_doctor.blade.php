@extends('admin.parent')

@section('content')

    <div class="short" >
        <h3 class="dash"> Edit Doctor </h3>
        <div class="top"> <i class="fa fa-home" ></i> <p  class="rout">  / Doctors / Edit Doctor </p></div>
    </div>

        <div class="inner_content">
            <h3>Edit doctor</h3><br>
            <hr>

            <form id="add-patient-form" action="{{route('doctors.update',$doctor->id)}}" method="post" enctype="multipart/form-data" >
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="first-name">Doctor Name</label><br/>
                    <input type="text" id="first-name" name="name" value="{{$doctor->name}}" required placeholder="Doctor name">
                </div>

                <!--<div class="form-group">
                    <label for="last-name">Specialization</label><br/>
                    <input type="text" id="last-name" name="section" required placeholder="Specialization">
                </div>-->

                <div class="form-group">
                    <label for="section-name">Specialization</label><br/>
                    <select name="section_id" >Specialization
                        <option value="" selected disabled>Specialization</option>
                        @foreach($section as $Section)
                            <option
                                value="{{$Section->id}}" {{$Section->id == $doctor->section_id ? 'selected':"" }}>{{$Section->name}}</option>
                        @endforeach
                    </select>
                </div>


                <div class="form-group">
                    <label for="address">Age</label><br/>
                    <input type="text" id="address" name="age" value="{{$doctor->age}}" required placeholder="Age">
                </div>
                <div class="form-group">
                    <label for="phone">Phone </label><br/>
                    <input type="tel" id="phone" name="phone" value="{{$doctor->phone}}" required placeholder="phone number">
                </div>
                <div class="form-group">
                    <label for="email">Email</label><br/>
                    <input type="email" id="email" name="email" value="{{$doctor->email}}" required placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label><br/>
                    <select id="gender" name="gender"  required>
                        <option  >{{$doctor->gender}} </option>
                        <option  value="Male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>

                    </select>
                </div>
                <div class="form-group">
                    <label for="doc_details">Doctor  Details</label><br/>
                    <input type="text" id="doc_details" name="details" value="{{$doctor->details}}" required placeholder="Doctor Details" aria-setsize="30">
                </div>
                <div class="form-group">
                    <label for="Address">Address</label><br/>
                    <input type="text" id="Address" name="address" value="{{$doctor->address}}" required placeholder="Address">
                </div>
                <div class="form-group">
                    <label for="Experience">Experience</label><br/>
                    <input type="text" id="Experience" name="experience" value="{{$doctor->experience}}" required placeholder="Experience">
                </div>

                <div class="form-group">
                    <label for="password">password</label><br/>
                    <input type="text" id="password" name="password" value="{{$doctor->password}}" required placeholder="password">
                </div>



                <div class="form-group">
                    <label for="password">appointment</label><br/>
                    <input type="text" id="password" name="appointment" value="{{$doctor->appointment}}" required placeholder="password">
                </div>


{{--                <div class="form-group">--}}
{{--                    <label for="section-name">appointment</label><br/>--}}
{{--                    <select name="appointment" >appointment--}}


{{--                        @foreach($appointments as $appointment)--}}

{{--                            <option value="{{$doctor->appointment}}"></option>--}}
{{--                        @endforeach--}}
{{--                    </select>--}}
{{--                </div>--}}



                <div class="form-group">
                    <label for="password">price</label><br/>
                    <input type="text" id="password" name="price" value="{{$doctor->price}}" required placeholder="password">
                </div>

                <div class="form-group">
                    <label for="image">image</label><br/>
                    <input type="file" id="image" name="image"  required placeholder="choose image"  >
                    @if($doctor->image)
                        <img src="{{asset('Dashboard/image/doctors/'.$doctor->image->filename)}}"
                             height="50px" width="50px" alt="">

                    @else
                        <img src="{{asset('Dashboard/image/doctors/asala-toson.jpg')}}" height="50px"
                             width="50px" alt="">
                    @endif
                </div>
                <br>

                <div class="form-group">
                    <input type="checkbox" id="checkbox1" name="checkbox1" value="value1" >
                    <label for="checkbox1" style="font-size: large;">Please confrim</label>
                </div><br>


                <button type="submit">Add Doctor</button>
            </form>






        </div>

@endsection













