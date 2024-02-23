<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\UserMail;
use App\Models\Sponser;
use BaconQrCode\Writer;
use Milon\Barcode\DNS1D;
use Milon\Barcode\DNS2D;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use App\Http\Requests\UserRequest;
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Writer\PngWriter;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\SponserRequest;
use Endroid\QrCode\Encoding\Encoding;
use Intervention\Image\Facades\Image;
use BaconQrCode\Renderer\ImageRenderer;
use Endroid\QrCode\Label\Font\NotoSans;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Endroid\QrCode\Response\QrCodeResponse;
use PharIo\Manifest\Email as ManifestEmail;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use SimpleSoftwareIO\QrCode\DataTypes\Email;
use Symfony\Component\Mime\Email as MimeEmail;
use BaconQrCode\Renderer\Image\ImagickImageBackEnd;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use Endroid\QrCode\Label\Alignment\LabelAlignmentCenter;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelHigh;

class UserController extends Controller
{
    public function registerPage(){
        return view('register');
    }

    public function register(UserRequest $request){
            
        $random_string = Str::random(16);
        $qr_name = Str::random(25).".png";
        $qr=new DNS2D;
        $qr_code = $qr->getBarcodePNG($random_string, "QRCODE",8,8);
        // Save the QR code as a PNG file in the storage folder
        Storage::disk('public')->put('UsersQrCodes/'.$qr_name, base64_decode($qr_code));  

        $user=User::create([
            'name'=> $request->name,
            "email" => $request->email,
            "phone" => $request->phone,
            "qr_code"=>$qr_name,
            "qr_string"=>$random_string
        ]);
            if($user){
                Mail::to($user->email)
                ->send(new UserMail($user->id));
                Alert::success('تم تسجيلك فى الملتقى بنجاح');
            }else {
                # code....
            }
        return redirect(url('register'));
    }
}
