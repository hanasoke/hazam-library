let Admin = document.getElementById('signIn_admin');
Admin.addEventListener('click', function () {
  const username = document.getElementById('username').value;
  const password = document.getElementById('password').value;

  if (username == 'Admin' && password == 'Admin') {
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 2000,
      timerProgressBar: true,
      onOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer);
        toast.addEventListener('mouseleave', Swal.resumeTimer);
        document.location.href = "../admin/index.html";
      }
    });

    Toast.fire({
      icon: 'success',
      title: 'Anda Adalah Admin',
    });
  } else if (username == "" && password != "") {
    Swal.fire({
      title: 'Username kosong',
      text: 'Username wajib diisi',
      icon: 'warning',
      confirmButtonColor: '#2ecc71'
    });
  } else if (username != "" && password == "") {
    Swal.fire({
      title: 'Password kosong',
      text: 'Password wajib diisi',
      icon: 'warning',
      confirmButtonColor: '#2ecc71'
    });
  } else if (username == "" && password == "") {
    Swal.fire({
      title: 'Data kosong',
      text: 'Data wajib diisi',
      icon: 'info',
      confirmButtonColor: '#2ecc71'
    });
  } else {
    Swal.fire({
      title: 'Anda Bukan Admin',
      icon: 'warning',
      confirmButtonColor: '#2ecc71'
    });
  }
});