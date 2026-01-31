<?php
/**
 * Central data for packages, activities, transport, and hotels.
 * Used by index.php and components. No output.
 */

$packagesData = [
    [
        'title' => 'Trip to Ubud',
        'price' => 'IDR 750k',
        'destinations' => ['Ubud market', 'Monkey forest', 'Ubud palace', 'Tegalalang rice terrace', 'Swing & Luwak Coffee plantation'],
        'featured' => true,
        'images' => [
            ['name' => 'Monkey forest', 'path' => 'images/content/places/Monkey Forest/monkey forest.jpg'],
            ['name' => 'Bali Swing', 'path' => 'images/content/places/Bali Swing/bali swing (1).jpeg'],
            ['name' => 'Saraswati Temple', 'path' => 'images/content/places/Saraswati Temple/SARAWATI TEMPLE.webp']
        ]
    ],
    [
        'title' => 'Trip to Bedugul',
        'price' => 'IDR 750k',
        'destinations' => ['Ulundanu Beratan Temple', 'Wanagiri Hidden Hills', 'Jatiluwih Rice Terrace or Alas Kedaton Monkey Forest (optional)', 'Tanah Lot Temple'],
        'featured' => false,
        'images' => [
            ['name' => 'Ulundanu Beratan Temple', 'path' => 'images/content/places/Bedugul/bedugul.jpg'],
            ['name' => 'Bali Handara Gate', 'path' => 'images/content/places/Bali Handara Gate/bali handara gate (1).jpeg'],
            ['name' => 'Wanagiri Hidden Hills', 'path' => 'images/content/places/Wana Giri Twin Lake View/wana giri twin lake view.jpeg']
        ]
    ],
    [
        'title' => 'Trip to Kintamani',
        'price' => 'IDR 750k',
        'destinations' => ['Goa Gajah Temple', 'Tirta Empul Temple', 'Kintamani Volcano', 'Penglipuran Village'],
        'featured' => false,
        'images' => [
            ['name' => 'Tirta Empul Temple', 'path' => 'images/content/places/Tampak Siring/tampak siring water bleassing.webp'],
            ['name' => 'Penglipuran Village', 'path' => 'images/content/places/Pengelipuran/pengelipuran.jpeg'],
            ['name' => 'Tukad Cepung', 'path' => 'images/content/places/Tukad Cepung/tukad cepung.jpeg']
        ]
    ],
    [
        'title' => 'Trip to Eastern Bali',
        'price' => 'IDR 850k',
        'destinations' => ['Lempuyang Temple', 'Tirta Gangga water palace', 'Taman Ujung water palace'],
        'featured' => false,
        'images' => [
            ['name' => 'Lempuyang Temple', 'path' => 'images/content/places/Lempuyang Gate/bali-pura-lempuyang-temple-heaven-gate-2.jpg'],
            ['name' => 'Taman Ujung water palace', 'path' => 'images/content/places/Taman Ujung/taman ujung.jpeg'],
            ['name' => 'Tirta Gangga water palace', 'path' => 'images/content/places/Lempuyang/lempuyang (1).jpeg']
        ]
    ],
    [
        'title' => 'Trip to Uluwatu',
        'price' => 'IDR 750k',
        'destinations' => ['Tanjung Benoa Watersports', 'Garuda Wisnu Kencana cultural park', 'Dreamland beach', 'Uluwatu temple', 'Jimbaran bay beach'],
        'featured' => false,
        'images' => [
            ['name' => 'Garuda Wisnu Kencana cultural park', 'path' => 'images/content/places/GWK/gwk (1).jpeg'],
            ['name' => 'Dreamland beach', 'path' => 'images/content/places/Kelingking Beach/klingking beach.jpg'],
            ['name' => 'Uluwatu temple', 'path' => 'images/content/places/Angel Billabong/angel bilabong.jpg']
        ]
    ],
    [
        'title' => 'Trip Eastern Nusa',
        'price' => 'IDR 850k',
        'destinations' => ['Rumah Pohon', 'Diamond Beach', 'Atuh Beach', 'Teletabis hill (optional)'],
        'featured' => false,
        'images' => [
            ['name' => 'Rumah Pohon', 'path' => 'images/content/places/Rumah Pohon/rumah pohon.jpeg'],
            ['name' => 'Diamond Beach', 'path' => 'images/content/places/Diamond Beach/diamond beach (1).jpeg']
        ]
    ],
    [
        'title' => 'Trip to Western Nusa',
        'price' => 'IDR 750k',
        'destinations' => ['Angel Billabong', 'Broken Beach', 'Kelingking beach', 'Crystal bay (optional)'],
        'featured' => false,
        'images' => [
            ['name' => 'Angel Billabong', 'path' => 'images/content/places/Angel Billabong/angel bilabong.jpg'],
            ['name' => 'Kelingking beach', 'path' => 'images/content/places/Kelingking Beach/klingking beach.jpg']
        ]
    ]
];

$activitiesData = [
    [
        'title' => 'Ubud ATV Adventure',
        'images' => [
            ['name' => 'ATV Adventure', 'path' => 'images/content/activities/ATV/atv.jpg'],
            ['name' => 'ATV Tour', 'path' => 'images/content/activities/ATV/atv1.jpg']
        ],
        'options' => ['Single' => 'IDR 550k', 'Tandem' => 'IDR 950k'],
        'note' => 'Meal included'
    ],
    [
        'title' => 'Water Rafting',
        'images' => [],
        'options' => ['Single ticket' => 'IDR 650k', 'Multiple ticket' => 'IDR 450k'],
        'note' => 'Meal included'
    ],
    [
        'title' => 'Water Tubing',
        'images' => [],
        'options' => ['Single' => 'IDR 650k', 'Tandem' => 'IDR 950k'],
        'note' => 'Meal included'
    ],
    [
        'title' => 'Car Rental with Driver',
        'images' => [],
        'options' => [
            'Xenia and Avanza' => 'IDR 850k',
            'Toyota Innova Reborn' => 'IDR 1250k',
            'Toyota Hiace Commuter' => 'IDR 2500k',
            'Toyota Hiace Premio' => 'IDR 3250k'
        ]
    ],
    [
        'title' => 'Nusa Penida Island Activities',
        'images' => [],
        'options' => ['Manta tour' => 'IDR 850k', 'Snorkeling tour' => 'IDR 350k', 'Diving tour' => 'IDR 1500k']
    ]
];

$transportData = [
    ['name' => 'Airport Pick Up', 'price' => 'Start from 300k'],
    ['name' => 'Airport Drop', 'price' => 'Start from 300k'],
    ['name' => 'Hotel Transfer', 'price' => 'Start from 150k']
];

$hotelsData = [
    [
        'name' => 'Villa Melati',
        'images' => [
            ['name' => 'Exterior View', 'path' => 'images/content/hotels/Villa Melati/MELATI VILLA UBUD (1).jpg'],
            ['name' => 'Living Room', 'path' => 'images/content/hotels/Villa Melati/MELATI VILLA UBUD (2).jpg'],
            ['name' => 'Bedroom', 'path' => 'images/content/hotels/Villa Melati/MELATI VILLA UBUD (3).jpg']
        ]
    ],
    [
        'name' => 'Villa Tulip',
        'images' => [
            ['name' => 'Exterior View', 'path' => 'images/content/hotels/Villa Tulip/VILLA TULIP UBUD (1).jpg'],
            ['name' => 'Living Room', 'path' => 'images/content/hotels/Villa Tulip/VILLA TULIP UBUD (2).jpg'],
            ['name' => 'Bedroom', 'path' => 'images/content/hotels/Villa Tulip/VILLA TULIP UBUD (3).jpg']
        ]
    ],
    [
        'name' => 'Villa Mawar',
        'images' => [
            ['name' => 'Exterior View', 'path' => 'images/content/hotels/Villa Mawar/MAWAR VILLA UBUD (1).jpg'],
            ['name' => 'Living Room', 'path' => 'images/content/hotels/Villa Mawar/MAWAR VILLA UBUD (2).jpg'],
            ['name' => 'Bedroom', 'path' => 'images/content/hotels/Villa Mawar/MAWAR VILLA UBUD (3).jpg']
        ]
    ],
    [
        'name' => 'Villa Anggrek',
        'images' => [
            ['name' => 'Exterior View', 'path' => 'images/content/hotels/Villa Anggrek/ANGGREK UBUD (1).jpg'],
            ['name' => 'Living Room', 'path' => 'images/content/hotels/Villa Anggrek/ANGGREK UBUD (2).jpg'],
            ['name' => 'Bedroom', 'path' => 'images/content/hotels/Villa Anggrek/ANGGREK UBUD (3).jpg']
        ]
    ],
    [
        'name' => 'Villa Jepun',
        'images' => [
            ['name' => 'Exterior View', 'path' => 'images/content/hotels/Villa Jepun/JEPUN UBUD (1).jpg'],
            ['name' => 'Living Room', 'path' => 'images/content/hotels/Villa Jepun/JEPUN UBUD (2).jpg'],
            ['name' => 'Bedroom', 'path' => 'images/content/hotels/Villa Jepun/JEPUN UBUD (3).jpg']
        ]
    ],
    [
        'name' => 'Uma Manyar Sunset',
        'images' => [
            ['name' => 'Exterior View', 'path' => 'images/content/hotels/Uma Manyar Sunset/MANYAR VILLA UBUD (1).jpg'],
            ['name' => 'Living Room', 'path' => 'images/content/hotels/Uma Manyar Sunset/MANYAR VILLA UBUD (2).jpg'],
            ['name' => 'Bedroom', 'path' => 'images/content/hotels/Uma Manyar Sunset/MANYAR VILLA UBUD (3).jpg']
        ]
    ],
    [
        'name' => 'The Lod Villa',
        'images' => [
            ['name' => 'Exterior View', 'path' => 'images/content/hotels/The Lod Villa/THE LOD VILLA UBUD (1).jpg'],
            ['name' => 'Living Room', 'path' => 'images/content/hotels/The Lod Villa/THE LOD VILLA UBUD (2).jpg'],
            ['name' => 'Bedroom', 'path' => 'images/content/hotels/The Lod Villa/THE LOD VILLA UBUD (3).jpg']
        ]
    ],
    [
        'name' => 'Villa Arjun Ungasan',
        'images' => [
            ['name' => 'Exterior View', 'path' => 'images/content/hotels/Villa Arjun Ungasan/ARSA UNGASAN (1).jpeg'],
            ['name' => 'Living Room', 'path' => 'images/content/hotels/Villa Arjun Ungasan/ARSA UNGASAN (1).jpg'],
            ['name' => 'Bedroom', 'path' => 'images/content/hotels/Villa Arjun Ungasan/ARSA UNGASAN (2).jpeg']
        ]
    ],
    ['name' => 'Vbee Villa'],
    [
        'name' => 'D\' Alas Villa',
        'images' => [
            ['name' => 'Exterior View', 'path' => 'images/content/hotels/D Alas Villa/DHARMAN UNGASAN (1).jpg'],
            ['name' => 'Living Room', 'path' => 'images/content/hotels/D Alas Villa/DHARMAN UNGASAN (2).jpg'],
            ['name' => 'Bedroom', 'path' => 'images/content/hotels/D Alas Villa/DHARMAN UNGASAN (3).jpg']
        ]
    ],
    [
        'name' => 'Kubu Kayana Batuan',
        'images' => [
            ['name' => 'Exterior View', 'path' => 'images/content/hotels/Kubu Kayana Batuan/KAYANA UBUD (1).jpg'],
            ['name' => 'Living Room', 'path' => 'images/content/hotels/Kubu Kayana Batuan/KAYANA UBUD (2).jpg'],
            ['name' => 'Bedroom', 'path' => 'images/content/hotels/Kubu Kayana Batuan/KAYANA UBUD (3).jpg']
        ]
    ],
    ['name' => 'Tempuryang View'],
    ['name' => 'Tandjung Cottage'],
    [
        'name' => 'Pradja Villa',
        'images' => [
            ['name' => 'Exterior View', 'path' => 'images/content/hotels/Pradja Villa/PRADJA NUSA PENISA (1).jpg'],
            ['name' => 'Living Room', 'path' => 'images/content/hotels/Pradja Villa/PRADJA NUSA PENISA (2).JPG'],
            ['name' => 'Bedroom', 'path' => 'images/content/hotels/Pradja Villa/PRADJA NUSA PENISA (3).jpg']
        ]
    ],
    ['name' => 'Alam Selumbung'],
    ['name' => 'Arya Resort Nusa Penida'],
    [
        'name' => 'River View House',
        'images' => [
            ['name' => 'Exterior View', 'path' => 'images/content/hotels/River View House/RIVER VIEW UBUD (1).jpeg'],
            ['name' => 'Living Room', 'path' => 'images/content/hotels/River View House/RIVER VIEW UBUD (2).jpeg'],
            ['name' => 'Bedroom', 'path' => 'images/content/hotels/River View House/RIVER VIEW UBUD (3).jpeg']
        ]
    ]
];
