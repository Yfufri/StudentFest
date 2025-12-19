<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phototèque - StudentFest</title>
    <link rel="stylesheet" href="assets/css/valeur.css">
</head>
<body>
    <?php include 'header.php'; ?>
    
    <main class="photo-container">
        <section class="photo-intro">
            <h1>Phototèque</h1>
            <p>Découvrez les moments inoubliables des différentes dates du festival</p>
        </section>

        <table class="photo-table">
            <tr>
                <td class="photo1">
                    <h2>Festival 2018</h2>
                    <img src="assets/photothèque1.jpg" alt="image photothèque1">
                </td>
                <td class="photo2">
                    <h2>Festival 2021</h2>
                    <img src="assets/photothèque2.jpg" alt="image photothèque2">
                </td>
            </tr>
            <tr>
                <td class="photo3">
                    <h2>Festival 2022</h2>
                    <img src="assets/photothèque3.jpg" alt="image photothèque3">
                </td>
                <td class="photo4">
                    <h2>Festival 2023</h2>
                    <img src="assets/photothèque4.jpg" alt="image photothèque4">
                </td>
            </tr>
            <tr>
                <td class="photo5">
                    <h2>Festival 2024</h2>
                    <img src="assets/photothèque5.jpg" alt="image photothèque5">
                </td>
            </tr>
        </table>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>