@extends('frontend.layouts')

@section('title', 'Hackathon | KMIPN 2018')

@section('content')
    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Hackathon</h2>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->


    <!-- Start Sample Area -->
    <section class="interior_area" id="tentang">
        <div class="container">
            <div class="interior_inner row">
                <div class="col-lg-6" style="display: flex; align-items: center; flex-wrap: wrap;">
                    <img class="img-fluid" src="img/hackathon.png" alt="" width="200">
                </div>
                <div class="col-lg-6">
                    <div class="interior_text">
                        <h4>Definisi</h4>
                        Hacking adalah pemecahan masalah yang kretif (tidak harus melibatkan teknologi). Hackathon adalah acara tentang apapun dari suatu waktu tertentu dimana orang berkumpul untuk menyelesaikan masalah. Kebanyakan hackathon yang dilakukan juga memiliki trek parallel untuk karya hackathon (banyak karya yang dihasilkan). Peserta biasanya membentuk sekitar 3 - 5 orang, membawa laptop mereka (jika acara bertema teknologi) dan menyelam ke dalam masalah</p>
                        <a class="main_btn" href="{{ url('register') }}">Daftar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Sample Area -->
    <!-- Start Button -->
    <section class="interior_area" id="tentang">
        <div class="container">
            <div class="interior_inner row">
                <div class="col-lg-6">
                    <h3 class="text-heading title_color">Kriteria Peserta dan Usulan Proposal</h3>
                    <p>1.  Jumlah anggota kelompok pengusul berjumlah 3 – 5 orang (min. 3 orang).
                        <br/>2.  Kesempatan bagi seluruh mahasiswa politeknik yang memiliki ide yang kreatif dan inovatif.
                        <br/>3.  Bidang usulan tidak diharuskan sesuai dengan bidang ilmu pengusul, guna memberikan.
                        <br/>
                        <br/>Proposal yang di upload harus memperhatikan ketentuan berikut :
                        <br/>
                        <br/>1.  Menggunakan penulisan Bahasa Indonesia sesuai dengan Ejaan Yang Disempurnakan.
                        <br/>2.  Ide hackathon yang diajukan merupakan ide yang dapat dipertanggungjawabkan keorisinilannya.
                        <br/>3.  Penulisan proposal dan ide yang diajukan tidak diperbolehkan mengandung unsur SARA, ujaran kebencian ataupun yang tidak sesuai dengan norma kesopanan/kesusilaan.
                        <br/>4.  Kandungan tulisan dalam proposal tidak bersifat ofensif ke pihak tertentu.
                        <br/>5.  Penulisan disusun secara logis dan sistematis (proposan karya yang sistematis secara umum mengandung unsur identifikasi, analisis dan kesimpulan).
                    </p>
                </div>
                <div class="col-lg-6">
                    <h3 class="text-heading title_color">Sistematika Penulisan Proposal</h3>
                    <p>Proposal Hackathon KMIPN 2018 harus ditulis sesuai petunjuk berikut :
                        <br/>
                        <br/>1.  Ditulis menggunakan huruf Times New Roman ukuran 12 pt, dengan jarak baris 1,15, ukuran A4, maksimal 25 halaman.
                        <br/>2.  Sampul proposal memuat informasi nama tim, nama anggota, judul usulan, asal politeknik dan logo KMIPN 2018 yang keseluruhan dapat dibaca dengan jelas.
                        <br/>3.  Mengikuti struktur sebagai berikut :
                        <br/>SAMPUL (1 Halaman)
                        <br/>
                        <br/>A. DAFTAR ISI
                        <br/>
                        <br/>B. BAGIAN UTAMA
                        <br/>1. PENDAHULUAN
                        <br/>-   Uraian tentang alasan peserta mengajukan ide hackathon mereka (harus dilengkapi data dan informasi riil yang mendukung guna menghindari latar belakang masalah yang tidak sesuai realita).
                        <br/>-   Tujuan
                        <br/>-   Manfaat
                        <br/>
                        <br/>2. GAGASAN
                        <br/>-   Kondisi aktual objek permasalahan (dapat diperoleh dari bahan tulisan resmi dan relevan, wawancara atau observasi mandiri).
                        <br/>-   Gagasan dari masalah terkait yang pernah diimplementasikan sebelumnya.
                        <br/>-   Bahasan lengkap mengenai gagasan yang diajukan. Dukungan berupa media visualisasi gagasan akan sangat membantu dalam penilaian.
                        <br/>-   Prediksi hasil implementasi dari gagasan yang diajukan
                        <br/>-   Uraian peran & kontribusi dari pihak-pihak yang terlibat dalam membantu implementasi gagasan
                        <br/>-   Tahapan-tahapan strategis dalam usaha penerapan gagasan hingga tujuan yang ditentukan dapat tercapai.
                        <br/>
                        <br/>3. KESIMPULAN
                        <br/>Secara umum, membahas singkat tentang gagasan yang diajukan serta alur pengimplementasiannya.
                        <br/>
                        <br/>C. DAFTAR PUSTAKA
                        <br/>Daftar pustaka ditulis dengan menggunakan Harvard Style.
                        <br/>
                        <br/>Proposal maksimal berukuran 30 MB diupload dengan format .pdf dengan pola nama file :
                        <br/><strong>HACKATHON_KMIPN2018_[NAMA TIM]_[ ASAL POLITEKNIK (TIDAK DISINGKAT )]</strong>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="interior_area" id="tentang">
        <div class="container">
            <div class="interior_inner row">
                <div class="col-lg-6">
                    <h3 class="text-heading title_color">Babak Penyisihan 1</h3>
                    <p>Seleksi akan dilakukan oleh tim juri KMIPN 2018 yang sangat kompeten pada bidangnya.
                        <br/>Kriteria penilaian usulan yang diajukan adalah sebagai berikut :
                        <br/>
                        <br/>1. Aspek kreatif, futuristik dan Inovatif gagasan.
                        <br/>2. Logis dan Implementatif
                        <br/>3. Kesesuaian dengan tema
                        <br/>4. Kebermanfaatan gagasan
                    </p>
                </div>
                <div class="col-lg-6">
                    <h3 class="text-heading title_color">Babak Final</h3>
                    <p>Peserta yang lolos akan mengikuti Hackathon KMIPN 2018 yang berlokasi di kampus PENS tanggal 7 - 10 November 2018. Selain itu peserta diharapkan menyiapkan peralatan pengembangannya sendiri (laptop, dll).</p>
                </div>
            </div>
        </div>
    </section>
    <section class="interior_area" id="tentang">
        <div class="container">
            <div class="interior_inner row">
                <div class="col-lg-6">
                    <h3 class="text-heading title_color">Kriteria Penilaian</h3>
                    <p>Penilaian dilakukan oleh mentor dan juri, besaran nilai dari mentor 60 % dan untuk juri 40% dimana yang paling penting adalah pada saat Peserta melakukan mentoring kepada para mentor disana mentor memberikan beberapa pertanyaan progress, masukan/saran, kritikan. Kriteria penilaian untuk mentor :
                        <br/>
                        <br/>1.  Peserta mampu menjelaskan idenya dengan apik, lugas, singkat, dan jelas.
                        <br/>2.  Progress pengerjaan yang bagus (lebih bagus bila produknya sudah hampir jadi atau sudah berjalan).
                        <br/>3.  Peserta mampu menjawab setiap pertanyaan dengan baik.
                        <br/>4.  Peserta dapat berfikir kritis terhadap setiap kritikan, dilihat dari penyelesaian masalah yang diangkat oleh mentor.</p>
                </div>
                <div class="col-lg-6">
                    <h3 class="text-heading title_color">Kriteria Penilaian untuk Juri</h3>
                    <p>1.   Penyampaian gagasan dalam presentasi
                        <br/>Kualitas penyampaian gagasan dalam presentasi sangat mempengaruhi pemahaman dan penilaian juri akan gagasan yang diajukan, maka dari itu peserta diharapkan menyajikan dengan metode presentasi yang baik.
                        <br/>
                        <br/>2.  Penguasaan materi gagasan
                        <br/>Juri akan menanyakan beberapa pertanyaan terkait dengan permasalahan ataupun gagasan yang diajukan dari presentasi, kemampuan peserta yang baik dalam menjawab akan sangat mendukung penilaian babak final.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Button -->
    <!-- Start Align Area -->
    <div class="whole-wrap">
        <div class="container">
            <div class="section-top-border">
                <h3 class="mb-30 title_color">Timeline</h3>
                <div class="row">
                    <div class="col-md-2 col-lg-3">
                        <div class="single-defination">
                            <h4 class="mb-20">1 - 30 September 2018</h4>
                            <p>Pendaftaran dan Penyisihan Babak 1</p>
                        </div>
                    </div>
                    <div class="col-md-2 col-lg-2">
                        <div class="single-defination">
                            <h4 class="mb-20">7 Oktober 2018</h4>
                            <p>Pengumuman Lolos Tahap 1</p>
                        </div>
                    </div>
                    <div class="col-md-2 col-lg-2">
                        <div class="single-defination">
                            <h4 class="mb-20">7 - 21 Oktober 2018</h4>
                            <p>Penyisihan Babak 2</p>
                        </div>
                    </div>
                    <div class="col-md-2 col-lg-2">
                        <div class="single-defination">
                            <h4 class="mb-20">24 Oktober 2018</h4>
                            <p>Pengumuman Lolos Final</p>
                        </div>
                    </div>
                    <div class="col-md-2 col-lg-3">
                        <div class="single-defination">
                            <h4 class="mb-20">7 - 10 November 2018</h4>
                            <p>Grand Final KMIPN 2018</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Align Area -->
@endsection