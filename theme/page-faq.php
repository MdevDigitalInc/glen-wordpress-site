<?php get_header(); ?>

<div class="glen-faq-page">
  <section class="glen-faq-hero">
    <span>hero todo</span>
  </section>
  <section class="glen-faq-dialogue">
  
    <div class="glen-faq-left"><!-- questions -->
      <div class="glen-faq-desc"><!-- description -->
        <h1>FAQ</h1>
        <p>
        We're so thrilled that you are considering Arbour Glen! Whether you've just found out you are expecting (congratulations!) or are looking for care for your 4-year old, we are here to help make your experience as effortless as possible you.
<br/><br/>
        We like to have a personal connection with our prospective families, so please give us a call next at 519-439-3701 to confirm your request was received, and to answer any questions you may have about our centre. Speaking of questions, let's see if we can answer some for you now!
        </p>
        <div class="glen-faq-btn">
          <a class=" glen-btn --solid-pw">DOWNLOAD OUR PARENT HANDBOOK</a>
        </div>
      </div><!-- /description -->
        <?php
        global $wpdb;
        $results = $wpdb->get_results ( " Select * from tblFAQ " );
        foreach ( $results as $result ) {
          echo "<p class='--body-faq'>$result->Question</p>";
          echo "<p>$result->Answer</p><br/>";
        }
        // global $post;
        // echo $post->post_name;
        // echo get_mdev_meta_tags($post->post_name);
        ?>
    </div><!-- /questions -->
    
    <div class="glen-faq-column">
      <div class="glen-faq-box"> <!-- box -->
        <h4>
        Finding Child Care
        </h4>
        <div class="glen-squiggle --yellow"></div>
        <p>
        So...where do you start when looking for childcare? A great place to begin is the London and Middlesex Child Care Waitlist. Here, you can learn about childcare centres in your area, create an account and also get on multiple wait lists quickly and easily, including with us. You can also access more information at Family Info, a web portal for parents, caregivers that links information on programs, services and resources in the London and Middlesex area for children.
        </p>
        <div class="glen-faq-btn">
        <a class="glen-btn --solid-wb" >
        Join Our Waiting List
        </a>
        </div>
        <div class="glenbox-blue"></div>
      </div>
    </div><!-- /box -->

  </section>
  <section class="glen-faq-contact">
    <h3>STILL HAVE QUETIONS?</h3> 
    <p>Don't hesitate to get in touch any time, and we'll be pleased to help. Here are more helpful links you might want to check out.</p>
    <div class="glen-faq-btn">
      <a class="glen-btn --solid-pw" >CONTACT US</a>
    </div>
    <div class="temp"></div>
  </section>
  <section class="glen-faq-featured">
    <div class="glen-featured">
      <div class="glen-featured-text-object">
        <h3>Charitable Donations</h3>
        <p>
          Arbour Glen is a registered charity with the Canadian Revenue Agency. Our charitable registration number is 89611 0756 RR0001, so all of our donors receive charitable receipts. Any family or individual that donates over $150.00 will have their name engraved on a plate that will be displayed on our plaque at the back entrance-way. There are several ways you can donate:
        </p>
      </div>
      <div class="glen-featured-glenbox-object">
        <ul>
          <li>
            Send a cheque or money order to 	1017 Adelaide St. N. London ON. N5Y 2M8
          </li>
          <li>
            Stop by our office to do an Interac transaction
          </li>
          <li>
            Send an email transfer to centre@arbourglen.ca
          </li>
          <li>
            Donate through payroll via the United Way Workplace<br/> 			Donation Program (ask your employer)
          </li>
          <li>
            Donate through Canada Helps www.canadahelps.org
          </li>
        </ul>
        <div class="glenbox-green"></div>
      </div>
    </div>
  </section>
  <section class="glen-faq-bumper">
    <hr/>
    <p>1017 Adelaide Street North, London, ON</p>
    <p>Charitable Donations: 89611 0756 RR0001</p>
  </section>
</div>

<?php get_footer(); ?>
