
<div class="footer" style="">
    <div class="float-right">
        <strong>MT</strong>
    </div>

</div>

</div>
</div>


<!-- Mainly scripts -->
<script src="{{asset('admin/')}}/js/jquery-3.1.1.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="{{asset('admin/')}}/js/popper.min.js"></script>
<script src="{{asset('admin/')}}/js/bootstrap.js"></script>
<script src="{{asset('admin/')}}/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="{{asset('admin/')}}/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="{{asset('admin/')}}/js/inspinia.js"></script>
<script src="{{asset('admin/')}}/js/plugins/pace/pace.min.js"></script>

<!-- iCheck -->
<script src="{{asset('admin/')}}/js/plugins/iCheck/icheck.min.js"></script>
<script>
    $(document).ready(function () {
        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });
    });
</script>

      <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

      <script type="text/javascript">
      $(document).ready(function() {
        $('#postsBlog').DataTable( {
          // "order": [[ 3, "desc" ]];
          "language": {
            "search": "Arama:",
            }
        });
        } )
      </script>


</body>

</html>
