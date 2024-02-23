@extends('layout')
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
                      <li class="active list">
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
@section('content')
    <!-- Start Landing Structure -->
    <main class="landing">
      <video muted loop autoplay>
        <source src="img/landing/prof2.mp4" type="video/mp4">
      </video>
      <div class="text-header">
        <img src="img/landing/green energy 6-02.png" alt="before" class="before">
        <h1 class="text-title">الملتقى العربي لرواد النقل الأخضر</h1>
        <p class="text-content">
          عصر الطاقة الجديدة والمتجددة
        </p>
        <p class="text-end">القاهرة – سبتمبر 2023</p>
        <img src="img/landing/green energy 7-02.png" alt="after" class="after">
      </div>
    </main>
    <!-- End Landing Structure -->
    
      <!-- Start Content Section -->
      <div class="container text-center heart-content" style="font-weight: 600; font-size: 32px; margin-top: 180px;">
        <!-- Start Modal button -->
        <!-- Button trigger modal -->
        <div class="btn-position">
            <button type="button" class="btn text-white btn-content" data-bs-toggle="modal" data-bs-target="#exampleModal">
              احجز مكانك
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="material-symbols-outlined icon-modal" data-bs-dismiss="modal" aria-label="Close">close</button>
                  </div>
                  <div class="modal-body">
                    <div class="content-body">
                    <a href="pages/second form.html" class="white" style="font-size: 24px; margin-left: 10px;">شارك معنا في صناعة الحدث</a>
                    <i class="material-symbols-outlined pos">info <div class='hint-1'>هذا الخيار فقط <br>اذا كنت تريد <br>ان تشارك في المعرض <br>او ان تشارك كراعي</div></i>
                  </div>
                  <hr class="white" style="width: 80%; margin: 10px auto;">
                    <div style="padding-left: 120px;" class="content-body">
                      <a href="pages/first form.html" class="white" style="font-size: 24px;">الحضور معنا كزائر</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!-- End Modal button -->
        <span class="_2023-span">مرحبًا بكم في الملتقى العربي لرواد النقل الأخضر<br /></span>
        <span class="_2023-span2">
        حيث نجتمع لمناقشة واحدة من أهم التحديات التي تواجه العالم في القرن الحادي
        والعشرين، تحول نظامنا الطاقي نحو الاستدامة والطاقة المتجددة، نستلهم رؤيتنا
        من مبادرة السيد الرئيس عبدالفتاح السيسي باعتبار 2023 عام الشباب العربي وإيماناً بتفعيل دورهم في قضية تغير المناخ ، فهم أبطال المستقبل والقادة الذين سيحملون
        مسؤولية خلق تغيير حقيقي وإيجابي في مجال الطاقة. إنهم المبدعون والمبتكرون
        الذين يعملون على تطبيق التقنيات الحديثة واستخدام الطاقة المستدامة في
        مجالات متعددة بشكل عام وقطاع النقل الأخضر بشكل خاص.</span>
      </div>
      <!-- End Content Section -->

    <!-- Start logos Section -->
    <section class="margin-top margin-bottom">
      <div class="container text-center margin-top">
      <div class="section-sides">
      <div class="right-side">
      <h2 class="heading">
        تحت رعاية
      </h2>
      <div class="icons">
        <img src="img/icons/1.png" alt="logo-1">
        <!-- <img src="img/icons/2.png" alt="logo-2"> -->
        <!-- <img src="img/icons/4.png" alt="logo-4"> -->
      </div>
      </div>
      <div class="main-side">
        <h2 class="heading">تنفيذ</h2>
        <div class="icons-other" style="text-align: center;">
          <img src="img/icons/3.png" alt="logo-3">
        </div>
      </div>
      <div class="left-side">
      <h2 class="heading">الشريك الاستراتيجي</h2>
      <div class="icons-part">
        <img src="img/logo/ll.png" alt="logo-5">
      </div>
      </div>
    </div>
  </div>
    </section>
    <!-- End logos Section -->
@endsection