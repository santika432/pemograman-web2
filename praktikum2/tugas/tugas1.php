<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    .margin {
        margin-right: 150px;
        margin-left: 80px;
        padding-top : 50px;
    }
</style>
</head>

<body class ="margin">
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
       
<form method="POST">
    <h3>Sistem Penilaian</h3>
    <h1>
        Belanja Online
    </h1>
  <div class="form-group row">
   
    <label for="pelanggan" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="pelanggan" name="pelanggan" placeholder="Nama customor" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="pilihan" id="pilihan_0" type="radio" class="custom-control-input" value="TV " aria-describedby="pilihanHelpBlock" required="required"> 
        <label for="pilihan_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="pilihan" id="pilihan_1" type="radio" class="custom-control-input" value="KULKAS" aria-describedby="pilihanHelpBlock" required="required"> 
        <label for="pilihan_1" class="custom-control-label">KULKAS</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="pilihan" id="pilihan_2" type="radio" class="custom-control-input" value="MESIN CUCI" aria-describedby="pilihanHelpBlock" required="required"> 
        <label for="pilihan_2" class="custom-control-label">MESIN CUCI</label>
      </div> 
      <span id="pilihanHelpBlock" class="form-text text-muted">Silakan Pilih Produk</span>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" placeholder="Jumlah produk" type="text" class="form-control" required="required">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

		</div>
		<div class="col-md-6">
			<div class="list-group">
				 <a href="#" class="list-group-item list-group-item-action active">DAFTAR HARGA</a>
				<div class="list-group-item">
					TV: Rp.4.200.000
				</div>
				<div class="list-group-item">
         KULKAS : Rp.3.100.000
				</div>
                <div class="list-group-item">
          MESIN CUCI : Rp.3.800.000
				</div>
				<div class="list-group-item justify-content-between">
				</div> <a href="#" class="list-group-item list-group-item-action active justify-content-between"> HARGA DAPAT BERUBAH SETIAP SAAT <span class="badge badge-light badge-pill">14</span></a>
			</div>
		</div>
	</div>
</div>

<div class = "container">
    <table class ="table text-uppercase table-bordered">
        <thead>
            <tr class="table-primary">
                <td>NAMA</td>
                <td>PRODUK</td>
                <td>JUMLAH</td>
                <td>TOTAL HARGA</td>
            </tr>
        </thead>
        <TBody>
            <?php
                if (isset($_POST ['submit'])){
                    $pelanggan = $_POST['pelanggan'];
                    $pilihan = $_POST['pilihan'];
                    $jumlah = $_POST['jumlah'];
                    

                    if ($pilihan == 'TV'){
                        $harga =4200000;

                    }else if ($pilihan == "KULKAS"){
                        $harga = 3100000;
                    }else if ($pilihan == "MESIN CUCI"){
                        $harga = 3800000;
                    }
                    else{
                        $harga =0;
                    }
                    $total_harga = $harga * $jumlah;
                
                
             
            ?>

            <tr>
                <td> <?=$pelanggan?></td>
                <td> <?=$pilihan?></td>
                <td> <?=$jumlah?></td>
                <td> <?=$total_harga?></td>
                
            </tr>
            <?php } ?>
        </TBody>
    </table>

</div>
</body>
</html>