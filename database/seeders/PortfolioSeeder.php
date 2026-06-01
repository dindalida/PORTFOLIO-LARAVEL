<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Experience;
use App\Models\Education;
use App\Models\Certification;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        // ============================================================
        // PROJECTS
        // ============================================================
        $projects = [
            [
                'title'       => 'SiAkad — Sistem Akademik',
                'description' => 'Platform manajemen akademik berbasis web untuk universitas. Fitur lengkap: KRS online, nilai, absensi QR, jadwal, dan laporan akademik terintegrasi.',
                'category'    => 'web',
                'tech_stack'  => ['Laravel', 'Vue.js', 'MySQL', 'Tailwind CSS', 'Redis', 'Docker'],
                'demo_url'    => 'https://siakad.demo.dev',
                'github_url'  => 'https://github.com/username/siakad',
                'featured'    => true,
                'sort_order'  => 1,
            ],
            [
                'title'       => 'InvenTrack — Inventory System',
                'description' => 'Aplikasi manajemen inventori dengan fitur barcode scanner, laporan stok real-time, notifikasi low-stock, dan multi-warehouse support.',
                'category'    => 'web',
                'tech_stack'  => ['Laravel', 'Livewire', 'Alpine.js', 'MySQL', 'Chart.js'],
                'demo_url'    => 'https://inventrck.demo.dev',
                'github_url'  => 'https://github.com/username/inventrck',
                'featured'    => true,
                'sort_order'  => 2,
            ],
            [
                'title'       => 'AgroML — Prediksi Hasil Panen',
                'description' => 'Sistem machine learning untuk prediksi hasil panen berdasarkan data cuaca, kelembaban tanah, dan historis panen menggunakan Random Forest.',
                'category'    => 'ml',
                'tech_stack'  => ['Python', 'Flask', 'Scikit-learn', 'Pandas', 'React', 'PostgreSQL'],
                'demo_url'    => null,
                'github_url'  => 'https://github.com/username/agroml',
                'featured'    => true,
                'sort_order'  => 3,
            ],
            [
                'title'       => 'PayKas — Kasir Digital',
                'description' => 'Aplikasi point of sale untuk UMKM dengan fitur manajemen produk, transaksi, laporan penjualan harian/bulanan, dan cetak struk thermal.',
                'category'    => 'web',
                'tech_stack'  => ['Laravel', 'Vue.js', 'MySQL', 'Bootstrap', 'PWA'],
                'github_url'  => 'https://github.com/username/paykas',
                'featured'    => false,
                'sort_order'  => 4,
            ],
            [
                'title'       => 'Travelink Mobile App',
                'description' => 'Aplikasi wisata mobile yang menampilkan destinasi wisata Aceh dengan fitur booking, ulasan, navigasi peta, dan rekomendasi berbasis lokasi.',
                'category'    => 'mobile',
                'tech_stack'  => ['Flutter', 'Dart', 'Laravel API', 'Google Maps', 'Firebase'],
                'github_url'  => 'https://github.com/username/travelink',
                'featured'    => false,
                'sort_order'  => 5,
            ],
            [
                'title'       => 'NetMonitor — Network Dashboard',
                'description' => 'Dashboard monitoring jaringan real-time dengan visualisasi traffic, alert otomatis, dan log analytic untuk infrastruktur kampus.',
                'category'    => 'other',
                'tech_stack'  => ['Python', 'Django', 'InfluxDB', 'Grafana', 'SNMP', 'WebSocket'],
                'github_url'  => 'https://github.com/username/netmonitor',
                'featured'    => false,
                'sort_order'  => 6,
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }

        // ============================================================
        // EXPERIENCES
        // ============================================================
        $experiences = [
            [
                'role'            => 'Full Stack Developer',
                'company'         => 'PT. Teknologi Nusa Raya',
                'employment_type' => 'Full-time',
                'start_date'      => '2023-08-01',
                'end_date'        => null,
                'is_current'      => true,
                'tasks'           => [
                    'Mengembangkan dan maintain aplikasi web enterprise menggunakan Laravel 11 & Vue.js',
                    'Merancang arsitektur database relasional dan query optimization untuk performa tinggi',
                    'Implementasi REST API & WebSocket untuk fitur real-time notification',
                    'Kolaborasi dengan tim UI/UX dalam implementasi desain responsive',
                    'Code review dan mentoring junior developer dalam best practices',
                ],
                'tech_used'  => ['Laravel', 'Vue.js', 'MySQL', 'Redis', 'Docker', 'Nginx'],
            ],
            [
                'role'            => 'Backend Developer Intern',
                'company'         => 'CV. Solusi Digital Aceh',
                'employment_type' => 'Internship',
                'start_date'      => '2023-01-01',
                'end_date'        => '2023-07-31',
                'is_current'      => false,
                'tasks'           => [
                    'Membangun REST API untuk aplikasi mobile e-commerce menggunakan Laravel Sanctum',
                    'Implementasi payment gateway (Midtrans) dan sistem notifikasi email',
                    'Optimasi query database dan implementasi caching dengan Redis',
                    'Menulis unit test dan dokumentasi API menggunakan Postman',
                ],
                'tech_used'  => ['Laravel', 'MySQL', 'Redis', 'Postman', 'Git'],
            ],
            [
                'role'            => 'Freelance Web Developer',
                'company'         => 'Self-employed',
                'employment_type' => 'Freelance',
                'start_date'      => '2021-06-01',
                'end_date'        => '2022-12-31',
                'is_current'      => false,
                'tasks'           => [
                    'Membangun website company profile, landing page, dan toko online untuk UMKM lokal',
                    'Pengembangan sistem manajemen sekolah untuk 3 lembaga pendidikan',
                    'Maintenance dan update website existing clients secara berkala',
                ],
                'tech_used'  => ['PHP', 'CodeIgniter', 'MySQL', 'Bootstrap', 'WordPress'],
            ],
        ];

        foreach ($experiences as $exp) {
            Experience::create($exp);
        }

        // ============================================================
        // EDUCATIONS
        // ============================================================
        $educations = [
            [
                'degree'      => 'S1 Teknik Informatika',
                'major'       => 'Teknik Informatika',
                'institution' => 'Universitas Malikussaleh',
                'start_year'  => 2020,
                'end_year'    => 2024,
                'gpa'         => 3.87,
                'achievements' => [
                    'Lulusan Cumlaude dengan IPK 3.87/4.00',
                    'Juara 1 Competitive Programming tingkat universitas 2022',
                    'Anggota aktif UKM Programming Club',
                    'Asisten Laboratorium Pemrograman Web 2022-2023',
                    'Penerima beasiswa Unggulan Kemendikbud 2021-2024',
                ],
            ],
            [
                'degree'      => 'SMA IPA',
                'major'       => 'Ilmu Pengetahuan Alam',
                'institution' => 'SMA Negeri 1 Lhokseumawe',
                'start_year'  => 2017,
                'end_year'    => 2020,
                'gpa'         => null,
                'achievements' => [
                    'Juara 2 Olimpiade Matematika tingkat Kabupaten 2019',
                    'Ketua OSIS periode 2018-2019',
                ],
            ],
        ];

        foreach ($educations as $edu) {
            Education::create($edu);
        }

        // ============================================================
        // CERTIFICATIONS
        // ============================================================
        $certifications = [
            [
                'name'           => 'AWS Certified Developer – Associate',
                'issuer'         => 'Amazon Web Services',
                'date'           => '2024-03-15',
                'credential_url' => 'https://aws.amazon.com/verify',
                'icon'           => 'fab fa-aws',
            ],
            [
                'name'           => 'Laravel Certified Developer',
                'issuer'         => 'Laravel LLC',
                'date'           => '2023-11-20',
                'credential_url' => 'https://certification.laravel.com/verify',
                'icon'           => 'fab fa-laravel',
            ],
            [
                'name'           => 'Google IT Support Professional',
                'issuer'         => 'Google / Coursera',
                'date'           => '2023-06-10',
                'credential_url' => 'https://coursera.org/verify/xxx',
                'icon'           => 'fab fa-google',
            ],
            [
                'name'           => 'Machine Learning Specialization',
                'issuer'         => 'DeepLearning.AI / Coursera',
                'date'           => '2022-09-05',
                'credential_url' => 'https://coursera.org/verify/yyy',
                'icon'           => 'fas fa-brain',
            ],
            [
                'name'           => 'Docker Fundamentals',
                'issuer'         => 'Docker Inc.',
                'date'           => '2023-04-18',
                'credential_url' => null,
                'icon'           => 'fab fa-docker',
            ],
            [
                'name'           => 'Certified Ethical Hacker (CEH) – Foundation',
                'issuer'         => 'EC-Council',
                'date'           => '2024-01-22',
                'credential_url' => 'https://eccouncil.org/verify',
                'icon'           => 'fas fa-shield-alt',
            ],
        ];

        foreach ($certifications as $cert) {
            Certification::create($cert);
        }
    }
}
