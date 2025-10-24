<html>
    <head>
        <title>::Data Registrasi::</title>
        <style type="text/css">
            body{
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                background-size: cover;
                background-image: url("https://cdn.arstechnica.net/wp-content/uploads/2023/06/bliss-update-1440x960.jpg");
                font-family: Arial, Helvetica, sans-serif;
                margin: 0;
                padding: 20px;
            }
            .container{
                background-color: white;
                border: 3px solid grey;
                padding: 30px;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0,0,0,0.1);
                max-width: 600px;
                width: 100%;
                max-height: 90vh;
                display: flex;
                flex-direction: column;
            }
            h1{
                text-align: center;
                color: #333;
                margin-bottom: 30px;
                font-size: 28px;
                flex-shrink: 0;
            }
            .success-message{
                background-color: #d4edda;
                color: #155724;
                padding: 15px;
                margin-bottom: 20px;
                border: 1px solid #c3e6cb;
                border-radius: 5px;
                text-align: center;
                font-weight: bold;
                flex-shrink: 0;
            }
            .table-container {
                overflow-y: auto;
                margin-bottom: 20px;
            }
            table{
                width: 100%;
                border-collapse: collapse;
            }
            thead {
                position: sticky;
                top: 0;
                background-color: #f8f9fa;
                z-index: 1;
            }
            th, td{
                padding: 12px;
                text-align: left;
                border: 1px solid #ddd;
            }
            th{
                background-color: #f8f9fa;
                font-weight: bold;
                color: #333;
            }
            tr:nth-child(even) {
                background-color: #f9f9f9;
            }
            td{
                color: #666;
            }
            .back-button{
                text-align: center;
                margin-top: 20px;
            }
            .back-button a{
                background-color: #007bff;
                color: white;
                padding: 12px 24px;
                text-decoration: none;
                border-radius: 5px;
                display: inline-block;
                transition: background-color 0.3s;
            }
            .back-button a:hover{
                background-color: #0056b3;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Data Registrasi User</h1>
            
            <?php if (isset($_POST['submit'])): 
                $umur = intval($_POST['umur']);
                if ($umur < 10):
            ?>
                <div style="text-align: center; color: #dc3545; padding: 20px;">
                    <h3>Error: Umur tidak valid</h3>
                    <p>Umur minimal harus 10 tahun.</p>
                    <div class="back-button">
                        <a href="index.html">Kembali ke Form Registrasi</a>
                    </div>
                </div>
            <?php else: ?>
                <div class="success-message">
                    Registrasi Berhasil!
                </div>
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Umur</th>
                                <th>Asal Kota</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                    $namaLengkap = htmlspecialchars($_POST['namadepan'] . ' ' . $_POST['namabelakang']);
                    for ($i = 1; $i <= $umur; $i++) {
                        if ($i % 2 !== 0 || $i === 4 || $i === 8) {
                            continue;
                        }
                        echo "<tr>";
                        echo "<td>" . $i . "</td>";
                        echo "<td>" . $namaLengkap . "</td>";
                        echo "<td>" . htmlspecialchars($_POST['umur']) . " tahun</td>";
                        echo "<td>" . htmlspecialchars($_POST['asalkota']) . "</td>";
                        echo "</tr>";
                    }
                    ?>
                        </tbody>
                    </table>
                </div>
                <div class="back-button">
                    <a href="index.html">Kembali ke Form Registrasi</a>
                </div>
            <?php 
                endif;
            else: 
            ?>
                <div style="text-align: center; color: #dc3545; padding: 20px;">
                    <h3>Error: Data tidak ditemukan</h3>
                    <p>Silakan isi form registrasi terlebih dahulu.</p>
                    <div class="back-button">
                        <a href="index.html">Kembali ke Form Registrasi</a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </body>
</html>