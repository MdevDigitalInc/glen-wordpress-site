<nav class="glen-main-navigation">

  <!-- Rainbow Bar Section of Main Nav -->

  <div class="glen-rainbow-bar">
    <div class="glen-rainbow-bar-segment --yellow"></div>
    <div class="glen-rainbow-bar-segment --green"></div>
    <div class="glen-rainbow-bar-segment --blue"></div>
    <div class="glen-rainbow-bar-segment --purple"></div>
    <div class="glen-rainbow-bar-segment --red"></div>
    <div class="glen-rainbow-bar-segment --orange"></div>
    <div class="glen-rainbow-bar-segment --yellow"></div>
    <div class="glen-rainbow-bar-segment --green"></div>
    <div class="glen-rainbow-bar-segment --blue"></div>
    <div class="glen-rainbow-bar-segment --purple"></div>
    <div class="glen-rainbow-bar-segment --red"></div>
    <div class="glen-rainbow-bar-segment --orange"></div>
  </div>

  <div class="glen-main-navigation-content">
    <div class="glen-main-navigation-logo">
      <a href="/" title="Arbour Glen Home"></a>
    </div>
    <div class="glen-main-navigation-links">
      <div class="glen-main-navigation-link --dropdown --med">
        <span class="glen-main-navigation-link-label">about us&nbsp;<i class="fas fa-angle-down"></i></span>
        <div class="glen-arrow-down"></div>
        <div class="glen-main-navigation-dropdown">
          <div class="glen-main-navigation-dropdown-links">
            <a href="/welcome" title="Welcome!">Welcome</a>
            <a href="/our-vision" title="Learn more!">Our Vision</a>
            <a href="/our-team" title="Meet our team!">Our Team</a>
          </div>
        </div>
      </div>
      <div class="glen-main-navigation-link --dropdown --largo">
        <span class="glen-main-navigation-link-label">our programs&nbsp;<i class="fas fa-angle-down"></i></span>
        <div class="glen-arrow-down"></div>
        <div class="glen-main-navigation-dropdown">
          <div class="glen-main-navigation-dropdown-links">
            <a href="/infants-program" title="Learn more about our infants program">Infants</a>
            <a href="/toddlers-program" title="Learn more about our toddlers program">Toddlers</a>
            <a href="/preschoolers-program" title="Learn more about our preschoolers program">Preschoolers</a>
          </div>
        </div>
      </div>
      <div class="glen-main-navigation-link --med">
        <a class="glen-main-navigation-link-label" href="/our-menus" title="Read our menus!">our menus</a>
      </div>
      <div class="glen-main-navigation-link --smol">
        <a class="glen-main-navigation-link-label" href="/faq" title="Frequently Asked Questions">faq</a>
      </div>
      <div class="glen-main-navigation-link --largossa">
      <?php 
        $query = "select FlagStringValue from tblSiteConfig where ID = 2";
        $results = $wpdb->get_results($query);
        $filePath = get_bloginfo('template_url', 'display') . $results[0]->FlagStringValue;
      ?>
      <a class="glen-main-navigation-link-label" href="<?php echo $filePath; ?>" target="_blank" title="Download our Handbook">parent handbook&nbsp;&nbsp;<i class="fas fa-file-download"></i></a><!-- http://arbourglen.ca/wp-content/uploads/2019/01/PARENT-HANDBOOK-PDF-Current-Oct.-16-2018-.pdf -->
      </div>
      <div class="glen-main-navigation-link">
        <a class="glen-main-navigation-link-label" href="/contact" title="Visit our Contact page">get in touch</a>
      </div>
    </div>
    <div class="glen-main-navigation-socials">
      <a class="fab fa-facebook" href="https://www.facebook.com/Arbour-Glen-Day-Nursery-215530255204704/" title="Visit our Facebook page"></a>
      <a class="fab fa-instagram" href="https://www.instagram.com/arbourglendaynursery/" title="Visit our Instagram"></a>
    </div>
    <div class="glen-main-navigation-hamburger" onclick="toggleMobileNav()">
      <i class="fas fa-bars"></i>
    </div>
  </div>
  <div class="glen-crocodilo"></div>

  <!-- Mobile Nav -->

  <div class="glen-mobile-navigation --hidden">
  <!-- Mobile Nav Head -->
  <div class="glen-mobile-navigation-head">
    <div class="glen-rainbow-bar --mobile">
      <div class="glen-rainbow-bar-segment --yellow"></div>
      <div class="glen-rainbow-bar-segment --green"></div>
      <div class="glen-rainbow-bar-segment --blue"></div>
      <div class="glen-rainbow-bar-segment --purple"></div>
      <div class="glen-rainbow-bar-segment --red"></div>
      <div class="glen-rainbow-bar-segment --orange"></div>
      <div class="glen-rainbow-bar-segment --yellow"></div>
      <div class="glen-rainbow-bar-segment --green"></div>
      <div class="glen-rainbow-bar-segment --blue"></div>
      <div class="glen-rainbow-bar-segment --purple"></div>
      <div class="glen-rainbow-bar-segment --red"></div>
      <div class="glen-rainbow-bar-segment --orange"></div>
    </div>
    <div class="glen-mobile-navigation-head-content">
      <div class="glen-mobile-navigation-logo">
        <a href="/" title="Arbour Glen Day Nursery"></a>
      </div>
      <div class="glen-mobile-navigation-button" onclick="closeMobileNav()">
        <i class="fas fa-times"></i>
      </div>
    </div>
    <div class="glen-crocodilo"></div>
  </div>
  <!-- Mobile Nav Content -->
  <div class="glen-mobile-navigation-content">
    <div class="glen-mobile-accordian">
      <!-- Accordian Item #1 -->
      <div class="glen-mobile-accordian-item">
        <div class="glen-accordian-link" onclick="toggleAccordianChildren(0,0)">
          <span class="glen-accordian-link-label">ABOUT US&nbsp;<i class="fas fa-angle-down"></i><i class="fas fa-angle-up"></i></span>
        </div>
        <div class="glen-accordian-hidden --collapse">
          <div class="glen-accordian-link">
            <a class="glen-accordian-link-label" href="/welcome" title="todo">Welcome</a>
          </div>
          <div class="glen-accordian-link">
            <a class="glen-accordian-link-label" href="/our-vision" title="todo">Our Vision</a>
          </div>
          <div class="glen-accordian-link">
            <a class="glen-accordian-link-label" href="/our-team" title="todo">Our Team</a>
          </div>
        </div>
      </div>
      <!-- Accordian Item #2 -->
      <div class="glen-mobile-accordian-item">
        <div class="glen-accordian-link" onclick="toggleAccordianChildren(4,1)">
          <span class="glen-accordian-link-label">OUR PROGRAMS&nbsp;<i class="fas fa-angle-down"></i><i class="fas fa-angle-up"></i></span>
        </div>
        <div class="glen-accordian-hidden --collapse">
          <div class="glen-accordian-link">
            <a class="glen-accordian-link-label" href="/infants-program" title="todo">Infants</a>
          </div>
          <div class="glen-accordian-link">
            <a class="glen-accordian-link-label" href="/toddlers-program" title="todo">Toddlers</a>
          </div>
          <div class="glen-accordian-link">
            <a class="glen-accordian-link-label" href="/preschoolers-program" title="todo">Preschoolers</a>
          </div>
        </div>
      </div>
      <!-- Accordian Item #3 -->
      <div class="glen-mobile-accordian-item">
        <div class="glen-accordian-link">
          <a class="glen-accordian-link-label" href="/our-menus" title="todo">OUR MENUS</a>
        </div>
      </div>
      <!-- Accordian Item #4 -->
      <div class="glen-mobile-accordian-item">
        <div class="glen-accordian-link">
          <a class="glen-accordian-link-label" href="/faq" title="todo">FAQ</a>
        </div>
      </div>
      <!-- Accordian Item #4 -->
      <div class="glen-mobile-accordian-item">
        <div class="glen-accordian-link">
          <?php 
            $query = "select FlagStringValue from tblSiteConfig where ID = 2";
            $results = $wpdb->get_results($query);
            $filePath = get_bloginfo('template_url', 'display') . $results[0]->FlagStringValue;
          ?>
          <a class="glen-accordian-link-label" href="<?php echo $filePath; ?>" target="_blank" title="todo">PARENT HANDBOOK&nbsp;&nbsp;<i class="fas fa-file-download"></i></a>
        </div>
      </div>
      <!-- Accordian Item #4 -->
      <div class="glen-mobile-accordian-item">
        <div class="glen-accordian-link">
          <a class="glen-accordian-link-label" href="/contact" title="todo">GET IN TOUCH</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Mobile Nav Footer -->
  <div class="glen-mobile-navigation-footer">
    <div class="glen-rainbow-bar">
      <div class="glen-rainbow-bar-segment --yellow"></div>
      <div class="glen-rainbow-bar-segment --green"></div>
      <div class="glen-rainbow-bar-segment --blue"></div>
      <div class="glen-rainbow-bar-segment --purple"></div>
      <div class="glen-rainbow-bar-segment --red"></div>
      <div class="glen-rainbow-bar-segment --orange"></div>
      <div class="glen-rainbow-bar-segment --yellow"></div>
      <div class="glen-rainbow-bar-segment --green"></div>
      <div class="glen-rainbow-bar-segment --blue"></div>
      <div class="glen-rainbow-bar-segment --purple"></div>
      <div class="glen-rainbow-bar-segment --red"></div>
      <div class="glen-rainbow-bar-segment --orange"></div>
    </div>
    <div class="glen-mobile-navigation-footer-content">
      <span class="glen-mobile-navigation-address">1017 adelaide street north,<br>london, on, n5y 2m8</span>
      <span class="glen-mobile-navigation-phone">519.439.3701</span>
      <div class="glen-mobile-navigation-socials">
        <a class="fab fa-facebook" href="https://www.facebook.com/Arbour-Glen-Day-Nursery-215530255204704/" title="Visit our Facebook page"></a>
        <a class="fab fa-instagram" href="https://www.instagram.com/arbourglendaynursery/" title="Visit our Instagram"></a>
      </div>
    </div>
  </div>
</div>
</nav>
