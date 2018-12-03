<?php get_header(); ?>

<div class="glen-team-page">
  <div class="glen-team-hero">hero todo</div>
  <div class="glen-team-balcony">balcony todo</div>
  <div class="glen-mgmt-roster">
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
  </div>
  <div class="glen-support-roster">
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
  </div>
  <div class="glen-team-prefooter">prefooter todo</div>
</div>

<?php get_footer(); ?>
