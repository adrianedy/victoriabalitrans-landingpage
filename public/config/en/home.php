<?php
/**
 * Home page data - English
 */

// =============================================================================
// SEO & META INFORMATION
// =============================================================================
$meta_title       = 'Victoria Bali Holiday - Tour Packages & Transportation';
$meta_description = 'Bali tour packages, private driver, airport transfer, and reliable transportation. Book your Bali trip with Victoria Bali Holiday via WhatsApp.';

// =============================================================================
// HERO SECTION
// =============================================================================
$hero_title       = 'Victoria Bali Holiday';
$hero_subtitle    = 'Your Trusted Partner for Bali Tours & Transportation';
$hero_description = 'Explore the beauty of Bali with our professional tour packages and reliable transportation services';
$hero_cta         = 'View Tour Packages';

// =============================================================================
// MAIN SECTIONS
// =============================================================================
$section_packages_title   = 'Bali Tour Packages';
$section_packages_subtitle = 'Discover the best of Bali with our carefully curated tour packages';

$section_activities_title   = 'Activities & Rentals';
$section_activities_subtitle = 'Hand-picked adventures and transport options for your Bali trip';

$section_transport_title   = 'Transport Services';
$section_transport_subtitle = 'Reliable transportation services for your convenience';

$section_hotels_title   = 'Our Partner Hotels';
$section_hotels_subtitle = 'Choose from our selection of premium accommodations';

// =============================================================================
// IMPORTANT NOTES SECTION
// =============================================================================
$section_notes_title    = 'Important Information';
$notes_included_title   = '✅ Included in All Trips';
$notes_excluded_title   = '❌ Not Included';

$notes_included_items = [
    'Car + Fuel',
    'Driver as guide and photographer',
    'MPV 7 seater vehicle'
];

$notes_excluded_items = [
    'Entrance tickets',
    'Parking fees',
    'Foods and beverages',
    'Personal expenses'
];

$notes_pricing = 'Prices above are per car. If there are more than 6 pax, we use a different type of vehicle and the price would be more. All trips can be adjusted by request of the customers, as long as the requested trip is on the same route.';

// =============================================================================
// CONTACT SECTION
// =============================================================================
$section_contact_title   = 'Get in Touch';
$section_contact_subtitle = 'For more information about our trips, please don\'t hesitate to contact us directly';

$contact_tip        = 'The transport, hotel, and trip choices you selected above will be automatically sent to WhatsApp when you click the button below';
$contact_wa         = 'Contact us on WhatsApp';
$contact_email_title = 'Or Send Us an Email';

// Form labels and placeholders
$form_name_label        = 'Your Name';
$form_email_label       = 'Your Email';
$form_message_label     = 'Message';
$form_name_placeholder  = 'Enter your name';
$form_email_placeholder = 'your.email@example.com';
$form_message_placeholder = 'Your message will be auto-generated based on your selections above, but you can edit it...';
$form_message_hint      = 'The message is auto-generated from your selections above, but you can edit it as needed.';
$form_submit           = 'Send Email';
$form_submit_loading   = 'Sending...';

$contact_footer = 'First come first served 🙏';

// =============================================================================
// GENERAL UI TEXT
// =============================================================================
$popular_badge = 'Popular';
$view_detail   = 'View detail';
$note_label    = 'Note:';

// =============================================================================
// TOUR PACKAGES DATA
// =============================================================================
$packagesData = [
    // Ubud Tour Package (Featured)
    [
        'title'       => 'Trip to Ubud',
        'price'       => 'IDR 750k',
        'destinations' => [
            'Ubud market',
            'Monkey forest',
            'Ubud palace',
            'Tegalalang rice terrace',
            'Swing & Luwak Coffee plantation'
        ],
        'featured'    => true,
        'images'      => [
            ['name' => 'Monkey forest', 'path' => 'images/content/places/Monkey Forest/monkey forest.webp'],
            ['name' => 'Ubud market', 'path' => 'images/content/places/Ubud Market/UBUD MARKET.webp'],
            ['name' => 'Ubud palace', 'path' => 'images/content/places/Ubud Palace/UBUD PALACE.webp'],
            ['name' => 'Tegalalang rice terrace', 'path' => 'images/content/places/Tegalalang Rice Terrace/TEGALALANG RICE TERACE.webp'],
            ['name' => 'Tegenungan Waterfall', 'path' => 'images/content/places/Tegenungan Waterfall/TEGENUNGAN WATER FALLS.webp'],
            ['name' => 'Swing & Luwak Coffee plantation', 'path' => 'images/content/places/Bali Swing/bali swing (1).webp']
        ]
    ],
    // Bedugul Tour Package
    [
        'title'       => 'Trip to Bedugul',
        'price'       => 'IDR 750k',
        'destinations' => [
            'Ulundanu Beratan Temple',
            'Wanagiri Hidden Hills',
            'Jatiluwih Rice Terrace or Alas Kedaton Monkey Forest (optional)',
            'Tanah Lot Temple'
        ],
        'featured'    => false,
        'images'      => [
            ['name' => 'Ulundanu Beratan Temple', 'path' => 'images/content/places/Bedugul/bedugul.webp'],
            ['name' => 'Bali Handara Gate', 'path' => 'images/content/places/Bali Handara Gate/bali handara gate (1).webp'],
            ['name' => 'Wanagiri Hidden Hills', 'path' => 'images/content/places/Wana Giri Twin Lake View/wana giri twin lake view.webp'],
            ['name' => 'Tanah Lot Temple', 'path' => 'images/content/places/Tanah Lot/tanah lot.webp']
        ]
    ],
    // Kintamani Tour Package
    [
        'title'       => 'Trip to Kintamani',
        'price'       => 'IDR 750k',
        'destinations' => [
            'Goa Gajah Temple',
            'Tirta Empul Temple',
            'Tukad Cepung Waterfall',
            'Penglipuran Village'
        ],
        'featured'    => false,
        'images'      => [
            ['name' => 'Goa Gajah Temple', 'path' => 'images/content/places/Goa Gajah/GOA GAJAH.webp'],
            ['name' => 'Tirta Empul Temple', 'path' => 'images/content/places/Tampak Siring/TIRTA EMPUL HOLY WATER BLESSING.webp'],
            ['name' => 'Penelokan Mountain View', 'path' => 'images/content/places/Penelokan/PENELOKAN MONTAIN VIEW.webp'],
            ['name' => 'Tukad Cepung Waterfall', 'path' => 'images/content/places/Tukad Cepung/tukad cepung.webp'],
            ['name' => 'Penglipuran Village', 'path' => 'images/content/places/Pengelipuran/PENGELIPURAN VILLAGE.webp']
        ]
    ],
    // Eastern Bali Tour Package
    [
        'title'       => 'Trip to Eastern Bali',
        'price'       => 'IDR 850k',
        'destinations' => [
            'Lempuyang Temple',
            'Tirta Gangga water palace',
            'Taman Ujung water palace'
        ],
        'featured'    => false,
        'images'      => [
            ['name' => 'Lempuyang Temple', 'path' => 'images/content/places/Lempuyang/lempuyang (1).webp'],
            ['name' => 'Tirta Gangga water palace', 'path' => 'images/content/places/Tirta Gangga/TIRTA GANGGA.webp'],
            ['name' => 'Taman Ujung water palace', 'path' => 'images/content/places/Taman Ujung/taman ujung.webp'],
            ['name' => 'Eastern Bali', 'path' => 'images/content/places/Bali Tourist Attractions/Bali-Tourist-Attractions_9th-jun.webp']
        ]
    ],
    // Uluwatu Tour Package
    [
        'title'       => 'Trip to Uluwatu',
        'price'       => 'IDR 750k',
        'destinations' => [
            'Garuda Wisnu Kencana',
            'Labuan Sait',
            'Pantai Pandawa',
            'Uluwatu Temple'
        ],
        'featured'    => false,
        'images'      => [
            ['name' => 'Garuda Wisnu Kencana Cultural Park', 'path' => 'images/content/places/GWK/gwk (1).webp'],
            ['name' => 'Garuda Wisnu Kencana', 'path' => 'images/content/places/GWK/gwk (2).webp'],
            ['name' => 'Garuda Wisnu Kencana', 'path' => 'images/content/places/GWK/garuda wisnu kencana.webp'],
            ['name' => 'Labuan Sait', 'path' => 'images/content/places/Labuan Sait/labuan sait.webp'],
            ['name' => 'Pandawa Beach', 'path' => 'images/content/places/Pandawa Beach/pandawa beach.webp'],
            ['name' => 'Uluwatu Temple', 'path' => 'images/content/places/Uluwatu Temple/uluwatu temple.webp']
        ]
    ],
    // Eastern Nusa Tour Package
    [
        'title'       => 'Trip Eastern Nusa',
        'price'       => 'IDR 850k',
        'destinations' => [
            'Rumah Pohon',
            'Diamond Beach',
            'Atuh Beach',
            'Teletabis hill (optional)'
        ],
        'featured'    => false,
        'images'      => [
            ['name' => 'Rumah Pohon', 'path' => 'images/content/places/Rumah Pohon/rumah pohon.webp'],
            ['name' => 'Diamond Beach', 'path' => 'images/content/places/Diamond Beach/diamond beach (1).webp'],
            ['name' => 'Diamond Beach', 'path' => 'images/content/places/Diamond Beach/diamond beach (2).webp'],
            ['name' => 'Atuh Beach', 'path' => 'images/content/places/Atuh Beach/atuh beach.webp'],
            ['name' => 'Teletabis Hill', 'path' => 'images/content/places/Teletabis Hill/teletabis hill.webp']
        ]
    ],
    // Western Nusa Tour Package
    [
        'title'       => 'Trip to Western Nusa',
        'price'       => 'IDR 750k',
        'destinations' => [
            'Angel Billabong',
            'Broken Beach',
            'Kelingking beach',
            'Crystal bay (optional)'
        ],
        'featured'    => false,
        'images'      => [
            ['name' => 'Angel Billabong', 'path' => 'images/content/places/Angel Billabong/ANGEL BILLABONG.webp'],
            ['name' => 'Broken Beach', 'path' => 'images/content/places/Broken Beach/BROKEN BEACH.webp'],
            ['name' => 'Kelingking beach', 'path' => 'images/content/places/Kelingking Beach/klingking beach.webp']
        ]
    ]
];

// =============================================================================
// ACTIVITIES & RENTALS DATA
// =============================================================================
$activitiesData = [
    // Ubud ATV Adventure
    [
        'title'   => 'Ubud ATV Adventure',
        'images'  => [
            ['name' => 'ATV Adventure', 'path' => 'images/content/activities/ATV/atv.webp'],
            ['name' => 'ATV Tour', 'path' => 'images/content/activities/ATV/atv1.webp'],
            ['name' => 'ATV Tour', 'path' => 'images/content/activities/ATV/atv1 (1).webp']
        ],
        'options' => [
            'Single' => 'IDR 550k',
            'Tandem' => 'IDR 950k'
        ],
        'note'    => 'Meal included'
    ],

    // Water Rafting
    [
        'title'   => 'Water Rafting',
        'images'  => [
            ['name' => 'White water rafting', 'path' => 'images/content/activities/Water Rafting/White water rafting.webp'],
            ['name' => 'White water rafting', 'path' => 'images/content/activities/Water Rafting/White water rafting(1).webp']
        ],
        'options' => [
            'Single ticket'  => 'IDR 650k',
            'Multiple ticket' => 'IDR 450k'
        ],
        'note'    => 'Meal included'
    ],

    // Water Tubing
    [
        'title'   => 'Water Tubing',
        'images'  => [
            ['name' => 'Water tubing', 'path' => 'images/content/activities/Water Tubing/WOS.webp'],
            ['name' => 'Water tubing', 'path' => 'images/content/activities/Water Tubing/WOS(1).webp'],
            ['name' => 'Water tubing', 'path' => 'images/content/activities/Water Tubing/WOS(2).webp']
        ],
        'options' => [
            'Single' => 'IDR 650k',
            'Tandem' => 'IDR 950k'
        ],
        'note'    => 'Meal included'
    ],

    // Car Rental with Driver
    [
        'title'   => 'Car Rental with Driver',
        'images'  => [
            ['name' => 'Avanza Xenia', 'path' => 'images/content/activities/Car Rental/avanza xenia.webp'],
            ['name' => 'Innova Reborn', 'path' => 'images/content/activities/Car Rental/reborn.webp'],
            ['name' => 'Hiace Commuter', 'path' => 'images/content/activities/Car Rental/comuter.webp'],
            ['name' => 'Hiace Premio', 'path' => 'images/content/activities/Car Rental/premio.webp']
        ],
        'options' => [
            'Xenia and Avanza'      => 'IDR 850k',
            'Toyota Innova Reborn'  => 'IDR 1250k',
            'Toyota Hiace Commuter' => 'IDR 2500k',
            'Toyota Hiace Premio'   => 'IDR 3250k'
        ]
    ],

    // Nusa Penida Island Activities
    [
        'title'   => 'Nusa Penida Island Activities',
        'images'  => [
            ['name' => 'Manta tour', 'path' => 'images/content/activities/Nusa Penida/MANTA.webp'],
            ['name' => 'Snorkeling', 'path' => 'images/content/activities/Nusa Penida/SNORKLING.webp'],
            ['name' => 'Manta tour', 'path' => 'images/content/activities/Nusa Penida/MANTA(1).webp']
        ],
        'options' => [
            'Manta tour'    => 'IDR 850k',
            'Snorkeling tour' => 'IDR 350k',
            'Diving tour'   => 'IDR 1500k'
        ]
    ],

    [
        'title'   => 'Water Sport',
        'images'  => [
            ['name' => 'Banana Boat', 'path' => 'images/content/activities/Water Sport/banana boat.webp'],
            ['name' => 'Diving', 'path' => 'images/content/activities/Water Sport/dive.webp'],
            ['name' => 'Fly Board', 'path' => 'images/content/activities/Water Sport/fly board.webp'],
            ['name' => 'Flying Fish', 'path' => 'images/content/activities/Water Sport/flying fish.webp'],
            ['name' => 'Jet Ski', 'path' => 'images/content/activities/Water Sport/jet sky.webp'],
            ['name' => 'Parasailing', 'path' => 'images/content/activities/Water Sport/parasailing.webp'],
            ['name' => 'Snorkeling', 'path' => 'images/content/activities/Water Sport/snorkling.webp']
        ],
        'options' => [
            'Banana Boat' => '',
            'Diving'      => '',
            'Fly Board'   => '',
            'Flying Fish' => '',
            'Jet Ski'     => '',
            'Parasailing' => '',
            'Snorkeling'  => ''
        ]
    ]
];

// =============================================================================
// TRANSPORTATION SERVICES DATA
// =============================================================================
$transportData = [
    ['name' => 'Airport Pick Up', 'price' => 'Start from 300k'],
    ['name' => 'Airport Drop', 'price' => 'Start from 300k'],
    ['name' => 'Hotel Transfer', 'price' => 'Start from 150k']
];

// =============================================================================
// PARTNER HOTELS DATA
// =============================================================================
$hotelsData = [
    // Villa Melati - Ubud
    [
        'name'   => 'Villa Melati',
        'images' => [
            ['path' => 'images/content/hotels/Villa Melati/MELATI VILLA UBUD (1).webp'],
            ['path' => 'images/content/hotels/Villa Melati/MELATI VILLA UBUD (2).webp'],
            ['path' => 'images/content/hotels/Villa Melati/MELATI VILLA UBUD (3).webp']
        ]
    ],

    // Villa Tulip - Ubud
    [
        'name'   => 'Villa Tulip',
        'images' => [
            ['path' => 'images/content/hotels/Villa Tulip/VILLA TULIP UBUD (1).webp'],
            ['path' => 'images/content/hotels/Villa Tulip/VILLA TULIP UBUD (2).webp'],
            ['path' => 'images/content/hotels/Villa Tulip/VILLA TULIP UBUD (3).webp']
        ]
    ],

    // Villa Mawar - Ubud
    [
        'name'   => 'Villa Mawar',
        'images' => [
            ['path' => 'images/content/hotels/Villa Mawar/MAWAR VILLA UBUD (1).webp'],
            ['path' => 'images/content/hotels/Villa Mawar/MAWAR VILLA UBUD (2).webp'],
            ['path' => 'images/content/hotels/Villa Mawar/MAWAR VILLA UBUD (3).webp']
        ]
    ],
    // Villa Anggrek - Ubud
    [
        'name'   => 'Villa Anggrek',
        'images' => [
            ['path' => 'images/content/hotels/Villa Anggrek/ANGGREK UBUD (2).webp'],
            ['path' => 'images/content/hotels/Villa Anggrek/ANGGREK UBUD (3).webp']
        ]
    ],

    // Villa Jepun - Ubud
    [
        'name'   => 'Villa Jepun',
        'images' => [
            ['path' => 'images/content/hotels/Villa Jepun/JEPUN UBUD (3).webp'],
            ['path' => 'images/content/hotels/Villa Jepun/JEPUN UBUD (1).webp'],
            ['path' => 'images/content/hotels/Villa Jepun/JEPUN UBUD (2).webp'],
        ]
    ],

    // Uma Manyar Sunset - Ubud
    [
        'name'   => 'Uma Manyar Sunset',
        'images' => [
            ['path' => 'images/content/hotels/Uma Manyar Sunset/MANYAR VILLA UBUD (1).webp'],
            ['path' => 'images/content/hotels/Uma Manyar Sunset/MANYAR VILLA UBUD (2).webp'],
            ['path' => 'images/content/hotels/Uma Manyar Sunset/MANYAR VILLA UBUD (3).webp']
        ]
    ],

    // The Lod Villa - Ubud
    [
        'name'   => 'The Lod Villa',
        'images' => [
            ['path' => 'images/content/hotels/The Lod Villa/THE LOD VILLA UBUD (1).webp'],
            ['path' => 'images/content/hotels/The Lod Villa/THE LOD VILLA UBUD (2).webp'],
            ['path' => 'images/content/hotels/The Lod Villa/THE LOD VILLA UBUD (3).webp']
        ]
    ],
    // Villa Arjun Ungasan - Ungasan
    [
        'name'   => 'Villa Arjun Ungasan',
        'images' => [
            ['path' => 'images/content/hotels/Villa Arjun Ungasan/ARSA UNGASAN (2).webp'],
            ['path' => 'images/content/hotels/Villa Arjun Ungasan/ARSA UNGASAN (1).webp'],
        ]
    ],

    // D' Alas Villa - Ungasan
    [
        'name'   => 'D\' Alas Villa',
        'images' => [
            ['path' => 'images/content/hotels/D\' Alas Villa/DHARMAN UNGASAN (3).webp'],
            ['path' => 'images/content/hotels/D\' Alas Villa/DHARMAN UNGASAN (1).webp'],
            ['path' => 'images/content/hotels/D\' Alas Villa/DHARMAN UNGASAN (2).webp'],
        ]
    ],

    // Kubu Kayana Batuan - Ubud
    [
        'name'   => 'Kubu Kayana Batuan',
        'images' => [
            ['path' => 'images/content/hotels/Kubu Kayana Batuan/KAYANA UBUD (3).webp'],
            ['path' => 'images/content/hotels/Kubu Kayana Batuan/KAYANA UBUD (1).webp'],
            ['path' => 'images/content/hotels/Kubu Kayana Batuan/KAYANA UBUD (2).webp'],
        ]
    ],

    // Pradja Villa - Nusa Penida
    [
        'name'   => 'Pradja Villa',
        'images' => [
            ['path' => 'images/content/hotels/Pradja Villa/PRADJA NUSA PENISA (1).webp'],
            ['path' => 'images/content/hotels/Pradja Villa/PRADJA NUSA PENISA (2).webp'],
            ['path' => 'images/content/hotels/Pradja Villa/PRADJA NUSA PENISA (3).webp']
        ]
    ],

    // River View House - Ubud
    [
        'name'   => 'River View House',
        'images' => [
            ['path' => 'images/content/hotels/River View House/RIVER VIEW UBUD (1).webp'],
            ['path' => 'images/content/hotels/River View House/RIVER VIEW UBUD (2).webp'],
            ['path' => 'images/content/hotels/River View House/RIVER VIEW UBUD (3).webp']
        ]
    ],
    // Lumbung Sari - Ubud
    [
        'name'   => 'Lumbung Sari',
        'images' => [
            ['path' => 'images/content/hotels/Lumbung Sari/LUMBUNG SARI UBUD (3).webp'],
            ['path' => 'images/content/hotels/Lumbung Sari/LUMBUNG SARI UBUD (1).webp'],
            ['path' => 'images/content/hotels/Lumbung Sari/LUMBUNG SARI UBUD (2).webp'],
        ]
    ],

    // Vila Jenar - Ubud
    [
        'name'   => 'Vila Jenar',
        'images' => [
            ['path' => 'images/content/hotels/Vila Jenar/VILA JENAR UBUD (2).webp'],
            ['path' => 'images/content/hotels/Vila Jenar/VILA JENAR UBUD (1).webp'],
            ['path' => 'images/content/hotels/Vila Jenar/VILA JENAR UBUD (3).webp']
        ]
    ],

    // Villa Butterfly Ceningan - Nusa Ceningan
    [
        'name'   => 'Villa Butterfly Ceningan',
        'images' => [
            ['path' => 'images/content/hotels/Villa Butterfly Ceningan/VILLA BUTTERFLAY CENINGAN (1).webp'],
            ['path' => 'images/content/hotels/Villa Butterfly Ceningan/VILLA BUTTERFLAY CENINGAN (2).webp']
        ]
    ],

    // Villa Damar - Ubud
    [
        'name'   => 'Villa Damar',
        'images' => [
            ['path' => 'images/content/hotels/Villa Damar/VILLA DAMAR UBUD (2).webp'],
            ['path' => 'images/content/hotels/Villa Damar/VILLA DAMAR UBUD (1).webp'],
            ['path' => 'images/content/hotels/Villa Damar/VILLA DAMAR UBUD (3).webp']
        ]
    ],

    // VB Villa - Ubud
    [
        'name'   => 'VB Villa',
        'images' => [
            ['path' => 'images/content/hotels/VB Villa/VB VILLA (5).webp'],
            ['path' => 'images/content/hotels/VB Villa/VB VILLA (1).webp'],
            ['path' => 'images/content/hotels/VB Villa/VB VILLA (2).webp'],
            ['path' => 'images/content/hotels/VB Villa/VB VILLA (3).webp'],
            ['path' => 'images/content/hotels/VB Villa/VB VILLA (4).webp'],
            ['path' => 'images/content/hotels/VB Villa/patio 2.webp'],
            ['path' => 'images/content/hotels/VB Villa/vb meja kerja.webp'],
        ]
    ]
];
