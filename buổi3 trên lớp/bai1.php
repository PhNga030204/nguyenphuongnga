<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
        form {
            width: 300px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f7f7f7;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        form label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }

        form input[type="text"],
        form input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        form button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        form button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<form id="myForm" action="" method="post" onsubmit="return handleFormSubmit()">
    <label>Tác giả</label>
    <input id="name" type="text" name="nametgia">
    <br>
    <label>Tên sách</label>
    <input id="namesach" type="text" name="namesach">
    <br>
    <label>Nhà xuất bản</label>
    <input id="namexb" type="text" name="namexb">
    <br>
    <label>Năm xuất bản</label>
    <input id="namxb" type="number" name="namxb">
    <br>
    <p id="error-message" style="color:red;"></p>
    <button type="submit" name="submit">Submit</button>
</form>

<script>
function validateForm() {
    var name = document.getElementById('name').value;
    var namesach = document.getElementById('namesach').value;
    var namexb = document.getElementById('namexb').value;
    var namxb = document.getElementById('namxb').value;
    var errorMessage = '';

    if (name === '') {
        errorMessage += 'Tác giả không được để trống.\n';
    }

    if (namesach === '') {
        errorMessage += 'Tên sách không được để trống.\n';
    }

    if (namexb === '') {
        errorMessage += 'Nhà xuất bản không được để trống.\n';
    }

    if (namxb === '' || isNaN(namxb)) {
        errorMessage += 'Năm xuất bản phải là một số hợp lệ.\n';
    }

    if (errorMessage) {
        alert(errorMessage);
        return false; // Prevent form submission
    }

    // If no errors, return true to allow form submission
    return true;
}

function handleFormSubmit() {
    if (validateForm()) {
        var name = document.getElementById('name').value;
        var namesach = document.getElementById('namesach').value;
        var namexb = document.getElementById('namexb').value;
        var namxb = document.getElementById('namxb').value;

        alert(
            'Tên tác giả: ' + name + '\n' +
            'Tên sách: ' + namesach + '\n' +
            'Nhà xuất bản: ' + namexb + '\n' +
            'Năm xuất bản: ' + namxb
        );

        // Prevent form from actually submitting
        return false;
    }

    return false; // Prevent form from actually submitting if there are errors
}
</script>
</body>
</html>
