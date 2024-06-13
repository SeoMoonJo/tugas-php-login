<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: main.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TugasMinggu6</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
      .container{
          display: flex;
          margin: auto;
          background-color: rgb(0, 143, 245);
          width: 50%;
          padding: 50px;
      }
      table {
        border: 1px solid rgb(255, 255, 255);  
        margin-left: 20px;
      }
      tr,td{
          border: 0px solid rgb(255, 255, 255);
          border-collapse: collapse;
      }
  </style>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="navbar-brand" href="#">Aldyth</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="beranda.php">
                        Beranda
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="biodata.php">
                      <p class="text-white bg-primary">Biodata</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="jadwal kuliah.php">Jadwal Kuliah</a>
                </li>
            </ul>

            <div class="mb-3">
                <input type="text" class="form-control" id="formGroupExampleInput">
                <label for="formGroupExampleInput" class="form-label bg-primary">
                    <p class="text-white">Search Information</p>
                </label>
            </div>
            <div>
        <form action="hapus.php" method="post" style="text-align: center; margin-top: 20px;">
        <button type="submit" class="btn btn-danger">Logout</button>
        </form>
      </div>
        </div>

      <div class="container">
        <img src="img/diriku.jpg" alt="" style="width: 200px;">
        <table>
        <tr>
            <td>NIM :</td>
            <td>A12.2022.06965</td>
        </tr>
        <tr>
            <td>Nama :</td>
            <td>Aldyth Prabowo</td>
        </tr>
        <tr>
            <td>Jenis Kelamin :</td>
            <td>Laki-Laki</td>
        </tr>
        <tr>
            <td>TTL :</td>
            <td>Kudus, 20 April 2004</td>
        </tr>
        <tr>
            <td>Asal Sekolah :</td>
            <td>SMAN 2 BAE</td>
        </tr>
        <tr>
            <td>Alamat Tempat Tinggal :</td>
            <td>Semarang Barat</td>
        </tr>
        <tr>
            <td>Email :</td>
            <td>aldythprabowo244@gmail.com</td>
        </tr>
    </table>
    
    
       </div> 
       
       
    
    
    
</body>
</html>