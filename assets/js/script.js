 $(function(){

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

        $(".check_all").click(function(){
            if (this.checked) {
                $(".data_checkbox").prop("checked", true)
            }else{
                $(".data_checkbox").prop("checked", false)
            }
        })

        function get(parameterName) {
            var result = null,
                tmp = [];
            location.search
                .substr(1)
                .split("&")
                .forEach(function (item) {
                  tmp = item.split("=");
                  if (tmp[0] === parameterName) result = decodeURIComponent(tmp[1]);
                });
            return result;
        }

        // ====================================================================
        //                      PAGES/KATEGORI.PHP START
        // ====================================================================
        var pTable = $('#tables-kategori').DataTable({
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

        $(".mass-hapus-kategori").click(function(e){
            e.preventDefault();

            var kd = [];
   
            $(':checkbox:checked').each(function(i){
                kd[i] = $(this).val();
            });

            if (kd.length == 0) {
                 Swal.fire('Gagal','Anda belum memilih data!','warning')
                return 
            }

            hapus("kategori", $(this).attr("href"), 'deleted', true, kd)
        })

        $(document).on('click', '.hapus-kategori', function(e){
            e.preventDefault();
            var url = $(this).attr('href')
            hapus('kategori', url, 'deleted')
        })

          $('.tambah-kategori').click(function(){
            $('.modal-title').text('Tambah Data')
            $('.nm_kategori').val('')
            $('.form-kategori').attr('action', '../proses/kategori/add_kategori.php')
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
        // ====================================================================
        //                      PAGES/KATEGORI.PHP END
        // ====================================================================

        // ====================================================================
        //                      PAGES/AUDIO.PHP START
        // ====================================================================
        var pTableAudio = $('#tables-audio').DataTable({
            "serverSide" : true,
            "processing" : true,
            "ajax" : "../proses/audio/get_all_audio.php",
            "columns" : [
            { 
                data : "kd_audio",
                orderable : false,
                "render" : function(data, type, full){
                    return `<input class="data_checkbox" type="checkbox" name="kd_audio[]" value=`+ data +`>`;
                }
            },
            { data : null },
            { data : "nm_audio" },
            { 
                data : "audio",
                orderable : false,
                "render" : function(data, type, full){
                    return `<audio controls>
                                <source src="../assets/audio/`+ data +`" type="audio/mp3">
                            </audio>`;
                }
            },
            {
                data : "kd_audio",
                orderable : false,
                "render" : function(data, type, full){
                    return `<a class="btn btn-warning btn-fill edit-audio" href='#modal-audio' data-toggle="modal" data-id=` + data + `>` + `Ubah` + `</a> &nbsp; 
                            <a class="btn btn-danger btn-fill hapus-audio" href=../proses/audio/delete_audio.php?kd=` + data + `>` + `Hapus` + `</a>`;
                    
                }
            }
            ],
            dom: 'Bfrtip',
            buttons: ['copyHtml5','excelHtml5','csvHtml5','pdfHtml5']
        })

        pTableAudio.on('order.dt search.dt draw.dt', function () {
            var start = pTableAudio.page.info().start;
            var info = pTableAudio.page.info();
            pTableAudio.column(1, {order:'applied'}).nodes().each( function (cell, i) {
                cell.innerHTML = start+i+1;
            } );
        } ).draw();

        $(".mass-hapus-audio").click(function(e){
            e.preventDefault();
            var kd = [];
            $(':checkbox:checked').each(function(i){
                kd[i] = $(this).val();
            });
            if (kd.length == 0) {
                 Swal.fire('Gagal','Anda belum memilih data!','warning')
                return 
            }

            hapus("audio", $(this).attr("href"), 'deleted', true, kd)
        })

        $(document).on('click', '.hapus-audio', function(e){
            e.preventDefault();
            var url = $(this).attr('href')
            hapus('audio', url, 'deleted')
        })

        $('.tambah-audio').click(function(){
            $('.modal-title').text('Tambah Data')
            $('.nm_audio').val('')
            $('.form-audio').attr('action', '../proses/audio/add_audio.php')
        })

        $(document).on('click', '.edit-audio', function(){
            var kd = $(this).data('id')
            $('.modal-title').text('Edit Data')
            $('.form-audio').attr('action', '../proses/audio/update_audio.php')

            $.ajax({
                url : '../proses/audio/get_audio.php?kd='+kd,
                success : function(datas){
                    var data = JSON.parse(datas)
                    $('.nm_audio').val(data.nm_audio)
                    $('.kd_audio').val(data.kd_audio)
                    $('.audio').val(data.audio)
                }
            })
        })
        // ====================================================================
        //                      PAGES/AUDIO.PHP END
        // ====================================================================

        // ====================================================================
        //                      PAGES/JADWAL.PHP START
        // ====================================================================
        var pTablejadwal = $('#tables-jadwal').DataTable({
            "serverSide" : true,
            "processing" : true,
            "ajax" : "../proses/jadwal/get_all_jadwal.php?hari="+get("hari"),
            "columns" : [
            { 
                data : "kd_jadwal",
                orderable : false,
                "render" : function(data, type, full){
                    return `<input class="data_checkbox" type="checkbox" name="kd_jadwal[]" value=`+ data +`>`;
                }
            },
            { data : null },
            { data : "nm_kategori" },
            { 
                data : "audio",
                orderable : false,
                "render" : function(data, type, full){
                    return `<audio controls>
                                <source src="../assets/audio/`+ data +`" type="audio/mp3">
                            </audio>`;
                }
            },
            { data : "jam" },
            {
                data : "kd_jadwal",
                orderable : false,
                "render" : function(data, type, full){
                    return `<a class="btn btn-warning btn-fill edit-jadwal" href='#modal-jadwal' data-toggle="modal" data-id=` + data + `>` + `Ubah` + `</a> &nbsp; 
                            <a class="btn btn-danger btn-fill hapus-jadwal" href=../proses/jadwal/delete_jadwal.php?kd=` + data + `>` + `Hapus` + `</a>`;
                    
                }
            }
            ],
            dom: 'Bfrtip',
            buttons: ['copyHtml5','excelHtml5','csvHtml5','pdfHtml5']
        })

        pTablejadwal.on('order.dt search.dt draw.dt', function () {
            var start = pTablejadwal.page.info().start;
            var info = pTablejadwal.page.info();
            pTablejadwal.column(1, {order:'applied'}).nodes().each( function (cell, i) {
                cell.innerHTML = start+i+1;
            } );
        } ).draw();

        $(".mass-hapus-jadwal").click(function(e){
            e.preventDefault();
            var kd = [];
            $(':checkbox:checked').each(function(i){
                kd[i] = $(this).val();
            });
            if (kd.length == 0) {
                 Swal.fire('Gagal','Anda belum memilih data!','warning')
                return 
            }

            hapus("jadwal&hari="+get("hari"), $(this).attr("href"), 'deleted', true, kd)
        })

        $(document).on('click', '.hapus-jadwal', function(e){
            e.preventDefault();
            var url = $(this).attr('href')
            hapus('jadwal&hari='+get("hari"), url, 'deleted')
        })

        $('.tambah-jadwal').click(function(){
            $('.modal-title').text('Tambah Data')
            $('.nm_jadwal').val('')
            $('.kd_audio').val('pilih_audio')
            $('.kd_kategori').val('pilih_kategori')
            $('.kd_jam').val('pilih_jam')
            $('.form-jadwal').attr('action', '../proses/jadwal/add_jadwal.php?hari='+get('hari'))
        })

        $(document).on('click', '.edit-jadwal', function(){
            var kd = $(this).data('id')
            $('.modal-title').text('Edit Data')
            $('.form-jadwal').attr('action', '../proses/jadwal/update_jadwal.php')

            $.ajax({
                url : '../proses/jadwal/get_jadwal.php?kd='+kd,
                success : function(datas){
                    var data = JSON.parse(datas)
                    $('.kd_jadwal').val(data.kd_jadwal)
                    $('.kd_audio').val(data.kd_audio)
                    $('.kd_kategori').val(data.kd_kategori)
                    $('.kd_jam').val(data.kd_jam)
                    $('.hari').val(data.hari)
                }
            })
        })

        $('.pilih_hari').change(function(){
            window.location.href = 'index.php?page=jadwal&hari=' + $(this).val()
        })
        // ====================================================================
        //                      PAGES/JADWAL.PHP END
        // ====================================================================

  })