<!--== Navigation Start ==-->
  <?php include "includes/header.php";?>
<!--== Navigation End ==-->

<!--== Loader Start ==-->
<div id="loader-overlay">
  <div class="loader">
    <img src="assets/images/loader.svg" width="80" alt="">
  </div>
</div>
<!--== Loader End ==-->

<!--== Wrapper Start ==-->
<div class="wrapper">

<!--== Navigation Start ==-->
  <?php include "includes/navigation.php";?>
<!--== Navigation End ==-->

<!--== Inner banner Start ==-->
 <div class="transition-none">
     <section class="title-hero-bg parallax-effect" style="background-image: url(assets/images/title-bg/title-bg-5.jpg);">
       <div class="container">
         <div class="row">
           <div class="col-md-12">
             <div class="page-title text-center white-color">
               <h1 class="font-700">Blog Single</h1>
               <div class="breadcrumb mt-20">
                   <!-- Breadcrumb Start -->
                       <ul>
                         <li><a href="index.html">Home</a></li>
                         <li>Blog-single</li>
                       </ul>
                   <!-- Breadcrumb End -->
               </div>
             </div>
           </div>
         </div>

       </div>
     </section>
 </div>
<!--== Inner banner Start ==-->

<!--== Blog Details Start ==-->
  <section class="white-bg">
    <div class="container">
      <div class="row">
        <div class="col-md-9 col-sm-9 col-xs-12 xs-mb-50">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 mb-20 xs-mb-50">
              <div class="post">
                <div class="blog-grid-slider slick">
                  <div class="item"><img class="img-responsive" src="assets/images/post/post-02.jpg" alt=""/></div>
                  <div class="item"><img class="img-responsive" src="assets/images/post/post-03.jpg" alt=""/></div>
                  <div class="item"><img class="img-responsive" src="assets/images/post/post-04.jpg" alt=""/></div>
                </div>
                <div class="post-metas">
                  <div class="post-metas-center">
                    <p class="post-date">April 9, 2019</p>
                  </div>
                </div>
                <div class="post-info all-padding-20">
                   <h3><a href="home-blog.html">A guide to content management systems</a></h3>
                   <p>The days of weighing up whether or not you need a website for your business are long gone. These days, if you...</p>
                </div>
              </div>
            </div>
            <!--== Post End ==-->

            <div class="col-md-12 col-sm-12 col-xs-12 mb-20">
              <div class="blog-standard">
                <p>We’ve collected 10 Top Tips to to help you deliver better support for your items. Although it’s not mandatory, some of our most successful authors do an awesome job at providing support for their buyers, and we want to share their techniques.</p>
                <blockquote>
                  <p>For some buyers, the difference between items is based on the professionalism of the support offered. So read on to find out how Envato’s top authors deliver fantastic support.</p>
                </blockquote>
              </div>
              <div class="post-tags"> <a href="#">Design</a> <a href="#">Branding</a> <a href="#">Stationery</a> <a href="#">Development</a> <a href="#">Concept</a> </div>
              <h2 class="comment-reply-title mt-30">15 Comments</h2>
              <ul class="comment-box">
              <li class="post-comment">
                <div class="comment-content"> <a href="#" class="avatar"><img src="assets/images/team/avatar-1.jpg" alt="#"></a>
                  <div class="post-body">
                    <div class="comment-header"> <span class="author"><a href="#">Karl Casey</a></span> <span class="time-ago"><a href="#">25 mins ago</a></span> </div>
                    <div class="post-message">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam justo, ullamcorper tincidunt pellentesque in, condimentum ut enim.</p>
                    </div>
                    <div class="comment-footer"> <span class="reply"><a href="#"><i class="ion-reply"></i> Reply</a></span> </div>
                  </div>
                </div>
                <ul class="reply-comment">
                  <li class="post-comment">
                    <div class="comment-content"> <a href="#" class="avatar"><img src="assets/images/team/avatar-2.jpg" alt="#"></a>
                      <div class="post-body">
                        <div class="comment-header"> <span class="author"><a href="#">Lynda Stone</a></span> <span class="time-ago"><a href="#">18 days ago</a></span> </div>
                        <div class="post-message">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="comment-footer"> <span class="reply"><a href="#"><i class="ion-reply"></i> Reply</a></span> </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="post-comment">
                <div class="comment-content"> <a href="#" class="avatar"><img src="assets/images/team/avatar-3.jpg" alt="#"></a>
                  <div class="post-body">
                    <div class="comment-header"> <span class="author"><a href="#">Roland Buford</a></span> <span class="time-ago"><a href="#">3 months ago</a></span> </div>
                    <div class="post-message">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam justo, ullamcorper tincidunt pellentesque in, condimentum ut enim.</p>
                    </div>
                    <div class="comment-footer"> <span class="reply"><a href="#"><i class="ion-reply"></i> Reply</a></span> </div>
                  </div>
                </div>
              </li>
            </ul>

            <div id="respond" class="comment-respond">
              <h2 id="reply-title" class="comment-reply-title">Leave a Comment</h2>
              <form method="post" id="form-comments" class="comment-form contact-form-style-01">
                <div class="row-form row">
                  <div class="col-form col-md-6">
                    <div class="form-group">
                      <input type="text" name="name" class="md-input" id="name" required="" placeholder="Name *" data-error="Your Name is Required">
                    </div>
                  </div>
                  <div class="col-form col-md-6">
                    <div class="form-group">
                      <input type="email" name="email" class="md-input" id="email" placeholder="Email*" required="" data-error="Please Enter Valid Email">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <textarea name="message" class="md-textarea" id="message" rows="7" placeholder="Your Comments" required="" data-error="Please, Leave us a message"></textarea>
                </div>

                <p class="form-submit">
                  <button class="btn btn-color btn-md btn-default remove-margin">Post Comments</button>
                  <input type="hidden" name="comment_post_ID">
                  <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                </p>
              </form>
            </div>

            <h2 class="recent-post-title">Recent Posts</h2>
            <div class="row blog-style-01">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="post">
                  <div class="post-img">
                    <img class="img-responsive" src="assets/images/post/post-01.jpg" alt=""/>
                    <div class="post-metas">
                      <div class="post-metas-center">
                        <p class="post-date">January 15, 2018</p>
                      </div>
                    </div>
                  </div>
                    <div class="post-info all-padding-20">
                      <h3><a href="home-blog.html">Creating a website for your business</a></h3>
                      <p>If you’re looking to create a website for your business, then you’ve probably come across the term content management system, or CMS...</p>
                    </div>
                </div>
              </div>
              <!--== Post End ==-->

              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="post">
                  <div class="blog-grid-slider slick">
                    <img class="img-responsive" src="assets/images/post/post-02.jpg" alt=""/>
                    <img class="img-responsive" src="assets/images/post/post-08.jpg" alt=""/>
                    <img class="img-responsive" src="assets/images/post/post-09.jpg" alt=""/>
                  </div>
                  <div class="post-metas">
                    <div class="post-metas-center">
                      <p class="post-date">September 28, 2017</p>
                    </div>
                  </div>
                    <div class="post-info all-padding-20">
                      <h3><a href="home-blog.html">A guide to content management systems</a></h3>
                      <p>The days of weighing up whether or not you need a website for your business are long gone. These days, if you...</p>
                    </div>
                </div>
              </div>
              <!--== Post End ==-->
          </div>
          </div>


          </div>
          <div class="row mt-100">
              <div class="col-md-12">
                  <div class="text-center">
                    <div class="pagination dark-color">
                          <ul>
                              <li><a href="#"><i class="icofont icofont-long-arrow-left mr-5 xs-display-none"></i> Prev</a></li>
                              <li class="active"><a href="#">1</a></li>
                              <li><a href="#">2</a></li>
                              <li><a href="#">3</a></li>
                              <li><a href="#">Next <i class="icofont icofont-long-arrow-right ml-5 xs-display-none"></i></a></li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-3 col-xs-12">
          <div class="sidebar_widget widget_categories mb-50">
            <h5 class="aside-title">Categories</h5>
            <ul>
              <li> <a href="#">Business</a></li>
              <li> <a href="#">Health</a> </li>
              <li> <a href="#">Motion Graphic</a> </li>
              <li> <a href="#">Conecpt Design</a> </li>
              <li> <a href="#">Lifestyle</a> </li>
            </ul>
          </div>
          <div class="sidebar_widget widget_tag_cloud mb-50">
            <h5 class="aside-title">Tags</h5>
            <div class="post-tags"> <a href="#">Branding</a> <a href="#">Marketing</a> <a href="#">Photography</a> <a href="#">Illustration</a> <a href="#">Development</a> <a href="#">Multipurpose</a> <a href="#">Creativity</a> <a href="#">Apps</a>  <a href="#">Fashion</a> <a href="#">Concept</a> <a href="#">Design</a></div>
          </div>
        </div>
      </div>
    </div>

  </section>
  <!--== Blog Details End ==-->

  <!--== Footer Start ==-->
 <?php include "includes/footer.php"; ?>