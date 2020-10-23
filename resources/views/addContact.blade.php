@extends('app')

@section('content')
    <!-- Add Contacts -->
    <div class="add-form-content" style="margin-top: 50px;">
        <div class="container">
            <form method="post" action="/addContact/add" id="myModal">
                @csrf
                <div class="col-5">
                    <center>
                        <div style="margin: 20px 0 30px 0;"><h3>Add contact</h3></div>
                    </center>
                    <div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Lastname</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="lastname" value="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Telephone(s)</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="phone[]" value="">
                        </div>
                        <a href="#" id="show-phone">More phones</a>

                        <div class="more-tel hide">
                            <div class="form-group text-left">
                                <input id="cancel" type="reset" value="Hide" class="btn btn-default" />
                            </div>
                            @for($i = 1; $i <= 19; $i++)
                                <div class="form-group">
                                    <input id="name" type="text" class="form-control" id="exampleFormControlInput1" name="phone[]" value="">
                                </div>
                            @endfor
                        </div>
                        <div class="form-group">
                            <input type="submit" id="submit" class="btn btn-primary" value="Submit">
                        </div>
                    </div>
                </div>
            </form>
            <div class="col-5 text-center">
                <a href="{{ route('home') }}">To contact list</a>
            </div>
        </div>
    </div>
    <!-- End add Contacts -->
@endsection
