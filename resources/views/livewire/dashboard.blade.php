<div>
    <div class="container-fluid">
        <div class="d-flex flex-column">
            <div class="row">
                <div class="col-12 mb-4">
                    <div class="row">
                        @if ($modules['Doctors'])
                            {{-- Doctors Widget --}}
                            <div class="col-xxl-3 col-xl-4 col-sm-6 widget">
                                <a href="{{ route('doctors.index') }}" class="text-decoration-none">
                                    <div class="bg-white shadow-md rounded-10 p-xxl-10 px-7 py-10 d-flex align-items-center justify-content-between my-3">
                                        <div class="bg-primary widget-icon rounded-10 d-flex align-items-center justify-content-center">
                                            <i class="fa-solid fa-user-doctor fs-1-xl text-white"></i>
                                        </div>
                                        <div class="text-end">
                                            <h2 class="fs-1-xxl fw-bolder text-primary">{{$doctors}}</h2>
                                            <h3 class="mb-0 fs-5 fw-bold text-dark">{{ __('messages.dashboard.doctors') }}</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endif
                        @if ($modules['Patients'])
                            {{-- Patients Widget --}}
                            <div class="col-xxl-3 col-xl-4 col-sm-6 widget">
                                <a href="{{ route('patients.index') }}" class="text-decoration-none">
                                    <div class="bg-white shadow-md rounded-10 p-xxl-10 px-7 py-10 d-flex align-items-center justify-content-between my-3">
                                        <div class="bg-primary widget-icon rounded-10 d-flex align-items-center justify-content-center">
                                            <i class="fa-solid fa-user fs-1-xl text-white"></i>
                                        </div>
                                        <div class="text-end">
                                            <h2 class="fs-1-xxl fw-bolder text-primary">{{$patients}}</h2>
                                            <h3 class="mb-0 fs-5 fw-bold text-dark">{{ __('messages.dashboard.patients') }}</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endif
                        @if ($modules['Nurses'])
                            {{-- Nurses Widget --}}
                            <div class="col-xxl-3 col-xl-4 col-sm-6 widget">
                                <a href="{{ route('nurses.index') }}" class="text-decoration-none">
                                    <div class="bg-white shadow-md rounded-10 p-xxl-10 px-7 py-10 d-flex align-items-center justify-content-between my-3">
                                        <div class="bg-primary widget-icon rounded-10 d-flex align-items-center justify-content-center">
                                            <i class="fa-solid fa-user-nurse fs-1-xl text-white"></i>
                                        </div>
                                        <div class="text-end">
                                            <h2 class="fs-1-xxl fw-bolder text-primary">{{$nurses}}</h2>
                                            <h3 class="mb-0 fs-5 fw-bold text-dark">{{ __('messages.nurses') }}</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endif
                        @if ($modules['Admin'])
                            {{-- Admins Widget --}}
                            <div class="col-xxl-3 col-xl-4 col-sm-6 widget">
                                <a href="{{ route('admins.index') }}" class="text-decoration-none">
                                    <div class="bg-white shadow-md rounded-10 p-xxl-10 px-7 py-10 d-flex align-items-center justify-content-between my-3">
                                        <div class="bg-primary widget-icon rounded-10 d-flex align-items-center justify-content-center">
                                            <i class="fa-solid fa-user-shield fs-1-xl text-white"></i>
                                        </div>
                                        <div class="text-end">
                                            <h2 class="fs-1-xxl fw-bolder text-primary">{{$admins}}</h2>
                                            <h3 class="mb-0 fs-5 fw-bold text-dark">{{ __('messages.admin') }}</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
