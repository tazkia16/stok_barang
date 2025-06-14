<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<div class="row">
    <div class="col-sm-12 col-md-12">
        <h4 class="mb-0"><i class="fa fa-cubes"></i> Data Stok Barang</h4>
    </div>
</div>
<hr class="mt-0" />
<?php if ($this->session->flashdata('ngok')): ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <?php echo $this->session->flashdata('ngok'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>
<div class="table-responsive">
    <table class="table table-sm table-hover table-striped" id="tables">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Kode Barang</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Brand</th>
                <th scope="col">Stok</th>
                <th scope="col">Harga Jual</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
