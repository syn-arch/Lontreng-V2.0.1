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
<?php endif ?>