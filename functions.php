<?php  
// Function to add a new user
function addUser($conn, $username, $password) {
	$sql = "SELECT * FROM users WHERE username=?";
	$stmt = $conn->prepare($sql);
	$stmt->execute([$username]);

	// Check if username already exists
	if($stmt->rowCount()==0) {
		$sql = "INSERT INTO users (username,password) VALUES (?,?)";
		$stmt = $conn->prepare($sql);
		return $stmt->execute([$username, $password]); // Execute SQL query
	}
}

// Function to authenticate user login
function login($conn, $username, $password) {
	$query = "SELECT * FROM users WHERE username=?";
	$stmt = $conn->prepare($query);
	$stmt->execute([$username]);

	// Check if user exists
	if($stmt->rowCount() == 1) {
		// Fetch user data
		$row = $stmt->fetch();

		// Store user info as a session variable
		$_SESSION['userInfo'] = $row;

		// Get user data from the fetched row
		$uid = $row['user_id'];
		$uname = $row['username'];
		$passHash = $row['password'];

		// Validate password 
		if(password_verify($password, $passHash)) {
			// Set session variables and return true
			$_SESSION['user_id'] = $uid;
			$_SESSION['username'] = $uname;
			$_SESSION['userLoginStatus'] = 1;
			return true;
		}
		else {
			return false;
		}
	}
}

?>
