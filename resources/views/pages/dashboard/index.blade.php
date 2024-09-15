@extends('layouts.v_template')


@section('content')
    <div class="row">
        @if (auth()->user()->role == 'Administrator')
            <div class="col-xl-12 col-sm-12 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <h1>Selamat datang di sistem pelayanan terintegrasi lurah</h1>
                    </div>
                </div>
            </div>
        @endif

    </div>


 @endsection

@section('script')
    <script>
        $('.nav-link').removeClass('active');
        $('#liDashboard').addClass('active');
    </script>
@endsection
