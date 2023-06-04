@extends('layouts.main')

@section('the_content')

<main>
    <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="images/snaki-pict.png" alt="" width="72" height="57">
        <h2>Hitung Biaya Produksi</h2>
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aliquid explicabo et sunt dignissimos quod qui similique obcaecati est asperiores.</p>
    </div>

    <!-- menampilkan hasil perhitungan -->
    <div class="row g-5">
        <div class="col-md-5 col-lg-4 order-md-last">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-primary">Harga per kemasan</span>
            </h4>
            <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between lh-sm">
                    <div>
                        <h6 class="my-0">Nama Produk</h6>
                        <small class="text-body-secondary">Snaki</small>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-sm">
                    <div>
                        <h6 class="my-0">Biaya per kemasan</h6>
                        <small class="text-body-secondary">Satu kemasan</small>
                    </div>
                    <span class="text-body-secondary"><p>Rp.<div id="perKemasan"></div></p></span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-sm">
                    <div>
                        <h6 class="my-0">Rekomendasi harga jual</h6>
                        <small class="text-body-secondary">Setiap kemasan</small>
                    </div>
                    <span class="text-body-secondary"><p>Rp.<div id="hargaJual"></div></p></span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Total Biaya Produksi</span>
                    <strong>Rp.<div id="biayaProduksi"></div></strong>
                </li>
            </ul>
            <form class="card p-2">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Note">
                    <button type="submit" class="btn btn-secondary">Kirim</button>
                </div>
            </form>
        </div>
    
    <!-- bagian kolom form -->
    <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Bahan baku tiap kemasan</h4>
        <form class="needs-validation" novalidate>
            <div class="row g-3">
                <div class="col-12">
                    <label for="gulaperkemasan" class="form-label">Gula per kemasan</label>
                    <div class="input-group has-validation">
                        <input type="number" class="form-control" id="gulaperkemasan" placeholder="" required>
                        <span class="input-group-text">gram</span>
                    </div>
                    <div class="invalid-feedback">
                        Column is required.
                    </div>
                </div>
                <div class="col-12">
                    <label for="tepungperkemasan" class="form-label">Tepung tapioka per kemasan</label>
                    <div class="input-group has-validation">
                        <input type="number" class="form-control" id="tepungperkemasan" placeholder="" required>
                        <span class="input-group-text">gram</span>
                    </div>
                    <div class="invalid-feedback">
                        Column is required.
                    </div>
                </div>
                <div class="col-12">
                    <label for="coklatperkemasan" class="form-label">Coklat batangan per kemasan</label>
                    <div class="input-group has-validation">
                        <input type="number" class="form-control" id="coklatperkemasan" placeholder="" required>
                        <span class="input-group-text">gram</span>
                    </div>
                    <div class="invalid-feedback">
                        Column is required.
                    </div>
                </div>
            </div>
        </form>

        <hr class="my-4">

        <h4 class="mb-3">Bahan baku produksi</h4>
        <form class="needs-validation" novalidate>
            <div class="row g-3">
                <div class="col-12">
                    <label for="gulaperkg" class="form-label">Gula</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text">Rp.</span>
                        <input type="number" class="form-control" id="gulaperkg" placeholder="" required>
                        <span class="input-group-text">per kg</span>
                    </div>
                    <div class="invalid-feedback">
                        Column is required.
                    </div>
                </div>
                <div class="col-12">
                    <label for="tepungperkg" class="form-label">Tepung</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text">Rp.</span>
                        <input type="number" class="form-control" id="tepungperkg" placeholder="" required>
                        <span class="input-group-text">per kg</span>
                    </div>
                    <div class="invalid-feedback">
                        Column is required.
                    </div>
                </div>
                <div class="col-12">
                    <label for="coklatperkg" class="form-label">Coklat batangan</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text">Rp.</span>
                        <input type="number" class="form-control" id="coklatperkg" placeholder="" required>
                        <span class="input-group-text">per kg</span>
                    </div>
                    <div class="invalid-feedback">
                        Column is required.
                    </div>
                </div>
                <div class="col-12">
                    <label for="hargaKemasan" class="form-label">Kemasan</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text">Rp.</span>
                        <input type="number" class="form-control" id="hargaKemasan" placeholder="" required>
                        <span class="input-group-text">per kemasan</span>
                    </div>
                    <div class="invalid-feedback">
                        Column is required.
                    </div>
                </div>
            </div>
        </form>

        <hr class="my-4">

        <h4 class="mb-3">Biaya lainnya</h4>
        <form class="needs-validation" novalidate>
            <div class="row g-3">
                <div class="col-12">
                    <label for="tenagaKerja" class="form-label">Biaya tenaga kerja</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text">Rp.</span>
                        <input type="number" class="form-control" id="tenagaKerja" placeholder="" required>
                    </div>
                    <div class="invalid-feedback">
                        Column is required.
                    </div>
                </div>
                <div class="col-12">
                    <label for="biayaListrik" class="form-label">Biaya listrik</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text">Rp.</span>
                        <input type="number" class="form-control" id="biayaListrik" placeholder="" required>
                    </div>
                    <div class="invalid-feedback">
                        Column is required.
                    </div>
                </div>
                <div class="col-12">
                    <label for="sewaGedung" class="form-label">Biaya sewa gedung</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text">Rp.</span>
                        <input type="number" class="form-control" id="sewaGedung" placeholder="" required>
                    </div>
                    <div class="invalid-feedback">
                        Column is required.
                    </div>
                </div>
            </div>
        </form>
        <hr class="my-4">
    </div>
</main>

<script>
    document.getElementById('gulaperkemasan').addEventListener('input', updateBiayaPerKemasan);
    document.getElementById('tepungperkemasan').addEventListener('input', updateBiayaPerKemasan);
    document.getElementById('coklatperkemasan').addEventListener('input', updateBiayaPerKemasan);

    document.getElementById('gulaperkg').addEventListener('input', updateBiayaProduksi);
    document.getElementById('gulaperkg').addEventListener('input', updateBiayaPerKemasan);

    document.getElementById('tepungperkg').addEventListener('input', updateBiayaProduksi);
    document.getElementById('tepungperkg').addEventListener('input', updateBiayaPerKemasan);

    document.getElementById('coklatperkg').addEventListener('input', updateBiayaProduksi);
    document.getElementById('coklatperkg').addEventListener('input', updateBiayaPerKemasan);

    document.getElementById('hargaKemasan').addEventListener('input', updateBiayaProduksi);
    document.getElementById('hargaKemasan').addEventListener('input', updateBiayaPerKemasan);

    document.getElementById('tenagaKerja').addEventListener('input', updateBiayaProduksi);
    document.getElementById('biayaListrik').addEventListener('input', updateBiayaProduksi);
    document.getElementById('sewaGedung').addEventListener('input', updateBiayaProduksi);

    function updateBiayaPerKemasan() {
        var gulaperkemasan = parseInt(document.getElementById('gulaperkemasan').value);
        var tepungperkemasan = parseInt(document.getElementById('tepungperkemasan').value);
        var coklatperkemasan = parseInt(document.getElementById('coklatperkemasan').value);
        var gulaperkg = parseInt(document.getElementById('gulaperkg').value);
        var tepungperkg = parseInt(document.getElementById('tepungperkg').value);
        var coklatperkg = parseInt(document.getElementById('coklatperkg').value);
        var hargaKemasan = parseInt(document.getElementById('hargaKemasan').value);

        var gula2 = 1000 / gulaperkemasan;
        var totGula = gulaperkg / gula2;
        var tepung2 = 1000 / tepungperkemasan;
        var totTepung = tepungperkg / tepung2;
        var coklat2 = 1000 / coklatperkemasan;
        var totCoklat = coklatperkg / coklat2;
        var totBiayaPerKemasan = totGula + totTepung + totCoklat + hargaKemasan;
        var totHargaJual = totBiayaPerKemasan + 650;

        var totBiayaPerKemasanRupiah = totBiayaPerKemasan.toLocaleString('id-ID');
        var totHargaJualRupiah = totHargaJual.toLocaleString('id-ID');

        document.getElementById('perKemasan').textContent = totBiayaPerKemasanRupiah;
        document.getElementById('hargaJual').textContent = totHargaJualRupiah;
    }

    function updateBiayaProduksi() {
        var gulaperkg = parseInt(document.getElementById('gulaperkg').value);
        var tepungperkg = parseInt(document.getElementById('tepungperkg').value);
        var coklatperkg = parseInt(document.getElementById('coklatperkg').value);
        var tenagaKerja = parseInt(document.getElementById('tenagaKerja').value);
        var biayaListrik = parseInt(document.getElementById('biayaListrik').value);
        var sewaGedung = parseInt(document.getElementById('sewaGedung').value);

        var totBiayaProduksi = gulaperkg + tepungperkg + coklatperkg + tenagaKerja + biayaListrik + sewaGedung;

        var totBiayaProduksiRupiah = totBiayaProduksi.toLocaleString('id-ID');

        document.getElementById('biayaProduksi').textContent = totBiayaProduksiRupiah;
    }
</script>

@endsection