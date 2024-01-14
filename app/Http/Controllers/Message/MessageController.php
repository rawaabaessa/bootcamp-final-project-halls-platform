<?php

namespace App\Http\Controllers\Message;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message\Message;

class MessageController extends Controller
{
    public function index(){
        $Messages = Message::where('user_id', 1)->paginate(1);
        return view('platform.messages.index',compact('Messages'));
    }
    public function store(Request $request){

        Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'user_id' => 1,
        ]);
        return redirect()->route('front.home');
    }
    public function view($id){

        $record = Message::findOrFail($id);
        return view('platform.messages.view', compact('record'));
    }

    // public function delete(int $id){
    //     // $record = Message::find($id);
    //     return view('platform.messages.delete', compact('id'));
    // }

    public function destroy($id)
    {
        // Find the record to delete
        $record = Message::findOrFail($id);

        // Delete the record
        $record->delete();

        return redirect()->route('messages.index')->with('success', 'Record deleted successfully');
    }
}
