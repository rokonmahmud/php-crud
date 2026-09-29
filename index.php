<?php include_once('dbconfig.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="icon.PNG" type="image/x-icon">
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
                            <th scope="col">SL.</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($data->num_rows > 0) { ?>
                            <?php foreach ($data as $index => $student) { ?>
                            <?php 
                                $counter = $index + 1;
                            ?>
                                <tr>
                                    <td class="student-id"><?php echo $counter; ?></td>
                                    <td><?php echo $student['name']; ?></td>
                                    <td><?php echo $student['email']; ?></td>
                                    <td><?php echo $student['phone']; ?></td>
                                    <td class="action-cell">
                                        <a class="action-link" href="student_edit.php?id=<?php echo $student['id']; ?>"><svg aria-hidden="true" viewBox="0 0 16 16" width="14" height="14" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"><path d="M11.5 2.5 13.5 4.5M2.5 13.5l3.2-.7 7.1-7.1a1.4 1.4 0 0 0-2-2l-7.1 7.1-.7 2.7Z"/></svg> Edit</a>
                                        <a onclick="return confirm('Are you sure? you want to delete?')" class="action-link delete" href="student_delete.php?id=<?php echo $student['id']; ?>"><svg aria-hidden="true" viewBox="0 0 16 16" width="14" height="14" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"><path d="M2.5 4.5h11M6 4.5V2.8h4v1.7m2.2 0-.6 9H4.4l-.6-9m3.2 2.2v4.5m2 0V6.7"/></svg> Delete</a>
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