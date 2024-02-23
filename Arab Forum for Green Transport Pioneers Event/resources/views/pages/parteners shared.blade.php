@extends('layout')
@section('style')
  <style>
    .parteners-links{
      margin-top: 100px;
      margin-bottom: 100px;
      margin-right: 30px;
    }
    .parteners-links li{
      position: relative;
      display: block;
      padding-right: 30px;
      font-size: 30px;
      color: #AE923E;
      font-weight: 600;
      letter-spacing: -0.45px;
      margin-bottom: 15px;
    }

    .parteners-links li::after{
      content: "";
      position: absolute;
      top: 20px;
      right: 11px;
      width: 8px;
      height: 8px;
      border-radius: 50%;
      background-color: #AE923E;
    }

    @media (max-width:991px) {
      .parteners-links li{
        font-size: 24px;
      }
      .parteners-links li::after{
        top: 15px;
      }
    }
    .block-confleunce img{
      width: 65%;
      max-height: 500px; 
      border-radius: 15px;
    }
    @media (max-width:767px) {
      .block-confleunce img{
        width: 100%;
      }
    }
  </style>
@endsection

@section('header')
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
                      <li class=" list">
                        <a href="{{url("who")}}">من نحن</a>
                      </li>
                      <li class="list">
                        <a href="{{url("conf")}}">محاور الملتقى</a>
                      </li>
                      <li class="active list">
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


@section('content')
  <!-- Start First Section Structure -->
  <div class="confluence-image">
    <h1 class="who-heading">الجهات المشاركة</h1>
    <div class="block-confleunce" style="text-align: center; margin-top: 0; padding-left: 30px; padding-right: 30px;">
    <img src="../img/parteners shared/parteners.jpg" alt="logo">
    </div>
  </div>
  <!-- End First Section Structure -->

  <!-- Start Second Section Structure -->
  <ul class="parteners-links">
    <li>مسؤولون حكوميون ومستشارون من مختلف الدول العربية في سياسات النقل النظيف والتحول الطاقي.</li>
    <li>ممثلون عن شركات تصنيع السيارات الكهربائية والمعدات ذات الصلة.</li>
    <li>مهندسون ومصممون في صناعة السيارات الكهربائية.</li>
    <li>خبراء في تكنولوجيا البطاريات والشحن وأنظمة التشغيل للسيارات الكهربائية.</li>
    <li>ممثلون عن الشركات المصرية والعربية العاملين في اللوجستيات الخضراء.</li>
    <li>خبراء في وضع استراتيجيات اللوجستيات الخضراء.</li>
    <li>ممثلون عن مصنعي الإطارات الخضراء.</li>
    <li>خبراء في تقنيات البناء الخضراء واستدامة البنية التحتية وتجهيزاتها لاستخدام نقاط شحن السيارات المستخدمة في النقل الأخضر.</li>
    <li>ممثلون عن شركات تكنولوجيا المعلومات والاتصالات.</li>
    <li>مطورو البرمجيات والمهندسون في مجال تقنية المعلومات واستخدامها في النقل الأخضر.</li>
    <li>مستثمرون في قطاع النقل الأخضر واللوجستيات الخضراء.</li>
  </ul>
  <!-- End Second Section Structure -->
@endsection
