@extends('app')

@section('content')
<!-- Contact -->
    <div class="contact">
        <div class="container">

            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 style="margin-bottom: 25px;">Contact</h1>
                </div>
                    <div class="col-md-12  text-center">
                        <div style="color:#424242;margin-bottom: 25px;">Lastname: {{ $contacts->last_name }}</div>
                        <div style="color:#424242;margin-bottom: 25px;">Name: {{ $contacts->name }}</div>
                        <div style="color:#424242;margin-bottom: 25px;">Telephone(s):</div>
                        @foreach($contacts->phones as $tel)
                            <div style="color:#424242;margin-bottom: 25px;">
                                <ul>
                                    <li style="list-style-type: none;">{{ $tel->phone }}</li>
                                </ul>
                            </div>
                        @endforeach
                    </div>
                <div class="col-md-12 text-center">
                    <a href="{{ route('home') }}">To contact list</a>
                </div>
            </div>
        </div>
    </div>
<!--End contact section -->
@endsection
