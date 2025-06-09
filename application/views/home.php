<?php
defined('BASEPATH') or exit('No direct script access allowed');
$dark_mode = $this->session->userdata('dark_mode');
$dark_mode_class = $dark_mode ? 'dark-mode' : '';


//fungsi untuk merubah nama hari menjadi hari indonesia
function hari_ini()
{
    switch (date('D')) {
        case 'Sun':
            $hari = 'Minggu';
            break;
        case 'Mon':
            $hari = 'Senin';
            break;
        case 'Tue':
            $hari = 'Selasa';
            break;
        case 'Wed':
            $hari = 'Rabu';
            break;
        case 'Thu':
            $hari = 'Kamis';
            break;
        case 'Fri':
            $hari = 'Jum\'at';
            break;
        case 'Sat':
            $hari = 'Sabtu';
            break;

        default:
            $hari = 'Hari tidak diketahui';
            break;
    }

    return $hari;
}

//fungsi untuk merubah format tanggal menjadi tanggal indonesia
function tanggal_indo()
{
    $bulan  = [1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

    $exp    = explode('-', date('d-m-Y'));

    return $exp[0] . ' ' . $bulan[(int) $exp[1]] . ' ' . $exp[2];
}

?>

<div class="card alert-info" role="card">
    <p class="mb-0 text-right"><b><i class="fa fa-calendar"></i> <?= hari_ini(); ?>, <?= tanggal_indo(); ?></b></p>
    <hr>
    <h4 class="alert-heading"><i class="fa fa-info-circle"></i> Selamat Datang di <b>Aplikasi Stok Barang</b>
	</h4>
    <p class="mb-5" style="font-size: 16px;">Saat ini anda login sebagai <b><?= $this->session->userdata('User'); ?></b> dengan level <b><?= ucfirst($this->session->userdata('level')); ?></b></p>
</div>
<?php
//tampilkan pesan success
if ($this->session->flashdata('ngok')) {
    echo '<div class="alert alert-danger" role="alert">
    ' . $this->session->flashdata('ngok') . '
  </div>';
}
?>




