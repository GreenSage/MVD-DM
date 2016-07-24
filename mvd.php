<? session_start();
/* + STRING CONTAINER */
d::cookie();
$db = mysqli_connect('localhost', '[USER]', '[PASS]]', '[DB NAME]');
$pdo = new PDO("mysql:host=localhost;dbname=[DB NAME]]", '[USER]', '[PASS]');
/* - STRING CONTAINER */
class m {
  // Provides all the containers and the re-usable functions.
	function logout() {
		session_destroy();
		echo v::re('index.php');
	}
	function check($v) {
		if ($v == 'login' && $_SESSION['in'] == 1) {
			//
		}
		else {
			echo v::re('index.php');
		}
	}
}
class v {
  // Provides the changes and enhancements to the view (primarily javascript right now.)
  // The view is assumed to be whatever resource is being used to view the content such as a screen or watch or printer.
	function alertBox($v) {
		return '<script>window.alert("'.$v.'")</script>';
	}
	function alertConfirm($v) {
    return '<script>window.confirm("'.$v.'")</script>';
	}
	function re($v) {
		echo '<script>window.location = \''.$v.'\'</script>';
	}
}
class d {
  // Provides for SQL, displays data, works with the data (transformations.)
	function cookie() {
		if(!isset($_COOKIE['id'])) {
			
			if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
				$ip=$_SERVER['HTTP_CLIENT_IP'];
			}
			elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
				$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
			}
			else {
				$ip=$_SERVER['REMOTE_ADDR'];
			}
			$browser = hash('sha512', $ip.$_SERVER['HTTP_USER_AGENT']);
			setcookie("id", $browser, strtotime('+30 days'));
			$_COOKIE['id'] = $browser;
			return $s;
		}
	}
	function sql($v) {
		// Testing only.
		return $q = $db->query($v);
	}
	function sqluone ($table, $col, $row) {
		// sql function to update one single field
		// Testing only.
	}
	function niceDate($v) {
		// date
    	$v = strtotime($v);
    	$v = strtoupper(date("d M Y", $v));
    	return $v;
	}
	function h($v) {
		// regular sanitization
		// "h" used as function name for conciseness and it's easy to remember as a hook for htmlspecialchars.
    	$v = trim($v);
    	$v = stripslashes($v);
    	$v = htmlspecialchars($v);
    	return $v;
	}
	function s($db, $v) {
		// SQL sanitization
		return mysqli_real_escape_string($db, $v);
	}
  	function sqlJobSelect() {
		// Testing only.
		// "Jobs" is table name. Testing running single select statements through a routine data function.
    	$s = "
    	SELECT
    	Job_id, Job_name, Job_description
    	FROM
    	Jobs";
		return $s;
	}
}
