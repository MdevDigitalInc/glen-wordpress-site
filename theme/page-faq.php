<?php get_header(); ?>

<div class="glen-faq-page">
  <section class="glen-faq-hero">
    <span>hero todo</span>
  </section>
  <section class="glen-faq-dialogue">
  
    <div class="glen-faq-left"><!-- questions -->
      <div class="glen-faq-desc"><!-- description -->
        <h1>FAQ</h1>
        <p>We're so thrilled that you are considering Arbour Glen! Whether you've just found out you are expecting (congratulations!) or are looking for care for your 4-year old, we are here to help make your experience as effortless as possible you.

          We like to have a personal connection with our prospective families, so please give us a call next at 519-439-3701 to confirm your request was received, and to answer any questions you may have about our centre. Speaking of questions, let's see if we can answer some for you now!
        </p>
        <a>DOWNLOAD OUR PARENT HANDBOOK</a>
      </div><!-- /description -->
  
        <?php

        global $wpdb;

        $results = $wpdb->get_results ( " Select * from tblFAQ " );

        foreach ( $results as $result ) { 
          echo "<p class='bold'>$result->Question</p>";
          echo "<p>$result->Answer</p><br/>";
        } 
        global $post;
        echo $post->post_name;
        echo get_mdev_meta_tags($post->post_name);
        ?>
    </div><!-- /questions -->

    <div class="glen-faq-box"> <!-- box -->
      <h3>
      Finding Child Care
      </h3>
      <p>
      So...where do you start when looking for childcare? A great place to begin is the London and Middlesex Child Care Waitlist. Here, you can learn about childcare centres in your area, create an account and also get on multiple wait lists quickly and easily, including with us. You can also access more information at Family Info, a web portal for parents, caregivers that links information on programs, services and resources in the London and Middlesex area for children.
      </p>
      <a>
      Join Our Waiting List
      </a>
    </div><!-- /box -->



  </section>
  <section class="glen-faq-contact">
    <h2>STILL HAVE QUETIONS? </h2> 
    <p>Don't hesitate to get in touch any time, and we'll be pleased to help. Here are more helpful links you might want to check out.</p>
    <a>CONTACT US</a>
    
  </section>
  <section class="glen-faq-featured">
    <h3>Charitable Donations</h3>
    <p>
      Arbour Glen is a registered charity with the Canadian Revenue Agency. Our charitable registration number is 89611 0756 RR0001, so all of our donors receive charitable receipts. Any family or individual that donates over $150.00 will have their name engraved on a plate that will be displayed on our plaque at the back entrance-way. There are several ways you can donate:
    </p>
  </section>
  <section class="glen-faq-bumper">
    <hr/>
    <p>1017 Adelaide Street North, London, ON</p>
  </section>
</div>

<?php get_footer(); ?>
