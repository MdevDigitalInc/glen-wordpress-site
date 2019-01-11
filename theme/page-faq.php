<?php get_header(); ?>

<div class="glen-faq-page">

  <!-- Hero Section -->

  <section class="glen-faq-hero ">
    <div class="glen-hero-image --faq" style="background-image: url(<?php bloginfo('template_url'); ?>/img/shared/girl-on-slide.png);"></div>
  </section>

  <!-- Dialogue Section -->

  <section class="glen-faq-dialogue">
    <div class="glen-dialogue-left"><!-- questions -->
      <div class="glen-faq-desc"><!-- description -->
        <h1>FAQ</h1>
        <p>
          We're so thrilled that you are considering Arbour Glen! Whether you've just found out you are expecting (congratulations!) or are looking for care for your 4-year old, we are here to help make your experience as effortless as possible you.
        </p>
        <p>
          We like to have a personal connection with our prospective families, so please give us a call next at 519-439-3701 to confirm your request was received, and to answer any questions you may have about our centre. Speaking of questions, let's see if we can answer some for you now!
        </p>
        <a class="glen-btn --solid-pw">DOWNLOAD OUR PARENT HANDBOOK</a>
      </div><!-- /description -->
      <div class="glen-hidden-dragon">
        <div class="glen-faq-box"> <!-- box -->
          <h4>
            Finding Child Care
          </h4>
          <div class="glen-squiggle --yellow"></div>
          <p>
            So...where do you start when looking for childcare? A great place to begin is the London and Middlesex Child Care Waitlist. Here, you can learn about childcare centres in your area, create an account and also get on multiple wait lists quickly and easily, including with us. You can also access more information at Family Info, a web portal for parents, caregivers that links information on programs, services and resources in the London and Middlesex area for children.
          </p>
          <div class="glen-faq-btn">
            <a class="glen-btn --solid-wb" title="Join our waiting list" href="mailto:centre@arbourglen.ca">
              Join Our Waiting List
            </a>
          </div>
          <div class="glenbox-blue"></div>
        </div><!-- /box -->
      </div>
        <?php
        global $wpdb;
        $results = $wpdb->get_results ( " Select * from tblFAQ " );
        foreach ( $results as $result ) {
          echo "<p class='--body-faq'>$result->Question</p>";
          echo "<p>$result->Answer</p><br/>";
        }
        ?>
    </div><!-- /questions -->
    <div class="glen-dialogue-right">
      <div class="glen-faq-box"> <!-- box -->
        <h4>
          Finding Child Care
        </h4>
        <div class="glen-squiggle --yellow"></div>
        <p>
          So...where do you start when looking for childcare? A great place to begin is the London and Middlesex Child Care Waitlist. Here, you can learn about childcare centres in your area, create an account and also get on multiple wait lists quickly and easily, including with us. You can also access more information at Family Info, a web portal for parents, caregivers that links information on programs, services and resources in the London and Middlesex area for children.
        </p>
        <div class="glen-faq-btn">
          <a class="glen-btn --solid-wb" title="Join our waiting list" href="mailto:centre@arbourglen.ca">
            Join Our Waiting List
          </a>
        </div>
        <div class="glenbox-blue"></div>
      </div><!-- /box -->
    </div>
  </section>

  <!-- Balcony Section -->

  <section class="glen-faq-balcony">
    <div class="glen-balcony">
      <div class="glen-balcony-badge --faq"></div>
      <div class="glen-balcony-ledge --faq"></div>
      <div class="glen-balcony-content --sticker">
        <div class="glen-balcony-sticker">
          <h3 class="u-purple">Still have questions?</h3> 
          <p>
            Don't hesitate to get in touch any time, and we'll be pleased to help. Here are more helpful links you might want to check out.
          </p>
          <a class="glen-btn --solid-pw" href="/contact" title="Get in touch">CONTACT US</a>
          <div class="glen-contact-logos"> 
            <?php 
            $test = get_bloginfo('template_url', 'display');

            class Cimage
            {
              public $img;
              public $link;
              public $title;
              public $alt;

              function Cimage($img, $link, $title, $alt) {
                $this->img = $img;
                $this->link = $link;
                $this->title = $title;
                $this->alt = $alt;
              }
            }
            
              $contactImages = array (
                new Cimage("$test/img/logos/logo-childreach.png", "http://childreach.on.ca/", "Visit Childreach", "Childreach logo"),
                new Cimage("$test/img/logos/logo-mommy-connections.png", "https://www.mommyconnections.ca/london/", "Visit Mommy Connections", "Mommy Connections logo"),
                new Cimage("$test/img/logos/logo-childrens-museum.png", "https://www.londonchildrensmuseum.ca/", "Visit London Childen's Museum", "London Children's Museum logo"),
                new Cimage("$test/img/logos/logo-ml-health-unit.png", "https://www.healthunit.com/", "Visit Middlesex Health Unit", "Middlesex Health Unit logo"),
                new Cimage("$test/img/logos/logo-london-public-library.png", "http://www.londonpubliclibrary.ca/", "Visit London Public Library", "London Public Library logo"),
                new Cimage("$test/img/logos/logo-child-youth.png", "http://londoncyn.ca/", "Visit London Child & Youth Network", "London CHild & Youth Network logo"),
                new Cimage("$test/img/logos/log-ontario.png", "https://www.ontario.ca/page/government-ontario", "Visit Ontario Government", "Ontario Government logo")
              );

              foreach($contactImages as $img)
              echo "<a href=\"$img->link\" title=\"$img->title\"><img class=\"glen-contact-logo\" src=\"$img->img\" alt=\"$img->alt\"/></a>";
            ?>
          </div>
        </div>
      </div>
    </div>
    
  </section>

  <!-- Featured Section -->

  <section class="glen-faq-featured">
    <div class="glen-featured">
      <div class="glen-featured-text">
        <div class="glen-featured-text-object">
          <h5>Charitable Donations</h5>
          <p>
            Arbour Glen is a registered charity with the Canadian Revenue Agency. Our charitable registration number is 89611 0756 RR0001, so all of our donors receive charitable receipts. Any family or individual that donates over $150.00 will have their name engraved on a plate that will be displayed on our plaque at the back entrance-way. There are several ways you can donate:
          </p>
        </div>
      </div>
      <div class="glen-featured-glenbox --wide">
        <div class="glen-featured-glenbox-object">
          <ul>
            <li>
              Send a cheque or money order to <br>	1017 Adelaide St. N. London ON. N5Y 2M8
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
              Donate through Canada Helps <a class="glen-text-link" href="https://www.canadahelps.org" title="Visit Canada Helps">www.canadahelps.org</a>
            </li>
          </ul>
          <div class="glenbox-green"></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Bumper Section -->
  
  <section class="glen-faq-bumper">
    <hr/>
    <div class="glen-faq-bumper-content">
      <div class="glen-faq-bumper-address">
        <img class="glen-footer-icon" src="<?php bloginfo('template_url'); ?>/img/icons/icon-location.svg" alt="Image of a map pin" />
        <p class="--body-sidebar">1017 Adelaide Street North, London, ON</p>
      </div>
      <p class="--body-sidebar">Charitable Donations: 89611 0756 RR0001</p>
    </div>
  </section>
</div>

<?php get_footer(); ?>
