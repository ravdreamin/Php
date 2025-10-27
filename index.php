<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Converter Calculator</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Unit Converter Calculator</h1>

        <form action="convert.php" method="POST">
            <!-- Input value -->
            <label>Enter Value:</label>
            <input type="number" name="value" step="any" required>

            <!-- Category selection -->
            <label>Select Category:</label>
            <select name="category" id="category" required onchange="updateUnits()">
                <option value="">-- Choose Category --</option>
                <option value="length">Length</option>
                <option value="weight">Weight</option>
                <option value="temperature">Temperature</option>
            </select>

            <!-- From Unit -->
            <label>From Unit:</label>
            <select name="unit_from" id="unit_from" required></select>

            <!-- To Unit -->
            <label>To Unit:</label>
            <select name="unit_to" id="unit_to" required></select>

            <button type="submit">Convert</button>
        </form>
    </div>

    <script>
        // Define available units by category
        const units = {
            length: ["meter", "centimeter", "kilometer"],
            weight: ["gram", "kilogram"],
            temperature: ["celsius", "fahrenheit"]
        };

        function updateUnits() {
            const category = document.getElementById('category').value;
            const fromSelect = document.getElementById('unit_from');
            const toSelect = document.getElementById('unit_to');

            // Clear existing options
            fromSelect.innerHTML = "";
            toSelect.innerHTML = "";

            if (category && units[category]) {
                units[category].forEach(unit => {
                    const option1 = document.createElement('option');
                    const option2 = document.createElement('option');
                    option1.value = option2.value = unit;
                    option1.text = option2.text = unit;
                    fromSelect.appendChild(option1);
                    toSelect.appendChild(option2);
                });
            }
        }
    </script>
</body>
</html>
