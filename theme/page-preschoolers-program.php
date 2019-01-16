<?php get_header(); ?>

<div class="glen-preschoolers-page">

  <!-- Hero Section -->

  <section class="glen-preschoolers-hero">
    <div class="glen-hero-image --preschoolers" style="background-image: url(<?php bloginfo('template_url'); ?>/img/shared/boy-slide.png);"></div>
    <div class="glen-hero-content --sticker">
      <div class="glen-hero-sticker">
        <h1>Preschoolers</h1>
        <p>Welcome Preschoolers! Your child will enjoy even more exciting experiences when they move up to one of our Preschool groups. It is here that children sing, dance, create, run, jump, explore, discover, and engage in imaginative and cooperative play.</p>
        <p>Our Educators co-plan an environment with their children that invites opportunities for strengthening friendships and discovering more of the world around them. The children will be challenged to their fullest learning potential and to develop skills that set a solid foundation for their future successes.</p>
        <p>Our exceptional outdoor program includes a play yard with a sand area shaded by a large maple tree. In the summer, we have a special outdoor program to take advantage of the beautiful weather with lots of fun games, activities and exploration. We pull out our pools for splashing, dig for treasures in our sand area that is shaded by a large sugar maple. Our unique and challenging climber and the large paved bike path also offers many hours of fun large-motor play.</p>
        <div class="glen-iconstrip">
          <div class="glen-iconstrip-bar"></div>
          <img class="glen-iconstrip-image" src="<?php bloginfo('template_url'); ?>/img/icons/icon-pencil-pen.svg" alt="Image of a purple rocket" />
          <div class="glen-iconstrip-bar"></div>
        </div>
        <p>Arbour Glen has strong ties in the community and one of the things we participate in is an intergenerational program with Kensington Village Retirement Home. It’s been our tradition since the early 1990’s to visit with the senior residents on a regular basis. Sometimes its hard to tell who’s having more fun, them or us!</p>
        <p>As in all rooms, our Preschool Educators spend time observing and recording your child’s learning through play. We use ‘Seesaw’, a digital online portfolio app, to share with you a glimpse into their time spent with us! You will receive occasional snapshots of something special they are doing and an online portfolio of your child’s time at Arbour Glen will be compiled. Participation in ‘Seesaw’ is optional, so we will create paper portfolios for those who choose not to partake. Learning stories and photos are posted throughout the hallways and classrooms. Don’t forget to check them out along with our ‘End-of-day’ posters to keep you ‘in the loop’!</p>
        <p>When it’s time for your child to leave for ‘big school’, they will take lasting friendships and wonderful memories of their time at Arbour Glen. But remember to come back and visit! Warm hugs will always be waiting for them.</p>
        <a class="glen-btn --solid-gw" title="Join our waiting list" href="mailto:centre@arbourglen.ca">join our mailing list</a>
      </div>
    </div>
  </section>

  <!-- Balcony Section -->

  <section class="glen-preschoolers-balcony">
    <div class="glen-balcony-view --preschoolers"></div>
    <div class="glen-balcony">
      <div class="glen-balcony-badge --preschoolers"></div>
      <div class="glen-balcony-ledge"></div>
      <div class="glen-balcony-content --roster">
        <div class="glen-balcony-roster --preschoolers">
          <div class="glen-balcony-roster-head">
            <h4>Meet our</h4>
            <h2>Preschool Room Educators</h2>
            <p>At Arbour Glen, we have 2 Preschool groups each with up to 16 children between 30 months and 4 years of age. There are 2 Registered Early Childhood Educators in each group. Our Preschool Educators are a warm and loving team of caregivers who provide an inspiring, pleasurable atmosphere for children to enjoy learning through play.</p>
          </div>
          <div class="glen-balcony-roster-cards">
          <?php 
            $results = $wpdb->get_results("Select * from tblEmployees where TeamID = 3;");
            $imgPath = get_bloginfo('template_url', 'display');
            foreach ( $results as $emp )
            {
              echo "<div class='glen-balcony-roster-card'>";
              echo "<div class='glen-roster-card-image --$emp->Avatar'>";
              echo "<img src='$imgPath$emp->avatarImage' />";
              echo "</div>";
              echo "<span class='--edu-name u-$emp->Avatar'>$emp->Name</span>";
              echo "<p class='--edu-bio'>$emp->History</p>";
              echo "<p class='--edu-quote'>\"".$emp->Quote."”</p>";
              echo "</div>";
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Sticker Section -->

  <section class="glen-preschoolers-sticker">
    <div class="glen-sticker --programs">
      <div class="glen-sticker-box">
        <h2>What our families say</h2>
        <div class="glen-squiggle --blue"></div>
        <p>“Love this place, all the ECEs have a real passion and dedication that doesn't stop. Currently we have a preschooler and an infant enrolled”</p>
        <span class="glen-review-author">- Vince V.</span>
        <p>“Our preschooler has been at Arbour Glen since she was an infant and she has thrived here. The staff are compassionate, empathetic and extremely knowledgeable.  The Preschool room has been especially amazing to further expand her skills. She’s become so confident and independent. They get to know each individual child as their own little person. I can’t recommend them enough.”</p>
        <span class="glen-review-author">- Sarah M.</span>
        <div class="glenquotes --programs"></div>
        <div class="glenbox-white"></div>
      </div>
    </div>
  </section>

  <!-- Pre-footer Section -->

  <section class="glen-preschoolers-prefooter">
    <div class="glen-prefooter">
      <h3>Other Programs:</h3>
      <div class="glen-prefooter-boxes">
        <a class="glen-prefooter-box --infants" style="background-image: url(<?php bloginfo('template_url'); ?>/img/prefooter/footer-infants.png);" href="/infants-program" title="Our Infants Program">
          <span class="glen-prefooter-box-title">Infants</span>
        </a>
        <a class="glen-prefooter-box --toddlers" style="background-image: url(<?php bloginfo('template_url'); ?>/img/prefooter/footer-toddlers.png);" href="/toddlers-program" title="Our Toddlers Program">
          <span class="glen-prefooter-box-title">Toddlers</span>
        </a>
        <a class="glen-prefooter-box --faq" style="background-image: url(<?php bloginfo('template_url'); ?>/img/prefooter/footer-faq.png);" href="/faq" title="Read our FAQs">
          <span class="glen-prefooter-box-title">FAQ</span>
        </a>
        </a>
      </div>
    </div>
  </section>

</div>

<?php get_footer(); ?>
