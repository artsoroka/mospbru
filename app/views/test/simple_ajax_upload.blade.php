<html>
<body>

<input type="file" id="uploadfile" name="uploadfile" />
<input type="button" value="upload" onclick="upload()" />

<script>
   var client = new XMLHttpRequest();
  
   function upload() 
   {
      var file = document.getElementById("uploadfile");
     
      /* Create a FormData instance */
      var formData = new FormData();
      /* Add the file */ 
      formData.append("file", file.files[0]);
      formData.append("hey", "how"); 
      client.open("post", "/upload", true);
      client.setRequestHeader("Content-Type", "multipart/form-data");
      client.send(formData);  /* Send to server */ 
   }
     
   /* Check the response status */  
   client.onreadystatechange = function() 
   {
      if (client.readyState == 4 && client.status == 200) 
      {
         alert(client.statusText);
      }
   }
</script>

</body>
</html>
