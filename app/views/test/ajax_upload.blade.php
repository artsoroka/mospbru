<html>
<body>
<form id="targetForm" action="destination.html" enctype="multipart/form-data">
    <input type="file" id="file" name="file[]" multiple />
    <input type="submit" value="Go" />
</form>
<div id="response">
  status area
</div>

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script>

var client = new XMLHttpRequest();

$( "#targetForm" ).submit(function( event ) {
  console.log(event); 
  event.preventDefault();
  
  input = document.getElementById("file");  
  console.log(input.files); 
  filesArr = Array.prototype.slice.call(input.files);
  console.log(filesArr); 
    
 
  formData = new FormData();   
    renderStatus(filesArr, formData);  
  
   client.open("post", "/upload", true);
   client.setRequestHeader("Content-Type", "multipart/form-data");
   client.send(formData);  /* Send to server */ 
  
});

   client.onreadystatechange = function() 
   {
     
         alert(client.statusText);
     
   }


renderStatus = function(filesArr, formData){

    	filesArr.forEach(function(f) {
            
      /* Add the file */ 
      formData.append("file[]", file);
			
            if(!f.type.match("image.*")) {
				return;
			}
	
			var reader = new FileReader();
			reader.onload = function (e) {
				var html = "<img src=\"" + e.target.result + "\">" + f.name + "<br clear=\"left\"/>";
				//selDiv.innerHTML += html;		
                $('#response').html($('#response').html() + html); 
			}
            console.log(formData); 
			reader.readAsDataURL(f); 
			
		})

}

</script>

</body>
</html>
