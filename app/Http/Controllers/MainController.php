<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Phone;

use Validator;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();

        return view('index', ['contacts' => $contacts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        return view('addContact');
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:100',
            'lastname' => 'required|max:100',
            'phone' => 'required|array'
        ]);

        $contact = new Contact([
            'name' => $request->input('name'),
            'last_name' => $request->input('lastname')
        ]);

        $phones = [];
        foreach($request->input('phone') as $phone){
            if($phone){
                $phones[] = new Phone(['phone' => $phone]) ;
            }

        }

        $contact->save();
        $contact->phones()->saveMany($phones);

        return back()->with('status','Contact added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contacts = Contact::where('id', $id)->first();

        return view('contact', ['contacts' => $contacts]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact_edit = Contact::where('id', $id)->first();
        return view('edit', ['contact_edit' => $contact_edit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'max:100',
            'lastname' => 'max:100',
            'phone' => 'numeric',
        ]);

        $input = Contact::find($id);
        $input_phone1 = $input->phones;

        $input->name = $request->input('name');
        $input->last_name = $request->input('lastname');

        foreach ($input_phone1 as $key => $item){
            $item->phone = $request->input('phone'.$key);
            $item->save();
        }

        $input->save();

        return back()->with('status','Contact changed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //dd($id);
        Contact::find($id)->delete();
        Phone::where('contact_id',$id)->delete();
        return back()->with('status','Contact deleted');
    }
}
