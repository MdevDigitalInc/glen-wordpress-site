<?php get_header(); ?>

<div>
  <section class="glen-faq-hero">
    <span>hero todo</span>
  </section>
  <section class="glen-faq-dialogue">
    <h1>FAQ</h1>
    <p>We're so thrilled that you are considering Arbour Glen! Whether you've just found out you are expecting (congratulations!) or are looking for care for your 4-year old, we are here to help make your experience as effortless as possible you.

      We like to have a personal connection with our prospective families, so please give us a call next at 519-439-3701 to confirm your request was received, and to answer any questions you may have about our centre. Speaking of questions, let's see if we can answer some for you now!
    </p>
    <a>DOWNLOAD OUR PARENT HANDBOOK</a>
<?php

global $wpdb;

$results = $wpdb->get_results ( " Select * from tblFAQ " );

  foreach ( $results as $result ) { 
    echo "<p class='bold'>$result->Question</p>";
    echo "<p>$result->Answer</p><br/>";
  } 
?>
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
    <p>1017 Adelaide Street North, London, ON</p>
  </section>
</div>

<?php get_footer(); ?>
