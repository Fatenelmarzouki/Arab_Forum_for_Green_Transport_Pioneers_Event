    @extends('layout')
    @section('header')
    @include('sweetalert::alert')
        <!-- Start Header Structure -->
        <header class="shadow fixed-top">
            <div class="container-fluid text-center">
                <div class="row sides">
                    <div class="col-2">
                        <div class="icon">
                        <img src="img/logo/green energy-02.png" alt="logo">
                        </div>
                    </div>
                    <div class="col-8">
                    <ul class="links ">
                        <li class="list">
                            <a href="{{url("new")}}">الرئيسية</a>
                        </li>
                        <li class="list">
                            <a href="{{url("who")}}">من نحن</a>
                        </li>
                        <li class="list">
                            <a href="{{url("conf")}}">محاور الملتقى</a>
                        </li>
                        <li class="list">
                            <a href="{{url("parteners")}}">الجهات المشاركة</a>
                        </li>
                        <li class="list">
                            <a href="{{url("Media")}}">التغطية الإعلامية</a>
                        </li>
                    </ul>
                    </div>
                    <div class="col-2 last">
                    <button type="button" class="btn btn-secondary adjust" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="<div><div class='mb-3 inside'><a href='{{url('registersponser')}}' class='white'>شارك معنا في صناعة الحدث</a><i class='material-symbols-outlined position first black' style='font-size: 18px;'>info <div class='hint'>هذا الخيار فقط <br>اذا كنت تريد <br>ان تشارك في المعرض <br>او ان تشارك كراعي</div></i></div><hr class='white'><div class='inside pointer'><a href='{{url('register')}}' class='white'>الحضور كزائر</a></div></div>" data-bs-html="true">
                        احجز مكانك
                        </button>
                    </div>
                </div>
                <i class="material-symbols-outlined last-icon" id="check">menu</i>
                </div>
        </header>
        <div class="menu">
            <ul class="block" id="structure">
                <i class="material-symbols-outlined icon-close" id="close">close</i>
                <li class="menu-list">
                    <a href="{{url("new")}}" class="menu-active menu-click">الرئيسية</a>
                </li>
                <li class="menu-list">
                    <a href="{{url("who")}}" class="menu-click">من نحن</a>
                </li>
                <li class="menu-list">
                    <a href="{{url("conf")}}" class="menu-click">محاور المؤتمر</a>
                </li>
                <li class="menu-list">
                    <a href="{{url("parteners")}}" class="menu-click">المشاركون</a>
                </li>
                <li class="menu-list">
                    <a href="{{url("Media")}}" class="menu-click">التغطية الإعلامية</a>
                </li>
            </ul>
        </div>
        <!-- End Header Structure -->
    @endsection
    @section('style')
    <style>
        .form-content{
            background-image: url(../img/forms/a3356e2b3c.gif);
            height: 100vh;
            width: 100%;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            margin-bottom: -10px;
        }
        .first-form{
            margin: 100px auto;
            background-color: #ddd;
            min-width: 490px;
            padding: 30px;
            height: 420px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50% , -60%);
            box-shadow: 0 0 5px #ddd;
            border-radius: 15px;
        }
        @media (max-width:767px) {
            .first-form{
            min-width: 350px;
            }
        }
        .form-title{
            margin-bottom: 20px;
            color: #AE923E;
            text-align: center;
            font-weight: 600;
            letter-spacing: -0.6px;
        }

        .overlay{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4);
        }
        label{
            font-weight: 500;
            font-size: 19px;
            letter-spacing: -0.72px;
            margin-right: 15px;
            margin-bottom: 5px;
        }
        input{
            display: block;
            border: none;
            outline: none;
            width: 100%;
            margin-bottom: 10px;
            padding: 8px 15px;
            border-radius: 10px;
        }
        .btn-submit{
            width: 50%;
            background-color: #AE923E;
            color: #fff;
            border-radius: 15px;
            padding: 10px 15px;
            font-weight: 600;
            letter-spacing: -0.48px;
            font-size: 20px;
            margin: 25px auto 30px;
        }
    </style>
    @endsection

    @section('content')
    <div class="form-content">
        <div class="overlay"></div>
            <form action="{{url('newuser')}}" class="first-form" method="post">
            {{-- @if ($errors->any())
            @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{$error}}
            </div>
            @endforeach
            @endif --}}
                @csrf
                <h4 class="form-title">قم بملأ الإستمارة واحجز مكانك في المعرض</h4>
                <label for="name">الاسم*</label>
                <input name="name" value="{{old('name')}}" type="text" id="name" >
                <label for="email">الايميل*</label>
                <input name="email" value="{{old('email')}}" type="email" id="email" >
                <label for="tel">رقم التليفون*</label>
                <input name="phone" value="{{old('phone')}}" type="text" id="tel" >
                <input type="submit" name="submit" class="btn-submit" value="احجز مكانك">
            </form>
        </div>
    @endsection
