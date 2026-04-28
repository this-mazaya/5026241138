<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap 4 Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            position: relative;
        }

        .navbar {
            background: rgba(0, 0, 0, 0.85);
            backdrop-filter: blur(10px);
        }

        .navbar-brand {
            font-weight: 600;
            font-size: large;
        }

        .section-content {
            max-width: 1000px;
            margin: auto;
            text-align: center;
        }

        #section1 {
            background: linear-gradient(to right, #e3f2fd, #ffffff);
        }

        #section2 {
            background: #f4f8fb;
        }

        #section3 {
            background: linear-gradient(to right, #eef5ff, #f9fbff);
        }

        .profile-img {
            width: 200px;
            border-radius: 50%;
            margin-bottom: 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .grid {
            margin-top: 40px;
        }
    </style>
</head>


<body data-spy="scroll" data-target=".navbar" data-offset="70">
    <nav class="navbar navbar-expand-sm navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Mazaya</a>
            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#section1">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#section2">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#section3">Skills</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="section1" class="section-content">
        <h1>Mazaya Zharfani Erfindri</h1>
        <img src="data:image/png;base64,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"
            class="profile-img">
        <p>
            Mahasiswa Sistem Informasi | Tertarik pada teknologi, UI/UX, dan pengembangan diri
        </p>
        <p>Email: erfindrimazaya@gamil.com
            <br> Instagram: @mazayazharfani
        </p>
    </div>

    <div id="section2" class="section-content">
        <h1>Tentang Saya</h1>
        <p>Saya adalah mahasiswa Sistem Informasi yang memiliki ketertarikan dalam dunia teknologi, khususnya dalam
            bidang UI/UX dan pegembangan digital. Sejak awal perkuliahan, saya berusaha untuk tidak hanya memahami
            materi secara akademis, tetapi juga mengembangkan kemampuan praktis yang relevan dengan kebutuhan undustri
            saat ini.</p>
        <p> Selain itu, saya juga aktif mencari pengalaman melalui organisasi, kepanitiaan, dan berbagai kegiatan
            pengembangan diri. Saya percaya bahwa lingkungan kolaboratif dapat membantu saya memingkatkan kemampuan
            komunikasi, kerja tim, serta kemampuan problem solving dalam situasi nyata</p>
    </div>

    <div id="section3" class="section-content">
        <h1>Pengalaman & Keahlian</h1>
        <div class="row grid">
            <div class="col-md-4">
                <h5>UI/UX Design</h5>
                <p>Mendesain tampilan aplikasi yang user-friendly dan menarik.</p>
            </div>
            <div class="col-md-4">
                <h5>Programming</h5>
                <p>Belajar Python, HTML, CSS, dan dasar pengembangan web.</p>
            </div>
            <div class="col-md-4">
                <h5>Organization</h5>
                <p>Aktif dalam kegiatan organisasi dan kepanitiaan kampus.</p>
            </div>
        </div>
</body>

</html>
