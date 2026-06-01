<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Informasi Pribadi
    |--------------------------------------------------------------------------
    */
    'name'        => env('PORTFOLIO_NAME', 'Ahmad Rizky'),
    'name_short'  => env('PORTFOLIO_NAME_SHORT', 'ARZ'),
    'first_name'  => env('PORTFOLIO_FIRST_NAME', 'Ahmad'),
    'last_name'   => env('PORTFOLIO_LAST_NAME', 'Rizky'),
    'tagline'     => env('PORTFOLIO_TAGLINE', 'Membangun solusi digital yang elegan, efisien, dan bermakna.'),
    'email'       => env('PORTFOLIO_EMAIL', 'hi@ahmadrizky.dev'),
    'phone'       => env('PORTFOLIO_PHONE', '+62 812 3456 7890'),
    'location'    => env('PORTFOLIO_LOCATION', 'Aceh, Indonesia'),
    'university'  => env('PORTFOLIO_UNIVERSITY', 'Universitas Malikussaleh'),
    'gpa'         => env('PORTFOLIO_GPA', '3.87'),
    'github_username' => env('GITHUB_USERNAME', 'ahmadrizky'),

    /*
    |--------------------------------------------------------------------------
    | About Text
    |--------------------------------------------------------------------------
    */
    'about_text' => 'Seorang Full Stack Developer dan mahasiswa Informatika yang passionate dalam membangun solusi teknologi inovatif. Berpengalaman dalam pengembangan web dengan Laravel, Vue.js, dan berbagai teknologi modern. Saya percaya bahwa kode yang baik bukan hanya yang berjalan, tetapi yang mudah dibaca, di-maintain, dan di-scale.',

    /*
    |--------------------------------------------------------------------------
    | Statistik Hero
    |--------------------------------------------------------------------------
    */
    'stats' => [
        'projects'   => env('PORTFOLIO_STATS_PROJECTS', 24),
        'experience' => env('PORTFOLIO_STATS_EXPERIENCE', 3),
        'clients'    => env('PORTFOLIO_STATS_CLIENTS', 12),
    ],

    /*
    |--------------------------------------------------------------------------
    | Tech Badges di Hero
    |--------------------------------------------------------------------------
    */
    'tech_badges' => [
        'Laravel', 'Vue.js', 'MySQL', 'Docker',
        'Python', 'Linux', 'Redis', 'Git',
    ],

    /*
    |--------------------------------------------------------------------------
    | Highlights About
    |--------------------------------------------------------------------------
    */
    'highlights' => [
        [
            'icon'  => 'fa-code',
            'title' => 'Clean Code Advocate',
            'desc'  => 'Menulis kode yang bersih, terdokumentasi, dan mudah di-maintain oleh tim.',
        ],
        [
            'icon'  => 'fa-brain',
            'title' => 'Problem Solver',
            'desc'  => 'Suka memecahkan masalah kompleks dengan pendekatan algoritmik yang efisien.',
        ],
        [
            'icon'  => 'fa-rocket',
            'title' => 'Fast Learner',
            'desc'  => 'Adaptif terhadap teknologi dan framework baru dengan cepat.',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Skills
    |--------------------------------------------------------------------------
    */
    'skills' => [
        'Backend' => [
            ['name' => 'Laravel',    'icon' => 'fab fa-laravel',   'level' => 92],
            ['name' => 'PHP',        'icon' => 'fab fa-php',       'level' => 90],
            ['name' => 'Node.js',    'icon' => 'fab fa-node-js',   'level' => 75],
            ['name' => 'Python',     'icon' => 'fab fa-python',    'level' => 70],
            ['name' => 'MySQL',      'icon' => 'fas fa-database',  'level' => 88],
            ['name' => 'PostgreSQL', 'icon' => 'fas fa-database',  'level' => 78],
        ],
        'Frontend' => [
            ['name' => 'Vue.js',     'icon' => 'fab fa-vuejs',     'level' => 85],
            ['name' => 'React',      'icon' => 'fab fa-react',     'level' => 72],
            ['name' => 'JavaScript', 'icon' => 'fab fa-js',        'level' => 88],
            ['name' => 'Tailwind CSS','icon'=> 'fas fa-paint-brush','level'=> 90],
            ['name' => 'HTML/CSS',   'icon' => 'fab fa-html5',     'level' => 95],
        ],
        'DevOps & Tools' => [
            ['name' => 'Docker',     'icon' => 'fab fa-docker',    'level' => 75],
            ['name' => 'Git',        'icon' => 'fab fa-git-alt',   'level' => 90],
            ['name' => 'Linux',      'icon' => 'fab fa-linux',     'level' => 80],
            ['name' => 'Nginx',      'icon' => 'fas fa-server',    'level' => 72],
            ['name' => 'Redis',      'icon' => 'fas fa-memory',    'level' => 68],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Tools
    |--------------------------------------------------------------------------
    */
    'tools' => [
        'VS Code', 'Git', 'Docker', 'Postman',
        'Figma', 'Linux', 'Nginx', 'Redis',
        'GitHub', 'Jira', 'Trello', 'Insomnia',
    ],

    /*
    |--------------------------------------------------------------------------
    | Social Media
    |--------------------------------------------------------------------------
    */
    'socials' => [
        ['icon' => 'fab fa-github',   'label' => 'GitHub',   'url' => 'https://github.com/ahmadrizky'],
        ['icon' => 'fab fa-linkedin', 'label' => 'LinkedIn', 'url' => 'https://linkedin.com/in/ahmadrizky'],
        ['icon' => 'fab fa-instagram','label' => 'Instagram','url' => 'https://instagram.com/ahmadrizky'],
        ['icon' => 'fas fa-envelope', 'label' => 'Email',    'url' => 'mailto:hi@ahmadrizky.dev'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Kontak Info
    |--------------------------------------------------------------------------
    */
    'contact_info' => [
        ['label' => 'EMAIL',    'value' => 'hi@ahmadrizky.dev',  'href' => 'mailto:hi@ahmadrizky.dev'],
        ['label' => 'PHONE',    'value' => '+62 812 3456 7890',  'href' => 'tel:+6281234567890'],
        ['label' => 'LOCATION', 'value' => 'Aceh, Indonesia',    'href' => '#'],
        ['label' => 'GITHUB',   'value' => 'github.com/ahmadrizky', 'href' => 'https://github.com/ahmadrizky'],
    ],

];