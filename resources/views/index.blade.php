@extends('app')

@section('content')

   <!-- Contacts -->
   <div class="contacts-content">
      <div class="container">
         <div class="row">
            <div class="col-md-12 text-center">
               <h1 style="margin-bottom: 25px;">Contacts</h1>
            </div>
             <div class="col-md-12  text-center">
                 {{ $contacts->count() }} contact(s)
             </div>
             <div class="col-md-12  text-center" style="margin-top: 10px; font-size: 20px;">
                 <a href="{{ route('add') }}">Add contact</a>
             </div>

            <div class="col-md-12  text-center">
               <table class="table">
                   <thead>
                       <tr>
                           <th scope="col">#</th>
                           <th scope="col">Lastname\name</th>
                           <th scope="col">Delete</th>
                           <th scope="col">Edit</th>
                       </tr>
                   </thead>
                   <tbody>
                 @foreach($contacts as $contact)
                     <tr>
                         <th scope="row">{{ $loop->iteration }}</th>
                         <td style="text-align: left;">
                            <a href="{{ url('/contact/'.$contact->id) }}">{{ $contact->last_name }}  {{ $contact->name }}</a>
                         </td>
                         <td style="text-align: left;">
                            <a href="/delete/{{ $contact->id }}" class="btn btn-warning">Delete</a>
                         </td>
                         <td style="text-align: left;">
                             <a href="/edit/{{ $contact->id }}" class="btn btn-success">Edit</a>
                         </td>
                  @endforeach
                     </tr>
                   </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
   <!-- End section contacts -->

@endsection
