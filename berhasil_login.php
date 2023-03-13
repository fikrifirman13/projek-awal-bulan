<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="mycsss.css">
    <title>fikri firmansyah</title>
</head>

<body>
    <?php include "menu2.php"; ?>
    <!-- jumbo tron -->
    <section class="jumbotron text-center">
        <td><img src="img/logo2.png" alt="logo" width="220" class="rounded-circle img-thumbnail" /></td>
        <?php echo "<h1>Selamat Datang, " . $_SESSION['username'] . "!" . "</h1>"; ?>
        <p class="lead"></p>
        <div class="container main-btn py-4 px-2 ">
            <a href="index.php" class="btn testi ">home</a>
            <a href="tentang kami.php" class="btn testi">tentang kami</a>
            <a href="logout.php" class="btn testi">logout</a>
        </div>
    </section>
    <!-- akhir jumbo tron -->
    <?php include "isi login.php"; ?>
    <?php include "footer.php"; ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init(

    );
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.2/TextPlugin.min.js"></script>
<script>
    gsap.registerPlugin(TextPlugin);
    gsap.to('.lead', {
        duration: 4,
        delay: 1.5,
        text: 'selamt datang'
    })
    gsap.from('.jumbotron img', {
        duration: 1,
        y: -100,
        opacity: 0,
        ease: 'back'
    })
    gsap.from('.display-4', {
        duration: 1,
        x: '-50',
        opacity: 0,
        delay: 0.5,
        ease: 'back'
    })
</script>

</html>