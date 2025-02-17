<?php get_header(); ?>
    <title>Toddler Daycare Program | Arbour Glen</title>
    <meta name="description" content="Your child will explore their growing independence and enjoy new adventures with a consistent yet flexible routine that provides the security they love.">
	</head>
	<body>

  <?php include 'navigation.php' ?>

<div class="glen-toddlers-page">

  <!-- Hero Section -->

  <section class="glen-toddlers-hero">
    <div class="glen-hero-image --toddlers" style="background-image: url(<?php bloginfo('template_url'); ?>/img/shared/asian-boy-playground.png);"></div>
    <div class="glen-hero-content --sticker">
      <div class="glen-hero-sticker">
        <h1>Toddlers</h1>
        <p>Welcome Toddlers! When your little one is about 18 months, they will transition to one of our Toddler groups. Here they will have the opportunity to explore their budding independence and enjoy some exciting new adventures.</p>
        <p>If your child was in our Infant program, we will already know a little bit about them and they will be familiar with us. Our priority is getting to know you and your child even better and developing meaningful relationships.  In our group, your little one will enjoy having a consistent yet flexible routine that gives them the security Toddlers love.</p>
        <div class="glen-iconstrip">
          <div class="glen-iconstrip-bar"></div>
          <img class="glen-iconstrip-image" src="<?php bloginfo('template_url'); ?>/img/icons/icon-letter-blocks.svg" alt="Image of lettered blocks" />
          <div class="glen-iconstrip-bar"></div>
        </div>
        <p>Our Educators observe the Toddlers to provide an environment that reflects their interests and supports their ongoing development in all areas. This is also a time when they further increase their social and emotional well-being through discovery and enquiry, playing alongside one another and starting to share and take turns. Toddlers are also about movement. Our indoor environment has room for large-motor play, but nothing compares to our wonderful outdoor space that provides further challenges. Your child will run, play, take new risks and experience new adventures. Our outdoor summer program invites them to dig in the sand beneath our shady sugar maple, splash in water play activities and have fun on the riding toys.  And of course, hugs and cuddles never go out of style!</p>
        <p>Our Educators will be there each morning to welcome you and your child and to hear about how their night was. We believe the connection with families is very important to a child’s development. We take lots of photos that document babies busy at play and use ‘Seesaw’, a digital online portfolio app, to share with you a glimpse into their time spent with us! You will receive occasional snapshots of something special they are doing, and an online portfolio of your Toddler’s ‘amazing moments’ will be compiled for you. Participation in ‘Seesaw’ is optional, so we will create paper portfolios for those who choose not to be involved. We also post ‘Learning Stories’ that share a little of what we’ve been up to, so don’t forget to check our bulletin boards and other documentation. A small note will be waiting for you at pick up time, that shares about how well your child ate and slept that day.</p>
        <a class="glen-btn --solid-pw" href="https://london.onehsn.com/" title="Join our waiting list">join our waiting list</a>
      </div>
    </div>
  </section>

  <!-- Balcony Section -->

  <section class="glen-toddlers-balcony">
    <div class="glen-balcony-view --toddlers"></div>
    <div class="glen-balcony">
      <div class="glen-balcony-badge --toddlers"></div>
      <div class="glen-balcony-ledge"></div>
      <div class="glen-balcony-content --roster">
        <div class="glen-balcony-roster --toddlers">
          <div class="glen-balcony-roster-head">
            <h4>Meet Our</h4>
            <h2>Toddler Room Educators</h2>
            <p>At Arbour Glen, we have 2 Toddler groups, each with up to 15 children between 18 months and 30 months of age. There are 5 Registered Early Childhood Educators (RECEs) and 1 ECE Apprentice between the two groups. Our Toddler teams are always tuned-in to the needs of each child in their group.  They are kind and nurturing caregivers who have the skills, experience and wisdom to work with toddlers.</p>
          </div>
          <div class="glen-balcony-roster-cards">
            <?php
            $results = $wpdb->get_results("Select * from tblEmployees where TeamID = 4;");
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

  <section class="glen-toddlers-sticker">
    <div class="glen-sticker --programs">
      <div class="glen-sticker-box">
        <h2>What our families say</h2>
        <div class="glen-squiggle --blue"></div>
          <?php
            $results = $wpdb->get_results("Select * from tblTestimony where pageId = 3;");
            foreach ( $results as $row )
            {
              echo "<p>“".$row->Text."”</p>";//When I picked up my little guy on one of his first days with Arbour Glen, Chris was singing him the ABC song, while he sat contentedly in her arms.  She said (happily!) that it was her tenth time singing it – she said she discovered in that moment, it was what gave him comfort.  It almost brought me to tears: knowing they will do anything to give him what he needed in that moment of sadness.  You really feel like your baby is the centre of their wor\ld – what more can \a mom ask for?”</p>";
              echo "<span class=\"glen-review-author\">- $row->Author</span>";
            }
          ?>
        <!-- <p>“Arbour Glen is a parent’s dream. When we were able to get a spot, we were overjoyed. A clean and positive environment staffed with the most caring professionals I have ever met and managed by impeccably wonderful people. Our daughter is in one of the toddler rooms, yet every single person in the centre knows her name, and I know in my heart that everyone one who works at Arbour Glen truly cares about every infant, toddler and pre-schooler. All parents should feel reassured and worry-free as we do.”</p>
        <span class="glen-review-author">- John Siambanopoulos</span> -->
        <div class="glenquotes --programs"></div>
        <div class="glenbox-white"></div>
      </div>
    </div>
  </section>

  <!-- Pre-footer Section -->

  <section class="glen-toddlers-prefooter">
    <div class="glen-prefooter">
      <h3>Other Programs:</h3>
      <div class="glen-prefooter-boxes">
        <a class="glen-prefooter-box --infants" style="background-image: url(<?php bloginfo('template_url'); ?>/img/prefooter/footer-infants.png);" href="/infants-program" title="Our Infants Program">
          <span class="glen-prefooter-box-title">Infants</span>
        </a>
        <a class="glen-prefooter-box --preschoolers" style="background-image: url(<?php bloginfo('template_url'); ?>/img/prefooter/footer-preschoolers.png);" href="/preschoolers-program" title="Our Preschoolers Program">
          <span class="glen-prefooter-box-title">Preschoolers</span>
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
