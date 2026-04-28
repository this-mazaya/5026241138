<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pertemuan 6</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function showme() {
            //alert("Hallo Selamat Siang");
            Swal.fire({
                title: "Haloo!",
                text: "Selamat Siang",
                icon: "success"
            });
            a = 18 + 10;
            console.log("Hasil Penjumlahan: " + a);
            c = 1 * 2 * 3;
            console.log("Hasil Perkalian: " + c);
        }

        function changeText() {
            element = document.getElementById("intro");
            element.innerHTML = "Sistem Informasi ITS";
            //document.getElementById("intro").innerHTML = "Sistem Informasi ITS"
        }

        function changeStyle() {
            element = document.getElementById("tombol");
            element.style.color = "red";
            element.style.background = "yellow";
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        body {
            background-color: #b29700;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            padding-top: 3rem;
        }

        .main-card {
            background-color: #fecc26;
            width: 100%;
            max-width: 34rem;
            border-radius: 1.5rem 1.5rem 0 0;
            padding: 1.5rem;
            min-height: calc(100vh - 3rem);
        }

        .top-icon {
            color: #000;
            font-size: 1.1rem;
            text-decoration: none;
        }

        .top-icon:hover {
            color: #444;
        }

        .profile-img {
            width: 85px;
            height: 85px;
            object-fit: cover;
        }

        .section-label {
            font-size: 1rem;
            font-weight: 750;
            color: #000;
            margin-bottom: 0.5rem;
            margin-top: 1rem;
        }

        .link-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            background-color: #222;
            color: white;
            text-decoration: none;
            border-radius: 2rem;
            padding: 1rem;
            margin-bottom: 0.75rem;
            font-weight: 600;
            transition: background-color 0.2s;
        }

        .link-btn-hdr {
            display: flex;
            align-items: flex-start;
            justify-content: center;
            position: relative;
            background-color: #f1f0f0;
            color: white;
            text-decoration: none;
            border-radius: 2rem;
            padding: 0.6rem;
            margin-bottom: 0.75rem;
            font-weight: 600;
            transition: background-color 0.2s;
        }

        .link-btn:hover {
            background-color: #444;
            color: white;
            text-decoration: none;
        }

        .link-btn i.left-icon {
            position: absolute;
            left: 1rem;
            font-size: 1rem;
            opacity: 0.7;
        }

        .link-btn i.right-icon {
            position: absolute;
            right: 1rem;
            font-size: 1rem;
            opacity: 0.4;
        }

        .join-btn {
            border: 1.5px;
            border-radius: 2rem;
            padding: 0.6rem 2rem;
            font-weight: 600;
            font-size: 0.9rem;
            color: #000;
            text-decoration: none;
            display: inline-block;
            transition: background-color 0.2s;
        }

        .join-btn:hover {
            background-color: #f5f5f5;
            color: #000;
            text-decoration: none;
        }

        .footer-text {
            font-size: 0.75rem;
        }

        .footer-text a {
            color: #000;
            text-decoration: none;
        }

        .footer-text a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="main-card">

        <!-- Header icons -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <a href="https://linktr.ee" target="_blank" class="top-icon link-btn-hdr">
                <img src="linktree_logo.png" alt="Linktree" width="18">
            </a>
            <a href="#" class="top-icon link-btn-hdr">
                <img src="ikon_share.png" alt="Share" width="22">
            </a>
        </div>

        <!-- Profile -->
        <div class="text-center mb-4">
            <img src="logo sushigo.png" alt="SushiGo" class="rounded-circle profile-img mb-2">
            <h3 class="mb-1" style="color: #000;" id="intro">SushiGo!!</h3>
            <p class=" medium" style="font-weight: 500;">One Price Sushi!</p>
        </div>

        <!-- Section 1 -->
        <p class="section-label text-center">OUR PROMOTION!</p>
        <a id="tombol" href="https://drive.google.com/file/d/1xcURVuNu8WrfOJnjddrosvGDe9qPEQtM/view" target="_blank"
            class="link-btn">
            <span>SPECIAL OFFER!</span>
            <i class="fa-solid fa-ellipsis-vertical right-icon"></i>
        </a>

        <!-- Section 2 -->
        <p class="section-label text-center">THE MENU!</p>
        <a href="https://drive.google.com/file/d/1MkGdqW1cAea3Fdwdj4DzVFEXuiJOefNV/view" target="_blank"
            class="link-btn">
            <span>SUSHIGO!</span>
            <!--click me-->
            <i class="fa-solid fa-ellipsis-vertical right-icon"></i>
        </a>

        <button class="btn btn-primary" onclick="showme();">Show Me</button>
        <button class="btn btn-primary" onclick="changeText();">Change Text</button>
        <button class="btn btn-primary" onclick="changeStyle();">Change Style</button>


        <!-- Section 3 -->
        <p class="section-label text-center">CONTACT US!</p>
        <a href="https://linktr.ee/ContactSushigo" target="_blank" class="link-btn">
            <span>CLICK HERE!</span>
            <i class="fa-solid fa-ellipsis-vertical right-icon"></i>
        </a>

        <!-- Footer -->
        <div class="text-center mt-5 mb-3">
            <a href="https://linktr.ee" target="_blank" class="join-btn mb-3 btn-light section-label">Join SushiGo!! on
                Linktree</a>
            <div class="footer-text">
                <a href="#">Cookie Preferences</a> •
                <a href="#">Report</a> •
                <a href="#">Privacy</a>
            </div>
        </div>

    </div>
</body>

</html>
