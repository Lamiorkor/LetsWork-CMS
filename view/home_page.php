<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Let's Work! - Home Page</title>
    <link rel="stylesheet" href="../css/home_page.css">
</head>
<body>
    <div class="navigation">
        <ul>
            <li>
                <a href="../view/home_page.php">
                    <span class="icon"><img src='../assets/home_icon.png' alt='home' title='homepage' style='width: 20px;'></span>
                    <span class="title">Home</span>
                </a>
            </li>
            <li>
                <a href="../admin/chore_control_view.php">
                    <span class="icon"><img src='../assets/plus.png' alt='add_chore' title='add_chore_page' style='width: 15px;'></span>
                    <span class="title">Add Chores</span>
                </a>
            </li>
            <li>
                <a href="../admin/assign_chore_view.php">
                    <span class="icon"><img src='../assets/pencil.png' alt='assign_chore' title='assign_chore_page' style='width: 15px;'></span>
                    <span class="title">Assign Chores</span>
                </a>
            </li>
            <li>
                <a href="../login/logout_view.php">
                    <span class="icon"><img src='../assets/logout.png' alt='logout' title='logout' style='width: 24px;'></span>
                    <span class="title">Logout</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="home-page">
        <section class="statistics" onclick="navigateToChoreManagement()">
            <div class="status-box in-progress">
                <p>In Progress</p>
                <span>2</span>
            </div>
            <div class="status-box incomplete">
                <p>Incomplete</p>
                <span>1</span>
            </div>
            <div class="status-box completed">
                <p>Completed</p>
                <span>3</span>
            </div>
        </section>

        <br>
        <br>

        <section class="user-info">
            <h2>Welcome, User</h2>
        </section>

        <br>
        <br>

        <section class="upcoming-chores" >
            <h2 style="margin-top:2%"> Upcoming Chores</h2>
            <ul>
                <li>Cook Banku - Due on 2024-02-10</li> 
                <li>Fry Fish - Due on 2024-02-10</li> 
            </ul>
        </section>

        <div class="score">
            <p>Completion Score:</p>
            <span style="color: yellow;">50%</span>
        </div>

    </div>

    <!-- <div class="logout">
        <span><a href="../login/logout_view.php">Logout</a></span>
    </div>

    <div class="admin">
        <span><a href="../admin/chore_control_view.php">Chore Control</a></span>
    </div> -->

    <script src="../js/home_page.js"></script>

</body>
</html>