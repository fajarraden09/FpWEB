@extends('layout.landing')

<!-- ======= BAGIAN PAGES ======= -->
  @section('main')
      <!-- page -->
      <div class="pagetitle">
      <h1>Profile Sekolah</h1>
      <nav>
      <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Profile Sekolah</li>
          </ol>
      </nav>
      </div>
      <!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

          <!-- Left side columns -->
          <div class="col-lg-8" id="isi Profil">
          <div class="row">
            <img src="img/profile sekolah.jpg" alt="">
              <h1>Visi</h1>
              <p>Terwujudnya sekolah yang mampu menghasilkan keluaran yang berakar budaya bangsa, berwawasan kebangsaan dan lingkungan hidup serta bercakrawala global</p>
              <h2>Misi</h2>
              <ol>
                <li>Mengembangkan kemampuan akademik berstandar internasional dengan menerapkan dan mengembangkan kurikulum lokal, nasional, maupun internasional,</li>
                <li>Mengembangkan kedisiplinan, kepemimpinan serta ketakwaan melalui berbagai kegiatan kesiswaan baik dalam organisasi siswa intrasekolah ,   ekstrakurikuler, kegiatan keagamaan, maupun kegiatan lain yang berakar budaya bangsa,</li>
                <li>Mengembangkan sikap berkompetisi yang positif melalui berbagai bidang dan kesempatan dengan mengedepankan semangat kebangsaan</li>
                <li>Menanamkan nilai keteladanan dan budi pekerti luhur melalui pengembangan kultur sekolah yang sesuai dengan norma keagamaan, sosial kemasyarakatan, kebangsaan serta berwawasan lingkungan.</li>
              </ol>

          </div>
          <!-- End Right side columns -->

      </div>
    </section>
  @endsection
<!-- End PAGES -->