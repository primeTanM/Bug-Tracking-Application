<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
    <link rel="stylesheet" href="styles.css">
    
</head>
<body>
    <nav>
        <h1>Post your Bugs here.</h1>
    </nav>

    <form id="newQuote" class="create-post" action="post_save.php" method="POST">
        <label for="title">Title of your bug</label>
        <input type="text" name="Title" id="title" />
        <label for="description">Description of the bug</label>
        <textarea name="Desc" id="comment" cols="20" rows="10"></textarea>
        <label for="status">Bug Status</label>
        <select id="status" name="Status">
            <option value="Open">Open</option>
            <option value="Closed">Closed</option>
            <option value="Work in Progress">Work in Progress</option>
        </select>
        <input type="submit" value="POST" id="submit"/>
        <input type="reset" value="Form Reset" id="reset">
    </form> 
</body>
</html>