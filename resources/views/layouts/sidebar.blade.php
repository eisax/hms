{{-- <link href="{{ mix('assets/css/style.css') }}" rel="stylesheet" type="text/css"/> --}}
@php
    $settingValue = getSettingValue();
@endphp
<div class="aside-menu-container shadow-lg" id="sidebar">
    <div class="aside-menu-container__aside-logo p-3 border-bottom">
        <div class="d-flex align-items-center justify-content-between">
            <a data-turbo="false" href="{{ url('/') }}" class="d-flex align-items-center text-decoration-none" 
               data-toggle="tooltip" data-placement="right" title="{{ getAppName() }}" target="_blank">
                <img src="{{ asset($settingValue['app_logo']['value']) }}" 
                     alt="Logo" class="rounded-circle" width="40" height="40"/>
                <span class="ms-3 fw-bold text-primary">{{ getAppName() }}</span>
            </a>
            <button type="button" class="btn btn-link text-dark p-0 d-lg-block d-none sidebar-btn">
                <i class="fa-solid fa-bars-staggered fs-4"></i>
            </button>
        </div>
    </div>

    <div class="p-3">
        <div class="position-relative">
            <input class="form-control bg-light border-0 rounded-pill" type="text" 
                   placeholder="{{ __('messages.common.search') }}" id="menuSearch">
            <i class="fa-solid fa-magnifying-glass position-absolute top-50 translate-middle-y end-0 me-3 text-muted"></i>
        </div>
    </div>

    <div class="no-record text-muted text-center mt-2 d-none">
        {{ __('messages.no_matching_records_found') }}
    </div>

    <div class="sidebar-menu overflow-auto">
        <ul class="nav flex-column">
            @include('layouts.menu')
        </ul>
    </div>
</div>

<div class="sidebar-overlay" id="sidebar-overly"></div>
