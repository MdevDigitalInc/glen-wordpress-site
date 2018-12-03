<?php get_header(); ?>

<div class="glen-team-page">

  <!-- Hero Section -->

  <section class="glen-team-hero">
    <div class="glen-hero-image --team" style="background-image: url(<?php bloginfo('template_url'); ?>/img/shared/boy-infant-toys.png);"></div>
    <div class="glen-hero-content">
      <div class="glen-hero-basic">
        <h1>Our Team</h1>
        <p>The heart of Arbour Glen is our exceptional team of Educators and Support Staff. Our Registered Early Childhood Educators (RECEs) make Arbour Glen the special place it is. We call it ‘The Arbour Glen difference’ and we look forward to you experiencing this when you visit.</p>
        <div class="glen-iconstrip">
          <div class="glen-iconstrip-bar"></div>
          <img class="glen-iconstrip-image" src="<?php bloginfo('template_url'); ?>/img/icons/icon-rocket.svg" alt="Image of a purple rocket" />
          <div class="glen-iconstrip-bar"></div>
        </div>
        <p>Your child’s caregivers are knowledgeable, caring, and reflective Educators who provide rich experiences and exciting environments to foster learning and development. Hugs are always plentiful, and your child will feel secure knowing that their caregivers are there to celebrate their accomplishments, help them through challenges and comfort them when needed.</p>
      </div>
    </div>
  </section>

  <!-- Balcony Section -->

  <section class="glen-team-balcony">
    balcony todo
  </section>

  <!-- MGMT Roster Section -->

  <section class="glen-mgmt-roster">
    <div class="glen-roster">
      <div class="glen-roster-head">
        <h2>Our Management Team</h2>
        <p>Our management team is here for you any time of day. Call them or drop by the administrative offices located on our third floor, but you may often find them in our classrooms as well.</p>
      </div>
      <div class="glen-roster-cards">
          <?php 
          $results = $wpdb->get_results("Select * from tblEmployees where TeamID = 1;");
          foreach ( $results as $emp )
          {
            echo "<div class='glen-roster-card'>";
            echo "<div class='glen-roster-card-image --$emp->Avatar'></div>";
            echo "<span class='--edu-name u-$emp->Avatar'>$emp->Name</span>";
            echo "<p class='--edu-title'>$emp->Title</p>";
            echo "<p class='--edu-bio'>$emp->History</p>";
            echo "<p class='--edu-quote'>\"".$emp->Quote."”</p>";
            echo "</div>";
          }
          ?>
      </div>
    </div>
  </section>

  <!-- Support Roster Section -->

  <section class="glen-support-roster">
    <div class="glen-roster">
      <div class="glen-roster-head">
        <h2>Our Support Team</h2>
        <p>It takes a dedicated group of people to make our team a success including our Supply Staff, our ECE Apprentices, our Dietary Planner and our Custodian.</p>
      </div>
      <div class="glen-roster-cards">
        <?php 
        $results = $wpdb->get_results("Select * from tblEmployees where TeamID = 2;");
        foreach ( $results as $emp )
        {
          echo "<div class='glen-roster-card'>";
          echo "<div class='glen-roster-card-image --$emp->Avatar'></div>";
          echo "<span class='--edu-name u-$emp->Avatar'>$emp->Name</span>";
          echo "<p class='--edu-title'>$emp->Title</p>";
          echo "<p class='--edu-bio'>$emp->History</p>";
          echo "<p class='--edu-quote'>\"".$emp->Quote."”</p>";
          echo "</div>";
        }
        ?>
      </div>
    </div>
  </section>

  <!-- Pre-footer Section -->

  <section class="glen-team-prefooter">
    prefooter todo
  </section>

</div>

<?php get_footer(); ?>
