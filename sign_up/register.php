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

  <section class="bg-login">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-10 col-sm-10 col-md-8">
          <div class="card login-card">
            <div class="card-body">
              <div class="row">
                <div class="col text-center">
                  <img class="logo" src="../img/icons/book.png" alt="">
                  <h5 class="card-title text-uppercase">Hazam Library Register</h5>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <form name="formRegister">
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" name="email" class="form-control" id="email" placeholder="Input Email">
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" id="password" placeholder="Input Password">
                    </div>
                    <button type="button" id="signUp" class="btn btn-primary btn-lg btn-block">Sign Up</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>


</body>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="../js/jquery-3.5.1.js">
</script>
<script src="../js/bootstrap.bundle.js">
</script>
<script src="../js/bootstrap.js">
</script>
<script src="../js/smooth-scroll.js"></script>
<script src="../js/sweetalert2.all.min.js"></script>
<!-- <script src="../js/script.js"></script> -->
<script>
  const auth = firebase.auth();
  const signUp = document.querySelector('#signUp');
  signUp.addEventListener('click', function () {
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;
    const form = document.forms["formRegister"]["email"].value;
    const at = form.indexOf("@");
    const dot = form.lastIndexOf(".");

    if (email == "" && password != "") {
      Swal.fire({
        title: 'Email kosong',
        text: 'Email wajib diisi',
        icon: 'info',
        confirmButtonColor: '#2ecc71'
      });
    } else if (email == "" && password == "") {
      Swal.fire({
        title: 'Form Kosong',
        text: 'Form wajib diisi',
        icon: 'info',
        confirmButtonColor: '#2ecc71'
      });
    } else if (email != "" && password == "") {
      Swal.fire({
        title: 'Password kosong',
        text: 'Password wajib diisi',
        icon: 'info',
        confirmButtonColor: '#2ecc71'
      });
    } else if (at < 1 || dot < at + 2 || dot + 2 >= form.length) {
      Swal.fire({
        title: 'Alamat Email Tidak Valid',
        text: 'Mohon isi alamat email dengan benar',
        icon: 'warning',
        confirmButtonColor: '#2ecc71'
      });
    } else {
      auth.onAuthStateChanged(function (user) {
        if (user) {
          Swal.fire({
            title: 'The Account Has Been Created',
            icon: 'success',
            confirmButtonColor: ' #2ecc71 '
          }).then((result) => {
            if (result.value) {
              document.location.href = "../login.php"
              firebase.auth().signOut();
            }
          });

        } else {
          firebase.auth().createUserWithEmailAndPassword(email, password).catch(function (error) {
            // Handle Errors here.
            var errorCode = error.code;
            var errorMessage = error.message;

            this.alert("Error : " + errorMessage);

          });
        }

      });
    }

  });
</script>


</html>