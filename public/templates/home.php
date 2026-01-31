<?php
/**
 * Template: Home page content (hero, packages, activities, transport, hotels, notes, contact)
 * Data from config/{lang}/home.php. No component includes - all inline.
 */
$base = rtrim($base_url, '/');
?>
<!-- Hero Section -->
<section class="relative text-white min-h-screen flex items-center justify-center px-4 py-12 sm:py-16 md:py-20 overflow-hidden bg-cover bg-center bg-no-repeat hero-bg-image">
    <div class="absolute inset-0 bg-gradient-to-br from-blue-primary/60 to-blue-secondary/60"></div>
    <div class="absolute top-0 right-0 w-full h-full opacity-10">
        <div class="absolute top-1/2 right-1/2 w-[200%] h-[200%] bg-yellow-primary rounded-full animate-spin hero-spin-animation"></div>
    </div>
    <div class="relative z-10 max-w-4xl w-full text-center pt-16">
        <div class="mb-6 sm:mb-8 flex justify-center">
            <img src="<?php echo e($base . '/' . $logo_path); ?>" alt="<?php echo e($logo_alt); ?>" class="h-20 sm:h-24 md:h-32 lg:h-40 w-auto object-contain drop-shadow-2xl" loading="eager" decoding="async">
        </div>
        <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold mb-4 sm:mb-6 leading-tight break-words tracking-tight text-white hero-title-shadow"><?php echo e($hero_title); ?></h1>
        <p class="text-lg sm:text-xl md:text-2xl lg:text-3xl font-semibold mb-4 sm:mb-5 text-white leading-relaxed tracking-wide hero-subtitle-shadow"><?php echo e($hero_subtitle); ?></p>
        <p class="text-sm sm:text-base md:text-lg lg:text-xl mb-6 sm:mb-8 text-white leading-relaxed px-2 sm:px-4 md:px-0 max-w-3xl mx-auto font-light hero-description-shadow"><?php echo e($hero_description); ?></p>
        <a href="#packages" class="inline-block bg-white text-blue-primary font-semibold text-sm sm:text-base md:text-lg px-6 sm:px-8 md:px-10 py-3 sm:py-4 rounded-full shadow-xl hover:bg-yellow-primary hover:text-white hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 min-h-[48px] flex items-center justify-center border-2 border-transparent hover:border-white"><?php echo e($hero_cta); ?></a>
    </div>
</section>

<!-- Tour Packages Section -->
<section id="packages" class="bg-white py-12 sm:py-16 md:py-20 px-4 sm:px-6">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-center mb-3 sm:mb-4 text-blue-primary"><?php echo e($section_packages_title); ?></h2>
        <p class="text-sm sm:text-base md:text-lg text-center text-gray-600 mb-8 sm:mb-12 px-2 sm:px-0 leading-relaxed"><?php echo e($section_packages_subtitle); ?></p>
        <div id="packages-container" class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6 md:gap-8 mb-8 sm:mb-12 items-start">
            <?php foreach ($packagesData as $index => $pkg):
                $bgClass = !empty($pkg['featured']) ? 'bg-gradient-to-br from-white to-yellow-light border-yellow-primary' : 'bg-white border-blue-light';
                $images = isset($pkg['images']) ? $pkg['images'] : [];
            ?>
            <label class="cursor-pointer">
                <input type="radio" name="trip" value="<?php echo e($pkg['title']); ?>" class="hidden trip-radio" data-title="<?php echo e($pkg['title']); ?>" data-price="<?php echo e($pkg['price']); ?>">
                <div class="package-card <?php echo $bgClass; ?> rounded-2xl shadow-lg border-2 relative overflow-hidden hover:shadow-xl hover:-translate-y-2 transition-all duration-300 trip-card">
                    <?php if (!empty($pkg['featured'])): ?><div class="absolute top-3 right-3 bg-yellow-primary text-blue-primary px-3 sm:px-4 py-1 rounded-full text-xs sm:text-sm font-semibold z-10"><?php echo e($popular_badge); ?></div><?php endif; ?>
                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-blue-primary to-yellow-primary"></div>
                    <?php if (!empty($images)): ?>
                    <div class="relative p-3 sm:p-4">
                        <div class="overflow-hidden relative">
                            <div id="package-carousel-<?php echo (int)$index; ?>" class="flex gap-2 overflow-x-auto snap-x scroll-smooth scrollbar-hide" data-carousel>
                                <?php foreach ($images as $imgIndex => $img): ?>
                                <div class="w-full flex-shrink-0 snap-start">
                                    <button type="button" class="group block w-full" data-package-image data-package-title="<?php echo e($pkg['title']); ?>" data-package-image-label="<?php echo e($img['name']); ?>" data-package-image-src="<?php echo e($base . '/' . $img['path']); ?>" data-package-index="<?php echo (int)$index; ?>" data-image-index="<?php echo (int)$imgIndex; ?>">
                                        <div class="relative w-full h-44 sm:h-52 md:h-60 rounded-xl overflow-hidden">
                                            <img src="<?php echo e($base . '/' . $img['path']); ?>" alt="<?php echo e($pkg['title']); ?> - <?php echo e($img['name']); ?>" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105 lazy-img" loading="lazy" decoding="async">
                                            <span class="absolute bottom-2 left-2 text-xs text-white bg-black/60 px-2 py-1 rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-300"><?php echo e($view_detail); ?></span>
                                        </div>
                                    </button>
                                </div>
                                <?php endforeach; ?>
                            </div>
                            <?php if (count($images) > 1): ?>
                            <button type="button" class="absolute left-4 top-1/2 -translate-y-1/2 bg-white/95 backdrop-blur-sm text-blue-primary w-10 h-10 rounded-full shadow-lg flex items-center justify-center hover:bg-white hover:scale-110 transition-all duration-200 border border-blue-light/20 text-sm font-semibold z-20 cursor-pointer" data-carousel-prev data-carousel-target="package-carousel-<?php echo (int)$index; ?>" aria-label="Previous">‹</button>
                            <button type="button" class="absolute right-4 top-1/2 -translate-y-1/2 bg-white/95 backdrop-blur-sm text-blue-primary w-10 h-10 rounded-full shadow-lg flex items-center justify-center hover:bg-white hover:scale-110 transition-all duration-200 border border-blue-light/20 text-sm font-semibold z-20 cursor-pointer" data-carousel-next data-carousel-target="package-carousel-<?php echo (int)$index; ?>" aria-label="Next">›</button>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    <div class="px-4 pb-4 sm:px-6 sm:pb-6 md:px-8 md:pb-8">
                        <div class="mb-4 sm:mb-6 pb-4 border-b-2 border-blue-light">
                            <div class="flex items-center gap-3 mb-3">
                                <div class="w-5 h-5 border-2 border-blue-primary rounded-full flex items-center justify-center flex-shrink-0 trip-checkbox">
                                    <div class="w-3 h-3 bg-blue-primary rounded-full hidden trip-inner-circle"></div>
                                </div>
                                <h3 class="text-lg sm:text-xl md:text-2xl font-semibold text-blue-primary leading-tight break-words flex-1"><?php echo e($pkg['title']); ?></h3>
                            </div>
                            <div class="text-xl sm:text-2xl md:text-3xl font-bold text-yellow-primary bg-blue-light px-3 sm:px-4 py-2 rounded-lg inline-block"><?php echo e($pkg['price']); ?></div>
                        </div>
                        <ul class="space-y-2 sm:space-y-3">
                            <?php foreach ($pkg['destinations'] as $dest): ?>
                            <li class="text-sm sm:text-base text-gray-700 pl-6 relative leading-relaxed <?php echo strlen($dest) > 50 ? 'break-words' : ''; ?>"><span class="absolute left-0 text-blue-secondary font-bold">✓</span><?php echo e($dest); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </label>
            <?php endforeach; ?>
        </div>
        <div id="package-image-modal" class="fixed inset-0 bg-black/70 hidden items-center justify-center p-4 z-50">
            <div class="relative max-w-4xl w-full">
                <button type="button" class="absolute -top-10 right-0 text-white text-2xl" data-modal-close aria-label="Close">✕</button>
                <button type="button" class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-1/2 text-white text-3xl bg-black/40 w-12 h-12 rounded-full flex items-center justify-center" data-modal-prev aria-label="Previous">‹</button>
                <button type="button" class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-1/2 text-white text-3xl bg-black/40 w-12 h-12 rounded-full flex items-center justify-center" data-modal-next aria-label="Next">›</button>
                <div class="bg-white rounded-2xl overflow-hidden shadow-xl">
                    <img id="package-image-modal-img" src="" alt="" class="w-full max-h-[70vh] object-cover">
                    <div class="px-4 py-3 text-sm sm:text-base text-gray-700"><span id="package-image-modal-title" class="font-semibold"></span></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Activities Section -->
<section id="activities" class="bg-gray-100 py-12 sm:py-16 md:py-20 px-4 sm:px-6">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-center mb-3 sm:mb-4 text-blue-primary"><?php echo e($section_activities_title); ?></h2>
        <p class="text-sm sm:text-base md:text-lg text-center text-gray-600 mb-8 sm:mb-12 px-2 sm:px-0 leading-relaxed"><?php echo e($section_activities_subtitle); ?></p>
        <div id="activities-container" class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6 md:gap-8 items-start">
            <?php foreach ($activitiesData as $index => $activity):
                $options = isset($activity['options']) ? $activity['options'] : [];
                $images = isset($activity['images']) ? $activity['images'] : [];
            ?>
            <div class="activity-card bg-white rounded-2xl shadow-lg border-2 border-blue-light hover:shadow-xl hover:-translate-y-2 transition-all duration-300 relative overflow-hidden">
                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-blue-primary to-yellow-primary"></div>
                <?php if (!empty($images)): ?>
                <div class="relative p-3 sm:p-4">
                    <div class="overflow-hidden relative">
                        <div id="activity-carousel-<?php echo (int)$index; ?>" class="flex gap-2 overflow-x-auto snap-x scroll-smooth scrollbar-hide" data-carousel>
                            <?php foreach ($images as $imgIndex => $img): ?>
                            <div class="w-full flex-shrink-0 snap-start">
                                <button type="button" class="group block w-full" data-activity-image data-activity-name="<?php echo e($activity['title']); ?>" data-activity-image-label="<?php echo e($img['name']); ?>" data-activity-image-src="<?php echo e($base . '/' . $img['path']); ?>" data-activity-index="<?php echo (int)$index; ?>" data-image-index="<?php echo (int)$imgIndex; ?>">
                                    <div class="relative w-full h-44 sm:h-52 md:h-60 rounded-xl overflow-hidden">
                                        <img src="<?php echo e($base . '/' . $img['path']); ?>" alt="<?php echo e($activity['title']); ?> - <?php echo e($img['name']); ?>" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105 lazy-img" loading="lazy" decoding="async">
                                        <span class="absolute bottom-2 left-2 text-xs text-white bg-black/60 px-2 py-1 rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-300"><?php echo e($view_detail); ?></span>
                                    </div>
                                </button>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <?php if (count($images) > 1): ?>
                        <button type="button" class="absolute left-4 top-1/2 -translate-y-1/2 bg-white/95 backdrop-blur-sm text-blue-primary w-10 h-10 rounded-full shadow-lg flex items-center justify-center hover:bg-white hover:scale-110 transition-all duration-200 border border-blue-light/20 text-sm font-semibold z-20 cursor-pointer" data-carousel-prev data-carousel-target="activity-carousel-<?php echo (int)$index; ?>" aria-label="Previous">‹</button>
                        <button type="button" class="absolute right-4 top-1/2 -translate-y-1/2 bg-white/95 backdrop-blur-sm text-blue-primary w-10 h-10 rounded-full shadow-lg flex items-center justify-center hover:bg-white hover:scale-110 transition-all duration-200 border border-blue-light/20 text-sm font-semibold z-20 cursor-pointer" data-carousel-next data-carousel-target="activity-carousel-<?php echo (int)$index; ?>" aria-label="Next">›</button>
                        <?php endif; ?>
                    </div>
                </div>
                <?php else: ?><div class="pt-3 sm:pt-4"></div><?php endif; ?>
                <div class="px-4 pb-4 sm:px-6 sm:pb-6 md:px-7 md:pb-7">
                    <h3 class="text-lg sm:text-xl md:text-2xl font-semibold text-blue-primary mb-3"><?php echo e($activity['title']); ?></h3>
                    <ul class="space-y-2 sm:space-y-3">
                        <?php foreach ($options as $optionName => $price): ?>
                        <li>
                            <label class="activity-option-row text-sm sm:text-base text-gray-700 flex items-center justify-between gap-3 cursor-pointer select-none hover:bg-blue-light/30 rounded-lg px-2 py-1.5 -mx-2 transition-colors">
                                <input type="checkbox" class="activity-option sr-only" data-activity-title="<?php echo e($activity['title']); ?>" data-activity-option="<?php echo e($optionName); ?>">
                                <span class="flex items-center">
                                    <span class="activity-checkbox w-5 h-5 border-2 border-blue-primary rounded-full flex items-center justify-center mr-2 flex-shrink-0">
                                        <span class="activity-inner-circle w-3 h-3 bg-blue-primary rounded-full hidden"></span>
                                    </span>
                                    <?php echo e($optionName); ?>
                                </span>
                                <span class="font-semibold text-blue-primary"><?php echo e($price); ?></span>
                            </label>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    <?php if (!empty($activity['note'])): ?>
                    <div class="mt-4 text-xs sm:text-sm text-yellow-primary bg-yellow-light px-3 py-2 rounded-lg inline-flex items-center gap-2">
                        <span class="font-semibold"><?php echo e($note_label); ?></span>
                        <span><?php echo e($activity['note']); ?></span>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div id="activity-modal" class="fixed inset-0 bg-black/70 hidden items-center justify-center p-4 z-50">
            <div class="relative max-w-4xl w-full">
                <button type="button" class="absolute -top-10 right-0 text-white text-2xl" data-modal-close aria-label="Close">✕</button>
                <button type="button" class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-1/2 text-white text-3xl bg-black/40 w-12 h-12 rounded-full flex items-center justify-center" data-modal-prev aria-label="Previous">‹</button>
                <button type="button" class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-1/2 text-white text-3xl bg-black/40 w-12 h-12 rounded-full flex items-center justify-center" data-modal-next aria-label="Next">›</button>
                <div class="bg-white rounded-2xl overflow-hidden shadow-xl">
                    <img id="activity-modal-img" src="" alt="" class="w-full max-h-[70vh] object-cover">
                    <div class="px-4 py-3 text-sm sm:text-base text-gray-700"><span id="activity-modal-caption" class="font-semibold"></span></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Transport Section -->
<section id="transport" class="bg-white py-12 sm:py-16 md:py-20 px-4 sm:px-6">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-center mb-3 sm:mb-4 text-blue-primary"><?php echo e($section_transport_title); ?></h2>
        <p class="text-sm sm:text-base md:text-lg text-center text-gray-600 mb-8 sm:mb-12 px-2 sm:px-0 leading-relaxed"><?php echo e($section_transport_subtitle); ?></p>
        <div id="transport-container" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 md:gap-8">
            <?php foreach ($transportData as $index => $transport): ?>
            <label class="cursor-pointer">
                <input type="radio" name="transport" value="<?php echo e($transport['name']); ?>" class="hidden transport-radio" data-name="<?php echo e($transport['name']); ?>" data-price="<?php echo e($transport['price']); ?>">
                <div class="bg-white rounded-2xl p-6 sm:p-8 shadow-lg border-2 border-blue-light relative overflow-hidden hover:shadow-xl hover:-translate-y-2 transition-all duration-300 transport-card">
                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-blue-primary to-yellow-primary"></div>
                    <div class="text-center">
                        <div class="flex items-center justify-center mb-2">
                            <div class="w-5 h-5 border-2 border-blue-primary rounded-full flex items-center justify-center mr-2 transport-checkbox">
                                <div class="w-3 h-3 bg-blue-primary rounded-full hidden transport-inner-circle"></div>
                            </div>
                            <h3 class="text-xl sm:text-2xl font-semibold text-blue-primary"><?php echo e($transport['name']); ?></h3>
                        </div>
                        <div class="text-2xl sm:text-3xl font-bold text-yellow-primary bg-blue-light px-4 py-3 rounded-lg inline-block"><?php echo e($transport['price']); ?></div>
                    </div>
                </div>
            </label>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Hotels Section -->
<section id="hotels" class="bg-gray-100 py-12 sm:py-16 md:py-20 px-4 sm:px-6">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-center mb-3 sm:mb-4 text-blue-primary"><?php echo e($section_hotels_title); ?></h2>
        <p class="text-sm sm:text-base md:text-lg text-center text-gray-600 mb-8 sm:mb-12 px-2 sm:px-0 leading-relaxed"><?php echo e($section_hotels_subtitle); ?></p>
        <div id="hotels-container" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 sm:gap-6 items-start">
            <?php foreach ($hotelsData as $index => $hotel):
                $hotelImages = isset($hotel['images']) ? $hotel['images'] : [];
            ?>
            <label class="cursor-pointer">
                <input type="radio" name="hotel" value="<?php echo e($hotel['name']); ?>" class="hidden hotel-radio" data-name="<?php echo e($hotel['name']); ?>">
                <div class="hotel-card bg-white rounded-2xl shadow-lg border-2 border-blue-light hover:shadow-xl hover:-translate-y-2 transition-all duration-300 relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-blue-primary to-yellow-primary"></div>
                    <?php if (!empty($hotelImages)): ?>
                    <div class="relative p-3 sm:p-4">
                        <div class="overflow-hidden relative">
                            <div id="hotel-carousel-<?php echo (int)$index; ?>" class="flex gap-2 overflow-x-auto snap-x scroll-smooth scrollbar-hide" data-carousel>
                                <?php foreach ($hotelImages as $imgIndex => $img): ?>
                                <div class="w-full flex-shrink-0 snap-start">
                                    <button type="button" class="group block w-full" data-hotel-image data-hotel-name="<?php echo e($hotel['name']); ?>" data-hotel-image-label="<?php echo e($img['name']); ?>" data-hotel-image-src="<?php echo e($base . '/' . $img['path']); ?>" data-hotel-index="<?php echo (int)$index; ?>" data-image-index="<?php echo (int)$imgIndex; ?>">
                                        <div class="relative w-full h-44 sm:h-52 md:h-60 rounded-xl overflow-hidden">
                                            <img src="<?php echo e($base . '/' . $img['path']); ?>" alt="<?php echo e($hotel['name']); ?> - <?php echo e($img['name']); ?>" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105 lazy-img" loading="lazy" decoding="async">
                                            <span class="absolute bottom-2 left-2 text-xs text-white bg-black/60 px-2 py-1 rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-300"><?php echo e($view_detail); ?></span>
                                        </div>
                                    </button>
                                </div>
                                <?php endforeach; ?>
                            </div>
                            <?php if (count($hotelImages) > 1): ?>
                            <button type="button" class="absolute left-4 top-1/2 -translate-y-1/2 bg-white/95 backdrop-blur-sm text-blue-primary w-10 h-10 rounded-full shadow-lg flex items-center justify-center hover:bg-white hover:scale-110 transition-all duration-200 border border-blue-light/20 text-sm font-semibold z-20 cursor-pointer" data-carousel-prev data-carousel-target="hotel-carousel-<?php echo (int)$index; ?>" aria-label="Previous">‹</button>
                            <button type="button" class="absolute right-4 top-1/2 -translate-y-1/2 bg-white/95 backdrop-blur-sm text-blue-primary w-10 h-10 rounded-full shadow-lg flex items-center justify-center hover:bg-white hover:scale-110 transition-all duration-200 border border-blue-light/20 text-sm font-semibold z-20 cursor-pointer" data-carousel-next data-carousel-target="hotel-carousel-<?php echo (int)$index; ?>" aria-label="Next">›</button>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php else: ?><div class="pt-3 sm:pt-4"></div><?php endif; ?>
                    <div class="px-4 pb-4 sm:px-6 sm:pb-6 md:px-7 md:pb-7">
                        <div class="flex items-center">
                            <div class="hotel-checkbox w-5 h-5 border-2 border-blue-primary rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                                <div class="hotel-inner-circle w-3 h-3 bg-blue-primary rounded-full hidden"></div>
                            </div>
                            <h3 class="text-base sm:text-lg font-semibold text-blue-primary leading-tight"><?php echo e($hotel['name']); ?></h3>
                        </div>
                    </div>
                </div>
            </label>
            <?php endforeach; ?>
        </div>
        <div id="hotel-modal" class="fixed inset-0 bg-black/70 hidden items-center justify-center p-4 z-50">
            <div class="relative max-w-4xl w-full">
                <button type="button" class="absolute -top-10 right-0 text-white text-2xl" data-modal-close aria-label="Close">✕</button>
                <button type="button" class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-1/2 text-white text-3xl bg-black/40 w-12 h-12 rounded-full flex items-center justify-center" data-modal-prev aria-label="Previous">‹</button>
                <button type="button" class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-1/2 text-white text-3xl bg-black/40 w-12 h-12 rounded-full flex items-center justify-center" data-modal-next aria-label="Next">›</button>
                <div class="bg-white rounded-2xl overflow-hidden shadow-xl">
                    <img id="hotel-modal-img" src="" alt="" class="w-full max-h-[70vh] object-cover">
                    <div class="px-4 py-3 text-sm sm:text-base text-gray-700"><span id="hotel-modal-caption" class="font-semibold"></span></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Notes Section -->
<section class="bg-gray-100 py-12 sm:py-16 md:py-20 px-4 sm:px-6">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-center mb-8 sm:mb-12 text-blue-primary"><?php echo e($section_notes_title); ?></h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6 md:gap-8 mb-6 sm:mb-8">
            <div class="notes-included bg-white rounded-2xl p-5 sm:p-6 md:p-8 shadow-lg border-l-4 border-blue-secondary">
                <h3 class="text-lg sm:text-xl md:text-2xl font-semibold mb-4 sm:mb-6 text-blue-primary"><?php echo e($notes_included_title); ?></h3>
                <ul class="space-y-2 sm:space-y-3">
                    <?php foreach ($notes_included_items as $item): ?>
                    <li class="text-sm sm:text-base text-gray-700 pl-6 relative leading-relaxed"><span class="absolute left-0 text-blue-secondary font-bold text-xl">•</span><?php echo e($item); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="notes-excluded bg-white rounded-2xl p-5 sm:p-6 md:p-8 shadow-lg border-l-4 border-red-500">
                <h3 class="text-lg sm:text-xl md:text-2xl font-semibold mb-4 sm:mb-6 text-blue-primary"><?php echo e($notes_excluded_title); ?></h3>
                <ul class="space-y-2 sm:space-y-3">
                    <?php foreach ($notes_excluded_items as $item): ?>
                    <li class="text-sm sm:text-base text-gray-700 pl-6 relative leading-relaxed"><span class="absolute left-0 text-blue-secondary font-bold text-xl">•</span><?php echo e($item); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <div class="pricing-note bg-white rounded-2xl p-5 sm:p-6 md:p-8 shadow-lg border-l-4 border-yellow-primary">
            <p class="text-sm sm:text-base text-gray-700 leading-relaxed"><strong><?php echo e($note_label); ?></strong> <?php echo e($notes_pricing); ?></p>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="bg-gradient-to-br from-blue-primary to-blue-secondary text-white py-12 sm:py-16 md:py-20 px-4 sm:px-6 text-center">
    <div class="max-w-3xl mx-auto">
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-4 sm:mb-6 text-white"><?php echo e($section_contact_title); ?></h2>
        <p class="text-sm sm:text-base md:text-lg mb-4 sm:mb-5 opacity-90 leading-relaxed px-2 sm:px-0"><?php echo e($section_contact_subtitle); ?></p>
        <div class="mb-6 sm:mb-8 px-2 sm:px-0">
            <p class="text-xs sm:text-sm md:text-base opacity-95 leading-relaxed bg-white/10 rounded-lg py-3 px-4 inline-block max-w-2xl">💡 <strong><?php echo e($note_label); ?></strong> <?php echo e($contact_tip); ?></p>
        </div>
        <div class="flex flex-col items-center">
            <a href="https://wa.me/<?php echo htmlspecialchars($whatsapp); ?>" target="_blank" rel="noopener noreferrer" id="whatsapp-link" class="bg-[#25D366] text-white font-semibold text-sm sm:text-base md:text-lg px-6 sm:px-8 md:px-10 py-4 sm:py-5 rounded-full shadow-lg hover:bg-[#20ba5a] hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 min-h-[56px] w-full max-w-md flex flex-col sm:flex-row items-center justify-center gap-2 sm:gap-3 mb-8">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="currentColor" class="flex-shrink-0"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                <span class="text-center"><?php echo e($contact_wa); ?><span class="block text-xs sm:text-sm opacity-90 mt-1">+62 <?php echo htmlspecialchars(substr($whatsapp, 0, 3) . ' ' . substr($whatsapp, 3, 4) . ' ' . substr($whatsapp, 7)); ?></span></span>
            </a>
            <div class="mb-8 pt-8 sm:pt-10 border-t border-white/20">
                <h3 class="text-xl sm:text-2xl md:text-3xl font-bold mb-4 sm:mb-6 text-white"><?php echo e($contact_email_title); ?></h3>
                <form id="email-form" class="max-w-2xl mx-auto text-left" action="https://destinexia.com/send-email.php" method="POST" data-email-to="<?php echo htmlspecialchars($email); ?>">
                    <input type="hidden" name="form_id" value="CLIENTA-TRAVEL-2026">
                    <input type="hidden" name="ts" id="form-ts" value="">
                    <input type="text" name="website" tabindex="-1" autocomplete="off" class="hidden" aria-hidden="true">
                    <div class="mb-4 sm:mb-5">
                        <label for="sender-name" class="block text-sm sm:text-base font-medium mb-2 text-white"><?php echo e($form_name_label); ?> <span class="text-red-300">*</span></label>
                        <input type="text" id="sender-name" name="name" required maxlength="200" class="w-full px-4 py-3 rounded-lg bg-white/10 border border-white/20 text-white placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-white/50 focus:border-transparent" placeholder="<?php echo e($form_name_placeholder); ?>">
                    </div>
                    <div class="mb-4 sm:mb-5">
                        <label for="sender-email" class="block text-sm sm:text-base font-medium mb-2 text-white"><?php echo e($form_email_label); ?> <span class="text-red-300">*</span></label>
                        <input type="email" id="sender-email" name="email" required maxlength="254" class="w-full px-4 py-3 rounded-lg bg-white/10 border border-white/20 text-white placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-white/50 focus:border-transparent" placeholder="<?php echo e($form_email_placeholder); ?>">
                    </div>
                    <div class="mb-6 sm:mb-8">
                        <label for="email-body" class="block text-sm sm:text-base font-medium mb-2 text-white"><?php echo e($form_message_label); ?> <span class="text-red-300">*</span></label>
                        <textarea id="email-body" name="message" rows="6" required maxlength="5000" class="w-full px-4 py-3 rounded-lg bg-white/10 border border-white/20 text-white placeholder-white/60 focus:outline-none focus:ring-2 focus:ring-white/50 focus:border-transparent resize-y" placeholder="<?php echo e($form_message_placeholder); ?>"></textarea>
                        <p class="text-xs sm:text-sm text-white/70 mt-2">💡 <?php echo e($form_message_hint); ?></p>
                    </div>
                    <div id="email-form-message" class="mb-4 hidden"></div>
                    <button type="submit" id="email-submit-btn" class="w-full bg-white text-blue-primary font-semibold text-sm sm:text-base md:text-lg px-6 sm:px-8 md:px-10 py-4 sm:py-5 rounded-full shadow-lg hover:bg-white/90 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 min-h-[56px] flex items-center justify-center gap-2 sm:gap-3">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="flex-shrink-0"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        <span><?php echo e($form_submit); ?></span>
                    </button>
                </form>
            </div>
            <p class="text-sm sm:text-base opacity-90"><?php echo e($contact_footer); ?></p>
        </div>
    </div>
</section>
