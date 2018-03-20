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

            <h1>Helpful Unix Commands</h1>
            
            <div id="centerContent">
                Because Git is built on the Unix platform, it expects the user to know how to<br>
                navigate the PC file structure using the command line.<br>
                Some of the most common commands used with git are listed below.<br>
                <br>
          
                <h2>Terms</h2>                
                <ul>
                    <li>'cd'
                        <ul>
                            <li>"Change Directory"</li>
                            <li>Changes the current directory to the specified file path</li>
                        </ul>
                    </li>
                    <li>'ls'
                        <ul>
                            <li>"List"</li>
                            <li>Lists all of the files and folders in the current directory</li>
                            <li>Uses switches like -a to show hidden files, or -l to show detailed lists</li>
                        </ul>
                    </li>
                    <li>'mkdir'
                        <ul>
                            <li>"Make Directory"</li>
                            <li>Makes a folder in the current directory</li>
                        </ul>
                    </li>
                    <li>'rm'
                        <ul>
                            <li>"Remove"</li>
                            <li>Removes the file or folder from the path specified</li>
                        </ul>
                    </li>
                    <li>'pwd'
                        <ul>
                            <li>"Print Working Directory"</li>
                            <li>Shows the current directory</li>
                        </ul>
                    </li>
                </ul>
                
                <h2>Link for Additional Commands and Help</h2>
                <ul>
                    <li><a href='http://mally.stanford.edu/~sr/computing/basic-unix.html'>Basic UNIX commands</a></li>
                    <li> <a href='https://kb.iu.edu/d/afsk'>Introduction to Unix commands</a></li>
                </ul>
               
                <br>
                <a href="RemoteRepos.php">Prev: "Remote Repositories"</a> | <a href="GlossaryPage.php">Next: "Additional Links"</a>
                <br>
                <br>
            </div>
        </div>
        <footer>
           <?php include 'Footer.php';?>
        </footer>
    </body>
</html>


