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

            <h1>Creating a Repository</h1>
            
            <div id="centerContent">
                <br>
                <br>
                There are two main ways to begin creating a repository.<br>
                The first is to create a local repository, either in preparation<br>
                for a project or in the directory of an existing one.<br>
                The other method is to clone a repository from a remote source.<br>
                <br>
                
                <h2>Initializing a Repository</h2> 
                This method is used for creating a new repository for a local project.<br>
                <ol>
                    <li>Change the working directory to location of your project
                        <ul>
                            <li>This can be done with a series of Unix commands.</li>
                            <li>cd to "Change Directory"</li>
                            <li>mkdir to "Make a Directory", or a folder</li>
                            <li>ls to "List", or see files in current directory</li>
                            <li>pwd to see current directory location</li>
                        </ul>
                    <li>Run the git init command 
                        <ul>
                            <li>Init is the command to create a blank repository structure.</li>
                        </ul>
                    </li>
                    <li>Use the ls -a command to verify the folder was created</li>
                </ol>
                <br>
                <br>
                <img src="Pictures/StartRepoImage1.png" alt="Image of commands used to init a repository">
                <br>
                <h2>Cloning a Repository</h2> 
                This method is used to create a local copy of a git repository on the local machine.<br>
                <ol>
                    <li>Change the working directory to location where you will want the remote project to be stored on your machine
                    <li>Use above Unix commands to navigate</li>
                    <li>Run the git clone REMOTEURL command
                        <ul>
                            <li>clone tells it to create a blank file, then copy the existing file structure</li>
                            <li>REMOTEURL needs to be the actual address of the remote repository. i.e. "https:\\git.repository.git"</li>
                        </ul>
                    </li>
                    <li>Use the ls -a command to verify the folder was created, all expected files present</li>
                </ol>
                <br>
                <br>
                <img src="Pictures/StartRepoImage2.png" alt="Image of commands used to clone a repository">
                <br>
                <br>                
                <a href="index.php">Prev: "Before Starting"</a> | <a href="AddingFilesToTrack.php">Next: "2-Tracking Changes"</a>
                <br>
                <br>
            </div>
        </div>


        <footer>
           <?php include 'Footer.php';?>
        </footer>
    </body>
</html>

