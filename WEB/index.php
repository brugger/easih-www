<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-gb">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/styles.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/sifr.css" type="text/css" />
<script src="javascript/sifr.js" type="text/javascript"></script>
<script src="javascript/sifr-config.js" type="text/javascript"></script>
<title>EASIH - The Eastern Sequence and Informatics Hub</title>
<meta name="Keywords" content="EASIH - The Eastern Sequence and Informatics Hub"  />
<meta name="Description" content="EASIH - The Eastern Sequence and Informatics Hub"  />
<meta name="language" content="en" />
</head>

<body>
<?php
	include_once("header.php");
?>
<div id="contentcontainer">
	<div id="homebanner">
    	<h1>EASIH</h1>
        <h2>Part of Cambridge University</h2>
        <p>For <strong>fast</strong> and <strong>cost-effective production and analysis</strong> of large scale sequence-based datasets</p>
    </div>
    <div id="contentarea">
		<div class="leftcol"><h3>Subsequent to the completion of the Human Genome Project advances in genomic sequencing have led to a dramatic fall in time taken and cost to produce very large scale, high throughput sequence-based (HTS) datasets. <a href="http://www.cam.ac.uk" target="_blank">Cambridge University</a> and the cluster of closely-connected research Institutes in the region have a long and productive history in both the development and application of DNA sequencing technologies.</h3>
          <p>The creation of the Eastern Sequence and Informatics Hub (EASIH) based on major funding from the <a href="http://www.mrc.ac.uk" target="_blank">MRC</a>, University of Cambridge and the <a href="http://www.cuh.org.uk/research/biomedicalcampus/biomedical_index.html" target="_blank">NIHR Cambridge Biomedical Research Centre</a>, will enable researchers working in our region to utilise a crucial 21st-century research approach in their studies. In collaboration with the nearby <a href="http://www.ebi.ac.uk" target="_blank">European Bioinformatics Institute</a>, an international centre for sequence data analysis, EASIH will also provide researchers with access to the tools and protocols required to analyse these complicated and large-scale datsets, and in the design and implementation of projects.</p>
            <p>EASIH, based at the <a href="http://www.cuh.org.uk/addenbrookes/addenbrookes_index.html" target="_blank">Cambridge University Addenbrooke's Hospital</a>, has a research development and strategic aim to apply HTS to routine medical diagnostic uses, in particular in HLA typing in transplantation and cord blood stem cells, and re-sequencing of disease genes in collaboration with <a href="http://www.nhsbt.nhs.uk/" target="_blank">NHS Blood and Transplant</a> and NHS Regional Clinical Genetics Services.</p>
	    
            <p><a href="docs/EASIH_map.pdf"> [click for map]</a><br>EASIH<br>
	 University of Cambridge<br />
            Level 4, Laboratory Block
            Box 268 <br />
            Addenbrooke's Hospital<br>
	 Cambridge<br />	
            CB2 0QQ<br />
            UK </p>
            <p>Tel: +44 (0)1223 746768 <br />
            Fax: +44 (0)1223 761086 <br />
            Email: <a href="mailto:enquiries@easih.ac.uk" target="_blank">enquiries@easih.ac.uk</a> </p>
	  </div>
   		<div class="rightcol">
        	<a href="enquiries.php"><img src="images/enquiry.gif" alt="Enquiry Link" /></a>
		<div id="technologiesused">
                <h4>TECHNOLOGIES USED:</h4>
         <!--   <a href="sequencingapplications.php"><img src="images/solid4system.gif" width="86" height="129" alt="Solid 4 System" /></a> -->
	 	<a href="sequencingapplications.php"><img src="images/genomeanalyser.gif" width="86" height="129" alt="Genome Analyser" /></a>
		<a href="sequencingapplications.php"><img src="images/HiSeq2000-final.gif" width="86" height="129" alt="HiSeq2000" /></a>   
                <a href="sequencingapplications.php"><img src="images/PGM_icon.gif" width="86" height="129" alt="Ion Torrent PGM" /></a>  
         <!--   <a href="sequencingapplications.php"><img src="images/5500xl_icon.gif" width="86" height="129" alt="SOLiD 5500xl" /></a>    -->      
         <!--       <a href="sequencingapplications.php"><img src="images/gsjunior.gif" width="86" height="129" alt="GS Junior" /></a>      -->
		</div>
		<div id="tweets">
		  <!--<h4>TWEETS:</h4> -->
		  <br />
		  <script src="http://widgets.twimg.com/j/2/widget.js"></script>
		  <script>
		    new TWTR.Widget({
		    version: 2,
		    type: 'profile',
		    rpp: 3,
		    interval: 30000,
		    width: 280,
		    height: 250,
		    theme: {
		    shell: {
		    background: '#67c2e3',
		    color: '#fcf9fc'
		    },
		    tweets: {
		    background: '#f0f8fb',
		    color: '#000005',
		    links: '#8308f7'
		    }
		    },
		    features: {
		    scrollbar: true,
		    loop: false,
		    live: false,
		    behavior: 'all'
		    }
		    }).render().setUser('EASIH1').start();
		  </script>
		</div>
        </div>
    	<div class="clearfloat"></div>
    </div>
    <div id="homefooter">
    	<span class="hidden">MRC - Medical Research Council</span>
    	<span class="hidden">University of Cambridge</span>
    	<span class="hidden">NHS - National Institute for Health Research</span>
    	<span class="hidden">Wellcome Trust</span>
    	<span class="hidden">Life Technologies</span>
    	<span class="hidden">JDRF - Juvenile Diabetes Research Foundation International</span>
    </div>
</div>
<?php
	include_once("footer.php");
?>
</body>
</html>

