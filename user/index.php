<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Hazam Libary</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.css">

  <!-- My CSS -->
  <link rel="stylesheet" href="../css/style.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../css/all.css">

  <script src="https://www.gstatic.com/firebasejs/7.15.5/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.15.5/firebase-database.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.15.5/firebase-analytics.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.15.5/firebase-auth.js"></script>

  <script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
      apiKey: "AIzaSyA9VXcvWgYjx1ShQrzssevJITmGw2KhIcU",
      authDomain: "hazam-library.firebaseapp.com",
      databaseURL: "https://hazam-library.firebaseio.com",
      projectId: "hazam-library",
      storageBucket: "hazam-library.appspot.com",
      messagingSenderId: "356649600819",
      appId: "1:356649600819:web:fdac7544039c7dff6d6046",
      measurementId: "G-TD7HWB7LKE"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    firebase.analytics();
  </script>
</head>

<body>

  <!-- Start Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
    <a class="navbar-brand" href="#">Hazam Library</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#list">List Book</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#borrow">Borrow Book</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#feedback">Feedback</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <button class="btn btn-danger my-2 my-sm-0" type="button" id="LogOut">Log Out</button>
      </form>
    </div>
  </nav>


  <!-- End Navbar -->

  <!-- Start Carousel -->
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../img/1.jpg" class="d-block w-100" alt="Buku">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="h1">Buku adalah sumber Ilmu</h5>
          <p class="h4">Adalah Slogan untuk Hazam Libary</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../img/2.jpg" class="d-block w-100" alt="Buku">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="h1">Cermat</h5>
          <p class="h4">Adalah cara kami dalam memilih buku berkualitas untuk dibaca</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../img/3.jpg" class="d-block w-100" alt="Buku">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="h1">Berilmu sebelum bertindak</h5>
          <p class="h4">Adalah Prinsip kami dalam membangun Hazam Libary</p>
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
  <!-- End Carousel -->

  <!-- Start About -->
  <section id="about">
    <div class="container mt-5">
      <div class="row">
        <div class="col text-center text-uppercase">
          <h1>About Us</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-6">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis vel possimus corporis blanditiis quos
            neque mollitia dolorum saepe adipisci vitae? Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero
            officia aliquid iure minus ab et eaque! Nulla optio et itaque debitis eos dolores ipsam voluptate.
            Voluptates
            modi, repudiandae quam nisi molestias necessitatibus laudantium harum natus distinctio saepe quos enim quis
            sapiente dolorum qui ratione? Voluptatibus perspiciatis itaque odio quas aperiam quam ratione rerum, earum
            labore maxime culpa eaque, officia animi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod hic
            sint delectus nemo, non veritatis omnis alias natus iusto, cupiditate porro ducimus nulla adipisci ea nam
            totam dolores. Doloribus, neque laudantium. Praesentium optio nemo sequi dolorem amet autem</p>
        </div>
        <div class="col-12 col-md-6">
          <div class="col">
            <p>History</p>
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0"
                aria-valuemax="100"></div>
            </div>
            <p>Technology</p>
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0"
                aria-valuemax="100"></div>
            </div>
            <p>Politics</p>
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="25" aria-valuemin="0"
                aria-valuemax="100"></div>
            </div>
            <p>Biology</p>
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="25" aria-valuemin="0"
                aria-valuemax="100"></div>
            </div>
            <p>Etc</p>
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="25" aria-valuemin="0"
                aria-valuemax="100"></div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- End About -->

  <!-- Start List Book -->
  <section class="bg-light mt-5" id="list">
    <div class="container">
      <div class="row mb-5 text-center">
        <div class="col py-3">
          <h1 class="text-uppercase">List of Books</h1>
        </div>
      </div>
      <div class="row" id="list_books">
        
      </div>
    </div>
  </section>
  <!-- End List Book -->

  <!-- Start Borrow Book -->
  <section class="mt-5" id="borrow">
    <div class="container">
      <div class="row">
        <div class="col text-center text-primary py-4">
          <h2 class="text-uppercase">Borrow Book</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-sm-8 pb-5">
          <form>
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control form-control-lg" id="nama" placeholder="Isi Nama Lengkap">
            </div>
            <div class="form-group">
              <label for="judul">Judul Buku</label>
              <select class="form-control form-control-lg" id="judul">
                <option value="">Pilih Judul Buku</option>
              </select>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control form-control-lg" id="email_peminjam"
                placeholder="Isi alamat Email">
            </div>
            <div class="form-group">
              <label for="halaman">Nomor Telepon</label>
              <input type="number" class="form-control form-control-lg" id="telepon_peminjam"
                placeholder="Isi Nomor Telepon">
            </div>
            <div class="form-group">
              <label for="peminjaman">Tanggal Peminjaman</label>
              <input type="date" class="form-control form-control-lg" id="peminjaman"
                placeholder="Isi Tanggal Peminjaman">
            </div>
            <div class="form-group">
              <label for="pengembalian">Tanggal Pengembalian</label>
              <input type="date" class="form-control form-control-lg" id="pengembalian"
                placeholder="Isi Tanggal Pengembalian">
            </div>
            <button type="button" class="btn btn-block btn-success" id="save_borrow">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- End Borrow Book -->

  <!-- Start Feedback -->
  <section class="bg-light my-3" id="feedback">
    <div class="container">
      <div class="row">
        <div class="col text-center my-3">
          <h1 class="text-uppercase">Feedback</h1>
        </div>
      </div>
      <div class="row pb-5">
        <div class="col-12 col-md-4">
          <!-- Card 1 -->
          <div class="row">
            <div class="col">
              <div class="card bg-warning">
                <div class="card-body text-white">
                  <div class="text-center">
                    <i class="far fa-comment h3"></i>
                  </div>
                  <div class="text-justify" style="text-indent: 30px;">
                    <p>Hazam Libary terbuka untuk menerima saran, kritik, dan masukkan Anda. Kesan dan pesan Anda
                      sangat
                      berarti bagi kemajuan dan perkembangan Hazam Library</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Card 2 -->
          <div class="row py-3">
            <div class="col">
              <div class="card bg-white">
                <div class="card-body text-dark">
                  <div class="text-center">
                    <h2>Hazam Library</h2>
                    <ul class="list-group list-group-flush text-left">
                      <li class="list-group-item">Jalan Salemba</li>
                      <li class="list-group-item">Universitas Indonesia</li>
                      <li class="list-group-item">Depok, Jawa Barat</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Start Form -->
        <div class="col-12 col-md-8">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Please fill out this form</h5>
              <form>
                <div class="form-group">
                  <label for="nama_baik">Nama</label>
                  <input type="text" class="form-control" id="nama_baik" placeholder="Isi Nama Lengkap">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" placeholder="Isi alamat Email">
                </div>
                <div class="form-group">
                  <label for="judul">Judul Buku</label>
                  <select class="form-control" id="judul_bf">
                    <option value="">Isi Judul Buku</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="deskripsi">Deskripsi</label>
                  <textarea class="form-control" id="deskripsi" rows="4"
                    placeholder="Isi Kesan ketika melihat Referensi buku di Hazam..."></textarea>
                </div>
                <button type="button" class="btn btn-block btn-primary" id="save_feedback">Submit</button>
              </form>
            </div>
          </div>
        </div>
        <!-- End Form -->
      </div>
    </div>
  </section>
  <!-- End Feedback -->

  <!-- Start Social Media -->
  <section class="social-media">
    <div class="container text-center">
      <div class="row">
        <div class="col mb-5">
          <p class="text-uppercase text-primary">Follow Our Social Media</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md">
          <img src="../img/social-media/facebook-icon.png"></img>
        </div>
        <div class="col-md">
          <img src="../img/social-media/instagram-icon.png"></img>
        </div>
        <div class="col-md">
          <img src="../img/social-media/twitter-icon.png"></img>
        </div>
        <div class="col-md">
          <img src="../img/social-media/wa-icon.png"></img>
        </div>
      </div>
    </div>
  </section>
  <!-- End Social Media -->

  <footer>
    <div class="container mt-5 p-2 text-center">
      <div class="row pt-2">
        <div class="col">
          <p>&copy 2020 Hazam Library</p>
        </div>
      </div>
    </div>
  </footer>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="../js/jquery-3.5.1.js">
  </script>
  <script src="../js/popper.min.js">
  </script>
  <script src="../js/bootstrap.js">
  </script>
  <script src="../js/smooth-scroll.js"></script>
  <script src="../js/sweetalert2.all.min.js"></script>
  <script>
    const halaman = document.getElementById('telepon_peminjam');
    halaman.onkeypress = justNumber;

    function justNumber(evt) {
      let charCode = (evt.which) ? evt.which : event.keyCode;
      if (charCode > 31 && (charCode < 48 || charCode > 57)) {

        return false;
        return true;
      }
    }
    const LogOut = document.querySelector('#LogOut');
    const auth = firebase.auth();
    LogOut.addEventListener('click', function () {
      Swal.fire({
        title: 'Apakah Anda Yakin',
        text: 'Ingin Keluar dari Halaman',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Keluar'
      }).then((result) => {
        if (result.value) {
          firebase.auth().signOut().then(function () {
            // Sign-out successful.
            document.location.href = "../login.php";
          }).catch(function (error) {
            // An error happened.
          });
        }
      });
    });

    auth.onAuthStateChanged(function (user) {

      if (user) {
        var email = user.email;
        // is signed in    
      } else {
        // no user is signed in            
      }
    });

    const scroll = new SmoothScroll('a[href*="#"]');
    const databaseRefBooks = firebase.database().ref('books/');
    let rowIndexBooks = 1;

    databaseRefBooks.once('value', function (snapshot) {
      snapshot.forEach(function (childSnapshot) {
        const childData = childSnapshot.val();
        const x = document.getElementById('judul');
        const option = document.createElement('option');
        option.text = childData.nama_buku;
        option.value = childData.nama_buku;
        x.add(option);
        rowIndexBooks = rowIndexBooks + 1;
      });
    });

    databaseRefBooks.once('value', function (snapshot) {
      snapshot.forEach(function (childSnapshot) {
        const childData = childSnapshot.val();
        const y = document.getElementById('judul_bf');
        const option = document.createElement('option');
        option.text = childData.nama_buku;
        option.value = childData.nama_buku;
        y.add(option);
        rowIndexBooks = rowIndexBooks + 1;
      });
    });

    const tbBuku = document.getElementById('list_books');

    databaseRefBooks.once('value', function (snapshot) {
      snapshot.forEach(function (childSnapshot) {
        // let childKey = childSnapshot.key;
        const childData = childSnapshot.val();

        tbBuku.innerHTML += '<div class="col-md-4 mb-3 col-sm"><div class="card" style="width: 18rem;"><img src="../img/book.jpg" class="card-img-top" alt="Book"><div class="card-body"><h5 class="card-title">' + childData.nama_buku +'</h5><h6 class="card-subtitle mb-2 text-muted">' + childData.penulis_buku+'</h6><p class="card-text">' + childData.deskripsi + '</p></div></div></div>'

      });
    });

    let databaseRef = firebase.database().ref('users/');

    const saveBorrow = document.getElementById('save_borrow');

    saveBorrow.addEventListener('click', function () {
      const nama = document.getElementById('nama').value;
      const judul = document.getElementById('judul').value;
      const email = document.getElementById('email_peminjam').value;
      const telepon = document.getElementById('telepon_peminjam').value;
      const peminjaman = document.getElementById('peminjaman').value;
      const pengembalian = document.getElementById('pengembalian').value;
      const lendDate = new Date(peminjaman).getDay();
      const returnDate = new Date(pengembalian).getDay();
      const today = new Date().getDay();
      let uid = firebase.database().ref().child('users').push().key;

      
      if(lendDate != today) {
        Swal.fire({
              title: 'Peminjaman Buku',
              text: 'Harus Tanggal Sekarang',
              icon: 'warning',
              confirmButtonColor: ' #2ecc71 '
          }).then((result) => {
              if (result.value) {
                return false;
              }
          });
      } else if(returnDate <= today ) {
        Swal.fire({
              title: 'Pengembalian Buku',
              text: 'minimal besok',
              icon: 'warning',
              confirmButtonColor: ' #2ecc71 '
          }).then((result) => {
              if (result.value) {
                return false;
              }
          });
      }
      
      else if (nama != "" && judul != "" && email != "" && telepon != "" && peminjaman != "" && pengembalian != "") {
        var updates = {};
        var data = {
          nama: nama,
          judul: judul,
          email: email,
          telepon: telepon,
          peminjaman: peminjaman,
          pengembalian: pengembalian
        }

        updates['/users/' + uid] = data;
        firebase.database().ref().update(updates);
        Swal.fire({
          title: 'Terima kasih',
          text: 'sudah meminjam buku',
          icon: 'success',
          confirmButtonColor: "#2ecc71"
        }).then((result) => {
          if (result.value) {
            reload_page();
          }
        });
      } else {
        Swal.fire({
          title: 'Anda belum melengkapi data peminjaman',
          text: 'data peminjaman wajib lengkap',
          icon: 'warning',
          confirmButtonColor: "#2ecc71"
        });
      }
    });

    let databaseFed = firebase.database().ref('feedback/');
    const saveFeedback = document.getElementById('save_feedback');

    saveFeedback.addEventListener('click', function () {
      const nama_baik = document.getElementById('nama_baik').value;
      const email = document.getElementById('email').value;
      const judul_bf = document.getElementById('judul_bf').value;
      const deskripsi = document.getElementById('deskripsi').value;
      const fid = firebase.database().ref().child('feedback').push().key;

      if (nama_baik != "" && email != "" && judul_bf != "" && deskripsi != "") {
        var updates = {};
        var data = {
          nama: nama_baik,
          email: email,
          judul: judul_bf,
          deskripsi: deskripsi
        }

        updates['/feedback/' + fid] = data;
        firebase.database().ref().update(updates);
        Swal.fire({
          title: 'Terima kasih atas Masukannya',
          icon: 'success',
          confirmButtonColor: "#2ecc71"
        }).then((result) => {
          if (result.value) {
            reload_page();
          }
        });
      } else {
        Swal.fire({
          title: 'Lengkapi Data Feedback',
          text: 'Data Feedback harus lengkap',
          icon: 'warning',
          confirmButtonColor: "#2ecc71"
        });
      }
    });

    function reload_page() {
      this.location.reload();
    }
  </script>
</body>

</html>