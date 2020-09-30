@extends('layout/main')
@section('title','COVPedia')

@section('container')
<div class="container text-right mt-1">
  <div class="row-2">
    <div class="col">
  <a href="login"><button type="button" class="btn btn-outline-danger mb-4">Login</button></a>
</div>
</div>
</div>

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/10.jpg" class="d-block " width="1500px" height="500px" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>COV Pedia</h5>
        <p>Tempat Tes Covid-19</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/img/9.jpg" class="d-block " width="1500px" height="500px" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>COV Pedia</h5>
        <p>Tempat Tes Covid-19</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/img/5.jpg" class="d-block " width="1500px"  height="500px" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>COV Pedia</h5>
        <p>Tempat Tes Covid-19</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</body>
</html>

 <div class="container mt-5">
   <h2 class="text-center">Fasilitas Kesehatan Daerah Jeponto</h2>
   <hr size="10px" color="black">
   <nav class="navbar navbar-light bg-light">
    <form class="form-inline">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </nav>
  </div>
   
 <div class="container mt-3">
  <div class="row">
    <div class="col mt-3">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" height="150px" src="assets/img/jen.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">RSUD LANTO DG PASEWANG</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="lonto" class="btn btn-primary">More</a>
        </div>
      </div>
    </div>

    <div class="col mt-3">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="assets/img/bang.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Puskemas BANGKALAN</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="rs" class="btn btn-primary">More</a>
        </div>
      </div>
    </div>

    <div class="col mt-3">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" height="175px" src="assets/img/bar.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Puskesmas Barana</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="rs" class="btn btn-primary">More</a>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col mt-3 ml-3">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="assets/img/pr.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">RS Pratama rumbia</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="rs" class="btn btn-primary">More</a>
          </div>
        </div>
      </div>

  </div>


  </div>
</div>

 <footer class="footer">
        
  <div class="copy-right_text">
      <div class="container mt-3">
          <div class="footer_border"></div>
          <div class="row">
              <div class="col-xl-12">
                  <p class="copy_right text-center">
                      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  </p>
              </div>
          </div>
      </div>
  </div>
</footer>
 
@endsection