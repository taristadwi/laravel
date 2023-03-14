@extends('app')

@section('content')
@push('custom_css')
        <style>
            h1 {
                font-weight: bold;
            }
        </style>
@endpush
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Halo friend, Aku Tarista🫶🏻</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>  
            
            <div class="card-body">
                Selamat Datang Di Berandaku
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Jangan Lupa selalu Bahagia 
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
@endsection
@push('custom_js')
<script>
    alert('Selamat Datang Friend');
</script>
@endpush
