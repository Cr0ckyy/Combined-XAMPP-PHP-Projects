<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Andy Car service booking</title>
        <link href="bookServiceStyleSheet.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1> Andy's car Servicing Company </h1>

        <br><br>
        <h3>Booking Details</h3> 
        <form method="post" action="doBookService.php">
            <form>
                <!-- Enter your HTML form elements -->

                <!--The content and web page structure. -->


                <!-- The label is a normal text, by clicking which form element the user can choose. 
                It facilitates the use of the form, 
                as it is not always convenient to use the cursor to make the elements.-->  

                <b>  <label for="user" >Name:</label>

                    <!-- It is a single-line text field that a user can enter text into -->           
                    <!--                The required attribute is a boolean attribute.
                                    When present, it specifies that an input field must be filled out before submitting the form.-->
                    <input type ="text" placeholder="Please enter your full name" required="required" name="user"/>

                    <!--The HTML < br > element generates a line break in text (carriage-return).
                     It is useful to write a poem or an address where the division of lines is significant.-->
                    <br><br/>

                    <b>  <label for="service_date">Date:</label></b> 

                    <!--The < input type="date "> specifies the date picker.
                    The resulting value shall include the year, the month and the day.-->

                    <input type="date" required="required" name="service_date"/><br><br/>
                    <label for="servicecenter">Service Center:</label>


                    <!--The < select > element will be used to create a drop-down list.
                    The < select > element is most often used in a form to collect input from the user.
                    The name attribute is needed to refer to the form data after the form has been submitted.
                    (If you omit the name attribute, no data from the drop-down list will be provided).
                    The Id attribute is needed to link the drop-down list to the label.
                    The < option > tags in the < select > element define the options available in the drop-down list.-->
<!--                    <b>   <select name="centre" required="required" id="servicecenter"></b> 
                    <option value="Paya Lebar" selected>Paya Lebar</option>
                    <option value="Ang Mo Kio" selected>Ang Mo Kio</option>
                    <option value="Bishan" selected>Bishan</option>
                    </select>-->


                    <input type="radio" id="servicecenter" name="centre" value="Paya Lebar">
                    <label for="male">Paya Lebar</label><br>
                    
                
                    <input type="radio" id="servicecenter" name="centre" value="Ang Mo Kio">
                    <label for="female">Ang Mo Kio</label><br>
                    <input type="radio" id="servicecenter" name="centre" value="other">
                    <label for="other">other</label>




                    <br><br/>
                    <b>   <label for="servicerequest">Service Requests:</label></b> 


                    <!--The < textarea > tag defines a multiline text input control.
                    The < textarea > element is often used in a form to collect user inputs 
                    such as comments or reviews.-->
                    <textarea cols="40" rows="5" name="service_request"placeholder="Please enter your service requests" required="required" name="servicerequest"></textarea>

                    <br><br/>

                    <!--The < input type="submit "> defines a submit button that submits all form values to the form handler.
                    The form handler is typically a server page with a script for processing input data.
                    The form-handler is specified in the action attribute of the form.-->
                    <input type ="submit" value ="Book">
                    </form>
                    </body>
                    </html>
