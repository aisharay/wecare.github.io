

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=0">
 <title>PRESCIPTION ENTRY</title>

<style>
body {
  font-family: 'Calibri';
  font-size: 1.2em;
  
}

#outside {
  padding-top: 25px;
  padding-bottom: 25px;
  padding-right:25px;
  padding-left:25px;
  
  margin: 20px;
  max-width: 490px;
  padding: 16px;
  background-color: #ace600;
}

h1 {
  font-size: 1.5em;
  text-align: left;
  text-transform: capitalize;
}

form {
  /* Just to center the form on the page */
  margin: 0 auto;
  
  /* To see the limits of the form */
  padding: 1em;
  display: flex; 
  justify-content: center;
  width: auto;
}
.doctor{
    background:lightgreen;
}
#survey-form {
  background-color: white;
}

fieldset { 
  border:1px solid lightgray;
  margin: 10px;
 }

legend {
  font-weight: 700;
}

#number {
  width: 150px;
}


div + div {
  margin-top: 1em;
  }

/* label {
  /* To make sure that all label have the same size and are properly align */
  /* display: inline-block; */
  /* width: 80px; */
  /* text-align: right; */
} */

input, textarea {
  /* To make sure that all text field have the same font settings
     By default, textarea are set with a monospace font */
  /* font: 1em sans-serif; */

  /* To give the same size to all text field */
  width: 200px;

/*   -moz-box-sizing: border-box;
       box-sizing: border-box; */

  /* To harmonize the look & feel of text field border */
  border: 1px solid #999;
}

input:focus, textarea:focus {
  /* To give a little highligh on active elements */
  border-color: OrangeRed;
  width:auto;
}

textarea {
  /* To properly align multiline text field with their label */
  vertical-align: top;

  /* To give enough room to type some text */
  height: 5em;

  /* To allow users to resize any textarea vertically
     It works only on Chrome, Firefox and Safari */
  resize: horizontal;
}

.button {
  /* To position the buttons to the same position of the text fields */
  padding-left: 90px; /* same size as the label elements */
}

button {
  margin: .5em;
  font-size: 1em;
  text-transform: capitalize;
  background-color: red;
  color: white;
  border: none;
  padding: 5px;
  border-radius: 2px;
  
}

#submitbutton {
  padding: 5px;
  display: flex; 
  justify-content: center;
}

body {
  background: lightblue;
  
}

</style>
</head>



<body>
<form id="survey"  method="post">
<div id="outside">


  <!-- ------------------Personal Details---------------------------- -->
  
    <!-- groups of widgets that share the same purpose, for styling and semantic purposes -->
    <h1>PRESCRIPTION ENTRY</h1><hr>
    <!-- formally describes the purpose of the fieldset it is included inside. -->
    <div class="doctor">
    <div>
      <label id="disease" for="disease">YOU ARE SUFFERING FROM</label>
      <input type="text" required id="name" name="name" placeholder="suffering from">   
    </div>
    
    <div>
      <label id="name" for="name"> HOSPITAL Name:</label>
      <input type="text" required id="name" name="name" placeholder="hospital that u visited">   
    </div>

    <div>
      <label id="name" for="name"> Doctor Name:</label>
      <input type="text" required id="name" name="name" placeholder="Enter name here">   
    </div>

    <div>
      <label id="contact" for="contact">Hospital contact:</label>
      <input type="text" maxlength=10 required id="contact" name="contact" placeholder="Enter contact here">   
    </div>
    </div>






    <div>
      <label for="Gender">Medicine Type</label>
        <input type="radio" name="gender" value="male" checked> tablet
        <input type="radio" name="gender" value="female"> syrop
        <input type="radio" name="gender" value="female"> aintment
    </div>
    

    
    <div>
        <label for="Age"> Medicine name </label>
        <input type="text" required  name="age" placeholder="">
    </div>
    
    <!-- ------------------Radio Buttons-------------------------------- -->
    <div>
      <label for="Gender">Type</label>
        <input type="radio" name="gender" value="male" checked> After meal
        <input type="radio" name="gender" value="female"> Before meal
    </div>
    
   <button>add medicine</button>
    
   <div id="submitbutton">
    <button type="submit" >Submit Data</button></button> </div>
  

  <!-- --------------------Text Areas------------------------------ -->
  


  

</form>
</div>
</body>

</html>

