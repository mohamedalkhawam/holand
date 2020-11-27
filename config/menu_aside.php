<?php
// Aside menu
return [

    'items' => [
        // Dashboard
        // [
        //     'title' => 'Dashboard',
        //     'root' => true,
        //     'icon' => 'media/svg/icons/Design/Layers.svg', // or can be 'flaticon-home' or any flaticon-*
        //     'page' => 'dashboard',
        //     'new-tab' => false,
        // ],
        // Custom
        [
            'section' => 'Pages',
        ],
        //                start pages ####################
        [
            'title' => 'Home',
            'root' => true,
            'icon' => 'media/svg/icons/Home/Home-heart.svg', // or can be 'flaticon-home' or any flaticon-*
            'page' => 'dashboard/home',
            'new-tab' => false,
        ],
        
        // [
        //     'title' => 'Services',
        //     'root' => true,
        //     'icon' => 'media/svg/icons/Devices/CPU1.svg', // or can be 'flaticon-home' or any flaticon-*
        //     'page' => 'dashboard/services',
        //     'new-tab' => false,
        // ],
        // [
        //     'title' => 'Services gallery',
        //     'root' => true,
        //     'icon' => 'media/svg/icons/Devices/CPU1.svg', // or can be 'flaticon-home' or any flaticon-*
        //     'page' => 'dashboard/services/gallery',
        //     'new-tab' => false,
        // ],

        [
            'title' => 'Services',
            'root' => true,
            'icon' => 'media/svg/icons/Devices/CPU1.svg', // or can be 'flaticon-home' or any flaticon-*
            'new-tab' => false,
            'bullet' => 'dot',
            'submenu' => [
                [
                    'title' => 'Services',
                    'page' => 'dashboard/services/service',
                ],
                [
                    'title' => 'Services Header',
                    'page' => 'dashboard/services/header',
                ],
                [
                    'title' => 'Services Cases',
                    'page' => 'dashboard/services/servicecases',
                ],
                [
                    'title' => 'Services gallery',
                    'page' => 'dashboard/services/gallery',
                ],
                [
                    'title' => 'What Offer',
                    'page' => 'dashboard/services/whatweoffer',
                ],

            ],
        ],




        [
            'title' => 'About us',
            'root' => true,
            'icon' => 'media/svg/icons/Home/Library.svg', // or can be 'flaticon-home' or any flaticon-*
            'page' => 'dashboard/about',
            'new-tab' => false,
            'bullet' => 'dot',
            'submenu' => [
                [
                    'title' => 'Header',
                    'page' => 'dashboard/about/header',
                ],
                [
                    'title' => 'Why us',
                    'page' => 'dashboard/about/whyus'
                ],
                [
                    'title' => 'Gallery screen',
                    'page' => 'dashboard/about/galleryscreen'
                ],
                [
                    'title' => 'Gallery',
                    'page' => 'dashboard/about/gallery'
                ],
            ],
        ],


        //  [
        //     'title' => 'Appointment',
        //     'root' => true,
        //     'icon' => 'media/svg/icons/Home/Timer.svg', // or can be 'flaticon-home' or any flaticon-*
        //     'new-tab' => false,
        //     'bullet' => 'dot',
        //     'submenu' => [
        //         [
        //             'title' => 'Appointments',
        //             'page' => 'dashboard/appointment',
        //         ],
        //         [
        //             'title' => 'ReEEEasons',
        //             'page' => 'dashboard/appointment/reason',
        //         ],
        //         // [
        //         //     'title' => 'Open hours',
        //         //     'page' => 'dashboard/appointment/time'
        //         // ],
              
        //     ],
        // ],

     
        [
            'title' => 'Contact',
            'root' => true,
            'icon' => 'media/svg/icons/Communication/Sending mail.svg', // or can be 'flaticon-home' or any flaticon-*
            'page' => 'dashboard/contact',
            'new-tab' => false,
        ],
        [
            'title' => 'Doctors',
            'root' => true,
            'icon' => 'media/svg/icons/General/User.svg', // or can be 'flaticon-home' or any flaticon-*
            'page' => 'dashboard/doctors',
            'new-tab' => false,
        ],
         [
            'section' => 'Settings',
        ],
        [
            'title' => 'Config',
            'root' => true,
            'icon' => 'media/svg/icons/General/Settings-2.svg', // or can be 'flaticon-home' or any flaticon-*
            'page' => 'dashboard/config',
            'new-tab' => false,
        ],
        // [
        //     'title' => 'Certificates',
        //     'icon' => 'media/svg/icons/Layout/Layout-4-blocks.svg',
        //     'bullet' => 'line',
        //     'root' => true,
        //     'new-tab' => false,
        //     'page' => 'dashboard/certificates',

        // ],
    ],
];
