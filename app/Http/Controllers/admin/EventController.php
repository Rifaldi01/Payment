<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Event;
use App\Models\Social_media;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.event.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id = null)
    {
        $inject = [
            'form_url' => route('admin.event.store'),
            'social_media' => Social_media::orderBy('name', 'asc')->pluck('name', 'id')->toArray(),
            'clients' => Client::orderBy('name', 'asc')->pluck('name', 'id')->toArray(),
        ];

        if ($id) {
            $event = Event::whereId($id)->first();
            $inject ['event'] = $event;
            $inject ['form_url'] = route('admin.event.update', $event->id);
        }

        return view('admin.event.create', $inject);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->save($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return $this->create($id);
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
        return $this->save($request, $id);
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

    public function save(Request $request, $id = null){
        $event = Event::firstOrNew(['id' => $id]);
        $event->name = $request->input('name');
        $event->client_id = $request->input('client_id');
        $event->social_media_id = $request->input('social_media_id');
        $event->started_date = $request->input('stared_date');
        $event->ended_date = $request->input('ended_date');
        $event->budget = $request->input('budget');
        $event->max_post = $request->input('max_post');
        $event->description = $request->input('description');
        $event->hastag = $request->input('hastag');
        $event->office = 1;
        $event->save();
        Alert::success('data berhasil disimpan');
        return redirect()->route('admin.event.index');
    }
}
