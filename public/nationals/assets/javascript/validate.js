//returns whether the form is valid, and sets the labels of invalid fields to red
function validateCommentsForm()
{
	//reset all of the labels to their original color (black)
	resetCommentsForm();
	
	//the algorithm starts out with the form considered valid
	var isValid = true;
	var form = document.forms["comments_form"];
	//this is the color that labels of invalid fields will be set to
	var red = "#c00";
	
	//go through each field, and if it is empty, make its label red and set isValid to false
	if (form["first_name"].value.length == 0)
	{
		document.getElementById("first_name_label").style.color = red;
		isValid = false;
	}
	if (form["last_name"].value.length == 0)
	{
		document.getElementById("last_name_label").style.color = red;
		isValid = false;
	}
	if (form["email"].value.length == 0)
	{
		document.getElementById("email_label").style.color = red;
		isValid = false
	}
	if (form["subject"].value.length == 0)
	{
		document.getElementById("subject_label").style.color = red;
		isValid = false;
	}
	if (form["message"].value.length == 0)
	{
		document.getElementById("message_label").style.color = red;
		isValid = false;
	}
	
	//at the end, if the form is not valid, set the required fields span to red as well
	if (!isValid)
	{
		document.getElementById("required_fields").style.color = red;
	}
	
	//this is for onsubmit(), returns whether the form is valid
	return isValid;
}
//resets the labels of the comments form to their original color (black)
function resetCommentsForm()
{
	var form = document.forms["comments_form"];
	var labels = form.getElementsByTagName("label");
	for (i = 0; i < labels.length; i++)
	{
		labels[i].style.color = "";
	}
	document.getElementById("required_fields").style.color = "";
}