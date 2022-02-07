<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="img/favicon.ico">
        <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
        <link rel="stylesheet" href="css/style.css">
        <title>Profile</title>
    </head>

    <body>
        <header id="header" class="wrapper">
            <h1 class="site-title">
                <a href="index.php"><img src="img/logo.svg" alt="Profile"></a>
            </h1>
            <nav>
                <ul>
                    <li><a href="#about">About</a></li>
                    <li><a href="#bicycle">bicycle</a></li>
                </ul>
            </nav>
        </header>

        <main>
            <!-- メインビジュアル -->
            <div id="mainvisual">
                <img src="img/mainvisual.jpg" alt="main">
            </div>

                <!-- Aboutセクション -->
                <section id="about" class="wrapper">
                    <h2 class="section-title">About</h2>
                    <div class="content">
                        <img src="img/about.jpg" alt="about">
                        <div class="text">
                            <h3 class="content-title">タイトル</h3>
                            <p>
                                テキストテキストテキストテキストテキスト<br>
                                テキストテキストテキストテキストテキスト<br>
                                テキストテキストテキストテキストテキスト
                            </p>
                        </div>
                    </div>
                </section>

                <!-- bicycleセクション -->
                <section id="bicycle" class="wrapper">
                    <h2 class="section-title">Bicycle</h2>
                    <ul>
                        <li>
                            <img src="img/bicycle1.jpg" alt="bicycle1">
                            <h3 class="content-title">タイトル</h3>
                            <p>テキストテキストテキスト</p>
                        </li>
                        <li>
                            <img src="img/bicycle2.jpg" alt="bicycle2">
                            <h3 class="content-title">タイトル</h3>
                            <p>テキストテキストテキスト</p>
                        </li>
                        <li>
                            <img src="img/bicycle3.jpg" alt="bicycle3">
                            <h3 class="content-title">タイトル</h3>
                            <p>テキストテキストテキスト</p>
                        </li>
                    </ul>
                </section>

        </main>
        <footer id="footer">
            <p>&copy; <?php echo date('Y') ?> Profile</p>
        </footer>
    </body>
</html>