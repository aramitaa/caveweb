<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v5.6.13, mobirise.com">
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image:src" content="">
    <meta property="og:image" content="">
    <meta name="twitter:title" content="Home">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/logoaa-removebg-preview-132x99.png" type="image/x-icon">
    <meta name="description" content="">


    <title>My Address</title>
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/socicon/css/styles.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap">
    </noscript>
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Barlow:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Barlow:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap">
    </noscript>
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&display=swap">
    </noscript>
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,200,300,400,500,600,700,100i,200i,300i,400i,500i,600i,700i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,200,300,400,500,600,700,100i,200i,300i,400i,500i,600i,700i&display=swap">
    </noscript>
    <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>


<style>
    .judul {
        text-align: left;
    }
</style>

<?php
if (isset($_POST['submitSave'])) {
    $daftarnilai = simplexml_load_file('daftar.xml');
    $daftar = $daftarnilai->addChild('daftar');
    $daftar->addAttribute('id', $_POST['id']);
    $daftar->addChild('fname', $_POST['fname']);
    $daftar->addChild('lname', $_POST['lname']);
    $daftar->addChild('alamat', $_POST['alamat']);
    $daftar->addChild('country', $_POST['country']);
    $daftar->addChild('province', $_POST['province']);
    $daftar->addChild('city', $_POST['city']);
    $daftar->addChild('kecamatan', $_POST['kecamatan']);
    $daftar->addChild('kelurahan', $_POST['kelurahan']);
    $daftar->addChild('zipcode', $_POST['zipcode']);
    $daftar->addChild('mainaddress', $_POST['mainaddress']);

    file_put_contents('daftar.xml', $daftarnilai->asXML());
    header('location:page24.php');
}
?>

<body>

    <section data-bs-version="5.1" class="menu menu2 cid-tpo14oaqGM" once="menu" id="menu2-5">

        <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
            <div class="container">
                <div class="navbar-brand">
                    <span class="navbar-logo">
                        <a href="index.html">
                            <img src="assets/images/logoaa-removebg-preview-132x99.png" alt="Mobirise Website Builder" style="height: 3rem;">
                        </a>
                    </span>
                    <span class="navbar-caption-wrap"><a class="navbar-caption text-white text-primary display-7" href="index.html">CAVÈ</a></span>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                        <li class="nav-item"><a class="nav-link link text-white text-primary display-4" href="page3.html#header5-1r">What's New</a></li>
                        <li class="nav-item dropdown"><a class="nav-link link text-white dropdown-toggle display-4" href="https://mobiri.se" data-toggle="dropdown-submenu" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Category</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-604"><a class="text-white dropdown-item text-primary display-4" href="page2.html#header5-1g" aria-expanded="false">Men</a><a class="text-white dropdown-item show text-primary display-4" href="page1.html#header5-12" aria-expanded="false">Women</a></div>
                        </li>
                        <li class="nav-item"><a class="nav-link link text-white text-primary display-4" href="page4.html#header6-2a">Jewelry &amp; Watches</a></li>
                        <li class="nav-item"><a class="nav-link link text-white text-primary display-4" href="page5.html#header6-2h">Handbags</a>
                        </li>
                        <li class="nav-item"><a class="nav-link link text-white text-primary display-4" href="page24.php"><span class="mobi-mbri mobi-mbri-user-2 mbr-iconfont mbr-iconfont-btn"></span>Profile</a></li>
                    </ul>


                </div>
            </div>
        </nav>
    </section>




    <section>
        <div class="container" style="width: 70%;">
            <br><br><br><br><br><br><br><br>
            <h3 class="judul"><strong>NEW ADDRESS</strong> </h3><br>
            <p>Please enter your address information</p><br>
            <h6><strong>CONTACT INFORMATION</strong></h6><br>

            <form method="post" class="was-validated">


                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="First Name" name="fname" required>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Last Name" name="lname" required>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="usr"></label>
                    <input type="text" class="form-control" name="id" placeholder="Phone Number" required>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <br>
                <h6><strong>ADDRESS</strong></h6><br>
                <div class="form-group">
                    <input type="text" class="form-control" name="alamat" placeholder="Street Name" required>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>


                <div class="form-group">
                    <select class="form-select mt-3" name="country" required>
                        <option disabled>Select Country</option>
                        <option>Indonesia</option>
                    </select>
                </div>

                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Province" name="province" required>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="City" name="city" required>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col"><br>
                        <input type="text" class="form-control" placeholder="Kecamatan" name="kecamatan" required>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="col"><br>
                        <input type="text" class="form-control" placeholder="Kelurahan" name="kelurahan" required>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </div>


                <div class="form-group"><br>
                    <input type="text" class="form-control" name="zipcode" placeholder="ZIP Code" required>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div><br><br>

                <p>Mark As :</p>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="check1" name="mainaddress" value="|Main Address|">
                    <label class="form-check-label" for="check1">Main Address</label>
                </div>

                <br><br><br>

                <button type="submit" name="submitSave" class="btn btn-dark mb-5">Save</button><br><br>
            </form>

        </div>
    </section>


    <section data-bs-version="5.1" class="footer6 cid-tpMPpANFA5" once="footers" id="footer6-1f">





        <div class="container">
            <div class="row content mbr-white">
                <div class="col-12 col-md-3 mbr-fonts-style display-7">
                    <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7">
                        <strong>Address</strong>
                    </h5>
                    <p class="mbr-text mbr-fonts-style display-7">Jl. Swadarma Raya No.58, Ulujami, Kec. Pesanggrahan,<br> Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12250</p> <br>
                    <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 mt-4 display-7">
                        <strong>Contacts</strong>
                    </h5>
                    <p class="mbr-text mbr-fonts-style mb-4 display-7">Nama : Aramita Nur Azizah<br>NIM : 07021011</p>
                </div>
                <div class="col-12 col-md-3 mbr-fonts-style display-7">
                    <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7"></h5>
                    <ul class="list mbr-fonts-style mb-4 display-4">
                        <li class="mbr-text item-wrap"><br></li>
                    </ul>
                    <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 mt-5 display-7"></h5>
                    <p class="mbr-text mbr-fonts-style mb-4 display-7"></p>
                </div>
                <div class="col-12 col-md-6">
                    <div class="google-map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.25523801927!2d106.75865011378538!3d-6.2300436627444675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1f55c77145d%3A0x1e2ed99435c9cd21!2sTANRI%20ABENG%20UNIVERSITY!5e0!3m2!1sen!2sid!4v1672931022308!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                </div>
                <div class="col-md-6">
                    <div class="social-list align-left">
                        <div class="soc-item">
                            <a href="index.html" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-twitter socicon"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="index.html" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-facebook socicon"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="index.html" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-youtube socicon"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="index.html" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-instagram socicon"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="index.html">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-googleplus socicon"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="index.html">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-behance socicon"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-lower">
                <div class="media-container-row">
                    <div class="col-sm-12">
                        <hr>
                    </div>
                </div>
                <div class="col-sm-12 copyright pl-0">
                    <p class="mbr-text mbr-fonts-style mbr-white display-7">
                        © Copyright&nbsp;</p>
                </div>
            </div>
        </div>
    </section>
</body>

</html>