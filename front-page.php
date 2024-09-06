<?php get_header();?>
  <header class="header">
    <!-- Insert Main Nav -->
    <?php get_template_part('main-nav'); ?>
    <div class="header__middle">
      <h1>Pilates Journeys</h1>
      <p>Pilates that
          <nobr>brings you joy</nobr>
        <nobr>and leaves you</nobr>
        <nobr>feeling light</nobr>
      </p>
      <a class="button cta--animation" href="#classes">Schedule a Class</a>
    </div>
  </header>
  <!-- Begin About Section -->
  <h2 class="about__title">About</h2>
  <section id="about" class="about">
    <div class="about__content">
      <div class="about__text">
        <p>My Pilates journey began with a single class that introduced me to a feeling I had never experienced before—a
          workout that not only challenged me but also left me feeling energized, light, and joyful. I vividly remember
          calling my mum afterward, amazed at how my body felt. Riding my bike home felt effortless as if my movements
          were suddenly more aligned and efficient. It was at that moment I discovered the true power of Pilates.
        </p>
        <p>Driven by a deep passion for this transformative practice, I pursued certification with Polestar Pilates,
          where I had the privilege of learning under a physical therapist and doctor of osteopathy. This rigorous
          training equipped me with a form-focused approach that emphasizes alignment, breath, spine articulation, core
          control, and axial elongation—all designed to bring you the joy and lightness
          that Pilates can offer.</p>
        <p>Pilates Journeys is named with intention, reflecting the belief that everyone's journey is unique. Whether
          you’re just beginning or deepening your practice, no matter where you are in life, I am excited to be part of
          your Pilates journey. It’s not about reaching a destination but embracing a practice that enhances your
          lifestyle and well-being at any stage.
        <p>At Pilates Journeys, my mission is to support and inspire you on your path to finding joy in movement. My
          goal is for every session to leave you feeling light, balanced, and uplifted—because everyone deserves to feel
          good in their bodies. I look forward to welcoming you to our studio and sharing this
          incredible journey with
          you.</p>
      </div>
      <div class="about__img">
        <img src="<?php echo get_theme_file_uri('/resources/pj-about-me.jpg'); ?>" alt="about me photo" />
      </div>
    </div>
  </section>
  <!-- End About Section -->
  <!-- Begin pricing Section -->
  <section id="pricing" class="pricing">
    <h2 class="pricing__title">Pricing</h2>
    <div class="pricing__content">
      <div class="card">
        <div class="card-header">
          Group & Drop-in
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Drop-in <span>$20</span></li>
          <li class="list-group-item">5 class package <span>$90</span></li>
          <li class="list-group-item">10 class package <span>$160</span></li>
        </ul>
      </div>

      <div class="card">
        <div class="card-header">
          Privates
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">One Virtual <span>$70</span></li>
          <li class="list-group-item">10 virtual package <span>$600</span></li>
          <li class="list-group-item">One in Studio <span>$90</span></li>
          <li class="list-group-item">10 in Studio package <span>$800</span></li>
          <li class="list-group-item">One at your home <span>$120</span></li>
          <li class="list-group-item">10 pack at your home package <span>$1,100</span></li>
        </ul>
      </div>

      <div class="card">
        <div class="card-header">
          Monthly Membership
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Unlimited Group Classes <span>$99/Month</span></li>
          <li class="list-group-item">Unlimited Group & 2 privates <span>$250/Month</span></li>
          <li class="list-group-item">Unlimited Group & 4 privates <span>$430/Month</span></li>
        </ul>
      </div>

    </div>
  </section>
  <!-- End pricing Section -->
     <!-- Begin Classes Section -->
  <section id="classes" class="classes">
    <h2 class="classes__title">Classes</h2>
    <healcode-widget data-type="schedules" data-widget-partner="object" data-widget-id="7a21720410f6"
      data-widget-version="1"></healcode-widget>
    <!-- Mindbody Appointments widget begin -->
    <div class="mindbody-widget" data-widget-type="Appointments" data-widget-id="7a1095010f6"></div>
    <!-- <div class="classes__content">
      <details name="class-desc">
        <summary>Journey Foundations</summary>
        <p>
          Begin or deepen your Pilates adventure with this class, crafted to uncover the joy of movement and enhance
          your
          practice. Designed for beginners, as well as those looking to refine their skills, Journey Foundations
          emphasizes essential principles such as breath, axial elongation, core control, and spine articulation. No
          matter your level, you'll leave each class feeling a renewed sense of lightness through improved alignment and
          joint congruency. Welcoming all who are ready to strengthen their Pilates foundation and experience the
          transformative power of mindful movement.</p>
      </details>
      <details name="class-desc">
        <summary>Journey to Pilates Pinnacles</summary>
        <p>Elevate your Pilates practice with this intermediate to advanced class, designed for those ready to take
          their
          skills to new heights. Journey to Pilates Pinnacles integrates the core principles from Journey Foundations,
          focusing on movement integration and advanced techniques. Embrace the challenge and experience the joy of
          movement, leaving each session feeling accomplished and revitalized. Welcoming those who are comfortable with
          foundational Pilates techniques and principles.</p>
      </details>
      <details name="class-desc" open>
        <summary>Journey to Motherhood</summary>
        <p>Embrace the strength and resilience within you during pregnancy with this empowering
          Pilates class. Designed
          to
          support women through their unique journey, this class focuses on building and maintaining strength while
          celebrating the joy of movement. Expect a dynamic workout that helps you feel energized, balanced, and
          connected
          with your body. Welcoming all, especially those navigating the beautiful changes of pregnancy.</p>
      </details>
    </div> -->
  </section>
  <!-- End Classes Section -->
  <!-- Begin Blog Section -->
  <section id="blog" class="blog">
    <h2 class="blog__title">Blog</h2>
    <p class="blog__desc">Latest Blog Post.</p>
    <!-- Begin Blog Post one -->
    <div class="blog__container">
    <?php
        // Custom query that pulls 3 latest blog posts
        $latestPosts = new WP_Query(array(
          'posts_per_page' => 2
        ));

        while($latestPosts->have_posts()) {
          $latestPosts->the_post(); ?>
         <div class="blog__post">
          <div class="postimg__container">
            <a href="<?php the_permalink(); ?>" title="Link to <?php the_title(); ?>">
              <img class="post__img" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
            </a>
          </div>
          <div class="post__content">
            <span class="post__date"><?php the_time('F jS, Y'); ?> | <?php echo get_the_category_list(','); ?></span>
            <h5 class="post__title"><?php the_title(); ?></h5>
            <p class="post__desc">
              <?php echo wp_trim_words(get_the_content(), 18); ?>
            </p>
            <a class="post__readmore" href="<?php the_permalink(); ?>" title="Link to <?php the_title(); ?>">Read More</a>
          </div>
        </div>
        <?php } wp_reset_postdata(); ?>
    </div>
    <!-- End Blog Post two -->
    <div class="blog__moreblogs">
      <a href="<?php echo site_url('/blog'); ?>" class="button button--tertiary" title="Link to all the blogs">More Blogs</a>
    </div>
  </section>
  <!-- End of Blog Section -->
  <!-- Beginning of Client Feedback -->
  <section id="reviews" class="reviews">
    <h2 class="reviews__title">Client Feedback</h2>
    <div id="carouselClientReviews" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselClientReviews" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselClientReviews" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselClientReviews" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselClientReviews" data-bs-slide-to="3"
          aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselClientReviews" data-bs-slide-to="4"
          aria-label="Slide 5"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="d-block w-100">
            <p>Mascha is an amazing instructor! She pays such close attention to her students and provides much-needed
              hands-on adjustments as well as intentional instruction for every exercise. Pilates is all about breath,
              alignment, awareness, and control. Finding a studio in SD that cares about these key Pilates tenets and
              NOT "burning your muscles out to failure" is SO rare. I am thrilled to have this studio and Mascha in the
              neighborhood and will most definitely be returning for her classes in the future!</p>
          </div>
        </div>
        <div class="carousel-item">
          <div class="d-block w-100">
            <p>Today was my first time here, and Mascha was a great pilates instructor for my first time doing mat
              pilates! We got to chit-chat before the class, and one of the other ladies didn't show up, so it was
              essentially a private class! I got a lot of help with my form and breathing techniques. It was a
              challenge, but I definitely would give it a try again!</p>
          </div>
        </div>
        <div class="carousel-item">
          <div class="d-block w-100">
            <p>Cute space and great teacher! Hands-on and very knowledgeable :)</p>
          </div>
        </div>
        <div class="carousel-item">
          <div class="d-block w-100">
            <p>Mascha is very kind! She is very attentive and corrects your form for a more efficient workout.</p>
          </div>
        </div>
        <div class="carousel-item">
          <div class="d-block w-100">
            <p>Such a great class! Mascha was really attentive and helped adjust postures when needed. Studio was super
              cute, equipment available to use and some mats if you forget yours.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselClientReviews" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselClientReviews" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>
  <!-- End of Client Feedback -->
  <!-- Beginning of Contact Section -->
  <section id="contact" class="contact">
    <h2 class="contact__title">Contact</h2>
    <div class="contact__container">
      <div class="contact__info">
        <!-- contact details starts here -->
        <div class="contact__phone">
          <span class="contact__icons"><i class="fa-solid fa-phone"></i> Phone</span>
          <br>
          <a href="tel:+1(619) 693-6169">(619) 693-6169</a>
        </div>
        <div class="contact__address">
          <span class="contact__icons"><i class="fa-solid fa-location-dot"></i> Studio</span>
          <br>
          <span>
            <nobr>2970 Fifth Ave Suite 320,</nobr><br>
            <nobr>San Diego, CA 92103</nobr>
          </span>
        </div>
        <div class="contact__email">
          <span class="contact__icons"><i class="fa-solid fa-envelope"></i> Email</span>
          <br>
          <a href="mailto:info@pilatesjourneys.com">info@pilatesjourneys.com</a>
        </div>
      </div>
      <!-- contact details end here -->
      <!-- Map starts here -->
      <div id="map" class="contact__map">
        <!-- Map goes here -->
      </div>
      <!-- Map ends here -->
    </div>
  </section>
  <?php get_footer(); ?>