<?php
   /*
   Template Name: Home Page
   */
   get_header();
   ?>
<!-- Slider Area Start -->
<section class="slider-area" id="home">
   <div class="container">
      <div class="row">
         <div class="col-xl-9">
            <div class="slider owl-carousel">
               <?php
                  $args = array(  
                     'post_type' => 'sliders',
                     'post_status' => 'publish',
                     'posts_per_page' => -1, 
                  );
                  
                  $loop = new WP_Query( $args ); 
                        
                  while ( $loop->have_posts() ) : $loop->the_post(); 
                  
                  $slide_sub_title = get_field('slide_sub_title');
                  $slide_description = get_field('slide_description');
                  $slide_image = get_field('slide_image');
                  ?>
               <div class="single-slide" style="background-image:url('<?php echo $slide_image['url']; ?>')">
                  <div class="container">
                     <div class="row">
                        <div class="col-xl-12">
                           <div class="slide-table">
                              <div class="slide-tablecell">
                                 <h4><?php if($slide_sub_title) {echo $slide_sub_title;}?></h4>
                                 <h2><?php the_title();?></h2>
                                 <p><?php if($slide_description) {echo $slide_description;}?></p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <?php
                  endwhile;
                  wp_reset_postdata(); 
                  ?>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="speech">
                     <div class="speech-content">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/principal.jpg" alt="">
                        <h4>আব্দুল ওয়াদুদ তাপাদার <span>অধ্যক্ষ </span><span>উইমেন্স মডেল কলেজ, সিলেট। </span></h4>
                     </div>
                     <p>বর্তমান যুগ বিজ্ঞান ও প্রযুক্তির যুগ। বিজ্ঞান ও প্রযুক্তির প্রতিযোগিতামূলক এ বিশ্বে যে কোন শিক্ষার্থীকে বর্তমানে আধুনিক ও প্রযুক্তিনির্ভর এবং মানসম্পন্ন শিক্ষা ছাড়া টিকে থাকা অত্যন্ত কঠিন হয়ে দাঁড়িয়েছে। তাই বর্তমান সরকারের পাশাপাশি সিলেটের শিক্ষা ও সমাজ উন্নয়নমূলক ট্রাস্ট ইএসডি ফাউন্ডেশন সিলেটের নারী শিক্ষার উন্নয়নে গনপ্রজাতন্ত্রী বাংলাদেশ সরকারের শিক্ষা মন্ত্রনালয় ও মাধ্যমিক ও উচ্চ মাধ্যমিক শিক্ষাবোর্ড, সিলেট এর অনুমোদন সাপেক্ষে ২০১৩ সালে সিলেট শহরের প্রাণকেন্দ্র কুমারপাড়ায় প্রতিষ্ঠা করে সিলেটের প্রথম বিজ্ঞান ও প্রযুক্তি নির্ভর (ডিজিটাল) মহিলা কলেজ উইমেন্স মডেল কলেজ </p>
                     <p>হযরত শাহজালাল ও হযরত শাহপরানের পুণ্যভূমি সিলেট শহরে বর্তমানে বহু শিক্ষা প্রতিষ্ঠান থাকলেও মানসম্পন্ন এবং আধুনিক বিজ্ঞান ও প্রযুক্তি নির্ভর শিক্ষা প্রতিষ্ঠান একেবারে নেই বললেই চলে। নেই মফস্বল থেকে আশা মেয়েদের জন্য মানসম্পন্ন কোন আবাসিক ব্যবস্থা। আর যা আছে সেখানে চলছে প্রাইভেট পড়ানোর প্রতিযোগিতা কিংবা কোচিং বানিজ্য। সেদিক বিবেচনায় উইমেন্স মডেল কলেজ-ই সিলেটের একমাত্র মহিলা কলেজ যেখানে মানসম্পন্ন এবং আধুনিক বিজ্ঞান ও প্রযুক্তি নির্ভর শিক্ষা দিতে সকল শ্রেণিকক্ষে স্থায়িভাবে সংযোজিত রয়েছে মাল্টিমিডিয়া প্রজেক্টর, ইন্টারনেট সংযুক্ত কম্পিউটার ল্যাব, অত্যাধুনিক বিজ্ঞানাগার ও সমৃদ্ধ লাইব্রেরী। কোচিং ও প্রাইভেট নির্ভরশীলতার পরিবর্তে আমরা এমনভাবে পাঠদান করি যেন কোন শিক্ষার্থী প্রাইভেট পড়ার প্রয়োজনীয়তা অনুভব না করে। আমরা বিশ্বাস করি একমাত্র মানসম্মত, প্রযুক্তি নির্ভর ও সুপরিকল্পিত শ্রেণিপাঠদানই পারে শিক্ষার্থীদের কোচিং প্রবনতা থেকে মুক্ত রাখতে।</p>
                     <p>সিলেটের সচেতন অভিভাবকবৃন্দ যে বিষয়টি নিয়ে সবসময় দুশ্চিন্তাগ্রস্ত থাকেন তা হল নিরাপত্তা । তারা চিন্তা করেন মেয়েদের জন্য একটি আলাদা ক্যাম্পাস কিংবা একটি নিরাপদ ও মানসম্পন্ন  প্রতিষ্ঠানের কথা। এসব বিবেচনায় আমাদের রয়েছে কলেজ একাডেমিক ভবন ও হোস্টেলে সিসি ক্যামেরার মাধ্যমে সার্বক্ষনিক নিরাপত্তার ব্যবস্থা, রয়েছে স্মার্টকার্ড ও এসএমএস সার্ভিস। ফলে আভিভাবকরা ঘরে বসে মেসেজের মাধ্যমে নিশ্চিত হন কখন তাঁর মেয়ে কলেজে পৌছাল কিংবা কখন কলেজ থেকে বের হল।কলেজ মেয়েদের পাঠিয়ে অভিভাবকদের দুশ্চিন্তা দূর করতে আমাদের এই মেসেজ সার্ভিসের ব্যবস্থা। তাছাড়া আমরা বিশ্বাস করি মানসম্পন্ন শিক্ষার জন্য প্রয়োজন মানসম্পন্ন শিক্ষক। উইমেন্স মডেল কলেজ তাই নিয়োগ দিয়েছে এক ঝাঁক  উদ্যোমী,  প্রতিশ্রুতিশীল এবং প্রশিক্ষনপ্রাপ্ত, দক্ষ ও কর্মঠ শিক্ষকমন্ডলী যারা তাদের আন্তরিকতা, মেধা-মননশীলতা, যোগ্যতা এবং সৃজনশীলতা দিয়ে শিক্ষার্থীদের আধুনিক ও যুগোপযোগি শিক্ষা দানে বদ্ধপরিকর। কারণ আমরা বিশ্বাস করি একাদশ ও দ্বাদশ শ্রেণির প্রস্তুতি ও ফলাফলের উপর অনেকাংশেই নির্ভর করে উচ্চ শিক্ষার সুযোগ। আমাদের লক্ষ্য নিয়মিত পড়ালেখার পাশাপাশি শিক্ষার্থীদের মধ্যে সামাজিক, সাংস্কৃতিক, ধর্মীয় ও নৈতিক মূল্যবোধ সৃষ্টি করে তাদের আদর্শ  দেশপ্রেমিক  হিসাবে গড়ে তোলা। ফলে আমাদের কলেজে প্রতিষ্ঠানিক সিলেবাসের পাশাপাশি নিয়মিত সবরকম সহপাঠ্যক্রমিক সকল জাতীয় দিবস যথাযোগ্য মর্যাদায় পালন করে করা হয়। আমরা যেমন নিজেরা স্বপ্ন দেখি একটি অত্যাধুনিক মানসম্পন্ন বিজ্ঞান ও প্রযুক্তি নির্ভর প্রতিষ্ঠানের তেমনি শিক্ষার্থীদের স্বপ্ন দেখাই আদর্শ মানুষ হওয়ার, সমাজে ব্যক্তিত্ব ও যোগ্যতা নিয়ে মাথা উচুঁ করে দাঁড়াবার। সিলেটসহ সারাদেশের সকল সচেতন অভিভাবক ও উদ্যোমী এবং দৃঢ়প্রত্যয়ী  শিক্ষার্থীদের উইমেন্স মডেল কলেজ পরিবারে স্বাগত জানাই।</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-3">
            <div class="sidebar">
               <h4>bdc কেন পছন্দের?</h4>
               <ul>
                  <li><i class="fas fa-long-arrow-alt-right"></i> মাল্টিমিডিয়া প্রজেক্টরের মাধ্যমে পাঠদান</li>
                  <li><i class="fas fa-long-arrow-alt-right"></i> সি.সি ক্যামেরার মাধ্যমে সার্বক্ষণিক নিরাপত্তা</li>
                  <li><i class="fas fa-long-arrow-alt-right"></i> নিয়মিত শিক্ষার্থীদের প্রাইভেট পড়ার প্রয়োজন হয় না</li>
                  <li><i class="fas fa-long-arrow-alt-right"></i> অত্যাধুনিক বিজ্ঞানাগার ও কম্পিউটার ল্যাব</li>
                  <li><i class="fas fa-long-arrow-alt-right"></i> ফ্রি মাসিক স্বাস্থ্য সেবা কার্যক্রম</li>
                  <li><i class="fas fa-long-arrow-alt-right"></i> ডিবেট ক্লাব, সাইন্স ক্লাব, কালচারাল ক্লাব ও রেঞ্জার ইউনিট কার্যক্রম</li>
               </ul>
            </div>
            <div class="sidebar">
               <h4>Notice Borad</h4>
               <ul>
                  <?php
                     $args = array(  
                     	'post_type' => 'notices',
                     	'posts_per_page' => 5,
                     	'post_status' => 'publish',
                     	'orderby' => 'title', 
                     	'order' => 'DESC', 
                     );
                     
                     $loop = new WP_Query( $args ); 
                     	
                     while ( $loop->have_posts() ) : $loop->the_post(); 
                     
                     ?>
                  <li><a href="<?php the_permalink();?>"><span><?php echo get_the_date();?></span> <?php the_title();?></a></li>
                  <?php
                     endwhile;
                     
                     wp_reset_postdata(); 
                     ?>
               </ul>
            </div>
            <div class="sidebar">
               <h4>Quick Links</h4>
               <ul>
                  <li><a href=""><i class="fas fa-long-arrow-alt-right"></i> Notice Borad</a></li>
                  <li><a href=""><i class="fas fa-long-arrow-alt-right"></i> Hostel</a></li>
                  <li><a href=""><i class="fas fa-long-arrow-alt-right"></i> Teachers</a></li>
                  <li><a href=""><i class="fas fa-long-arrow-alt-right"></i> Career</a></li>
                  <li><a href=""><i class="fas fa-long-arrow-alt-right"></i> Contact</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Slider Area Start -->
<section class="counter-area">
   <div class="container">
      <div class="row">
         <div class="col-md-3">
            <div class="single-counter counter1 wow fadeInUp2 animated" data-wow-delay='.1s'>
               <i class="fas fa-users"></i>
               <h4><span class="counter">5</span> K+</h4>
               <p>students</p>
            </div>
         </div>
         <div class="col-md-3">
            <div class="single-counter counter2 wow fadeInUp2 animated" data-wow-delay='.2s'>
               <i class="fas fa-chalkboard-teacher"></i>
               <h4><span class="counter">50</span></h4>
               <p>teachers</p>
            </div>
         </div>
         <div class="col-md-3">
            <div class="single-counter counter3 wow fadeInUp2 animated" data-wow-delay='.3s'>
               <i class="fas fa-people-carry"></i>
               <h4><span class="counter">20</span></h4>
               <p>staffs</p>
            </div>
         </div>
         <div class="col-md-3">
            <div class="single-counter counter4 wow fadeInUp2 animated" data-wow-delay='.4s'>
               <i class="fas fa-user-graduate"></i>
               <h4><span class="counter">7</span> K+</h4>
               <p>graduate</p>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="why-us pt-100 pb-100 wow fadeInUp2 animated" data-wow-delay='.1s'>
   <div class="container">
      <div class="row">
         <div class="col-xl-8 mx-auto text-center">
            <div class="section-title">
               <h4>Why Choose Us</h4>
               <h2>Why study with us?</h2>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-3">
            <div class="single-why">
               <i class="fas fa-play-circle"></i>
               <h4>Highly Equipped Labs</h4>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt officia soluta modi ad corrupti recusandae!</p>
            </div>
         </div>
         <div class="col-md-3">
            <div class="single-why">
               <i class="fas fa-play-circle"></i>
               <h4>Curricular Activities</h4>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt officia soluta modi ad corrupti recusandae!</p>
            </div>
         </div>
         <div class="col-md-3">
            <div class="single-why">
               <i class="fas fa-play-circle"></i>
               <h4>Rich Library</h4>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt officia soluta modi ad corrupti recusandae!</p>
            </div>
         </div>
         <div class="col-md-3">
            <div class="single-why">
               <i class="fas fa-play-circle"></i>
               <h4>Qualified Teachers</h4>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt officia soluta modi ad corrupti recusandae!</p>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="video-area text-center pt-100 pb-100 wow fadeInUp2 animated" data-wow-delay='.1s'>
   <div class="container">
      <div class="row">
         <div class="col-xl-8 mx-auto">
            <a class="video-play-btn" href="https://www.youtube.com/embed/Wimkqo8gDZ0"><i class="fas fa-play-circle"></i></a>					
            <h4>Watch Campus Life Video Tour</h4>
            <p>we believe everyone should have the to create progress through technology and develop the skills of tomorrow. assessments, learning</p>
         </div>
      </div>
   </div>
</section>
<section class="events-area pt-100 pb-100 wow fadeInUp2 animated" data-wow-delay='.1s'>
   <div class="container">
      <div class="row align-items-center">
         <div class="col-md-4">
            <div class="title-event">
               <h4>Upcoming Events</h4>
               <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde quae harum dolorum eos deserunt ducimus enim totam delectus dignissimos quibusdam.</p>
            </div>
         </div>
         <div class="col-md-8">
            <div class="row">
            <?php
                        $args = array(  
                            'post_type' => 'events',
                            'post_status' => 'publish',
                            'orderby' => 'date', 
                        );

                        $loop = new WP_Query( $args ); 
                            
                        while ( $loop->have_posts() ) : $loop->the_post(); 
                    ?>
                    
               <div class="col-md-6">
                  <div class="single-event">
                     <div class="event-img" style="background-image:url('<?php the_post_thumbnail_url();?>"></div>
                     <div class="event-box">
                        <div class="event-date">
                           <p><?php echo get_the_date();?></p>
                        </div>
                        <div class="event-content">
                           <h4><?php the_title();?></h4>
                           <a href="<?php the_permalink();?>">view details</a>
                        </div>
                     </div>
                  </div>
               </div>
                            <?php
                        endwhile;

                        wp_reset_postdata(); 
                    ?>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="testimonilas-area black-bg pt-100 pb-100" id="testimonials wow fadeInUp2 animated" data-wow-delay='.1s'>
   <div class="container">
      <div class="row">
         <div class="col-xl-8 mx-auto text-center">
            <div class="section-title">
               <h4>review from guardians</h4>
               <h2>what guardians say</h2>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-xl-12">
            <div class="testimonilas-area testimonial owl-carousel">

            <?php
                        $args = array(  
                            'post_type' => 'testimonials',
                            'post_status' => 'publish',
                        );

                        $loop = new WP_Query( $args ); 
                            
                        while ( $loop->have_posts() ) : $loop->the_post(); 
                        $client_image = get_field('client_image');
                        $client_designation = get_field('client_designation');
                        $client_speech = get_field('client_speech');
                    ?>
                    
                  <div class="single-testimonial">
                     <i class="fas fa-quote-left"></i>
                     <p><?php echo $client_speech;?></p>
                     <div class="authro-info">
                        <h4><img src="<?php echo $client_image['url'];?>" alt="<?php the_title();?>"><?php the_title();?> <span><?php echo $client_designation;?></span></h4>
                     </div>
                  </div>
                            <?php
                        endwhile;

                        wp_reset_postdata(); 
                    ?>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="blog-area pt-100 pb-100" id="blog wow fadeInUp2 animated" data-wow-delay='.1s'>
   <div class="container">
      <div class="row">
         <div class="col-xl-8 mx-auto text-center">
            <div class="section-title">
               <h4>review from clients</h4>
               <h2>latest news</h2>
            </div>
         </div>
      </div>
      <div class="row">
      <?php
                        $args = array(  
                            'post_type' => 'post',
                            'post_status' => 'publish',
                        );

                        $loop = new WP_Query( $args ); 
                            
                        while ( $loop->have_posts() ) : $loop->the_post(); 
                    ?>
                    
                    <div class="col-xl-4">
            <div class="single-blog">
               <div class="blog-img" style="background-image:url('<?php the_post_thumbnail_url();?>')">
                  
               </div>
               <div class="blog-content">
                  <h4><?php the_title();?></h4>
                  <?php the_content();?>
                  <a href="<?php the_permalink();?>">read more <i class="fas fa-long-arrow-alt-right"></i></a>
               </div>
            </div>
         </div>
                            <?php
                        endwhile;

                        wp_reset_postdata(); 
                    ?>

         
      </div>
   </div>
</section>
<?php get_footer();?>

