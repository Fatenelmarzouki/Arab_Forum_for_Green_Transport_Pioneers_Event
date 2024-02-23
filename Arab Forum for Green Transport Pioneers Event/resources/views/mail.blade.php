<!DOCTYPE html>
    <html>
    <head>
        <title>Your QR Code</title>
    </head>
    <body>
        <h1>الاتحاد العربي للشباب والبيئة وشركة إل آند دي مصر للتعليم و التطوير </h1>
        <h3>Hi {{$user->name}}</h3>
        <h3>Your ID is {{$user->id}}</h3>
        <h3>Here is your QR Code</h3>
            <div>
                <img src="{{ $message->embed(storage_path('app/public/UsersQrCodes/' . $user->qr_code)) }}" alt="Image from storage">
            </div>
    </body>
    </html>
