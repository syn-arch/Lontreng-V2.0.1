 $(function(){

        var pTable = $('.tables').DataTable({
            "serverSide" : true,
            "processing" : true,
            "ajax" : "../proses/kategori/get_all_kategori.php",
            "columns" : [
            { 
                data : "kd_kategori",
                orderable : false,
                "render" : function(data, type, full){
                    var el = `<input class="data_checkbox" type="checkbox" name="kd_kategori[]" value=`+ data +`>`;
                    return el;
                }
            },
            { data : null },
            { data : "nm_kategori" },
            {
                data : "kd_kategori",
                orderable : false,
                "render" : function(data, type, full){
                    var el = `<a class="btn btn-warning btn-fill edit-kategori" href='#modal-kategori' data-toggle="modal" data-id=` + data + `>` + `Ubah` + `</a> &nbsp;`;
                    el += `<a class="btn btn-danger btn-fill hapus-kategori" href=../proses/kategori/delete_kategori.php?kd=` + data + `>` + `Hapus` + `</a>`;
                    return el;
                }
            }
            ],
            dom: 'Bfrtip',
            buttons: ['copyHtml5','excelHtml5','csvHtml5','pdfHtml5']
        })

        pTable.on('order.dt search.dt draw.dt', function () {
            var start = pTable.page.info().start;
            var info = pTable.page.info();
            pTable.column(1, {order:'applied'}).nodes().each( function (cell, i) {
                cell.innerHTML = start+i+1;
            } );
        } ).draw();


        $(".check_all").click(function(){
            if (this.checked) {
                $(".data_checkbox").prop("checked", true)
            }else{
                $(".data_checkbox").prop("checked", false)
            }
        })

        $(".mass-hapus-kategori").click(function(e){
            e.preventDefault();

            var kd = [];
   
            $(':checkbox:checked').each(function(i){
                kd[i] = $(this).val();
            });

            hapus("kategori", $(this).attr("href"), "dihapus", true, kd)
        })

        function hapus(page, url_ajax, msg, mass = false, data = null){
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
                    if (mass == false) {
                        $.ajax({
                            url : url_ajax,
                            success : function(data){
                                window.location.href = 'index.php?page='+page+'&msg='+msg
                            }
                        })
                    }else{
                         $.ajax({
                            method : "post",
                            url : url_ajax,
                            data : { kd : data},
                            success : function(data){
                                window.location.href = 'index.php?page='+page+'&msg='+msg
                            }
                        })
                    }
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