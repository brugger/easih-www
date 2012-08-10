<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-gb">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/styles.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/sifr.css" type="text/css">
<script src="javascript/sifr.js" type="text/javascript"></script>
<script src="javascript/sifr-config.js" type="text/javascript"></script>
<title>BioInformatics - EASIH</title>
<meta name="Keywords" content="EASIH - The Eastern Sequence and Informatics Hub"  />
<meta name="Description" content="EASIH - The Eastern Sequence and Informatics Hub"  />
<meta name="language" content="en" />
</head>

<body>
<?php
	include_once("header.php");
?>
<div id="contentcontainer">
  <div id="contentarea">
	<div id="contentbanner"><h1>Bioinformatics at The EASIH</h1></div>
        <h3 class="indent">The sequencing projects run at EASIH are supported by an experienced team of bioinformaticians to help with the analysis and interpretation of the the data.  Whether you have your own bioinformaticians and just want the data or have no experience of analysing next generation sequencing data we can help get the most out of your experiment.</h3>
	  <div class="leftcol">
		  <h4>Cambridge University High Performance Computing Service <a href="http://www.hpc.cam.ac.uk/" target="_blank">(HPCS)</a>.</h4>
	    <p>As the EASIH is part of the University of Cambridge we have access to one of the best computing facilities in the country.  The system has in total 2340 3.0 GHz Intel Woodcrest cores with 4.6 TB of total memory and is regularly upgraded to meet the growing demands of its users.  This not only gives us a flexible compute service but also a very cost effective one, meaning we can save you money when it comes to analysing your data.</p>
	    <h4>Software</h4>

	    <h4>Publicly Available Software.</h4>
	    <p>In addition to the analysis tools provided by vendors we also use a wide range of publicly available software tools for read mapping, variation determination, peak calling and other applications.  We are happy to discuss analysis requirements in the planning stage of your experiment.</p>
	    <h4>Data security, delivery and storage.</h4>
	    <p>We appreciate that your data is precious and may include results for clinical samples.  During the generation and analysis of data at EASIH we always ensure security of that information is maintained.  Delivery of your data will be determined based on the volume of data to be returned but may be via secure FTP site, encrypted hard drive or other appropriate method.  Should your data need  to be archived in a central repository such as <a href="http://www.ebi.ac.uk/ena/about/about" target="_blank">&quot;European Nucleotide Archive&quot;</a> we can assist with 
that. Our standard procedure is to store customer data locally for one month but if you would like us to keep it longer we can arrange for secure, backed up storage.</p>
	    <h4><a href="software.php">Software - Written by EASIH</a></h4>
	    <p>In addition to using third party tools, we developed a tool called "VcfView" at EASIH. </p>
    </div>
	  <div class="rightcol">
       	  <img class="border" src="images/hpcs.jpg" width="281" height="206" border="0" alt="One of the best computing facilities in the country" />
        <blockquote>One of the best computing facilities in the country</blockquote>
       	  <img class="border" src="images/igv.jpg" width="282" height="176" border="0" alt="DNA double helix molecule" />
          <blockquote>Sequence alignments in <a href="http://www.broadinstitute.org/igv/" target="_blank">IGV</a></blockquote>
    <img class="border" src="images/artemis.jpg" width="282" height="226" border="0" alt="DNA double helix molecule" />
          <blockquote>Comparing genomes in <a href="http://www.sanger.ac.uk/resources/software/artemis/" target="_blank">Artemis</a></blockquote>
    </div>
   	<div class="clearfloat"></div>
    </div>
</div>
<?php
	include_once("footer.php");
?>
</body>
</html>

