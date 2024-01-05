<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Post;
use App\Models\Hall;
use App\Models\Seat;
use App\Models\MovieShow;
use App\Models\Ticket;

class HallController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Post::collection(Hall::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newHall = new Hall([
            'name'=> $request->name,
            'row' => 7,
            'seats' => 7,
            'price' => 200,
            'vip_price' => 300,
            'is_active' => false
        ]);
        $newHall->save();

        $i = 1;
        do {
            $seat = new Seat([
                'hall_id' =>  $newHall->id,
                'seat_number' => $i,
                'status' => 1,
            ]);
            $seat->save();
            $i += 1;
        } while ($i <= 49);

        return "Hall created";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new Post(Hall::findOrFail($id));
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
        if ($request->price) {
            $hall = Hall::findOrFail($id);
            $hall->price = $request->price;
            $hall->vip_price = $request->vip_price;
            $hall->save();
            return "Update successful";
        }

        $hall = Hall::findOrFail($id);
        $hall->is_active = $request->status;
        $hall->save();
        return "Status update successful";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hall = Hall::findOrFail($id);
        if($hall) {
            $seatsArr = Seat::all()->where('hall_id', $id);
            foreach($seatsArr as $seat) {
                $seat->delete();
            }

            $movieShowArr = MovieShow::all()->where('hall_id', $id);
            foreach($movieShowArr as $movie) {
                $tickets = Ticket::all()->where('show_id', $movie->id);
                foreach($tickets as $ticket) {
                    $ticket->delete();
                }
                $movie->delete();
            }



            $hall->delete();
        }

        return "Successful delete";

    }
}
