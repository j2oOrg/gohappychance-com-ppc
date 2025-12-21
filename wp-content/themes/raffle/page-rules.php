<?php
/**
 * Template Name: Rules
 * Rules & Regulations page template with inline styling.
 */
get_header();
?>

<style>
:root{
  --rules-bg:#f7f8fd;
  --rules-panel:#ffffff;
  --rules-soft:#f1f4ff;
  --rules-text:#1f2435;
  --rules-muted:#606980;
  --rules-heading:#0f172a;
  --rules-accent:#7ea5ff;
  --rules-accent-2:#f7b7d7;
  --rules-border:rgba(15,23,42,0.08);
  --rules-shadow:0 14px 36px rgba(15,23,42,0.12);
  --rules-radius:18px;
  --rules-font:"Nunito","Inter",system-ui,sans-serif;
  --rules-font-display:"Quicksand","Nunito",system-ui,sans-serif;
}
.rules-shell{background:var(--rules-bg); color:var(--rules-text); font-family:var(--rules-font); padding:0 0 3rem;}
.rules-container{width:min(1100px, 100% - 2.6rem); margin:0 auto;}
.rules-hero{padding:3rem 0 1.4rem;}
.rules-eyebrow{text-transform:uppercase; letter-spacing:2px; color:var(--rules-muted); margin:0 0 0.4rem; font-weight:700; font-size:0.9rem;}
.rules-title{font-family:var(--rules-font-display); margin:0 0 0.4rem; font-size:2.6rem; color:var(--rules-heading);}
.rules-sub{margin:0 0 0.6rem; color:var(--rules-muted); line-height:1.65; max-width:920px;}
.rules-licence-bar{
  background:var(--rules-panel);
  border:1px solid var(--rules-border);
  border-radius:var(--rules-radius);
  box-shadow:var(--rules-shadow);
  padding:1rem 1.1rem;
  display:grid;
  grid-template-columns:repeat(auto-fit, minmax(240px,1fr));
  gap:0.8rem;
  margin-top:1rem;
}
.licence-chip{display:flex; gap:0.45rem; align-items:flex-start; color:var(--rules-text); font-weight:700;}
.licence-chip i{color:var(--rules-accent);}
.rules-layout{
  display:grid;
  grid-template-columns:1.05fr 0.95fr;
  gap:1.1rem;
  width:min(1100px, 100% - 2.6rem);
  margin:2rem auto 1.4rem;
}
.rules-card{
  background:var(--rules-panel);
  border:1px solid var(--rules-border);
  border-radius:var(--rules-radius);
  box-shadow:var(--rules-shadow);
  padding:1.2rem 1.3rem;
}
.rules-card h2{margin:0 0 0.4rem; color:var(--rules-heading); font-size:1.25rem;}
.rules-card p{margin:0; color:var(--rules-muted); line-height:1.65;}
.rules-list{display:grid; grid-template-columns:repeat(auto-fit, minmax(260px,1fr)); gap:0.85rem;}
.rules-chip-group{display:flex; gap:0.5rem; flex-wrap:wrap; margin-top:0.8rem;}
.rules-chip{
  display:inline-flex;
  align-items:center;
  gap:0.35rem;
  padding:0.38rem 0.75rem;
  border-radius:999px;
  background:rgba(126,165,255,0.16);
  color:var(--rules-heading);
  font-weight:700;
  border:1px solid rgba(126,165,255,0.3);
}
.rules-chip i{color:var(--rules-accent);}
.rules-note{
  background:var(--rules-soft);
  border:1px dashed rgba(126,165,255,0.35);
  border-radius:var(--rules-radius);
  padding:1rem 1.1rem;
  box-shadow:var(--rules-shadow);
}
.rules-note strong{color:var(--rules-heading);}
.rules-actions{margin-top:0.9rem; display:flex; gap:0.6rem; flex-wrap:wrap;}
.rules-btn{
  display:inline-flex;
  align-items:center;
  gap:0.45rem;
  padding:0.78rem 1.4rem;
  border-radius:12px;
  border:1px solid transparent;
  font-weight:800;
  text-decoration:none;
  background:linear-gradient(120deg, var(--rules-accent), var(--rules-accent-2));
  color:var(--rules-heading);
  box-shadow:var(--rules-shadow);
}
.rules-btn.secondary{
  background:var(--rules-panel);
  color:var(--rules-text);
  border-color:var(--rules-border);
}
.rules-btn.secondary i{color:var(--rules-accent);}
.rules-qa h3{margin:0 0 0.3rem; font-size:1.05rem; color:var(--rules-heading);}
.rules-qa p+p{margin-top:0.35rem;}
@media (max-width: 960px){
  .rules-layout{grid-template-columns:1fr;}
}
</style>

<main class="rules-shell" id="rules">
  <section class="rules-hero">
    <div class="rules-container">
      <p class="rules-eyebrow">Official rules</p>
      <h1 class="rules-title">Rules &amp; Regulations</h1>
      <p class="rules-sub">These are the governing terms for the licensed gohappychance raffle. The draw runs under AGLC Raffle Licence #662983 and is operated by Gohappychance Foundation. gohappychance is the campaign/brand name only. Participation is limited to individuals 18+ physically located in Alberta at time of purchase.</p>
      <div class="rules-licence-bar">
        <div class="licence-chip"><i class="fa-solid fa-certificate"></i>AGLC Raffle Licence #662983 — operated by Gohappychance Foundation</div>
        <div class="licence-chip"><i class="fa-solid fa-ticket"></i>995 tickets • $10 each • Licensed 50/50 prize pool</div>
        <div class="licence-chip"><i class="fa-solid fa-calendar-day"></i>Draw: March 30, 2026 at 7:00 PM MT • Fort Edmonton Park</div>
        <div class="licence-chip"><i class="fa-solid fa-scale-balanced"></i>Licence term: January 15, 2026 – March 30, 2026</div>
      </div>
      <div class="rules-chip-group">
        <span class="rules-chip"><i class="fa-solid fa-circle-info"></i> Operator: Gohappychance Foundation</span>
        <span class="rules-chip"><i class="fa-solid fa-location-dot"></i> Alberta only • 18+</span>
        <span class="rules-chip"><i class="fa-solid fa-shield-halved"></i> Conducted under AGLC oversight</span>
      </div>
    </div>
  </section>

  <section class="rules-body" aria-labelledby="rules-content">
    <div class="rules-container rules-layout">
      <div class="rules-card">
        <h2>Key obligations</h2>
        <p>AGLC Raffle Licence #662983 authorizes this draw. The Gohappychance Foundation oversees fairness, transparency, and adherence to Alberta regulations.</p>
        <div class="rules-actions">
          <a class="rules-btn" href="<?php echo esc_url( home_url('/faq') ); ?>"><i class="fa-solid fa-book-open"></i> Read FAQ</a>
          <a class="rules-btn secondary" href="<?php echo esc_url( home_url('/#contact') ); ?>"><i class="fa-solid fa-envelope"></i> Contact support</a>
        </div>
      </div>

      <div class="rules-card rules-note">
        <p><strong>Quick facts:</strong> 995 tickets at $10 • One 50/50 winner • Draw on March 30, 2026 • Winner notified within 5 business days using purchase contact details; winner must respond within 30 days.</p>
      </div>
    </div>

    <div class="rules-container rules-list" id="rules-content">
      <article class="rules-card rules-qa">
        <h3>Eligibility</h3>
        <p>Participants must be 18 years of age or older and physically located in Alberta at the time of ticket purchase. Licensee employees and their immediate families are ineligible.</p>
      </article>

      <article class="rules-card rules-qa">
        <h3>Tickets</h3>
        <p>Tickets are $10 each. A total of 995 tickets are available for this licensed draw. Sales close when sold out or at the draw deadline.</p>
      </article>

      <article class="rules-card rules-qa">
        <h3>Prize</h3>
        <p>One licensed 50/50 prize: winner receives 50% of total ticket revenue. No substitutions or alternatives beyond the 50/50 amount.</p>
      </article>

      <article class="rules-card rules-qa">
        <h3>Draw details</h3>
        <p>The draw will be conducted on March 30, 2026 at 7:00 PM MT at Fort Edmonton Park, Edmonton, in accordance with AGLC requirements.</p>
      </article>

      <article class="rules-card rules-qa">
        <h3>Winner notification</h3>
        <p>The winner will be contacted using the information provided at purchase within 5 business days. The winner must respond within 30 days. Results will be posted on the website.</p>
      </article>

      <article class="rules-card rules-qa">
        <h3>Presence at draw</h3>
        <p>The winner does not need to be present. The draw process is recorded per AGLC standards, and verification steps are followed before announcing results.</p>
      </article>

      <article class="rules-card rules-qa">
        <h3>Refund policy</h3>
        <p>All raffle ticket sales are final. No refunds or exchanges are permitted once tickets are issued.</p>
      </article>

      <article class="rules-card rules-qa">
        <h3>Disputes</h3>
        <p>All disputes are governed by Alberta law and AGLC regulations. The licensee’s decision is final once validated by AGLC requirements.</p>
      </article>

      <article class="rules-card rules-qa">
        <h3>Responsible participation</h3>
        <p>Raffle play should remain balanced. Set personal limits and take breaks. For support, visit responsible gaming resources or contact us.</p>
      </article>

      <article class="rules-card rules-qa">
        <h3>Contact</h3>
        <p>Questions about these rules? Email <a href="mailto:support@gohappychance.com" class="link-accent-m8q5">support@gohappychance.com</a> or use the contact section on the homepage.</p>
      </article>
    </div>
  </section>
</main>

<?php get_footer(); ?>
