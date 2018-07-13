<div class="top-nav-content hidden-xs">
  <div class="container">
    <div class="lembaga">
        <img src="{{url('img/ristekdikti.png')}}" alt="">
    </div>
    <div class="lembaga clip-shield">
        <img src="{{url('img/Logo_PENS.png')}}" alt="">
    </div>
  </div>
</div>
<div class="main-slider hidden-xs">
  <div class="slider-items">
    <img src="{{url('img/DSC_4856.jpg')}}" alt="">
    <div class="slider-caption">
      <div class="container">
        <h2>KMIPN</h2>
        <p>
          Kompetisi Mahasiswa Bidang Informatika Politeknik Nasional 2018
          <br>
          Politeknik Elektronika Negeri Surabaya
        </p>
        <br>
        @guest
          <a href="{{url('login')}}" class="btn-bordered">Login</a>
        @endguest
      </div>
    </div>
  </div>
  <div class="slider-items">
    <img src="{{url('img/DSC_4856.jpg')}}" alt="">
    <div class="slider-caption">
      <div class="container">
        <h2>KMIPN</h2>
        <p>
          Kompetisi Mahasiswa Bidang Informatika Politeknik Nasional 2018
          <br>
          Politeknik Elektronika Negeri Surabaya
        </p>
        <br>
        @guest
          <a href="{{url('login')}}" class="btn-bordered">Login</a>
        @endguest
      </div>
    </div>
  </div>
  <div class="slider-items">
    <img src="{{url('img/DSC_4856.jpg')}}" alt="">
    <div class="slider-caption">
      <div class="container">
        <h2>KMIPN</h2>
        <p>
          Kompetisi Mahasiswa Bidang Informatika Politeknik Nasional 2018
          <br>
          Politeknik Elektronika Negeri Surabaya
        </p>
        <br>
        @guest
          <a href="{{url('login')}}" class="btn-bordered">Login</a>
        @endguest
      </div>
    </div>
  </div>
</div>
@extends('frontend.layouts')
@section('title')
KMIPN - Politeknik Elektronika Negeri Surabaya | Kompetisi Mahasiswa Bidang Informatika Politeknik Nasional
@endsection
@section('content')
  <div class="main-container">
    <div class="container section-content" id="kmipn-category">
      <div class="section-header">
        <h2>Kategori Lomba</h2>
        <p>Kompetisi Mahasiswa Bidang Informatika Politeknik Nasional 2018</p>
      </div>
      <div class="section-body">
        <div class="row justify-content-center">
          @foreach($lomba as $lom)  
          <div class="cola-4" data-toggle="modal" data-target="#ModalLomba-{{$lom->id}}">
              <div class="category">
                <img src="{{url('img/'.$lom->icon)}}" alt="Cipta Inovasi">
                <div class="category-title">
                  {{$lom->kategori->kategori}}
                </div>
              </div>
          </div>

          <!-- Modal -->
          <div class="modal fade" id="ModalLomba-{{$lom->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h3 class="modal-title" id="ModalLombaTitle-{{$lom->id}}">{{$lom->kategori->kategori}}</h3>
                </div>
                <div class="modal-body">
                  <p align="justify">
                    {{$lom->deskripsi}}
                  </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    <div class="section-content" id="kmipn-about">
      <div class="section-header">
        <h2>Tentang KMIPN</h2>
      </div>
      <div class="section-body">
        <div class="col-sm-6 col-xs-12">
          <p align="justify">
          KMIPN atau Kompetisi Mahasiswa bidangInformatika Politeknik Nasional Tahun 2018, 
          merupakan program Bakorma Politeknik se - Indonesia, sebagai upaya untuk meningkatkan kualitas peserta 
          didik sehingga mampu mengambil peran sebagai agen 
          perubahan dalam memajukan TIK dan pemanfaatannya di Indonesia.

          KMIPN diselenggarakan  sebagai upaya pemerintah 
          melalui Kemenristekdikti untuk  peningkatan mutu perguruan tinggi khusunya politeknik. Kegiatan ini diharapkan menjadi ajang untuk menyalurkan kreativitas mahasiswa dalam pengembangan Teknologi Informasi dan Komunikasi di tingkat nasional. Mahasiswa sebagai pilar penting dalam pembangunan negara diharapkan dapat meningkatkan kemampuan dalam penguasaan TIK, dan dapat mengembangkan potensinya sebagai agen perubahan melalui pengembangan IPTEK di masa kini dan masa akan datang. 

          Untuk pertama kalinya KMIPN akan  diselenggarakan pada Tahun 2018 dengan tema “Tantangan TIK dalam Era Revolusi Industri 4.0”. Kegiatan KMIPN 2018 ini terdiri dari perlombaan di bidang TIK yang akan memunculkan inovasi - inovasi yang diharapkan berdampak besar baik di bidang TIK maupun sektor-sektor lainnya secara umum di Indonesia, pameran hasil karya peserta dan finalis KMIPN  serta produk TIK dari sponsor untuk memperkenalkan perkembangan TIK  kepada masyarakat luas, serta seminar tentang topik-topik terkini di bidang TIK
          </p>
        </div>
        <div class="col-sm-6 col-xs-12">
          <h3>Persyaratan Umum</h3>
          <ul>
            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</li>
            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</li>
            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</li>
            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</li>
            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</li>
            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container section-content" id="kmipn-info">
      <div class="section-header">
        <h2>Berita dan Pengumuman</h2>
        <p>Berita dan Pengumuman terkait KMIPN 2018</p>
      </div>
      <div class="section-body">
        <div class="col-xs-12 col-sm-6 col-md-4">
          <div class="thumbnail">
            <div class="caption">
              <h3>Seminar KMIPN</h3>
              <i>25 Agustus 1990</i>
              <br><br>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <div class="thumbnail">
            <div class="caption">
              <h3>Seminar KMIPN</h3>
              <i>25 Agustus 1990</i>
              <br><br>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <div class="thumbnail">
            <div class="caption">
              <h3>Seminar KMIPN</h3>
              <i>25 Agustus 1990</i>
              <br><br>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div>
          </div>
        </div>
        <br>
        <center class="clear">
          <a href="#" class="btn btn-default">Show More</a>
        </center>
      </div>
    </div>
    <div class="container section-content" id="kmipn-galery">
      <div class="section-header">
        <h2>Galeri KMIPN</h2>
      </div>
      <div class="section-body">
        <div class="col-xs-6 col-sm-3" data-toggle="modal" data-target="#exampleModalCenter">
          <div  class="thumbnail">
            <img src="{{url('img/Logo_Kemenristekdikti.png')}}" alt="">
          </div>
        </div>
        <div class="col-xs-6 col-sm-3" data-toggle="modal" data-target="#exampleModalCenter">
          <div  class="thumbnail">
            <img src="{{url('img/Logo_Kemenristekdikti.png')}}" alt="">
          </div>
        </div>
        <div class="col-xs-6 col-sm-3" data-toggle="modal" data-target="#exampleModalCenter">
          <div  class="thumbnail">
            <img src="{{url('img/Logo_Kemenristekdikti.png')}}" alt="">
          </div>
        </div>
        <div class="col-xs-6 col-sm-3" data-toggle="modal" data-target="#exampleModalCenter">
          <div  class="thumbnail">
            <img src="{{url('img/Logo_Kemenristekdikti.png')}}" alt="">
          </div>
        </div>
        <div class="col-xs-6 col-sm-3" data-toggle="modal" data-target="#exampleModalCenter">
          <div  class="thumbnail">
            <img src="{{url('img/Logo_Kemenristekdikti.png')}}" alt="">
          </div>
        </div>
        <div class="col-xs-6 col-sm-3" data-toggle="modal" data-target="#exampleModalCenter">
          <div  class="thumbnail">
            <img src="{{url('img/Logo_Kemenristekdikti.png')}}" alt="">
          </div>
        </div>
        <div class="col-xs-6 col-sm-3" data-toggle="modal" data-target="#exampleModalCenter">
          <div  class="thumbnail">
            <img src="{{url('img/Logo_Kemenristekdikti.png')}}" alt="">
          </div>
        </div>
        <div class="col-xs-6 col-sm-3" data-toggle="modal" data-target="#exampleModalCenter">
          <div  class="thumbnail">
            <img src="{{url('img/Logo_Kemenristekdikti.png')}}" alt="">
          </div>
        </div>
        
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">Pembukaan KMIPN</h3>
              </div>
              <div class="modal-body">
                <img src="{{url('img/Logo_Kemenristekdikti.png')}}" alt="" class="img-responsive">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        <center class="clear">
          <a href="#" class="btn btn-default">Show More</a>
        </center>
      </div>
    </div>
    <div class="section-content">
      <div class="section-body">
        <div id="locationSet" style="width:100%; height:400px;">

        </div>
        <script type="text/javascript">
          function initMap() {
            var pens = {lat: -7.27659, lng: 112.793879};
            var map = new google.maps.Map(document.getElementById('locationSet'), {
              zoom: 17,
              center: pens
            });
            var marker = new google.maps.Marker({
              position: pens,
              map: map
            });
          }
        </script>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    $(document).ready(function(){
      $('.main-slider').slick({
        infinite : true,
        speed : 500,
        fade : true,
        cssEase : 'linear'
      });
    });
  </script>
@endsection
