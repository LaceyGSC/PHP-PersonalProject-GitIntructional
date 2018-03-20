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

            <h1>Tracking Files</h1>
            
            <div id="centerContent">
                Git works by tracking the changes made to a particular file within the repository.<br>
                Each file that is being worked on needs to be tagged to indicate it should be tracked,<br>
                and changes need to be periodically commited, or added to the git snapshot structure.<br>
                <br>
                
                <h2>Checking the Status of the Repository</h2> 
                Checking the status of the repository means checking which files have been changed, and which commits have been<br>
                applied to the repository.<br>
                <ol>
                    <li>Run the command 'git status'
                    <li>This will display the current branch.
                       <ul> 
                            <li>A branch is a subfolder that allows changes to be made while preserving the underlying structure.</li>    
                       </ul>
                    </li>
                    
                    <li>The second thing shown will indicate if changes that need to be tracked, or if the repository is up to date.
                        <ul> 
                            <li>Changes indicated will either be untracked files, or uncommited changes to a file.</li>    
                       </ul>
                    </li>
                    <li>Run 'git status' command again to confirm changes took affect</li>
                </ol>
                <br>
                
                <h2>Adding File for Tracking</h2> 
                In order to record a history of changes, a file needs to be added for tracking to the repository.<br>
                <ol>
                    <li>Run the 'git status' to confirm untracked files
                    <li>Run the 'git add FILENAME' command for each untracked file needed
                        <ul> 
                            <li>FILENAME should be the full file name, including extention. i.e "help.txt".</li>
                            <li>Add has multiple uses, discussed below.</li>
                            <li>Not all file need to be tracked, but untracked files do have any change history.</li>
                        </ul>         
                    </li>
                    <li>After tracking the files, the change will show underneath the "Changes to be commited" section.</li>
                </ol>
                <br>
                <br>
                <img src="Pictures/TrackingChanges1.png" alt="Tracking Chagnes 1">
                <br>
                <br>
                <h2>Committing Changes</h2> 
                A commit is a set of updates that need to be applied to a repository.<br>
                Any changes must first be added to a commit, which is called staging.<br>
                <ol>
                    <li>Run the 'git add' to add latest copy of tracked files
                        <ul> 
                            <li>If the file has been modified, an old version will be listed under "Changes to be commited".</li>
                            <li>The new version is under the "Changes not added to commit".</li>
                            <li>Adding takes the most recent version of the file, and add it to the pending commit.</li>
                        </ul>
                    </li>
                    <li> To remove a file from the staging area, run command 'rm FILENAME'</li>
                    <li> Command 'git rm FILENAME' will remove from project and tracking entirely</li>
                    <li> Run command 'git mv CURRENTFILEPATH TARGETFILEPATH' to move a file in a project</li>
                    <li>Run 'git diff' if the precise differences between the old and new copy are needed
                        <ul> 
                            <li>'git diff' only shows the changes in files not yet added to the commit</li>   
                            <li>'git diff --staged' shows differences between files from previous commits</li>
                        </ul>
                    </li>
                    <li>Run 'git commit' after all files have been added to the staging section
                        <ul> 
                            <li>Every commit will require a commit message.</li> 
                            <li>Use the message for noting what has been modified in this commit.</li>
                        </ul> 
                    </li>
                    <li>Commiting finally adds the changes to the repository.</li>
                </ol>
                <br>
                <br>
                <br>
                <img src="Pictures/TrackingChanges2.png" alt="Tracking Chagnes 1">
                <br>
                <br>
                
                <h2>Commit History for Code Control</h2> 
                Using multiple commits allows for roll-backs and revision in case of coding issues.<br>
                <ol>
                    <li>Run the 'git log' command to see a history of commits</li>
                    <li>Run 'git commit --amend' to undo all changes in the latest commit
                        <ul> 
                            <li>Use 'git commit --amend' again, to undo the previous amend and restore the original commit.</li>
                        </ul> 
                    </li>               
                </ol>
                <br>              
                <a href="StartingRepoPage1.php">Prev: "1-Starting A Repository"</a> | <a href="HandleBranchs.php">Next: "3-Handling Branches"</a>
                <br>
                <br>
            </div>
        </div>
        <footer>
           <?php include 'Footer.php';?>
        </footer>
    </body>
</html>
