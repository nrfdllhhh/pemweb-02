
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Produk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        body {
            background-color: black;
            margin-top: 50px;
        }
        .container {
            background-color: white ;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: red;
            margin-bottom: 30px;
            text-align: center;
        }
        label {
            font-weight: bold;
        }
        .btn-primary {
            background-color: green;
            border-color: green;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .harga-list {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 10px;
        }

        .hasil-input {
            margin-left: 50px;
            margin-right: 50px;
            margin-top: 20px;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .hasil-input h3 {
            color: red;
            margin-bottom: 20px;
            text-align: center;
        }
        .hasil-input p {
            font-size: 18px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Form Produk Barang</h2>
        <div class="row">
            <div class="col-md-6">
                <form method="post">
                    <div class="form-group row">
                        <label for="name" class="col-4 col-form-label">Customer :</label> 
                        <div class="col-8">
                            <input id="name" name="name" placeholder="Nama Customer" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Pilih Produk :</label> 
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="CELANA" required="required"> 
                                <label for="produk_0" class="custom-control-label">CELANA</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="BAJU" required="required"> 
                                <label for="produk_1" class="custom-control-label">BAJU</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="SHOES" required="required"> 
                                <label for="produk_2" class="custom-control-label">SHOES</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-4 col-form-label">Jumlah Produk :</label> 
                        <div class="col-8">
                            <input id="jumlah" name="jumlah" placeholder="Jumlah Produk" type="number" class="form-control" required="required">
                        </div>
                    </div> 
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Kirim</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <div class="harga-list">
                    <h4>Daftar Harga :</h4>
                    <ul>
                        <li>CELANA - Rp. 4.200.000</li>
                        <li>BAJU - Rp. 3.100.000</li>
                        <li>SHOES - Rp. 3.800.000</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php
    if (isset($_POST['submit'])) {
        // Menangkap data input
        $name = $_POST['name'];
        $produk = $_POST['produk'];
        $jumlah = $_POST['jumlah'];

        // Menghitung harga berdasarkan jumlah produk
        switch ($produk) {
            case "CELANA":
                $total_harga = 4200000 * $jumlah;
                break;
            case "BAJU":
                $total_harga = 3100000 * $jumlah;
                break;
            case "SHOES":
                $total_harga = 3800000 * $jumlah;
                break;
        }
        ?>
        <div class="hasil-input">
            <h3>Hasil Inputan</h3>
            <?php
            echo "<br>Nama Customer : " . $name;
            echo "<br>Produk Pilihan : " . $produk;
            echo "<br>Jumlah Produk : " . $jumlah;
            echo "<br>Total Belanja : Rp. " . number_format($total_harga, 0, ',', '.');
            ?>
        </div>
    <?php } ?>
</body>
</html>