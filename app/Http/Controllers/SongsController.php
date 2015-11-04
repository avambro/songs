<?php

namespace songs\Http\Controllers;


use Illuminate\Http\Request;
use songs\Http\Requests;
use songs\Http\Controllers\Controller;
use songs\Song;

class SongsController extends Controller
{

    private $song;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Song $song){
        $this->song = $song;
    }

    public function index()
    {
                     
        //$songs =  Song::get(); //DB::table('songs')->get(); //$this->getSongs();
        $song = $this->song->get();

        return view('songs.index',compact('song'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('songs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
                            //Request
    public function store(Requests\CreateSongRequest $request,Song $song)
    {
       // $input = $request->all();

        $song->create($request->all());
        return redirect()->route('songs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Song $song) //$id
    {

        //$song =  Song::find($id);
                    //DB::table('songs')->find($id);
                    //$this->getSongs()[$id];
        //$song = Song::whereSlug($slug)->first();
        //$songs = $this->song->where('slug',$slug)->first();

        return view('songs.show',compact('song'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Song $song)
    {

        //$songs = $this->song->where('slug',$slug->slug)->first();
        return view('songs.edit',compact('song'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  String  $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Song $song,Request $request)
    {
        //dd(\Request::input());
        //$songs = $this->song->whereSlug($slug)->first();
        //$songs->fill(['title'=>$request->get('title')])->save();
        //$songs->title = $request->get('title');
        $song->fill($request->input())->save();

        $song->save();

        return redirect('songs/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return 'destroy view';
    }
}
