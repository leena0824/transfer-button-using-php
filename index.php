<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Data</title>
    <style>
         body {
            font-family: 'Lexend Deca', sans-serif;
            background-color: #f8f9fa;
            color: #343a40;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            box-shadow: 0 2px 5px rgba(0,0,0,0.15);
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #dee2e6;
        }

        th, td {
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #343a40;
            color: white;
        }

        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tbody tr:hover {
            background-color: #e9ecef;
        }

        .btn {
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
            text-decoration-line: underline;
            text-decoration-color: white;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .btn:disabled {
            background-color: #6c757d;
            cursor: not-allowed;
        }

        center {
            text-align: center;
            font-size: 36px;
            margin-top: 20px;
            color: #007bff;
        }

        center:hover {
            color: #0056b3;
        }
        
        h4 {
           text-decoration-line: underline;
           text-decoration-color: purple;
        }
        
        th {
            text-decoration-line: underline;
            text-decoration-color: yellow;  
        }

        .address-input {
            display: none;
            margin-top: 10px;
        }

        .address-input input {
            width: 80%;
            padding: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>  
    <center><h4>Display Students Lists</h4></center>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Leena</td>
                <td>shrutisuryawanshi343@gmail.com</td>
                <td>
                    <button class="btn" onclick="showAddressInput(this)">Transfer</button>
                    <div class="address-input">
                        <input type="text" placeholder="Enter Address">
                        <button class="btn" onclick="transferData(this)">Submit</button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>shruti</td>
                <td>shrutisuryawanshi343@gmail.com</td>
                <td>
                    <button class="btn" onclick="showAddressInput(this)">Transfer</button>
                    <div class="address-input">
                        <input type="text" placeholder="Enter Address">
                        <button class="btn" onclick="transferData(this)">Submit</button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>kashish</td>
                <td>kashishkapse@gmail.com</td>
                <td>
                    <button class="btn" onclick="showAddressInput(this)">Transfer</button>
                    <div class="address-input">
                        <input type="text" placeholder="Enter Address">
                        <button class="btn" onclick="transferData(this)">Submit</button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>Disha</td>
                <td>dishashirbad@gmail.com</td>
                <td>
                    <button class="btn" onclick="showAddressInput(this)">Transfer</button>
                    <div class="address-input">
                        <input type="text" placeholder="Enter Address">
                        <button class="btn" onclick="transferData(this)">Submit</button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td>gouri</td>
                <td>gourisonwane@gmail.com</td>
                <td>
                    <button class="btn" onclick="showAddressInput(this)">Transfer</button>
                    <div class="address-input">
                        <input type="text" placeholder="Enter Address">
                        <button class="btn" onclick="transferData(this)">Submit</button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>6</td>
                <td>sakshi</td>
                <td>sakshiparate@gmail.com</td>
                <td>
                    <button class="btn" onclick="showAddressInput(this)">Transfer</button>
                    <div class="address-input">
                        <input type="text" placeholder="Enter Address">
                        <button class="btn" onclick="transferData(this)">Submit</button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>7</td>
                <td>arnav</td>
                <td>arnavramteke@gmail.com</td>
                <td>
                    <button class="btn" onclick="showAddressInput(this)">Transfer</button>
                    <div class="address-input">
                        <input type="text" placeholder="Enter Address">
                        <button class="btn" onclick="transferData(this)">Submit</button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>8</td>
                <td>sharayu</td>
                <td>sharayuawachat@gmail.com</td>
                <td>
                    <button class="btn" onclick="showAddressInput(this)">Transfer</button>
                    <div class="address-input">
                        <input type="text" placeholder="Enter Address">
                        <button class="btn" onclick="transferData(this)">Submit</button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>9</td>
                <td>Amit</td>
                <td>AmitBhure@gmail.com</td>
                <td>
                    <button class="btn" onclick="showAddressInput(this)">Transfer</button>
                    <div class="address-input">
                        <input type="text" placeholder="Enter Address">
                        <button class="btn" onclick="transferData(this)">Submit</button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>10</td>
                <td>mrunali</td>
                <td>mrunalideotale@gmail.com</td>
                <td>
                    <button class="btn" onclick="showAddressInput(this)">Transfer</button>
                    <div class="address-input">
                        <input type="text" placeholder="Enter Address">
                        <button class="btn" onclick="transferData(this)">Submit</button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>11</td>
                <td>krishna</td>
                <td>krishnabehere@gmail.com</td>
                <td>
                    <button class="btn" onclick="showAddressInput(this)">Transfer</button>
                    <div class="address-input">
                        <input type="text" placeholder="Enter Address">
                        <button class="btn" onclick="transferData(this)">Submit</button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>12</td>
                <td>komal</td>
                <td>komalbalpande@gmail.com</td>
                <td>
                    <button class="btn" onclick="showAddressInput(this)">Transfer</button>
                    <div class="address-input">
                        <input type="text" placeholder="Enter Address">
                        <button class="btn" onclick="transferData(this)">Submit</button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>13</td>
                <td>vaeshnevi</td>
                <td>vaeshnevisudan@gmail.com</td>
                <td>
                    <button class="btn" onclick="showAddressInput(this)">Transfer</button>
                    <div class="address-input">
                        <input type="text" placeholder="Enter Address">
                        <button class="btn" onclick="transferData(this)">Submit</button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>14</td>
                <td>ruchika</td>
                <td>ruchikakambe@gmail.com</td>
                <td>
                    <button class="btn" onclick="showAddressInput(this)">Transfer</button>
                    <div class="address-input">
                        <input type="text" placeholder="Enter Address">
                        <button class="btn" onclick="transferData(this)">Submit</button>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

    <script>
        function showAddressInput(button) {
            var addressInputDiv = button.nextElementSibling;
            addressInputDiv.style.display = 'block';
            button.style.display = 'none';
        }

        function transferData(button) {
            var row = button.closest('tr');
            var id = row.cells[0].innerText;
            var name = row.cells[1].innerText;
            var email = row.cells[2].innerText;
            var addressInput = button.previousElementSibling;
            var address = addressInput.value.trim();

            if (address === '') {
                alert('Please enter an address.');
                return;
            }

            var xhr = new XMLHttpRequest();
            xhr.open("POST", "transfer.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    if (xhr.responseText === "success") {
                        button.disabled = true;
                        button.innerText = "Transferred";
                        addressInput.disabled = true;
                    } else {
                        alert("Error: " + xhr.responseText);
                    }
                }
            };
            xhr.send("id=" + id + "&name=" + name + "&email=" + email + "&address=" + encodeURIComponent(address));
        }
    </script>
</body>
</html>
