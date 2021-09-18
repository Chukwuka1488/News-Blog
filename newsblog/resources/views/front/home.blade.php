 @extends('front.layout.master')
 @section('content')

 <!-- Page Wrapper -->
 <div class="page-wrapper">

     <!-- Post Slider -->
     <div class="post-slider">
         <h1 class="slider-title">Trending Posts</h1>
         <i class="fas fa-chevron-left prev"></i>
         <i class="fas fa-chevron-right next"></i>

         <div class="post-wrapper">

             <div class="post">
                 <img src="/frontend/images/image_1.png" alt="Tech " class="slider-image">
                 <div class="post-info">
                     <h4><a href="single.html">One day your life will flash before your eyes</a></h4>
                     <i class="far fa-user"> Awa Melvine</i>
                     &nbsp;
                     <i class="far fa-calendar"> Mar 8, 2019</i>
                 </div>
             </div>

             <div class="post">
                 <img src="/frontend/images/image_1.png" alt="" class="slider-image">
                 <div class="post-info">
                     <h4><a href="single.html">One day your life will flash before your eyes</a></h4>
                     <i class="far fa-user"> Awa Melvine</i>
                     &nbsp;
                     <i class="far fa-calendar"> Mar 8, 2019</i>
                 </div>
             </div>

             <div class="post">
                 <img src="/frontend/images/image_1.png" alt="" class="slider-image">
                 <div class="post-info">
                     <h4><a href="single.html">One day your life will flash before your eyes</a></h4>
                     <i class="far fa-user"> Awa Melvine</i>
                     &nbsp;
                     <i class="far fa-calendar"> Mar 8, 2019</i>
                 </div>
             </div>

             <div class="post">
                 <img src="/frontend/images/image_1.png" alt="" class="slider-image">
                 <div class="post-info">
                     <h4><a href="single.html">One day your life will flash before your eyes</a></h4>
                     <i class="far fa-user"> Awa Melvine</i>
                     &nbsp;
                     <i class="far fa-calendar"> Mar 8, 2019</i>
                 </div>
             </div>

             <div class="post">
                 <img src="/frontend/images/image_1.png" alt="" class="slider-image">
                 <div class="post-info">
                     <h4><a href="single.html">One day your life will flash before your eyes</a></h4>
                     <i class="far fa-user"> Awa Melvine</i>
                     &nbsp;
                     <i class="far fa-calendar"> Mar 8, 2019</i>
                 </div>
             </div>


         </div>

     </div>
     <!-- // Post Slider -->

     <!-- Content -->
     <div class="content clearfix">

         <!-- Main Content -->
         <div class="main-content">
             <h1 class="recent-post-title">Recent Posts</h1>
             @foreach ($blog as $blogData)

             <div class="post clearfix">
                 <img src="/frontend/images/image_3.png" alt="" class="post-image">
                 <div class="post-preview">
                     <h2><a href="single.html">{{$blogData->title}}</a></h2>
                     <i class="far fa-user"> Awa Melvine</i>
                     &nbsp;
                     <i class="far fa-calendar"> testing</i>
                     <p class="preview-text">
                         {{$blogData->body}}
                     </p>
                     <a href="single.html" class="btn read-more">Read More</a>
                 </div>
             </div>
             @endforeach
         </div>
         <!-- // Main Content -->

         <div class="sidebar">

             <div class="section search">
                 <h2 class="section-title">Search</h2>
                 <form action="index.html" method="post">
                     <input type="text" name="search-term" class="text-input" placeholder="Search...">
                 </form>
             </div>


             <div class="section topics">
                 <h2 class="section-title">Topics</h2>
                 <ul>
                     <li><a href="#">Poems</a></li>
                     <li><a href="#">Quotes</a></li>
                     <li><a href="#">Fiction</a></li>
                     <li><a href="#">Biography</a></li>
                     <li><a href="#">Motivation</a></li>
                     <li><a href="#">Inspiration</a></li>
                     <li><a href="#">Life Lessons</a></li>
                 </ul>
             </div>

         </div>

     </div>
     <!-- // Content -->

 </div>
 <!-- // Page Wrapper -->

 @endsection