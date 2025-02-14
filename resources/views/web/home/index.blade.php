@extends('web.layouts.front')
@section('title')
    {{ __('web.home') }}
@endsection
@section('content')
    <div class="home-page">
        <!--start book-appointment section-->
        <section class="appointment-section" style="position: relative; z-index: 1; margin-top: 80px;">
            <div class="container">
                <div class="book-appintment position-relative br-2 bg-white">
                    <form action="{{ route('appointment.post') }}" method="POST" turbo:load>
                        <div class="row align-items-center justify-content-around">
                            <div class="col-lg-3">
                                <h3 class="mb-lg-0 mb-3 fw-bold">{{ __('messages.web_home.book_an_appointment') }}</h3>
                            </div>
                            <div class="col-lg-3 col-md-6 text-center mb-lg-0 mb-3">
                                <select class="doctor-name-filter" name="doctorId" id="appointmentDoctorId" aria-label="select doctor">
                                    <option value="">{{ __('messages.web_home.select_doctor') }}</option>
                                    @foreach($doctors as $doctor)
                                        <option value="{{ $doctor->id }}">{{ $doctor->doctorUser->full_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-3 col-md-6 text-center mb-lg-0 mb-3">
                                <input type="text" name="appointmentDate" autocomplete="off" class="form-control datepicker"
                                       id="datepicker"
                                       placeholder="{{ __('messages.web_appointment.select_time') }}">
                            </div>
                            <div class="col-lg-3 text-end">
                                <button type="submit" class="btn btn-primary d-block w-100" id="bookAppointment">
                                    {{ __('messages.web_home.book_now') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!--end book-appointment section-->
    </div>
@endsection

<style>
.appointment-section .book-appintment {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px;
    border-radius: 10px;
    background: white;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
}

.appointment-section .row {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
}

.appointment-section select,
.appointment-section input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

.appointment-section .btn-primary {
    padding: 12px 20px;
    background-color: #ff7f50;
    border: none;
    border-radius: 5px;
    color: white;
    font-weight: bold;
}

@media (max-width: 768px) {
    .appointment-section .row {
        flex-direction: column;
        text-align: center;
    }
    
    .appointment-section .btn-primary {
        width: 100%;
        margin-top: 10px;
    }
}
</style>
