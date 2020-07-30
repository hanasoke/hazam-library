<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Hazam Library</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.css">

  <!-- My CSS -->
  <link rel="stylesheet" href="css/style.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="css/all.css">

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
                  <img class="logo" src="img/icons/book.png" alt="">
                  <h5 class="card-title text-uppercase">Hazam Library Login</h5>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <form name="formLogin">
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" name="email" class="form-control" id="email" placeholder="Input Email">
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" id="password" placeholder="Input Password">
                    </div>
                    <button type="button" id="signIn" class="btn btn-primary btn-lg btn-block">Sign In</button>
                  </form>
                </div>
              </div>
              <div class="row my-2">
                <div class="col text-center">
                  <div class="or">
                    <span>
                      <hr>Or
                      <hr>
                    </span>
                  </div>

                </div>
              </div>
              <div class="row">
                <div class="col">
                  <button type="button" id="google" class="btn btn-lg btn-block search"><img
                      src="img/social-media/search.png" alt=""> Sign
                    In
                    with Google</button>
                </div>
              </div>
              <div class="row mt-4">
                <div class="col text-center">
                  <p>Don't Have Account <a href="../sign_up/register.html">Sign Up</a></p>
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
<script src="js/jquery-3.5.1.js">
</script>
<script src="js/bootstrap.bundle.js">
</script>
<script src="js/bootstrap.js">
</script>
<script src="js/smooth-scroll.js"></script>
<script src="js/sweetalert2.all.min.js"></script>

<script>
  const auth = firebase.auth();
  const signIn = document.querySelector('#signIn');
  signIn.addEventListener('click', function () {

    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;

    const form = document.forms["formLogin"]["email"].value;
    const at = form.indexOf("@");
    const dot = form.lastIndexOf(".");
    if (email == 'Admin@gmail.com' && password == 'Admin') {
      const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 2000,
        timerProgressBar: true,
        onOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer);
          toast.addEventListener('mouseleave', Swal.resumeTimer);
          document.location.href = "admin/index.php";
        }
      });

      Toast.fire({
        icon: 'success',
        title: 'Anda Adalah Admin',
      });

    } else if (email == "" && password != "") {
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
          // User is signed in.
          const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true,
            onOpen: (toast) => {
              toast.addEventListener('mouseenter', Swal.stopTimer);
              toast.addEventListener('mouseleave', Swal.resumeTimer);
              document.location.href = "user/index.php";
            }
          });

          Toast.fire({
            icon: 'success',
            title: 'Selamat Datang ',
          });

        } else {
          // No user is signed in.
          firebase.auth().signInWithEmailAndPassword(email, password).catch(function (error) {
            // Handle Errors here.
            var errorCode = error.code;
            var errorMessage = error.message;

            this.alert("Error : " + errorMessage);

          });

        }
      });

    }
  });

  const loginGoogle = document.querySelector('#google');
  loginGoogle.addEventListener('click', function () {
    var provider = new firebase.auth.GoogleAuthProvider();
    provider.addScope('https://www.googleapis.com/auth/contacts.readonly');
    firebase.auth().languageCode = 'idn';

    firebase.auth().signInWithPopup(provider).then(function (result) {
      // This gives you a Google Access Token. You can use it to access the Google API.
      var token = result.credential.accessToken;
      // The signed-in user info.
      var user = result.user;

      auth.onAuthStateChanged(function (user) {
        if (user) {
          document.location.href = "user/index.php";
        } else {
          this.alert("Error : " + errorMessage);

        }

      });


    }).catch(function (error) {
      // Handle Errors here.
      var errorCode = error.code;
      var errorMessage = error.message;
      // The email of the user's account used.
      var email = error.email;
      // The firebase.auth.AuthCredential type that was used.
      var credential = error.credential;
      // ...
    });

    function isUserEqual(googleUser, firebaseUser) {
      if (firebaseUser) {
        var providerData = firebaseUser.providerData;
        for (var i = 0; i < providerData.length; i++) {
          if (providerData[i].providerId === firebase.auth.GoogleAuthProvider.PROVIDER_ID &&
            providerData[i].uid === googleUser.getBasicProfile().getId()) {
            // We don't need to reauth the Firebase connection.
            return true;
          }
        }
      }
      return false;
    }
  });
</script>

</html>