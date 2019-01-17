
<!DOCTYPE html>
<?php 
    include "show-data.php";
    include "update-data.php";
?>

<html>
    <head>
        <title>Test Update Data</title>
        <meta name="viewport" content="width=device-width,
        initial-scale-1.0">
        <link rel="stylesheet" href="Profiles/CSS/style.css">
    </head>
    <body style="background-color:seashell">
        <h1><center>BIODATA</center></h1>
        <br>
        <marquee>SMK Telkom Malang</marquee>
        <hr>
        <nav>
            <div class="menu-mobile">
                <a href="#" onclick="showMenu()">Menu</a>
            </div>
            <ul id="menu">
                <li><a href="https://www.youtube.com/watch?v=mjA_TiUA-4g">Video MPLS</a></li>
                <li><a href="videoprofilmoklet.html">Profil Moklet</a></li>
                <li><a href="GALLERY.html">Gallery</a></li>
                <li><a href="https://si.podoteko.com/smk-telkom-malang-dengan-jurusan-teknologi-dan-informatika-terbaik-di-indonesia/">Berita Terbaru Moklet</a> </li>
                <li><a href="https://smktelkom-mlg.sch.id/">Website Moklet</a> </li>
            </ul>
        </nav>
        <br>
        <section id="box-profile">
            <div class="img-profile">
               <div class="photo" style="background-image:url(Profiles/Pictures/pictureII.jpg);"></div>
            </div>
            <div class="description"> 
                <h1 id="pNama"><?php echo $nama; ?></h1>
                <p id="pRole">Front End Designer</p>
                <a href="#input-form" class="button bg-green" onclick="editForm()">Edit</a>
                <a href="#" class="button border-blue">Resume</a>
            </div>
        <div class="information">
            <div class="data">
                <p class="field">Tersedia</p>
                <p id = "pTersedia" class="text-gray"><?php echo $tersedia; ?></p>
            </div>
            <div class="data">
                <p class="field">Umur</p>
                <p id="pUmur" class="text-gray"><?php echo $umur; ?></p>
            </div>
            <div class="data">
                <p class="field">Alamat</p>
                <p id="pAlamat" class="text-gray"><?php echo $alamat; ?></p>
            </div>
            <div class="data">
                <p class="field">Email</p>
                <p id="pEmail" class="text-gray"><?php echo $email; ?></p>
            </div>
        </div>
        </section>
        <section id="input-form">
            <center><h1>Form List</h1></center>
          <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
                
                <div class="form">
                    <label>Id User</label>
                    <input id="inpIdUser" type="text" name="id_user" value="<?php echo $id; ?>">
                </div>

                <div class="form">
                    <label>Nama     </label>
                    <input id="inpNama" type="text" name="nama">
                </div>
                <br>
                <div class="form">
                    <label>Tersedia </label>
                    <input id="inpTersedia" type="text" name="tersedia">
                </div>
                <br>
                <div class="form">
                    <label>Umur     </label>
                    <input id="inpUmur" type="number" name="umur">
                </div>
                <br>
                <div class="form">
                    <label>Alamat   </label>
                    <input id="inpAlamat" type="text" name="alamat">
                </div>
                <br>
                <div class="form">
                    <label>Email    </label>
                    <input id="inpEmail" type="email" name="email">
                </div>
                <br>
                <div class="form">
                    <input onclick="" type="submit" name="submit"
                    value="SUBMIT" class="bg-blue"></a>
                </div>
            </form>
        </section>

        <script>
            var formMenu = document.getElementById("input-form");
            formMenu.style.display = "none";

            
            function editForm()
                {
                if(formMenu.style.display === "none")
                {
                    formMenu.style.display = "block";
                }
                else
                {
                    formMenu.style.display = "none";
                }

                var nama = document.getElementById("pNama").innerHTML;
                var tersedia = document.getElementById("pTersedia").innerHTML;
                var umur = document.getElementById("pUmur").innerHTML;
                var alamat = document.getElementById("pAlamat").innerHTML;
                var email = document.getElementById("pEmail").innerHTML;

                document.getElementById("inpNama").value = nama;
                document.getElementById("inpTersedia").value = tersedia;
                document.getElementById("inpUmur").value = umur;
                document.getElementById("inpAlamat").value = alamat;
                document.getElementById("inpEmail").value = email;
            }
            

            function showMenu(){
                var menu = document.getElementById("menu");
                var box = document.getElementById("box-profile");

                if(menu.style.display === "block"){
                    menu.style.display = "none";
                    box.style.paddingTop = "0px";
                }else{
                    menu.style.display = "block";
                    box.style.paddingTop = "125px";
                }
            }
        </script>
    </body>
</html>