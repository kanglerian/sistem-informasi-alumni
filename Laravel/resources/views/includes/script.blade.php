<!-- Bootstrap core JavaScript-->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
<!-- Page level plugins -->
<script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>

<script src="{{asset('js/demo/chart-pie-demo.js')}}"></script>


<script>
    jQuery(document).ready(function(e){
        $('#modalAlumni').on('show.bs.modal', function(e){
            var button = $(e.relatedTarget);
            var modal = $(this);

            modal.find('.modal-body').load(button.data("remote"));
            modal.find('.modal-tittle').html(button.data("title"));
        });
    });
</script>

<script>
    jQuery(document).ready(function(e){
        $('#modalPerusahaan').on('show.bs.modal', function(e){
            var button = $(e.relatedTarget);
            var modal = $(this);

            modal.find('.modal-body').load(button.data("remote"));
            modal.find('.modal-tittle').html(button.data("title"));
        });
    });
</script>

<div class="modal fade" id="modalPerusahaan" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <i class="fa fa-spinner fa-spin"></i>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modalAlumni" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <i class="fa fa-spinner fa-spin"></i>
            </div>
        </div>
    </div>
</div>

















