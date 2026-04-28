{{-- Tugas Pertemuan 8 - Pengaplikasian Laravel | Mazaya Zharfani Erfindri | PWEB (B) --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <title>My Laravel Pages ♡</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            background: linear-gradient(to bottom, #eef5ff, #dcecff);
            min-height: 100vh;
            color: #4b5d7a;
        }

        .main-box {
            background-color: rgba(255, 255, 255, 0.75);
            border-radius: 28px;
            padding: 2.5rem;
            margin-top: 3rem;
            margin-bottom: 3rem;
            box-shadow: 0 8px 24px rgba(120, 160, 255, 0.15);
        }

        .title {
            font-weight: 700;
            color: #5c7cfa;
            font-size: 2.2rem;
        }

        .subtitle {
            color: #7d8fb3;
            font-size: 1rem;
        }

        .menu-item {
            display: block;
            background-color: #889ec5;
            color: #222b3b;
            text-decoration: none;
            padding: 1rem 1.3rem;
            border-radius: 18px;
            margin-bottom: 1rem;
            font-weight: 600;
            border: 2px solid #253b68;
        }

        .menu-item:hover {
            background-color: #ffe6f2;
            border-color: #ffb6d5;
            color: #d95c9f;
            text-decoration: none;
        }

        .mini-btn {
            border-radius: 14px;
            font-weight: 600;
            border: 2px solid #253b68;
            background-color: #889ec5;
            color: #222b3b;
        }

        .mini-btn:hover {
            background-color: #ffe6f2;
            border-color: #ffb6d5;
            color: #d95c9f;
        }

        .emoji {
            margin-right: 0.5rem;
        }

        .footer-note {
            font-size: 0.9rem;
            color: #90a0c0;
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="main-box mx-auto col-lg-8">

            <!-- Header -->
            <div class="text-center mb-5">
                <h1 class="title">⋆.˚✮ My Laravel Pages ✮˚.⋆</h1>
                <p class="subtitle">
                    collection of web programming assignments & practice pages  •ﻌ•
                </p>
            </div>

            <a href="{{ url('/contoh') }}" class="menu-item">
                <span class="emoji">˚˖𓍢ִ໋🦢˚</span> Contoh
            </a>

            <a href="{{ url('/intro') }}" class="menu-item">
                <span class="emoji">⋆ 𖤓 ⋆</span> Intro
            </a>

            <a href="{{ url('/layout') }}" class="menu-item">
                <span class="emoji">⋆👜°</span> Layout
            </a>

            <div class="row mb-3">
                <div class="col-6 pr-2">
                    <a href="{{ url('/news') }}" class="btn mini-btn btn-block">
                        𓆩⚝𓆪 News
                    </a>
                </div>

                <div class="col-6 pl-2">
                    <a href="{{ url('/news1') }}" class="btn mini-btn btn-block">
                        𓆩♡𓆪 News 1
                    </a>
                </div>
            </div>

            <a href="{{ url('/responsive') }}" class="menu-item">
                <span class="emoji">🏷️⋆｡</span> Responsive
            </a>

            <a href="{{ url('/template') }}" class="menu-item">
                <span class="emoji">𖤐</span> Template
            </a>

            <a href="{{ url('/indx') }}" class="menu-item">
                <span class="emoji">🌿༘⋆</span> Index
            </a>

            <a href="{{ url('/linktree') }}" class="menu-item">
                <span class="emoji">જ⁀➴</span> Linktree
            </a>

            <a href="{{ url('/pert6') }}" class="menu-item">
                <span class="emoji">ִ🎀𓂃 ࣪˖</span> Pertemuan 6
            </a>

            <a href="{{ url('/pert5') }}" class="menu-item">
                <span class="emoji">˚˖𓍢ִ໋❀</span> Pertemuan 5
            </a>

            <!-- Footer -->
            <div class="text-center mt-5">
                <p class="footer-note mb-0">
                    made with 💗 by Mazaya Zharfani Erfindri •ᴗ• 𖾕𖾝꙼ᩚ𛲕𖾟
                </p>
            </div>

        </div>

    </div>

</body>

</html>
