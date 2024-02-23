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
                      <li class="active list">
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
  <h1 class="who-heading">من نحن</h1>
  <div class="who-title">
    <img src="../img/icons/3.png" alt="logo"><br>
    <span class="who-content">الاتحاد العربي للشباب والبيئة</span>
  </div>
  <div class="who-text">
    <p class="who-first">
    هـو هيئـة عربيـة تطوعيـة غـير حكوميـة وغـير ربحيـة ضمـن الاتحـادات الشـبابية العربية التابعــة لمجلــس وزراء الشــباب والرياضـة العـرب بجامعــة الـدول العربيـة ويعمــل مــن أجـل مشـاركة الشـباب في الأنشـطة الشـبابية والتطوعيـة في مجـال حمايـة وتطويـر وتنميـة البيئـة العربيـة 
    </p>
    <p class="who-second">
      أسس الاتحاد العربي للشباب والبيئة في القاهرة عام 1983 وذلك بعد اللقاء العربي للشباب والبيئة الذي عقد في القاهرة بهدف مناقشة المشاكل البيئية في الوطن العربي من زاوية علمية وتحديد دور الشباب العربي في مواجهة هذه المشاكل والتصدي لها،&nbsp;" <a href="https://affye.org/" style="text-decoration: underline;">اقرأ المزيد</a> "
    </p>
  </div>
  <div class="images">
    <div class="first-image">
      <img src="../img/who us/first.jpg" alt="first">
    </div>
    <div class="first-image">
      <img src="../img/who us/second.png" alt="second">
    </div>
  </div>
  
  <div class="who-third-section">
    <span class="who-content">مشاركة الاتحاد في مؤتمر الاطراف COP 27 شرم الشيخ 2022</span>
    <p class="who-first" style="margin-top: 40px;">
      قال الدكتور ممدوح رشوان الأمين العام للاتحاد العربي للشباب والبيئة، إن مؤتمر المناخ “cop 27” استطاع أن يرسم خريطة مستقبل العالم أجمع فيما يخص العمل المناخي وتبادل التجارب والخبرات.. مشيرا إلى أنه كذلك حقق رواجا سياحيا لمصر من خلال توصيله رسالة ٤٠ ألف مشارك في المؤتمر استطاعوا أن يتحركوا بأمان في شرم الشيخ ويعبرون عن آرائهم بحرية.
    </p>
    <p class="who-second">
      وأضاف رشوان في تصريح لوكالة انباء الشرق الأوسط، اليوم الخميس، على هامش فعاليات المؤتمر- إن الاتحاد خلال مشاركته في الفعاليات قام بعرض مشروعه “التخلص الآمن من المخلفات الإلكترونية وتأثيرها على التغيرات المناخية” وذلك على مستوى الجامعات المصرية، وتم عرضه كتجربة ناجحة سيتم تعميمها وذلك في جلسة بحضور الدكتور عماد عدلي المدير الوطني لبرنامج المنح الصغيرة التابع لمرفق البيئة العالمي، والدكتور محمود فتح الله مدير إدارة شؤون البيئة والأرصاد الجوية بجامعة الدول العربية، والدكتور طارق العربي رئيس جهاز المخلفات
    </p>
  </div>

  <div class="who-flex">
    <div class="image">
      <img src="../img/logo/ll.png" alt="logo">
    </div>
    <p class="who-content">شركة إل آند دي مصر للتعليم و التطوير</p>
  </div>
  <div class="who-text">
    <p class="who-first">
      شركة مصرية رائدة في مجالات التعليم والتطوير والتحول الرقمي وتنظيم المعارض والمؤتمرات، تؤمن بأهمية التعليم المستمر وتطوير المهارات كمحرك للنمو الشخصي والمهني، لذلك فهي تقدم استشارات و برامج وخدمات تدريبية للأفراد والمؤسسات بواسطة نخبة من الأساتذة الجامعيين و المدربين المعتمدين من ذوي الخبرة والذين يجمعون بين المعرفة العميقة بمجالات التدريب والتطوير، والخبرات العملية الواسعة، والتوجه نحو الابتكار لتقديم أفضل الحلول التعليمية والبحثية ، بهدف تطوير الكفاءات وتعزيز المهارات اللازمة لمواكبة التطورات السريعة في سوق العمل الحديث.
    </p>
    <div class="who-second">
      كما تقوم بإنشاء المواقع الالكترونية وتطبيقات الهاتف المحمول وتقديم خدمات الحلول الرقمية وقواعد البيانات والتدريب عليها للمساعدة في تطبيق الحلول التقنية وتحسين العمليات والأداء داخل المؤسسات لتيسير عمليات التحول الرقمي الخاصة بها، أو تطبيق أفضل الممارسات التكنولوجية. 
    </div>
  </div>
@endsection