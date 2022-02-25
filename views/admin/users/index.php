<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="/CSS/admin.css" />
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>
<body>
    <div class="side-bar">
        <div class="sidebar-brand">
            <div class="brand-flex">
                <div class="brand-icons">
                        <span class="las la-bell"></span>
                </div>
            </div>
        </div>

        <div class="sidebar-main">
            <div class="sidebar-user">
                <img class="icon-adminpanel" src="../../../assets/images/user-admin-panel.png">
                <div>
                    <h3>Admin User</h3>
                    <span>admin.user@admin.com</span>
                </div>
            </div>

            <div class="sidebar-menu">
                <div class="menu-head">
                    <span>Dashboard</span>
                </div>
                <ul>
                    <li>
                        <a href="">
                            <span class="las la-balance-scale"></span>
                            Finance
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="las la-chart-pie"></span>
                            Analytics
                        </a>
                    </li>
                </ul>

                <div class="menu-head">
                    <span>Applications</span>
                </div>
                <ul>
                    <li>
                        <a href="">
                            <span class="las la-calendar"></span>
                            Calendar
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="las la-users"></span>
                            Contacts
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="las la-envelope"></span>
                            Mailbox
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="main-content">
        <header>

        </header>
        <div style="display:flex; align-items: center">
            <h1 style="margin-bottom: 30px">Users</h1>
            <button style="margin-left: auto" class="btn">Add user</button>
        </div>
        <main>
            <div class="page-header">
                <table class="table">
                    <thead>
                    <tr>
                        <th>
                            ID
                        </th>
                        <th>
                            Name
                        </th>
                        <th>
                            Email
                        </th>
                        <th>

                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        foreach ($users as $user) {
                            echo "<tr>";
                            echo "<td>" . $user->id . "</td>";
                            echo "<td>" . $user->name . "</td>";
                            echo "<td>" . $user->email . "</td>";
                            echo '<td><span class="las la-trash"/></td>';
                            echo "</tr>";
                        }
                    ?>

                    </tbody>
                </table>
            </div>
        </main>
    </div>

</body>
</html>
