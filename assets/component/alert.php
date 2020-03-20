<?php if (isset($_GET['msg'])): ?>
    <?php $msg = $_GET['msg'] ?>
    <?php if ($msg == 'added'): ?>
        <script>
            Swal.fire({
              icon: 'success',
              title: 'Data berhasil ditambahkan!',
              showConfirmButton: false,
              timer: 1500
          })
      </script>
      <?php endif ?>
      <?php if ($msg == 'updated'): ?>
        <script>
            Swal.fire({
              icon: 'success',
              title: 'Data berhasil diubah!',
              showConfirmButton: false,
              timer: 1500
          })
      </script>
    <?php endif ?>
    <?php if ($msg == 'deleted'): ?>
        <script>
            Swal.fire({
              icon: 'success',
              title: 'Data berhasil dihapus!',
              showConfirmButton: false,
              timer: 1500
          })
      </script>
    <?php endif ?>
    <?php if ($msg == 'not_match'): ?>
        <script>
            Swal.fire({
              icon: 'warning',
              title: 'Password baru dan konfirmasi password baru tidak sama!',
              showConfirmButton: false,
              timer: 1500
          })
      </script>
    <?php endif ?>
    <?php if ($msg == 'old_pw_wrong'): ?>
        <script>
            Swal.fire({
              icon: 'error',
              title: 'Password lama salah!',
              showConfirmButton: false,
              timer: 1500
          })
      </script>
    <?php endif ?>
    <?php if ($msg == 'imported'): ?>
        <script>
            Swal.fire({
              icon: 'success',
              title: 'Database berhasil diimport!',
              showConfirmButton: false,
              timer: 1500
          })
      </script>
    <?php endif ?>
    <?php if ($msg == 'error'): ?>
        <script>
            Swal.fire({
              icon: 'error',
              title: 'Error!',
              showConfirmButton: false,
              timer: 1500
          })
      </script>
    <?php endif ?>
<?php endif ?>