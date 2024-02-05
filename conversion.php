<?php
// (A) LOAD MPDF
require "vendor/autoload.php";
$mpdf = new \Mpdf\Mpdf();
// $mpdf = new \Mpdf\Mpdf(["orientation" => "L"]); // if you want landscape orientation

// (B) OPTIONAL META DATA + PASSWORD PROTECTION
$mpdf->SetTitle("Document Title");
$mpdf->SetAuthor("Jon Doe");
$mpdf->SetCreator("Code Boxx");
$mpdf->SetSubject("Demo");
$mpdf->SetKeywords("Demo", "Testing");
// $mpdf->SetProtection([], "user", "password");

// (C) THE HTML
$html = "<html>
<head>
  <style>
    #test{ background:#ff0000; }
    #atable{ border:1px solid #00ff00; }
  </style>
</head>
<body>
  <h1>Title</h1>
  <p id='test'>Hello world!</p>
  <table id='atable'>
    <tr><td>A Table</td></tr>
  </table>
</body>
</html>";
// $html = file_get_contents("PAGE.HTML"); // or read from file

// (D) WRITE HTML TO PDF
$mpdf->WriteHTML($html);

// (E) OUTPUT
$mpdf->Output(); // directly show in browser
// $mpdf->Output("demo.pdf", "D"); // force download
// $mpdf->Output("demo.pdf"); // save to file on server
