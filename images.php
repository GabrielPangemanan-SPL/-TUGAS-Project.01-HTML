<?php include 'db.php';

// Fetch gallery images
$gallery_sql = "SELECT * FROM gallery";
$gallery_result = $conn->query($gallery_sql);

// Fetch blog posts
$blog_sql = "SELECT * FROM blog";
$blog_result = $conn->query($blog_sql);
?>

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
            if ($gallery_result->num_rows > 0) {
                while($row = $gallery_result->fetch_assoc()) {
                    echo '<div class="image-wrapper">';
                    echo '<img src="' . $row["image_path"] . '" alt="' . $row["description"] . '" width="250" height="180">';
                    echo '<div class="image-text"><h2>' . $row["description"] . '</h2></div>';
                    echo '</div>';
                }
            } else {
                echo "No images found.";
            }
            ?>
        </div>
    </section>

    <section id="Blog">
        <h1>Blog</h1>
        <?php
        if ($blog_result->num_rows > 0) {
            while($row = $blog_result->fetch_assoc()) {
                echo '<article>';
                echo '<h2>' . $row["title"] . '</h2>';
                echo '<p>' . $row["content"] . '</p>';
                echo '</article>';
            }
        } else {
            echo "No blog posts found.";
        }
        ?>
    </section>
</main>
<script src="javascript.js"></script>
</body>
</html>

<?php
$conn->close();
?>
