<!doctype html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dafagiandra Dwi Maulana — Portfolio</title>
  <link href="{{ asset('css/output.css') }}" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@500;600;700;800;900&family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet"/>
  <style>
    * { box-sizing: border-box; margin: 0; padding: 0; }
    html { scroll-behavior: smooth; }
    body { font-family: 'Inter', sans-serif; background: #FAF9F5; color: #101114; -webkit-font-smoothing: antialiased; overflow-x: hidden; }
    a { text-decoration: none; color: inherit; }
    ul { list-style: none; }
    img { display: block; max-width: 100%; }

    :root{
      --dark:#0B0B0D;
      --dark-2:#151517;
      --paper:#FAF9F5;
      --paper-alt:#F1EFE8;
      --ink:#101114;
      --slate:#6B6B70;
      --line:#E6E3D9;
      --gold:#F0B429;
      --gold-deep:#C9860E;
      --cream:#FDF8ED;
      --shadow-md: 0 20px 44px rgba(11,11,13,.10);
      --shadow-lg: 0 32px 64px rgba(11,11,13,.16);
    }

    .display { font-family:'Unbounded', sans-serif; }
    .mono { font-family:'JetBrains Mono', monospace; }

    .wrap { max-width: 1200px; margin: 0 auto; padding: 0 48px; }
    .section { padding: 110px 0; }
    .eyebrow {
      display:inline-flex; align-items:center; gap:9px;
      font-family:'JetBrains Mono', monospace; font-size: 12.5px; font-weight: 600; letter-spacing:.04em;
      color: var(--gold-deep); text-transform: uppercase; margin-bottom: 18px;
    }
    .eyebrow::before { content:''; width: 22px; height: 2px; background: var(--gold); display:inline-block; }
    .h2 { font-family:'Unbounded', sans-serif; font-weight: 700; font-size: 38px; letter-spacing: -0.01em; line-height: 1.15; }
    .sub { font-size: 15.5px; color: var(--slate); margin-top: 14px; max-width: 480px; line-height: 1.75; }
    .head-row { display:flex; justify-content:space-between; align-items:flex-end; gap: 24px; flex-wrap: wrap; margin-bottom: 56px; }

    .btn {
      display:inline-flex; align-items:center; justify-content:center; gap: 8px;
      font-family:'Inter',sans-serif; font-size: 14.5px; font-weight: 600; border-radius: 100px; padding: 15px 30px;
      transition: all .25s; white-space: nowrap; border: none; cursor: pointer;
    }
    .btn-gold { color: var(--dark); background: var(--gold); }
    .btn-gold:hover { background: #fff; transform: translateY(-2px); }
    .btn-outline-light { color: #fff; border: 1.5px solid rgba(255,255,255,.35); }
    .btn-outline-light:hover { border-color: var(--gold); color: var(--gold); }
    .btn-outline-dark { color: var(--ink); border: 1.5px solid var(--line); }
    .btn-outline-dark:hover { border-color: var(--ink); }
    .btn-dark { color: #fff; background: var(--ink); }
    .btn-dark:hover { background: var(--gold-deep); }

    /* ---------- NAV ---------- */
    .navbar { position: sticky; top: 0; z-index: 100; background: rgba(11,11,13,.72); backdrop-filter: blur(14px); border-bottom: 1px solid rgba(255,255,255,.08); }
    .navbar-inner { display:flex; justify-content:space-between; align-items:center; padding: 20px 0; }
    .navbar-logo { font-family:'Unbounded', sans-serif; font-weight: 700; font-size: 17px; color: #fff; }
    .navbar-logo span { color: var(--gold); }
    .navbar-links { display:flex; gap: 38px; }
    .navbar-links a { font-size: 13.5px; font-weight: 500; color: rgba(255,255,255,.72); transition: color .2s; }
    .navbar-links a:hover { color: var(--gold); }
    .navbar-actions { display:flex; gap: 10px; align-items:center; }

    /* ---------- HERO ---------- */
    .hero { position: relative; min-height: 92vh; display:flex; flex-direction:column; justify-content:flex-end; background: var(--dark); overflow: hidden; }
    .hero-photo { position:absolute; inset:0; z-index:0; }
    .hero-photo img { width:100%; height:100%; object-fit:cover; object-position: top center; filter: grayscale(1) contrast(1.12) brightness(.95); }
    .hero-photo::before {
      content:''; position:absolute; inset:0;
      background: linear-gradient(200deg, rgba(240,180,41,.30), rgba(11,11,13,.92) 60%);
      mix-blend-mode: multiply;
    }
    .hero-photo::after {
      content:''; position:absolute; inset:0;
      background:
        linear-gradient(90deg, var(--dark) 8%, rgba(11,11,13,.55) 42%, transparent 68%),
        linear-gradient(0deg, var(--dark) 4%, transparent 34%);
    }
    .hero-content { position: relative; z-index: 2; padding: 64px 0 0; }
    .status-pill {
      display:inline-flex; align-items:center; gap:9px;
      font-family:'JetBrains Mono', monospace; font-size: 12.5px; font-weight: 500; color: #fff;
      border: 1px solid rgba(255,255,255,.28); border-radius: 100px; padding: 8px 16px 8px 12px; margin-bottom: 30px;
    }
    .status-dot { width: 7px; height: 7px; border-radius: 50%; background: var(--gold); position: relative; }
    .status-dot::after { content:''; position:absolute; inset:-4px; border-radius:50%; border: 2px solid var(--gold); opacity: .55; animation: pulse 2.2s ease-out infinite; }
    @keyframes pulse { 0%{ transform:scale(.6); opacity:.6;} 100%{ transform:scale(1.9); opacity:0;} }

    .hero-name {
      font-family:'Unbounded', sans-serif; font-weight: 800; color:#fff;
      font-size: clamp(46px, 6.4vw, 92px); line-height: 0.98; letter-spacing: -0.01em; max-width: 900px;
    }
    .hero-name .gold { color: var(--gold); }
    .hero-role { font-size: 17px; font-weight: 400; color: rgba(255,255,255,.68); margin-top: 26px; max-width: 480px; line-height: 1.8; }
    .hero-role b { color: #fff; font-weight: 600; }
    .hero-cta { display:flex; gap: 14px; margin-top: 36px; }

    .scroll-cue {
      position: absolute; bottom: 26px; left: 48px; z-index: 2;
      display:flex; align-items:center; gap: 10px; color: rgba(255,255,255,.55);
      font-family:'JetBrains Mono', monospace; font-size: 11px; text-transform: uppercase; letter-spacing:.1em;
    }
    .scroll-cue-line { width: 1px; height: 34px; background: rgba(255,255,255,.3); position: relative; overflow:hidden; }
    .scroll-cue-line::after { content:''; position:absolute; top:-100%; left:0; width:100%; height:100%; background: var(--gold); animation: scrollLine 1.8s ease-in-out infinite; }
    @keyframes scrollLine { 0%{ top:-100%;} 100%{ top:100%;} }

    /* ---------- TICKER ---------- */
    .ticker-band { position: relative; z-index: 3; background: var(--gold); transform: rotate(-1.4deg); margin: -34px 0 -30px; box-shadow: 0 10px 32px rgba(0,0,0,.18); }
    .ticker-track { display:flex; width: max-content; animation: tickerMove 26s linear infinite; padding: 16px 0; }
    .ticker-item { display:flex; align-items:center; gap: 18px; padding-right: 18px; }
    .ticker-item span { font-family:'Unbounded', sans-serif; font-weight: 700; font-size: 17px; color: var(--dark); text-transform: uppercase; letter-spacing: .01em; }
    .ticker-item svg { flex-shrink:0; }
    @keyframes tickerMove { from{ transform: translateX(0);} to{ transform: translateX(-50%);} }

    /* ---------- STATS ---------- */
    .stats-strip { background: var(--dark); padding: 56px 0 88px; }
    .stats-grid { display:grid; grid-template-columns: repeat(4,1fr); gap: 24px; }
    .stat-cell { text-align:left; }
    .stat-num { font-family:'Unbounded', sans-serif; font-weight: 800; font-size: 38px; color: var(--gold); }
    .stat-label { font-family:'JetBrains Mono', monospace; font-size: 11.5px; color: rgba(255,255,255,.55); margin-top: 6px; text-transform: uppercase; letter-spacing: .05em; }

    /* ---------- SKILLS ---------- */
    .skills-grid { display:grid; grid-template-columns: repeat(4, 1fr); gap: 1px; background: var(--line); border: 1px solid var(--line); border-radius: 20px; overflow: hidden; }
    .skill-card { background: var(--paper); padding: 32px 26px; display:flex; flex-direction:column; gap: 16px; transition: all .25s; }
    .skill-card:hover { background: var(--dark); }
    .skill-card:hover .skill-name, .skill-card:hover .skill-desc { color: #fff; }
    .skill-card:hover .skill-desc { color: rgba(255,255,255,.6); }
    .skill-icon { width: 42px; height: 42px; border-radius: 11px; background: var(--cream); border:1px solid var(--line); display:flex; align-items:center; justify-content:center; transition: all .25s; }
    .skill-card:hover .skill-icon { background: var(--gold); border-color: var(--gold); }
    .skill-card:hover .skill-icon svg { stroke: var(--dark); }
    .skill-name { font-weight: 700; font-size: 15px; transition: color .25s; }
    .skill-desc { font-size: 13px; color: var(--slate); line-height: 1.6; transition: color .25s; }

    /* ---------- PROJECTS (BENTO) ---------- */
    .bento { display:grid; grid-template-columns: repeat(4, 1fr); grid-auto-rows: 190px; gap: 20px; }
    .bento-a { grid-column: span 2; grid-row: span 2; }
    .bento-cta { grid-column: span 4; }
    .proj-card {
      position: relative; border-radius: 18px; overflow: hidden; display:flex; flex-direction:column;
      box-shadow: var(--shadow-md); transition: transform .3s, box-shadow .3s;
    }
    .proj-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-lg); }
    .proj-media { flex: 1; position: relative; display:flex; align-items:center; justify-content:center; }
    .proj-media svg { opacity: .5; }
    .proj-a .proj-media { flex: 1.4; }
    .proj-body { padding: 16px 18px 18px; background: #fff; }
    .proj-a .proj-body { padding: 22px 26px 26px; }
    .proj-tag { display:inline-flex; font-family:'JetBrains Mono', monospace; font-size: 10.5px; font-weight: 600; text-transform: uppercase; letter-spacing:.04em; color: var(--gold-deep); background: var(--cream); border-radius: 100px; padding: 4px 10px; margin-bottom: 8px; }
    .proj-title { font-weight: 700; font-size: 14px; line-height: 1.35; }
    .proj-a .proj-title { font-family:'Unbounded', sans-serif; font-size: 21px; margin-top: 4px; }
    .proj-desc { font-size: 12.5px; color: var(--slate); line-height: 1.6; margin-top: 6px; display:none; }
    .proj-a .proj-desc { display: block; font-size: 14px; max-width: 380px; }
    .proj-pills { display:none; gap:6px; margin-top: 12px; flex-wrap:wrap; }
    .proj-a .proj-pills { display:flex; }
    .proj-pill { font-size: 11px; color: var(--ink); background: var(--paper-alt); border-radius: 6px; padding: 4px 9px; }

    .cta-strip {
      border-radius: 18px; background: var(--dark); display:flex; align-items:center; justify-content:space-between;
      padding: 0 36px; gap: 24px; flex-wrap: wrap;
    }
    .cta-strip p { color: #fff; font-family:'Unbounded', sans-serif; font-weight: 600; font-size: 18px; }
    .cta-strip span { color: rgba(255,255,255,.55); font-size: 13px; display:block; margin-top: 4px; font-family:'Inter',sans-serif; font-weight:400; }

    /* ---------- ABOUT ---------- */
    .about-section { background: var(--dark); color: #fff; position: relative; overflow: hidden; }
    .about-glow { position:absolute; width: 520px; height: 520px; border-radius: 50%; background: radial-gradient(circle, rgba(240,180,41,.14), transparent 70%); top: -180px; left: -140px; }
    .about-grid { display:grid; grid-template-columns: 0.8fr 1.2fr; gap: 72px; align-items:center; position:relative; }
    .about-photo { border-radius: 20px; overflow:hidden; aspect-ratio: 3/4; box-shadow: var(--shadow-lg); }
    .about-photo img { width:100%; height:100%; object-fit:cover; object-position: top; filter: grayscale(.5) contrast(1.05); }
    .about-quote { font-family:'Unbounded', sans-serif; font-weight: 600; font-size: 26px; line-height: 1.45; letter-spacing: -0.01em; }
    .about-quote .gold { color: var(--gold); }
    .about-text p { font-size: 15px; line-height: 1.85; color: rgba(255,255,255,.6); margin-top: 24px; max-width: 520px; }
    .about-text b { color: #fff; font-weight: 600; }
    .stack-row { display:flex; flex-wrap:wrap; gap: 8px; margin-top: 26px; }
    .stack-pill { display:flex; align-items:center; gap: 7px; font-family:'JetBrains Mono', monospace; font-size: 12.5px; border: 1px solid rgba(255,255,255,.2); border-radius: 100px; padding: 8px 15px; }
    .stack-dot { width: 5px; height: 5px; border-radius: 50%; background: var(--gold); }

    /* ---------- TESTIMONIALS ---------- */
    .testi-wrap { position:relative; overflow:hidden; margin-top: 8px; }
    .testi-fade-l, .testi-fade-r { position:absolute; top:0; bottom:0; width: 100px; z-index:2; }
    .testi-fade-l { left:0; background: linear-gradient(to right, var(--paper), transparent); }
    .testi-fade-r { right:0; background: linear-gradient(to left, var(--paper), transparent); }
    .testi-track { display:flex; width: max-content; animation: slideLeft 50s linear infinite; }
    .testi-track:hover { animation-play-state: paused; }
    @keyframes slideLeft { from{ transform: translateX(0);} to{ transform: translateX(-50%);} }
    .testi-card { width: 330px; flex-shrink:0; background:#fff; border: 1px solid var(--line); border-radius: 16px; padding: 26px; margin-right: 20px; }
    .testi-text { font-size: 14.5px; line-height: 1.7; color: var(--ink); }
    .testi-meta { display:flex; align-items:center; gap: 12px; margin-top: 22px; padding-top: 18px; border-top: 1px solid var(--line); }
    .testi-avatar { width: 38px; height: 38px; border-radius: 50%; flex-shrink:0; display:flex; align-items:center; justify-content:center; background: var(--dark); color: var(--gold); font-family:'Unbounded',sans-serif; font-weight: 700; font-size: 13px; }
    .testi-name { font-size: 13px; font-weight: 700; }
    .testi-role { font-size: 12px; color: var(--slate); }

    /* ---------- FAQ ---------- */
    .faq-layout { display:flex; gap: 80px; align-items:flex-start; }
    .faq-left { flex-shrink:0; width: 300px; position: sticky; top: 110px; }
    .faq-right { flex:1; }
    .faq-item { border-bottom: 1px solid var(--line); }
    .faq-btn { width:100%; display:flex; justify-content:space-between; align-items:center; gap: 16px; padding: 24px 0; background:none; border:none; cursor:pointer; text-align:left; }
    .faq-question { font-size: 16px; font-weight: 600; font-family:'Inter',sans-serif; }
    .faq-icon { width: 30px; height: 30px; border-radius: 50%; border: 1px solid var(--line); flex-shrink:0; display:flex; align-items:center; justify-content:center; transition: all .25s; }
    .faq-item.open .faq-icon { background: var(--gold); border-color: var(--gold); transform: rotate(45deg); }
    .faq-answer { max-height: 0; overflow:hidden; transition: max-height .35s ease; }
    .faq-item.open .faq-answer { max-height: 200px; }
    .faq-answer-inner { font-size: 14px; color: var(--slate); line-height: 1.75; padding: 0 40px 24px 0; }

    /* ---------- FOOTER ---------- */
    .footer { background: var(--dark); color: #fff; padding: 88px 0 36px; }
    .footer-top { display:grid; grid-template-columns: 1.4fr 1fr 1fr 1fr; gap: 40px; padding-bottom: 44px; border-bottom: 1px solid rgba(255,255,255,.12); }
    .footer-brand p { font-size: 13.5px; color: rgba(255,255,255,.55); line-height: 1.7; margin-top: 14px; max-width: 260px; }
    .footer-socials { display:flex; gap: 10px; margin-top: 22px; }
    .footer-social { width: 38px; height: 38px; border-radius: 10px; border: 1px solid rgba(255,255,255,.2); display:flex; align-items:center; justify-content:center; transition: all .2s; }
    .footer-social:hover { background: var(--gold); border-color: var(--gold); }
    .footer-social:hover svg { stroke: var(--dark); }
    .footer-col-title { font-family:'JetBrains Mono', monospace; font-size: 12px; text-transform: uppercase; letter-spacing: .05em; color: var(--gold); margin-bottom: 18px; }
    .footer-col ul { display:flex; flex-direction:column; gap: 12px; }
    .footer-col ul a { font-size: 13.5px; color: rgba(255,255,255,.6); transition: color .2s; }
    .footer-col ul a:hover { color: #fff; }
    .footer-bottom { padding-top: 28px; display:flex; justify-content:space-between; font-family:'JetBrains Mono', monospace; font-size: 11.5px; color: rgba(255,255,255,.4); flex-wrap: wrap; gap: 8px; }

    @media (max-width: 980px) {
      .hero-grid, .about-grid { grid-template-columns: 1fr; }
      .skills-grid { grid-template-columns: repeat(2,1fr); }
      .bento { grid-template-columns: repeat(2,1fr); }
      .bento-a { grid-column: span 2; grid-row: span 1; }
      .bento-cta { grid-column: span 2; }
      .stats-grid { grid-template-columns: repeat(2,1fr); }
      .footer-top { grid-template-columns: 1fr 1fr; }
      .faq-layout { flex-direction: column; }
      .faq-left { width: 100%; position: static; }
      .wrap { padding: 0 24px; }
    }
  </style>
</head>
<body>

  {{-- ======= NAV ======= --}}
  <header class="navbar">
    <div class="wrap navbar-inner">
      <span class="navbar-logo">DAFAGIANDRA<span>.</span></span>
      <ul class="navbar-links">
        <li><a href="#Skills">Skills</a></li>
        <li><a href="#Projects">Projects</a></li>
        <li><a href="#About">About</a></li>
        <li><a href="#FAQ">FAQ</a></li>
      </ul>
      <div class="navbar-actions">
        <a href="" class="btn btn-outline-light">Resume</a>
        <a href="#FAQ" class="btn btn-gold">Hire Me</a>
      </div>
    </div>
  </header>

  {{-- ======= HERO ======= --}}
  <section class="hero">
    <div class="hero-photo">
      <img src="{{ asset('assets/photo/dafagiandra.jpg') }}" alt="Dafagiandra Dwi Maulana">
    </div>
    <div class="wrap hero-content">
      <span class="status-pill"><span class="status-dot"></span>Available for freelance</span>
      <h1 class="hero-name">Dafagiandra<br>Dwi <span class="gold">Maulana</span></h1>
      <p class="hero-role"><b>UI/UX Designer</b> &amp; <b>Web Developer</b> — mahasiswa Sistem Informasi yang membangun produk digital yang rapi secara teknis dan enak digunakan. Aktif juga sebagai <b>Public Speaker</b>.</p>
      <div class="hero-cta">
        <a href="#Projects" class="btn btn-gold">View My Work</a>
        <a href="#FAQ" class="btn btn-outline-light">Let's Talk</a>
      </div>
    </div>
    <div class="scroll-cue"><span class="scroll-cue-line"></span>Scroll</div>
  </section>

  {{-- ======= TICKER ======= --}}
  <div class="ticker-band">
    <div class="ticker-track">
      @for ($i = 0; $i < 2; $i++)
        @foreach (['UI/UX Designer','Web Developer','Public Speaker','Sistem Informasi'] as $word)
          <div class="ticker-item">
            <span>{{ $word }}</span>
            <svg width="14" height="14" viewBox="0 0 24 24" fill="var(--dark)"><path d="m12 2 1.5 4.5L18 8l-4.5 1.5L12 14l-1.5-4.5L6 8l4.5-1.5Z"/></svg>
          </div>
        @endforeach
      @endfor
    </div>
  </div>

  {{-- ======= STATS ======= --}}
  <div class="stats-strip">
    <div class="wrap">
      <div class="stats-grid">
        <div class="stat-cell"><p class="stat-num">10+</p><p class="stat-label">Projects Done</p></div>
        <div class="stat-cell"><p class="stat-num">3+</p><p class="stat-label">Years Learning</p></div>
        <div class="stat-cell"><p class="stat-num">5+</p><p class="stat-label">Speaking Events</p></div>
        <div class="stat-cell"><p class="stat-num">4.9</p><p class="stat-label">Avg. Client Rating</p></div>
      </div>
    </div>
  </div>

  {{-- ======= SKILLS ======= --}}
  <section id="Skills" class="section">
    <div class="wrap">
      <div class="head-row">
        <div>
          <span class="eyebrow">What I Do</span>
          <h2 class="h2">Skills that work together</h2>
          <p class="sub">Kombinasi desain dan teknis yang saling melengkapi untuk hasil akhir yang matang.</p>
        </div>
      </div>

      <div class="skills-grid">
        @php
          $skills = [
            ['name' => 'UI/UX Design', 'desc' => 'Riset, wireframe, hingga prototipe siap pakai.', 'icon' => 'pen'],
            ['name' => 'Web Development', 'desc' => 'Laravel & Tailwind untuk web cepat dan rapi.', 'icon' => 'code'],
            ['name' => 'Public Speaking', 'desc' => 'Menyampaikan ide teknis dengan jelas.', 'icon' => 'mic'],
            ['name' => 'Sistem Informasi', 'desc' => 'Merancang alur data & proses bisnis digital.', 'icon' => 'layers'],
            ['name' => 'Graphic Design', 'desc' => 'Identitas visual yang konsisten & diingat.', 'icon' => 'layout'],
            ['name' => 'Mobile App Design', 'desc' => 'Antarmuka mobile yang ringkas dan intuitif.', 'icon' => 'mobile'],
            ['name' => 'Content Writing', 'desc' => 'Copy yang jelas, membantu bukan menghias.', 'icon' => 'file'],
            ['name' => 'Client Collaboration', 'desc' => 'Komunikasi rutin dari brief sampai delivery.', 'icon' => 'chat'],
          ];
        @endphp
        @foreach ($skills as $s)
          <div class="skill-card">
            <div class="skill-icon">
              @switch($s['icon'])
                @case('pen')
                  <svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="var(--ink)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="m17 3 4 4L9 19l-5 1 1-5Z"/></svg>
                  @break
                @case('code')
                  <svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="var(--ink)" stroke-width="1.8" stroke-linecap="round"><path d="M8 6 3 12l5 6M16 6l5 6-5 6"/></svg>
                  @break
                @case('mic')
                  <svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="var(--ink)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="9" y="2" width="6" height="12" rx="3"/><path d="M5 10v2a7 7 0 0 0 14 0v-2M12 19v3"/></svg>
                  @break
                @case('layers')
                  <svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="var(--ink)" stroke-width="1.8" stroke-linejoin="round"><path d="m12 2 9 5-9 5-9-5Z"/><path d="m3 12 9 5 9-5M3 17l9 5 9-5"/></svg>
                  @break
                @case('layout')
                  <svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="var(--ink)" stroke-width="1.8"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg>
                  @break
                @case('mobile')
                  <svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="var(--ink)" stroke-width="1.8"><rect x="6" y="2" width="12" height="20" rx="2"/><path d="M11 18h2"/></svg>
                  @break
                @case('file')
                  <svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="var(--ink)" stroke-width="1.8" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8Z"/><path d="M14 2v6h6"/></svg>
                  @break
                @case('chat')
                  <svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="var(--ink)" stroke-width="1.8" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5Z"/></svg>
              @endswitch
            </div>
            <div>
              <p class="skill-name">{{ $s['name'] }}</p>
              <p class="skill-desc">{{ $s['desc'] }}</p>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  {{-- ======= PROJECTS (BENTO GRID) ======= --}}
  <section id="Projects" class="section" style="background: var(--paper-alt);">
    <div class="wrap">
      <div class="head-row">
        <div>
          <span class="eyebrow">Selected Work</span>
          <h2 class="h2">Recent projects</h2>
          <p class="sub">Proyek nyata dari riset sampai rilis, dipilih yang paling merepresentasikan cara kerja saya.</p>
        </div>
      </div>

      <div class="bento">
        <div class="proj-card proj-a">
          <div class="proj-media" style="background:linear-gradient(135deg,#1B1B1F,#3A3A42);">
            <svg width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="var(--gold)" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>
          </div>
          <div class="proj-body">
            <span class="proj-tag">UI/UX Design</span>
            <p class="proj-title">Redesign Aplikasi E-Commerce Mobile</p>
            <p class="proj-desc">Merancang ulang alur belanja untuk meningkatkan konversi checkout hingga 18%.</p>
            <div class="proj-pills">
              <span class="proj-pill">Figma</span><span class="proj-pill">Prototyping</span><span class="proj-pill">User Research</span>
            </div>
          </div>
        </div>

        @php
          $small = [
            ['tag'=>'Web Dev','title'=>'Website Portfolio Interaktif','grad'=>'linear-gradient(135deg,#FFF4E0,#FFE6BF)','icon'=>'laptop'],
            ['tag'=>'Speaking','title'=>'Seminar Nasional UI/UX','grad'=>'linear-gradient(135deg,#F1EEFF,#E3DBFF)','icon'=>'mic'],
            ['tag'=>'Sistem Informasi','title'=>'SI Manajemen Kampus','grad'=>'linear-gradient(135deg,#E7F3FF,#D3E7FF)','icon'=>'database'],
            ['tag'=>'Mobile Design','title'=>'Aplikasi Kesehatan Mental','grad'=>'linear-gradient(135deg,#FFEFF3,#FFDDE6)','icon'=>'heart'],
          ];
        @endphp
        @foreach ($small as $p)
          <div class="proj-card">
            <div class="proj-media" style="background:{{ $p['grad'] }};">
              @switch($p['icon'])
                @case('laptop')
                  <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="var(--ink)" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="12" rx="1"/><path d="M2 20h20"/></svg>
                  @break
                @case('mic')
                  <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="var(--ink)" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="9" y="2" width="6" height="12" rx="3"/><path d="M5 10v2a7 7 0 0 0 14 0v-2M12 19v3"/></svg>
                  @break
                @case('database')
                  <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="var(--ink)" stroke-width="1.6" stroke-linecap="round"><ellipse cx="12" cy="6" rx="8" ry="3"/><path d="M4 6v12c0 1.7 3.6 3 8 3s8-1.3 8-3V6M4 12c0 1.7 3.6 3 8 3s8-1.3 8-3"/></svg>
                  @break
                @case('heart')
                  <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="var(--ink)" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M20.8 4.6a5.5 5.5 0 0 0-7.8 0L12 5.6l-1-1a5.5 5.5 0 0 0-7.8 7.8l1 1L12 21l7.8-7.6 1-1a5.5 5.5 0 0 0 0-7.8Z"/></svg>
              @endswitch
            </div>
            <div class="proj-body">
              <span class="proj-tag">{{ $p['tag'] }}</span>
              <p class="proj-title">{{ $p['title'] }}</p>
            </div>
          </div>
        @endforeach

        <div class="proj-card bento-cta">
          <div class="cta-strip" style="flex:1;">
            <div>
              <p>Punya lebih banyak proyek dari yang ditampilkan</p>
              <span>Termasuk brand identity, riset UX, dan studi kasus kampus</span>
            </div>
            <a href="" class="btn btn-gold">See all projects →</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- ======= ABOUT ======= --}}
  <section id="About" class="section about-section">
    <div class="about-glow"></div>
    <div class="wrap">
      <div class="about-grid">
        <div class="about-photo">
          <img src="{{ asset('assets/photo/dafagiandra.jpg') }}" alt="Dafagiandra Dwi Maulana">
        </div>
        <div class="about-text">
          <span class="eyebrow">About Me</span>
          <p class="about-quote">"Teknologi yang baik harus <span class="gold">terasa jelas</span>, bukan cuma terlihat rapi di permukaan."</p>
          <p>Saya <b>Dafagiandra</b>, mahasiswa Sistem Informasi yang bersemangat di dunia <b>UI/UX Design</b> dan <b>Web Development</b>. Selain di ranah digital, saya juga aktif sebagai <b>Public Speaker</b> — membagikan wawasan soal teknologi, desain, dan proses kerja ke komunitas mahasiswa dan profesional muda.</p>
          <div class="stack-row">
            @foreach (['Figma','Adobe XD','Laravel','PHP','Tailwind CSS','MySQL','JavaScript'] as $tool)
              <span class="stack-pill"><span class="stack-dot"></span>{{ $tool }}</span>
            @endforeach
          </div>
          <div style="margin-top:30px;">
            <a href="" class="btn btn-gold">Download CV</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- ======= TESTIMONIALS ======= --}}
  <section id="Testimonials" class="section">
    <div class="wrap">
      <div class="head-row">
        <div>
          <span class="eyebrow">Testimonials</span>
          <h2 class="h2">What people say</h2>
          <p class="sub">Catatan dari klien dan rekan yang pernah berkolaborasi langsung.</p>
        </div>
      </div>
    </div>

    <div class="testi-wrap">
      <div class="testi-fade-l"></div>
      <div class="testi-fade-r"></div>
      <div class="testi-track">
        @php
          $testis = [
            ['name'=>'Rizky Pratama','role'=>'CEO, Startup Digital','text'=>'Dafagiandra developer yang teliti — kodenya rapi dan solusinya selalu tepat sasaran.'],
            ['name'=>'Dina Maharani','role'=>'Project Manager','text'=>'Kolaborasi dengan Dafagiandra menyenangkan. Hasil kerjanya melebihi ekspektasi tim kami.'],
            ['name'=>'Budi Santoso','role'=>'Dosen Pembimbing','text'=>'Public speaking-nya kuat, penguasaan materinya jelas terlihat di setiap presentasi.'],
            ['name'=>'Sinta Dewi','role'=>'UI/UX Mentor','text'=>'Portofolionya menunjukkan pemahaman mendalam soal user experience.'],
            ['name'=>'Andi Kurniawan','role'=>'Frontend Developer','text'=>'Kode yang ia tulis rapi dan terstruktur, enak diajak kolaborasi dalam satu tim.'],
          ];
        @endphp
        @for ($i = 0; $i < 2; $i++)
          @foreach ($testis as $t)
            <div class="testi-card">
              <p class="testi-text">"{{ $t['text'] }}"</p>
              <div class="testi-meta">
                <div class="testi-avatar">{{ substr($t['name'],0,1) }}</div>
                <div>
                  <p class="testi-name">{{ $t['name'] }}</p>
                  <p class="testi-role">{{ $t['role'] }}</p>
                </div>
              </div>
            </div>
          @endforeach
        @endfor
      </div>
    </div>
  </section>

  {{-- ======= FAQ ======= --}}
  <section id="FAQ" class="section" style="background: var(--paper-alt);">
    <div class="wrap">
      <div class="faq-layout">
        <div class="faq-left">
          <span class="eyebrow">Have Questions?</span>
          <h2 class="h2" style="font-size:28px;">Let's clear your doubts</h2>
          <p class="sub">Pertanyaan yang sering ditanyakan tentang saya dan layanan saya.</p>
          <a href="" class="btn btn-dark" style="margin-top:26px;">Contact Me</a>
        </div>
        <div class="faq-right">
          @php
            $faqs = [
              ['q'=>'Apakah Dafagiandra menerima project freelance?','a'=>'Ya. Saya terbuka untuk project freelance UI/UX Design, Web Development, maupun undangan Public Speaking — silakan hubungi lewat form kontak.'],
              ['q'=>'Tools apa yang biasa digunakan?','a'=>'Untuk desain: Figma dan Adobe XD. Untuk development: Laravel, Tailwind CSS, HTML, CSS, dan JavaScript.'],
              ['q'=>'Berapa lama pengerjaan satu project?','a'=>'Tergantung kompleksitas. Desain UI biasanya 1–2 minggu, web development sekitar 2–4 minggu.'],
              ['q'=>'Bagaimana cara menghubungi Anda?','a'=>'Lewat email, LinkedIn, atau form kontak yang tersedia langsung di halaman ini.'],
            ];
          @endphp
          @foreach ($faqs as $i => $faq)
            <div class="faq-item" id="faq-item-{{ $i }}">
              <button class="faq-btn" onclick="toggleFaq({{ $i }})" aria-expanded="false">
                <span class="faq-question">{{ $faq['q'] }}</span>
                <span class="faq-icon" id="faq-icon-{{ $i }}">
                  <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="var(--ink)" stroke-width="2.5" stroke-linecap="round"><path d="M12 5v14M5 12h14"/></svg>
                </span>
              </button>
              <div class="faq-answer" id="faq-answer-{{ $i }}">
                <div class="faq-answer-inner">{{ $faq['a'] }}</div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>

  {{-- ======= FOOTER ======= --}}
  <footer class="footer">
    <div class="wrap">
      <div class="footer-top">
        <div class="footer-brand">
          <span class="navbar-logo">DAFAGIANDRA<span>.</span></span>
          <p>UI/UX Designer &amp; Web Developer yang siap membantu mewujudkan ide digital Anda.</p>
          <div class="footer-socials">
            <a href="" class="footer-social" aria-label="LinkedIn"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.8"><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/><path d="M10 9h4v2c1-1.5 2.5-2 4-2 3 0 5 2 5 5v7h-4v-6c0-1.5-1-2.5-2.5-2.5S12 14.5 12 16v5h-4V9Z"/></svg></a>
            <a href="" class="footer-social" aria-label="GitHub"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"/></svg></a>
            <a href="" class="footer-social" aria-label="Instagram"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.8"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1"/></svg></a>
          </div>
        </div>
        <div class="footer-col">
          <p class="footer-col-title">Services</p>
          <ul>
            <li><a href="">UI/UX Design</a></li>
            <li><a href="">Web Development</a></li>
            <li><a href="">Public Speaking</a></li>
            <li><a href="">Digital Consulting</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <p class="footer-col-title">Quick Links</p>
          <ul>
            <li><a href="#About">About Me</a></li>
            <li><a href="#Projects">Portfolio</a></li>
            <li><a href="#FAQ">Hire Me</a></li>
            <li><a href="">Download CV</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <p class="footer-col-title">Contact</p>
          <ul>
            <li><a href="mailto:dafagiandra@email.com">dafagiandra@email.com</a></li>
            <li><a href="">LinkedIn</a></li>
            <li><a href="">GitHub</a></li>
            <li><a href="">Instagram</a></li>
          </ul>
        </div>
      </div>
      <div class="footer-bottom">
        <span>© {{ date('Y') }} Dafagiandra Dwi Maulana — Sistem Informasi</span>
        <span>Built with Laravel &amp; Tailwind</span>
      </div>
    </div>
  </footer>

  <script>
    function toggleFaq(i) {
      const item = document.getElementById('faq-item-' + i);
      const isOpen = item.classList.contains('open');
      document.querySelectorAll('.faq-item').forEach((el, idx) => {
        el.classList.remove('open');
        document.querySelectorAll('.faq-btn')[idx].setAttribute('aria-expanded', 'false');
      });
      if (!isOpen) {
        item.classList.add('open');
        item.querySelector('.faq-btn').setAttribute('aria-expanded', 'true');
      }
    }
  </script>
</body>
</html>