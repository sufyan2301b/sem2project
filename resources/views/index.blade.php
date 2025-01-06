
@extends('master-layout.layout')

@section('content')
<!-- Hero Section -->
<div id="carouselExampleIndicators" class="carousel slide banr-sldr" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item carousel-item1 active">
         <img class="banr-sldr-img" src="assets/image/jewelry-slide.jpg" alt="...">
       <div class="banr-sldr-rw zindex1">
          <div class="banr-sldr-col">
            <h4 class="banr-sldr-head">Lorem ipsum</h4>
            <p class="banr-sldr-pera text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque quia nobis quos. Exercitationem magni animi in dolorum atque quos aliquam cupiditate, praesentium assumenda quisquam accusamus beatae consectetur hic eveniet nemo?</p>
           <a href="#" class="banr-sldr-lnk btn btn-outline-success">Shop Now</a>
         </div>
          
        </div>
      <div class="overlay-wrpr"></div>
   </div>
      
    <div class="carousel-item carousel-item3">
      <img class="banr-sldr-img" src="assets/image/hero-8.jpg" alt="...">
      <div class="banr-sldr-rw zindex1">
          <div class="banr-sldr-col2 d-flex justify-content-center flex-column">
          <h2 class="banr-sldr-head">VIEW OUR</h2>
          <h1 class="banr-sldr-head">NEW COSMETICS</h1>
          <p class="banr-sldr-pera">PRODUCT NOW</p>
     <div class="text-center"> <a href="#" class="banr-sldr-lnk btn bnr-btn-1">Shop Now</a></div>
      </div>
       
      </div>
      <div class="overlay-wrpr"></div>
    </div>
   
    <div class="carousel-item carousel-item4">
      <img class="banr-sldr-img" src="assets/image/hero-7.jpg" alt="...">
      <div class="banr-sldr-rw zindex1">
          <div class="banr-sldr-col">
          <h4 class="banr-sldr-head">Lorem ipsum</h4>
          <p class="banr-sldr-pera">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque quia nobis quos. Exercitationem magni animi in dolorum atque quos aliquam cupiditate, praesentium assumenda quisquam accusamus beatae consectetur hic eveniet nemo?</p>
      <a href="#" class="banr-sldr-lnk btn btn-outline-success">Shop Now</a>
      </div>
        
      </div>
      <div class="overlay-wrpr"></div>
    </div>
   
  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
  
</div>
<!-- Hero Section End -->


<div class="container">
  <h2 class="product text-center"> Product Category</h2>

  <ul class="nav nav-tabs mb-4 d-flex justify-content-center" id="myTab" role="tablist">
    <li class= "nav-item " role="presentation">
      <button class="btn  btn-lg mr-2 pdr" id="home-tab" data-toggle="tab" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Jewerly</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="btn  btn-lg ml-2 pdr" id="profile-tab" data-toggle="tab" data-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Cosmetic</button>
    </li>
   
  </ul>
  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <div class="card-group ">
  <div class="card mx-2 boder ">
    <div class="crd-img-wrpr text-center"><img src="assets/image/Apple Cinema 30_.png" class="card-img-top " alt="..."></div>
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer bg-none">
        <a class="btn btn-outline-success" href="#">Add to Card</a>
      
    </div>
  </div>
  <div class="card mx-2 border">
    <div class="crd-img-wrpr text-center"><img src="assets/image/Canon EOS 5D.png" class="card-img-top " alt="..."></div>
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer bg-none">
      <a class="btn btn-outline-success" href="#">Add to Card</a>
    </div>
  </div>
  <div class="card mx-2 border">
    <div class="crd-img-wrpr text-center"><img src="assets/image/iMac.png" class="card-img-top " alt="..."></div>
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer bg-none">
        <a class="btn btn-outline-success" href="#">Add to Card</a>
      
    </div>
  </div>
  <div class="card mx-2 border">
    <div class="crd-img-wrpr text-center"><img src="assets/image/MacBook Pro Shoes.png" class="card-img-top " alt="..."></div>
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer bg-none">
        <a class="btn btn-outline-success" href="#">Add to Card</a>
      
    </div>
  </div>
  
  </div>
  
  <div class="card-group ">
  <div class="card mx-2 boder ">
    <div class="crd-img-wrpr text-center"><img src="assets/image/R08459A-C01-1-xl_600x.jpg" class="card-img-top " alt="..."></div>
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer bg-none">
        <a class="btn btn-outline-success" href="#">Add to Card</a>
      
    </div>
  </div>
  <div class="card mx-2 border">
    <div class="crd-img-wrpr text-center"><img src="assets/image/P50180R-V01-3-lg_360x.jpg" class="card-img-top " alt="..."></div>
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer bg-none">
      <a class="btn btn-outline-success" href="#">Add to Card</a>
    </div>
  </div>
  <div class="card mx-2 border">
    <div class="crd-img-wrpr text-center"><img src="assets/image/R08742A-C01_600x.jpg" class="card-img-top " alt="..."></div>
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer bg-none">
        <a class="btn btn-outline-success" href="#">Add to Card</a>
      
    </div>
  </div>
  <div class="card mx-2 border">
    <div class="crd-img-wrpr text-center"><img src="assets/image/product-img.jpg" class="card-img-top " alt="..."></div>
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer bg-none">
        <a class="btn btn-outline-success" href="#">Add to Card</a>
      
    </div>
  </div>
  </div>
  </div>
  
  
  
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <div class="card-group">
  <div class="card mx-2 border">
    <div class="crd-img-wrpr text-center"><img src="assets/image/l-product-4.jpg" class="card-img-top " alt="..."></div>
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer bg-none">
        <a class="btn btn-outline-success" href="#">Add to Card</a>
    </div>
  </div>
  <div class="card mx-2 border">
    <div class="crd-img-wrpr text-center"><img src="assets/image/printed-dress.jpg" class="card-img-top " alt="..."></div>
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer bg-none">
        <a class="btn btn-outline-success" href="#">Add to Card</a>
    </div>
  </div>
  <div class="card mx-2 border">
    <div class="crd-img-wrpr text-center"><img src="assets/image/Slow Ride Powermatte Lip Pigment.jpg" class="card-img-top " alt="..."></div>
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer bg-none">
        <a class="btn btn-outline-success" href="#">Add to Card</a>
    </div>
  </div>
  <div class="card mx-2 border">
    <div class="crd-img-wrpr text-center"><img src="assets/image/Urna pretium elit mauris cursus Curabitur at elit Vestibulum.jpg" class="card-img-top " alt="..."></div>
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer bg-none">
        <a class="btn btn-outline-success" href="#">Add to Card</a>
    </div>
  </div>
  </div>
  
  <div class="card-group">
  <div class="card mx-2 border">
    <div class="crd-img-wrpr text-center"><img src="assets/image/printed-chiffon-dress.jpg" class="card-img-top " alt="..."></div>
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer bg-none">
        <a class="btn btn-outline-success" href="#">Add to Card</a>
    </div>
  </div>
  <div class="card mx-2 border">
    <div class="crd-img-wrpr text-center"><img src="assets/image/Rimmel Stay Matte Pressed Powder.jpg" class="card-img-top " alt="..."></div>
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer bg-none">
        <a class="btn btn-outline-success" href="#">Add to Card</a>
    </div>
  </div>
  <div class="card mx-2 border">
    <div class="crd-img-wrpr text-center"><img src="assets/image/chance-eau-vive-women-.jpg" class="card-img-top " alt="..."></div>
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer bg-none">
        <a class="btn btn-outline-success" href="#">Add to Card</a>
    </div>
  </div>
  <div class="card mx-2 border">
    <div class="crd-img-wrpr text-center"><img src="assets/image/product-img.jpg" class="card-img-top " alt="..."></div>
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer bg-none">
        <a class="btn btn-outline-success" href="#">Add to Card</a>
    </div>
  </div>
  
  </div>
    </div>
    
  </div>

</div>



{{-- slider --}}

<div class="container sldr">
    
  <div class="owl-carousel owl-theme">
      <div class="item"><div class="card mx-2 boder ">
          <div class="crd-img-wrpr text-center"><img src="assets/image/Apple Cinema 30_.png" class="card-img-top " alt="..."></div>
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
          <div class="card-footer bg-none">
              <a class="btn btn-outline-success" href="#">Add to Card</a>
            
          </div>
        </div></div>
      <div class="item"><div class="card mx-2 border">
          <div class="crd-img-wrpr text-center"><img src="assets/image/Canon EOS 5D.png" class="card-img-top " alt="..."></div>
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          </div>
          <div class="card-footer bg-none">
            <a class="btn btn-outline-success" href="#">Add to Card</a>
          </div>
        </div></div>
      <div class="item"><div class="card mx-2 border">
          <div class="crd-img-wrpr text-center"><img src="assets/image/iMac.png" class="card-img-top " alt="..."></div>
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          </div>
          <div class="card-footer bg-none">
              <a class="btn btn-outline-success" href="#">Add to Card</a>
            
          </div>
        </div></div>
      <div class="item"><div class="card mx-2 border">
          <div class="crd-img-wrpr text-center"><img src="assets/image/MacBook Pro Shoes.png" class="card-img-top " alt="..."></div>
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          </div>
          <div class="card-footer bg-none">
              <a class="btn btn-outline-success" href="#">Add to Card</a>
            
          </div>
        </div></div>
      <div class="item"><div class="card mx-2 boder ">
          <div class="crd-img-wrpr text-center"><img src="assets/image/Apple Cinema 30_.png" class="card-img-top " alt="..."></div>
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
          <div class="card-footer bg-none">
              <a class="btn btn-outline-success" href="#">Add to Card</a>
            
          </div>
        </div></div>
      <div class="item"> <div class="card mx-2 border">
          <div class="crd-img-wrpr text-center"><img src="assets/image/Canon EOS 5D.png" class="card-img-top " alt="..."></div>
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          </div>
          <div class="card-footer bg-none">
            <a class="btn btn-outline-success" href="#">Add to Card</a>
          </div>
        </div></div>
      <div class="item"> <div class="card mx-2 border">
          <div class="crd-img-wrpr text-center"><img src="assets/image/Canon EOS 5D.png" class="card-img-top " alt="..."></div>
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          </div>
          <div class="card-footer bg-none">
            <a class="btn btn-outline-success" href="#">Add to Card</a>
          </div>
        </div></div>
      <div class="item"> <div class="card mx-2 border">
          <div class="crd-img-wrpr text-center"><img src="assets/image/Canon EOS 5D.png" class="card-img-top " alt="..."></div>
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          </div>
          <div class="card-footer bg-none">
            <a class="btn btn-outline-success" href="#">Add to Card</a>
          </div>
        </div></div>
      
  </div>

</div>

@endsection







