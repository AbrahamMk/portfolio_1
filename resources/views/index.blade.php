<x-layouts.app
  :title="'Abraham — Web Developer'"
  :description="'Modern portfolio for Abraham (web developer).'"
>
  <header class="site-header" data-header>
    <div class="container header-inner">
      <a class="brand" href="{{ route('index') }}" aria-label="Go to top">
        <span class="brand-mark" aria-hidden="true"></span>
        <span class="brand-text">Abraham</span>
      </a>

      <button class="icon-button nav-toggle" type="button" data-nav-toggle aria-controls="site-nav" aria-expanded="false">
        <span class="sr-only">Open menu</span>
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" aria-hidden="true">
          <path d="M4 7h16M4 12h16M4 17h16" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
        </svg>
      </button>

      <nav class="site-nav" id="site-nav" data-nav>
        <a class="nav-link" href="#about">About</a>
        <a class="nav-link" href="#skills">Skills</a>
        <a class="nav-link" href="#projects">Projects</a>
        <a class="nav-link" href="#contact">Contact</a>
        <button class="icon-button theme-toggle" type="button" data-theme-toggle aria-label="Toggle theme">
          <span class="sr-only">Toggle theme</span>
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" aria-hidden="true" data-theme-icon="sun">
            <path d="M12 18a6 6 0 1 0 0-12 6 6 0 0 0 0 12Z" stroke="currentColor" stroke-width="2"/>
            <path d="M12 2v2M12 20v2M4 12H2M22 12h-2M4.9 4.9 6.3 6.3M17.7 17.7l1.4 1.4M19.1 4.9 17.7 6.3M6.3 17.7 4.9 19.1" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
          </svg>
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" aria-hidden="true" data-theme-icon="moon">
            <path d="M21 14.5A8 8 0 0 1 9.5 3a7 7 0 1 0 11.5 11.5Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
          </svg>
        </button>
      </nav>
    </div>
  </header>

  <main id="main">
    <section class="hero" aria-label="Introduction">
      <div class="container hero-grid">
        <div class="hero-copy">
          <p class="eyebrow">Web Developer</p>
          <h1 class="hero-title">
            I build clean, fast, delightful web experiences.
          </h1>
          <p class="hero-subtitle">
            Full‑stack developer focused on modern Laravel apps, accessible UI, and pragmatic engineering.
          </p>

          <div class="hero-cta">
            <a class="button primary" href="#projects">View projects</a>
            <a class="button secondary" href="#contact">Let’s work together</a>
          </div>

          <div class="hero-links" aria-label="Social links">
            <a class="chip" href="#" rel="noreferrer" aria-label="Twitter (replace link)">
              <span aria-hidden="true">𝕏</span>
              <span class="chip-text">Twitter</span>
            </a>
            <a class="chip" href="#" rel="noreferrer" aria-label="LinkedIn (replace link)">
              <span aria-hidden="true">in</span>
              <span class="chip-text">LinkedIn</span>
            </a>
            <a class="chip" href="mailto:abrahammekonnen197@gmail.com" aria-label="Email">
              <span aria-hidden="true">@</span>
              <span class="chip-text">Email</span>
            </a>
          </div>
        </div>

        <div class="hero-card" aria-label="Profile card">
          <div class="avatar-wrap">
            <img
              class="avatar"
              src="{{ asset('Personal/assets/img/me.jpg') }}"
              alt="Portrait of Abraham"
              loading="lazy"
              decoding="async"
            />
          </div>
          <dl class="meta">
            <div class="meta-row">
              <dt>Location</dt>
              <dd>Addis Ababa, Ethiopia</dd>
            </div>
            <div class="meta-row">
              <dt>Phone</dt>
              <dd><a href="tel:+251984721393">+251 984 721 393</a></dd>
            </div>
            <div class="meta-row">
              <dt>Email</dt>
              <dd><a href="mailto:abrahammekonnen197@gmail.com">abrahammekonnen197@gmail.com</a></dd>
            </div>
          </dl>
        </div>
      </div>
      <div class="hero-bg" aria-hidden="true"></div>
    </section>

    <section class="section" id="about">
      <div class="container">
        <div class="section-heading">
          <h2>About</h2>
          <p>Curious, reliable, and obsessed with craft.</p>
        </div>

        <div class="grid two">
          <div class="card">
            <h3>What I do</h3>
            <p>
              I design and build responsive web apps from database to UI. I enjoy shipping features that feel simple,
              run fast, and are accessible by default.
            </p>
            <ul class="list">
              <li>Laravel &amp; PHP back‑ends</li>
              <li>Modern JavaScript and Vite</li>
              <li>Design systems &amp; component UI</li>
              <li>Performance, SEO, and accessibility</li>
            </ul>
          </div>

          <div class="card">
            <h3>How I work</h3>
            <p>
              I communicate clearly, document decisions, and iterate quickly. I care about maintainability and creating
              interfaces users actually enjoy.
            </p>
            <div class="stat-grid" aria-label="Highlights">
              <div class="stat">
                <div class="stat-value">Fast</div>
                <div class="stat-label">Performance‑minded</div>
              </div>
              <div class="stat">
                <div class="stat-value">Clean</div>
                <div class="stat-label">Readable code</div>
              </div>
              <div class="stat">
                <div class="stat-value">A11y</div>
                <div class="stat-label">Inclusive UI</div>
              </div>
              <div class="stat">
                <div class="stat-value">Pragmatic</div>
                <div class="stat-label">Ship the value</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section" id="skills">
      <div class="container">
        <div class="section-heading">
          <h2>Skills</h2>
          <p>A toolkit built from real projects.</p>
        </div>

        <div class="grid three">
          <div class="card">
            <h3>Front‑end</h3>
            <ul class="pill-list">
              <li>HTML</li>
              <li>CSS</li>
              <li>JavaScript</li>
              <li>Accessibility</li>
              <li>Responsive UI</li>
            </ul>
          </div>
          <div class="card">
            <h3>Back‑end</h3>
            <ul class="pill-list">
              <li>PHP</li>
              <li>Laravel</li>
              <li>REST APIs</li>
              <li>Auth</li>
              <li>Testing basics</li>
            </ul>
          </div>
          <div class="card">
            <h3>Workflow</h3>
            <ul class="pill-list">
              <li>Git</li>
              <li>Vite</li>
              <li>CI‑friendly</li>
              <li>Docs</li>
              <li>Code review</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section class="section" id="projects">
      <div class="container">
        <div class="section-heading">
          <h2>Projects</h2>
          <p>Replace these cards with your real work.</p>
        </div>

        <div class="grid three">
          <article class="card project">
            <div class="project-top">
              <h3>Portfolio refresh</h3>
              <p>Elegant UI with dark mode, smooth navigation, and modern typography.</p>
            </div>
            <div class="project-tags" aria-label="Tech used">
              <span class="tag">Laravel</span>
              <span class="tag">Vite</span>
              <span class="tag">CSS</span>
            </div>
            <a class="project-link" href="#contact">Request a demo</a>
          </article>

          <article class="card project">
            <div class="project-top">
              <h3>Business landing page</h3>
              <p>Conversion‑focused site with performance budgets and SEO‑friendly structure.</p>
            </div>
            <div class="project-tags" aria-label="Tech used">
              <span class="tag">HTML</span>
              <span class="tag">CSS</span>
              <span class="tag">Analytics</span>
            </div>
            <a class="project-link" href="#contact">View details</a>
          </article>

          <article class="card project">
            <div class="project-top">
              <h3>Admin dashboard</h3>
              <p>Clean tables, forms, and validation patterns that scale with the product.</p>
            </div>
            <div class="project-tags" aria-label="Tech used">
              <span class="tag">PHP</span>
              <span class="tag">Auth</span>
              <span class="tag">UX</span>
            </div>
            <a class="project-link" href="#contact">See screenshots</a>
          </article>
        </div>
      </div>
    </section>

    <section class="section" id="contact">
      <div class="container">
        <div class="section-heading">
          <h2>Contact</h2>
          <p>Have a project in mind? Let’s talk.</p>
        </div>

        <div class="grid two">
          <div class="card">
            <h3>Get in touch</h3>
            <p class="muted">
              Email is the fastest way to reach me. If you include a short brief and timeline, I can respond quicker.
            </p>
            <div class="contact-actions">
              <a class="button primary" href="mailto:abrahammekonnen197@gmail.com">Email me</a>
              <a class="button secondary" href="tel:+251984721393">Call</a>
            </div>
            <div class="contact-grid">
              <div>
                <div class="label">Email</div>
                <a href="mailto:abrahammekonnen197@gmail.com">abrahammekonnen197@gmail.com</a>
              </div>
              <div>
                <div class="label">Location</div>
                <div>Addis Ababa, Ethiopia</div>
              </div>
            </div>
          </div>

          <div class="card">
            <h3>Social</h3>
            <p class="muted">Replace these links with your real profiles.</p>
            <div class="social-grid">
              <a class="social" href="#" rel="noreferrer">
                <span class="social-icon" aria-hidden="true">𝕏</span>
                <span>Twitter</span>
              </a>
              <a class="social" href="#" rel="noreferrer">
                <span class="social-icon" aria-hidden="true">in</span>
                <span>LinkedIn</span>
              </a>
              <a class="social" href="#" rel="noreferrer">
                <span class="social-icon" aria-hidden="true">GH</span>
                <span>GitHub</span>
              </a>
              <a class="social" href="mailto:abrahammekonnen197@gmail.com">
                <span class="social-icon" aria-hidden="true">@</span>
                <span>Email</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer class="footer">
    <div class="container footer-inner">
      <div class="footer-left">
        <span class="brand-text">Abraham</span>
        <span class="muted">© {{ now()->year }}</span>
      </div>
      <a class="muted" href="#main" data-back-to-top>Back to top</a>
    </div>
  </footer>
</x-layouts.app>
