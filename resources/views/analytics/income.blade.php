@extends('layouts.app')
@section('title')
    {{ __('Income Analytics') }}
@endsection
@section('header_toolbar')
    <div class="container-fluid">
        <div class="d-md-flex align-items-center justify-content-between mb-7">
            <h1 class="mb-0">{{ __('Income Analytics') }}</h1>
        </div>
    </div>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="d-flex flex-column">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <iframe 
                                width="100%" 
                                height="800" 
                                src="https://lookerstudio.google.com/embed/reporting/6fa49e86-eae2-4307-83aa-4a0bee1d11cb/page/tK3rE" 
                                frameborder="0" 
                                style="border:0" 
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection