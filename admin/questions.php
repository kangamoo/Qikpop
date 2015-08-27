<?
include('menu.php');

/* Main Question page. Shows list of questions */
?>

<style>
	.toprow {
		font-weight: bold;
		
	}
</style>

<h3>Questions</h3>
<a href="/questions/index.php?quizid=0">Add Question</a><br /><br />

<table id="quizlist">
<tr class="toprow"><td>Question</td><td>Status</td><td>Created</td><td>&nbsp;</td></tr>

<?

$quizRS = $db->query("SELECT * FROM quizQuestion ORDER BY createdDate DESC" );
foreach($quizRS as $quiz){ ?>
	<tr><td><a href="/questions/index.php?quizquestionid=<?=$quiz["quizquestionid"]?>"><?=$quiz["question"]?></a></td>
	<td><?=$quiz["status"]?></td><td><?=$quiz["createdDate"]?></td>
	<td><a href="#" class="delete" onclick="return confirm('Are you sure?');">Delete</a></td></tr>

<? } ?>
</table>




<?
/* plain query
$database->query("CREATE TABLE table (
	c1 INT STORAGE DISK,
	c2 INT STORAGE MEMORY
) ENGINE NDB;");
 
$data = $database->query("SELECT email FROM account")->fetchAll();
print_r($data);

order by in select
$database->select("account", "user_id", [
 
	"ORDER" => ['user_name DESC', 'user_id ASC']
 
]);
*/

?>
