<?php include_once('dbconfig.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="site-shell">
        <header class="site-header">
            <a class="brand" href="index.php"><span class="brand-mark">U</span><span>University</span></a>
            <span class="header-note">Student registry</span>
        </header>
        <main class="page-content">
            <div class="page-heading">
                <div>
                    <p class="eyebrow">Records</p>
                    <h1>Students</h1>
                </div>
                <a class="primary-link" href="addStudent.php"><span aria-hidden="true">+</span> Add student</a>
            </div>
            <?php $data = $con->query("SELECT * FROM students"); ?>
            <div class="table-frame">
                <table class="student-table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($data->num_rows > 0) { ?>
                            <?php foreach ($data as $student) { ?>
                                <tr>
                                    <td class="student-id"><?php echo $student['id']; ?></td>
                                    <td><?php echo $student['name']; ?></td>
                                    <td><?php echo $student['email']; ?></td>
                                    <td><?php echo $student['phone']; ?></td>
                                    <td class="action-cell">
                                        <a class="action-link" href="">Edit</a>
                                        <a onclick="return confirm('Are you sure? you want to delete?')" class="action-link delete" href="student_delete.php?id=<?php echo $student['id']; ?>">Delete</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        <?php } else { ?>
                            <tr><td class="empty-state" colspan="5">No student records yet.</td></tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>
</html>