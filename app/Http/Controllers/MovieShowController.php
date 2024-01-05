<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Post;
use App\Models\Ticket;
use App\Models\MovieShow;
use DateTime;

class MovieShowController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Post::collection(MovieShow::all());
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
        $newMovie = new MovieShow([
            'film_id' =>  $request->film_id,
            'hall_id' => $request->hall_id,
            'start_time' => $request->start_time,
            'movie_show_duration' => $request->movie_show_duration,
            'start_day' => $request->start_day,
            'film_name' => $request->name,
            'ordered' => '[]'
        ]);

        $newMovie->save();

        return 'New movie show added';

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Post::collection(MovieShow::all()->where('start_day', $id));
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
        $newData = json_decode($request->dataArray);
        $deleted = json_decode($request->deleted);

        if(count($deleted) > 0) {
            foreach($deleted as $item) {
                $targetItem = MovieShow::findOrFail($item);
                $tickets = Ticket::all()->where('show_id', $item);
                foreach($tickets as $ticket) {
                    $ticket->delete();
                }
                $targetItem->delete();
            }
        }

        if(count($newData) > 0) {
            foreach($newData as $newMovieShow) {
                $newMovie = new MovieShow([
                    'film_id' =>  $newMovieShow->film_id,
                    'hall_id' => $newMovieShow->hall_id,
                    'start_time' => $newMovieShow->start_time,
                    'movie_show_duration' => $newMovieShow->movie_show_duration,
                    'start_day' => $newMovieShow->start_day,
                    'film_name' => $newMovieShow->film_name,
                    'ordered' => '[]'
                ]);
                $newMovie->save();
            }
        }

        return "Update successful";
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
