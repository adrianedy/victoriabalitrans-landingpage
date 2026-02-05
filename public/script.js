// Smooth scroll for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Add fade-in animation on scroll
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('opacity-100', 'translate-y-0');
            entry.target.classList.remove('opacity-0', 'translate-y-8');
        }
    });
}, observerOptions);

// When a section with carousels enters viewport, load all lazy images in that section at once
const carouselSectionObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (!entry.isIntersecting) return;
        const section = entry.target;
        if (section.dataset.carouselImagesLoaded === '1') return;
        section.dataset.carouselImagesLoaded = '1';
        section.querySelectorAll('img.lazy-img').forEach((img) => {
            if (img.dataset.carouselEagerLoaded === '1') return;
            img.dataset.carouselEagerLoaded = '1';
            img.loading = 'eager';
            img.src = img.src;
            if (img.complete && img.naturalWidth > 0) {
                img.classList.add('lazy-loaded');
            } else {
                img.addEventListener('load', function onLoad() {
                    img.classList.add('lazy-loaded');
                    img.removeEventListener('load', onLoad);
                });
            }
        });
    });
}, { rootMargin: '100px 0px', threshold: 0.01 });

// Function to observe elements after they're rendered
function observeRenderedElements() {
    document.querySelectorAll('.package-card, .hotel-card, .activity-card, .notes-included, .notes-excluded, .pricing-note').forEach(element => {
        element.classList.add('opacity-0', 'translate-y-8', 'transition-all', 'duration-700');
        observer.observe(element);
    });
}

// Transport, Hotel, and Trip Selection
let selectedTransport = null;
let selectedHotel = null;
let selectedTrip = null;
let selectedActivities = [];
const whatsappNumber = (typeof window !== 'undefined' && window.__whatsappNumber) ? window.__whatsappNumber : '6285103771369';
let lastAutoEmailBody = '';

function buildInquiryMessage() {
    // If nothing is selected
    if (!selectedTransport && !selectedHotel && !selectedTrip && selectedActivities.length === 0) {
        return 'Hello, I would like to ask about your services.';
    }

    // Using simple text instead of emoji to avoid encoding issues
    let message = 'Hello, I\'m interested in the following services:\n\n';

    if (selectedTrip) {
        message += 'Trip Package:\n';
        message += `   - ${selectedTrip.title}\n\n`;
    }

    if (selectedActivities.length > 0) {
        message += 'Activities:\n';
        selectedActivities.forEach(activity => {
            message += `   - ${activity.title} - ${activity.option}\n`;
        });
        message += '\n';
    }

    if (selectedTransport) {
        message += 'Transport:\n';
        message += `   - ${selectedTransport.name}\n\n`;
    }

    if (selectedHotel) {
        message += 'Hotel:\n';
        message += `   - ${selectedHotel.name}\n\n`;
    }

    message += 'Please provide more information. Thank you!';
    return message;
}

// Function to update transport visual state - blue border with inner circle
function updateTransportVisualState(selectedRadio) {
    // Reset all checkboxes
    document.querySelectorAll('.transport-checkbox').forEach(checkbox => {
        checkbox.classList.remove('selected');
        checkbox.style.borderWidth = '';
        checkbox.style.borderColor = '';
        const innerCircle = checkbox.querySelector('.transport-inner-circle');
        if (innerCircle) {
            innerCircle.classList.add('hidden');
        }
    });
    
    // Apply selected state - thick blue border with inner blue circle
    if (selectedRadio && selectedRadio.checked) {
        const label = selectedRadio.closest('label');
        if (label) {
            const checkbox = label.querySelector('.transport-checkbox');
            if (checkbox) {
                checkbox.classList.add('selected');
                checkbox.style.borderWidth = '3px';
                checkbox.style.borderColor = '#0284c7';
                const innerCircle = checkbox.querySelector('.transport-inner-circle');
                if (innerCircle) {
                    innerCircle.classList.remove('hidden');
                }
            }
        }
    }
}

// Function to update hotel visual state - blue border with inner circle
function updateHotelVisualState(selectedRadio) {
    // Reset all checkboxes
    document.querySelectorAll('.hotel-checkbox').forEach(checkbox => {
        checkbox.classList.remove('selected');
        checkbox.style.borderWidth = '';
        checkbox.style.borderColor = '';
        const innerCircle = checkbox.querySelector('.hotel-inner-circle');
        if (innerCircle) {
            innerCircle.classList.add('hidden');
        }
    });
    
    // Apply selected state - thick blue border with inner blue circle
    if (selectedRadio && selectedRadio.checked) {
        const label = selectedRadio.closest('label');
        if (label) {
            const checkbox = label.querySelector('.hotel-checkbox');
            if (checkbox) {
                checkbox.classList.add('selected');
                checkbox.style.borderWidth = '3px';
                checkbox.style.borderColor = '#0284c7';
                const innerCircle = checkbox.querySelector('.hotel-inner-circle');
                if (innerCircle) {
                    innerCircle.classList.remove('hidden');
                }
            }
        }
    }
}

// Function to update trip visual state - blue border with inner circle
function updateTripVisualState(selectedRadio) {
    // Reset all checkboxes
    document.querySelectorAll('.trip-checkbox').forEach(checkbox => {
        checkbox.classList.remove('selected');
        checkbox.style.borderWidth = '';
        checkbox.style.borderColor = '';
        const innerCircle = checkbox.querySelector('.trip-inner-circle');
        if (innerCircle) {
            innerCircle.classList.add('hidden');
        }
    });
    
    // Apply selected state - thick blue border with inner blue circle
    if (selectedRadio && selectedRadio.checked) {
        const label = selectedRadio.closest('label');
        if (label) {
            const checkbox = label.querySelector('.trip-checkbox');
            if (checkbox) {
                checkbox.classList.add('selected');
                checkbox.style.borderWidth = '3px';
                checkbox.style.borderColor = '#0284c7';
                const innerCircle = checkbox.querySelector('.trip-inner-circle');
                if (innerCircle) {
                    innerCircle.classList.remove('hidden');
                }
            }
        }
    }
}

// Function to update activity visual state - blue border with inner circle
function updateActivityVisualState(row, isChecked) {
    const indicator = row.querySelector('.activity-checkbox');
    const innerCircle = row.querySelector('.activity-inner-circle');
    if (!indicator || !innerCircle) return;
    if (isChecked) {
        indicator.style.borderWidth = '3px';
        indicator.style.borderColor = '#0284c7';
        innerCircle.classList.remove('hidden');
    } else {
        indicator.style.borderWidth = '';
        indicator.style.borderColor = '';
        innerCircle.classList.add('hidden');
    }
}

// Initialize selection handlers when DOM is ready
function initSelectionHandlers() {
    // Initialize visual states to reset all checkboxes
    updateTransportVisualState(null);
    updateHotelVisualState(null);
    updateTripVisualState(null);
    // Handle transport selection - checkboxes (single selection)
    document.querySelectorAll('.transport-checkbox').forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            // Uncheck all other transport checkboxes first (single selection)
            document.querySelectorAll('.transport-checkbox').forEach(other => {
                if (other !== this) {
                    other.checked = false;
                }
            });

            if (this.checked) {
                selectedTransport = {
                    name: this.dataset.name,
                    price: this.dataset.price
                };
                updateTransportVisualState(this);
            } else {
                selectedTransport = null;
                updateTransportVisualState(null);
            }
            updateWhatsAppLink();
        });
    });
    
    // Handle clicks on transport labels - checkboxes handle this automatically

    // Handle hotel selection - checkboxes (single selection)
    document.querySelectorAll('.hotel-checkbox').forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            // Uncheck all other hotel checkboxes first (single selection)
            document.querySelectorAll('.hotel-checkbox').forEach(other => {
                if (other !== this) {
                    other.checked = false;
                }
            });

            if (this.checked) {
                selectedHotel = {
                    name: this.dataset.name
                };
                updateHotelVisualState(this);
            } else {
                selectedHotel = null;
                updateHotelVisualState(null);
            }
            updateWhatsAppLink();
        });
    });
    
    // Handle clicks on hotel labels - checkboxes handle this automatically

    // Handle trip selection - checkboxes (single selection)
    document.querySelectorAll('.trip-checkbox').forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            // Uncheck all other trip checkboxes first (single selection)
            document.querySelectorAll('.trip-checkbox').forEach(other => {
                if (other !== this) {
                    other.checked = false;
                }
            });

            if (this.checked) {
                selectedTrip = {
                    title: this.dataset.title,
                    price: this.dataset.price
                };
                updateTripVisualState(this);
            } else {
                selectedTrip = null;
                updateTripVisualState(null);
            }
            updateWhatsAppLink();
        });
    });
    
    // Handle clicks on trip labels - checkboxes handle this automatically

    // Handle activity selection - multiple select
    document.querySelectorAll('.activity-option').forEach(checkbox => {
        const row = checkbox.closest('.activity-option-row');
        const updateSelection = () => {
            const title = checkbox.dataset.activityTitle;
            const option = checkbox.dataset.activityOption;
            const key = `${title}||${option}`;
            if (checkbox.checked) {
                if (!selectedActivities.some(item => item.key === key)) {
                    selectedActivities.push({ key, title, option });
                }
            } else {
                selectedActivities = selectedActivities.filter(item => item.key !== key);
            }
            if (row) {
                updateActivityVisualState(row, checkbox.checked);
            }
            updateWhatsAppLink();
        };

        checkbox.addEventListener('change', updateSelection);
        updateSelection();
    });
}

// Generate WhatsApp message
function generateWhatsAppMessage() {
    return encodeURIComponent(buildInquiryMessage());
}

// Update WhatsApp link
function updateWhatsAppLink() {
    const whatsappLink = document.getElementById('whatsapp-link');
    if (whatsappLink) {
        const message = generateWhatsAppMessage();
        whatsappLink.href = `https://wa.me/${whatsappNumber}?text=${message}`;
    }

    // Keep the email textarea in sync (but don't overwrite user edits)
    const emailBodyEl = document.getElementById('email-body');
    if (emailBodyEl) {
        const nextAuto = buildInquiryMessage();
        const current = (emailBodyEl.value || '').trim();
        const last = (lastAutoEmailBody || '').trim();
        if (current === '' || current === last) {
            emailBodyEl.value = nextAuto;
            lastAutoEmailBody = nextAuto;
        }
    }
}

// Carousel functionality
const getSlideMetrics = (carousel) => {
    const firstSlide = carousel.firstElementChild;
    if (!firstSlide) return { slideWidth: 0 };
    const slideWidth = firstSlide.getBoundingClientRect().width;
    const gap = parseFloat(getComputedStyle(carousel).columnGap || '0') || 0;
    return { slideWidth: slideWidth + gap };
};

const getCarouselIndex = (carousel) => {
    const { slideWidth } = getSlideMetrics(carousel);
    if (!slideWidth) return 0;
    return Math.round(carousel.scrollLeft / slideWidth);
};

const scrollCarouselTo = (carousel, index) => {
    const { slideWidth } = getSlideMetrics(carousel);
    if (!slideWidth) return;
    carousel.scrollTo({ left: slideWidth * index, behavior: 'smooth' });
    carousel.dataset.carouselIndex = String(index);
};

const stepCarousel = (targetId, direction) => {
    const carousel = document.getElementById(targetId);
    if (!carousel) return;
    const slideCount = carousel.children.length;
    if (!slideCount) return;
    const currentIndex = Number(carousel.dataset.carouselIndex || getCarouselIndex(carousel));
    const nextIndex = (currentIndex + direction + slideCount) % slideCount;
    scrollCarouselTo(carousel, nextIndex);
};

const CAROUSEL_INTERVAL_MS = 5000;

const startAutoScrollInterval = (carousel) => {
    if (carousel._autoScrollIntervalId != null) return;
    const targetId = carousel.getAttribute('id');
    if (!targetId) return;
    carousel._autoScrollIntervalId = setInterval(() => {
        if (carousel._autoScrollHovering) return;
        stepCarousel(targetId, 1);
    }, CAROUSEL_INTERVAL_MS);
};

const stopAutoScrollInterval = (carousel) => {
    if (carousel._autoScrollIntervalId != null) {
        clearInterval(carousel._autoScrollIntervalId);
        carousel._autoScrollIntervalId = null;
    }
};

const startAutoScroll = (carousel) => {
    const slideCount = carousel.children.length;
    if (slideCount <= 1) return;

    const carouselId = carousel.getAttribute('id') || '';
    if (carouselId.startsWith('hotel-carousel')) return; // No auto-scroll for hotel carousels

    carousel._autoScrollHovering = false;
    carousel.addEventListener('mouseenter', () => {
        carousel._autoScrollHovering = true;
    });
    carousel.addEventListener('mouseleave', () => {
        carousel._autoScrollHovering = false;
    });

    // Only run auto-scroll when carousel is visible in viewport
    const visibilityObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                startAutoScrollInterval(entry.target);
            } else {
                stopAutoScrollInterval(entry.target);
            }
        });
    }, { rootMargin: '0px 0px 0px 0px', threshold: 0.1 });

    visibilityObserver.observe(carousel);
};

// Initialize everything when DOM is ready
document.addEventListener('DOMContentLoaded', function() {
    // Mark lazy-loaded images when they finish loading (for fade-in)
    document.querySelectorAll('img.lazy-img').forEach(function(img) {
        if (img.complete && img.naturalWidth > 0) {
            img.classList.add('lazy-loaded');
        } else {
            img.addEventListener('load', function() {
                img.classList.add('lazy-loaded');
            });
        }
    });
    // Email form: prefer PHP endpoint (send-email.php), fallback to mailto:
    const emailForm = document.getElementById('email-form');
    const emailFormMessage = document.getElementById('email-form-message');
    const showEmailMessage = (kind, text) => {
        if (!emailFormMessage) return;
        emailFormMessage.classList.remove('hidden');
        emailFormMessage.className =
            'mb-4 rounded-lg px-4 py-3 text-sm sm:text-base ' +
            (kind === 'success'
                ? 'bg-green-500/20 text-white border border-green-300/30'
                : 'bg-red-500/20 text-white border border-red-300/30');
        emailFormMessage.textContent = text;
    };

    if (emailForm) {
        // Pre-fill message once on load
        const emailBodyEl = document.getElementById('email-body');
        if (emailBodyEl && (emailBodyEl.value || '').trim() === '') {
            const auto = buildInquiryMessage();
            emailBodyEl.value = auto;
            lastAutoEmailBody = auto;
        }

        // Set timestamp on page load (anti-bot protection)
        const tsEl = document.getElementById('form-ts');
        if (tsEl) {
            tsEl.value = String(Math.floor(Date.now() / 1000));
        }

        emailForm.addEventListener('submit', async (event) => {
            event.preventDefault();

            // Clear any existing message when submit button is clicked
            if (emailFormMessage) {
                emailFormMessage.classList.add('hidden');
                emailFormMessage.textContent = '';
            }

            // Honeypot: reject if website field is filled (bot)
            const websiteField = emailForm.querySelector('input[name="website"]');
            if (websiteField && (websiteField.value || '').trim() !== '') {
                showEmailMessage('error', 'Invalid submission. Please try again.');
                return;
            }

            // Single submit: block if already submitted successfully
            if (emailForm.dataset.submitted === 'true') {
                return;
            }

            const submitBtn = document.getElementById('email-submit-btn');
            if (submitBtn) {
                // Store original button text
                const originalText = submitBtn.querySelector('span').textContent;
                submitBtn.dataset.originalText = originalText;

                // Show loading state
                submitBtn.disabled = true;
                submitBtn.querySelector('span').textContent = submitBtn.dataset.loadingText || 'Sending...';
            }


            const action = (emailForm.getAttribute('action') || '').trim();
            const method = ((emailForm.getAttribute('method') || 'POST').trim() || 'POST').toUpperCase();

            if (!action || method !== 'POST') {
                showEmailMessage('error', 'Form is not configured. Please contact via WhatsApp.');
                if (submitBtn) {
                    submitBtn.disabled = false;
                    // Restore original button text
                    if (submitBtn.dataset.originalText) {
                        submitBtn.querySelector('span').textContent = submitBtn.dataset.originalText;
                    }
                }
                return;
            }

            try {
                const formData = new FormData(emailForm);

                const res = await fetch(action, {
                    method: 'POST',
                    body: formData,
                    headers: { 'Accept': 'application/json' }
                });

                const contentType = res.headers.get('content-type') || '';
                const payload = contentType.includes('application/json')
                    ? await res.json()
                    : { ok: res.ok, success: res.ok, message: await res.text() };

                const isOk = Boolean(payload && (payload.status === 'ok'));
                if (res.ok && isOk) {
                    emailForm.dataset.submitted = 'true';
                    // Update timestamp after successful send (prevent reuse)
                    const tsEl = document.getElementById('form-ts');
                    if (tsEl) {
                        tsEl.value = String(Math.floor(Date.now() / 1000));
                    }
                    showEmailMessage('success', payload.message || 'Email sent successfully.');
                    return;
                }

                const errMsg = (payload && (payload.message || payload.error)) ? (payload.message || payload.error) : 'Failed to send email. Please try again or contact via WhatsApp.';
                showEmailMessage('error', errMsg);
            } catch (e) {
                showEmailMessage('error', 'Failed to send. Please check your connection or contact via WhatsApp.');
            } finally {
                if (submitBtn && emailForm.dataset.submitted !== 'true') {
                    submitBtn.disabled = false;
                    // Restore original button text
                    if (submitBtn.dataset.originalText) {
                        submitBtn.querySelector('span').textContent = submitBtn.dataset.originalText;
                    }
                }
            }
        });
    }
    
    // Initialize package image modal
    const packageImages = new Map();
    let modalPackageIndex = null;
    let modalImageIndex = 0;
    const packageModal = document.getElementById('package-image-modal');
    const packageModalImg = document.getElementById('package-image-modal-img');
    const packageModalTitle = document.getElementById('package-image-modal-title');
    const packageModalPrev = packageModal ? packageModal.querySelector('[data-modal-prev]') : null;
    const packageModalNext = packageModal ? packageModal.querySelector('[data-modal-next]') : null;
    
    document.querySelectorAll('[data-package-image]').forEach((button) => {
        const packageIndex = Number(button.getAttribute('data-package-index'));
        const imageIndex = Number(button.getAttribute('data-image-index'));
        const imageSrc = button.getAttribute('data-package-image-src');
        const title = button.getAttribute('data-package-title');
        const label = button.getAttribute('data-package-image-label');
        if (!packageImages.has(packageIndex)) {
            packageImages.set(packageIndex, { title, images: [], labels: [] });
        }
        const entry = packageImages.get(packageIndex);
        entry.images[imageIndex] = imageSrc;
        entry.labels[imageIndex] = label;
    });
    
    const closePackageModal = () => {
        packageModal.classList.add('hidden');
        packageModal.classList.remove('flex');
        packageModalImg.src = '';
        packageModalImg.alt = '';
        packageModalTitle.textContent = '';
        modalPackageIndex = null;
        modalImageIndex = 0;
    };
    
    const openPackageModalAt = (packageIndex, imageIndex) => {
        const entry = packageImages.get(packageIndex);
        if (!entry || !entry.images.length) return;
        modalPackageIndex = packageIndex;
        modalImageIndex = ((imageIndex % entry.images.length) + entry.images.length) % entry.images.length;
        const imageSrc = entry.images[modalImageIndex];
        const label = entry.labels[modalImageIndex];
        packageModalImg.src = imageSrc;
        packageModalImg.alt = entry.title ? entry.title + ' - ' + label : 'Package image';
        packageModalTitle.textContent = entry.title ? entry.title + ' - ' + label : label;
        packageModal.classList.remove('hidden');
        packageModal.classList.add('flex');
    };
    
    const stepPackageModal = (direction) => {
        if (modalPackageIndex === null) return;
        const entry = packageImages.get(modalPackageIndex);
        if (!entry || !entry.images.length) return;
        openPackageModalAt(modalPackageIndex, modalImageIndex + direction);
    };
    
    document.querySelectorAll('[data-package-image]').forEach((button) => {
        button.addEventListener('click', (event) => {
            event.preventDefault();
            const packageIndex = Number(button.getAttribute('data-package-index'));
            const imageIndex = Number(button.getAttribute('data-image-index'));
            openPackageModalAt(packageIndex, imageIndex);
        });
    });
    
    packageModal.addEventListener('click', (event) => {
        if (event.target === packageModal || event.target.hasAttribute('data-modal-close')) {
            closePackageModal();
        }
    });
    
    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && !packageModal.classList.contains('hidden')) {
            closePackageModal();
        }
        if (!packageModal.classList.contains('hidden')) {
            if (event.key === 'ArrowLeft') stepPackageModal(-1);
            if (event.key === 'ArrowRight') stepPackageModal(1);
        }
    });
    
    if (packageModalPrev) {
        packageModalPrev.addEventListener('click', (event) => {
            event.preventDefault();
            stepPackageModal(-1);
        });
    }
    
    if (packageModalNext) {
        packageModalNext.addEventListener('click', (event) => {
            event.preventDefault();
            stepPackageModal(1);
        });
    }
    
    // Initialize activity modal
    const activityModal = document.getElementById('activity-modal');
    const activityModalImg = document.getElementById('activity-modal-img');
    const activityModalCaption = document.getElementById('activity-modal-caption');
    const activityModalPrev = activityModal ? activityModal.querySelector('[data-modal-prev]') : null;
    const activityModalNext = activityModal ? activityModal.querySelector('[data-modal-next]') : null;
    const activityImages = new Map();
    let modalActivityIndex = null;
    let modalActivityImageIndex = 0;
    
    document.querySelectorAll('[data-activity-image]').forEach((button) => {
        const activityIndex = Number(button.getAttribute('data-activity-index'));
        const imageIndex = Number(button.getAttribute('data-image-index'));
        const imageSrc = button.getAttribute('data-activity-image-src');
        const name = button.getAttribute('data-activity-name');
        const label = button.getAttribute('data-activity-image-label');
        if (!activityImages.has(activityIndex)) {
            activityImages.set(activityIndex, { name, images: [], labels: [] });
        }
        const entry = activityImages.get(activityIndex);
        entry.images[imageIndex] = imageSrc;
        entry.labels[imageIndex] = label;
    });
    
    const closeActivityModal = () => {
        activityModal.classList.add('hidden');
        activityModal.classList.remove('flex');
        activityModalImg.src = '';
        activityModalImg.alt = '';
        activityModalCaption.textContent = '';
        modalActivityIndex = null;
        modalActivityImageIndex = 0;
    };
    
    const openActivityModalAt = (activityIndex, imageIndex) => {
        const entry = activityImages.get(activityIndex);
        if (!entry || !entry.images.length) return;
        modalActivityIndex = activityIndex;
        modalActivityImageIndex = ((imageIndex % entry.images.length) + entry.images.length) % entry.images.length;
        const imageSrc = entry.images[modalActivityImageIndex];
        const label = entry.labels[modalActivityImageIndex];
        activityModalImg.src = imageSrc;
        activityModalImg.alt = entry.name ? entry.name + ' - ' + label : 'Activity image';
        activityModalCaption.textContent = entry.name ? entry.name + ' - ' + label : label;
        activityModal.classList.remove('hidden');
        activityModal.classList.add('flex');
    };
    
    const stepActivityModal = (direction) => {
        if (modalActivityIndex === null) return;
        const entry = activityImages.get(modalActivityIndex);
        if (!entry || !entry.images.length) return;
        openActivityModalAt(modalActivityIndex, modalActivityImageIndex + direction);
    };
    
    document.querySelectorAll('[data-activity-image]').forEach((button) => {
        button.addEventListener('click', (event) => {
            event.preventDefault();
            const activityIndex = Number(button.getAttribute('data-activity-index'));
            const imageIndex = Number(button.getAttribute('data-image-index'));
            openActivityModalAt(activityIndex, imageIndex);
        });
    });
    
    activityModal.addEventListener('click', (event) => {
        if (event.target === activityModal || event.target.hasAttribute('data-modal-close')) {
            closeActivityModal();
        }
    });
    
    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && !activityModal.classList.contains('hidden')) {
            closeActivityModal();
        }
        if (!activityModal.classList.contains('hidden')) {
            if (event.key === 'ArrowLeft') stepActivityModal(-1);
            if (event.key === 'ArrowRight') stepActivityModal(1);
        }
    });
    
    if (activityModalPrev) {
        activityModalPrev.addEventListener('click', (event) => {
            event.preventDefault();
            stepActivityModal(-1);
        });
    }
    
    if (activityModalNext) {
        activityModalNext.addEventListener('click', (event) => {
            event.preventDefault();
            stepActivityModal(1);
        });
    }
    
    // Initialize hotel modal
    const hotelModal = document.getElementById('hotel-modal');
    const hotelModalImg = document.getElementById('hotel-modal-img');
    const hotelModalCaption = document.getElementById('hotel-modal-caption');
    const hotelModalPrev = hotelModal ? hotelModal.querySelector('[data-modal-prev]') : null;
    const hotelModalNext = hotelModal ? hotelModal.querySelector('[data-modal-next]') : null;
    const hotelImages = new Map();
    let modalHotelIndex = null;
    let modalHotelImageIndex = 0;
    
    document.querySelectorAll('[data-hotel-image]').forEach((button) => {
        const hotelIndex = Number(button.getAttribute('data-hotel-index'));
        const imageIndex = Number(button.getAttribute('data-image-index'));
        const imageSrc = button.getAttribute('data-hotel-image-src');
        const name = button.getAttribute('data-hotel-name');
        const label = button.getAttribute('data-hotel-image-label');
        if (!hotelImages.has(hotelIndex)) {
            hotelImages.set(hotelIndex, { name, images: [], labels: [] });
        }
        const entry = hotelImages.get(hotelIndex);
        entry.images[imageIndex] = imageSrc;
        entry.labels[imageIndex] = label;
    });
    
    const closeHotelModal = () => {
        hotelModal.classList.add('hidden');
        hotelModal.classList.remove('flex');
        hotelModalImg.src = '';
        hotelModalImg.alt = '';
        hotelModalCaption.textContent = '';
        modalHotelIndex = null;
        modalHotelImageIndex = 0;
    };
    
    const openHotelModalAt = (hotelIndex, imageIndex) => {
        const entry = hotelImages.get(hotelIndex);
        if (!entry || !entry.images.length) return;
        modalHotelIndex = hotelIndex;
        modalHotelImageIndex = ((imageIndex % entry.images.length) + entry.images.length) % entry.images.length;
        const imageSrc = entry.images[modalHotelImageIndex];
        const label = entry.labels[modalHotelImageIndex];
        hotelModalImg.src = imageSrc;
        hotelModalImg.alt = entry.name ? entry.name + ' - ' + label : 'Hotel image';
        hotelModalCaption.textContent = entry.name ? entry.name + ' - ' + label : label;
        hotelModal.classList.remove('hidden');
        hotelModal.classList.add('flex');
    };
    
    const stepHotelModal = (direction) => {
        if (modalHotelIndex === null) return;
        const entry = hotelImages.get(modalHotelIndex);
        if (!entry || !entry.images.length) return;
        openHotelModalAt(modalHotelIndex, modalHotelImageIndex + direction);
    };
    
    document.querySelectorAll('[data-hotel-image]').forEach((button) => {
        button.addEventListener('click', (event) => {
            event.preventDefault();
            const hotelIndex = Number(button.getAttribute('data-hotel-index'));
            const imageIndex = Number(button.getAttribute('data-image-index'));
            openHotelModalAt(hotelIndex, imageIndex);
        });
    });
    
    hotelModal.addEventListener('click', (event) => {
        if (event.target === hotelModal || event.target.hasAttribute('data-modal-close')) {
            closeHotelModal();
        }
    });
    
    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && !hotelModal.classList.contains('hidden')) {
            closeHotelModal();
        }
        if (!hotelModal.classList.contains('hidden')) {
            if (event.key === 'ArrowLeft') stepHotelModal(-1);
            if (event.key === 'ArrowRight') stepHotelModal(1);
        }
    });
    
    if (hotelModalPrev) {
        hotelModalPrev.addEventListener('click', (event) => {
            event.preventDefault();
            stepHotelModal(-1);
        });
    }
    
    if (hotelModalNext) {
        hotelModalNext.addEventListener('click', (event) => {
            event.preventDefault();
            stepHotelModal(1);
        });
    }
    
    // Initialize carousel functionality
    document.querySelectorAll('[data-carousel-prev]').forEach((button) => {
        button.addEventListener('click', (event) => {
            event.preventDefault();
            stepCarousel(button.getAttribute('data-carousel-target'), -1);
        });
    });

    document.querySelectorAll('[data-carousel-next]').forEach((button) => {
        button.addEventListener('click', (event) => {
            event.preventDefault();
            stepCarousel(button.getAttribute('data-carousel-target'), 1);
        });
    });

    document.querySelectorAll('[data-carousel]').forEach((carousel) => {
        startAutoScroll(carousel);
    });

    // When user scrolls to a section with carousels, load all carousel images in that section
    ['packages', 'activities', 'hotels'].forEach((id) => {
        const section = document.getElementById(id);
        if (section) carouselSectionObserver.observe(section);
    });

    // Initialize selection handlers and animations after content is rendered
    initSelectionHandlers();
    updateWhatsAppLink();
    observeRenderedElements();
});
