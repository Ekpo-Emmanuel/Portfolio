<?php 

$app = "http://localhost/PORTFOLIOS/Ea%20Dev/";


$target = 'YOUR_USERNAME_OR_ORG';

$accessToken = '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';

$apiUrl = "https://api.github.com/users/Ekpo-Emmanuel";

$ch = curl_init($apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Authorization: token {$accessToken}",
    "User-Agent: Your-App-Name" 
]);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);





$projectList = array(
    [
        'id' => 0,
        'title' => 'Idea Vault',
        'desc' => 'Website',
        'url' => '11.jpg',

        'wesite' => "https://ideavault.000webhostapp.com/Blog/index.php",
        'github' => 'https://github.com/Ekpo-Emmanuel/Blog-Project',

        'main_title' => 'Welcome to Idea Vault - Your Source of Infinite Creativity',
        'main_desc' => '📝 Unleash Your Imagination Dive into the Idea Vault and unlock the potential of your mind. Share your thoughts, ideas, and insights by posting articles that resonate with you and the world. Express yourself freely and inspire others with your creativity.',
        
        'source' => [
            [
                'title' => 'Github',
                'url' => 'https://github.com/Ekpo-Emmanuel/Blog-Project',
            ],
            [
                'title' => 'Website',
                'url' => 'https://ideavault.000webhostapp.com/Blog/index.php',
            ],
        ],

        'tools' => ['html', 'css', 'javascript', 'php', 'mysql', 'stripe'],     
        'features' => [
            [
                'title' => 'Post Article',
                'feats' => [
                    'Users can create and publish new articles easily.',
                    'Intuitive interface for entering article content and metadata.',
                    // 'Option to include multimedia elements like images and videos.',
                ],
            ],
            [
                'title' => 'Show Random Article',
                'feats' => [
                    'Implemented feature allowing users to discover articles randomly.
                    ',
                    'Enhances user engagement by providing a surprise element.',
                    'Algorithm ensures fair and unbiased random article selection.',
                ],
            ],
            [
                'title' => 'Add Comments',
                'feats' => [
                    'Users can interact with articles by adding comments.
                    ',
                    'Fosters a sense of community and discussion around content.',
                ],
            ],
            [
                'title' => 'Email Integration',
                'feats' => [
                    'Seamless integration with email services for various functionalities.
                    ',
                    'Email notifications for article updates, comments, and user interactions.',
                    'Provides users with real-time updates and enhances user retention.',
                ],
            ],
            [
                'title' => 'Full Article Management System:',
                'feats' => [
                    'Comprehensive system for managing all aspects of articles.
                    ',
                    'Edit, update, and delete articles as needed.',
                    'Track article performance metrics, such as views and interactions.',
                ],
            ],
        ],


        'display_img' => [
            'blog/1.png',
            'blog/2.png',
            'blog/3.png',
            'blog/4.png',
            'blog/5.png',
            'blog/6.png',
        ],
        
    ],
    [
        'id' => 1,
        'title' => 'Melody Fusion',
        'desc' => 'Music',
        'url' => '12.jpg',

        'wesite' => "https://github.com/Ekpo-Emmanuel/Music2",
        'github' => 'https://github.com/Ekpo-Emmanuel/Music2',

        'main_title' => 'Melody Fusion: Where Music, Technology, and Artistry Converge',
        'main_desc' => "📝 A dynamic and immersive music web app meticulously crafted using PHP and JavaScript. Immerse yourself in the world of melodies as HarmonyHub seamlessly blends the power of server-side processing with the interactivity of client-side scripting.<br><br> 
        Dive into a vast genre-spanning music library at your fingertips. With a sleek JavaScript interface, effortlessly explore playlists, artists, and albums. Dynamic search adapts as you type, keeping your musical journey engaging.",
        
        
        'source' => [
            [
                'title' => 'See Project',
                'url' => 'https://github.com/Ekpo-Emmanuel/Music2',
            ],
            // [
            //     'title' => 'Website',
            //     'url' => 'https://ideavault.000webhostapp.com/Blog/index.php',
            // ],
        ],

        'tools' => ['Html', 'Scss', 'Javascript', 'JQuery', 'Ajax', 'php', 'Mysql'],     
        'features' => [
            [
                'title' => 'Immersive Music Web App',
                'feats' => [
                    'An innovative web application that combines PHP and JavaScript harmoniously.',
                    'Access an extensive library of tunes spanning various genres, all conveniently accessible.',
                    'Creates an immersive experience that seamlessly merges server-side processing, client-side interactivity, and database functionality.',
                ],
            ],
            [
                'title' => 'Smooth JavaScript Interface',
                'feats' => [
                    'Effortlessly navigate through playlists, artists, and albums using a sleek JavaScript interface.',
                    'Navigate playlists, artists, and songs effortlessly with a sleek JavaScript interface powered by dynamic database interactions.',
                    'User-friendly interface integrates real-time data from the database for seamless music discovery.',
                ],
            ],
            [
                'title' => 'Personalized User Accounts',
                'feats' => [
                    'Elevates user experience by allowing personalized accounts for playlist curation and track bookmarking.',
                    'Offers users the ability to curate their own music collections and easily access their favorite tracks.',
                    'Users can explore an extensive library of music, all easily accessible through efficient database retrieval.'
                ],
            ],
            [
                'title' => 'Artist Upload Feature',
                'feats' => [
                    'Empower artists to upload their original tracks directly to Melody Fusion.',
                    'The platform becomes a hub for artists to showcase their talents while enabling users to explore fresh, diverse content',
                ],
            ],
            [
                'title' => 'PHP Backend for Robust Functionality',
                'feats' => [
                    'Utilizes a PHP backend to ensure fast data retrieval, robust security authentication, and efficient user management.',
                    'Guarantees a smooth and secure user experience while managing data and interactions.',
                ],
            ],
            [
                'title' => 'Flawless Audio Playback',
                'feats' => [
                    "Delivers uninterrupted audio streams with pristine sound quality through JavaScript's audio APIs.",
                    'Provides a seamless listening experience for users, ensuring high-quality playback.',
                    'Track article performance metrics, such as views and interactions.',
                ],
            ],
        ],


        'display_img' => [
            'music/1.png',
            'music/2.png',
            'music/3.png',
            'music/4.png',
        ],
        
    ],
    // [
    //     'id' => 2,
    //     'title' => 'Hotel Booking',
    //     'desc' => 'Fullstack',
    //     'url' => '13.jpg',

    //     'wesite' => "https://ideavault.000webhostapp.com/Blog/index.php",
    //     'github' => 'https://github.com/Ekpo-Emmanuel/Blog-Project',

    //     'main_title' => 'Welcome to Idea Vault - Your Source of Infinite Creativity',
    //     'main_desc' => '📝 Unleash Your Imagination Dive into the Idea Vault and unlock the potential of your mind. Share your thoughts, ideas, and insights by posting articles that resonate with you and the world. Express yourself freely and inspire others with your creativity.',
        
    //     'source' => [
    //         [
    //             'title' => 'Github',
    //             'url' => 'https://github.com/Ekpo-Emmanuel/Blog-Project',
    //         ],
    //         [
    //             'title' => 'Website',
    //             'url' => 'https://ideavault.000webhostapp.com/Blog/index.php',
    //         ],
    //     ],

    //     'tools' => ['html', 'css', 'javascript', 'php', 'mysql', 'stripe'],     
    //     'features' => [
    //         [
    //             'title' => 'Post Article',
    //             'feats' => [
    //                 'Users can create and publish new articles easily.',
    //                 'Intuitive interface for entering article content and metadata.',
    //                 // 'Option to include multimedia elements like images and videos.',
    //             ],
    //         ],
    //         [
    //             'title' => 'Show Random Article',
    //             'feats' => [
    //                 'Implemented feature allowing users to discover articles randomly.
    //                 ',
    //                 'Enhances user engagement by providing a surprise element.',
    //                 'Algorithm ensures fair and unbiased random article selection.',
    //             ],
    //         ],
    //         [
    //             'title' => 'Add Comments',
    //             'feats' => [
    //                 'Users can interact with articles by adding comments.
    //                 ',
    //                 'Fosters a sense of community and discussion around content.',
    //             ],
    //         ],
    //         [
    //             'title' => 'Email Integration',
    //             'feats' => [
    //                 'Seamless integration with email services for various functionalities.
    //                 ',
    //                 'Email notifications for article updates, comments, and user interactions.',
    //                 'Provides users with real-time updates and enhances user retention.',
    //             ],
    //         ],
    //         [
    //             'title' => 'Full Article Management System:',
    //             'feats' => [
    //                 'Comprehensive system for managing all aspects of articles.
    //                 ',
    //                 'Edit, update, and delete articles as needed.',
    //                 'Track article performance metrics, such as views and interactions.',
    //             ],
    //         ],
    //     ],


    //     'display_img' => [
    //         'blog/1.png',
    //         'blog/2.png',
    //         'blog/3.png',
    //         'blog/4.png',
    //         'blog/5.png',
    //         'blog/6.png',
    //     ],
        
    // ],
    [
        'id' => 3,
        'title' => 'SuperSchool',
        'desc' => 'Education',
        'url' => '14.jpg',

        'wesite' => "https://github.com/Ekpo-Emmanuel/School_Management_System",
        'github' => 'https://github.com/Ekpo-Emmanuel/School_Management_System',

        'main_title' => 'Revolutionize School Administration and Learning with a Management System',
        'main_desc' => 'School Management System is a pioneering solution that revolutionizes the educational landscape. By harnessing the capabilities of PHP and MySQL, I have crafted a comprehensive platform that not only streamlines administrative tasks but also fosters an environment conducive to enhanced learning outcomes.',
        
        'source' => [
            [
                'title' => 'See Project',
                'url' => 'https://github.com/Ekpo-Emmanuel/School_Management_System',
            ],
            // [
            //     'title' => 'Website',
            //     'url' => 'https://ideavault.000webhostapp.com/Blog/index.php',
            // ],
        ],

        'tools' => ['html', 'css', 'javascript', 'php', 'mysql', 'stripe'],     
        'features' => [
            [
                'title' => 'User-Friendly Dashboard',
                'feats' => [
                    "Our School Management System boasts an intuitive dashboard, providing administrators, teachers, parents, and students with easy access to the system's various functionalities.",
                ],
            ],
            [
                'title' => 'Attendance Tracking',
                'feats' => [
                    'Employing cutting-edge technology, our system enables real-time attendance tracking. Teachers can mark attendance digitally, reducing paperwork and ensuring accurate records',
                ],
            ],
            [
                'title' => 'Timetable Management',
                'feats' => [
                    'Create and manage class schedules effortlessly. Timetables can be customized to accommodate varying subjects, teachers, and classrooms, optimizing the allocation of resources.',
                ],
            ],
            [
                'title' => 'Assignment and Grading',
                'feats' => [
                    'Teachers can upload assignments, and students can submit their work digitally through the system. The integrated grading feature simplifies assessment and provides instant feedback to students and parents.',
                ],
            ],
        ],


        'display_img' => [
            // 'blog/1.png',
            // 'blog/2.png',
            // 'blog/3.png',
            // 'blog/4.png',
            // 'blog/5.png',
            // 'blog/6.png',
        ],
    ],
    [
        'id' => 4,
        'title' => 'Mobile Shoppee',
        'desc' => 'Ecommerce',
        'url' => '15.jpg',

        'wesite' => "https://ideavault.000webhostapp.com/Blog/index.php",
        'github' => 'https://github.com/Ekpo-Emmanuel/Blog-Project',

        'main_title' => 'Discover the Latest Tech Marvels: Shop Our Extensive Collection of Cutting-Edge Smartphones',
        'main_desc' => "Experience Seamless Efficiency: Powered by PHP and MySQL Delivers Robust Performance and Dynamic Functionality. Harnessing the synergy of PHP's versatile scripting capabilities and MySQL's robust database management, our project offers a streamlined user experience, rapid data processing, and real-time interactivity. From secure user authentication to dynamic content delivery, our solution exemplifies the prowess of PHP and MySQL in modern web development, ensuring a powerful and reliable digital experience for users",
        
        'source' => [
            [
                'title' => 'See Project',
                'url' => 'https://github.com/Ekpo-Emmanuel/Mobile_Shopee-E-Commerce-Website-master',
            ],
            // [
            //     'title' => 'Website',
            //     'url' => 'https://ideavault.000webhostapp.com/Blog/index.php',
            // ],
        ],

        'tools' => ['html', 'css', 'javascript', 'php', 'mysql', 'stripe'],     
        'features' => [
            [
                'title' => 'User Registration and Authentication',
                'feats' => [
                    'Allow users to create accounts, log in, and manage their profiles securely.',
                ],
            ],
            [
                'title' => 'Product Catalog',
                'feats' => [
                    'Display a wide range of products with detailed descriptions, images, and pricing.',
                ],
            ],
            [
                'title' => 'Shopping Cart',
                'feats' => [
                    'Provide a virtual shopping cart where users can add, modify, and remove items before proceeding to checkout.',
                ],
            ],
            [
                'title' => 'Responsive Design',
                'feats' => [
                    'Ensure the website is accessible and user-friendly across various devices, including desktops, tablets, and smartphones.',
                ],
            ],
            [
                'title' => 'Admin Dashboard',
                'feats' => [
                    'Provide an easy-to-use dashboard for administrators to manage products, orders, customer data, and website settings.',
                ],
            ],
        ],


        'display_img' => [
            'ecom/1.png',
            'ecom/2.png',
            'ecom/3.png',
            'ecom/4.png',
        ],
    ],
    [
        'id' => 5,
        'title' => 'Fithub',
        'desc' => 'Fitnes',
        'url' => '16.jpg',

        'wesite' => "https://ideavault.000webhostapp.com/Blog/index.php",
        'github' => 'https://github.com/Ekpo-Emmanuel/Blog-Project',

        'main_title' => 'Transform Your Body and Life: Unleash Your Full Fitness Potential Today!',
        'main_desc' => "Experience fitness like never before with our feature-rich landing page, designed to empower and guide you on your journey towards a healthier and more vibrant lifestyle.",
        
        'source' => [
            [
                'title' => 'See Project',
                'url' => 'https://github.com/Ekpo-Emmanuel/Fithub',
            ],
            // [
            //     'title' => 'Website',
            //     'url' => 'https://ideavault.000webhostapp.com/Blog/index.php',
            // ],
        ],

        'tools' => ['html', 'css', 'javascript', 'php', 'mysql', 'stripe'],     
        'features' => [
            [
                'title' => 'Responsive Design',
                'feats' => [
                    ' Enjoy a seamless experience across devices with our responsive design, adapting to various screen sizes for convenient access anywhere.',
                ],
            ],
            [
                'title' => 'Contact Forms with PHP',
                'feats' => [
                    'Easily get in touch with our fitness experts and support team through interactive contact forms powered by PHP.',
                ],
            ],
            [
                'title' => 'Engaging Animations',
                'feats' => [
                    'Enhance user engagement with subtle CSS animations that provide a visually appealing and captivating experience.',
                ],
            ],
            [
                'title' => 'Workout Schedule Planner',
                'feats' => [
                    'Plan your weekly workouts in advance and receive automated reminders, helping you stay consistent.',
                ],
            ]
        ],


        'display_img' => [
            'fithub/1.png',
            'fithub/2.png',
            'fithub/3.png',
            'fithub/4.png'
        ],
    ],
);

$socialLinks = [
    [
        'title' => 'Linkedin',
        'url' => 'https://www.linkedin.com/in/emmanuel-ekpo-a2973420b/',
    ],
    [
        'title' => 'Github',
        'url' => 'https://github.com/Ekpo-Emmanuel',
    ],
    // [
    //     'title' => 'Instagram',
    //     'url' => '#',
    // ],
    // [
    //     'title' => 'Leetcode',
    //     'url' => 'https://leetcode.com/Emmanuel_04/',
    // ],
];

$skills = [
    [
        'url' => 'js.png',
        'name' => 'Javascript',
        'position' => 'Frontend/Backend'
    ],
    [
        'url' => 'react.png',
        'name' => 'React.Js',
        'position' => 'Frontend'
    ],
    [
        'url' => 'nodejs.png',
        'name' => 'Node.js',
        'position' => 'Backend'
    ],
    [
        'url' => 'php.png',
        'name' => 'PHP',
        'position' => 'Backend'
    ],
    [
        'url' => 'mysql.png',
        'name' => 'MYSQL',
        'position' => 'Database'
    ],
    [
        'url' => 'laravel.png',
        'name' => 'Laravel',
        'position' => 'Frontend/Backend'
    ],
    [
        'url' => 'docker.png',
        'name' => 'Docker',
        'position' => 'Cloud'
    ],
    [
        'url' => 'java.png',
        'name' => 'Java',
        'position' => 'App'
    ],
    [
        'url' => 'tailcss.png',
        'name' => 'Tailwind CSS',
        'position' => 'Frontend'
    ],
    [
        'url' => 'html.png',
        'name' => 'HTML',
        'position' => ''
    ],
    [
        'url' => 'scss.png',
        'name' => 'Sass',
        'position' => 'Frontend'
    ],
    // [
    //     'url' => 'bootstrap.png',
    //     'name' => 'CSS',
    //     'position' => 'Frontend'
    // ],

];

$testimony = [
    [
        'text' => "I'm constantly blown away by his web development prowess. Their ability to weave together intricate code with stunning visuals is nothing short of magic. Their websites are like digital works of art, and it's clear that they pour their heart and soul into every project.",
        'name' => 'Charles Isama',
        'title' => 'Project Manager',
        'company' => 'York University'
    ],
    [
        'text' => "The future of web development is undoubtedly bright with talents like Emmanuel on the horizon. Their passion for crafting immersive digital experiences is infectious and inspiring. It's evident that their journey in this field will not only be remarkable but will also set new benchmarks for creativity and innovation.",
        'name' => 'Ronald Dickson',
        'title' => '',
        'company' => ''
    ],
    [
        'text' => "When you combine raw talent with unwavering passion, you get someone like Emmanuel. Their journey as a developer is like a story of determination and zeal. Their eyes light up when they talk about their projects, and their enthusiasm is a testament to the exciting future that awaits them in the realm of web development.",
        'name' => 'Precious Ekpo',
        'title' => '',
        'company' => ''
    ],
    // [
    //     'text' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit inceptos ullamcorper, condimentum vestibulum a erat auctor metus aenean pellentesque convallis nam, gravida suscipit montes faucibus tempor congue fusce imperdiet. Suspendisse cras hac potenti maecenas ante dapibus, arcu cubilia accumsan dictumst ligula.',
    //     'name' => 'Michael Williams',
    //     'title' => 'Marketing Manager',
    //     'company' => 'TechPro Inc'
    // ],
    // [
    //     'text' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit inceptos ullamcorper, condimentum vestibulum a erat auctor metus aenean pellentesque convallis nam, gravida suscipit montes faucibus tempor congue fusce imperdiet. Suspendisse cras hac potenti maecenas ante dapibus, arcu cubilia accumsan dictumst ligula.',
    //     'name' => 'Michael Williams',
    //     'title' => 'Marketing Manager',
    //     'company' => 'TechPro Inc'
    // ],
];