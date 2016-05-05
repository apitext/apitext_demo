<!DOCTYPE HTML>
<html>

  <head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta name="description" content="apitext : An API that has an appetite for TEI-XML Transcriptions">

    <link rel="stylesheet" type="text/css" media="screen" href="stylesheets/stylesheet.css">

    <title>apitext</title>
  </head>

  <body>

    <!--PHP functions-->
    <?php
      
      function write_to_xml() {
        $file = "tei_xml_file.xml";
        file_put_contents('tei_xml_file.xml', $_POST['text']);
      }

    ?>

    <!-- HEADER -->
    <div id="header_wrap" class="outer">
      <header class="inner">
        <h1 id="project_title"><img src="images/logo_apitext_arrow.png"/>apitext</h1>
        <h2 id="project_tagline">An API that has an appetite for TEI-XML Transcriptions</h2>
      </header>
    </div>

    <!-- TEXT BOX -->
    <div id="text_box">
      <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <font color="black">Paste your TEI-XML contents in the box below:</font>
        <textarea name="text" cols="150" rows="10">
        <?php

        ?>
        </textarea>
        <br>
        <input type="submit" value="Submit" name="xml_submit">
      </form>
    </div>

    <div id="instructions">
      <p>This is a demo application created to help illustrate the different views being returned by our API.</p>
      <p> Just paste any valid TEI-XML text up to 500 lines long, and 150 columns, then press "Submit" to see the markup, annotations, text, and html views.</p>
    </div>

    <!-- FOOTER  -->
    <div id="footer_wrap" class="outer">
      <footer class="inner"></footer>
    </div>

  </body>

</html>
