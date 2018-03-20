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

            <h1>Handling Branches in Git</h1>
            
            <div id="centerContent">
                Branches are a structure within Git that allow for multiple versions of the same project files to exist at the same time.<br>
                These branches are completely self contained once created, and allow for experimentation and group work.<br>
                Most conflicts in Git arise when trying to merge branches with the same files that have been modified in different ways.<br>                
                <br>
          
                <h2>Create a Branch</h2> 
                After the creation of a project, the next step is to create a branch.<br>
                The master branch should be the very base of the code, and little to no work should take place on the master.<br>               
                <ol>
                    <li>Run the command 'git branch BRANCHNAME'
                        <ul> 
                            <li>A new working directory is created, with the exact same files as the parent.</li> 
                            <li>Files on the branch are only modified there; the parent will only contain the original until merged.</li>
                            <li>This command only creates a branch; it does not change the working directory.</li>
                        </ul>
                    </li>
                    <li>The current branch is displayed at the end of the command line directory.
                        <ul> 
                            <li>Command 'git status' also shows the current branch</li>
                        </ul>
                    </li>
                    <li>Branches are cheap to create and store, so it is better to use and delete them often as needed.</li>
                    <li>Run the 'git branch -d BRANCHNAME to kill an undesired branch
                        <ul> 
                            <li>-d is a switch command telling git to "Delete"</li>
                        </ul>  
                    </li>
                </ol>
                <br>
                
                <h2>Moving Between Branches</h2> 
                Git allows for easy movement between branches.<br>
                The act of moving to a new branch is referred to as "checking out" the branch being moved too.<br>
                <ol>
                    <li>Run the 'git checkout BRANCHNAME' to move to the branch directory
                        <ul> 
                            <li>Checking out the current branch will revert it to the last commit.</li>
                            <li>Any  changes not commited before a checkout are lost.</li>
                        </ul>         
                    </li>
                </ol>
                <br>
                
                <h2>Merging Branches</h2> 
                When development is finished on a branch, and it needs to be paired with another branch,<br>
                it can be merged. Merging takes the two file structures, compares them, and combines them when<br>
                there are no conflicting files.<br>
                <ol>
                    <li>Run the 'git merge BRANCHNAME' to merge target branch with the currently checked out branch</li>
                    <li> To merge two branches, both branches must share a common ancestor.
                        <ul> 
                            <li>The closer the ancestor, the less chance for complicated conflicts to exist.</li>   
                        </ul>
                    </li>                        
                    <li>Merge conflicts arise from the same file from different branches with different edits.
                        <ul> 
                            <li>All conflicts must be resolved before the final merge commit will finish.</li>
                            <li>While conflicts are being handled, the commit will pause.</li>
                            <li>Run the 'git status' command to see the file with conflicts</li>
                        </ul>
                    </li>
                    <li> There are two methods to resolve the conflicts;</li>
                    <li> Manually, such as a text editor:
                        <ul> 
                            <li>The file with conflicts will contain auto generated tags identifying the differences.</li>
                            <li>Each branches version has its own tag.</li>
                            <li>Only one version of the tagged line can exis.t</li>
                        </ul>                           
                    </li>
                    <li>Using a MergeTool:
                        <ul> 
                            <li>A variety of MergeTools are part of Git already.</li>   
                            <li>The tool walks through the file conflict by conflict.</li>
                            <li>Again, only one version of the line can exist.</li>
                        </ul>
                    </li>
                    <li>Run command 'git commit' to complete the merging commit once all conflicts are resolved</li>
                </ol>
                <br>
                
                <h2>Managing branches</h2> 
                There are ways to see all of the branches currently created for a project,<br>
                and to see what state they are in without having to checkout each branch.<br>
                <ol>
                    <li>Run the 'git branch' command to see all current branches</li>
                    <li>Run 'git branch -v' to see the current commit version of the branch
                        <ul> 
                            <li>Other switch statements exist to narrow down the branches as well.</li>
                        </ul> 
                    </li>
                </ol>
                <br>              
                <a href="AddingFilesToTrack.php">Prev: 2-"Tracking Changes"</a> | <a href="RemoteRepos.php">Next: "4-Remote Repositories"</a>
                <br>
                <br>
            </div>
        </div>
        <footer>
           <?php include 'Footer.php';?>
        </footer>
    </body>
</html>

