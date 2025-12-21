<?php
/**
 * Template Name: FAQ
 * FAQ page template.
 */
get_header();
?>

<style>
:root{
  --faq-bg:#f7f8fd;
  --faq-panel:#ffffff;
  --faq-panel-soft:#f1f4ff;
  --faq-text:#1f2435;
  --faq-muted:#606980;
  --faq-heading:#0f172a;
  --faq-accent:#7ea5ff;
  --faq-accent-2:#f7b7d7;
  --faq-border:rgba(15,23,42,0.08);
  --faq-shadow:0 14px 36px rgba(15,23,42,0.12);
  --faq-radius:18px;
  --faq-font:"Nunito","Inter",system-ui,sans-serif;
  --faq-font-display:"Quicksand","Nunito",system-ui,sans-serif;
}
.faq-shell{
  background:var(--faq-bg);
  color:var(--faq-text);
  font-family:var(--faq-font);
  padding:0 0 3rem;
}
.faq-hero{
  padding:3rem 0 1.6rem;
}
.faq-container{
  width:min(1100px, 100% - 2.6rem);
  margin:0 auto;
}
.faq-eyebrow{
  text-transform:uppercase;
  letter-spacing:2px;
  color:var(--faq-muted);
  margin:0 0 0.4rem;
  font-weight:700;
  font-size:0.9rem;
}
.faq-title{
  font-family:var(--faq-font-display);
  margin:0 0 0.35rem;
  font-size:2.6rem;
  color:var(--faq-heading);
}
.faq-sub{
  margin:0 0 0.6rem;
  color:var(--faq-muted);
  line-height:1.65;
  max-width:900px;
}
.faq-licence-bar{
  background:var(--faq-panel);
  border:1px solid var(--faq-border);
  box-shadow:var(--faq-shadow);
  border-radius:var(--faq-radius);
  padding:1rem 1.1rem;
  display:grid;
  grid-template-columns:repeat(auto-fit, minmax(220px,1fr));
  gap:0.8rem;
  margin-top:1rem;
}
.licence-chip{
  display:flex;
  align-items:flex-start;
  gap:0.45rem;
  color:var(--faq-text);
  font-weight:700;
}
.licence-chip i{color:var(--faq-accent);}
.faq-grid{
  display:grid;
  grid-template-columns:1.1fr 0.9fr;
  gap:1.2rem;
  margin:2rem 0 1.2rem;
}
.faq-card{
  background:var(--faq-panel);
  border:1px solid var(--faq-border);
  border-radius:var(--faq-radius);
  box-shadow:var(--faq-shadow);
  padding:1.2rem 1.3rem;
}
.faq-card h3{
  margin:0 0 0.35rem;
  font-size:1.15rem;
  color:var(--faq-heading);
}
.faq-card p{
  margin:0;
  color:var(--faq-muted);
  line-height:1.65;
}
.faq-list{
  display:grid;
  grid-template-columns:repeat(auto-fit, minmax(260px, 1fr));
  gap:0.9rem;
}
.faq-note{
  background:var(--faq-panel-soft);
  border:1px dashed rgba(126,165,255,0.4);
  border-radius:var(--faq-radius);
  padding:1rem 1.1rem;
  box-shadow:var(--faq-shadow);
}
.faq-note strong{color:var(--faq-heading);}
.faq-contact{
  margin-top:1.2rem;
  display:flex;
  flex-wrap:wrap;
  gap:0.6rem;
}
.faq-btn{
  display:inline-flex;
  align-items:center;
  gap:0.45rem;
  padding:0.78rem 1.4rem;
  border-radius:12px;
  border:1px solid transparent;
  font-weight:800;
  text-decoration:none;
  background:linear-gradient(120deg, var(--faq-accent), var(--faq-accent-2));
  color:var(--faq-heading);
  box-shadow:var(--faq-shadow);
}
.faq-btn.secondary{
  background:var(--faq-panel);
  color:var(--faq-text);
  border-color:var(--faq-border);
}
.faq-btn.secondary i{color:var(--faq-accent);}
.faq-qa h3{font-size:1.05rem;}
.faq-qa p + p{margin-top:0.4rem;}
.faq-pill-group{
  display:flex;
  gap:0.5rem;
  flex-wrap:wrap;
  margin-top:0.7rem;
}
.faq-pill{
  display:inline-flex;
  align-items:center;
  gap:0.35rem;
  padding:0.38rem 0.75rem;
  border-radius:999px;
  background:rgba(126,165,255,0.16);
  color:var(--faq-heading);
  font-weight:700;
  border:1px solid rgba(126,165,255,0.3);
}
.faq-pill i{color:var(--faq-accent);}
@media (max-width: 960px){
  .faq-grid{grid-template-columns:1fr; gap:1rem;}
}
</style>

<main class="faq-shell" id="faq">
  <section class="faq-hero">
    <div class="faq-container">
      <p class="faq-eyebrow">Need answers?</p>
      <h1 class="faq-title">Frequently Asked Questions</h1>
      <p class="faq-sub">Clarity on the licensed gohappychance raffle—tickets, eligibility, draw details, and how we keep everything compliant.</p>
      <div class="faq-licence-bar">
        <div class="licence-chip"><i class="fa-solid fa-certificate"></i>AGLC Raffle Licence #662961</div>
        <div class="licence-chip"><i class="fa-solid fa-ticket"></i>995 tickets • $10 each • 18+ in Alberta</div>
        <div class="licence-chip"><i class="fa-solid fa-calendar-day"></i>Draw: March 30, 2026 at 7:00 PM MT • Fort Edmonton Park</div>
        <div class="licence-chip"><i class="fa-solid fa-scale-balanced"></i>Operator / Licensee: gohappychance Association Foundation</div>
      </div>
      <p class="faq-sub">gohappychance is the campaign/brand name only and is not the operator; all raffle operations are run by the gohappychance Association Foundation under AGLC oversight.</p>
      <div class="faq-pill-group">
        <span class="faq-pill"><i class="fa-solid fa-circle-info"></i> Licensed draw</span>
        <span class="faq-pill"><i class="fa-solid fa-people-group"></i> Community-first</span>
        <span class="faq-pill"><i class="fa-solid fa-shield-halved"></i> Compliance led</span>
      </div>
    </div>
  </section>

  <section class="faq-body" aria-labelledby="faq-list">
    <div class="faq-container faq-grid">
      <div class="faq-card">
        <h3>Quick snapshot</h3>
        <p>One licensed 50/50 draw with 995 tickets at $10. Winner gets 50% of ticket sales; the rest funds community and conservation initiatives. Draw happens March 30, 2026 at 7:00 PM MT, Fort Edmonton Park.</p>
      </div>
      <div class="faq-card faq-note">
        <p><strong>Need support?</strong> Email <a href="mailto:support@gohappychance.com" class="link-accent-m8q5">support@gohappychance.com</a> for ticket or rules questions, or visit the <a href="<?php echo esc_url( home_url('/rules') ); ?>">Rules</a> page for the full licence terms.</p>
        <div class="faq-contact">
          <a class="faq-btn" href="<?php echo esc_url( home_url('/#contact') ); ?>"><i class="fa-solid fa-envelope"></i> Contact us</a>
          <a class="faq-btn secondary" href="<?php echo esc_url( home_url('/faq') ); ?>"><i class="fa-solid fa-book-open"></i> Full FAQ anchor</a>
        </div>
      </div>
    </div>

    <div class="faq-container faq-list" id="faq-list">
      <article class="faq-card faq-qa">
        <h3>What do tickets cost and how many exist?</h3>
        <p>Each ticket is $10. Only 995 tickets are issued for this licensed draw—once they’re gone, sales close.</p>
      </article>

      <article class="faq-card faq-qa">
        <h3>Who can purchase?</h3>
        <p>Adults 18+ who are physically located in Alberta at the time of purchase. Licensee staff and their immediate family cannot participate.</p>
      </article>

      <article class="faq-card faq-qa">
        <h3>Is there a purchase limit?</h3>
        <p>No cap. You may buy multiple tickets; each one is a separate entry in the draw.</p>
      </article>

      <article class="faq-card faq-qa">
        <h3>When and where is the draw held?</h3>
        <p>The draw is set for March 30, 2026 at 7:00 PM MT, Fort Edmonton Park, Edmonton. It runs under AGLC requirements.</p>
      </article>

      <article class="faq-card faq-qa">
        <h3>What exactly is the prize?</h3>
        <p>It’s a 50/50 cash prize—50% of total ticket sales. For example, at full sell-out the prize is projected around $3,780 to the winner.</p>
      </article>

      <article class="faq-card faq-qa">
        <h3>What are my odds of winning?</h3>
        <p>Maximum odds are 1 in 995 if all tickets sell; odds improve if fewer tickets are sold.</p>
      </article>

      <article class="faq-card faq-qa">
        <h3>How will I know if I’ve won?</h3>
        <p>We reach out using the contact details you provide within 5 business days. Winners must respond within 30 days. We also post the result on the site.</p>
      </article>

      <article class="faq-card faq-qa">
        <h3>Do I need to attend the draw?</h3>
        <p>No attendance needed. The draw is conducted per licence rules and the winner is contacted and posted publicly.</p>
      </article>

      <article class="faq-card faq-qa">
        <h3>Can I cancel or refund my tickets?</h3>
        <p>All raffle ticket sales are final once issued; no refunds or exchanges are permitted under the licence.</p>
      </article>

      <article class="faq-card faq-qa">
        <h3>Where do proceeds go?</h3>
        <p>Net proceeds support conservation and outdoor heritage projects, including initiatives modeled after the Pheasant Release Program.</p>
      </article>

      <article class="faq-card faq-qa">
        <h3>How can I get more help?</h3>
        <p>For any other question, email <a href="mailto:support@gohappychance.com" class="link-accent-m8q5">support@gohappychance.com</a> or use the contact section on the homepage. We typically reply within 1–2 business days.</p>
      </article>
    </div>
  </section>
</main>

<?php get_footer(); ?>
