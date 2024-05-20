<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Saya</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main>
    <section id="Introduction">
        <h1>Introduction</h1>
        <p>Perkenalkan nama saya Gabriel Pangemanan. <br> 
        Saya adalah Mahasiswa di UNSRAT, Prodi Teknik Informatika. <br>
        Hobi saya adalah Mendengar Musik, Vokal & Memandang keindahan alam.</p>
    </section>

    <section id="gallery">
        <h1>Gallery</h1>
        <div class="image-container">
            <?php
            // Meng-include file koneksi database
            include 'db.php';

            // Ambil data dari tabel gallery
            $sql = "SELECT image_path, description FROM gallery";
            $result = $conn->query($sql);

            // Periksa jika ada data
            if ($result->num_rows > 0) {
                // Tampilkan data per baris
                while($row = $result->fetch_assoc()) {
                    echo '<div class="image-wrapper">';
                    echo '<img src="images/' . $row["image_path"] . '" alt="' . $row["description"] . '" width="250" height="180">';
                    echo '<div class="image-text">';
                    echo '<h2>' . $row["description"] . '</h2>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo "Tidak ada gambar ditemukan.";
            }

            // Tutup koneksi
            $conn->close();
            ?>
        </div>
    </section>

    <section id="Blog">
        <h1>Blog</h1>
        <article class="article-music">  
        <article>
            <h2>1. Musik~Lagu</h2>
            <p>"Musik: Bahasa yang Membebaskan Jiwa dan Menghanyutkan Perasaan"</p>
            <p>Musik bukan sekadar bunyi-bunyian; ia adalah bahasa yang bisa dimengerti oleh siapa pun, di mana pun & kapan pun.</p>
            <p>Musik hadir sebagai teman setia dalam setiap momen kehidupan, memberi warna pada setiap emosi dan menyulam kenangan yang tak terlupakan.</p>
            <p>Dalam melodi dan liriknya, musik memiliki kekuatan untuk membebaskan jiwa dan menghanyutkan perasaan, menjadikannya aspek yang tak terpisahkan dari pengalaman manusia.</p>
        </article>
    </div>

    <article class="article-langit">   
        <article>
            <h2>2. Alam (Langit)</h2>
            <p>"Langit: Keindahan Senja"</p>
            <p>Langit senja dan fenomena Golden Hour serta Blue Hour menghadirkan keajaiban alam yang memukau.</p>
            <p>Saat matahari merosot di ufuk barat, langit berubah warna dengan dramatis, dari biru cerah menjadi oranye, merah muda, dan ungu yang memukau. Blue Hour membawa ketenangan biru yang mendalam, sementara Golden Hour memancarkan cahaya emas lembut saat matahari terbit atau terbenam.</p>
            <p>Keindahan langit senja dan momen-momen emas ini telah menginspirasi seniman, penulis, dan fotografer selama berabad-abad, memberikan kenangan yang abadi dan mendalam bersama orang-orang terkasih, dan mengajarkan kita untuk menghargai setiap momen berharga dalam kehidupan ini, serta mengingatkan akan keindahan dan keajaiban alam yang selalu hadir di sekitar kita.</p>
            <p>*2 Foto langit yang saya miliki di Gallery itu merupakan foto yang saya ambil saat fenomena Blue Hour dan Golden Hour sedang berlangsung~</p>
    </div>
        </article>

    <article class="article-vocal">
                <article>
            <h2>3. Vokal</h2>
            <p>"Keajaiban Vokal: Mengarungi Melodi dan Membentuk Ritme"</p>
            <p>Vokal adalah instrumen paling mendalam dan puitis dalam dunia musik.</p>
            <p>Dari nada yang lembut hingga seruan yang menggetarkan, suara manusia mampu merangkai emosi dan menceritakan kisah yang tak terlupakan.</p>
            <p>Menyanyi lagu adalah ekspresi paling mendasar dari vokal, di mana suara kita menjadi alat untuk mengungkapkan perasaan dan merangkai melodi yang indah. Dalam menyanyi, kita menemukan kebebasan untuk mengekspresikan diri, memancarkan kegembiraan, kesedihan, atau bahkan harapan melalui setiap nada dan lirik.</p>
            <p>Namun, vokal tidak hanya sebatas menyanyi. Seiring berkembangnya waktu, variasi dalam vokal pun mengalami evolusi. Salah satu bentuk perkembangan yang menarik adalah beatbox. Beatbox melibatkan penggunaan mulut, bibir, lidah, dan suara-suara alamiah lainnya untuk menciptakan ritme dan suara yang kompleks, menciptakan musik yang unik dan mengasyikkan.</p>
            <p>*Grand Beatbox Battle adalah salah satu event terbesar di dunia beatbox yang diselenggarakan oleh Swissbeatbox, menjadi ajang di mana para beatboxer dari seluruh dunia berkumpul untuk bersaing dan memperlihatkan kemampuan terbaik mereka. Dengan vokal, manusia tidak hanya merintis melodi, tetapi juga memperkaya dunia musik dengan inovasi dan kreativitas yang tak terbatas.</p>
        </div>
        </article>
    </section>

    <div class="video-container">
        3 Musik~Lagu Favorit saya <br> 
    </div>

    <div class="video-container1">
        <div class="thumbnail">
            <p>1. Kubbi // Hunter</p>
            <iframe width="300" height="170" src="https://www.youtube.com/embed/swoWE8nqJGw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="thumbnail">
            <p>2. Jamatar - Two Moons ft. Geyser</p>
            <iframe width="300" height="170" src="https://www.youtube.com/embed/w0vzhBEJhnE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="thumbnail">
            <p>3. Julia Michaels - A Wish Worth Making</p>
            <iframe width="300" height="170" src="https://www.youtube.com/embed/3-Gg4Kn1L7M" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
    </p>
</article>
</section>

    <section id="contact">
        <h1>Contact</h1>
        <a href="https://www.instagram.com/skyprolegend_gp?igsh=MWIzZmkwMTY0amk0ag=="
        target="_blank">Instagram</a>

        <br>

        <img src="images/ig.jpg" alt="Foto Instagram" width="200" height="200">
        <br> <br>
        Gmail: gabriel123pangemanan@gmail.com
    </section>
</main>

<script src="javascript.js"></script>
</body>
<footer>
    <
