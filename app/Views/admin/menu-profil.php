<?= $this->extend('layouts/template'); ?>


<?= $this->section('content'); ?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Static Navigation</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="#">profil</a></li>
        <li class="breadcrumb-item active">list</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header text-center">
            <i class="fas fa-table me-1"></i>
            Data Profil
            <a class="btn btn-primary btn-sm float-end" href="/admin/menu/profil/tambah">
                <i class="fas fa-solid fa-plus"></i>
                tambah profil
            </a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple" class="data-profil">
                <thead>
                    <tr>
                        <th>no</th>
                        <th>nama</th>
                        <th>isi</th>
                        <th>aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>visi misi</td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed nisi suscipit veritatis culpa commodi error.</td>
                        <td>
                            <a class="btn btn-success btn-sm" href="/admin/menu/profil/ubah">ubah</a>
                            <a class="btn btn-danger btn-sm" href="#">hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>tujuan dan sasaran</td>
                        <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non, voluptate quisquam? Sunt aliquid veniam magni vitae ratione obcaecati asperiores recusandae?</td>
                        <td>
                            <a class="btn btn-success btn-sm" href="edit-profil.html">ubah</a>
                            <a class="btn btn-danger btn-sm" href="#">hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>resolusi</td>
                        <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos fugiat labore inventore? Magnam.</td>
                        <td>
                            <a class="btn btn-success btn-sm" href="edit-profil.html">ubah</a>
                            <a class="btn btn-danger btn-sm" href="#">hapus</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>