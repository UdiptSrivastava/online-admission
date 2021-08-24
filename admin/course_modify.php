<?php include('header.php'); ?>

<?php
	$msg=""; // their value is assigned in action page using session function
	$cn="";
	$cc="Select Code";
	$cf="";
	$cd="";
	$cm="";
	$car="";
	if(isset($_SESSION['msg']))
	{
		$msg=$_SESSION['msg']; // here $msg value is assigned in action page and used here
		$cn=$_SESSION['cn'];		
		$cc=$_SESSION['cc'];
		$cf=$_SESSION['cf'];
		$cd=$_SESSION['cd'];
		$cm=$_SESSION['cm'];
		$car=$_SESSION['car'];
	}
	$_SESSION['msg']='';
	$_SESSION['cn']='';
	$_SESSION['cc']='';
	$_SESSION['cf']='';
	$_SESSION['cd']='';
	$_SESSION['cm']='';
	$_SESSION['car']='';
?>
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="63"><img src="../images/modify.png" width="100%" height="108" /></td>
            </tr>
            <tr>
              <td height="60" align="center" class="msg"><?php echo $msg ?></td>
            </tr>
            <tr>
              <td height="450">
              <form method="post" action="action.php?pid=2" name='form'>
              <table width="98%" border="0" cellspacing="0" cellpadding="0" height="450">
                <tr>
                  <td width="48%" align="right" class="msg">Course code:</td>
                  <td width="1%" align="center">&nbsp;</td>
                  <td width="50%" align="left"><div id='cc' class='error'></div>
                    <select name="code" class="textbox" id="code" onchange="submit()">
                      <option value="<?php echo $cc;?>"><?php echo $cc;?></option>
                     
                      <?php
					  	include("../connect.php");
					  	$sql=mysqli_query($con,"select course_code from course") or die('ERROR : '.mysqli_error($con));
						while($rs=mysqli_fetch_array($sql))
						{
					  ?>
                       <option value="<?php echo $rs[0];?>"><?php echo $rs[0];?></option>
                      <?php
						}
						?>
                      
                    </select> </td>
                  <td width="1%" align="center">&nbsp;</td>
                </tr>
                <tr>
                  <td align="right" class="msg">Course name:</td>
                  <td align="center">&nbsp;</td>
                  <td align="left"><input name="name" type="text" class="textbox" id="name"  value=" <?php echo $cn ?>" /> <div id='n' class='error'></div></td>
                  <td align="center">&nbsp;</td>
                </tr>
                <tr>
                  <td align="right" class="msg">Duration:</td>
                  <td align="center">&nbsp;</td>
                  <td align="left"><div id='d' class='error'>
                    <select name="duration" class="textbox" id="duration">
                      <option value="<?php echo $cd; ?>"><?php echo $cd; ?></option>
                      <option value="1 month">1 month</option>
                      <option value="2 months">2 months</option>
                      <option value="3 months">3 months</option>
                      <option value="4 months">4 months</option>
                      <option value="6 months">6 months</option>
                      <option value="9 months">9 months</option>
                      <option value="12 months">12 months</option>
                    </select>
                  </div></td>
                  <td align="center">&nbsp;</td>
                </tr>
                <tr>
                  <td align="right" class="msg">Fees:</td>
                  <td align="center">&nbsp;</td>
                  <td align="left"><input name="fees" type="text" class="textbox" id="fees"  value="<?php echo $cf ?>" /><div id='f' class='error'></div></td>
                  <td align="center">&nbsp;</td>
                </tr>
                <tr>
                  <td align="right" class="msg">Module:</td>
                  <td align="center">&nbsp;</td>
                  <td align="left"><textarea name="module" class="textarea"   id="module"><?php echo $cm ?></textarea><div id='m' class='error'></div></td>
                  <td align="center">&nbsp;</td>
                </tr>
                <tr>
                  <td align="right" class="msg">Career:</td>
                  <td align="center">&nbsp;</td>
                  <td align="left"><textarea name="career" class="textarea"   id="career"><?php echo $car ?></textarea><div id='ca' class='error'></div></td>
                  <td align="center">&nbsp;</td>
                </tr>
                <tr>
                  <td align="right" class="msg">&nbsp;</td>
                  <td align="center">&nbsp;</td>
                  <td align="left"><input name="Submit" type="submit" class="buttonstyle" id="Submit" value="Submit" /></td>
                  <td align="center">&nbsp;</td>
                </tr>
              </table>
              </form>
              </td>
            </tr>
          </table>
<?php include('footer.php'); ?>

