<html>
    <head>
        <meta charset="UTF-8">
        <title>Lacey Taylor</title>
        <link rel="stylesheet" type ="text/css" href="baseCSS.css" media="screen" />
    </head>
    <body>

        <header>
            <?php include 'Header.php';?>
        </header>


        <nav>
            <?php include 'Menu.php';?>
        </nav>

        <div id="aboutme">

            <h1>Explaining the Basic Process</h1>
            <br>
            <br>
            <div id="centerContent">
            Although a Git can seem intimidating at first, there are certain cycles that the<br>
            overall process holds to. Understanding the patterns to the workflow helps to<br>
            avoid issues. While following the general process will not cover all possible errors,<br>
            it will assist with avoiding the most common pitfalls
            
            <h2>Underlying Pattern to Git Process</h2> 
                After creating the repository, the cycle of changes and commits begins.<br>
                Managing the changes and the commits in the correct order is overviewd below.<br>
                <ol>
                    <li>If working with a remote repository, verify the most updated copy of the files are in use by pulling from the repository</li>
                    <li>Begin to make changes to the files being worked on</li>
                    <li>If new files are added, add them to the tracking structure</li>
                    <li>Once the files have been updated, add the changes to the staging area for commiting</li>
                    <li>Commit the modifications when satisfied</li>
                    <li>After commiting, if working with a remote repository, push the new commit to the repository</li>
                </ol>
                <br>
                <br>
                <img src="Pictures/Cycle.png" alt="Lifecycle Pic">
                <br>
                <br>
                <a href="index.php">Prev: "Before Starting"</a> | <a href="StartingRepoPage1.php.php">Next: "1-Starting a Repository"</a>
                <br>
                <br>
            </div>
        </div>

        <footer>
           <?php include 'Footer.php';?>
        </footer>
    </body>
</html>


