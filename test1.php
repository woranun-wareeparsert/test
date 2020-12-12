<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
  <div id="w">
    <header id="title">
      <h1>Diary : <?php echo $_POST['Diary'];?></h1>
    </header>
    <div id="page">
    <h1 style="text-align:center;"><?php echo $_POST['Date'];?><br><br>
    <?php echo $_POST['Story'];?><br>
    <?php echo $_POST['feeling'];
    $text = $_POST['feeling'];
    if ($text=="sad")
    {
        echo "สู้ๆ";
    }
    elseif ($text=="normal")
    {
        echo "ทำต่อไป";
    }
    elseif ($text=="happy")
    {
        echo "ดีแล้วนะ";
    }
    ?></h1>
    <h1 align="right"> Form : <?php echo $_POST['name'];?></h1>
    </div>
  </div>

  <style>
  @import url(https://fonts.googleapis.com/css?family=Fredoka+One);
html,
body,
div,
span,
applet,
object,
iframe,
h1,
h2,
h3,
h4,
h5,
h6,
p,
pre,
a,
abbr,
acronym,
big,
cite,
code,
dfn,
em,
img,
ins,
kbd,
q,
s,
samp,
small,
strike,
strong,
sub,
sup,
tt,
var,
b,
u,
i,
center,
dl,
dt,
dd,
ol,
ul,
li,
fieldset,
form,
legend,
caption,
tbody,
tfoot,
thead,
tr,
th,
td,
article,
aside,
canvas,
details,
embed,
figure,
figcaption,
footer,
header,
hgroup,
nav,
output,
ruby,
section,
summary,
mark,
video {
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 200%;
    font: inherit;
    vertical-align: baseline;
    outline: none;
    -webkit-font-smoothing: antialiased;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

html {
    overflow-y: scroll;
}

body {
    font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
    font-size: 62.5%;
    line-height: 1;
    color: #414141;
    background: #caccf7 url('https://i.imgur.com/Syv2IVk.png');
    /* https://subtlepatterns.com/old-map/ */
    padding: 25px 0;
}

h1 {
    font-family: 'Fredoka One', Helvetica, Tahoma, sans-serif;
    color: #ff6347;
    text-shadow: 1px 2px 0 #7184d8;
    font-size: 3.5em;
    line-height: 1.1em;
    padding: 6px 0;
    font-weight: normal;
}


/* page structure */

#w {
    display: block;
    width: 800px;
    margin: 0 auto;
}

#title {
    display: block;
    width: 100%;
    background: #95a6d6;
    padding: 10px 0;
    -webkit-border-top-right-radius: 6px;
    -webkit-border-top-left-radius: 6px;
    -moz-border-radius-topright: 6px;
    -moz-border-radius-topleft: 6px;
    border-top-right-radius: 6px;
    border-top-left-radius: 6px;
}

#page {
    display: block;
    background: #fff;
    padding: 250px 0;
}
</style>
</body>

</html>
