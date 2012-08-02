<?php
	$name = "";
	$institution = "";
	$email = "";
	$telephone = "";
	$projectdescription = "";
	$species = "";
	$typeofsequencing = "";
	$typeofsequencingother = "";
	$numbertypesamples = "";
	$desiredstartdate = "";
	$ethicalapprovalrequired = "";
	$ethicalapprovalreceived = "";
	$projectfunding = "";
	$projectfundingother = "";
	$briefdetails = "";
	$anyotherinformation = "";
	$sortfunc = "1";
	$Subject  = '';
	$Sflag = 0;
	
	if(isset($_POST["alldone"]))
	{
		$sortfunc = $_POST["sortfunc"];
		$name = $_POST["name"];
		$institution = $_POST["institution"];
		$email = $_POST["email"];
		$telephone = $_POST["telephone"];
		$projectdescription = $_POST["projectdescription"];
		$species = $_POST["species"];
		$typeofsequencing = $_POST["typeofsequencing"];
		$typeofsequencingother = $_POST["typeofsequencingother"];
		$numbertypesamples = $_POST["numbertypesamples"];
		$desiredstartdate = $_POST["desiredstartdate"];
		$ethicalapprovalrequired = $_POST["ethicalapprovalrequired"];
		$ethicalapprovalreceived = $_POST["ethicalapprovalreceived"];
		$projectfunding = $_POST["projectfunding"];
		$projectfundingother = $_POST["projectfundingother"];
		$briefdetails = $_POST["briefdetails"];
		$anyotherinformation = $_POST["anyotherinformation"];
		
		#if($sortfunc != 4){ $Subject = "SPAM:"; }
		if($sortfunc != 4){ $Sflag = 1; }	
		$To = "easih.enquiries@gmail.com";
		$From = "From: enquiries@easih.ac.uk";
		$Subject .= "Name: ".$name." - Enquiry from the EASIH website";

		$Contents = "The following enquiry was submitted on the EASIH website:\r\n";
		$Contents .= "Sortfunc: ".$sortfunc."\r\n";
		$Contents .= "Name: ".$name."\r\n";
		$Contents .= "Institution: ".$institution."\r\n";
		$Contents .= "Email: ".$email."\r\n";
		$Contents .= "Telephone: ".$telephone."\r\n";
		$Contents .= "Project Description: ".$projectdescription."\r\n";
		$Contents .= "Species: ".$species."\r\n";
		$Contents .= "Type of Sequencing: ".$typeofsequencing."\r\n";
		$Contents .= "Type of Sequencing Other: ".$typeofsequencingother."\r\n";
		$Contents .= "Number and Type of Samples: ".$numbertypesamples."\r\n";
		$Contents .= "Desired Start Date: ".$desiredstartdate."\r\n";
		$Contents .= "Ethical Approval Required: ".$ethicalapprovalrequired."\r\n";
		$Contents .= "Ethical Approval Received: ".$ethicalapprovalreceived."\r\n";
		$Contents .= "Project Funding: ".$projectfunding."\r\n";
		$Contents .= "Project Funding Other: ".$projectfundingother."\r\n";
		$Contents .= "Brief Details: ".$briefdetails."\r\n";
		$Contents .= "Any Other Information: ".$anyotherinformation."\r\n";

		if($Sflag == 0)
		{		
 			mail($To, $Subject, "$Contents", $From); 
		}				

	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-gb">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/styles.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/sifr.css" type="text/css">
<script src="javascript/sifr.js" type="text/javascript"></script>
<script src="javascript/sifr-config.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript" src="javascript/datetimepicker.js"></script>
<title>Enquiries - EASIH</title>
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
	<div id="contentbanner"><h1>EASIH Enquiries Form</h1></div>
        <h3 class="indent">If you would like to find out more about the services we can offer please complete the information below.  If you're an experienced user of next-gen sequencing and know exactly what you want enter as much detail as you can.  If you're a first time user and aren't really sure about what to do just give us an idea of the scientific project you're involved in and we'll be happy to discuss and advise.</h3>
	  <div class="leftcol">
<?php
		if(isset($_POST["alldone"]))
		{
			if($Sflag)
			{
?>
				<h4><font color="red">Sorry! You got the 'arithmetic: 2 + 2' wrong. Please enter the correct answer, if this is a genuine enqury.</font></h4>
<?php
			}
			else
			{	
?>
				<p>Thanks for your enquiry. Someone will be in touch shortly.</p>
<?php
			}
		}
		else
		{
?>
		<form name="enquiry" action="enquiries.php" enctype="application/x-www-form-urlencoded" method="post">
		<h4>Contact Details:</h4>
            <div class="column1">Name</div><div class="column2"><input name="name" type="text" value="<?php echo $name;?>" size="45" />
            </div><div class="clearfloat"></div>
            <div class="column1">Institution:</div><div class="column2"><input name="institution" type="text" value="<?php echo $institution;?>" size="45" />
            </div><div class="clearfloat"></div>
            <div class="column1">Email:</div><div class="column2"><input name="email" type="text" value="<?php echo $email;?>" size="45" />
            </div><div class="clearfloat"></div>
            <div class="column1">Telephone:</div><div class="column2"><input name="telephone" type="text" value="<?php echo $telephone;?>" size="45" />
            </div><div class="clearfloat"></div>
            <div class="column1">&nbsp;</div><div class="column2">&nbsp;</div><div class="clearfloat"></div>
		<h4>Project Details:</h4>
            <div class="column1">Description:</div><div class="column2"><textarea name="projectdescription" cols="39" rows="5"><?php echo $projectdescription;?></textarea>
            </div><div class="clearfloat"></div>
            <div class="column1">Species:</div><div class="column2"><input name="species" type="text" value="<?php echo $species;?>" size="30" maxlength="30" />
            </div><div class="clearfloat"></div>
            <div class="column1">Type of Sequencing:</div>
            <div class="column2">
            <select name="typeofsequencing" size="1">
	    	<option>-</option>
            	<option>genomic</option>
            	<option>RNA-seq</option>
            	<option>ChIP-seq</option>
            	<option>small RNA</option>
            	<option>exon pull down</option>
            	<option>other</option>
            </select>&nbsp;<input name="typeofsequencingother" type="text" value="<?php echo $typeofsequencingother;?>" size="20" maxlength="30" />
            </div>
            <div class="clearfloat"></div>
            <div class="column1">Number &amp; Type Samples:</div><div class="column2"><input name="numbertypesamples" type="text" value="<?php echo $numbertypesamples;?>" size="45" maxlength="100" />
            </div><div class="clearfloat"></div>
            <div class="column1">Desired Start Date:</div><div class="column2"><input type="text" id="desiredstartdate" name="desiredstartdate" maxlength="25" size="25" value="<?php echo $desiredstartdate;?>"><a href="javascript:NewCal('desiredstartdate','ddmmmyyyy',false,24)"><img src="images/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a>
            </div><div class="clearfloat"></div>
            <div class="column1">Is ethical approval required:</div><div class="column2"><input type="radio" name="ethicalapprovalrequired" value="Yes" />&nbsp;Yes&nbsp;&nbsp;&nbsp;<input name="ethicalapprovalrequired" type="radio" value="No"  /> 
            No
            </div><div class="clearfloat"></div>
            <div class="column1">Is ethical approval received:</div><div class="column2"><input type="radio" name="ethicalapprovalreceived" value="Yes" />&nbsp;Yes&nbsp;&nbsp;&nbsp;<input type="radio" name="ethicalapprovalreceived" value="No" />&nbsp;No&nbsp;&nbsp;&nbsp;<input name="ethicalapprovalreceived" type="radio" value="N/A" />
            &nbsp;N/A
            </div><div class="clearfloat"></div>
            <div class="column1">&nbsp;</div><div class="column2">&nbsp;</div><div class="clearfloat"></div>
		<h4>Funding Details:</h4>
            <div class="column1">Project Funding:</div>
            <div class="column2">
            <select name="projectfunding" size="1">
	    	<option>-</option>
            	<option>Already funded</option>
            	<option>Grant application to be submitted</option>
            	<option>Other -></option>
            </select>&nbsp;<input name="projectfundingother" type="text" value="<?php echo $projectfundingother;?>" size="15" maxlength="50" />
            </div>
            <div class="clearfloat"></div>
            <div class="column1">Brief Details:</div><div class="column2"><input name="briefdetails" type="text" value="<?php echo $briefdetails;?>" size="45" maxlength="150" />
            </div><div class="clearfloat"></div>
            <div class="column1">Any other information:</div><div class="column2"><textarea name="anyotherinformation" cols="39" rows="5"><?php echo $anyotherinformation;?></textarea>
            </div><div class="clearfloat"></div>	
		<div class="column1">To show you are a real person, what is 2 + 2 ?:</div><div class="column2"><input name="sortfunc" type="text" value="<?php echo $sortfunc;?>" size="5" /></div>
			<div class="column1">&nbsp;</div>	
        	<div class="column1"><input type="submit" value="Submit" name="Submit" /></div>
            <input type="hidden" name="alldone" value="yes" />

        </form>
        <div class="clearfloat"></div>
		<p>If you'd rather just send us an email <a href="mailto:enquiries@easih.ac.uk">click here</a></p>
		<p>EASIH, <br />
University of Cambridge, <br />
Level 4, Laboratory Block, Box 268, <br />
Addenbrooke's Hospital Cambridge, <br />
CB2 0QQ, <br />
UK </p>
		<p>Tel: +44 (0)1223 746768 <br />
		  Fax: +44 (0)1223 761086 <br />
		  Email: <a href="mailto:enquiries@easih.ac.uk" target="_blank">enquiries@easih.ac.uk</a></p>
		<?php
		}
?>	  
	</div>
	  <div class="rightcol">
	    <blockquote>&nbsp;</blockquote>
    </div>
   	<div class="clearfloat"></div>
    </div>
</div>
<?php
	include_once("footer.php");
?>
</body>
</html>

