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

            <h1>Working with Remote Repositories</h1>
            
            <div id="centerContent">
                Remote repositories are repositories that are hosted on an external server.<br>
                Remote repositories are what allow multiple developers to work on the same project at once.<br>
                Work is done by completing work on the local copy of the code, and then syncing<br>
                it with the server.<br>                
                <br>
          
                <h2>Creating a clone repository</h2> 
                Cloning is the process of taking an already existing remote repository and creating a local copy of it.<br>               
                <ol>
                    <li>When a clone is created, it create a copy of all branches and files in the original.</li>
                    <li>These files are created in the current directory location.</li>                    
                </ol>
                <br>
                
                <h2>Terms Specific to Working with Remote Repositories</h2>
                <br>               
                <ol>
                    <li>Publish
                        <ul>
                            <li>Creating branches on the local, and creating a copy on the remote</li>
                            <li>Command: 'git push -u REMOTEBRANCH CURRENTBRANCH'</li>
                        </ul>
                    </li>
                    <li>Push
                        <ul>
                            <li>Writing the locally commited changes to the remote</li>
                            <li>Command: 'git push REMOTEBRANCH CURRENTBRANCH'</li>
                        </ul>                            
                    </li>
                    <li>Fetch
                        <ul>
                            <li>Read any changes made to the remote branch, write to a new local branch</li>
                            <li>Command: 'git fetch REMOTEBRANCH</li>
                        </ul> 
                    </li>
                    <li>Pull
                        <ul>
                            <li>Read any changes made to the remote branch, write and merge to the currently checked out branch</li>
                            <li>Command: 'git pull REMOTEBRANCH</li>
                        </ul> 
                    </li>
                    <li>Origin
                        <ul>
                            <li>The remote version of the Master branch</li>
                            <li>Mirrored with the Master/Origin when pulled down</li>
                        </ul> 
                    </li>
                </ol>
                <br>
                <br>
                <img src="Pictures/Remote1.png" alt="RemoteRepositoryPush">
                <br>
                <br>
                
                <h2>Pattern for Working with Remote Projects</h2> 
                Working with remote repositories adds an additional complication to the process.<br>
                Recognizing the correct pattern of changes and commands will help to simplify.<br>
                <ol>
                    <li>Pull any changes from the remote</li>
                    <li>Finish all changes to the local files</li>
                    <li>Commit changes to the local copy</li>
                    <li>Create a commit to be written to the remote branch<br>
                    <li>Push or Publish the  local changes to the Remote<br>
                    <li>Repeat as needed
                </ol>
                <br>
                <a href="HandleBranchs.php">Prev: "3-Handling Branches"</a> | <a href="UnixCommands.php">Next: "Helpful Unix Commands"</a>
                <br>
                <br>
            </div>
        </div>
        <footer>
           <?php include 'Footer.php';?>
        </footer>
    </body>
</html>

