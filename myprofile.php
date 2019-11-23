
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>MY PROFILE</title>
<link rel="stylesheet" href="form.css" >
      
    </head>
    <body>
        <h1>MY PROFILE</h1>
        <form>
            <table>
                <tr>
                    <td>
                        NAME<input type="text" name="name" required/>
                    </td>
                </tr> 
                <tr>
                    <td>GENDER</td>
                    <td>
                        <input type="radio"  name="gender" value="male"/>MALE
                        <input type="radio" name="gender" value="female"/>FEMALE
                    </td>
                    
                </tr>
                <tr>
                    <td>
                        ROOM NUMBER<input type="number" name="room number" required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        ADVANCE AMOUNT<input type="number" name="advance amount" required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        SECURITY AMOUNT<input type="number" name="security amount" required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        METER NUMBER<input type="number" name="meter number" required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        DATE OF JOINING<input type="date" name="date" required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        CONTACT NUMBER<input type="tel" name="contact number" required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        EMERGENCY CONTACT NUMBER<input type="tel" name="emergency contact number" required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        EMAIL-ID<input type="email" name="email" required/>
                    </td>
                </tr>
                <tr>
                
                    <td>
                        OCCUPATION<input type="text" name="occupation" required/> 
                    </td>
                </tr>
                <tr>
                    <td>
                        UPLOAD IMAGE<input type="file" name="image1" accept="image/*" required/>
                    </td>
                </tr>
                <tr>
                    <td>
                     UPLOAD ANY GOVERNMENT ID<input type="file" name="image2" accept="image/*" required/>   
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="SUBMIT"/>
                    </td>
                    
                </tr>
            </table>
        </form>
    </body>
</html>
