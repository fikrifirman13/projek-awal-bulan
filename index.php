<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="mycsss.css">
    <title>FIKRI PRODUCK</title>
</head>

<body>
    <?php include "menu.php"; ?>
    <!-- jumbo tron -->
    <section class="jumbotron text-center">
        <td><img src="img/logo2.png" alt="logo" width="220" class="rounded-circle img-thumbnail" /></td>
        <h1 class="display-4">FIKRI PRODUCT</h1>
        <p class="lead"></p>
        <div class="container main-btn py-4 px-2 mb-3">
            <a href="index.php" class="btn testi ">home</a>
            <a href="login.php" class="btn testi">login</a>
            <a href="tentang kami.php" class="btn testi">tentang kami</a>
            <a href="register.php" class="btn testi">registrasi</a>
        </div>
    </section>
    <?php include "isi.php"; ?>
    <!-- akhir jumbo tron -->
    <?php include "footer.php"; ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
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
        text: 'selamat datang'
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