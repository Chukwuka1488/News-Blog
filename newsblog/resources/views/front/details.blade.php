 @extends('front.layout.master')
 @section('content')

 <!-- Page Wrapper -->
 <div class="page-wrapper">

     <!-- Content -->
     <div class="content clearfix">

         <!-- Main Content Wrapper -->
         <div class="main-content-wrapper">
             <div class="main-content single">
                 <h1 class="post-title">This is the title of the Post</h1>

                 <div class="post-content">
                     <p>
                         {{$id}}
                     </p>
                 </div>

             </div>
         </div>
         <!-- // Main Content -->

         <!-- Sidebar -->
         <div class="sidebar single">

             <div class="fb-page" data-href="https://web.facebook.com/codingpoets/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                 <blockquote cite="https://web.facebook.com/codingpoets/" class="fb-xfbml-parse-ignore"><a href="https://web.facebook.com/codingpoets/">Coding Poets</a></blockquote>
             </div>


             <div class="section popular">
                 <h2 class="section-title">Popular</h2>

                 <div class="post clearfix">
                     <img src="/frontend/images/image_1.png" alt="">
                     <a href="" class="title">
                         <h4>How to overcome your fears</h4>
                     </a>
                 </div>
                 <div class="post clearfix">
                     <img src="/frontend/images/image_1.png" alt="">
                     <a href="" class="title">
                         <h4>How to overcome your fears</h4>
                     </a>
                 </div>
                 <div class="post clearfix">
                     <img src="/frontend/images/image_1.png" alt="">
                     <a href="" class="title">
                         <h4>How to overcome your fears</h4>
                     </a>
                 </div>
                 <div class="post clearfix">
                     <img src="/frontend/images/image_1.png" alt="">
                     <a href="" class="title">
                         <h4>How to overcome your fears</h4>
                     </a>
                 </div>
                 <div class="post clearfix">
                     <img src="/frontend/images/image_1.png" alt="">
                     <a href="" class="title">
                         <h4>How to overcome your fears</h4>
                     </a>
                 </div>

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
         <!-- // Sidebar -->

     </div>
     <!-- // Content -->

 </div>
 <!-- // Page Wrapper -->
 @endsection