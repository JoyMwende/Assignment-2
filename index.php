<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <title>Calculator</title>
</head>
<body>
    <form action="calc.php" method="POST">
        <h1>Simple Calculator in PHP Using OOP</h1>
        <div class="form-content">
            <label>First Number:</label>
             <input type="text" name="num1Inserted">
            <label>Second Number:</label>
            <input type="text" name="num2Inserted">
            <label>Operator:</label>
            <select name="operatorAdded">
                <option value="add">Add</option>
                <option value="subtract">Subtract</option>
                <option value="multiply">Multiply</option>
                <option value="divide">Divide</option>
            </select>
            <button type="submit">Calculate</button>
        </div>
    </form>

</body>
</html>