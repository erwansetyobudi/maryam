<?php
# @Author: Waris Agung Widodo <user>
# @Date:   2018-01-23T11:27:04+07:00
# @Email:  ido.alit@gmail.com
# @Filename: _home.php
# @Last modified by:   Erwan Setyo Budi (erwans818@gmail.com)
# @Last modified time: 2018-01-26T18:43:45+07:00

?>

<section id="section1 container-fluid">
    <header class="c-header">
        <div class="mask"></div>
      <?php
      // ------------------------------------------------------------------------
      // include navbar
      // ------------------------------------------------------------------------
      include '_navbar.php'; ?>
    </header>
  <?php
  // --------------------------------------------------------------------------
  // include search form part
  // --------------------------------------------------------------------------
  include '_search-form.php'; ?>
</section>

<div id="slims-home">
<section class="mt-5 container">
    <h4 class="text-secondary text-center text-thin mt-5 mb-4"><?php echo __('Select the topic you are interested in'); ?></h4>
    <ul class="topic d-flex flex-wrap justify-content-center px-0">
        <li class="d-flex justify-content-center align-items-center m-2">
            <a href="index.php?callnumber=8&search=search" class="d-flex flex-column">
                <img src="<?php echo assets('images/8-books.png'); ?>" width="80" class="mb-3 mx-auto"/>
                <?php echo __('Literature'); ?>
            </a>
        </li>
        <li class="d-flex justify-content-center align-items-center m-2">
            <a href="index.php?callnumber=3&search=search" class="d-flex flex-column">
                <img src="<?php echo assets('images/3-diploma.png'); ?>" width="80" class="mb-3 mx-auto"/>
                <?php echo __('Social Sciences'); ?>
            </a>
        </li>
        <li class="d-flex justify-content-center align-items-center m-2">
            <a href="index.php?callnumber=6&search=search" class="d-flex flex-column">
                <img src="<?php echo assets('images/6-blackboard.png'); ?>" width="80" class="mb-3 mx-auto"/>
                <?php echo __('Applied Sciences'); ?>
            </a>
        </li>
        <li class="d-flex justify-content-center align-items-center m-2">
            <a href="index.php?callnumber=7&search=search" class="d-flex flex-column">
                <img src="<?php echo assets('images/7-quill.png'); ?>" width="80" class="mb-3 mx-auto"/>
                <?php echo __('Art & Recreation'); ?>
            </a>
        </li>
        <li class="d-flex justify-content-center align-items-center m-2">
            <a href="javascript:void(0)" class="d-flex flex-column" data-toggle="modal" data-target="#exampleModal">
                <img src="<?php echo assets('images/icon/grid_icon.png'); ?>" width="80"
                     class="mb-3 mx-auto"/>
                <?php echo __('see more..'); ?>
            </a>
        </li>
    </ul>
</section>
<section class="mt-5 bg-white">
    <div class="container py-5">
        <h4 class="mb-4">
            <?= $sysconf['library_name']; ?>
            <br>
            <small class="subtitle-section"><?= $sysconf['library_subname']; ?></small>
        </h4>
        <div class="row align-items-center">
        <div class="col-md-6">
            <img src="<?php echo assets('images/mockup2.png'); ?>"
                     class="mb-3 mx-auto"/>
        </div>
        <div class="col-md-6  text-justify pt-8 md:pt-0">
            
            <p>Situs web ini kami dedikasikan pada seluruh masyarakat sebagai salah satu usaha kami menghadirkan layanan informasi praktis, 
                    aktual dan lengkap yang dimanfaatkan tanpa terkendala ruang dan waktu. Situs web ini kami kembangkan sebagai sarana informasi dan interaksi dengan pengguna dan telah diintegrasikan dengan sistem otomasi pengelolaan dan layanan perpustakaan berbasis aplikasi "SLiMS" yang dikembangkan oleh Developer SLiMS. 
                    Kami akan selalu berinovasi agar hadir sebagai wahana sumber informasi yang mampu menjawab kebutuhan masyarakat yang semakin berkembang dengan senantiasa berupaya untuk mengembangkan program-program peningkatan budaya literasi dan meningkatkan mutu layanan. 
                    Berangkat dari konsep perpustakaan yang dinamis (The Dynamic Library), Kami senantiasa berbenah untuk mengoptimalkan perannya dalam mengembangkan dan memfasilitasi penelitian, pendidikan, pelestarian, informasi dan rekreasi, sekaligus berupaya untuk dapat melayani dengan prima.</p>
            
        </div>
    </div>
        
    </div>
</section>


<?php if ($sysconf['template']['classic_popular_collection']) : ?>
<section class="mt-5 container">
    <h4 class=" mb-4">
        <?php echo __('Popular among our collections'); ?>
        <br>
        <small class="subtitle-section"><?php echo __('Our library\'s line of collection that have been favoured by our users were shown here. Look for them. Borrow them. Hope you also like them');?></small>
    </h4>

    <slims-group-subject url="index.php?p=api/subject/popular"></slims-group-subject>
    <slims-collection url="index.php?p=api/biblio/popular"></slims-collection>

</section>
<?php endif; ?>

<?php if ($sysconf['template']['classic_new_collection']) : ?>
<section class="mt-5 container">
    <h4 class=" mb-4">
        <?php echo __('New collections + updated');?>
        <br>
        <small class="subtitle-section"><?php echo __('These are new collections list. Hope you like them. Maybe not all of them are new. But in term of time, we make sure that these are fresh from our processing oven');?></small>
    </h4>

    <slims-group-subject url="index.php?p=api/subject/latest"></slims-group-subject>
    <slims-collection url="index.php?p=api/biblio/latest"></slims-collection>

</section>
<?php endif; ?>

<?php if ($sysconf['template']['classic_top_reader']) : ?>
<section class="mt-5 bg-white">
    <div class="container py-5">
        <h4 class="mb-4">
            <?php echo __('Top reader of the year');?>
            <br>
            <small class="subtitle-section"><?php echo __('Our best users, readers, so far. Continue to read if you want your name being mentioned here');?></small>
        </h4>
        <slims-group-member url="index.php?p=api/member/top"></slims-group-member>
    </div>
</section>

<?php endif; ?>



</div>
<section class="mt-5">
    <div class="container py-5">
        <h4 class="mb-4">
            <?php echo __('Library News');?>
            <br>
        </h4>
                <div class="card col-md-12 mt-2">
                    <div  class="carousel slide" data-ride="carousel" >
                        <div class="w-100 carousel-inner mb-5" role="listbox">
                            <div class="carousel-item active">
                                <div class="row">
                                    <?php
                                       $current_news = "SELECT content_id, content_title, content_desc,
                                                        content_path, is_news, last_update 
                                                        FROM content WHERE is_news IS NOT NULL 
                                                        ORDER BY input_date DESC LIMIT 0,3";
                                       $current_news_q = $dbs->query($current_news);
                                       while ($current_news_d = $current_news_q->fetch_assoc()) {
                                         
                                        if (is_null($current_news_d['content_desc'])) {
                                            $notes = '<i style="color:#f00;">Tidak ada deskripsi</i>';
                                         } else {
                                            $notes = substr($current_news_d['content_desc'],0, 200).'... (<a href="?p='.$current_news_d['content_path'].'">Baca Selengkapnya</a>)';
                                         }
                                         $html_str  = '<div class="col-md-4">
                                                            <div class="carousel-caption">
                                                                <div class="row text-left">
                                                                    <div class="col-sm-12 col-12">
                                                                    <h2><a href="?p='.$current_news_d['content_path'].'">'.$current_news_d['content_title'].'</a> - <span>'.$current_news_d['last_update'].'</span></h2>
                                                                      <small>'.$notes.'</small>
                                                                      <small class="smallest mute">- <a href="?p='.$current_news_d['content_path'].'">Read More</a></small>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>';
                                         echo $html_str;
                                        }                              
                                    ?>
                                </div>
                            </div>
                </div> 
                </br>
                <a href="index.php?p=news"><button class="btn btn-primary" href="index.php?p=news">All News</button></a>
    </div>
</section>
<section>
    <div class="bg-overlay">
    <div class="container text-center mb-0">
        <h1>Kami adalah Unit Perubahan</h1>
        <h4>Kami menyediakan koleksi berkualitas untuk merubah hidup anda menjadi lebih baik</h4>
        <br><br>
        
    </div>
</div>

</section>

<section class="pt-5 pb-5 bg-white">
            <div class="container">
                <h4 class="text">Pendapat Orang Tentang Kami</h4>
                <div class="card col-md-12 mt-2">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="100000">
                        <div class="w-100 carousel-inner mb-5" role="listbox">
                            <div class="carousel-item active">
                                <div class="bg"></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="carousel-caption">
                                            <div class="row">
                                                <div class="col-sm-3 col-4 align-items-start">
                                                    <img src="<?php echo assets('images/person1.png'); ?>" class="rounded-circle img-fluid">
                                                    
                                                </div>
                                                <div class="col-sm-9 col-8">
                                                <h2>Ai Nur Bayinah, SEI, MM, CPMM - <span>Dosen STEI SEBI</span></h2>
                                                  <small>Alhamdulillah.. penuh syukur dan bangga, Perpustakaan STEI SEBI dg segala keterbatasannya mampu menyediakan sumber referensi ilmiah yang lengkap dan dibutuhkan dalam kajian ilmiah para dosen dan mahasiswa. Semoga ke depan perpus sebi dapat terus menjadi pusat sumber referensi ekonomi Islam terbaik dan terlengkap di indonesia. Aamiin</small>
                                                  <small class="smallest mute"></small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="carousel-caption">
                                            <div class="row">
                                                <div class="col-sm-3 col-4 align-items-start">
                                                    <img src="<?php echo assets('images/person2.png'); ?>" class="rounded-circle img-fluid">
                                                </div>
                                                <div class="col-sm-9 col-8">
                                                  <h2>Depi Lestari - <span>Mahasiswi AS 2015 </span></h2>
                                                  <small>Saya bersyukur sekali menjadi bagian dr volunteer sekaligus keluarga perpustakaan STEI SEBI. Sebagai mahasiswi jurusan akuntansi syariah, saya mendapatkan bonus ilmu  selain ilmu akuntansi yg tdk didapat oleh mahasiswi lain yaitu ilmu perpustakaan. Karena sebaik-baik teman duduk adalah buku, maka kita harus berada di lingkungan orang-orang yang dekat dg buku. Semakin bnyak input (sumber bacaan) yg kita konsumsi, semakin berkualitaslah output yg kita keluarkan.</small>
                                                  <small class="smallest mute"></small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="bg"></div>
                                    <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="carousel-caption">
                                            <div class="row">
                                                <div class="col-sm-3 col-4 align-items-start">
                                                    <img src="<?php echo assets('images/person3.png'); ?>" class="rounded-circle img-fluid">
                                                </div>
                                                <div class="col-sm-9 col-8">
                                                <h2>Yudha Anfal Gimnastiar - <span>Mahasiswa PS 2014</span></h2>
                                                  <small>Jadi volunteer perpustakaan itu satu pengalaman yg sangat mengasyikkan, dapat pengalaman dan ilmu baru, terutama tentang ilmu perpustakaan yg ga akan di ajarkan selama kuliah di STEI SEBI, selain dapat ilmu kita juga dapat keluarga baru dan itu yg membuat nyaman</small>
                                                  <small class="smallest mute"></small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="carousel-caption">
                                            <div class="row">
                                                <div class="col-sm-3 col-4 align-items-start">
                                                    <img src="<?php echo assets('images/person4.png'); ?>" class="rounded-circle img-fluid">
                                                </div>
                                                <div class="col-sm-9 col-8">
                                                <h2>Anonim - <span>Mahasiswa</span></h2>
                                                  <small>Semoga lebih luas agar bisa lebih banyak memberikan banyak literasi untuk kebutuhan mahasiswa STEI SEBI</small>
                                                  <small class="smallest mute"></small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
                          <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div> 
            </div>
</section>


<?php if ($sysconf['template']['classic_map']) : ?>
<section class="my-5 container">
    <div class="row align-items-center">
        <div class="col-md-6">
            <iframe class="embed-responsive"
                    src="<?= $sysconf['template']['classic_map_link']; ?>"
                    height="420" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="col-md-6 pt-8 md:pt-0">
            <h4><?= $sysconf['library_name']; ?></h4>
            <p><?= $sysconf['template']['classic_map_desc']; ?></p>
            <p class="d-flex flex-row pt-2">
                <a target="_blank" href="<?= $sysconf['template']['classic_fb_link'] ?>" class="btn btn-primary mr-2" name="button"><i class="fab fa-facebook-square text-white"></i></a>
                <a target="_blank" href="<?= $sysconf['template']['classic_twitter_link'] ?>" class="btn btn-info mr-2" name="button"><i class="fab fa-twitter-square text-white"></i></a>
                <a target="_blank" href="<?= $sysconf['template']['classic_youtube_link'] ?>" class="btn btn-danger mr-2" name="button"><i class="fab fa-youtube text-white"></i></a>
                <a target="_blank" href="<?= $sysconf['template']['classic_instagram_link'] ?>" class="btn btn-dark mr-2" name="button"><i class="fab fa-instagram text-white"></i></a>
            </p>
        </div>
    </div>
</section>
<?php endif; ?>



<style type="text/css">
    .card {
    margin: 0 auto;
    border: none;
}
.card .carousel-item {
    min-height: 190px;
}
.card .carousel-caption {
    padding: 0;
    right: 15px;
    left: 15px;
    top: 15px;
    color: #3d3d3d;
    border: 1px solid #ccc;
    min-height:175px;
    padding: 15px;
}
.card .carousel-caption .col-sm-3 {
    display: flex;
    align-items: center;
}
.card .carousel-caption .col-sm-9 {
    text-align: left;
}
.card .carousel-control-prev, .card .carousel-control-next {
    color: #3d3d3d !important;
    opacity: 1 !important;
}
.carousel-control-prev-icon, .carousel-control-next-icon {
    background-image: none;
    color: #fff;
    font-size: 14px;
    background-color: #cd3a54;
    height: 32px;
    line-height: 32px;
    width: 32px;
}
.carousel-control-prev-icon:hover, .carousel-control-next-icon:hover {
    opacity: 0.85;
}
.carousel-control-prev {
    left: 40%;
    top: 110%;
}
.carousel-control-next {
    right: 40%;
    top: 110%;
}
.midline {
    width: 60px;
    border-top: 1px solid #d43025;
}
.carousel-caption h2 {
    font-size: 14px;
}
.carousel-caption h2 span {
    color: #cd3a54;
}
 @media (min-width: 320px) and (max-width: 575px) {
.carousel-caption {
    position: relative;
}
.card .carousel-caption {
    left: 0;
    top: 0;
    margin-bottom: 15px;
}
.card .carousel-caption img {
    margin: 0 auto;
}
.carousel-control-prev {
    left: 35%;
    top: 105%;
}
.carousel-control-next {
    right: 35%;
    top: 105%;
}
.card .carousel-caption h3 {
    margin-top: 0;
    font-size: 16px;
    font-weight: 700;
}
}
@media (min-width: 576px) and (max-width: 767px) {
.carousel-caption {
    position: relative;
}
.card .carousel-caption {
    left: 0;
    top: 0;
    margin-bottom: 15px;
}
.card .carousel-caption img {
    margin: 0 auto;
}
.card .carousel-caption h3, .card .carousel-caption small {
    text-align: center;
}
.carousel-control-prev {
    left: 35%;
    top: 105%;
}
.carousel-control-next {
    right: 35%;
    top: 105%;
}
}
@media (min-width: 767px) and (max-width: 991px) {
.card .carousel-caption h3 {
    margin-top: 0;
    font-size: 16px;
    font-weight: 700;
}
}

</style>