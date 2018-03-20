<!DOCTYPE html>
 
<!-- 
Created on : Feb 20, 2016, 12:21:37 PM
Author     : Lacey Taylor
-->

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

            <h1>Before Starting with Git</h1>
            
            <div id="aboutMeText">
                <br>
                <br>
                Git is a version control system, used to track the changes made
                to a project between multiple people.<br>
                It works by tracking changes to files within the project.<br>
                Any file structure can be managed using git, and the application itself
                is very light and relatively simple to use.<br>
                <br>
                
                <h2>Purpose of This Help Document</h2> 
                This Git Tutorial was created to help those who want to learn how to use the Git<br>
                command line tool. The document will cover the basics of the Git process, as well as <br>
                the commands needed to work in the command line environment. The instructions presented <br>
                in this tutorial are geared towards those who already have a basic understanding of the <br>
                underlying goals and uses of Git. However, those who are entirely new to Git can use it <br>
                as and additional reference to further their study. While this tutorial will focus on the <br>
                command line controls, there are additional resources provided on the Resources page for <br>
                self guided study into the other types of Git interfaces available.
                <br>
                <br>
                
                <h2>Tools Needed</h2> 
                Git is an application, and needs to be installed to your machine.<br>
                It can be installed from this link: <br>
                <a href="https://git-scm.com/downloads">Git Download Link</a> <br>
                Use the most current version of the package specific to your Operating System<br>
                <br>
                <br>
                
                <h2>Preparations</h2> 
                After installation, Git's global settings need to be set.<br>
                The two main settings are the name and email.<br>
                These two fields are used as identifying tags for who made a modification<br>
                to the repository.<br>
                To set these variables, enter the following commands:<br>
                <ol>
                    <li>git config --global user.name "Your Name"</li>
                    <li>git config --global user.email youremail@something.com</li>
                </ol>
                <br>
                Command explanation:
                <ul>
                    <li>All git-based commands need to preface with git, to differentiate between unix and git commands</li>
                    <li>Config: git command to access configuration files</li>
                    <li> --global: a switch, or a sub command, specific to config</li>
                    <li> Last is the variable name, followed by variable value</li>
                </ul>
                <a href="StartingRepoPage1.php">Next: "Starting A Repository"</a>
                <br>
                <br>
            </div>
        </div>


        <footer>
           <?php include 'Footer.php';?>
        </footer>
    </body>
</html>
