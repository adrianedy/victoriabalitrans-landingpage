<?php
/**
 * Data halaman utama - Bahasa Indonesia
 */

// =============================================================================
// SEO & META INFORMATION
// =============================================================================
$meta_title       = 'Victoria Bali Holiday - Paket Tour & Transportasi Bali';
$meta_description = 'Paket tour Bali, driver pribadi, transfer bandara, dan transportasi terpercaya. Pesan perjalanan Bali Anda dengan Victoria Bali Holiday via WhatsApp.';

// =============================================================================
// HERO SECTION
// =============================================================================
$hero_title       = 'Victoria Bali Holiday';
$hero_subtitle    = 'Partner Terpercaya untuk Tour & Transportasi Bali';
$hero_description = 'Jelajahi keindahan Bali dengan paket tour profesional dan layanan transportasi andal kami';
$hero_cta         = 'Lihat Paket Tour';

// =============================================================================
// MAIN SECTIONS
// =============================================================================
$section_packages_title   = 'Paket Tour Bali';
$section_packages_subtitle = 'Temukan yang terbaik dari Bali dengan paket tour pilihan kami';

$section_activities_title   = 'Aktivitas & Sewa';
$section_activities_subtitle = 'Petualangan dan opsi transportasi pilihan untuk perjalanan Bali Anda';

$section_transport_title   = 'Layanan Transport';
$section_transport_subtitle = 'Layanan transportasi andal untuk kenyamanan Anda';

$section_hotels_title   = 'Hotel Partner Kami';
$section_hotels_subtitle = 'Pilih dari akomodasi premium pilihan kami';

// =============================================================================
// IMPORTANT NOTES SECTION
// =============================================================================
$section_notes_title    = 'Informasi Penting';
$notes_included_title   = '✅ Termasuk dalam Semua Trip';
$notes_excluded_title   = '❌ Tidak Termasuk';

$notes_included_items = [
    'Mobil + Bahan bakar',
    'Driver sebagai pemandu dan fotografer',
    'Kendaraan MPV 7 penumpang'
];

$notes_excluded_items = [
    'Tiket masuk',
    'Biaya parkir',
    'Makanan dan minuman',
    'Pengeluaran pribadi'
];

$notes_pricing = 'Harga di atas per mobil. Jika lebih dari 6 penumpang, kami menggunakan jenis kendaraan lain dan harganya berbeda. Semua trip dapat disesuaikan atas permintaan pelanggan, selama trip yang diminta masih dalam rute yang sama.';

// =============================================================================
// CONTACT SECTION
// =============================================================================
$section_contact_title   = 'Hubungi Kami';
$section_contact_subtitle = 'Untuk informasi lebih lanjut tentang trip kami, jangan ragu menghubungi kami langsung';

$contact_tip        = 'Pilihan transport, hotel, dan trip yang Anda pilih di atas akan otomatis terkirim ke WhatsApp saat Anda mengklik tombol di bawah';
$contact_wa         = 'Hubungi kami di WhatsApp';
$contact_email_title = 'Atau Kirim Email';

// Form labels and placeholders
$form_name_label        = 'Nama Anda';
$form_email_label       = 'Email Anda';
$form_message_label     = 'Pesan';
$form_name_placeholder  = 'Masukkan nama Anda';
$form_email_placeholder = 'email@contoh.com';
$form_message_placeholder = 'Pesan akan otomatis diisi sesuai pilihan Anda di atas, tapi Anda bisa mengeditnya...';
$form_message_hint      = 'Pesan otomatis dari pilihan Anda di atas, tapi Anda bisa mengedit sesuai kebutuhan.';
$form_submit           = 'Kirim Email';
$form_submit_loading   = 'Mengirim...';

$contact_footer = 'Siapa cepat dia dapat 🙏';

// =============================================================================
// GENERAL UI TEXT
// =============================================================================
$popular_badge = 'Populer';
$view_detail   = 'Lihat detail';
$note_label    = 'Catatan:';

// =============================================================================
// TOUR PACKAGES DATA
// =============================================================================
$packagesData = [
    // Trip ke Ubud (Featured)
    [
        'title'       => 'Trip ke Ubud',
        'price'       => 'IDR 750k',
        'destinations' => [
            'Pasar Ubud',
            'Monkey forest',
            'Istana Ubud',
            'Tegalalang rice terrace',
            'Swing & Luwak Coffee plantation'
        ],
        'featured'    => true,
        'images'      => [
            ['name' => 'Monkey forest', 'path' => 'images/content/places/Monkey Forest/monkey forest.webp'],
            ['name' => 'Pasar Ubud', 'path' => 'images/content/places/Ubud Market/UBUD MARKET.webp'],
            ['name' => 'Istana Ubud', 'path' => 'images/content/places/Ubud Palace/UBUD PALACE.webp'],
            ['name' => 'Tegalalang rice terrace', 'path' => 'images/content/places/Tegalalang Rice Terrace/TEGALALANG RICE TERACE.webp'],
            ['name' => 'Air Terjun Tegenungan', 'path' => 'images/content/places/Tegenungan Waterfall/TEGENUNGAN WATER FALLS.webp'],
            ['name' => 'Swing & Luwak Coffee plantation', 'path' => 'images/content/places/Bali Swing/bali swing (1).webp']
        ]
    ],
    // Trip ke Bedugul
    [
        'title'       => 'Trip ke Bedugul',
        'price'       => 'IDR 750k',
        'destinations' => [
            'Pura Ulun Danu Beratan',
            'Wanagiri Hidden Hills',
            'Jatiluwih Rice Terrace atau Alas Kedaton Monkey Forest (opsional)',
            'Pura Tanah Lot'
        ],
        'featured'    => false,
        'images'      => [
            ['name' => 'Ulun Danu Beratan', 'path' => 'images/content/places/Bedugul/bedugul.webp'],
            ['name' => 'Bali Handara Gate', 'path' => 'images/content/places/Bali Handara Gate/bali handara gate (1).webp'],
            ['name' => 'Wanagiri Hidden Hills', 'path' => 'images/content/places/Wana Giri Twin Lake View/wana giri twin lake view.webp'],
            ['name' => 'Pura Tanah Lot', 'path' => 'images/content/places/Tanah Lot/tanah lot.webp']
        ]
    ],

    // Trip ke Kintamani
    [
        'title'       => 'Trip ke Kintamani',
        'price'       => 'IDR 750k',
        'destinations' => [
            'Goa Gajah',
            'Tirta Empul',
            'Gunung Kintamani',
            'Desa Penglipuran'
        ],
        'featured'    => false,
        'images'      => [
            ['name' => 'Goa Gajah', 'path' => 'images/content/places/Goa Gajah/GOA GAJAH.webp'],
            ['name' => 'Tirta Empul', 'path' => 'images/content/places/Tampak Siring/TIRTA EMPUL HOLY WATER BLESSING.webp'],
            ['name' => 'Pemandangan Gunung Penelokan', 'path' => 'images/content/places/Penelokan/PENELOKAN MONTAIN VIEW.webp'],
            ['name' => 'Air Terjun Tukad Cepung', 'path' => 'images/content/places/Tukad Cepung/tukad cepung.webp'],
            ['name' => 'Desa Penglipuran', 'path' => 'images/content/places/Pengelipuran/PENGELIPURAN VILLAGE.webp']
        ]
    ],
    // Trip Bali Timur
    [
        'title'       => 'Trip Bali Timur',
        'price'       => 'IDR 850k',
        'destinations' => [
            'Pura Lempuyang',
            'Tirta Gangga',
            'Taman Ujung'
        ],
        'featured'    => false,
        'images'      => [
            ['name' => 'Pura Lempuyang', 'path' => 'images/content/places/Lempuyang/lempuyang (1).webp'],
            ['name' => 'Tirta Gangga', 'path' => 'images/content/places/Tirta Gangga/TIRTA GANGGA.webp'],
            ['name' => 'Taman Ujung', 'path' => 'images/content/places/Taman Ujung/taman ujung.webp'],
            ['name' => 'Bali Timur', 'path' => 'images/content/places/Bali Tourist Attractions/Bali-Tourist-Attractions_9th-jun.webp']
        ]
    ],

    // Trip ke Uluwatu
    [
        'title'       => 'Trip ke Uluwatu',
        'price'       => 'IDR 750k',
        'destinations' => [
            'Garuda Wisnu Kencana',
            'Pantai Labuan Sait',
            'Pantai Pandawa',
            'Pura Uluwatu'
        ],
        'featured'    => false,
        'images'      => [
            ['name' => 'Garuda Wisnu Kencana Cultural Park', 'path' => 'images/content/places/GWK/gwk (1).webp'],
            ['name' => 'Garuda Wisnu Kencana', 'path' => 'images/content/places/GWK/gwk (2).webp'],
            ['name' => 'Garuda Wisnu Kencana', 'path' => 'images/content/places/GWK/garuda wisnu kencana.webp'],
            ['name' => 'Labuan Sait', 'path' => 'images/content/places/Labuan Sait/labuan sait.webp'],
            ['name' => 'Pantai Pandawa', 'path' => 'images/content/places/Pandawa Beach/pandawa beach.webp'],
            ['name' => 'Pura Uluwatu', 'path' => 'images/content/places/Uluwatu Temple/uluwatu temple.webp']
        ]
    ],

    // Trip Nusa Timur
    [
        'title'       => 'Trip Nusa Timur',
        'price'       => 'IDR 850k',
        'destinations' => [
            'Rumah Pohon',
            'Diamond Beach',
            'Atuh Beach',
            'Teletabis hill (opsional)'
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

    // Trip Nusa Barat
    [
        'title'       => 'Trip Nusa Barat',
        'price'       => 'IDR 750k',
        'destinations' => [
            'Angel Billabong',
            'Broken Beach',
            'Kelingking beach',
            'Crystal bay (opsional)'
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
        'note'    => 'Makanan termasuk'
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
        'note'    => 'Makanan termasuk'
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
        'note'    => 'Makanan termasuk'
    ],

    // Sewa Mobil dengan Driver
    [
        'title'   => 'Sewa Mobil dengan Driver',
        'images'  => [
            ['name' => 'Avanza Xenia', 'path' => 'images/content/activities/Car Rental/avanza xenia.webp'],
            ['name' => 'Innova Reborn', 'path' => 'images/content/activities/Car Rental/reborn.webp'],
            ['name' => 'Hiace Commuter', 'path' => 'images/content/activities/Car Rental/comuter.webp'],
            ['name' => 'Hiace Premio', 'path' => 'images/content/activities/Car Rental/premio.webp']
        ],
        'options' => [
            'Xenia dan Avanza'      => 'IDR 850k',
            'Toyota Innova Reborn'  => 'IDR 1250k',
            'Toyota Hiace Commuter' => 'IDR 2500k',
            'Toyota Hiace Premio'   => 'IDR 3250k'
        ]
    ],

    // Aktivitas Pulau Nusa Penida
    [
        'title'   => 'Aktivitas Pulau Nusa Penida',
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

    // Water Sport
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
    ['name' => 'Jemput Bandara', 'price' => 'Mulai 300k'],
    ['name' => 'Antar Bandara', 'price' => 'Mulai 300k'],
    ['name' => 'Transfer Hotel', 'price' => 'Mulai 150k']
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
            ['path' => 'images/content/hotels/Villa Jepun/JEPUN UBUD (2).webp']
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
            ['path' => 'images/content/hotels/Villa Arjun Ungasan/ARSA UNGASAN (1).webp']
        ]
    ],

    // D' Alas Villa - Ungasan
    [
        'name'   => 'D\' Alas Villa',
        'images' => [
            ['path' => 'images/content/hotels/D\' Alas Villa/DHARMAN UNGASAN (3).webp'],
            ['path' => 'images/content/hotels/D\' Alas Villa/DHARMAN UNGASAN (1).webp'],
            ['path' => 'images/content/hotels/D\' Alas Villa/DHARMAN UNGASAN (2).webp']
        ]
    ],

    // Kubu Kayana Batuan - Ubud
    [
        'name'   => 'Kubu Kayana Batuan',
        'images' => [
            ['path' => 'images/content/hotels/Kubu Kayana Batuan/KAYANA UBUD (3).webp'],
            ['path' => 'images/content/hotels/Kubu Kayana Batuan/KAYANA UBUD (1).webp'],
            ['path' => 'images/content/hotels/Kubu Kayana Batuan/KAYANA UBUD (2).webp']
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
            ['path' => 'images/content/hotels/Lumbung Sari/LUMBUNG SARI UBUD (2).webp']
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
