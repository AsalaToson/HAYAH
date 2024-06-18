@extends('admin.parent')

@section('content')


        <h1>Add appointment</h1>
        <div class="inner_content">
            <h3>Add appointment</h3><br>
            <hr>

            <form id="add-patient-form" action="{{route('AppointmentMother.store')}}" method="post">
                @csrf
                @method('POST')

                <div class="form-group">
                    <label for="first-name"> Full Name</label><br/>
                    <input type="text" id="first-name" name="name" required placeholder=" Doctor Name">
                </div>

                <div class="form-group">
                    <label for="address">Enter Email</label><br/>
                    <input type="text" id="pId" name="email" required placeholder="Enter Email">
                </div>

                <div class="form-group">
                    <label for="address">Enter phone</label><br/>
                    <input type="text" id="pId" name="phone" required placeholder="Enter phone">
                </div>


                <div class="form-group">
                    <div class="appointment-form-field">
                    <label for="address">Enter appointment</label><br/>
                    <input type="date" id="pId" name="appointment" required placeholder="Enter appointment">
                    </div>
                </div>

                <div class="form-group">
                    <div class="appointment-form-field">
                        <select id="time" required="time" name="time">
                            <option value="">Time Slot</option>
                            <option value="09:00-10:00">09:00 AM - 10:00 AM</option>
                            <option value="10:00-11:00">10:00 AM - 11:00 AM</option>
                            <option value="11:00-12:00">11:00 AM - 12:00 PM</option>
                            <option value="12:00-13:00">12:00 PM - 01:00 PM</option>
                            <option value="13:00-14:00">01:00 PM - 02:00 PM</option>
                            <option value="14:00-15:00">02:00 PM - 03:00 PM</option>
                            <option value="15:00-16:00">03:00 PM - 04:00 PM</option>
                            <option value="16:00-17:00">04:00 PM - 05:00 PM</option>
                        </select>
                    </div>
                </div>


                <div class="form-group">
                                                        <label for="section-name">Specialization</label><br/>
                    <select name="section_id" >Specialization
                        <option value="" selected disabled>Specialization</option>
                        @foreach($section as $Section)
                            <option value="{{$Section->id}}">{{$Section->name}}</option>
                        @endforeach
                    </select>
                </div>


                <div class="form-group">
                                                        <label for="section-name">Doctor</label><br/>
                    <select name="doctor_id" required="Select Doctor">
                        <option value="" selected disabled>Doctor</option>
                        @foreach($doctor as $Doctor)
                            <option value="{{$Doctor->id}}">{{$Doctor->name}}</option>
                        @endforeach
                    </select>
                </div>



                <style>

                    .note-box textarea {
                        width: 50%;
                        height: 200px;
                        padding: 10px;
                        border: 1px solid #ccc;
                        border-radius: 5px;
                        font-size: 16px;
                        resize: none;
                    }
                </style>

                <div class="note-box">
                    <h4>Write your notes</h4>
                    <textarea placeholder="Type your notes here..." name="notes"></textarea>
                </div>






                <button type="submit">Add Appointment</button>
            </form>






        </div>

@endsection
