<footer class="main-footer">
    <strong>Copyright &copy; 2024 <a href="https://github.com/rioarya01" target="_blank">Rio Arya</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>AdminLTE.io</b> v 3.2.0
    </div>
</footer>

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<!-- <script src="plugins/sparklines/sparkline.js"></script> -->
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="dist/js/demo.js"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="dist/js/pages/dashboard.js"></script> -->
<!-- SweetAlert2 -->
<script src="./plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="./plugins/datatables/jquery.dataTables.min.js"></script>
<script src="./plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="./plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="./plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="./plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="./plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="./plugins/jszip/jszip.min.js"></script>
<script src="./plugins/pdfmake/pdfmake.min.js"></script>
<script src="./plugins/pdfmake/vfs_fonts.js"></script>
<script src="./plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="./plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="./plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- Page specific script -->
<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
    $('.view-data').click(function(){ 
        const nama = $(this).attr('data-nama');
        const nim = $(this).attr('data-nim');
        const semester = $(this).attr('data-semester');
        const jk = $(this).attr('data-jk');
        const foto = $(this).attr('data-foto');
        $.ajax({
            url: "view/view_data_mahasiswa.php",
            dataType: "html",
            method: "POST",
            data: {nama: nama, nim: nim, semester: semester, jenis_kelamin: jk, foto: foto},
            success: function(data){
                $('#result-view-data').html(data);
            }
        });
        // console.log(nim); 
    });
    $('.view-data-dosen').click(function(){ 
        const nama = $(this).attr('data-nama');
        const nip = $(this).attr('data-nip');
        const prodi = $(this).attr('data-prodi');
        const dataTahun = $(this).attr('data-tahun');
        const jk = $(this).attr('data-jk');
        const foto = $(this).attr('data-foto');
        $.ajax({
            url: "view/view_data_dosen.php",
            dataType: "html",
            method: "POST",
            data: {nama: nama, nip: nip, program_studi: prodi, tahun_mulai_mengajar: dataTahun, jenis_kelamin: jk, foto: foto},
            success: function(data){
                $('#result-view-data').html(data);
            }
        });
        // console.log(nip); 
    });
    $('.view-pembayaran').click(function(){ 
        const nama = $(this).attr('data-nama');
        const nim = $(this).attr('data-nim');
        // const semester = $(this).attr('data-semester');
        // const foto = $(this).attr('data-foto');
        $.ajax({
            url: "view/view_data_pembayaran.php",
            dataType: "html",
            method: "POST",
            data: {nama:nama, nim: nim},
            success: function(data){
                $('#result-view-pembayaran').html(data);
            }
        });
        // console.log(nim); 
    });
    $(document).ready(function() {
        setInterval(function() {
            $("#report-mhs").load("banner.php");
        });
    });
</script>