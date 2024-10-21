<?php
   /*
   Template Name: Home
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
                        <h4>মোঃ নিয়াজ উদ্দিন <span>অধ্যক্ষ (ভারপ্রাপ্ত) </span><span>বড়লেখা সরকারি ডিগ্রি কলেজ, বড়লেখা। </span></h4>
                     </div>
                     <p>সিলেট বিভাগের মৌলভীবাজার জেলার প্রান্তিক জনপদ বড়লেখা উপজেলা। এশিয়ার বৃহত্তম হাওর হাকালুকি,পাথারিয়া বনাঞ্চল,বাংলাদেশের প্রথম প্রাকৃতিক জলপ্রপাত মাধবকুণ্ড  এখানে অবস্থিত। এক সময় অবিভক্ত এই বড়লেখার যোগাযোগ ব্যবস্থা ছিলো অত্যন্ত সেকেলে।</p>
                     <p>যোগাযোগ সমস্যার কারণে এ অঞ্চলের শিক্ষার্থীরা বিশেষ করে সিংহভাগ ছাত্রীরা বাইরে কোথাও গিয়ে উচ্চশিক্ষা অর্জনের স্বপ্ন দেখতে পারতো না।</p>
                     <p>সীমান্তবর্তী এ জনপদের তৎকালীন রাজনীতিক, শিক্ষানুরাগী এবং সমাজসেবী ব্যক্তিবর্গ এলাকায় একটি কলেজ ( সহশিক্ষা)  স্থাপনের স্বপ্ন লালন করছিলেন। পরবর্তীতে তৎকালীন রাষ্ট্রপ্রধানের ঘোষিত দশ লক্ষ টাকা অনুদানের মাধ্যমে ১৯৮৬ সালের ১০ জুলাই কলেজ স্থাপনের উদ্যোগ গ্রহণ করেন ওই স্বপ্নবাজ প্রজন্ম। নাম দেন ' বড়লেখা মহাবিদ্যালয় '।১৫২ জন শিক্ষার্থী নিয়ে কলেজের যাত্রা শুরু হয়।</p>                     
                     <p>এলাকার দানশীল, শিক্ষানুরাগী ব্যক্তিবর্গ মূল্যবান জমি, নগদ অর্থ প্রদান করে কলেজ প্রতিষ্ঠার সকল শর্ত পূরণে এগিয়ে এসেছিলেন। তাঁদের ঋণ অপরিশোধ্য। </p>                     
                     <p>তারপর কুমিল্লা শিক্ষাবোর্ডের অনুমতি নিয়ে উচ্চমাধ্যমিক শ্রেণিতে মানবিক,বিজ্ঞান ও ব্যবসায় শিক্ষা শাখা চালু হয়।</p>                     
                     <p>১৯৯০ সনে এ কলেজে স্নাতক (পাস) কোর্স চালু হলে কলেজের নাম হয় ' বড়লেখা ডিগ্রি কলেজ'। তখন চট্রগ্রাম বিশ্ববিদ্যালয়ের একাডেমিক স্বীকৃতি নিয়ে বি.এ, বি এস এস এবং বিবিএস গ্রুপ চালু হয়।</p>                     
                     <p>সময়ের ধারাবাহিকতায় ২০১৮ সালের ৮ আগস্ট এই প্রতিষ্ঠানটি নামেমাত্র জাতীয়করণ হয়। নাম হয় 'বড়লেখা সরকারি কলেজ'। </p>                     
                     <p>২০২৩ সালের ০১ নভেম্বর কলেজটি পূর্ণাঙ্গ সরকারি ডিগ্রি কলেজ হিসেবে প্রজ্ঞাপন হয়।  কলেজের নাম হয়ে যায় 'বড়লেখা সরকারি ডিগ্রি কলেজ।</p>                     
                     <p>শিক্ষার্থীদের বেতন এবং অন্যান্য ফিস কমে যায়। পূর্ণাঙ্গ সরকারিকরণের সকল সুযোগ সুবিধা ভোগ করছেন এই এলাকার অভিভাবকবৃন্দ, অধ্যয়নরত শিক্ষার্থীরা।</p>                     
                     <p>বর্তমানে এই কলেজে পাঠগ্রহণ করছে ২৮২২ জন শিক্ষার্থী।সুযোগ্য প্রশাসনিক নেতৃত্বে  শিক্ষক, অভিভাবক এবং শিক্ষার্থীদেরকে যথাযথভাবে মোটিভেশন করতে সক্ষম হলে 'বড়লেখা সরকারি ডিগ্রি কলেজ '  শিক্ষাক্ষেত্রে আরো সুনাম বয়ে নিয়ে আসবে বলে আমাদের প্রতীতি।</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-3">
            <div class="sidebar">
               <h4>কেনো ভর্তি হবেন?</h4>
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
               <h4>নোটিশ বোর্ড</h4>
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
               <h4>গুরুত্বপূর্ণ লিঙ্ক</h4>
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
               <h2>এখানে কেন পড়ালেখা করবেন?</h2>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-3">
            <div class="single-why">
               <i class="fas fa-play-circle"></i>
               <h4>উন্নত ল্যাবরেটরি</h4>
               <p>উন্নত প্রযুক্তিসম্পন্ন ল্যাবগুলো আধুনিক যন্ত্রপাতি ও সুরক্ষা ব্যবস্থার মাধ্যমে গবেষণা ও উদ্ভাবনের জন্য সেরা পরিবেশ প্রদান করে। এসব ল্যাবে সঠিক পরীক্ষা পরিচালনা সম্ভব হয়, যা জীববিজ্ঞান, প্রকৌশল ও চিকিৎসা ক্ষেত্রে অগ্রগতি আনে। এর ফলে নতুন প্রযুক্তি ও চিকিৎসার উন্নয়ন ঘটানো সম্ভব এবং সুযোগ সৃষ্টি হয়।</p>
            </div>
         </div>
         <div class="col-md-3">
            <div class="single-why">
               <i class="fas fa-play-circle"></i>
               <h4>পাঠ্যক্রমমূলক কার্যক্রম</h4>
               <p>পাঠ্যক্রমমূলক কার্যক্রম শিক্ষার্থীদের শিক্ষার মূল ধারার অংশ। এর মাধ্যমে শিক্ষার্থীরা পাঠ্যবইয়ের বাইরেও নানান দক্ষতা অর্জন করতে পারে, যেমন নেতৃত্ব, টিমওয়ার্ক ও সমাধানমূলক চিন্তা। এসব কার্যক্রম একাডেমিক শিক্ষার সঙ্গে সামঞ্জস্য রেখে ব্যক্তিগত ও সামাজিক উন্নয়নে সহায়ক ভূমিকা পালন করে এবং শিক্ষার্থীদের বহুমুখী বিকাশ নিশ্চিত করে।</p>
            </div>
         </div>
         <div class="col-md-3">
            <div class="single-why">
               <i class="fas fa-play-circle"></i>
               <h4>সমৃদ্ধ গ্রন্থাগার</h4>
               <p>সমৃদ্ধ গ্রন্থাগার মানেই জ্ঞান ও তথ্যের অফুরন্ত ভাণ্ডার। এখানে বিভিন্ন বিষয়ের বই, গবেষণা পত্র, ম্যাগাজিন, এবং ডিজিটাল উপকরণ পাওয়া যায়। শিক্ষার্থীরা এই গ্রন্থাগার থেকে প্রয়োজনীয় জ্ঞান আহরণ করতে পারে, যা তাদের শিক্ষাগত উন্নতি এবং গবেষণার জন্য অপরিহার্য। এটি চিন্তার পরিসর বাড়াতে সহায়ক ভূমিকা রাখে।</p>
            </div>
         </div>
         <div class="col-md-3">
            <div class="single-why">
               <i class="fas fa-play-circle"></i>
               <h4>যোগ্য শিক্ষকগণ</h4>
               <p>যোগ্য শিক্ষকগণ শিক্ষার্থীদের শিক্ষার জন্য অপরিহার্য। তারা তাদের বিষয় সম্পর্কে গভীর জ্ঞান রাখেন এবং শিক্ষাদানে দক্ষ। তাদের পেশাদারিত্ব, অভিজ্ঞতা এবং উদ্ভাবনী পদ্ধতি শিক্ষার্থীদের শিখতে উৎসাহিত করে। একজন যোগ্য শিক্ষক শুধু পাঠ্যবিষয়েই নয়, বরং ছাত্রদের মানসিক ও সামাজিক বিকাশেও গুরুত্বপূর্ণ ভূমিকা পালন করেন।</p>
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

