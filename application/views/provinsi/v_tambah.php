<h3><?= $page_title ?></h3>

<?php $flashmessage = $this->session->flashdata('exist');
	echo ! empty($flashmessage) ? '<p class="message">' . $flashmessage . '</p>': ''; ?>

<?php echo form_open('admin/c_provinsi/simpan_provinsi'); ?>
<legend></legend>
	<div class="form-group">
    	 <label class="col-md-3 control-label" for="kode_provinsi_bps">Kode BPS</label>
        <div class="col-md-9"> 
         <span class="help-block">
         <input class="form-control input-md" type="text" name="kode_provinsi_bps" id="kode_provinsi_bps" size="30" placeholder="Kode Provinsi BPS (Badan Pusat Statistik)"/> 
         <?php echo form_error('kode_provinsi_bps', '<p class="field_error">', '</p>'); ?>
         </span>
		</div>
	</div>
	 <div class="form-group">
    	 <label class="col-md-3 control-label" for="kode_provinsi_kemendagri">Kode Kemendagri</label>
        <div class="col-md-9"> 
         <span class="help-block">
         <input class="form-control input-md" type="text" name="kode_provinsi_kemendagri" id="kode_provinsi_kemendagri" size="30" placeholder="Kode Kemendagri"/> 
         <?php echo form_error('kode_provinsi_kemendagri', '<p class="field_error">', '</p>'); ?>
         </span>
		</div>
	</div>
	 <div class="form-group">
    	 <label class="col-md-3 control-label" for="nama_provinsi">Nama Provinsi </label>
        <div class="col-md-9"> 
         <span class="help-block">
         <input class="form-control input-md" type="text" name="nama_provinsi" id="nama_provinsi" size="30" placeholder="Nama Provinsi"/> 
         <?php echo form_error('nama_provinsi', '<p class="field_error">', '</p>'); ?>
         </span>
		</div>
	</div>
    <div class="form-group">
    	<label class="col-md-3 control-label" for="luas_wilayah"> Luas Daerah Provinsi </label>
        <div class="col-md-9"> 
         <span class="help-block">
         <input class="form-control input-md" type="text" name="luas_wilayah" id="luas_wilayah" size="30" placeholder="Luas Wilayah Provinsi(km2)"/> 
         <?php echo form_error('luas_wilayah', '<p class="field_error">', '</p>'); ?>
         </span>
		</div>
	</div>
<legend></legend>

<div class="form-group">
    <label class="col-md-0 control-label" for="simpan"></label>
    <div class="col-md-9">
    <button type="submit" class="btn btn-success" name="simpan" id="simpan"/>Simpan</button>
    <button type="button" class="btn btn-danger" name="batal" id="batal" onclick="location.href='<?= base_url() ?>admin/c_provinsi'"/>Batal</button>
    </div>
</div>

<?php echo form_close(); ?>

<script>
function nav_active(){
	document.getElementById("a-data-wilayah").className = "collapsed active";
	var r = document.getElementById("pengelola_data_wilayah");
	r.className = "collapsed";

	var d = document.getElementById("nav-provinsi");
	d.className = d.className + "active";
	}
 
// very simple to use!
$(document).ready(function() {
  nav_active();
});

</script>