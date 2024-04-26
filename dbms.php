<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Users</title>
    <script>
    function toggleUserData() {
        var userTable = document.getElementById("userTable"); 
        var toggleButton = document.getElementById("toggleButton");
        
        if (userTable.style.display === "none") {
            userTable.style.display = "block";
            toggleButton.innerText = "Hide User Information";
        } else { 
            userTable.style.display = "none"; 
            toggleButton.innerText = "View User Information";
        }
    }
    </script>
</head>
<body>

<h1>View Users</h1>

<button id="toggleButton" onclick="toggleUserData()">View All User Information</button>


<form method="POST" action="">
    <label for="searchTerm">Enter Username or Email:</label>
    <input type="text" id="searchTerm" name="searchTerm" required>
    <button type="submit">Search</button>
</form>

<div id="userTable" style="display: none;"> 
    <h2>List of Users</h2>
    <table border="1"> 
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Home Phone</th>
            <th>Cell Phone</th> 
        </tr>
        <?php
        
        // Fetch data from the database
        $servername = "localhost"; 
        $username = "vtnsromy_JayTech456";
        $password = "#Sunset123";
        $dbname = "vtnsromy_Espresso_User";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT First_Name, Last_Name, Email, Address, Home_Phone, Cell_Phone FROM Users"; // SQL query to fetch all users
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["First_Name"] . "</td><td>" . $row["Last_Name"] . "</td><td>" . $row["Email"] . "</td><td>" . $row["Address"] . "</td><td>" . $row["Home_Phone"] . "</td><td>" . $row["Cell_Phone"] . "</td></tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No results found</td></tr>";
        }
        ?>
        
        
    </table>
</div>

<div> 
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['searchTerm'])) {
        $searchTerm = $_POST['searchTerm'];
        
        $sql = "SELECT First_Name, Last_Name, Email, Address, Home_Phone, Cell_Phone FROM Users WHERE Email = '$searchTerm' OR First_Name = '$searchTerm' OR Last_Name = '$searchTerm'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<h2>Search Results</h2>";
            echo "<table border='1'>";
            echo "<tr><th>First Name</th><th>Last Name</th><th>Email</th><th>Address</th><th>Home Phone</th><th>Cell Phone</th></tr>"; // Table headers
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["First_Name"] . "</td><td>" . $row["Last_Name"] . "</td><td>" . $row["Email"] . "</td><td>" . $row["Address"] . "</td><td>" . $row["Home_Phone"] . "</td><td>" . $row["Cell_Phone"] . "</td></tr>"; // Display search results
            }
            echo "</table>";
        } else {
            echo "<h2>No Results Found</h2>";
        }
    }

    // Close the database connection
    $conn->close();
    ?>
</div>

<a href="https://manjeshprasad.com/Assignment2/">Back to home</a>

</body>
</html>
