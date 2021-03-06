<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>HAZAM 4SC5</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link href="../css/all.css" rel="stylesheet">

  <script src="https://www.gstatic.com/firebasejs/7.15.5/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.15.5/firebase-database.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.15.5/firebase-analytics.js"></script>

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
  <!-- Page Wrapper -->
  <div id="wrapper">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-swatchbook"></i>
        </div>
        <div class="sidebar-brand-text mx-3">HAZAM</div>
      </a>
      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-book-open"></i>
          <span>Dashboard</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Heading -->
      <div class="sidebar-heading">
        Menu
      </div>
      <!-- Nav Item - Charts -->
      <li class="nav-item active">
        <a class="nav-link" href="#">
          <i class="fas fa-book"></i>
          <span>Data Buku</span></a>
      </li>
      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="pages/peminjaman.html">
          <i class="fas fa-book-reader"></i>
          <span>Data Peminjaman Buku</span></a>
      </li>
      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="pages/feedback.html">
          <i class="fas fa-comment-dots"></i>
          <span>Data Feedback</span></a>
      </li>
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <div class="topbar-divider d-none d-sm-block"></div>
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Buku <a href="crud/addBooks.html" class="btn btn-success btn-user">Tambah
              Buku</a></h1>
          <hr />
          <form class="user">
            <div class="form-group">
              <input type="hidden" class="form-control" placeholder="ID" id="bid" />
            </div>
            <div class="form-group">
              <label for="nama_buku">Nama Buku</label>
              <input type="text" class="form-control" id="nama_buku" placeholder="Isi nama buku">
            </div>
            <div class="form-group">
              <label for="penulis_buku">Penulis Buku</label>
              <input type="text" class="form-control" id="penulis_buku" placeholder="Isi nama penulis buku">
            </div>
            <div class="form-group">
              <label for="penerbit_buku">Penerbit Buku</label>
              <input type="text" class="form-control" id="penerbit_buku" placeholder="Isi nama penerbit buku">
            </div>

            <div class="form-group">
              <label for="tanggal_terbit">Tanggal Terbit</label>
              <input type="date" class="form-control" id="tanggal_terbit" min="2015-01-01">
            </div>
            <div class="form-group">
              <label for="halaman">Halaman Buku</label>
              <input type="number" class="form-control" id="halaman" placeholder="Isi Jumlah halaman buku">
            </div>
            <div class="form-group">
              <label for="deskripsi">Deskripsi</label>
              <textarea class="form-control" id="deskripsi" rows="5" placeholder="Isi Deskripsi buku"></textarea>
            </div>
            <button onclick="update_book();" type="button" class="btn btn-warning">Update Book</button>
            <button onclick="delete_book();" type="button" class="btn btn-danger">Delete Book</button>
            <hr>
          </form>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Information</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="tb_books" class="table table-bordered" width="100%" cellspacing="0">
                  <tr>
                    <td>#ID</td>
                    <td>Nama Buku</td>
                    <td>Penulis Buku</td>
                    <td>Penerbit Buku</td>
                    <td>Tanggal Terbit</td>
                    <td>Halaman</td>
                    <td>Deskripsi</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->
    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button class="btn btn-primary" type="button" id="signOut">Logout</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../js/jquery-3.5.1.js"></script>
  <script src="../js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../js/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

  <!--Sweet Alert-->
  <script src="../js/sweetalert2.all.min.js"></script>

  <script>
    const signOut = document.getElementById('signOut');
    signOut.addEventListener('click', function () {
      document.location.href = "../login.php";
    });

    const tbBooks = document.getElementById('tb_books');
    const databaseRef = firebase.database().ref('books/');
    let rowIndex = 1;

    databaseRef.once('value', function (snapshot) {
      snapshot.forEach(function (childSnapshot) {
        let childKey = childSnapshot.key;
        let childData = childSnapshot.val();

        const row = tbBooks.insertRow(rowIndex);
        const cellId = row.insertCell(0);
        const cellNamaBuku = row.insertCell(1);
        const cellPenulisBuku = row.insertCell(2);
        const cellPenerbitBuku = row.insertCell(3);
        const cellTanggalTerbit = row.insertCell(4);
        const cellHalaman = row.insertCell(5);
        const cellDeskripsi = row.insertCell(6);
        cellId.appendChild(document.createTextNode(childKey));
        cellNamaBuku.appendChild(document.createTextNode(childData.nama_buku));
        cellPenulisBuku.appendChild(document.createTextNode(childData.penulis_buku));
        cellPenerbitBuku.appendChild(document.createTextNode(childData.penerbit_buku));
        cellTanggalTerbit.appendChild(document.createTextNode(childData.tanggal_terbit));
        cellHalaman.appendChild(document.createTextNode(childData.halaman));
        cellDeskripsi.appendChild(document.createTextNode(childData.deskripsi));
        rowIndex = rowIndex + 1;
      });
      False();
      const table = document.getElementById("tb_books");
      const rows = table.getElementsByTagName("tr");
      for (i = 0; i < rows.length; i++) {
        const currentRow = table.rows[i];
        const createClickHandler = function (row) {
          return function () {
            const cell0 = row.getElementsByTagName("td")[0];
            const cell1 = row.getElementsByTagName("td")[1];
            const cell2 = row.getElementsByTagName("td")[2];
            const cell3 = row.getElementsByTagName("td")[3];
            const cell4 = row.getElementsByTagName("td")[4];
            const cell5 = row.getElementsByTagName("td")[5];
            const cell6 = row.getElementsByTagName("td")[6];
            const bid = cell0.innerHTML;
            const nama_buku = cell1.innerHTML;
            const penulis_buku = cell2.innerHTML;
            const penerbit_buku = cell3.innerHTML;
            const tanggal_terbit = cell4.innerHTML;
            const halaman = cell5.innerHTML;
            const deskripsi = cell6.innerHTML;
            document.getElementById('bid').value = bid;
            document.getElementById('nama_buku').value = nama_buku;
            document.getElementById('penulis_buku').value = penulis_buku;
            document.getElementById('penerbit_buku').value = penerbit_buku;
            document.getElementById('tanggal_terbit').value = tanggal_terbit;
            document.getElementById('halaman').value = halaman;
            document.getElementById('deskripsi').value = deskripsi;
            True();
          };
        };
        currentRow.onclick = createClickHandler(currentRow);

      }

      function False() {
        let nama_buku = document.getElementById('nama_buku');
        let penulis_buku = document.getElementById('penulis_buku');
        let penerbit_buku = document.getElementById('penerbit_buku');
        let tanggal_terbit = document.getElementById('tanggal_terbit');
        let halaman = document.getElementById('halaman');
        let deskripsi = document.getElementById('deskripsi');
        nama_buku.setAttribute('readonly', 'true');
        penulis_buku.setAttribute('readonly', 'true');
        penerbit_buku.setAttribute('readonly', 'true');
        tanggal_terbit.setAttribute('readonly', 'true');
        halaman.setAttribute('readonly', 'true');
        deskripsi.setAttribute('readonly', 'true');
      }

      function True() {
        let nama_buku = document.getElementById('nama_buku');
        let penulis_buku = document.getElementById('penulis_buku');
        let penerbit_buku = document.getElementById('penerbit_buku');
        let tanggal_terbit = document.getElementById('tanggal_terbit');
        let halaman = document.getElementById('halaman');
        let deskripsi = document.getElementById('deskripsi');
        nama_buku.removeAttribute('readonly');
        penulis_buku.removeAttribute('readonly');
        penerbit_buku.removeAttribute('readonly');
        tanggal_terbit.removeAttribute('readonly');
        halaman.removeAttribute('readonly');
        deskripsi.removeAttribute('readonly');
      }

    });

    function update_book() {
      const bid = document.getElementById('bid').value;
      const nama_buku = document.getElementById('nama_buku').value;
      const penulis_buku = document.getElementById('penulis_buku').value;
      const penerbit_buku = document.getElementById('penerbit_buku').value;
      const tanggal_terbit = document.getElementById('tanggal_terbit').value;
      const halaman = document.getElementById('halaman').value;
      const deskripsi = document.getElementById('deskripsi').value;

      const data = {
        nama_buku: nama_buku,
        penulis_buku: penulis_buku,
        penerbit_buku: penerbit_buku,
        tanggal_terbit: tanggal_terbit,
        halaman: halaman,
        deskripsi: deskripsi
      }

      const updates = {};
      updates['/books/' + bid] = data;
      firebase.database().ref().update(updates);

      Swal.fire({
        title: 'Kamu sudah menambahkan Buku',
        icon: 'success',
        confirmButtonColor: ' #2ecc71 '
      }).then((result) => {
        if (result.value) {
          reload_page();
        }
      });
    }

    function delete_book() {
      let bid = document.getElementById('bid').value;

      firebase.database().ref().child('/books/' + bid).remove();

      Swal.fire({
        title: 'Data Salah satu',
        text: 'Buku akan dihapus',
        icon: 'success',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Hapus Data'
      }).then((result) => {
        reload_page();
      });

    }

    function reload_page() {
      window.location.reload();
    }
  </script>
</body>

</html>