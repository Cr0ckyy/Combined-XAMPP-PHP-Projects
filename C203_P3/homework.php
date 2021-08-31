<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Event Abacus</title>
    </head>
    <body>
        <form method="post" action="doHomework.php">
            <h1>Event Abacus</h1>
            <hr/>
            <table>
                <tr>
                    <td><label for="idTitle">Event Title<font color="red">*</font>:</label></td>
                    <td><input type="text" id="idTitle" name="event_title" autofocus placeholder="Enter event title" required><br/></td>
                </tr>
                <tr>
                    <td><label for="idType">Event Type<font color="red">*</font>:</label></td>
                    <td><select id="idType" name="event_type" size="1" required="required" >
                            <option value="Corporate Meetings">Corporate Meetings</option>
                            <option value="Conferences">Conferences</option>
                            <option value="Banquets">Banquets</option>
                        </select></td>
                </tr>
                <tr>
                    <td><label for="idNum">Number of days<font color="red">*</font>: (between 1 to 6)</label></td>
                    <td><input type="number" id="idNum" name="days" min="1" max="6" required="required" ></td>                   
                </tr>
            </table>
            <br/>
            <input type="Submit" value="Enter"/>
            <input type="reset" />

    </body>
</html>
