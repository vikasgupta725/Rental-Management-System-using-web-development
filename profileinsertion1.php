<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>INSERT DETAILS OF THE RENTEE</title>
        <link rel="stylesheet" type="text/css" href="form.css">
      
    </head>
    <body>
	<div class="box">
        <h1>RENTER PROFILE</h1>
        <form action="profileinsertion2.php" method="post">
            <table>
                <tr>
                    <td>Name</td>
					<td>
                     <input type="text" name="name" required>
                    </td>
                </tr> 
                <tr>
                    <td>Marital Status</td>
                    <td>
                       <label> <span>Married</span><input type="radio"  name="marital_status" value="married"/></label>
                        <label><span>Single</span><input type="radio" name="marital_status" value="single"/></label>
                    </td>
                    
                </tr>
                <tr>
				  <td>Room Number</td>
                    <td>
                        <input type="number" name="room_number" required>
                    </td>
                </tr>
                <tr>
                  <td>Username</td>
                    <td>
                      <input type="text" name="username" required> 
                    </td>
                </tr>
                <tr>
				  <td>Advance Amount</td>
                    <td>
                      <input type="number" name="advance_amount" required>
                    </td>
                </tr>
                <tr>
				  <td>Security Amount</td>
                    <td>
                        <input type="number" name="security_amount" required>
                    </td>
                </tr>
                <tr>
				  <td> Meter Number</td>
                    <td>
                       <input type="number" name="meter_number" required>
                    </td>
                </tr>
                <tr>
				  <td>Date Of Joining</td>
                    <td>
                        <input type="date" name="date" required>
                    </td>
                </tr>
                <tr>
				  <td>Contact Number</td>
                    <td>
                        <input type="tel" name="contact_number" required>
                    </td>
                </tr>
                <tr>
				  <td>Emergency Contact Number</td>
                    <td>
                        <input type="tel" name="emergency_contact_number" required>
                    </td>
                </tr>
                <tr>
				  <td> Email-Id</td>
                    <td>
                       <input type="email" name="email" required>
                    </td>
                </tr>
                <tr>
                  <td>Occupation</td>
                    <td>
                        <input type="text" name="occupation" required> 
                    </td>
                </tr>
                <tr>
				  <td>Upload Image</td>
                    <td>
                        <input type="file" name="image1" accept="image/*" required>
                    </td>
                </tr>
                <tr>
				  <td>Upload Any Government Id</td>
                    <td>
                   <input type="file" name="image2" accept="image/*" required>   
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="SUBMIT">
                    </td>
                    
                </tr>
            </table>
        </form>
		</div>
    </body>
</html>
