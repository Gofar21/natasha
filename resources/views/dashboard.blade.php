<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>

        <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
    </style>
    </x-slot>

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://natasha-skin.com/wp-content/uploads/2023/10/promoweboct2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://natasha-skin.com/wp-content/uploads/2023/10/threatment-laser-armpit-oktober.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://natasha-skin.com/wp-content/uploads/2023/10/dailywebpromooct3.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://natasha-skin.com/wp-content/uploads/2023/10/dailywebpromooct1.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- card -->
<div class="container">
  <div class="row" style= "margin-top:20px;">
    <div class="col-lg-3 col-sm-6 col-md-6 col-6">
        <a href="">
            <img src="https://natasha-skin.com/wp-content/uploads/2022/12/20221226-085652-1.png" class="gambar-silde">  
        </a>
    </div>
    <div class="col-lg-3 col-sm-6 col-md-6 col-6">
    <a href="">
            <img src="https://natasha-skin.com/wp-content/uploads/2023/01/20230108-184101-FILEminimizer.png" class="gambar-silde">  
        </a>
    </div>
    <div class="col-lg-3 col-sm-6 col-md-6 col-6">
    <a href="">
            <img src="https://natasha-skin.com/wp-content/uploads/2022/12/20221226-102215-1.png" class="gambar-silde">  
        </a>
    </div>
    <div class="col-lg-3 col-sm-6 col-md-6 col-6">
        <a href="">
            <img src="https://natasha-skin.com/wp-content/uploads/2022/12/20221226-085701-1.png" class="gambar-silde">  
        </a>
    </div>
  </div>
</div>
<!-- banner -->
<div class="container" style= "margin-top:20px;">
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://natasha-skin.com/wp-content/uploads/2023/10/natasha-idebenon-vc-essence.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
</div>


</script>
<!-- <iframe
    allow="microphone;"
    width="350"
    height="430"
    src="https://console.dialogflow.com/api-client/demo/embedded/a506553c-2c64-45d7-8137-f40cf1acfd05">
</iframe> -->


</x-app-layout>
