<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::orderBy('id', 'DESC')->where('Event_type', 'Event')->get();
        return view('admin.event.index', compact('events'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.event.create', compact('events'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "thumbnail" => 'required',
            "title" => 'required|unique:events',
            "details" => "required",
        ],
            [
                'thumbnail.required' => 'Enter thumbnail url',
                'title.required' => 'Enter title',
                'title.unique' => 'Title already exist',
                'details.required' => 'Enter details',
            ]
        );

        $event = new  Event();
        $event->user_id = Auth::id();
        $event->thumbnail = $request->thumbnail;
        $event->title = $request->title;
        $event->slug = str_slug($request->title);
        $event->sub_title = $request->sub_title;
        $event->details = $request->details;
        $event->is_published = $request->is_published;
        $event->event_type = 'event';
        $event->save();


        Session::flash('message', 'Event created successfully');
        return redirect()->route('events.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post $event
     * @return \Illuminate\Http\Response
     */

     
    
    public function show($id)
    {
    $event = Event::find($id);
    return view('pages.event', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('admin.event.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Post $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $this->validate($request, [
            "thumbnail" => 'required',
            'title' => 'required|unique:events,title,' . $event->id . ',id', // ignore this id
            'details' => 'required',
        ],
            [
                'thumbnail.required' => 'Enter thumbnail url',
                'title.required' => 'Enter title',
                'title.unique' => 'Title already exist',
                'details.required' => 'Enter details',
            ]
        );

        $event->user_id = Auth::id();
        $event->thumbnail = $request->thumbnail;
        $event->title = $request->title;
        $event->slug = str_slug($request->title);
        $event->sub_title = $request->sub_title;
        $event->details = $request->details;
        $event->is_published = $request->is_published;
        $event->save();


        Session::flash('message', 'Event updated successfully');
        return redirect()->route('events.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();

        Session::flash('delete-message', 'Event deleted successfully');
        return redirect()->route('events.index');
    }
}
