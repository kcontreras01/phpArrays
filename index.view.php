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
<!--        <li>-->
<!--            <strong>Status: </strong> --><?//=$task['completed'] ? 'Complete' : 'Incomplete'; ?>
<!--        </li>-->

        <li>
            <strong>Status: </strong>

            <?php if($task['completed']) : ?>
                <span class="icon">&#9989;</span>
            <?php else : ?>
                <span class="icon">Incomplete</span>
            <?php endif; ?>

        </li>

	</ul>

</body>
</html>