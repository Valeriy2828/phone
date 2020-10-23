@extends('app')

@section('content')
    <div class="edit-form-content" style="margin-top: 50px;">
        <div class="container">
            <form method="post" action="/edit/{{$contact_edit->id}}/update">
                @csrf
                <div class="col-5">
                    <center>
                        <div style="margin: 20px 0 30px 0;"><h3>Edit contact</h3></div>
                    </center>
                    <div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" name="name" class="form-control" id="exampleFormControlInput1" value="{{ $contact_edit->name  }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Lastname</label>
                            <input type="text" name="lastname" class="form-control" id="exampleFormControlInput1" value="{{ $contact_edit->last_name }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Telephone(s)</label>
                            @foreach($contact_edit->phones as $k => $tel)
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="phone{{$k}}" value="{{ $tel->phone }}">
                            @endforeach
                        </div>
                        <div class="form-group">
                            <input type="submit" id="submit" class="btn btn-primary" value="Save changes">
                        </div>
                    </div>
                </div>
            </form>
            <div class="col-md-5 text-center">
                <a href="{{ route('home') }}">To contact list</a>
            </div>
        </div>
    </div>
@endsection
