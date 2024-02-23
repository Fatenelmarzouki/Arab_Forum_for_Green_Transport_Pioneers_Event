@extends('layout')
@section('style')
  <style>
    .who-heading::after{
      content: "";
      width: 250px;
    }
    @media (max-width:991px) {
      .who-heading::after{
        content: "";
        width: 200px;
      }
    }
    .first-image{
      margin-bottom: 100px;
    }
    .first-image img{
      width: 50%; 
      border-radius: 15px;
      max-height: 500px;
    }

    @media (max-width:767px) {
      .first-image img{
        width: 100%;
      }
    }

    .second-structure{
      margin-top: -50px;
      padding-left: 60px;
      padding-right: 60px;
    }
    .block-one{
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 59px;
    }
    
    .block-one img {
      align-self: flex-start;
    }

    .block-text{
      flex: 1;
      margin-right:35px;
      margin-top: 10px;
      text-align: center;
    }

    @media (max-width:767px) {
      .block-one{
        flex-direction: column;
      }

      .block-one img{
        align-self: center;
      }

      .block-text{
        margin-right: 0;
      }
    }
    .block-text > p{
      max-width: 100%;
      font-size: 30px;
      text-align: center;
      font-weight: 600;
      letter-spacing: -0.6px;
    }
    .block-text a {
      font-size: 30px;
      text-decoration: underline;
      font-weight: 600;
      letter-spacing: -0.54px;
      color: #004AB8;
      line-height: normal;
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
                      <li class="list">
                        <a href="{{url("parteners")}}">الجهات المشاركة</a>
                      </li>
                      <li class="active list">
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
    <!-- Start First Structure -->
    <h1 class="who-heading">التغطية الإعلامية</h1>
    <div class="images">
      <div class="first-image">
        <img src="../img/Media channel/media.jpg" alt="logo">
      </div>
    </div>
    <!-- End First Structure -->

    <!-- Start Second Structure -->
    <div class="second-structure">
      <div class="block-one">
        <img src="../img/Media channel/logos/logo3.png" alt="logo-3" style="margin-right: -50px;">
        <div class="block-text">
          <p>الملتقى العربي لرواد النقل الأخضر يبحث إستخدامات الطاقة الجديدة والمتجددة</p>
          <a href="https://gate.ahram.org.eg/News/4440080.aspx">إقرأ المزيد</a>
        </div>
      </div>
      <div class="block-one">
        <img src="../img/Media channel/logos/logo8.png" alt="logo-8" style="margin-bottom: 20px;">
        <div class="block-text">
          <p>الملتقى العربي لرواد النقل الأخضر يناقش إستخدامات الطاقة</p>
          <a href="https://m.gomhuriaonline.com/Gomhuria/1313395.html">إقرأ المزيد</a>
        </div>
      </div>
      <div class="block-one">
        <img src="../img/Media channel/logos/logo11.png" alt="logo-11" style="margin-bottom: 20px; margin-right: -15px;">
        <div class="block-text">
          <p>"الملتقى العربي لرواد النقل الأخضر يبحث استخدامات الطاقة الجديدة والمتجددة</p>
          <a href="https://www.maspero.eg/science-and-technology/2023/08/09/709642/%D8%A7%D9%84%D9%85%D9%84%D8%AA%D9%82%D9%89-%D8%A7%D9%84%D8%B9%D8%B1%D8%A8%D9%8A-%D9%84%D8%B1%D9%88%D8%A7%D8%AF-%D8%A7%D9%84%D9%86%D9%82%D9%84-%D8%A7%D9%84%D8%A3%D8%AE%D8%B6%D8%B1-%D9%8A%D8%A8%D8%AD%D8%AB-%D8%A7%D8%B3%D8%AA%D8%AE%D8%AF%D8%A7%D9%85%D8%A7%D8%AA-%D8%A7%D9%84%D8%B7%D8%A7%D9%82%D8%A9-%D8%A7%D9%84%D8%AC%D8%AF%D9%8A%D8%AF%D8%A9-%D9%88%D8%A7%D9%84%D9%85%D8%AA%D8%AC%D8%AF%D8%AF%D8%A9">إقرأ المزيد</a>
        </div>
      </div>
      <div class="block-one">
        <img src="../img/Media channel/logos/logo5.png" alt="logo-5">
        <div class="block-text">
          <p>"الملتقى العربي لرواد النقل الأخضر يبحث استخدامات الطاقة الجديدة</p>
          <a href="https://m.facebook.com/story.php?story_fbid=pfbid05n3hisD6sAwi1a4d6i3ScH1ktcFcmFSBiv5pzGbMFWtcDPzQHymK9mMRiFbpsW3Jl&id=100079189103037&sfnsn=scwspwa&mibextid=6aamW6">إقرأ المزيد</a>
        </div>
      </div>
      <div class="block-one">
        <img src="../img/Media channel/logos/logo2.png" alt="logo-2" style="margin-right: -50px;">
        <div class="block-text">
          <p>الملتقى العربي لرواد النقل الأخضر يبحث إستخدامات الطاقة الجديدة والمتجددة</p>
          <a href="https://m.facebook.com/story.php?story_fbid=pfbid02XNsEs7gmYXf7XMR6oNJqEk8Pbg1Qa5bpDSVX4e4uiESU7SBCJt65cpYKMeeBaxQjl&id=100063562881925&sfnsn=scwspwa&mibextid=RUbZ1f">إقرأ المزيد</a>
        </div>
      </div>
      <div class="block-one">
        <img src="../img/Media channel/logos/logo9.png" alt="logo-9" style="margin-bottom: 20px;">
        <div class="block-text">
          <p>رقمنة النقل والحلول الذكية أولويات اجتماع خبراء البيئة العرب أول سبتمبر المقبل</p>
          <a href="https://www.youm7.com/story/2023/8/9/%D8%B1%D9%82%D9%85%D9%86%D8%A9-%D8%A7%D9%84%D9%86%D9%82%D9%84-%D9%88%D8%A7%D9%84%D8%AD%D9%84%D9%88%D9%84-%D8%A7%D9%84%D8%B0%D9%83%D9%8A%D8%A9-%D8%A3%D9%88%D9%84%D9%88%D9%8A%D8%A7%D8%AA-%D8%A7%D8%AC%D8%AA%D9%85%D8%A7%D8%B9-%D8%AE%D8%A8%D8%B1%D8%A7%D8%A1-%D8%A7%D9%84%D8%A8%D9%8A%D8%A6%D8%A9-%D8%A7%D9%84%D8%B9%D8%B1%D8%A8-%D8%A3%D9%88%D9%84/6267158">إقرأ المزيد</a>
        </div>
      </div>
      <div class="block-one">
        <img src="../img/Media channel/logos/logo12.png" alt="logo-12">
        <div class="block-text">
          <p>عام الشباب العربي مبادرة لرواد النقل الأخضر لاستخدامات الطاقة النظيفة</p>
          <a href="https://www.elaosboa.com/1056230/">إقرأ المزيد</a>
        </div>
      </div>
      <div class="block-one">
        <img src="../img/Media channel/logos/logo4.png" alt="logo-4" style="margin-bottom: 20px;">
        <div class="block-text">
          <p>"الملتقى العربي لرواد النقل الأخضر يبحث استخدامات الطاقة الجديدة</p>
          <a href="https://alqraralaraby.com/%D8%AE%D8%A8%D8%B1/34;%D8%A7%D9%84%D9%85%D9%84%D8%AA%D9%82%D9%89-%D8%A7%D9%84%D8%B9%D8%B1%D8%A8%D9%8A-%D9%84%D8%B1%D9%88%D8%A7%D8%AF-%D8%A7%D9%84%D9%86%D9%82%D9%84-%D8%A7%D9%84%D8%A3%D8%AE%D8%B6%D8%B134;..-%D9%8A%D8%A8%D8%AD%D8%AB-%D8%A7%D8%B3%D8%AA%D8%AE%D8%AF%D8%A7%D9%85%D8%A7%D8%AA-%D8%A7%D9%84%D8%B7%D8%A7%D9%82%D8%A9-%D8%A7%D9%84%D8%AC%D8%AF%D9%8A%D8%AF%D8%A9/212035">إقرأ المزيد</a>
        </div>
      </div>
      <div class="block-one">
        <img src="../img/Media channel/logos/logo15.png" alt="logo-15" style="margin-right: -15px;">
        <div class="block-text">
          <p>الدكتور مجدى علام : الملتقى العربي لرواد النقل الأخضر يبحث إستخدامات الطاقة الجديدة والمتجددة</p>
          <a href="https://misralbalad.com/%d8%a7%d9%84%d8%af%d9%83%d8%aa%d9%88%d8%b1-%d9%85%d8%ac%d8%af%d9%89-%d8%b9%d9%84%d8%a7%d9%85-%d8%a7%d9%84%d9%85%d9%84%d8%aa%d9%82%d9%89-%d8%a7%d9%84%d8%b9%d8%b1%d8%a8%d9%8a-%d9%84%d8%b1%d9%88%d8%a7/">إقرأ المزيد</a>
        </div>
      </div>
      <div class="block-one">
        <img src="../img/Media channel/logos/logo7.png" alt="logo-7" style="margin-bottom: 20px;">
        <div class="block-text">
          <p>الملتقى العربي لرواد النقل الأخضر يبحث إستخدامات الطاقة الجديدة والمتجددة</p>
          <a href="https://alborsagia.news/%d8%a7%d9%84%d9%85%d9%84%d8%aa%d9%82%d9%89-%d8%a7%d9%84%d8%b9%d8%b1%d8%a8%d9%8a-%d9%84%d8%b1%d9%88%d8%a7%d8%af-%d8%a7%d9%84%d9%86%d9%82%d9%84-%d8%a7%d9%84%d8%a3%d8%ae%d8%b6%d8%b1-%d9%8a%d8%a8%d8%ad/">إقرأ المزيد</a>
        </div>
      </div>
      <div class="block-one">
        <img src="../img/Media channel/logos/logo10.png" alt="logo-10" style="margin-bottom: 20px;">
        <div class="block-text">
          <p>"الملتقى العربي لرواد النقل الأخضر يبحث استخدامات الطاقة الجديدة</p>
          <a href="https://alraeys.com/2023/08/09/%d8%a7%d9%84%d9%85%d9%84%d8%aa%d9%82%d9%89-%d8%a7%d9%84%d8%b9%d8%b1%d8%a8%d9%8a-%d9%84%d8%b1%d9%88%d8%a7%d8%af-%d8%a7%d9%84%d9%86%d9%82%d9%84-%d8%a7%d9%84%d8%a3%d8%ae%d8%b6%d8%b1-%d9%8a%d8%a8/">إقرأ المزيد</a>
        </div>
      </div>
      <div class="block-one">
        <img src="../img/Media channel/logos/logo13.png" alt="logo-13">
        <div class="block-text">
          <p>الملتقى العربي لرواد النقل الأخضر يبحث استخدامات الطاقة الجديدة والمتجددة سبتمبر القادم</p>
          <a href="https://abudhabienv.ae/?p=18377">إقرأ المزيد</a>
        </div>
      </div>
      <div class="block-one">
        <img src="../img/Media channel/logos/logo1.png" alt="logo-1">
        <div class="block-text">
          <p>الملتقى العربي لرواد النقل الأخضر يبحث إستخدامات الطاقة الجديدة والمتجددة</p>
          <a href="https://www.aldawlanews.com/1084820">إقرأ المزيد</a>
        </div>
      </div>
      <div class="block-one">
        <img src="../img/Media channel/logos/logo6.png" alt="logo-6" style="margin-bottom: 20px;">
        <div class="block-text">
          <p>الملتقى العربي لرواد النقل الأخضر يبحث إستخدامات الطاقة الجديدة والمتجددة</p>
          <a href="https://www.nononline.net/?p=522007">إقرأ المزيد</a>
        </div>
      </div>
      <div class="block-one">
        <img src="../img/Media channel/logos/logo14.png" alt="logo-14" style="margin-bottom: 20px;">
        <div class="block-text">
          <p>رواد النقل الأخضر يبحث إستخدامات الطاقة الجديدة والمتجددة لمواجهة تغير المناخ</p>
          <a href="https://www.maljadeda.com/2023/08/25.html?m=1">إقرأ المزيد</a>
        </div>
      </div>
      <div class="block-one">
        <img src="../img/Media channel/logos/logo16.png" alt="logo-16">
        <div class="block-text">
          <p>الاتحاد العربي للشباب والبيئة: يبحث مجالات الطاقة والنقل الأخضر ورقمنة النقل</p>
          <a href="https://www.alameltanmya.com/?p=1364">إقرأ المزيد</a>
        </div>
      </div>
    </div>
    <!-- End Second Structure -->
@endsection