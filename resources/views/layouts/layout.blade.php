<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="{{ '/vendor/GO/bootstrap/css/bootstrap.min.css' }}" rel="stylesheet" />
    <link href="{{ '/vendor/GO/css/style.css'}}" rel="stylesheet" />
    <link href="{{ '/css/styles.css'}}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link rel="shortcut icon" href="img/favicon.ico" />
    <?php
    $eh = '/vendor/GO/img/background7.png';
    ?>
    <style>
        .JumboHeaderImg {
            background-image: url("<?php echo $eh; ?>");
            background-size: cover;
            background-repeat:no-repeat;
		    background-position:center;
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(255, 255, 255, 1);
            /* background: url(data:;base64,iVBORw0KGgoAAAANSUhEUgAAAAIAAAACCAYAAABytg0kAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAgY0hSTQAAeiYAAICEAAD6AAAAgOgAAHUwAADqYAAAOpgAABdwnLpRPAAAABl0RVh0U29mdHdhcmUAUGFpbnQuTkVUIHYzLjUuNUmK/OAAAAATSURBVBhXY2RgYNgHxGAAYuwDAA78AjwwRoQYAAAAAElFTkSuQmCC) repeat scroll transparent\9; */
            /* ie fallback png background image */
            z-index: 9999;
            color: white;
            visibility: hidden;
        }

        .hs {
            overflow-y: hidden;
        }

        .centers {
            width: 200px;
            height: 200px;
            position: fixed;
            top: 50%;
            left: 50%;
            margin-top: -100px;
            margin-left: -100px;

        }
    </style>
</head>

<body class="bgs">
    <div class="overlay" id="over">
        <div class="centers">
            <img src="{{ asset('/img/loading.gif' )}}" alt="Loading">
            <p class="text-center" style="color: #000; text-transform: uppercase; font-weight: 500;">Tunggu Sebentar</p>
        </div>
    </div>

    <div class="row" mt-5>
        <div class="col-12 text-center mt-5">
            <h1>@yield('judul_header')</h1>
        </div>
    </div>
    <!--- Navigation -->
    <nav class="navbar navbar-light bg-light navbar-expand-md fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html"><img src="{{'/vendor/GO/img/logo5.png'}}" /></a>
            <button class="navbar-toggler" data-target="#navbarResponsive" data-toggle="collapse" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link active" href="index.html">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="whyus.html">Why Us?</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						  Our Product
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						  <a class="dropdown-item" href="sma.html">Program SMA</a>
						  <a class="dropdown-item" href="smp.html">Program SMP</a>
						  <a class="dropdown-item" href="sd.html">Program SD</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="diskon.html">Discount</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="faq.html">FAQ</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="kontak.html">Contact</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" target="_blank" href="http://blog.ganeshaoperation.com/">Our Blog</a>
					</li>
					<li class="nav-item">
						<a class="btn btn-danger btn-md" target="_blank" href="https://ganeshaoperation.com/pendaftaran">Daftar</a>
					</li>
				</ul>
			</div>
        </div>
    </nav>
    <!--- End Navigation -->

    @yield('konten')

    <!--- Start Footer -->
    <footer>
        <div class="container">
            <div class="row text-center py-5">
                <div class="col-md-4">
                    <a class="link" href="https://play.google.com/store/apps/details?id=com.ganeshaoperation.kreasi&hl=in"><img src="/vendor/GO/img/footgog.png" style="width: 50%;" /></a>
                    <a class="link" href="https://apps.apple.com/id/app/gokreasi/id1478372788"><img src="{{'/vendor/GO/img/footapp.png'}}" style="width: 45%;" /></a>
                    <p>
                        Download juga GO Kreasi. Kini sudah tersedia di Playstore dan App
                        store.
                    </p>
                </div>
                <div class="col-md-4">
                    <h3 class="text-center">HUBUNGI KAMI VIA</h3>
                    <a class="link" href="https://api.whatsapp.com/send?phone=628112044722&text=&source=&data=" target="_blank"><img src="{{'/vendor/GO/img/logowa.png'}}" width="20%" height="10%" class="img-fluid" alt="Responsive image" /></a>
                    <a>atau</a>
                    <a class="link" href="https://mail.google.com/mail/?view=cm&fs=1&to=bimbel@ganesha-operation.com&su=Tanya minGO" target="_blank"><img src="{{'/vendor/GO/img/logogm.png'}}" width="20%" height="10%" class="img-fluid" alt="Responsive image" /></a>
                </div>
                <div class="col-md-4 pb-5">
                    <h3>Read More</h3>
                    <a class="link" href="terms.html">Terms and Condition</a>
                    <a>&</a>
                    <a class="link" href="privacy.html">Privacy and Policy</a>
                </div>
            </div>
            <!--- End of Row -->
        </div>
        <center>
            <span class="copyright">
                <!-- Copyright -->Ganesha Operation &copy; 2020</span>
        </center>
        <!--- End of Container -->
    </footer>
    <!--- End of Footer -->
    <div class="container">

    </div>

    <!--- Script Source Files -->
    <!-- <script src="/vendor/GO/js/jquery-3.3.1.min.js"></script> -->
    <script src=" {{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script src="{{ asset('js/conn.js') }}"></script>
    <!--- End of Script Source Files -->
    @yield('script')

</body>

</html>