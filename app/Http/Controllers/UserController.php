<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
// use App\Mail\Mail;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use App\Register;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $events = Event::all();
        return view('home', compact('events'));
    }

    public function register($id)
    {
        # code...
        $event = Event::find($id);
        $user = Register::find($id);
        return view('register', compact('event', 'user'));
    }
    public function sendEmail($user, $id)
    {
        $event = Event::find($id)->first();
        // dd($event->link_zoom);
        Mail::to($user->email)->send(new SendMail($event->link_zoom, $user));
    }
    public function actionregis(Request $request)
    {
        # code...
        
        $user = new Register();
        // $user->id_event = $event->title;
        $user->id_event=$request->input('id_event');
        $user->email=$request->get('email');
        $user->name=$request->get('name');
        $user->address=$request->get('address');
        $user->phone=$request->get('phone');
        // $user->save();
        if($user->save()){
            $this->sendEmail($user, $user->id_event);
        }
        return redirect()->route('success');
    }

    public function success()
    {
        $user = DB::table('users')->where('email')
        ->join('events', 'users.id_event', '=', 'events.id')
        ->select('users.*', 'events.*')
        ->get();
        # code...
        return view('success', compact('user'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
}
