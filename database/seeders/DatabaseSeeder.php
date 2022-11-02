<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use App\Models\category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        User::create([
            'name' => 'Aziz',
            'username' => 'azizmario',
            'email' => 'aziz@gmail.com',
            'password' => bcrypt('12345')
        ]);
        User::create([
            'name' => 'Fida',
            'username' => 'fida',
            'email' => 'fida@gmail.com',
            'password' => bcrypt('12345')
        ]);
        // User::create([
        //     'name' => 'user',
        //     'username' => 'user',
        //     'email' => 'user@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::factory(3)->create(); #aseli dari sananya create data user random

        category::create([
            'name' => 'Programming',
            'slug' => 'teknologi-informasi',
        ]);
        category::create([
            'name' => 'Komputer',
            'slug' => 'komputerisasi',
        ]);
        category::create([
            'name' => 'politik',
            'slug' => 'politikus',
        ]);
        category::create([
            'name' => 'kesehatan',
            'slug' => 'kesehatan',
        ]);
        category::create([
            'name' => 'sport',
            'slug' => 'sport',
        ]);
        category::create([
            'name' => 'Pendidikan',
            'slug' => 'Pendidikan',
        ]);
        // Post::factory(10)->create();
        //Postingan insert
        Post::create([
            'title' => 'Web Programming',
            'slug' => 'web-programming',
            'excerpt' => 'Pemrograman web mengacu pada penulisan, markup, dan pengkodean yang terlibat dalam pengembangan Web, yang mencakup konten Web, skrip klien dan server Web, dan keamanan jaringan.',
            'body' => 'Pemrograman web mengacu pada penulisan, markup, dan pengkodean yang terlibat dalam pengembangan Web, yang mencakup konten Web, skrip klien dan server Web, dan keamanan jaringan. Bahasa yang paling umum digunakan untuk pemrograman Web adalah XML, HTML, JavaScript, Perl 5 dan PHP. Pemrograman web berbeda dari sekadar pemrograman, yang membutuhkan pengetahuan interdisipliner pada area aplikasi, skrip klien dan server, dan teknologi basis data.
            Pemrograman web dapat secara singkat dikategorikan ke dalam pengkodean klien dan server. Sisi klien membutuhkan pemrograman yang terkait dengan mengakses data dari pengguna dan memberikan informasi. Itu juga perlu memastikan ada cukup plug in untuk memperkaya pengalaman pengguna dalam antarmuka pengguna grafis, termasuk langkah-langkah keamanan.
            
            Untuk meningkatkan pengalaman pengguna dan fungsionalitas terkait di sisi klien, JavaScript biasanya digunakan. Ini adalah platform sisi klien yang sangat baik untuk merancang dan mengimplementasikan aplikasi Web.
            HTML5 dan CSS3 mendukung sebagian besar fungsionalitas sisi klien yang disediakan oleh kerangka kerja aplikasi lain.
            Sisi server membutuhkan pemrograman sebagian besar terkait dengan pengambilan data, keamanan dan kinerja. Beberapa alat yang digunakan di sini termasuk ASP, Lotus Notes, PHP, Java dan MySQL. Ada alat/platform tertentu yang membantu pemrograman sisi klien dan server. Beberapa contohnya adalah Opa dan Tersus.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Komputer Atau Pc',
            'slug' => 'komputer-atau-pc',
            'excerpt' => 'Komputer atau PC adalah alat yang dipakai untuk mengolah data menurut prosedur yang telah dirumuskan. komputer adalah suatu perangkat keras yang sangat berkaitan dengan teknologi.',
            'body' => 'Komputer atau PC adalah alat yang dipakai untuk mengolah data menurut prosedur yang telah dirumuskan. komputer adalah suatu perangkat keras yang sangat berkaitan dengan teknologi. komputer mampu membantu berbagai pekerjaan manusia. Kata komputer pada awalnya dipergunakan untuk menggambarkan orang yang perkerjaannya melakukan perhitungan aritmetika, dengan atau tanpa alat bantu, tetapi arti kata ini kemudian dipindahkan kepada mesin itu sendiri. Asal mulanya, pengolahan informasi hampir eksklusif berhubungan dengan masalah aritmetika, tetapi komputer modern dipakai untuk banyak tugas yang tidak berhubungan dengan matematika.
            Dalam arti seperti itu terdapat alat seperti slide rule, jenis kalkulator mekanik mulai dari abakus dan seterusnya, sampai semua komputer elektronik yang kontemporer. Istilah lebih baik yang cocok untuk arti luas seperti "komputer" adalah "yang mengolah informasi" atau "sistem pengolah informasi." Selama bertahun-tahun sudah ada beberapa arti yang berbeda dalam kata "komputer", dan beberapa kata yang berbeda tersebut sekarang disebut sebagai komputer.
            Kata komputer secara umum pernah dipergunakan untuk mendefiniskan orang yang melakukan perhitungan aritmetika, dengan atau tanpa mesin pembantu. Menurut Barnhart Concise Dictionary of Etymology, kata tersebut digunakan dalam bahasa Inggris pada tahun 1646 sebagai kata untuk "orang yang menghitung" kemudian menjelang 1897 juga digunakan sebagai "alat hitung mekanis". Selama Perang Dunia II kata tersebut menunjuk kepada para pekerja wanita Amerika Serikat dan Inggris yang pekerjaannya menghitung jalan artileri perang dengan mesin hitung.
            Charles Babbage mendesain salah satu mesin hitung pertama yang disebut mesin analitikal. Selain itu, berbagai alat mesin sederhana seperti slide rule juga sudah dapat dikatakan sebagai komputer.',
            'category_id' => 2,
            'user_id' => 2
        ]);

        Post::create([
            'title' => 'Politik Indonesia',
            'slug' => 'politik-indonesia',
            'excerpt' => 'Indonesia saat ini ditandai oleh kedaulatan rakyat termanifestasi dalam pemilihan parlemen dan presiden setiap lima tahun. Sejak berakhirnya Orde Baru yang dipimpin presiden Suharto.',
            'body' => 'Indonesia saat ini ditandai oleh kedaulatan rakyat termanifestasi dalam pemilihan parlemen dan presiden setiap lima tahun. Sejak berakhirnya Orde Baru yang dipimpin presiden Suharto dan mulainya periode Reformasi, setiap pemilu di Indonesia dianggap bebas dan adil. Namun, Indonesia belum bebas dari korupsi, kolusi dan nepotisme maupun politik uang di mana orang bisa membeli kekuasaan atau posisi politik. Misalnya, segmen miskin dari masyarakat Indonesia didorong untuk memilih calon presiden tertentu pada hari pemilihan dengan menerima uang kecil di dekat kotak suara. Strategi seperti ini masih tetap dilakukan, bahkan digunakan oleh semua pihak politik yang terlibat (dan ini sebenarnya berarti race-nya lumayan adil maka berbeda dengan pemilu era Orde Baru).
            Kami menganggap soal tersebut bagian dari proses Indonesia untuk berkembang menjadi demokrasi penuh (saat ini - berdasarkan Indeks Demokrasi yang dirilis Economist Intelligence Unit - Indonesia masih dianggap sebagai demokrasi cacat). Perlu ditekankan bahwa Indonesia merupakan negara demokrasi yang muda dan karena itu wajar kalau kadang-kadang mengalami sakit tumbuh.
            Kondisi politik Indonesia itu pasti penting sekali untuk mereka yang berencana berinvestasi di Indonesia atau mereka yang mau menjadi terlibat dalam hubungan bisnis dengan Indonesia. Di bagian ini kami menyajikan gambaran komposisi politik Indonesia saat ini serta ikhtisar bab-bab penting dalam sejarah politik negara ini.',
            'category_id' => 3,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Pendidikan Indonesia',
            'slug' => 'pendidikan-indonesia',
            'excerpt' => 'Pendidikan di Indonesia adalah seluruh pendidikan yang diselenggarakan di Indonesia, baik itu secara terstruktur maupun tidak terstruktur. Secara terstruktur, pendidikan di Indonesia menjadi tanggung jawab Kementerian Pendidikan.',
            'body' => 'Pendidikan di Indonesia adalah seluruh pendidikan yang diselenggarakan di Indonesia, baik itu secara terstruktur maupun tidak terstruktur. Secara terstruktur, pendidikan di Indonesia menjadi tanggung jawab Kementerian Pendidikan dan Kebudayaan Republik Indonesia (Kemdikbud), dahulu bernama Departemen Pendidikan Nasional Republik Indonesia (Depdiknas). Di Indonesia, semua penduduk wajib mengikuti program wajib belajar pendidikan dasar selama sembilan tahun, enam tahun di sekolah dasar dan tiga tahun di sekolah menengah pertama.
            Saat ini, pendidikan di Indonesia diatur melalui Undang-Undang Nomor 20 Tahun 2003 tentang Sistem Pendidikan Nasional.
            Wikisource memiliki naskah asli yang berkaitan dengan artikel ini:
            Undang-Undang Republik Indonesia Nomor 20 Tahun 2003
            Pendidikan di Indonesia terbagi ke dalam tiga jalur utama, yaitu formal, nonformal, dan informal. Pendidikan juga dibagi ke dalam empat jenjang, yaitu anak usia dini, dasar, menengah, dan tinggi.',
            'category_id' => 6,
            'user_id' => 1

        ]);

        Post::create([
            'title' => 'Web Programming 2',
            'slug' => 'web-programming-2',
            'excerpt' => 'Pemrograman web mengacu pada penulisan, markup, dan pengkodean yang terlibat dalam pengembangan Web, yang mencakup konten Web, skrip klien dan server Web, dan keamanan jaringan.',
            'body' => 'Pemrograman web mengacu pada penulisan, markup, dan pengkodean yang terlibat dalam pengembangan Web, yang mencakup konten Web, skrip klien dan server Web, dan keamanan jaringan. Bahasa yang paling umum digunakan untuk pemrograman Web adalah XML, HTML, JavaScript, Perl 5 dan PHP. Pemrograman web berbeda dari sekadar pemrograman, yang membutuhkan pengetahuan interdisipliner pada area aplikasi, skrip klien dan server, dan teknologi basis data.
            Pemrograman web dapat secara singkat dikategorikan ke dalam pengkodean klien dan server. Sisi klien membutuhkan pemrograman yang terkait dengan mengakses data dari pengguna dan memberikan informasi. Itu juga perlu memastikan ada cukup plug in untuk memperkaya pengalaman pengguna dalam antarmuka pengguna grafis, termasuk langkah-langkah keamanan.
            
            Untuk meningkatkan pengalaman pengguna dan fungsionalitas terkait di sisi klien, JavaScript biasanya digunakan. Ini adalah platform sisi klien yang sangat baik untuk merancang dan mengimplementasikan aplikasi Web.
            HTML5 dan CSS3 mendukung sebagian besar fungsionalitas sisi klien yang disediakan oleh kerangka kerja aplikasi lain.
            Sisi server membutuhkan pemrograman sebagian besar terkait dengan pengambilan data, keamanan dan kinerja. Beberapa alat yang digunakan di sini termasuk ASP, Lotus Notes, PHP, Java dan MySQL. Ada alat/platform tertentu yang membantu pemrograman sisi klien dan server. Beberapa contohnya adalah Opa dan Tersus.',
            'category_id' => 1,
            'user_id' => 2
        ]);

        Post::create([
            'title' => 'Teknisi-Komputer',
            'slug' => 'teknisi-komputerisasi',
            'excerpt' => 'Komputer atau PC adalah alat yang dipakai untuk mengolah data menurut prosedur yang telah dirumuskan. komputer adalah suatu perangkat keras yang sangat berkaitan dengan teknologi.',
            'body' => 'Komputer atau PC adalah alat yang dipakai untuk mengolah data menurut prosedur yang telah dirumuskan. komputer adalah suatu perangkat keras yang sangat berkaitan dengan teknologi. komputer mampu membantu berbagai pekerjaan manusia. Kata komputer pada awalnya dipergunakan untuk menggambarkan orang yang perkerjaannya melakukan perhitungan aritmetika, dengan atau tanpa alat bantu, tetapi arti kata ini kemudian dipindahkan kepada mesin itu sendiri. Asal mulanya, pengolahan informasi hampir eksklusif berhubungan dengan masalah aritmetika, tetapi komputer modern dipakai untuk banyak tugas yang tidak berhubungan dengan matematika.
            Dalam arti seperti itu terdapat alat seperti slide rule, jenis kalkulator mekanik mulai dari abakus dan seterusnya, sampai semua komputer elektronik yang kontemporer. Istilah lebih baik yang cocok untuk arti luas seperti "komputer" adalah "yang mengolah informasi" atau "sistem pengolah informasi." Selama bertahun-tahun sudah ada beberapa arti yang berbeda dalam kata "komputer", dan beberapa kata yang berbeda tersebut sekarang disebut sebagai komputer.
            Kata komputer secara umum pernah dipergunakan untuk mendefiniskan orang yang melakukan perhitungan aritmetika, dengan atau tanpa mesin pembantu. Menurut Barnhart Concise Dictionary of Etymology, kata tersebut digunakan dalam bahasa Inggris pada tahun 1646 sebagai kata untuk "orang yang menghitung" kemudian menjelang 1897 juga digunakan sebagai "alat hitung mekanis". Selama Perang Dunia II kata tersebut menunjuk kepada para pekerja wanita Amerika Serikat dan Inggris yang pekerjaannya menghitung jalan artileri perang dengan mesin hitung.
            Charles Babbage mendesain salah satu mesin hitung pertama yang disebut mesin analitikal. Selain itu, berbagai alat mesin sederhana seperti slide rule juga sudah dapat dikatakan sebagai komputer.',
            'category_id' => 2,
            'user_id' => 1
        ]);
        //postingan ke 2
        Post::create([
            'title' => 'Politik Indonesia Masa Kini',
            'slug' => 'politik-indonesia-masa-kini',
            'excerpt' => 'Indonesia saat ini ditandai oleh kedaulatan rakyat termanifestasi dalam pemilihan parlemen dan presiden setiap lima tahun. Sejak berakhirnya Orde Baru yang dipimpin presiden Suharto.',
            'body' => 'Indonesia saat ini ditandai oleh kedaulatan rakyat termanifestasi dalam pemilihan parlemen dan presiden setiap lima tahun. Sejak berakhirnya Orde Baru yang dipimpin presiden Suharto dan mulainya periode Reformasi, setiap pemilu di Indonesia dianggap bebas dan adil. Namun, Indonesia belum bebas dari korupsi, kolusi dan nepotisme maupun politik uang di mana orang bisa membeli kekuasaan atau posisi politik. Misalnya, segmen miskin dari masyarakat Indonesia didorong untuk memilih calon presiden tertentu pada hari pemilihan dengan menerima uang kecil di dekat kotak suara. Strategi seperti ini masih tetap dilakukan, bahkan digunakan oleh semua pihak politik yang terlibat (dan ini sebenarnya berarti race-nya lumayan adil maka berbeda dengan pemilu era Orde Baru).
            Kami menganggap soal tersebut bagian dari proses Indonesia untuk berkembang menjadi demokrasi penuh (saat ini - berdasarkan Indeks Demokrasi yang dirilis Economist Intelligence Unit - Indonesia masih dianggap sebagai demokrasi cacat). Perlu ditekankan bahwa Indonesia merupakan negara demokrasi yang muda dan karena itu wajar kalau kadang-kadang mengalami sakit tumbuh.
            Kondisi politik Indonesia itu pasti penting sekali untuk mereka yang berencana berinvestasi di Indonesia atau mereka yang mau menjadi terlibat dalam hubungan bisnis dengan Indonesia. Di bagian ini kami menyajikan gambaran komposisi politik Indonesia saat ini serta ikhtisar bab-bab penting dalam sejarah politik negara ini.',
            'category_id' => 3,
            'user_id' => 2
        ]);

        Post::create([
            'title' => 'Pendidikan Matematika',
            'slug' => 'pendidikan-matematika',
            'excerpt' => 'Pendidikan di Indonesia adalah seluruh pendidikan yang diselenggarakan di Indonesia, baik itu secara terstruktur maupun tidak terstruktur. Secara terstruktur, pendidikan di Indonesia menjadi tanggung jawab Kementerian Pendidikan.',
            'body' => 'Pendidikan di Indonesia adalah seluruh pendidikan yang diselenggarakan di Indonesia, baik itu secara terstruktur maupun tidak terstruktur. Secara terstruktur, pendidikan di Indonesia menjadi tanggung jawab Kementerian Pendidikan dan Kebudayaan Republik Indonesia (Kemdikbud), dahulu bernama Departemen Pendidikan Nasional Republik Indonesia (Depdiknas). Di Indonesia, semua penduduk wajib mengikuti program wajib belajar pendidikan dasar selama sembilan tahun, enam tahun di sekolah dasar dan tiga tahun di sekolah menengah pertama.
            Saat ini, pendidikan di Indonesia diatur melalui Undang-Undang Nomor 20 Tahun 2003 tentang Sistem Pendidikan Nasional.
            Wikisource memiliki naskah asli yang berkaitan dengan artikel ini:
            Undang-Undang Republik Indonesia Nomor 20 Tahun 2003
            Pendidikan di Indonesia terbagi ke dalam tiga jalur utama, yaitu formal, nonformal, dan informal. Pendidikan juga dibagi ke dalam empat jenjang, yaitu anak usia dini, dasar, menengah, dan tinggi.',
            'category_id' => 6,
            'user_id' => 2

        ]);

        Post::create([
            'title' => 'Pendidikan Bahasa Indonesia',
            'slug' => 'pendidikan-bahasa-indonesia',
            'excerpt' => 'Pendidikan di Indonesia adalah seluruh pendidikan yang diselenggarakan di Indonesia, baik itu secara terstruktur maupun tidak terstruktur. Secara terstruktur, pendidikan di Indonesia menjadi tanggung jawab Kementerian Pendidikan.',
            'body' => 'Pendidikan di Indonesia adalah seluruh pendidikan yang diselenggarakan di Indonesia, baik itu secara terstruktur maupun tidak terstruktur. Secara terstruktur, pendidikan di Indonesia menjadi tanggung jawab Kementerian Pendidikan dan Kebudayaan Republik Indonesia (Kemdikbud), dahulu bernama Departemen Pendidikan Nasional Republik Indonesia (Depdiknas). Di Indonesia, semua penduduk wajib mengikuti program wajib belajar pendidikan dasar selama sembilan tahun, enam tahun di sekolah dasar dan tiga tahun di sekolah menengah pertama.
            Saat ini, pendidikan di Indonesia diatur melalui Undang-Undang Nomor 20 Tahun 2003 tentang Sistem Pendidikan Nasional.
            Wikisource memiliki naskah asli yang berkaitan dengan artikel ini:
            Undang-Undang Republik Indonesia Nomor 20 Tahun 2003
            Pendidikan di Indonesia terbagi ke dalam tiga jalur utama, yaitu formal, nonformal, dan informal. Pendidikan juga dibagi ke dalam empat jenjang, yaitu anak usia dini, dasar, menengah, dan tinggi.',
            'category_id' => 6,
            'user_id' => 2

        ]);

        Post::create([
            'title' => 'Web Programming 3',
            'slug' => 'web-programming-3',
            'excerpt' => 'Pemrograman web mengacu pada penulisan, markup, dan pengkodean yang terlibat dalam pengembangan Web, yang mencakup konten Web, skrip klien dan server Web, dan keamanan jaringan.',
            'body' => 'Pemrograman web mengacu pada penulisan, markup, dan pengkodean yang terlibat dalam pengembangan Web, yang mencakup konten Web, skrip klien dan server Web, dan keamanan jaringan. Bahasa yang paling umum digunakan untuk pemrograman Web adalah XML, HTML, JavaScript, Perl 5 dan PHP. Pemrograman web berbeda dari sekadar pemrograman, yang membutuhkan pengetahuan interdisipliner pada area aplikasi, skrip klien dan server, dan teknologi basis data.
            Pemrograman web dapat secara singkat dikategorikan ke dalam pengkodean klien dan server. Sisi klien membutuhkan pemrograman yang terkait dengan mengakses data dari pengguna dan memberikan informasi. Itu juga perlu memastikan ada cukup plug in untuk memperkaya pengalaman pengguna dalam antarmuka pengguna grafis, termasuk langkah-langkah keamanan.
            
            Untuk meningkatkan pengalaman pengguna dan fungsionalitas terkait di sisi klien, JavaScript biasanya digunakan. Ini adalah platform sisi klien yang sangat baik untuk merancang dan mengimplementasikan aplikasi Web.
            HTML5 dan CSS3 mendukung sebagian besar fungsionalitas sisi klien yang disediakan oleh kerangka kerja aplikasi lain.
            Sisi server membutuhkan pemrograman sebagian besar terkait dengan pengambilan data, keamanan dan kinerja. Beberapa alat yang digunakan di sini termasuk ASP, Lotus Notes, PHP, Java dan MySQL. Ada alat/platform tertentu yang membantu pemrograman sisi klien dan server. Beberapa contohnya adalah Opa dan Tersus.',
            'category_id' => 1,
            'user_id' => 1
        ]);
    }
}
