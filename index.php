<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    date_default_timezone_set('Asia/Jakarta');

    require_once 'vendor/autoload.php';
    $loader = new \Twig\Loader\FilesystemLoader('views');
    $twig = new \Twig\Environment($loader, ['debug' => true,]);
    $twig->addExtension(new \Twig\Extension\DebugExtension());

    $data_menu=['hosting'=>'Hosting','domain'=>'Domain','server'=>'Server','website'=>'Website','afiliasi'=>'Afiliasi','promo'=>'Promo','pembayaran'=>'Pembayaran','review'=>'Review','kontak'=>'Kontak','blog'=>'Blog'];

    $data_web=[
        'tlp'=>'0274-5305505',
    ];

    $data_section_1=[
        'title'=>"PHP Hosting",
        'deskripsi'=>"Cepat, handal, penuh dengan <br> modul PHP yang Anda butuhkan",
        'list'=>[
            'Solusi PHP untuk performa query yang lebih cepat.',
            'Konsumsi memori yang lebih rendah.',
            'Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 5.6, PHP 7.',
            'Fitur enkripsi IonCube dan Zend Guard Loaders.',
        ],
        'image'=>'assets/images/illustration_banner_php_hosting_01.svg'
    ];

    $data_section_2=[
        'data_1'=>[
            [
                'image'=>'assets/images/icon_php_hosting_zendguard.svg',
                'title'=>'PHP Zend Guard Loeder',
            ],
            [
                'image'=>'assets/images/icon_php_hosting_composer.svg',
                'title'=>'PHP Composer',
            ],
            [
                'image'=>'assets/images/icon_php_hosting_ioncube.svg',
                'title'=>'PHP IonCube Loader',
            ],
        ],
        'data_2'=>[
            [
                'title'=>'Bayi',
                'old_harga'=>19900,
                'harga'=>14900,
                'satuan'=>'bln',
                'jlh_pengguna'=>938,
                'data'=>[
                    '<b>0.5X RESOURE POWER</b>',
                    '<b>500 MB</b> Disk Space',
                    '<b>Unlimited</b> Bandwidth',
                    '<b>Unlimited</b> Databases',
                    '<b>1</b> Domain',
                    '<b>Instant</b> Backup',
                    '<b>Unlimited SSL</b> Gratis Selamanya',
                ]
            ],
            [
                'title'=>'Pelajar',
                'old_harga'=>46900,
                'harga'=>23450,
                'satuan'=>'bln',
                'jlh_pengguna'=>4168,
                'data'=>[
                    '<b>0.5X RESOURE POWER</b>',
                    '<b>Unlimited</b> Disk Space',
                    '<b>Unlimited</b> Bandwidth',
                    '<b>Unlimited</b> POP3 Email',
                    '<b>Unlimited</b> Databases',
                    '<b>10</b> Addon Domain',
                    '<b>Instant</b> Backup',
                    '<b>Domain Gratis</b> Selamanya',
                    '<b>Unlimited SSL</b> Gratis Selamanya',
                ]
            ],
            [
                'status'=>'best',
                'title'=>'Personal',
                'old_harga'=>58900,
                'harga'=>38900,
                'satuan'=>'tahun',
                'jlh_pengguna'=>10.017,
                'data'=>[
                    '<b>2X RESOURE POWER</b>',
                    '<b>Unlimited</b> Disk Space',
                    '<b>Unlimited</b> Bandwidth',
                    '<b>Unlimited</b> POP3 Email',
                    '<b>Unlimited</b> Databases',
                    '<b>Unlimited</b> Addon Domain',
                    '<b>Instant</b> Backup',
                    '<b>Domain Gratis</b> Selamanya',
                    '<b>Unlimited SSL</b> Gratis Selamanya',
                    '<b>Primate</b> Name Server',
                    '<b>SpamAssasin</b> Mail Protection',
                ]
            ],
            [
                'title'=>'Bisnis',
                'old_harga'=>109900,
                'harga'=>65900,
                'satuan'=>'bln',
                'jlh_pengguna'=>3552,
                'data'=>[
                    '<b>3X RESOURE POWER</b>',
                    '<b>500 MB</b> Disk Space',
                    '<b>Unlimited</b> Bandwidth',
                    '<b>Unlimited</b> POP3 Email',
                    '<b>Unlimited</b> Databases',
                    '<b>Unlimited</b> Addon Domain',
                    '<b>Instant</b> Backup',
                    '<b>Domain Gratis</b> Selamanya',
                    '<b>Unlimited SSL</b> Gratis Selamanya',
                    '<b>Primate</b> Name Server',
                    '<b>Prioritas</b> Layanan Support',
                    '<b>SpamExpert</b> Pro Mail Protection',
                ]
            ],
        ],
        'data_3'=>[
            'title'=>'Powerful dengan Limit PHP yang Lebih Besar',
            'data_limit'=>3,
            'data'=>[
                'max execution time 300s',
                'max execution time 300s',
                'php memory limit 1024 MB.',
                'post max size 128 MB',
                'upload max filesize 128 MB',
                'max input vars 2500',
            ]
        ]
    ];

    $data_section_3=[
        'data_1'=>[
            'title'=>'Semua Paket Hosting Sudah Termasuk',
            'data_limit'=>3,
            'data'=>[
                [
                    'image'=>'assets/images/icon_php_hosting_php_semua_versi.svg',
                    'title'=>'PHP Semua Versi',
                    'deskripsi'=>'Pilih mulai dari versi PHP 5.3 s/d PHP 7. Ubah sesuka Anda!'
                ],
                [
                    'image'=>'assets/images/icon_php_hosting_my_sql.svg',
                    'title'=>'MySQL Versi 5.6',
                    'deskripsi'=>'Nikmati MySQL versi terbaru, tercepat dan kaya akan fitur.'
                ],
                [
                    'image'=>'assets/images/icon_php_hosting_cpanel.svg',
                    'title'=>'Panel Hosting cPanel',
                    'deskripsi'=>'Kelola website dengan panel canggih yang familiar di hati Anda.'
                ],
                [
                    'image'=>'assets/images/icon_php_hosting_garansi_uptime.svg',
                    'title'=>'Garansi Uptime 99.9%',
                    'deskripsi'=>'Data center yang mendukung kelangsungan website anda 24/7.'
                ],
                [
                    'image'=>'assets/images/icon_php_hosting_innodb.svg',
                    'title'=>'Database InnoDB Unlimited',
                    'deskripsi'=>'Jumlah dan ukuran database yang tumbuh sesuai kebutuhan Anda.'
                ],
                [
                    'image'=>'assets/images/icon_php_hosting_mysql_remote.svg',
                    'title'=>'Wildcard Remote MySQL',
                    'deskripsi'=>'Mendukung s/d 25 max_user_connections dan 100 max_connections.',
                ],
            ],
        ],
    ];

    $data_section_4=[
        'data_1'=>[
            'title'=>'Mendukung Penuh Framework Laravel',
            'deskripsi'=>'Tak perlu mengunakan dedicated server ataupun VPS yang mahal. Layanan PHP hosting murah kami mendukung penuh framework favorit Anda',
            'list'=>[
                'Install Laravel <b>1 klik</b> dengan softaculous Installer.',
                'Mendukung ekstensi <b>PHP MCrypt, phar, mbstring, json,</b> dan <b>fileinfo.</b>',
                'Tersedia <b>Composer</b> dan <b>SSH</b> untuk mengistal packages pilihan Anda',
            ],
            'small_deskripsi'=>'Nb. Composer dan SSH hanya tersedia pada paket Personal dan Binis',
            'image'=>'assets/images/illustration_banner_support_laravel_hosting.svg'
        ]
    ];

    $data_section_5=[
        'data_1'=>[
            'title'=>'Modul Lengkap untuk Menjalankan Aplikasi PHP Anda.',
            'data_limit'=>15,
            'data'=>[
                'IcePHP','apc','apcu','apm','ares','bcmath','bcompiler','big_int','bitset','bloomy','bz2_filter','clamav','coin_acceptor','crack','dba','http','huffman','idn','igbinary','imagick','imap','inclued','inotify','interbase','intl','ioncube_loader','ioncube_loader_4','jsmin','json','ldap','nd_pdpo_mysql','oauth','oci8','odbc','opcache','pdf','pdo','pdo_dblib','pdo_firebird','pdo_mysql','pdo_odbc','pdo_pgsql','pdo_sqlite','pdo_pgsql','phalcon','start','steam','stomp','suhosin','sybase_ct','sysvmsg','sysvsem','sysvshm','tidy','timezonedb','trader','translit','uploadprogress','uri_template','uuid','uuid',

            ]
        ],
        'data_2'=>[
            'title'=>'Linux Hosting yang Stabil dengan Teknologi LVE',
            'deskripsi'=>'SuperMicro <b>Intel Xeon 24-Cores</b> server dengan RAM <b>128 GB</b> dan teknologi <b>LVE CloudLinux</b> untuk stabilitas server Anda. Dilengkapi dengan <b>SSD</b> untuk kecepatan <b>MySQL</b> dan caching, Apache load balancer berbasis LiteSpeed Technologies, <b>CageFS</b> security, Raid-10 protection dan auto backup untuk keamanan website PHP Anda.',
            'image'=>'assets/images/image_support.png'
        ]
    ];

    $data_footer=[
        'data_1'=>[
            'title'=>'Hubungin Kami',
            'tlp'=>$data_web['tlp'],
            'waktu'=>'Senin - Minggu',
            'ket'=>'24 Jam Nonstop',
            'alamat'=>'Jl. Selokan Mataram Monjali<br>Karangjati MT I/304<br>sinduadi, Mlati, Sleman<br>Yogyakarta 55284',
        ],
        'data_2'=>[
            [
                'title'=>'Layanan',
                'data'=>[
                    "Domain"=>"https://www.niagahoster.co.id/domain-murah",
                    "Shared Hosting"=>"https://www.niagahoster.co.id/hosting-indonesia",
                    "Cloud VPS Hosting"=>"https://www.niagahoster.co.id/cloud-vps-hosting",
                    "Managemen VPS Hosting"=>"https://www.niagahoster.co.id/cloud-hosting",
                    "Web Builder"=>"https://www.niagahoster.co.id/membuat-blog-weebly",
                    "Keamanan SSL/HTTPS"=>"https://www.niagahoster.co.id/ssl-murah",
                    "Jasa Pembuatan Website"=>"https://www.niagaweb.co.id",
                    "Program Afiliasi"=>"https://www.niagahoster.co.id/afiliasi",
                ],
            ],
            [
                'title'=>'Service Hosting',
                'data'=>[
                    "Hosting Murah"=>"https://www.niagahoster.co.id/hosting-murah",
                    "Hosting Indonesia"=>"https://www.niagahoster.co.id/hosting-indonesia",
                    "Hosting Singapore SG"=>"https://www.niagahoster.co.id/hosting-singapore",
                    "Hosting PHP"=>"#",
                    "Hosting Wordpress"=>"https://www.niagahoster.co.id/wordpress-hosting",
                    "Hosting Laravel"=>"#",
                ],
            ],
            [
                'title'=>'Tutorial',
                'data'=>[
                    'Knowledgbase'=>"https://www.niagahoster.co.id/kb",
                    'Blog'=>"https://www.niagahoster.co.id/blog",
                    'Cara Pembayaran'=>"https://www.niagahoster.co.id/pembayaran",
                ],
            ],
            [
                'title'=>'Tentang Kami',
                'data'=>[
                    "Tim Niagahoster"=>"#",
                    "Karir"=>"https://www.niagahoster.co.id/karir",
                    "Event"=>"https://www.niagahoster.co.id/event",
                    "Penawaran &amp; Promo Spesial"=>"https://www.niagahoster.co.id/promosi",
                    "Kontak Kami"=>"https://www.niagahoster.co.id/kontak",
                ],
            ],
            [
                'title'=>'Kenapa Pilih Niagahoster?',
                'data'=>[
                    "Support Terbaik"=>"#",
                    "Garansi Harga Termurah"=>"#",
                    "Domain Gratis Selamanya"=>"https://www.niagahoster.co.id/hosting-indonesia#hosting-price",
                    "Datacenter Hosting Terbaik"=>"https://www.niagahoster.co.id/hosting-terbaik",
                    "Review Pelanggan"=>"https://www.niagahoster.co.id/review",
                ],
            ],
        ],
        'copyright'=>'copyright &copy;2016 Niagahoster | Hosting powered by PHP7, CloudLinux, CloudFlare, BitNinja and DC Biznet Technovillage Jakarta cloud VPS Murah powered by Webuze Softaculous,Intel SSD and cloud computing technology'
    ];

    $paramater = [
        'judul' => 'exam niagahoster',
        'deskripsi' => 'exam niagahoster one page',
        'data_menu'=>$data_menu,
        'data_web'=>$data_web,
        'data_section_1'=>$data_section_1,
        'data_section_2'=>$data_section_2,
        'data_section_3'=>$data_section_3,
        'data_section_4'=>$data_section_4,
        'data_section_5'=>$data_section_5,
        'data_footer'=>$data_footer,
    ];

    echo $twig->render('index.html', $paramater);
?>