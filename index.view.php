<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Tasks for the Day</h1>

	<ul>



        <li>
            <strong>Name: </strong> <?=ucwords($task['title']); ?>
        </li>
        <li>
            <strong>Due Date: </strong> <?=ucwords($task['due']); ?>
        </li>
        <li>
            <strong>Person Responsible: </strong> <?=ucwords($task['assigned_to']); ?>
        </li>
        <li>
            <strong>Status: </strong> <?=$task['completed'] ? 'Complete' : 'Incomplete'; ?>
        </li>

	</ul>

</body>
</html>