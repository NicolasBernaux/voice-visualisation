<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
        <title>Tittle</title>
        <link rel="stylesheet" href="assets/css/main.css">
    </head>
    <body>
    <?php '<p style="color:white;">Bonjour <p>' ?>
        <?php  if(!isset($_GET['name'])):?>   
            <form method="get" action="#">
                <label for='name'>Enter your Name :</label>
                <input type="text" name="name" id="name" placeholder="Nicolas">
                <input type="submit" value="Get In">
            </form>
        <?php else : ?>
            <div class="audio">
                <div class="line line1"></div>
                <div class="line line2"></div>
                <div class="line line3"></div>
                <div class="line line4"></div>
                <div class="line line5"></div>
                <div class="line line6"></div>
                <div class="line line7"></div>
                <div class="line line8"></div>
                <div class="line line9"></div>
                <div class="line line10"></div>
                <div class="line line11"></div>
                <div class="line line12"></div>
                <div class="line line13"></div>
                <div class="line line14"></div>
                <div class="line line15"></div>
                <div class="line line16"></div>
                <div class="line line17"></div>
                <div class="line line18"></div>
                <div class="line line19"></div>
                <div class="line line20"></div>
                <div class="line line21"></div>
                <div class="line line22"></div>
                <div class="line line23"></div>
                <div class="line line24"></div>
                <div class="line line25"></div>
                <div class="line line26"></div>
                <div class="line line27"></div>
                <div class="line line28"></div>
                <div class="line line29"></div>
                <div class="line line30"></div>
                <div class="line line31"></div>
                <div class="line line32"></div>
                <div class="line line33"></div>
                <div class="line line34"></div>
                <div class="line line35"></div>
                <div class="line line36"></div>
                <div class="line line37"></div>
                <div class="line line38"></div>
                <div class="line line39"></div>
                <div class="line line40"></div>
                <div class="line line41"></div>
                <div class="line line42"></div>
                <div class="line line43"></div>
                <div class="line line44"></div>
                <div class="line line45"></div>
                <div class="line line46"></div>
                <div class="line line47"></div>
                <div class="line line48"></div>
                <div class="line line49"></div>
                <div class="line line50"></div>
                <div class="line line51"></div>
                <div class="line line52"></div>
                <div class="line line53"></div>
                <div class="line line54"></div>
                <div class="line line55"></div>
                <div class="line line56"></div>
                <div class="line line57"></div>
                <div class="line line58"></div>
                <div class="line line59"></div>
                <div class="line line60"></div>
                <div class="line line61"></div>
                <div class="line line62"></div>
                <div class="line line63"></div>
                <div class="line line64"></div>
                <div class="line line65"></div>
                <div class="line line66"></div>
                <div class="line line67"></div>
                <div class="line line68"></div>
                <div class="line line69"></div>
                <div class="line line70"></div>
                <div class="line line71"></div>
                <div class="line line72"></div>
                <div class="line line73"></div>
                <div class="line line74"></div>
                <div class="line line75"></div>
                <div class="line line76"></div>
                <div class="line line77"></div>
                <div class="line line78"></div>
                <div class="line line79"></div>
                <div class="line line80"></div>
                <div class="line line81"></div>
                <div class="line line82"></div>
                <div class="line line83"></div>
                <div class="line line84"></div>
                <div class="line line85"></div>
                <div class="line line86"></div>
                <div class="line line87"></div>
                <div class="line line88"></div>
                <div class="line line89"></div>
                <div class="line line90"></div>
                <div class="line line91"></div>
                <div class="line line92"></div>
                <div class="line line93"></div>
                <div class="line line94"></div>
                <div class="line line95"></div>
                <div class="line line96"></div>
                <div class="line line97"></div>
                <div class="line line98"></div>
                <div class="line line99"></div>
                <div class="line line100"></div>
                 <?php echo '<div class="text">'.$_GET['name'].'</div>'; ?>
            </div>
        <?php endif ?>
        <script src="assets/js/script.js"></script>
    </body>
</html>