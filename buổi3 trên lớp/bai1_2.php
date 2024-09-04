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

        #error-message {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<form id="myForm">
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
    <p id="error-message"></p>
    <button type="submit" name="submit">Submit</button>
</form>

<script>
document.getElementById('myForm').onsubmit = function(event) {
    event.preventDefault(); // Prevent the form from submitting the default way

    var nameauthor = document.getElementById('name').value.trim();
    var namesach = document.getElementById('namesach').value.trim();
    var namexuatban = document.getElementById('namexb').value.trim();
    var namxb = document.getElementById('namxb').value.trim();

    var errorMessage = '';

    if (nameauthor === '' || namesach === '' || namexuatban === '' || namxb === '') {
        errorMessage = "Vui lòng điền tất cả thông tin.";
    } else if (nameauthor === '') {
        errorMessage = "Vui lòng điền tên tác giả.";
    } else if (namesach === '') {
        errorMessage = "Vui lòng điền tên sách.";
    } else if (namexuatban === '') {
        errorMessage = "Vui lòng điền nhà xuất bản.";
    } else if (namxb === '') {
        errorMessage = "Vui lòng điền năm xuất bản.";
    } else if (!isNumeric(namxb)) {
        errorMessage = "Năm xuất bản phải là số.";
    }

    if (errorMessage) {
        document.getElementById('error-message').innerText = errorMessage;
    } else {
        alert(
            'Tên tác giả: ' + nameauthor + '\n' +
            'Tên sách: ' + namesach + '\n' +
            'Nhà xuất bản: ' + namexuatban + '\n' +
            'Năm xuất bản: ' + namxb
        );
        // Optionally, you can clear the form fields here if needed
        // document.getElementById('myForm').reset();
    }
};

function isNumeric(value) {
    return !isNaN(value) && isFinite(value);
}
</script>

</body>
</html>
