<?php
    include 'session.php';
    require 'db.php';
    include 'setting.php';
    include 'header.php';
    $_SESSION['message'] = null;
?>

<div class="heroheader"> </div>
<div class="container" style="margin-top: 0px;">
<?php if ( isset($_SESSION['token']) && $_SESSION['token'] = true) { ?>
        
        <h2>Bienvenue dans la Home. Tu es co.</h2>

<?php } else { ?>

        <h2>Bienvenue dans la Home. Tu n'es pas co.</h2>    
        
<?php } ?>

<br><br>
<p style="font-size: 20px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut numquam, non eius ducimus laudantium neque ea ab omnis eveniet! Aliquam excepturi expedita temporibus facilis omnis accusamus dolores obcaecati ad unde! lore
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, et totam atque nobis aspernatur fuga incidunt quibusdam ad ullam adipisci, ex, explicabo dolore aliquam quisquam itaque iusto ipsam molestiae consectetur?
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi ipsam ipsum eaque. Maiores perspiciatis accusantium at veritatis rerum repellat dolores excepturi nam et nobis amet, aliquid quaerat sunt atque numquam.
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, et totam atque nobis aspernatur fuga incidunt quibusdam ad ullam adipisci, ex, explicabo dolore aliquam quisquam itaque iusto ipsam molestiae consectetur?
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi ipsam ipsum eaque. Maiores perspiciatis accusantium at veritatis rerum repellat dolores excepturi nam et nobis amet, aliquid quaerat sunt atque numquam.
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, et totam atque nobis aspernatur fuga incidunt quibusdam ad ullam adipisci, ex, explicabo dolore aliquam quisquam itaque iusto ipsam molestiae consectetur?
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi ipsam ipsum eaque. Maiores perspiciatis accusantium at veritatis rerum repellat dolores excepturi nam et nobis amet, aliquid quaerat sunt atque numquam.
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, et totam atque nobis aspernatur fuga incidunt quibusdam ad ullam adipisci, ex, explicabo dolore aliquam quisquam itaque iusto ipsam molestiae consectetur?
</p>
<br>

<?php include 'footer.php'; ?>
