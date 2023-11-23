<!-- Data dari table Detail -->
<h1>Data detail Pasien</h1>
<div class="row mb-2">
        <label for="" class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama" value="<?=$data['nama']?>">
</div>
<div class="row mb-2">
        <label for="" class="form-label">Alamat</label>
        <input type="text" class="form-control" name="alamat" value="<?=$data['alamat']?>">
</div>
<div class="row mb-2">
        <label for="" class="form-label">Usia</label>
        <input type="text" class="form-control" name="usia" values="<?=$data['usia']?>">
</div>
<div class="row mb-2">
        <label for="" class="form-label">Gender</label>
        <select name="gender" id="" class="form-select">
        <option value="pria">Pria</option>
        <option value="wanita">Wanita</option>
        </select>
</div> 