<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Document</title>
        <style>
            header {
                background: #e3e3e3; 
                padding: 2em; 
                text-align: center; 
            } 
        </style>
    </head>
    <body>
        <ul>
            <li>
                <strong>Name: </strong> <?= $task['title']; ?>
            </li>
            <li>
                <strong>Due Date: </strong> <?= $task['due']; ?>
            </li>
            <li>
                <strong>Person Responsible: </strong> <?= $task['assigned_to']; ?>
            </li>
                <strong>Status: </strong> <?= $task['completed'] ? 'Complete' : 'Incomplete'; ?>
            </li>
        </ul>
    </body>
</html>