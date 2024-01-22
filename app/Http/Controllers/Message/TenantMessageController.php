<?php

namespace App\Http\Controllers\Message;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Message\Message;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageMail;


class TenantMessageController extends Controller
{
    public function index(){
        $Messages = Message::where('user_id', Auth()->id() )->paginate(3);
        // dd($Messages);
        return view('tenant.messages.index',compact('Messages'));
    }
    public function view($id){
        $record = Message::where('id',$id)->first();
        return view('tenant.messages.view', compact('record'));
    }
    public function store(Request $request){
        Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'user_id' => $request->id,
        ]);
        return redirect()->back();
    }
    public function destroy(Request $request){
        $record = Message::findOrFail($request->id);
        $record->delete();

        return redirect()->route('tenant.messages.destroy')->with('success', 'تم الحذف بنجاح');
    }
    public function sendreplay(Request $request){
        Mail::to($request->email)->send(new MessageMail($request->reply));
        Message::where('id',$request->id)->update(['is_replied' => 1]);
        return redirect()->route('tenant.messages.index')->with('success', 'تم ارسال الرد بنجاح');
    }
}
