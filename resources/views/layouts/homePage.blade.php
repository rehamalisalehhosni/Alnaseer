<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <!-- Bootstrap CSS -->
  
  {{ Html::style('style/css/bootstrap.min.css') }}
  {{ Html::style('style/css/style.css') }}
  {{ Html::style('style/css/animations.css') }}
  {{ Html::style('style/font-awesome/css/font-awesome.min.css') }}
  {{ Html::style('style/css/swiper.min.css') }}
  {{ Html::style('style/bootstrap-4-navbar.css') }}
  {{ Html::style('css/jquerysctipttop.css') }}
  {{ Html::style('css/prettyPhoto.css') }}
  
  {{ Html::script('style/js/jquery-1.11.3.min.js') }}
  {{ Html::script('js/jquery.prettyPhoto.js') }}
  <link rel="shortcut icon" href="{{url('/img/f-logo.png')}}" type="image/x-icon" />
  <link rel="apple-touch-icon" href="{{url('/img/f-logo.png')}}">
  <link rel="apple-touch-icon" sizes="120x120" href="">
  <link rel="apple-touch-icon" sizes="76x76" href="">
  <link rel="apple-touch-icon" sizes="152x152" href="">
  
  <title>مركز الدراسات التخطيطية والمعمارية</title>
  <link href='http://fonts.googleapis.com/css?family=Lato:900' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="container-fluid">
    <header>
      <div class="row  d-md-none d-lg-none d-sm-block">
        <div class="col-sm-3 right">
          <a class="search-toggle  "><i class="fa fa-search"></i></a>
          <form action="" method="get" id="searchform" class="searchform d-none">
            <fieldset>
              <span class="text"><input name="s" id="s" type="text" value="" placeholder="بحث…" autocomplete="off"></span>
              <span class="button-wrap"><button class="btn btn-special" title="بحث" type="submit"><i class="fa fa-search"></i></button></span>
            </fieldset>
          </form>
        </div>
      </div>
      <div class="row topbar d-none d-md-flex d-lg-flex">
        <div class="col-md-4  col-sm-3 right">
          <div class="links">
            <a href="{{route('careerList.index')}}" target="_blank">الوظائف </a>
            <a href="#" target="_blank"> | خريطة الموقع   </a>
            <a href="" target="_blank"> |  English  </a>
          </div>
        </div>
        <div class="col-4"></div>
        <div class="col-md-4  col-sm-3 left">
        <!--  <form action="" method="get" class="searchform ">
            <fieldset>
              <span class="text"><input name="s" id="s" type="text" value="" placeholder="بحث…" autocomplete="off"></span>
              <span class="button-wrap"><button class="btn btn-special" title="بحث" type="submit"><i class="fa fa-search"></i></button></span>
            </fieldset>
          </form>-->
          <div class="share-links">
            <a target="_blank" rel="nofollow" class="share-facebook" href="https://www.facebook.com/CPAS.EGY/" title="Facebook"></a>
            <a target="_blank" rel="nofollow" class="share-youtube" href="https://www.youtube.com/channel/UC9yE8j8MDN-J7hwhpzX6QbA" title="Youtube"></a>
            <a target="_blank" rel="nofollow" class="share-linkedin" href="https://www.linkedin.com/in/center-of-planning-and-architecture-studies-7b1827a1/" title="LinkedIn"></a>
          </div>
        </div>
      </div>
      <div class="row padd">
        <div class="col-md-3 col-sm-12" style="text-align:center">
          <a href="{{url('/')}}/" title="CPAS - CENTER OF PLANNING &amp; ARCHITECTURAL STUDIES" rel="home" >
            <img class="img-responsive standard-logo" src="{{url('/img/f-logo.png')}}" alt="CPAS">
          </a>
        </div>
        <div class="col-md-6 col-sm-12">
          <div class="header-left justify-content-sm-center">
            <p style="text-align:center;color:#0a2544;font-weight:bold;font-size:32px;">مركز الدراسات التخطيطية والمعمارية</p>
            <p style="text-align:center;color:#0a2544;font-weight:bold;font-size:26px;">أ.د / عبد الباقي إبراهيم وشركاه </p>
            <p style="text-align:center;color:#0a2544;font-weight:bold;font-size:21px;">بيت الخبرة في الهندسة الإستشارية</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-12 justify-content-sm-center left_text">
          <p >قيم ..</p>
          <p style="margin-right: 67px">تراث ..</p>
          <p style="margin-right: 157px;">معاصرة ..</p>
        </div>
      </div>
    </header>
  </div>
  <nav class="navbar navbar-toggleable-md  navbar-expand-sm navbar-light  sticky-top  bg-faded">
    <div class="fluid-container nav">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#">عن المركز</a>
            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <li  class="dropdown-item">
                <a  class="dropdown-toggle"  data-toggle="dropdown"  href="#">المؤسسون</a>
                <ul class="dropdown-menu">
                  <li class="dropdown-item"><a href="{{route('owners.owner',1)}}"> أ.د/ عبـد البـاقى محمد إبراهيـم</a></li>
                  <li class="dropdown-item" ><a href="{{route('owners.owner',2)}}"> أ.د/ حازم محمد إبراهيم</a></li>
                </ul>
              </li>
              <li class="dropdown-item" ><a   href="{{route('presedent.index')}}">رئيس المركز</a></li>
              <li class="dropdown-item" ><a  href="{{route('profile.index')}}">تعريف المركز</a></li>
              <li class="dropdown-item" ><a  href="{{route('certification.index')}}">شهادات الخبرة</a></li>
              <!--              <li class="dropdown-item" ><a  href="#">الهيكل التنظيمي</a></li>
            -->              <li class="dropdown-item" ><a  href="{{route('ourseniors.index')}}">قيادات المركز الفنية</a></li>
            <li class="dropdown-item" ><a  href="{{route('ourconsultants.index')}}">الإستشاريون المتعاونون</a></li>
            <li class="dropdown-item" ><a  href="{{route('agencyList.index')}}">جهات تتعامل مع المركز</a></li>
            <li class="dropdown-item" ><a  href="{{route('writtenAboutCenter.index')}}">ماكتب عن المركز</a></li>
            <li class="dropdown-item" ><a  href="{{url('/images/mural.jpg')}}" target="_blank">لوحة جدارية عن المركز</a></li>
          
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a  class="nav-link dropdown-toggle" href="#">نطاق الخدمات</a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <?php
          $services = \App\Models\Services::where('publish','=','1')->orderby('sort','asc')->get();
          foreach ($services as $service) {?>
            <li class="dropdown-item" >   <a  href="{{ route('servicesList.details',$service->services_id) }}"><?php echo $service->title ?></a></li>
          <?php  }
          ?>
        </ul>
        
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#">مشروعات المركز</a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <?php
          $ProjectsCategory = \App\Models\ProjectsCategory::where('publish','=','1')->orderby('sort','asc')->get();
          foreach ($ProjectsCategory as $cat) {?>
            <li class="dropdown-item" >   <a  href="{{ route('projectList.index',$cat->projects_category_id) }}"><?php echo $cat->title ?></a></li>
          <?php  }
          ?>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          الدورات التدريبية
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <!--        <li class="dropdown-item"><a  href="#">تعريف وحدة التدريب</a></li>
        -->    
        <li class="dropdown-item">
          <a  href="#" class="dropdown-toggle"  data-toggle="dropdown">دورات هندسية متخصصة</a>
          <ul class="dropdown-menu">
            <?php
            $CoursesCategory = \App\Models\CoursesCategory::orderby('courses_category_id','asc')->get();
            foreach ($CoursesCategory as $cat) {?>
              <li class="dropdown-item" >   <a  href="{{ route('coursesList.index',$cat->courses_category_id) }}"><?php echo $cat->title ?></a></li>
            <?php  }
            ?>
          </ul>
          
          
        </li>
        <li class="dropdown-item"><a  href="{{ route('coursesComputerList.index') }}">دورات الكمبيوتر</a></li>
        <!--        <li class="dropdown-item"><a  href="#">مواعيد الدورات </a></li>
        <li class="dropdown-item"><a  href="#">أخبــــار وحدة التدريــــب</a></li>
        <li class="dropdown-item"><a  href="#">إستمارة الدورات التدريبية</a></li>
        <li class="dropdown-item"><a  href="#">ممثلونا فى مجال التدريب فى الوطن العربى </a></li>
      -->
    </ul>
    
  </li>
  
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      الأنشطة الثقافية
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
      <li class="dropdown-item"><a href="{{route('cpasBooksList.index')}}">مكتبة المركز</a></li>
      <li class="dropdown-item">
        <a  href="#" class="dropdown-toggle"  data-toggle="dropdown"> مجلة عالم البناء</a>
        <ul class="dropdown-menu">
          <li class="dropdown-item"><a href="{{route('alambnaaaMagazineIndex.index')}}">فهرس الموضوعات التى نشرت فى المجلة</a></li>
          <li class="dropdown-item" ><a href="{{route('alambnaaaMagazine.index')}}"> تحميل أعداد مجلة عالم البناء</a></li>
        </ul>
      </li>
      <!--<li class="dropdown-item"><a  href="#">الندوات و الأمسيات الثقافية </a></li>
      <li class="dropdown-item"><a  href="#">كتب و إصدارات المركز</a></li>
      <li class="dropdown-item">
      <a  href="#" class="dropdown-toggle"  data-toggle="dropdown"> إصدارات الغير</a>
      <ul class="dropdown-menu">
      <li class="dropdown-item"><a href="#">منظمة العواصم والمدن الإسلامية</a></li>
      <li class="dropdown-item"><a href="#">المهندس / محمود زين العابدين</a></li>
      <li class="dropdown-item"><a href="#">المهندس / حسين جمعة </a></li>
      <li class="dropdown-item"><a href="#">الدكتور / صالح الهذلول</a></li>
      <li class="dropdown-item"><a href="#">الدكتور / هشام أبو سعدة</a></li>
      <li class="dropdown-item"><a href="#">إصدارات أخرى </a></li>
    </ul>
  </li>-->
  <!--        <li class="dropdown-item"><a  href="#">نشر الإنتاج العلمى المعماري و المدنى</a></li>
-->     
</ul>
</li>
<?php 
$excel = \App\Models\FilesExcel::where('sec','=','0')->limit(1)->orderby('files_excel_id','desc')->get();
?>
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#">نشر الإنتاج العلمي </a>
  <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
    <li  class="dropdown-item">
      <a  class="dropdown-toggle"  data-toggle="dropdown"  href="#">للمعماريين والعمرانيين العرب</a>
      <ul class="dropdown-menu">
        <li class="dropdown-item"><a href="{{route('scientificBooks.index')}}"> كتب </a></li>
        <li class="dropdown-item"><a href="{{route('thesis.index')}}"> رسائل علمية </a></li>
        <li class="dropdown-item"><a href="{{route('researches.index')}}">أبحاث </a></li>
        <li class="dropdown-item"><a href="{{route('magzineList.index')}}">مجلات معمارية </a></li>
        <li class="dropdown-item"><a href="{{route('orgnizationList.index')}}">منظمات وهيئات </a></li>
        <li class="dropdown-item"><a href="{{route('article.index')}}">مقالات</a></li>
        <li class="dropdown-item"><a href="{{route('lecturesList.index')}}"> محاضرات</a></li>
        <li class="dropdown-item"><a href="{{route('videos.index')}}">فيديوهات</a></li>
        <li class="dropdown-item"><a href="{{route('dawnloadArch.index')}}">تحميل الإنتاج العلمي للمعماريين و المخططين العمرانيين </a></li>
        <li class="dropdown-item"><a href="{{url('/Uploads/filesExcel/'.$excel[0]->file)}}" download >جدول تجميعي للمحتوى العلمى المعماري </a></li>
        <li class="dropdown-item"><a href="{{route('sitesList.index')}}">مواقع عالمية للنشر العلمى المعماري</a></li>
      </ul>
    </li>
    <?php 
    $excel2 = \App\Models\FilesExcel::where('sec','=','1')->limit(1)->orderby('files_excel_id','desc')->get();

    ?>

    <li  class="dropdown-item">
      <a  class="dropdown-toggle"  data-toggle="dropdown"  href="#">للمهندسين المدني	</a>
      <ul class="dropdown-menu">
        <li class="dropdown-item"><a href="{{route('scientificBooksCivil.index')}}"> كتب </a></li>
        <li class="dropdown-item"><a href="{{route('thesisCivil.index')}}"> رسائل علمية </a></li>
        <li class="dropdown-item"><a href="{{route('researchesCivil.index')}}">أبحاث </a></li>
        <li class="dropdown-item"><a href="{{route('dawnloadCivil.index')}}">مواقع للنشر العلمى للمهندسين المدني</a></li>
        <li class="dropdown-item"><a href="{{url('/Uploads/filesExcel/'.$excel2[0]->file)}}" download >جدول تجميعي لتسهيل البحث في المحتوى العلمي المدنى</a></li>
        <li class="dropdown-item"><a href="{{route('sitesCivilList.index')}}">مواقع عالمية للنشر العلمى المدنى</a></li>
      </ul>
    </li>
  </ul>
</li>

<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    أخبار المركز
  </a>
  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
    <li class="dropdown-item" ><a  href="{{route('newslist.index')}}">أخبار المركز</a></li>
    <li class="dropdown-item"><a href="{{route('newsletterList.index')}}">نشرة الاخبارية </a></li>
  </ul>
</li>
<li class="nav-item dropdown">
  <a class="nav-link" href="{{route('careerList.index')}}">
    وظائف شاغرة
  </a>
</li>
<!--    <li class="nav-item">
<a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
مواقع صديقة
</a>
</li>
-->  
<li class="nav-item">
  <a class="nav-link" href="{{route('contactUs.index')}}" >
    اتصل بنا
  </a>
</li>
</ul>
</div>
</div>
</nav>


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <?php
    $slider = \App\Models\Slider::orderby('sort','asc')->get();
    $i=0;
    foreach ($slider as $slide) { ?>
      <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i ?>" class="<?php if($i==0){ echo 'active'; } ?>"></li>
      <?php $i++; 
    }
    ?>
  </ol>
  <div class="carousel-inner" role="listbox">
    <?php
    $slider = \App\Models\Slider::orderby('sort','asc')->get();
    $i=0;
    foreach ($slider as $slide) {?>
      <div class="carousel-item <?php if($i==0){ echo 'active'; } ?>">
        <img class="d-block img-fluid" src="{{url('/Uploads/slider/'. $slide->image)}}" alt="<?php echo $slide->title; ?>">
        <div class="carousel-caption" >
          <h3><?php echo $slide->title; ?></h3>
        </div>        
      </div>
      <?php $i++; 
    }
    ?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="container-fluid">
  <div class="row mt-5">
    <div class="col-md-3">
      <a href="{{route('scientificBooks.index')}}">
        <div class="col-md-12">
          <span class="thumb-info-ribbon thumb-info-ribbon-tertiary green"><span>منشورات المركز</span></span>
        </div>
        <div class="cart-custom card">
          <div class="card-block card-img">
            <span class="thumb-info-wrapper">
              <span data-image="images/3rd-intro.jpg" class="thumb-info-image" style="background-image: url(images/3rd-intro.jpg);"></span>
            </span>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-3">
      <a href="{{ route('projectList.index',1) }}">
        <div class="col-md-12">
          <!--books alam bnaa  magazine http://www.cpas-egypt.com/AR/Baki_Books_ar.htm-->
          <span class="thumb-info-ribbon thumb-info-ribbon-tertiary grey"><span>مشاريع المركز</span></span>
        </div>
        <div class="cart-custom  card">
          <div class="card-block card-img align-middle">
            <span class="thumb-info-wrapper">
              <span data-image="images/2nd-intro.jpg" class="thumb-info-image" style="background-image: url(images/2nd-intro.jpg);"></span>
            </span>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-3">
      <a href="{{ route('coursesList.index',1) }}">
        <div class="col-md-12">
          <span class="thumb-info-ribbon thumb-info-ribbon-tertiary red"><span>الدورات التدريبية</span></span>
        </div>
        <div class="cart-custom  card">
          <div class="card-block card-img">
            <span class="thumb-info-wrapper">
              <span data-image="images/1st-intro.jpg" class="thumb-info-image" style="background-image: url(images/1st-intro.jpg);"></span>
            </span>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-3">
      <a href="{{route('profile.index')}}">
        
        <div class="col-md-12">
          <span class="thumb-info-ribbon thumb-info-ribbon-tertiary blue"><span>عن المركز</span></span>
        </div>
        <div class="cart-custom  card">
          <div class="card-block card-img">
            <span class="thumb-info-wrapper">
              <span data-image="images/rrtt.jpg" class="thumb-info-image" style="background-image: url(images/rrtt.jpg);"></span>
            </span>
          </div>
        </div>
      </div>
    </a>
  </div>
  <div class="row mt-5 founder justify-content-center">
    <!-- Swiper -->
    <?php  $owner = \App\Models\CpasOwners::find('1')?>
    <div  class="container">
      <div class="row animatedParent heightover">
        <div class="col-3 animated fadeInRight">
          <div class="swiper-container ">
            <div class="swiper-wrapper ">
              <?php foreach($owner->CpasOwnersImages as $image){?>
                <div class="swiper-slide">
                  <div class="card card-marg">
                    <div class="card-block card-img ">
                      <img src="{{url('/Uploads/owners_images/'. $image->image)}}" alt="" />
                    </div>
                  </div>
                </div>
              <?php } ?> 
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
          </div>
        </div>
        <div class="col-7 animated fadeInLeft text pt-5">
          <h2><?php echo $owner->name ?></h2>
          <div class="intro"><?php echo $owner->intro ?></div>
          <a href="{{route('owners.owner',$owner->cpas_owners_id)}}" class="mores">المزيد</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Second-->
  <?php  $owner2 = \App\Models\CpasOwners::find('2')?>
  
  <div class="row mt-5 founder justify-content-center">
    <!-- Swiper -->
    <div  class="container">
      <div class="row animatedParent heightover">
        <div class="col-3 animated fadeInRight">
          <div class="swiper-container ">
            <div class="swiper-wrapper ">
              <?php foreach($owner2->CpasOwnersImages as $image){?>
                <div class="swiper-slide">
                  <div class="card card-marg">
                    <div class="card-block card-img ">
                      <img src="{{url('/Uploads/owners_images/'. $image->image)}}" alt="" />
                    </div>
                  </div>
                </div>
              <?php } ?> 
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
          </div>
        </div>
        <div class="col-7 animated fadeInLeft text pt-5">
          <h2><?php echo $owner2->name ?></h2>
          <div class="intro"><?php echo $owner2->intro ?></div>
          <a href="{{route('owners.owner',$owner2->cpas_owners_id)}}" class="mores">المزيد</a>
          
        </div>
      </div>
    </div>
    <!-- Swiper JS -->
    
  </div>
</div>
<footer class="mt-5 ">
  <div class="container">
    <div class="row contact">
      <div class="col-md-4">
        <h4>الاخبار</h4>
        <div class="swiper-container swipe ">
          <div class="swiper-wrapper ">
            <?php  $news = \App\Models\News::orderBy('news_id','DESC')->limit(10)->get();?>
            <?php $i=0;?>
            <div class="swiper-slide ">
              <ul class="ul">
                <?php 
                foreach($news as $item){ ?>
                  <?php if($i<5){?>
                  <li class="list_item col-12">
                    <div class="list_item_title col-md-4">
                      <img src="{{url('/Uploads/news/'. $item->main_image)}}" alt="" class="img-thumbnail " />
                    </div>
                    <div class="list_item_title col-md-8">
                      <h5 class="titles"><a href="{{ route('newsList.details',$item->news_id) }}" >{{$item->title}}</a></h5>
                    </div>
                  </li>
                <?php } ?> 
                  <?php $i++; } ?> 
                  
                </ul>
              </div>
            <?php $i=0;?>
            <div class="swiper-slide ">
              <ul class="ul ">
                <?php 
                foreach($news as $item){ ?>
                  <?php if($i>4&&$i<10){?>
                  <li class="list_item col-12 ">
                    <div class="list_item_title col-md-4">
                      <img src="{{url('/Uploads/news/'. $item->main_image)}}" alt="" class="img-thumbnail " />
                    </div>
                    <div class="list_item_title col-md-8">
                      <h5 class="titles"><a href="{{ route('newsList.details',$item->news_id) }}" >{{$item->title}}</a></h5>
                    </div>
                  </li>
                <?php } ?> 
                  <?php $i++; } ?> 
                  
                </ul>
              </div>
            </div>
        
              <!-- Add Pagination -->
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="col-md-4 pt-5"><div id="mapfooter"></div></div>
          <div class="col-md-4 foot">
            <h4>بيانات الاتصال</h4>
            <?php  $setting= \App\Models\Setting::find('1')?>
            <div class="mt-3"><span>العنوان : </span><?php echo $setting->address ?></div>
            <div class="mt-3"><span>الهاتف : </span><?php echo $setting->tel ?></div>
            <div class="mt-3"><span> موبيل :</span><?php echo $setting->tel2 ?></div>
            <div class="mt-3"><span> الفاكس :</span><?php echo $setting->tel3 ?></div>
            <div class="mt-3"><span> البريد الالكتروني :</span><?php echo $setting->email ?></div>
            <div class="share-links mt-4 reverse">
              <a target="_blank" rel="nofollow" class="share-facebook" href="https://www.facebook.com/CPAS.EGY/" title="Facebook"></a>
              <a target="_blank" rel="nofollow" class="share-youtube" href="https://www.youtube.com/channel/UC9yE8j8MDN-J7hwhpzX6QbA" title="Youtube"></a>
              <a target="_blank" rel="nofollow" class="share-linkedin" href="https://www.linkedin.com/in/center-of-planning-and-architecture-studies-7b1827a1/" title="LinkedIn"></a>
            </div>
          </div>       
        </div>
      </div>
    </footer>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <!-- Initialize Swiper -->
    <style>
    #mapfooter {
      height: 310px;
      width: 100%;
    }
    </style>
    
    {{ Html::script('style/js/tether.min.js') }}
    
    {{ Html::script('style/js/bootstrap.min.js') }}
    {{ Html::script('js/jquery.accordion.js') }}
    {{ Html::script('style/js/popper.min.js') }}
    {{ Html::script('style/js/swiper.min.js') }}
    {{ Html::script('style/js/css3-animate-it.js') }}
    <script>
    $( document ).ready( function () {
      $("a[rel^='prettyPhoto']").prettyPhoto();
      $(function(){
        $('.mySlider').accordion({
          currentWidth:'874',
          otherWidth:'25',
          itemDefautWidth:'166'
        })
      })
      
      /*  $( '.navbar a.dropdown-toggle' ).on(' mouseover','.dropdown',function(e){
      var _d=$(e.target).closest('.dropdown');_d.addClass('show');
      setTimeout(function(){
      _d[_d.is(':hover')?'addClass':'removeClass']('show');
    },100);
  });
  */  /*$( '.navbar a.dropdown-toggle' ).on( 'mouseover  ', function ( e ) {
  var $el = $( this );
  var $parent = $( this ).offsetParent( ".dropdown-menu" );
  $( this ).parent( "li" ).toggleClass( 'show' );
  
  if ( !$parent.parent().hasClass( 'navbar-nav' ) ) {
  $el.next().css( { "top": $el[0].offsetTop-5, "right": $parent.outerWidth() - 4 } );
}
$( '.navbar-nav li.show' ).not( $( this ).parents( "li" ) ).removeClass( "show" );
return false;
} );*/

} );
$( document ).ready( function () {
  
  $( '.dropdown-menu a.dropdown-toggle' ).on( 'mouseenter', function ( e ) {
    var $el = $( this );
    var $parent = $( this ).offsetParent( ".dropdown-menu" );
    if ( !$( this ).next().hasClass( 'show' ) ) {
      $( this ).parents( '.dropdown-menu' ).first().find( '.show' ).removeClass( "show" );
    }
    var $subMenu = $( this ).next( ".dropdown-menu" );
    $subMenu.toggleClass( 'show' );
    
    $( this ).parent( "li" ).toggleClass( 'show' );
    
    $( this ).parents( 'li.nav-item.dropdown.show' ).on( 'hidden.bs.dropdown', function ( e ) {
      $( '.dropdown-menu .show' ).removeClass( "show" );
    } );
    
    if ( !$parent.parent().hasClass( 'navbar-nav' ) ) {
      $el.next().css( { "top": $el[0].offsetTop, "right": $parent.outerWidth() - 4 } );
    }
    
    return false;
  } );
} );
var swiper = new Swiper('.swiper-container', {
  spaceBetween: 30,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});


</script>

<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC4e5XXwF4gry53DkvzupSn84wKEWrFIk&callback=initMap">
</script>
<script>
function initMap() {
  var mapCanvas2 = document.getElementById("mapfooter");
  var mapOptions = {
    center: new google.maps.LatLng( {lat: <?php  echo $setting->lat ?> , lng: <?php  echo $setting->long ?>}),
    zoom:18,
    mapTypeId:google.maps.MapTypeId.HYBRID
  };
  var map = new google.maps.Map(mapCanvas2,mapOptions);
  var marker = new google.maps.Marker({
    position: new google.maps.LatLng( {lat: <?php  echo $setting->lat ?> , lng: <?php  echo $setting->long ?>}),
    map: map,
    icon: '{{url("/img/pin.png")}}',
    title: 'CPAS!'
  });

}

</script>


</body>
</html>
