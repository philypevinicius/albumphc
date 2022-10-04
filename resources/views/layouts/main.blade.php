<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Philype vinicius, and Bootstrap contributors">

        <title>@yield('title')</title>

        {{-- Fonts --}}
        <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/album/">

{{-- Favicons --}}
<link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>


<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        {{-- Styles --}}

<style>

body {background: linear-gradient(270deg, #341677, #a32f80, #ff6363, #400d51);
    background-size: 800% 800%;

    -webkit-animation: AnimationName 19s ease infinite;
    -moz-animation: AnimationName 19s ease infinite;
    animation: AnimationName 19s ease infinite;
}

@-webkit-keyframes AnimationName {
    0%{background-position:0% 50%}
    50%{background-position:100% 50%}
    100%{background-position:0% 50%}
}
@-moz-keyframes AnimationName {
    0%{background-position:0% 50%}
    50%{background-position:100% 50%}
    100%{background-position:0% 50%}
}
@keyframes AnimationName {
    0%{background-position:0% 50%}
    50%{background-position:100% 50%}
    100%{background-position:0% 50%}
}


.card {
    box-shadow: 7px 5px black;

}
.card:active {
  transform: translateY(4px);
}
           .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

.glyphicon:before {
  color:  #fafcfd;
  font-size: 3em;
}

.nav1{
    display: flex;
   width: 100%;
    position: fixed;
	bottom:-0.5px;
    z-index: 1;
      }

      .nav-link:active {
  transform: translateY(4px);
}
           .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <script>

    </script>

</head>
<body class="d-flex flex-column justify-content-center w-100 h-100">

<nav class="nav1 justify-content-center" style="background-image: linear-gradient(
        40deg,
        #00fffc 0%,
        #fc00ff 45%,
        #fffc00 100%
      );border-radius: 12px;">
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
  <a  href="/"><button class="nav-link" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-namoro" type="button" role="tab" aria-controls="nav-namoro" aria-selected="true"><i class="bi bi-arrow-through-heart-fill glyphicon"></i></button></a>
  <a  href="/viagens/1"><button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="bi bi-geo-alt-fill glyphicon"></i></button></a>
  <a class="button" href="/fotos/create"><button class="nav-link" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true"><i class="bi bi-plus-circle-fill glyphicon"></i></button></a>
  <a  href="/videos/3"><button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false"><i class="bi bi-play-btn-fill glyphicon" ></i></button></a>
  <a  href="/Anotacao/2"><button class="nav-link" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true"><i class="bi bi-ui-checks glyphicon" ></i></button></a>

  </div>
</nav>
      @yield('content')
    <footer class="text-muted py-5">

    </footer>

</body>
</html>





