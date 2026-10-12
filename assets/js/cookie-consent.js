/**
 * DPDP Act (2023) Compliant Consent & Cookie Management System
 * Prayag Hospital & Research Centre
 */
(function () {
    const CONSENT_KEY = 'prayag_dpdp_consent_v1';

    function getConsent() {
        try {
            const data = localStorage.getItem(CONSENT_KEY);
            return data ? JSON.parse(data) : null;
        } catch (e) {
            return null;
        }
    }

    function saveConsent(analytics, marketing) {
        const consentData = {
            essential: true,
            analytics: !!analytics,
            marketing: !!marketing,
            timestamp: new Date().toISOString(),
            version: '1.0'
        };
        try {
            localStorage.setItem(CONSENT_KEY, JSON.stringify(consentData));
        } catch (e) {
            console.error('Could not save cookie consent:', e);
        }
        hideBanner();
        applyConsent(consentData);
    }

    function applyConsent(consent) {
        if (consent && consent.analytics) {
            // Enable analytics scripts if any
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({ event: 'consent_analytics_granted' });
        }
        if (consent && consent.marketing) {
            // Enable marketing scripts if any
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({ event: 'consent_marketing_granted' });
        }
    }

    function hideBanner() {
        const banner = document.getElementById('prayag-cookie-banner');
        if (banner) {
            banner.style.display = 'none';
        }
    }

    function showBanner() {
        let banner = document.getElementById('prayag-cookie-banner');
        if (!banner) {
            createBanner();
        } else {
            banner.style.display = 'block';
        }
    }

    function createBanner() {
        const banner = document.createElement('div');
        banner.id = 'prayag-cookie-banner';
        banner.className = 'cookie-banner-wrapper';
        banner.innerHTML = `
            <div class="cookie-banner-header">
                <div class="cookie-icon"><i class="fas fa-shield-alt"></i></div>
                <h4>Your Privacy & Consent</h4>
            </div>
            <div class="cookie-banner-body">
                <p>
                    In compliance with the <strong>Digital Personal Data Protection (DPDP) Act, 2023</strong>, Prayag Hospital uses cookies to ensure secure operation, enhance patient experience, and analyze hospital website traffic. You can customize your preferences at any time.
                    <a href="cookie-policy.php" target="_blank">Read Cookie Policy</a>.
                </p>
                
                <div class="cookie-preferences-panel" id="cookiePrefPanel">
                    <div class="cookie-pref-item">
                        <div class="cookie-pref-info">
                            <div class="cookie-pref-title">Strictly Necessary Cookies <span class="cookie-pref-badge">Always Active</span></div>
                            <div class="cookie-pref-desc">Required for security, navigation, and core hospital appointment operations.</div>
                        </div>
                        <div>
                            <input type="checkbox" checked disabled class="form-check-input">
                        </div>
                    </div>
                    <div class="cookie-pref-item">
                        <div class="cookie-pref-info">
                            <div class="cookie-pref-title">Performance & Analytics</div>
                            <div class="cookie-pref-desc">Help us measure website traffic and improve digital patient services.</div>
                        </div>
                        <div>
                            <input type="checkbox" id="prefAnalytics" class="form-check-input" checked>
                        </div>
                    </div>
                    <div class="cookie-pref-item">
                        <div class="cookie-pref-info">
                            <div class="cookie-pref-title">Marketing & Communications</div>
                            <div class="cookie-pref-desc">Used to provide relevant health awareness alerts and updates.</div>
                        </div>
                        <div>
                            <input type="checkbox" id="prefMarketing" class="form-check-input">
                        </div>
                    </div>
                </div>

                <div class="cookie-actions">
                    <button type="button" class="btn-cookie btn-cookie-accept" id="btnAcceptAll">Accept All</button>
                    <button type="button" class="btn-cookie btn-cookie-reject" id="btnRejectOptional">Reject Optional</button>
                    <button type="button" class="btn-cookie btn-cookie-pref" id="btnTogglePref">Customize</button>
                    <button type="button" class="btn-cookie btn-cookie-accept" id="btnSaveCustomPref" style="display:none;">Save Choices</button>
                </div>
            </div>
        `;

        document.body.appendChild(banner);

        // Add event listeners
        document.getElementById('btnAcceptAll').addEventListener('click', function () {
            saveConsent(true, true);
        });

        document.getElementById('btnRejectOptional').addEventListener('click', function () {
            saveConsent(false, false);
        });

        const toggleBtn = document.getElementById('btnTogglePref');
        const saveCustomBtn = document.getElementById('btnSaveCustomPref');
        const prefPanel = document.getElementById('cookiePrefPanel');
        const acceptBtn = document.getElementById('btnAcceptAll');
        const rejectBtn = document.getElementById('btnRejectOptional');

        toggleBtn.addEventListener('click', function () {
            if (prefPanel.style.display === 'block') {
                prefPanel.style.display = 'none';
                saveCustomBtn.style.display = 'none';
                acceptBtn.style.display = 'inline-block';
                rejectBtn.style.display = 'inline-block';
                toggleBtn.textContent = 'Customize';
            } else {
                prefPanel.style.display = 'block';
                saveCustomBtn.style.display = 'inline-block';
                acceptBtn.style.display = 'none';
                rejectBtn.style.display = 'none';
                toggleBtn.textContent = 'Close';
            }
        });

        saveCustomBtn.addEventListener('click', function () {
            const analytics = document.getElementById('prefAnalytics').checked;
            const marketing = document.getElementById('prefMarketing').checked;
            saveConsent(analytics, marketing);
        });
    }

    function createFloatingTrigger() {
        if (document.getElementById('prayag-privacy-trigger')) return;
        const trigger = document.createElement('button');
        trigger.id = 'prayag-privacy-trigger';
        trigger.className = 'privacy-floating-btn';
        trigger.setAttribute('title', 'Manage Privacy & Cookie Preferences');
        trigger.setAttribute('aria-label', 'Manage Privacy & Cookie Preferences');
        trigger.innerHTML = '<i class="fas fa-user-shield"></i>';
        trigger.addEventListener('click', function () {
            showBanner();
            const prefPanel = document.getElementById('cookiePrefPanel');
            const saveCustomBtn = document.getElementById('btnSaveCustomPref');
            const toggleBtn = document.getElementById('btnTogglePref');
            if (prefPanel) {
                prefPanel.style.display = 'block';
                if (saveCustomBtn) saveCustomBtn.style.display = 'inline-block';
                if (toggleBtn) toggleBtn.textContent = 'Close';
            }
        });
        document.body.appendChild(trigger);
    }

    document.addEventListener('DOMContentLoaded', function () {
        const currentConsent = getConsent();
        if (!currentConsent) {
            // Show banner after brief delay
            setTimeout(createBanner, 800);
        } else {
            applyConsent(currentConsent);
        }
        createFloatingTrigger();
    });
})();
