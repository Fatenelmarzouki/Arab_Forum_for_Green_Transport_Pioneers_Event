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
                      <li class="list">
                        <a href="{{url("new")}}">الرئيسية</a>
                      </li>
                      <li class=" list">
                        <a href="{{url("who")}}">من نحن</a>
                      </li>
                      <li class="active list">
                        <a href="{{url("conf")}}">محاور الملتقى</a>
                      </li>
                      <li class="list">
                        <a href="{{url("parteners")}}">الجهات المشاركة</a>
                      </li>
                      <li class=" list">
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
        <h1 class="who-heading">محاور الملتقي</h1>
        <div class="block-confleunce">
        <img src="../img/confluence/pic.png" alt="logo">
        </div>
    </div>
    <!-- End First Section Structure -->

    <!-- Start Second Section Structure -->
    <div class="confluence-block">
        <div class="confluence-first">
            <h2 class="confluence-heading">المحور الأول</h2>
            <p class="first-paragraph">التحديات والفرص التي تواجه قطاع النقل الأخضر في مصر في ضوء التغيرات المناخية والقاء الضوء على المشاريع الوطنية العملاقة والمؤشرات المحددة لقطاع النقل في رؤية مصر 2030 للتنمية المستدامة</p>
        </div>
        <div class="confluence-first">
            <h2 class="confluence-heading">المحور الثاني</h2>
            <p class="first-paragraph">أهمية استخدام السيارات  الكهربائية في تحقيق الاستدامة  البيئية ، وأثر استخدام وسائل النقل الأخضر في المدن الذكية</p>
        </div>
        <div class="confluence-first">
            <h2 class="confluence-heading">المحور الثالث</h2>
            <p class="first-paragraph">رقمنة النقل الأخضر وأثر التحول الرقمي وتطبيقاته في النقل الذكي وإدارة المخاطر المتعلقة بالمخلفات الإلكترونية.</p>
        </div>
        <div class="confluence-first">
          <h2 class="confluence-heading">المحور الرابع</h2>
          <p class="first-paragraph">دور المجتمع المدني والأكاديمي والإعلامي والفني في نشر ثقافة النقل الأخضر، وزيادة الوعي بأهمية حماية البيئة</p>
      </div>
      <div class="confluence-first">
        <h2 class="confluence-heading">المحور الخامس</h2>
        <p class="first-paragraph">فرص الاستثمار العابر للحدود بين الدول العربية في النقل الأخضر بين الواقع والمأمول.</p>
    </div>
    <div class="confluence-first">
      <h2 class="confluence-heading">المحور السادس</h2>
      <p class="first-paragraph">تحديات سوق العمل العربي وفرص التوظيف في مجال النقل والطاقة الجديدة والمتجددة للشباب</p>
  </div>
    </div>
    <!-- End Second Section Structure -->
@endsection