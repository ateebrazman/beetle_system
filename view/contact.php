<?php 
require_once '../core/db.php';
require_once '../core/track_visitor.php';
trackVisitor($pdo, 'Contact');
include '../includes/pageheader.php'; 
?>

<body class="inner-page">


    <?php include '../includes/navigation.php'; ?>

    <!-- Page Curtain Reveal -->
    <div class="page-curtain-top"></div>
    <div class="page-curtain-bottom"></div>

    <main>
        <!-- Editorial Hero Section -->
        <section class="section contact-editorial-hero">
            <div class="container">
                <div class="contact-hero-branding reveal-from-bottom">
                    <span class="subheading"><span>GET IN TOUCH</span></span>
                    <h1 class="reveal-h1">Let's build <br><span class="accent-text">Together.</span></h1>
                    <p class="hero-lead">We craft high-fidelity digital systems that combine surgical technical precision with premium aesthetics. Start your project now.</p>
                </div>
            </div>
        </section>

        <!-- Main Contact Grid Section -->
        <section class="section contact-portal-section">
            <div class="container">
                <div class="contact-editorial-grid">
                    <!-- Left: Coordinates and Glass Cards -->
                    <div class="contact-info-column reveal-from-left">
                        <div class="info-intro">
                            <h2>OUR COORDINATES</h2>
                            <p>Reach out directly or visit us. Our lines are always open for visionary projects.</p>
                        </div>
                        
                        <div class="branding-details-grid">
                            <div class="contact-card-glass magnetic">
                                <div class="card-glow"></div>
                                <div class="card-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                        <polyline points="22,6 12,13 2,6"/>
                                    </svg>
                                </div>
                                <span class="detail-label">EMAIL</span>
                                <a href="mailto:beetlesystem@gmail.com" class="detail-link">beetlesystem@gmail.com</a>
                            </div>

                            <div class="contact-card-glass magnetic">
                                <div class="card-glow"></div>
                                <div class="card-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                                    </svg>
                                </div>
                                <span class="detail-label">PHONE</span>
                                <div class="phones-wrapper">
                                    <a href="tel:+916005958161" class="detail-link">+91 6005958161</a>
                                    <a href="tel:+916006801960" class="detail-link">+91 6006801960</a>
                                </div>
                            </div>

                            <div class="contact-card-glass magnetic">
                                <div class="card-glow"></div>
                                <div class="card-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                                        <circle cx="12" cy="10" r="3"/>
                                    </svg>
                                </div>
                                <span class="detail-label">OFFICE</span>
                                <p class="detail-text">Srinagar, J&K, India</p>
                            </div>
                        </div>
                        
                        <div class="contact-social-section">
                            <span class="detail-label">CONNECT</span>
                            <div class="social-mini-flex">
                                <a href="https://www.instagram.com/beetlesystemdotcom?igsh=MWV2enR5d2JtNG51aQ==" target="_blank" class="magnetic social-pill">
                                    <span>Instagram</span>
                                </a>
                                <a href="https://www.instagram.com/beetlesystemdotcom?igsh=MWV2enR5d2JtNG51aQ==" target="_blank" class="magnetic social-pill">
                                    <span>LinkedIn</span>
                                </a>
                                <a href="https://www.instagram.com/beetlesystemdotcom?igsh=MWV2enR5d2JtNG51aQ==" target="_blank" class="magnetic social-pill">
                                    <span>Twitter</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Minimalist Form -->
                    <div class="contact-form-column reveal-from-right">
                        <div class="form-instruction">
                            <span class="step-num">01</span>
                            <p>TELL US ABOUT YOUR PROJECT GOALS AND WE'LL GET BACK TO YOU AS SOON AS POSSIBLE.</p>
                        </div>

                        <form id="main-contact-form" class="visionary-form">
                            <div class="form-grid-inputs">
                                <div class="v-form-group">
                                    <label for="contact-name">YOUR NAME</label>
                                    <input type="text" id="contact-name" placeholder="Your Name" required>
                                </div>
                                
                                <div class="v-form-group">
                                    <label for="contact-email">YOUR EMAIL</label>
                                    <input type="email" id="contact-email" placeholder="Your Email" required>
                                </div>

                                <div class="v-form-group" style="grid-column: span 2;">
                                    <label for="contact-phone">PHONE NUMBER (OPTIONAL)</label>
                                    <input type="tel" id="contact-phone" placeholder="+91 00000 00000">
                                </div>
                            </div>

                            <!-- Interactive Service Selector -->
                            <div class="interactive-selector">
                                <label class="selector-label">WHAT SERVICE DO YOU NEED?</label>
                                <div class="service-chips" id="service-chips-container">
                                    <button type="button" class="chip active" data-value="Web Design">Web Design</button>
                                    <button type="button" class="chip" data-value="Web Development">Web Development</button>
                                    <button type="button" class="chip" data-value="SaaS & Custom Apps">SaaS & Apps</button>
                                    <button type="button" class="chip" data-value="E-Commerce">E-Commerce</button>
                                    <button type="button" class="chip" data-value="Consultation">Consultation</button>
                                </div>
                                <input type="hidden" id="contact-subject" name="subject" value="Web Design">
                                <input type="hidden" id="contact-service" name="service" value="Web Design">
                            </div>

                            <!-- Interactive Budget Selector -->
                            <div class="interactive-selector">
                                <label class="selector-label">ESTIMATED BUDGET</label>
                                <div class="budget-chips" id="budget-chips-container">
                                    <button type="button" class="chip active" data-value="Under ₹25k">Under ₹25k</button>
                                    <button type="button" class="chip" data-value="₹25k - ₹50k">₹25k - ₹50k</button>
                                    <button type="button" class="chip" data-value="₹50k - ₹100k">₹50k - ₹100k</button>
                                    <button type="button" class="chip" data-value="₹100k+">₹100k+</button>
                                </div>
                                <input type="hidden" id="contact-budget" name="budget" value="Under ₹25k">
                            </div>

                            <div class="v-form-group">
                                <label for="contact-message">YOUR MESSAGE</label>
                                <textarea id="contact-message" rows="4" placeholder="Describe your project, timeline, and goals..." required></textarea>
                            </div>

                            <div class="form-action-zone">
                                <button type="submit" class="transmit-btn submit-btn magnetic">
                                    <span>SEND TRANSMISSION</span>
                                    <div class="btn-arrow">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                            <polyline points="12 5 19 12 12 19"></polyline>
                                        </svg>
                                    </div>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include '../includes/footer.php'; ?>

    <!-- Multi-Step Inquiry Modal -->
    <div id="contact-modal" class="modal multi-step-modal">
        <div class="modal-content">
            <button class="modal-close" id="contact-modal-close" aria-label="Close modal">&times;</button>
            <div class="modal-progress">
                <div class="progress-bar" id="form-progress" style="width: 33.33%;"></div>
            </div>
            <form id="multi-step-form">
                <div class="step active" data-step="1">
                    <h2>TELL US ABOUT YOU</h2>
                    <div class="form-group"><label>FULL NAME</label><input type="text" id="ms-name"
                            placeholder="Your Name" required></div>
                    <div class="form-group"><label>COMPANY / ORGANIZATION</label><input type="text" id="ms-company"
                            placeholder="Your Company"></div>
                    <div class="form-navigation"><button type="button" class="next-btn">CONTINUE</button></div>
                </div>
                <div class="step" data-step="2">
                    <h2>HOW TO REACH YOU</h2>
                    <div class="form-group"><label>WORK EMAIL</label><input type="email" id="ms-email"
                            placeholder="Your Email" required></div>
                    <div class="form-group"><label>PHONE NUMBER (OPTIONAL)</label><input type="tel" id="ms-phone"
                            placeholder="Your Phone Number"></div>
                    <div class="form-navigation"><button type="button" class="back-btn">BACK</button><button
                            type="button" class="next-btn">CONTINUE</button></div>
                </div>
                <!-- Step 3: Additional Discovery & Source -->
                <div class="step" data-step="3">
                    <h2>PROJECT DISCOVERY</h2>
                    <div class="form-group"><label>BRIEF PROJECT OVERVIEW</label><textarea id="ms-project" rows="3"
                            placeholder="What are you looking to build?"></textarea></div>
                    <div class="source-header">Where did you hear about us?</div>
                    <div class="main-category-grid" id="main-cat-grid">
                        <div class="main-cat-item" data-category="social">Social Media</div>
                        <div class="main-cat-item" data-category="websites">Web Platforms</div>
                        <div class="main-cat-item" data-category="referrals">Referrals</div>
                        <div class="main-cat-item" data-category="physical">Physical</div>
                        <div class="main-cat-item" data-category="offline">Offline Ads</div>
                        <div class="main-cat-item" data-category="others">Others</div>
                    </div>
                    <div class="sub-options-container">
                        <div class="sub-options-group" data-parent="social">
                            <div class="cat-item" data-value="Instagram"><span class="cat-icon">📸</span> Instagram
                            </div>
                            <div class="cat-item" data-value="LinkedIn"><span class="cat-icon">💼</span> LinkedIn</div>
                            <div class="cat-item" data-value="Facebook"><span class="cat-icon">👥</span> Facebook</div>
                            <div class="cat-item" data-value="Others"><span class="cat-icon">➕</span> Others</div>
                            <div class="custom-detail-field" id="ms-social-custom"><label>SPECIFY PLATFORM</label><input
                                    type="text" placeholder="..."></div>
                        </div>
                        <div class="sub-options-group" data-parent="websites">
                            <div class="cat-item" data-value="pwclimate"><span class="cat-icon">🌐</span> pwclimate
                            </div>
                            <div class="cat-item" data-value="dryium"><span class="cat-icon">✨</span> dryium</div>
                            <div class="cat-item" data-value="portfolios"><span class="cat-icon">🎨</span> Portfolios
                            </div>
                            <div class="cat-item" data-value="Others"><span class="cat-icon">➕</span> Others</div>
                            <div class="custom-detail-field" id="ms-web-custom"><label>SPECIFY WEBSITE</label><input
                                    type="text" placeholder="..."></div>
                        </div>
                        <div class="sub-options-group" data-parent="referrals">
                            <div class="cat-item" data-value="Client Referral"><span class="cat-icon">🤝</span> Client
                            </div>
                            <div class="cat-item" data-value="Partner Referral"><span class="cat-icon">🏢</span> Partner
                            </div>
                            <div class="cat-item" data-value="Others"><span class="cat-icon">➕</span> Others</div>
                            <div class="custom-detail-field" id="ms-ref-custom"><label>WHO REFERRED YOU?</label><input
                                    type="text" placeholder="..."></div>
                        </div>
                        <div class="sub-options-group" data-parent="physical">
                            <div class="cat-item" data-value="Events"><span class="cat-icon">🎪</span> Tech Events</div>
                            <div class="cat-item" data-value="Office Visit"><span class="cat-icon">🏢</span> Office
                                Visit</div>
                            <div class="cat-item" data-value="Others"><span class="cat-icon">➕</span> Others</div>
                            <div class="custom-detail-field" id="ms-physical-custom"><label>SPECIFY
                                    INTERACTION</label><input type="text" placeholder="..."></div>
                        </div>
                        <div class="sub-options-group" data-parent="offline">
                            <div class="cat-item" data-value="Billboard"><span class="cat-icon">🖼️</span> Billboard
                            </div>
                            <div class="cat-item" data-value="Print Media"><span class="cat-icon">📰</span> Print Media
                            </div>
                            <div class="cat-item" data-value="Others"><span class="cat-icon">➕</span> Others</div>
                            <div class="custom-detail-field" id="ms-offline-custom"><label>SPECIFY AD
                                    SOURCE</label><input type="text" placeholder="..."></div>
                        </div>
                        <div class="sub-options-group" data-parent="others">
                            <div class="custom-detail-field active" style="grid-column: span 2;"><label>PLEASE
                                    DESCRIBE</label><input type="text" id="ms-other-detail-final" placeholder="...">
                            </div>
                        </div>
                        <div id="sub-placeholder"
                            style="text-align:center; opacity:0.3; font-size:0.8rem; padding-top:1rem;">Select a
                            category above</div>
                    </div>
                    <input type="hidden" id="ms-source" name="source">
                    <div class="form-navigation">
                        <button type="button" class="back-btn">BACK</button>
                        <button type="submit" class="submit-btn group">FINALIZE</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="core/main.js" defer></script>
</body>

</html>