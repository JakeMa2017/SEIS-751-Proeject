function InsertDisplayTask(iopId,sTaskName, dDate, sDescription, iPriority, sStatus)
{
	var params;
	params = "opId="+iopId+"&tname="+sTaskName+"&dDate="+dDate+"&desc="+sDescription+"&priority="+iPriority+"&status="+sStatus+"";	
	var url = "getsettask.php";
	
	if(window.XMLHttpRequest)
	{
		//code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp= new XMLHttpRequest();
	}
	else
	{
		//code for IE6,IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
		//sending the values using post method
		xmlhttp.open("POST", url,true);
		xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xmlhttp.setRequestHeader("Content-length", params.length);
		xmlhttp.send(params);
		xmlhttp.onreadystatechange = function()
		{
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
			{
				document.getElementById("tblData").innerHTML=xmlhttp.responseText;
			}
		}
}