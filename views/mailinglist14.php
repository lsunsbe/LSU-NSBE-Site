<!DOCTYPE html>
<html>
<!--Begin Code-->
	<head>
		<title>LSU National Society of Black Engineers: Home</title>
	</head>
	<body>
        
		<div id="passwordCont">
			<form action="" method="">
				Password: <input type="password" id="pass">
				<input id="passSubmit" type="submit" value="Submit">
			</form>
		</div >
        <br>
        <hr>
        <br>
        <div id="mainContent" hidden="true" style="width: 100%;">
            <div id="editCont">
                <form action="" method="">
                    Emails to Add/Remove (Seperate multiple emails with commas): <textarea type="text" id="emailVals" rows="15" cols="80"> </textarea>
    
                    <input id="addButton" type=submit value="Add">
                    <input id="removeButton" type="button" value="Remove">
                </form>
            </div>
            <br>
            <hr>
            <br>
            <div id="content">
                <textblock id="list" style="word-break: break-all;">Loading...</textblock>
                
            </div>
        </div>    
            
            
            
            
        <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="../scripts/maillist.js"></script>
	</body>
</html>