</div>
</div>
<footer class="footer">
    <div class="container-fluid">
        <nav>
            <p class="copyright text-center">
                ©
                <script>
                    document.write(new Date().getFullYear())
                </script>
                <a href="#">KOORLAB </a>, made with love for a better school
            </p>
        </nav>
    </div>
</footer>
</div>
</div>
</body>
<!--   Core JS Files   -->
<script src="../vendor/light-bootstrap/assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../vendor/light-bootstrap/assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../vendor/light-bootstrap/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../vendor/light-bootstrap/assets/js/plugins/bootstrap-switch.js"></script>
<!--  Chartist Plugin  -->
<script src="../vendor/light-bootstrap/assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../vendor/light-bootstrap/assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<!-- <script src="../vendor/light-bootstrap/assets/js/light-bootstrap-dashboard.js?v=2.0.0" type="text/javascript"></script> -->
<!-- datatables -->
<script src="../vendor/datatables/datatables.min.js"></script>
<script>
    $(function(){

        $('.tables').DataTable({
            "serverSide" : true,
            "processing" : true,
            "ajax" : "../proses/kategori/get_all_kategori.php",
            "columns" : [
                {data : "kd_kategori"},
                {data : "nm_kategori"},
                {
                    data : "kd_kategori",
                    "render" : function(data, type, full){
                        var el = `<a class="btn btn-warning btn-fill edit-kategori" href='#modal-kategori' data-toggle="modal" data-id=`+data+`>` + `Ubah` + `</a> &nbsp;`;
                            el += `<a class="btn btn-danger btn-fill hapus-kategori" href=../proses/kategori/delete_kategori.php?kd=` + data + `>` + `Hapus` + `</a>`;
                        return el;
                    }
                }
            ]
        })

        function hapus(page, url_ajax, msg){
            Swal.fire({
              title: 'Apakah anda yakin?',
              text: "Data yang telah dihapus tidak dapat dikembalikan!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Hapus!'
          }).then((result) => {
              if (result.value) {
                $.ajax({
                    url : url_ajax,
                    success : function(data){
                        console.log(data)
                        window.location.href = 'index.php?page='+page+'&msg='+msg
                    }
                })
            }
        })
      }

      $(document).on('click', '.hapus-kategori', function(e){
        e.preventDefault();
        var url = $(this).attr('href')
        console.log(url)
        hapus('kategori', url, 'deleted')
      })

      $('.tambah-kategori').click(function(){
        $('.modal-title').text('Tambah Data')
        $('.nm_kategori').val('')
        $('.form-kategori').attr('../proses/kategori/add_kategori.php')
      })

      $(document).on('click', '.edit-kategori', function(){
        var kd = $(this).data('id')
        $('.modal-title').text('Edit Data')
        $('.form-kategori').attr('action', '../proses/kategori/update_kategori.php')

        $.ajax({
            url : '../proses/kategori/get_kategori.php?kd='+kd,
            success : function(datas){
                var data = JSON.parse(datas)
                $('.nm_kategori').val(data.nm_kategori)
                $('.kd_kategori').val(data.kd_kategori)
            }
        })
      })

  })
</script>
</html>