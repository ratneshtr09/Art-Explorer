<!DOCTYPE html>
<html lang="en">
<head>
        <title>ART Compiler Explorer</title>
        <script src="codemirror/lib/codemirror.js"></script>
        <link href="codemirror/lib/codemirror.css" rel="stylesheet"/>
        <link href="codemirror/theme/dracula.css" rel="stylesheet"/>
        <script src="codemirror/mode/clike/test.js"></script>
        <script src="codemirror/mode/clike/clike1.js"></script>
        <script src="codemirror/addon/edit/closetag.js"></script>
        <script src="codemirror/addon/fold/brace-fold.js"></script>
        <script src="codemirror/addon/fold/comment-fold.js"></script>
        <script src="codemirror/addon/fold/foldcode.js"></script>
        <script src="codemirror/addon/fold/foldgutter.js"></script>
        <script src="codemirror/addon/fold/indent-fold.js"></script>
        <link href="codemirror/addon/fold/foldgutter.css" rel="stylesheet"/>
        <script src="codemirror/addon/selection/active-line.js"></script>
        <script src="codemirror/addon/edit/closebrackets.js"></script>
        <script src="codemirror/addon/edit/matchbrackets.js"></script>
	<link href="codemirror/theme/dracula.css" rel="stylesheet"/> 
        <script src="codemirror/addon/scroll/simplescrollbars.js"></script>
        <link href="codemirror/iaddon/scroll/simplescrollbars1.css" rel="stylesheet"/>
<!-- Start of Add tool chain -->
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=submit],input[type=password] {
  width: 100%;
  padding: 5px 5px;
  margin: 5px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons/
.add {

 border-radius:5px;
  color: white;
  padding:6px 12px;
  margin: 5px;
  border: none;
  cursor: pointer;
  float:right;
}
*/
.add{
background-color: #fefefe;
margin: 5px 30px;
float:right;
border: 1px solid #ccc;
padding: 6px 12px;
border-radius: 5px;
cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

/* Center the image and position the close button */
.imgcontainer {
  padding:10px 0px;
  position: relative;
}

.container_form {
  padding: 16px;
}
.modal {
  display: none;
  position: fixed;
  z-index:4;
  left: 0;
  border-radius: 10px;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0,0.4);
  padding-top: 60px;
}
.modal-content {
  background-color: #fefefe;
  margin: 7% auto 7% auto;
  border: 1px solid #888;
  width:35%;
   z-index:4;
  border-radius: 10px;

}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 15px;
  top: 0;
  color: #000;
  font-size: 30px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)}
  to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
  from {transform: scale(0)}
  to {transform: scale(1)}
}
</style>
<!-- End of Add tool chain  -->
<style type="text/css">
.header{
        width:100%;
        height:40px;
	background:#f4f3f1;
        border: 1px solid #dbdfe5;
        text-align: center;
        font-size: 20px;
        padding-top:0px;
	color: green;
	font-weight:bold;
}
.container{
        width: 100%;
        min-height: 100%;
        padding-top:2px;
        display: flex;
}
.container .box1{
        background: #ffffff;
        border-radius: 3px;
        border: 2px solid #dbdfe5;
        flex: 1;

	overflow: auto;
}

.container .box1 #inside{
        width:100%;
        height:35px;
        border: 1px solid #dbdfe5;
        padding-bottom:10px;
        border-radius: 1px;
        background:#f4f3f1;
}
.container .box1.box2{
        background: #ffffff;
        border-radius: 3px;

	overflow: auto;
}
.container .box1.box2 #second{
        width:100%;
        height:35px;
        border: 1px solid #dbdfe5;
        border-radius: 5px;
        padding-bottom:10px;
        background:#f4f3f1;
}
.st{
	color:green;
 

}
.tab{
        float:right;
	margin:5px;
	display: inline-block;
        padding: 6px 12px;
         border-radius: 5px;
	background-color: #fefefe;


}
.tabb{
        float:left;
        margin-left:10px;
	margin:5px;
	display: inline-block;
        padding: 6px 12px;
         border-radius: 5px;
	background-color: #fefefe;


}
.btn {

	margin:5px;
	border: 1px solid #ccc;
	display: inline-block;
	padding: 6px 12px;
	font size: 30px;
	 border-radius: 5px;
	background-color: #fefefe;
	 cursor: pointer;
}
 input[type="file"] {
    display: none;
}
.custom-file-upload {
    border: 1px solid #ccc;
    display: inline-block;
    padding: 6px 12px;
    cursor: pointer;
    border-radius: 5px;
    margin:5px; 	
/*    background-color: #fefefe;*/
		
}
label {
  cursor: pointer;
}

</style>
</head>
<body>


       <div class="header">ART Compiler Explorer </div>
   <div class="container">
        <div class="box1">
           <div id="inside" >
		<button class="add" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Add Your ToolChain</button>
		<div id="id01" class="modal">
		    <form class="modal-content animate" action="#" method="post">
			 <div class="imgcontainer">
			    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">&times;</span>
			 </div>
			 <div class="container_form">
				  <label for="uname"><b>Server Name</b></label>
				  <input type="text" placeholder="Host IP Address" value ="10.66.254.110"name="server" required>
				  <label for="psw"><b>Username</b></label>
				  <input type="text" placeholder="cdsart" name="username" required>
				  <label for="uname"><b>Password</b></label>
				  <input type="password" placeholder="P@ssword1" name="pass" required>
				  <label for="psw"><b>Toolchain Path</b></label>
				  <input type="text" placeholder="/home/cdsart/out_directory" name="tool_path" required>
				  <label for="psw"><b>Give a Tool Chain Name</b></label>
				  <input type="text" placeholder="Android R" name="folder" required>
				   <input type="submit" name= "submit" id ="submitButton" value="Add Toolchain">
			 </div>
		     </form>
		     <?php
		      if($_POST['submit'])
		      {
			    $server = $_POST["server"]; //You have to get the form data
			    $username = $_POST["username"];
			    $password = $_POST["pass"];
			    $tool_path = $_POST['tool_path'];
			    $tool_name = $_POST['folder'];

			    file_put_contents("select.txt", $_POST["folder"] . PHP_EOL, FILE_APPEND);
			    shell_exec("sort -u -o select.txt select.txt");
			    $file = fopen("$tool_name.txt", "w+"); //Open your .txt file
			    ftruncate($file, 0); //Clear the file to 0bit
			    $content = $server. PHP_EOL .$username. PHP_EOL .$password. PHP_EOL .$tool_path. PHP_EOL . $tool_name;
			    fwrite($file , $content); //Now lets write it in there
			    fclose($file ); //Finally close our .txt
			    #die(header("Location: ".$_SERVER["HTTP_REFERER"]));
		      }
                      $filename = 'select.txt';
		      $eachlines = file($filename, FILE_IGNORE_NEW_LINES);
		     ?>
        	
		</div> <!-- End of Add tool chain form   -->
		<?php
			#shell_exec("sort -u select.txt");
			$filename = 'select.txt';
			$eachlines = file($filename, FILE_IGNORE_NEW_LINES);

		?>

		<form id="frm" action="#" method="post">
			<label for="fileToLoad" class="custom-file-upload">Select Java File</label> 
			<!-- <input type="file" id="input-file"> -->
         		<!--<input type="file" id="fileToLoad"  onchange=refresh() > --->	
			<input type="file" id="fileToLoad" onchange="localLoad(this.files);" />
			<select class="tab" id="toolchain" name="toolchain">
			   <?php if(isset($_POST['toolchain']))
			   {
			   ?>
			        <option value="base">Select Android Version</option>
			        <?php foreach($eachlines as $lines)
				{
			            if($_POST['toolchain']==$lines)
			            {
			              echo "<option selected value='".$lines."'>$lines</option>";
			            }
			            else {
			              echo "<option value='".$lines."'>$lines</option>";
			            }
	 	                }
			   }
			   else {
			   	?>
			     <option selected value="base">Select Android Version</option>
			      <?php foreach($eachlines as $lines){
		            echo "<option value='".$lines."'>$lines</option>";
			      }
			    }
			    ?>
			 </select>
	<!-- End of Inside box  -->
              </div>	
                <textarea id="editor" name="field1"><?php if(isset($_POST['field1'])){echo htmlentities ($_POST['field1']);}?>
                </textarea>
<script>
// Get the modal
var modal = document.getElementById('id01');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
      	<script>
                        var editor = CodeMirror.fromTextArea
                        (document.getElementById('editor'),{
                                mode:"text/x-java",
                                indentWithTabs: true,
                                smartIndent: true,
                                lineNumbers: true,
                                lineWrapping: true,
                                matchBrackets : true,
                                autofocus: true,
                                styleActiveLine: true,
                                lineNumbers:true,
                                autoCloseBrackets: true,
                                autoCloseTags:true,
				//theme:"dracula",
                                matchBrackets:true,
                                tabSize:5,
                                extraKeys: {"Ctrl-Q": function(cm){ cm.foldCode(cm.getCursor()); }},
                                foldGutter: true,
                                gutters: ["CodeMirror-linenumbers", "CodeMirror-foldgutter"]
								});
                        editor.setSize(null, 600);
			 
		        function localLoad(files) {
		            if (files.length == 1) {
                		document.title = escape(files[0].name);
		                var reader = new FileReader();
                		reader.onload = function(e) {
		                    editor.setValue(e.target.result);
                		};
		                reader.readAsText(files[0]);
		           }		
		        }
        </script>

                <?php
                  $output=shell_exec('bash dir.sh');
                  $name='text.txt';
                 $path = './classes/'.$name;
                 if (isset($_POST['field1']) ) {

                    $fh = fopen($path,"w+");
                    $string = $_POST['field1'];
                    fwrite($fh,$string);
                    fclose($fh);
                 }
                #if(isset($_POST['android']))
                 #       {

                  #          $select1=$_POST['android'];
                   #         $output=shell_exec("bash run.sh $select1");
                    #    }

                ?>
		<?php
if(isset($_POST['toolchain']))
{
        $sel_value=$_POST['toolchain'];
        #$file="$sel_value.txt";
        #echo $file;
        #echo "THe valuse is : $sel_value";
   if($sel_value == "Android_O" || $sel_value == "Android_P" || $sel_value == "Android_Q")
   {
		switch ($sel_value)
                            {
                                case 'Android_O':
                                       $output= shell_exec('bash run.sh andO');
                                        break;
                                case 'Android_P':
                                        $output=shell_exec('bash run.sh andP');
                                        break;
                                case 'Android_Q':
                                       $output= shell_exec('bash run.sh andQ');
                                        break;
                           }
 
   }
   else
   {
	 $myfile="$sel_value.txt";
        #$line=file($myfile);
        $line = explode("\n", file_get_contents($myfile));
        $server   = "$line[0]"; // server IP/hostname of the SSH server
        $username = "$line[1]"; // username for the user you are connecting as on the SSH server
        $password = "$line[2]"; // password for the user you are connecting as on the SSH server
        #$command  = "cd /home/cdsart/Ratnesh ;bash hello.sh"; // could be anything available on the server you are SSH'ing to

        $connection = ssh2_connect($server, 22);

        ssh2_auth_password($connection, $username, $password);

        $local_path="/home/rtiwari1/compiler";
        $txt_path="/home/rtiwari1/compiler/classes";
        $remote_path="$line[3]/";

        $pwd="$line[3]";
        $folder="out";
        $sendf="dir.sh";
        $text="text.txt" ;

        ssh2_scp_send($connection,$local_path."/".$sendf,"$remote_path".$sendf,0644);
        #ssh2_scp_recv($connection,"/home/cdsart/Ratnesh/".$filem,$local_path."/".$filem);
        ssh2_exec($connection,"cd $remote_path ; bash dir.sh");
        ssh2_scp_send($connection,$txt_path."/".$text,$remote_path."classes/".$text,0644);
        ssh2_scp_send($connection,$local_path."/run_remote.sh",$remote_path."run_remote.sh", 0644);

        ssh2_exec($connection,"cd $pwd/ ; bash run_remote.sh 1 $pwd $folder");
        ssh2_exec($connection,"cd $pwd/ ; zip test.jar classes.dex");
        ssh2_exec($connection,"cd $pwd/ ; bash run_remote.sh 1 $pwd $folder");

        ssh2_scp_recv($connection,$remote_path."out.txt",$local_path."/out.txt");
        ssh2_scp_recv($connection,$remote_path."NamingClass.txt",$local_path."/NamingClass.txt");
        $naming="NamingClass.txt";
        $naming_line=count(file($naming));
        for($j=0;$j<$naming_line;$j++)
        {
                ssh2_scp_recv($connection,$remote_path."bytecode$j.txt",$local_path."/bytecode$j.txt");
        }

        shell_exec("bash run_remote.sh 2");
	
   }		

}
?>

	</div>
        <div class="box1 box2">
                <div id="second" >

                           <select class="tabb" name="launguage" id="launguage" onchange='this.form.submit()' >
                                 <option disabled selected value>Convert To ..</option>
                                 <option value="bytecode" <?php if($_POST['launguage']=='bytecode') echo 'selected="selected"';   ?>>Java Bytecode</option>
                                 <option value="dexcode" <?php if($_POST['launguage']=='dexcode') echo 'selected="selected"';   ?>>Dalvik Bytecode</option>
                                <option value="machine" <?php if($_POST['launguage']=='machine') echo 'selected="selected"';   ?>>Assembly Code</option>
                            </select>
			     <button type ="button" class="btn"  onclick='this.form.submit()'>Refresh</button>
	
                          </form>
			   
                </div>
                <?php if (filesize('error.txt') == 0)
                        $flag=0;
                        else
                        $flag=1;
                ?>
                <?php
                  if($flag==1)
                  {
                        echo file_get_contents("error.txt");
                  }
                  else if (isset($_POST['launguage']))
                  {
                        $select2=$_POST['launguage'];
                        $Cfilename="NamingClass.txt";

                        $CContent  = file($Cfilename);
                        $NoOfCLine = count ( $CContent );

                ?>
				<?php switch ($select2){
                                        case 'machine':
                                                echo '<textarea id="asm">';
                                                for ( $j =0;$j<$NoOfCLine;$j++ )
                                                {
                                                        $Cfun_file="functionName$j.txt";
                                                        $Fline=file($Cfun_file);
                                                        $NoOfFlines=count($Fline);
                                                        echo $CContent[$j];
                                                        echo "{";
                                                        echo "\n";
                                                        for($k=0;$k<$NoOfFlines;$k++)
                                                        {
                                                                $f="machinefun$j$k.txt";
                                                                echo "\t".$Fline[$k]."\t{\n";
                                                                echo file_get_contents($f);
                                                                echo "\t}\n";
                                                        }
                                                        echo "}\n\n";
                                                }
                                                echo '</textarea>';
                                        break;
                                        case 'bytecode':
                                                echo '<textarea id="byte">';
                                                for ( $j =0;$j<$NoOfCLine;$j++ )
                                                {
                                                $Cfun_file="bytecodefun$j.txt";
                                                $Fline=file($Cfun_file);
                                                $NoOfFlines=count($Fline);
                                                echo $CContent[$j];
                                                echo "{";
                                                echo "\n";
                                                for($k=0;$k<$NoOfFlines;$k++)
                                                {
												$f="bytecode$j$k.txt";
                                                echo "\t".$Fline[$k]."\t{\n";
                                                echo file_get_contents($f);
                                                echo "\t}\n";
                                                }
                                                echo "}\n\n";
                                                }
                                                echo '</textarea>';
                                        break;
                                        case 'dexcode':
                                                echo '<textarea id="dex">';
                                                for ( $j =0;$j<$NoOfCLine;$j++ )
                                                {
                                                $Cfun_file="functionName$j.txt";
                                                $Fline=file($Cfun_file);
                                                $NoOfFlines=count($Fline);
                                                echo $CContent[$j];
                                                echo "{";
                                                echo "\n";
                                                for($k=0;$k<$NoOfFlines;$k++)
                                                {
                                                $f="dexcodefun$j$k.txt";
                                                echo "\t".$Fline[$k]."\t{\n";
                                                echo file_get_contents($f);
                                                echo "\t}\n";
                                                }
                                                echo "}\n\n";
                                                }
                                                echo '</textarea>';
                                        break;

                                }
                        }
						?>

           <script>
                var asm=CodeMirror.fromTextArea(document.getElementById('asm'),{
                mode:"text/x-asm",
                lineNumbers:true,
                styleActiveLine: true,
                readOnly:true,
                autoCloseBrackets: true,
                extraKeys: {"Ctrl-Q":function(cm){ cm.foldCode(cm.getCursor()); }},
                foldGutter: true,
                gutters: ["CodeMirror-linenumbers","CodeMirror-foldgutter"]
                });
                asm.setSize(null,600);
            </script>
        <script>
                var bytec=CodeMirror.fromTextArea(document.getElementById('byte'),{
                mode:"text/x-javac",
                lineNumbers:true,
                styleActiveLine: true,
                readOnly:true,
                autoCloseBrackets: true,
                extraKeys: {"Ctrl-Q":function(cm){ cm.foldCode(cm.getCursor()); }},
                foldGutter: true,
                gutters: ["CodeMirror-linenumbers","CodeMirror-foldgutter"]
                });
                bytec.setSize(null,600);
        </script>
		<script>
                var dex=CodeMirror.fromTextArea(document.getElementById('dex'),{
                mode:"text/x-dex",
                lineNumbers:true,
                styleActiveLine: true,
                readOnly:true,
                autoCloseBrackets: true,
                extraKeys: {"Ctrl-Q":function(cm){ cm.foldCode(cm.getCursor()); }},
                foldGutter: true,
                gutters: ["CodeMirror-linenumbers","CodeMirror-foldgutter"]
                });
               dex.setSize(null,600);
          </script>

        </div>
    </div>


</body>
</html>
