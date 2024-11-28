<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="../views/css/animate.css">
 
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-sm animate__animated animate__fadeIn">
            <div class="card-body p-4">
                <h1 class="text-center mb-4 text-primary animate__animated animate__bounceIn"> Users List  </h1>
                <div class="text-end mb-4">
                    <a href="index.php?action=add" class="btn btn-primary animate__animated animate__pulse animate__infinite">
                        <i class="bi bi-person-plus"></i> Add New User
                    </a>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered animate__animated animate__fadeInUp">
                        <thead class="table-primary">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $user): ?>
                                <tr class="table-row">
                                    <td><?php echo $user['id']; ?></td>
                                    <td>
                                        <i class="bi bi-person-circle text-primary"></i>
                                        <?php echo $user['name']; ?>
                                    </td>
                                    <td>
                                        <i class="bi bi-envelope text-primary"></i>
                                        <?php echo $user['email']; ?>
                                    </td>
                                    <td>
                                        <a href="index.php?action=edit&id=<?php echo $user['id']; ?>" class="btn btn-sm btn-outline-primary">
                                            <i class="bi bi-pencil-square"></i> Edit
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
