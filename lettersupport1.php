<?php
  function authenticate() {
    header('WWW-Authenticate: Basic realm="�п�J�b���K�X"');
    header('HTTP/1.0 401 Unauthorized');
    echo "You must enter a valid login ID and password to access this resource\n";
    exit;
  }

 
  if (!isset($_SERVER['PHP_AUTH_USER']) || $_SERVER['PHP_AUTH_USER']!="oneonone" || $_SERVER['PHP_AUTH_PW']!="oneonone") {
	  authenticate();
  } 
  else {
	 // echo "<META HTTP-EQUIV='REFRESH' CONTENT='0; url=a.pdf'>";
    echo "<table width='70%' style='text-align:center' align='center' border=1>";
	echo "<tr><td>Name</td><td>Country</td><td>Department</td><td>Download</td></tr>";
	echo "<tr><td>Roy Pea</td><td>the United States of America (U.S.A.)</td><td>Stanford University </td><td><a href='supperletter/Roypea.pdf'><img src='pdf-ico.gif'></a></td></tr>";

	echo "<tr><td>Jeremy Roschelle</td><td>the United States of America (U.S.A.)</td><td>Stanford Center for Innovations in Learning </td><td><a href='supperletter/Jeremy.pdf'><img src='pdf-ico.gif'></a></td></tr>";

	echo "<tr><td>Nicolas Balacheff</td><td>France</td><td>Universite Joseph Fourier</td><td><a href='supperletter/Nicolas.pdf'><img src='pdf-ico.gif'></a></td></tr>";

	echo "<tr><td>Elliot Soloway</td><td>the United States of America (U.S.A.)</td><td>University of Michigan </td><td><a href='supperletter/Elliot.pdf'><img src='pdf-ico.gif'></a></td></tr>";

	echo "<tr><td>Cathie Norris</td><td>the United States of America (U.S.A.)</td><td>University of North Texas </td><td><a href='supperletter/Cathie.pdf'><img src='pdf-ico.gif'></a></td></tr>";

	echo "<tr><td>Marlene Scardamalia</td><td>Canada</td><td>University of Toronto</td><td><a href='supperletter/Marlene.pdf'><img src='pdf-ico.gif'></a></td></tr>";

	echo "<tr><td>Kinshuk</td><td>New Zealand</td><td>Massey University </td><td><a href='supperletter/Kinshuk.pdf'><img src='pdf-ico.gif'></a></td></tr>";

	echo "<tr><td>Yoneo Yano</td><td>Japan</td><td>University of Tokushima</td><td><a href='supperletter/Yoneo.pdf'><img src='pdf-ico.gif'></a></td></tr>";

        echo "<tr><td>Hiroaki Ogata</td><td>Japan</td><td>University of Tokushima</td><td><a href='supperletter/Yoneo.pdf'><img src='pdf-ico.gif'></a></td></tr>";
	
         echo "<tr><td>H. Ulrich Hoppe</td><td>Germany</td><td>University of Duisburg-Essen</td><td><a href='supperletter/Hoppe.pdf'><img src='pdf-ico.gif'></a></td></tr>";
        
        echo "</table>";
  }
?>
