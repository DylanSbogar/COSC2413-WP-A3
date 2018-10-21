<footer>
  <div>&copy;
    <script>
    document.write(new Date().getFullYear());
    </script> Dylan Sbogar: s3718036 & Matthew Moloney: s3717566.<br>"Group Name"</br></div>
    <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
    <script src="tools.js"></script>
    <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    <div><button id='toggleDebugMode' onclick='toggleDebugMode()'>Toggle Debug Mode</button></div>
    <div id="debugScript">
      <?php
      function printMyCode() {
        $lines = file($_SERVER['SCRIPT_FILENAME']);
        echo "<pre class='mycode'>\n";
        foreach ($lines as $lineNo => $lineOfCode)
        printf("%3u: %1s \n", $lineNo, rtrim(htmlentities($lineOfCode)));
        echo "</pre>";
      }
      printMyCode();
      preShow($_POST);
preShow($_SESSION);
preShow($_GET);

      ?>

      <?php
      function preShow( $arr, $returnAsString=false ) {
        $ret = '<pre>' . print_r($arr, true) . '</pre>';
        if ($returnAsString)
        return $ret;
        else
        echo $ret;
      }


      ?>
      </php
    </div>
  </footer>
