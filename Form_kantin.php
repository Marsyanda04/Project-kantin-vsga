<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodies Canteen</title>
</head>
<body>
    <p>Foodies Canteen</p>
    <form action="IsiForm_kantin.php" method="post">
        <table>
            <tr bgcolor="blue" height = "25px">
                <td style="color: white;"><b>Foods</b></td>
                <td style="color: white;"><b>Drinks</b></td>
            </tr>
            <tr>
                <td>
                    <div style = "border: 1px; display: block; padding: 2px; width: 190px; height: 85px;">
                        <select name ="foods[]" size ="5" multiple="multiple">
                            <option value = 10000 name = "Nasgor" selected = "Selected">Nasi Goreng Rp. 10.000,-</option>
                            <option value = 20000 name = "Sate">Sate Kambing Rp. 20.000,-</option>
                            <option value = 25000 name = "Tongseng">Tongseng Rp. 25.000,-</option>
                        </select>
                    </div>
                </td>
                <td width="220px">
                        <input type="checkbox" value=7000 name="drinks[]">Juice Rp. 7.000,-<br>
                    
                        <input type="checkbox" value=5000 name="drinks[]">Coffee Rp. 5.000,-<br>
                    
                        <input type="checkbox" value=3000 name="drinks[]">Tea Rp. 3.000,-<br>
                    
                        <input type="checkbox" value=6000 name="drinks[]">Coconut Ice Rp. 6.000,-<br>
                </td>
            </tr>
            <tr bgcolor="blue" height="30px">
                <td></td>
                <td>
                    <form action="IsiForm_kantin.php">
                    <input type="submit" name = "submit" value="Submit">
                    </form>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>