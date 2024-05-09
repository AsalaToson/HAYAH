<div>
    @if($message === true)
        <script>
            alert('Booking details have been sent to the hospital, and appointment information will be sent via phone and email')
            location.reload()
        </script>
    @endif
    <form  wire:submit.prevent="store">

        <!-- APPOINTMENT FORM -->
        <div id="appointment-form-holder" class="text-center">
            <form name="appointmentform" class="row appointment-form">
                <!-- Form Select -->
                <div
                    id="input-department"
                    class="col-md-12 input-department"
                >
                    <select
                        id="inlineFormCustomSelect1"
                        name="department"
                        class="custom-select department"
                        required
                        wire:model="department"

                    >
                        @foreach($sections as $section)
                            <option value="{{$section->id}}">{{$section->name}}</option>
                        @endforeach
                        <option value="">Select Department</option>
                        <option>Obstetrics and Gynecology Department</option>
                        <option>Psychological Services Department</option>
                        <option>Neonatal Intensive Care Unit (NICU) Department</option>
                        <option>Nutrition and Dietetics Department</option>
                        <option>Pediatric and Neonatology Department</option>
                        <option>Family Planning and Contraception Department</option>
                        <option>Laboratory Services</option>
                        <option>Other</option>
                    </select>
                </div>

                <!-- Form Select -->
                <div id="input-doctor" class="col-md-12 input-doctor">
                    <select
                        id="inlineFormCustomSelect2"
                        name="doctor"
                        wire:model="doctor"
                        class="custom-select doctor"
                        required

                    >
                        @foreach($doctors as $doctor)
                            <option value="{{$doctore->id}}">{{$doctor->name}}</option>
                        @endforeach
                        <option value="">Select Doctor</option>
                        <option>Jonathan Barnes D.M.</option>
                        <option>Hannah Harper D.M.</option>
                        <option>Matthew Anderson D.M.</option>
                        <option>Megan Coleman D.M.</option>
                        <option>Joshua Elledge D.M.</option>
                        <option>Other</option>
                    </select>
                </div>

                <!-- Form Select -->
                <div id="input-patient" class="col-md-12 input-patient">
                    <select
                        id="inlineFormCustomSelect3"
                        name="patient"
                        class="custom-select patient"
                        required
                        wire:model="patient"
                    >
                        <option value="">Have You Visited Us Before?*</option>
                        <option>New Patient</option>
                        <option>Returning Patient</option>
                        <option>Other</option>
                    </select>
                </div>

                <!-- Contact Form Input -->
                <div id="input-date" class="col-lg-12">
                    <input
                        id="datetimepicker"
                        type="text"
                        name="date"
                        class="form-control date"
                        placeholder="Appointment Date"
                        required
                        wire:model="date"
                    />
                </div>

                <!-- Contact Form Input -->
                <div id="input-name" class="col-lg-12">
                    <input
                        type="text"
                        name="name"
                        class="form-control name"
                        placeholder="Enter Your Name*"
                        required
                        wire:model="name"
                    />
                </div>

                <div id="input-email" class="col-lg-12">
                    <input
                        type="text"
                        name="email"
                        class="form-control email"
                        placeholder="Enter Your Email*"
                        required
                        wire:model="email"
                    />
                </div>

                <div id="input-phone" class="col-lg-12">
                    <input
                        type="tel"
                        name="phone"
                        class="form-control phone"
                        placeholder="Enter Your Phone Number*"
                        required
                        wire:model="phone"
                    />
                </div>

                <div id="input-message" class="col-lg-12 input-message">
                      <textarea
                          class="form-control message"
                          name="message"
                          rows="6"
                          placeholder="Your Message ...

                          wire:model="message"
                    ></textarea>
                </div>

        </div>


        <!-- Contact Form Button -->
        <div class="col-lg-12 form-btn">
            <button
                type="submit"
                class="btn btn-blue blue-hover submit"
            >
                Are You sure
            </button>
        </div>

        <!-- Contact Form Message -->
        <div class="col-lg-12 appointment-form-msg text-center">
            <div class="sending-msg">
                <span class="loading"></span>
            </div>
        </div>
    </form>
    </form>
</div>
<!-- END APPOINTMENT FORM -->
