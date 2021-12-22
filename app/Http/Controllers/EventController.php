<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
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
        return view('backend/event', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend/tambah');
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
        $data=new Event();
        $data->title=$request->get('title');
        $data->desc=$request->get('desc');
        $data->event_date=$request->get('event_date');
        $data->link_zoom=$request->get('link_zoom');
        // $image = $request->file('image');
      
        // if($image){
        //   $image_path = $image->store('images', 'public');
      
        //   $image->image = $image_path;
        // }
        $image = $request->image;
        $namafile = $image->getClientOriginalName();
        $data->image= $namafile;
        $image->move(public_path().'/img', $namafile);
        $data->save();
        return redirect()->route('event');

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

    public function search(Request $request)
    {
        # code...
        $search = $request->search;
 
        // mengambil data dari table pegawai sesuai pencarian data
        $events = DB::table('events')
        ->where('title','like',"%".$search."%")
        ->paginate();

            // mengirim data pegawai ke view index
        return view('home',['events' => $events]);
    }

    public function getTotalEvent()
    {
        # code...
        // $countevent = DB::table('events')->count();
        // return view('backend.admin')->with('countevent', $countevent);;
       
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
        $event = Event::find($id);
        return view('backend.edit', compact('event'));
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
        $data = Event::findOrFail($id);
       $data->title=$request->get('title');
        $data->desc=$request->get('desc');
        $data->event_date=$request->get('event_date');
        $data->link_zoom=$request->get('link_zoom');

        $image = $request->image;
        $namafile = $image->getClientOriginalName();
        $data->image= $namafile;
        $image->move(public_path().'/img', $namafile);
        $data->save();
        return redirect()->route('event');
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
        $event=Event::find($id);
        $event->delete();
        return redirect()->route('event');
    }
}
