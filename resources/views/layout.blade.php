<!DOCTYPE html>
<html lang="en">

<head>
    <title>Layout dengan Grid System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        #base {
            min-height: 100vh;
        }

        .wrapper-gambar {
            position: relative;
        }

        .gambar-kiri {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
        }

        .area-konten {
            padding-top: 120px;
            padding-bottom: 80px;
            padding-left: 120px;
            padding-right: 80px;
        }

        .judul {
            font-weight: 600;
        }

        .teks {
            color: rgb(63, 91, 184);
            line-height: 1.7;
            margin-top: 15px;
        }
    </style>
</head>


<body>
    <div class="container-fluid">
        <div class="row align-items-stretch" id="base">
            <div class="col-md-4 wrapper-gambar">
                <img src="https://github.com/this-mazaya/FE5026241138/blob/main/Image.png?raw=true" alt="gambar"
                    class="gambar-kiri">
            </div>
            <div class="col-md-8 area-konten">
                <h1>Light, Fast & Powerful</h1>
                <p class="teks">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                    dolor. Aenean
                    massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                </p>
                <p class="teks">mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla
                    consequat massa
                    quis
                    enim.</p>

                <div class="row">
                    <div class="col-md-6">
                        <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSV9eI9JX47qGlKEiI9AWUZjZGumAZfRLJEmF_pqM7Ge5KnFp8K"
                            width="45">
                        <h5>Title Goes Here</h5>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. <br>Aenean commodo ligula eget
                            dolor.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSV9eI9JX47qGlKEiI9AWUZjZGumAZfRLJEmF_pqM7Ge5KnFp8K"
                            width="45">
                        <h5>Title Goes Here</h5>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. <br>Aenean commodo ligula eget
                            dolor.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSV9eI9JX47qGlKEiI9AWUZjZGumAZfRLJEmF_pqM7Ge5KnFp8K"
                            width="45">
                        <h5>Title Goes Here</h5>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. <br>Aenean commodo ligula eget
                            dolor.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSV9eI9JX47qGlKEiI9AWUZjZGumAZfRLJEmF_pqM7Ge5KnFp8K"
                            width="45">
                        <h5>Title Goes Here</h5>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. <br>Aenean commodo ligula eget
                            dolor.
                        </p>
                    </div>


                </div>
            </div>

        </div>
    </div>
</body>

</html>
