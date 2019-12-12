<?php

namespace App\Http\Controllers\Rooms;

use App\Models\Room;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class RoomsController extends Controller
{
    use ValidatesRequests;

    /**
     * @param null $roomId
     * @return \Illuminate\Contracts\View\View
     */
    public function update($roomId = null)
    {
        return View::make('room.update');
    }

    /**
     * @param null $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Illuminate\Validation\ValidationException
     */
    public function save($id = null)
    {
        $this->validate(request(), [
            'title' => ['required', 'string'],
            'type' => ['required', 'string'],
        ]);

        $room = Room::firstOrCreate([
            'id' => $id,
        ]);

        $room->fill([
            'user_id' => Auth::user()->getAuthIdentifier(),
            'title' => request()->input('title'),
            'type' => request()->input('type'),
            'description' => request()->input('description'),
        ]);

        $room->save();

        return redirect(route('home'));
    }
}
