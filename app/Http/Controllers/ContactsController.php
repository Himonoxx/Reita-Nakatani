<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Auth;
use Mail;
use App\Mail\ContactMail;


class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts=Contact::orderBy('created_at','desc')->paginate(15);
        
        
        return view('contacts.index',[
        'contacts'=>$contacts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contact=new Contact;
        return view('contacts.contact_us',[
        'contact'=>$contact,
        ]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,[
            'content'=>'required|max:191',
            ]);
            
        $contact=new Contact;
        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->categoly=$request->categoly;
        $contact->content=$request->content;
        $contact->title=$request->title;
        $contact->save();
        
        $contact=$request->all();
        
        Mail::to($contact['email'])->send(new ContactMail($contact));
        Mail::to('himono55@gmail.com')->send(new ContactMail($contact));
        
        return view('contacts.complete');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact=Contact::find($id);
        
        return view('contacts.show',['contact'=>$contact]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact=Contact::find($id);
        $tmp=Auth::check();
        dd($tmp,$contact);
        
        if(Auth::check())
        {
            $contact->delete();
        }else{
            return redirect()->route('login')
            ->withInput()
            ->withErrors(array($id,'削除するためにはログインしてください。'));
        }
        
        return view('contact.index');
        
        
    }
    
    public function reply($id)
    {
        $contact=Contact::find($id);
        $user=Auth::user();
        
        return view('commons.html_gmail',[
            
            'contact'=>$contact,
            'user'=>$user
            
            ]);
        
    }

    
    
}
