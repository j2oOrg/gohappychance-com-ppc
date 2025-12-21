<?php
/**
 * Front page template pulling the landing content from the static index.html.
 */
get_header();
$hero_image = get_theme_file_uri('/assets/images/herobackground02.png');

// Inline the front-page stylesheet so the hero/community view is self contained.
$inline_css_path = get_theme_file_path('/assets/css/front-page.css');
if (file_exists($inline_css_path)) {
    echo '<style id="gohappychance-inline-front-page-css">' . file_get_contents($inline_css_path) . '</style>';
}
?>

<main>
  <section class="hero" id="home">
    <div class="container hero-grid hero-grid--balanced">
      <div class="hero-copy">
        <p class="eyebrow">Licensed community raffle</p>
        <h1 class="hero-title">gohappychance Association Foundation 50/50 Raffle</h1>
        <p class="hero-sub">Community-first raffle operated under AGLC Raffle Licence #662961. Issued by Alberta Gaming, Liquor &amp; Cannabis. Winner receives 50% of ticket sales for this licensed draw.</p>

        <div class="community-band">
          <span class="pill accent"><i class="fa-solid fa-certificate"></i> AGLC Licence #662961</span>
          <span class="pill"><i class="fa-solid fa-ticket"></i> 995 tickets • $10 each</span>
          <span class="pill"><i class="fa-solid fa-calendar-day"></i> Draw: Mar 30, 2026 @ 7:00 PM MT</span>
        </div>

        <div class="countdown-panel">
          <div class="countdown-top">
            <p class="countdown-title">Countdown to the next community draw</p>
            <p class="countdown-date">March 30, 2026 at 7:00 PM MT • AGLC Raffle Licence #662961 (Operator: gohappychance Association Foundation)</p>
          </div>
          <div class="countdown-grid" id="countdown">
            <div class="count-chip">
              <span class="value" id="countdownDays">--</span>
              <small>Days</small>
            </div>
            <div class="count-chip">
              <span class="value" id="countdownHours">--</span>
              <small>Hours</small>
            </div>
            <div class="count-chip">
              <span class="value" id="countdownMinutes">--</span>
              <small>Minutes</small>
            </div>
            <div class="count-chip">
              <span class="value" id="countdownSeconds">--</span>
              <small>Seconds</small>
            </div>
          </div>
          <div class="count-progress" aria-hidden="true">
            <div class="count-progress-fill" id="countdownProgress"></div>
          </div>
          <p class="countdown-note">We post milestones every Friday and share pot updates in the community board below.</p>
        </div>

        <div class="hero-cta">
          <a href="#" class="btn primary" data-signup-btn>Join the draw</a>
          <a href="#community" class="btn ghost">See the community board</a>
        </div>
        <p class="hero-sub" style="font-size:0.95rem; margin-top:0.4rem;">Must be 18+ and physically located in Alberta at time of purchase.</p>
        <p class="hero-sub" style="margin-top:0.8rem;">Operator / Licensee: gohappychance Association Foundation • Authority: Alberta Gaming, Liquor &amp; Cannabis (AGLC). gohappychance is the campaign/brand name only and is not the operator.</p>
      </div>

      <div class="hero-visual">
        <div class="halo"></div>
        <img src="<?php echo esc_url( $hero_image ); ?>" alt="gohappychance Raffle hero">
        <span class="hero-label"><i class="fa-solid fa-circle-info"></i> Real cash prizes</span>
        <div class="hero-card">
          <p class="hero-card-title">Community highlights</p>
          <ul class="hero-card-list">
            <li><i class="fa-solid fa-heart"></i> 420+ neighbours following the weekly pot updates</li>
            <li><i class="fa-solid fa-people-group"></i> Volunteer team moderates draws &amp; posts results</li>
            <li><i class="fa-solid fa-scale-balanced"></i> Compliance anchored: AGLC Raffle Licence #662961</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="community-hub" id="community">
    <div class="container">
      <div class="section-head">
        <p class="section-eyebrow">Community board</p>
        <h2 class="section-title">Pot updates, neighbours, and licence info in one place</h2>
        <p class="section-sub">A gentle feed that keeps everyone aligned on the licensed draw, the pot, and how funds circle back to the community.</p>
      </div>
      <div class="community-grid">
        <article class="community-card">
          <p class="tag">Pot update</p>
          <h3>$3,780 current pot</h3>
          <p>50% to the winner, 50% to local programs. Updated weekly leading up to the March 30, 2026 draw.</p>
          <p class="muted-line"><i class="fa-solid fa-clock"></i> Next refresh: Friday 2 PM MT</p>
        </article>
        <article class="community-card">
          <p class="tag">Neighbours</p>
          <h3>Shout-outs &amp; stewardship</h3>
          <ul class="community-list">
            <li><i class="fa-solid fa-leaf"></i> 18 volunteers hosting Q&amp;A each Wednesday</li>
            <li><i class="fa-solid fa-hands-holding-circle"></i> 4 community captains verifying draw steps</li>
            <li><i class="fa-solid fa-bullhorn"></i> Weekly recap posted after pot updates</li>
          </ul>
        </article>
        <article class="community-card licence-card">
          <p class="tag">Licence &amp; rules</p>
          <p>Operator / Licensee: gohappychance Association Foundation • AGLC Raffle Licence #662961 • Authority: Alberta Gaming, Liquor &amp; Cannabis (AGLC).</p>
          <p>995 tickets • $10 each • Draw: March 30, 2026 at 7:00 PM MT • One winner receives 50% of sales.</p>
          <a class="btn ghost" href="#responsible">See compliance details</a>
        </article>
      </div>
    </div>
  </section>

  <section class="packages" id="packages">
    <div class="container">
      <div class="section-head">
        <p class="section-eyebrow">Tickets &amp; pot snapshot</p>
        <h2 class="section-title">Limited tickets. One licensed 50/50 prize.</h2>
        <p class="section-sub">Simple to enter, transparent to follow, and grounded in the AGLC licence.</p>
      </div>

      <div class="grand-prize-wrap">
        <article class="grand-card">
          <div class="info-block">
            <p class="section-sub info-heading">Ticket details (as licensed)</p>
            <ul class="info-list">
              <li>Ticket price: $10.00 per ticket</li>
              <li>Total tickets available: 995</li>
              <li>Prize: 50% of total ticket sales</li>
              <li>Draw date: March 30, 2026</li>
              <li>Draw location: Fort Edmonton Park, Edmonton</li>
            </ul>
          </div>
          <h3>Prize overview</h3>
          <p class="value">$3,780 value</p>
          <p class="sub">Only 995 tickets • $10 each • AGLC Raffle Licence #662961</p>
          <p class="pitch">Think flagship gear, premium apparel, and field-ready accessories curated for a single lucky winner.</p>
          <div class="cta-stack">
            <a href="#" class="btn fun" data-signup-btn><i class="fa-solid fa-bolt"></i> Get Tickets Now</a>
            <span class="pill accent"><i class="fa-solid fa-clock"></i> Draw: Mar 30, 2026</span>
          </div>
        </article>

        <div class="stat-grid">
          <div class="stat-box">
            <p class="label">Ticket pool</p>
            <p class="num">995</p>
            <p class="hint">Maximum odds: 1 in 995</p>
          </div>
          <div class="stat-box">
            <p class="label">Price per ticket</p>
            <p class="num">$10</p>
            <p class="hint">First-come, first-served</p>
          </div>
          <div class="stat-box">
            <p class="label">Winner count</p>
            <p class="num">1</p>
            <p class="hint">One grand prize package</p>
          </div>
          <div class="stat-box">
            <p class="label">Draw date</p>
            <p class="num">Mar 30</p>
            <p class="hint">2026 • Licensed &amp; posted</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="packages" id="how">
    <div class="container">
      <div class="section-head">
        <p class="section-eyebrow">How it works</p>
        <h2 class="section-title">Simple raffle flow</h2>
        <p class="section-sub">Purchase, wait for the draw, and support conservation.</p>
      </div>

      <div class="package-grid">
        <article class="package-card">
          <div class="package-name">1. Purchase tickets</div>
          <p class="package-note">Only 995 tickets available, $10 each.</p>
        </article>
        <article class="package-card">
          <div class="package-name">2. Wait for draw</div>
          <p class="package-note">Official draw on March 30, 2026.</p>
        </article>
        <article class="package-card">
          <div class="package-name">3. Win the prize</div>
          <p class="package-note">One winner receives the $3,780 package.</p>
        </article>
        <article class="package-card">
          <div class="package-name">4. Support conservation</div>
          <p class="package-note">Proceeds align with wildlife and outdoor heritage causes.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="packages" id="impact">
    <div class="container">
      <div class="section-head">
        <p class="section-eyebrow">Your impact</p>
        <h2 class="section-title">Community-centred support</h2>
        <p class="section-sub">Every purchase backs wildlife and outdoor heritage, with community voices guiding how funds are shared.</p>
      </div>
      <div class="package-grid">
        <article class="package-card">
          <p class="package-note">
            Every ticket helps fund wildlife and habitat initiatives similar to the Pheasant Release Program. Together we keep ecosystems healthy and outdoor experiences thriving.
          </p>
          <a href="<?php echo esc_url( home_url('/faq') ); ?>" class="btn primary">Ask about the mission</a>
        </article>
        <article class="package-card package-card-light">
          <p class="section-eyebrow" style="margin-bottom:0.35rem;">Operator</p>
          <p class="section-sub" style="margin:0;">Operated by:<br>
          gohappychance Association Foundation<br>
          9111-39 Avenue, Edmonton, AB T6E5Y2<br>
          Licensed charitable organization in Alberta</p>
          <p class="section-sub" style="margin:0.6rem 0 0;">Advertising and marketing services provided by:<br>
          DigiBox Ltd (authorized agent)</p>
        </article>
      </div>
    </div>
  </section>

  <section class="packages" id="winners">
    <div class="container">
      <div class="section-head">
        <p class="section-eyebrow">Winners</p>
        <h2 class="section-title">Winners announced after the draw</h2>
        <p class="section-sub">Check back after March 30, 2026 for the official winner announcement.</p>
      </div>
      <div class="package-grid">
        <article class="package-card">
          <p class="package-note">We’ll post the verified winner and prize claim details here once the draw is completed.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="regulatory" id="responsible">
    <div class="container">
      <div class="section-head">
        <p class="section-eyebrow">Compliance</p>
        <h2 class="section-title">Licensed &amp; regulated</h2>
        <p class="section-sub">Operator / Licensee: gohappychance Association Foundation • AGLC Raffle Licence #662961 • Authority: Alberta Gaming, Liquor &amp; Cannabis (AGLC). gohappychance is the campaign/brand name only.</p>
      </div>

      <div class="rg-grid">
        <div class="rg-card">
          <div class="rg-icon"><i class="fa-solid fa-shield-halved"></i></div>
          <h3>Licence &amp; limits</h3>
          <p>Operator / Licensee: gohappychance Association Foundation • AGLC Raffle Licence #662961 • 995 tickets • $10 each • Draw: Mar 30, 2026 • One $3,780 winner.</p>
          <span class="rg-badge-pill"><i class="fa-solid fa-scale-balanced"></i> Posted odds: max 1 in 995</span>
        </div>
        <div class="rg-card">
          <div class="rg-icon"><i class="fa-solid fa-heart-pulse"></i></div>
          <h3>Participate responsibly</h3>
          <p>18+ only. Set limits, keep raffle participation balanced, and take breaks. We promote balance over impulse.</p>
          <a class="rg-cta" href="https://www.albertahealthservices.ca" target="_blank" rel="noopener noreferrer"><i class="fa-solid fa-arrow-up-right-from-square"></i> Responsible participation resources</a>
        </div>
        <div class="rg-card">
          <div class="rg-icon"><i class="fa-solid fa-hands-holding-child"></i></div>
          <h3>Need support?</h3>
          <p>Helpline: <a href="tel:18663322322" class="link-accent">1-866-332-2322</a> • Alberta Health Services Addiction Helpline.</p>
          <ul class="res-links">
            <li><a href="https://gamesenseab.ca/" target="_blank" rel="noopener noreferrer">GameSense Alberta</a></li>
            <li><a href="https://www.gambleaware.org/" target="_blank" rel="noopener noreferrer">BeGambleAware</a></li>
            <li><a href="https://selfexclusion.ca/" target="_blank" rel="noopener noreferrer">Self-Exclusion Program</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="contact" id="contact">
    <div class="container">
      <div class="section-head">
        <p class="section-eyebrow">Contact</p>
        <h2 class="section-title">We’re here to help</h2>
        <p class="section-sub">Questions about tickets, rules, or responsible gaming? Reach out anytime.</p>
      </div>
      <div class="contact-grid">
        <div class="contact-card">
          <h3>Message us</h3>
          <p>Email: <a href="mailto:support@gohappychance.com">support@gohappychance.com</a></p>
          <p>Hours: Mon–Fri, 9:00 AM – 5:00 PM (MT)</p>
          <p>Response time: within 1–2 business days</p>
        </div>
        <div class="contact-form-card">
          <h3>Need assistance?</h3>
          <p>Visit the <a href="<?php echo esc_url( home_url('/faq') ); ?>">FAQ</a> or <a href="<?php echo esc_url( home_url('/rules') ); ?>">Rules</a> for quick answers.</p>
          <div class="form-status" aria-live="polite">Prefer a call? Email us to schedule.</div>
        </div>
      </div>
    </div>
  </section>
</main>

<div class="sticky-ribbon">
  <div class="item"><i class="fa-solid fa-circle-exclamation"></i> 18+</div>
  <div class="item"><i class="fa-solid fa-shield"></i> Responsible Gaming</div>
  <div class="item"><i class="fa-solid fa-ticket"></i> AGLC Licence #662961</div>
  <div class="item"><i class="fa-solid fa-bolt"></i> Fast Checkout</div>
</div>

<div class="gohappychance-modal" id="signupModal" aria-hidden="true">
  <div class="modal-card">
    <button class="modal-close" type="button" data-modal-close aria-label="Close form"><i class="fa-solid fa-xmark"></i></button>
    <h3>Ticket Purchase Inquiry</h3>
    <p>Send us a message about buying raffle tickets. We’ll respond with next steps.</p>
    <form id="signupForm" class="modal-form">
      <input type="text" id="signupName" placeholder="Full name" required>
      <input type="email" id="signupEmail" placeholder="Email address" required>
      <input type="tel" id="signupPhone" placeholder="Phone number" required>
      <textarea id="signupMessage" placeholder="Your message or ticket request" rows="3" required></textarea>
      <button type="submit" class="btn primary">Send message</button>
      <p id="signupStatus" class="modal-status" aria-live="polite"></p>
    </form>
  </div>
</div>

<div class="sticky-footer">
  <div class="container">
    <div class="badge"><span class="age-number">18+</span></div>
    <div class="badge"><i class="fa-solid fa-shield-check"></i> Responsible Gaming</div>
    <div class="badge"><i class="fa-solid fa-certificate"></i> AGLC Licence #662961</div>
  </div>
</div>

<?php get_footer(); ?>
