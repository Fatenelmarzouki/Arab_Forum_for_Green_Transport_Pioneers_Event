<?php

namespace App\Http\Controllers;

use App\Mail\Content;
use App\Models\Sponser;
use App\Mail\SponserMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\SponserRequest;
use RealRashid\SweetAlert\Facades\Alert;

class SponserController extends Controller
{
    public function registerSponserPage(){
        return view('registerSponser');
    }

    public function handleSponser(SponserRequest $request){
        $sponser = Sponser::create([
            'name'=> $request->name,
            "email" => $request->email,
            "phone" => $request->phone,
            "status"=> $request->status
        ]);
        
        if($sponser){
            Mail::to("arabfourmforgreentransportlead@gmail.com")
            ->send(new SponserMail($sponser->id,$sponser->email));

            Alert::success('تم تسجيلك فى الملتقى بنجاح');
        }else {
            # code....
        }
        return redirect(url('registersponser'));
    }
}
