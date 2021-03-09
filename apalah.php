<!DOCTYPE html>
<html>
    <head>
        <title>Taufiq - Linkedin</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>      
        <nav>
            <ul>
                <li><a href="#Linkedin">Linkedin</a></li>
                <li><a href="#Home">Home</a></li>
                <li><a href="#My Profile">My Profile</a></li>
                <li><a href="#Search">Search</a></li>
            </ul>
        </nav>
        <div id="kotak">
            <p><img src="Buat pp.jpg" border="5px"><br /><br /></p>
            <p><b><big>Muhammad Taufiq Azra Haromain</big></b><br /><br /></p>
            <p>Universitas Brawijaya - Teknik Komputer 2019<br /><br /></p>
            <p>Bogor, Indonesia  · Have + 100 friends<br /><br /></p>
            <p><input type="submit" value="Add as Friend" class="submit" /></p>
        </div>
        <div id="tentang">
            <p><b><big>About Me</big></b></p>
            <br /><br />
            <p>Saya saat ini sedang menempuh pendidikan S1 Teknik Komputer<br /><br /></p>
            <p>Pernah menjadi Staff Muda SOSMA Himatekkom Periode 2019<br /><br /></p>
            <p>Pernah menjadi Staff Ahli SOSMA Himatekkom Periode 2020</p>
        </div>
        <div id="jualan"> 
            <p><b><big>Saya menjual beberapa Aksesoris dan Spare Part Laptop</big></b></p> <br /><br />
            <p>Dongle HDMI to VGA <br /><br /></p><p>Thermal Paste Kryonaut<br /><br /></p><p>SSD WD Blue M.2 500 GB<br /><br /></p>
            <p>Mouse Logitech wireless M170<br /><br /></p><p>RAM V-Gen Rescue 8 GB DDR4<br /><br /><br /></p>
            <p><b>Jika anda berminat, anda bisa mengisi form dibawah ini untuk pemesanan</b></p> <br /><br />
            <form action="" method="get">
                <div>    
		            <label>Nama barang yang ingin dibeli </label><input type="text" name="nama" value="<?=isset($_POST['nama']) ? $_POST['nama'] : ''?>"/><br /><br />
                </div>
                <div>
		            <label>Email untuk proses pemesanan  </label><input type="text" name="email" value="<?=isset($_POST['email']) ? $_POST['email'] : ''?>"/><br /><br />
	            </div>
            <input type="submit" name="submit" value="Pesan" class="submit"/>
            </form>
            <?php
            if (isset($_POST['submit'])) {
                echo "Pemesanan<br/>" ;
                echo 'Nama Anda  : ' . $_POST['nama'] . '<br/>';
                echo 'Email Anda : ' . $_POST['email'] . '<br/>';
                echo "Terima kasih telah melakukan pemesanan, kami akan mengubungi anda lewat email" ;
            }
            ?>
        </div>
    </body>
</html>