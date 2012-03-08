<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-gb">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/styles.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/sifr.css" type="text/css">
<script src="javascript/sifr.js" type="text/javascript"></script>
<script src="javascript/sifr-config.js" type="text/javascript"></script>
<script type="text/javascript" src="javascript/toggle.js"></script>
<title>FAQ - EASIH</title>
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
    <div id="contentbanner">
      <h1>FAQ</h1>
    </div>
   
    <h2 class="indent">Sequencing Services - Frequently Asked Questions
      <h4 class="indent"><p>
	|<a href="javascript:toggleAllOn();">Show all answers</a>|
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	|<a href="javascript:toggleAllOff();">Hide all answers</a>|</p>
      </h4>
    </h2>

    <br />

    <h2 class="indent">&bull; Sample shipping</h2>      
    <h3 class="indent">
      <dl id="Shipping"> 
	<dt>How do I label my samples?</dt>
	<dd id="LabelAnswer"> Samples must be labelled with the EASIH barcodes
	</dd>
	
	<dt>What address do I need to post my samples to?</dt>
	<dd id="AddressAnswer"> EASIH Sequencing Laboratory,<br />
	  Level 4, Laboratory Block,<br />
	  Addenbrooke's Hospital, Hills Road,<br />
	  Cambridge, CB2 0QQ, UK.
	</dd>
      </dl>
   </h3>
    
   <br /><br />

   <h2 class="indent">&bull; Quantitation and quality assessment of DNA, RNA and Library</h2>
   <h3 class="indent">
     <dl id="quantify"> 
       <dt>What are the requirements for a genomic DNA sample?</dt>
       <dd id="DnaAnswer"> Genomic DNA should be supplied RNA-free. RNAse treatment must be performed either during or after the DNA extraction procedure. Customer must supply a gel picture of the genomic DNA showing no DNA degradation and an effective removal of RNA and any other contaminants. RNase treatment and DNA extraction procedures must be specified.
	 <br /><br />
	 Sample should be supplied in lo-bind tube in water or low TE in a final volume not higher than 100μl.
	 <br /><br />
	 EASIH laboratory requires:
	 <br />
	 &bull; 4 μg of genomic DNA for Exome Enrichment sample preparation
	 <br />
	 &bull; 2 μg of genomic DNA for DNA sample preparation
       </dd>
       
       <dt>What are the requirements for RNA sample?</dt>
       <dd id="RnaAnswer"> RNA should be supplied pure and free of DNA and chemical contaminants.RNA should have a Bioanalyser RIN (RNA Integrity Number) value of 8 or higher, and spectrophotometric analysis should show a peak at 260nm with 260:280 ratio of >1.8 and 260:230 ratio close to 2.0. 
	 <br /><br />
	 Where Trizol and other similar organic methods are used for preparation of RNA the RNA should be purified on a Qiagen RNeasy column afterwards to remove all traces of organic solvents.
	 <br /><br />
	 Sample should be supplied in lo-bind tube in water in a final volume not higher than 100μl.
	 <br /><br />
	 EASIH laboratory requires:
	 &bull; 1 μg of total RNA for RNA protocols
       </dd>

       <dt>What are DNA/RNA Requirements for Illumina GAIIx Sequencing?</dt>
       <dd id="GAIIAnswer">
	 <h4>&bull; Illumina Library</h4>
	 20μl of 2nM library in EB buffer should be supplied in addition to library size and concentration information. Gel picture must be provided.
	 <br /><br />
	 <h4>&bull; Paired-end Sequencing</h4>
	 2 μg of double stranded DNA in water or TE buffer at a concentration greater than 20ng/μl, in a volume of 20-100μl and in fragments >300bp and < 700bp, are required.
         <br /><br />
	 <h4>&bull; High-complexity libraries: e.g., Leishmania (high GC content), Plasmodium falciparum (high AT content)</h4>
	 5 μg of double stranded DNA in TE buffer at a concentration greater than 20ng/μl, in a volume of 20-100μl, and in fragments >300bp and < 700bp, are required.
         <br /><br />					  
	 <h4>&bull; Total RNA</h4>
	 0.1- 4 μg of high quality total RNA (DNA free) are required.
	 <br /><br />
  	 <h4>&bull; mRNA libraries</h4>
	 100-400 ng of mRNA are required.
	 <br /><br />
	 <h4>&bull; small RNA</h4>
	 1 μg of high quality total RNA (DNA free) is required.
	 <br /><br />
	 <h4>&bull; ChIP samples</h4>
	 >10ng of target DNA in a volume of 10-80 μl are required.
       </dd>

       <dt>What are DNA/RNA requirements for Ion Torrent Sequencing?</dt>
       <dd id="TorrentAnswer">
	 <h4>&bull; DNA</h4>
	  6μg of DNA in TE buffer at a greater concentration that 60ng/μl are required.
	 <br /><br />
	 <h4>&bull; RNA</h4>
	  100-500 ng of poly(A) RNA or 200-500 ng of rRNA-depleted total RNA in <20μl are required.
       </dd>

	
<!--	<dt>What are DNA/RNA requirements for ROCHE Junior Sequencing?</dt>
	<dd id="JuniorAnswer">
	  <h4>&bull; Library</h4>
	  20 μl of 1x109molecules/μl of library in TE should be supplied.
	  <h4>&bull; cDNA Rapid Protocol</h4>
	  >200 ng of total high quality RNA (DNA free) in a volume ≤ 19 μl are required. OD260/280 of approximately 1.8 is required. If the RNA of interest is mRNA, ribosomal RNA must be removed.
	  <br /><br />
	  This protocol is not designed for preparing small RNA molecules as snoRNA, microRNA, tRNA etc.
	  <h4>&bull; Rapid Protocol</h4>
	  500 ng of double stranded DNA in TE buffer at a concentration greater than 5 ng/μl in fragment > 1.5 Kb are required.
	  <h4>&bull; Large-insert Paired End protocol (3Kb, 8 Kb and 20Kb Span)</h4>
	  5 μg, 15 μg or 30 μg of double stranded DNA in TE are required for the 3Kb, 8Kb or 20 Kb Span, respectively.
	  <h4>&bull; Amplicon Protocol</h4>
	  This procedure requires 5-20 ng of genomic DNA or 1-2 ng of plasmid DNA or similar of starting DNA material in 5 μl of molecular biology grade water.
	 </dd>

	<dt>What are DNA/RNA requirements for SOLiD4 Sequencing?</dt>
	<dd id="SolidAnswer">
	  <h4>&bull; Library</h4>
	  6 μl of 10nM library in E1 elution buffer (E1, SOLiD purification kit)
	  <br /><br />
	  <h4>&bull; Fragment Library</h4>
	  5μg of DNA in TE buffer at a greater concentration that 100ng/μl are required.
	  <br /><br />
	  <h4>&bull; Mate paired library</h4>
	  Mate paired library with insert size of 600bp-2kb can be generated from 5μg-20μg of
DNA supplied in 100μl TE buffer.
	  <br /><br />
Mate paired library with insert of size of 3-6kb or >6Kb can be generated from 40μg-
60μg or 100μg of DNA, respectively.
	  <br /><br />
	  <h4>&bull; ChIP samples</h4>
	  10-20ng of target DNA in 50μl elution buffer (from MAGnify TM kit) recommended by SOLiD are required.
	  <br /><br />
	  <h4>&bull; Total RNA</h4>
	  200-500ng ribosomal depleted RNA or 100-500ng poly(A) enriched RNA in <20μl TE buffer is required.
          <br /><br />										      
	  <h4>&bull; Small RNA</h4>
	  10-200ng 15-40bp size selected RNA in 100μl TE buffer is required.
	</dd>
-->

      </dl>
    </h3>
	
    <br /><br />

    <h2 class="indent">&bull; Shipping Conditions</h2>
    <h3 class="indent">
      <dl id="Conditions"> 
	<dt>How do I pack my samples for safe shipping?</dt>
	<dd id="conditionsAnswer">
	  <table border="0" cellspacing="20">
	    <tr>
	      <th>Material</th><th>Shipping condition</th>
	    </tr>
	    <tr>
	      <td>Genomic DNA</td><td>Normal ice or ice pack</td>
	    </tr>
	    <tr>
	      <td>RNA</td><td>Dry ice</td>
	    </tr>
	    <tr>
	      <td>Amplicons</td><td>Normal ice or dry ice</td>
	    </tr>
	    <tr>
	      <td>Library</td><td>Dry ice</td>
	    </tr>
	  </table>
	</dd>
      </dl>
   </h3>

   <br /><br /> 
   <p>&nbsp;&#134;&nbsp;For a genreic view, please look at the <a href="http://genome.ucsc.edu/ENCODE/experiment_guidelines.html">ENCODE Guidelines for experiments.</a></p> 
   <br /><br />

  </div>  
  <div class="leftcol">
    <h4>&nbsp;</h4>
  </div>
  <div class="rightcol">
    <blockquote>&nbsp;</blockquote>
  </div>
  <div class="clearfloat"></div>
</div>

<?php
	include_once("footer.php");
?>
</body>
</html>

