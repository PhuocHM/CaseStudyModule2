<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="jumbotron jumbotron-fluid" style="text-align: center;">
                        <div class="container">
                            <h1 class="display-4">All User</h1>
                            <p class="lead">This is a modified user controller.</p>
                            <!-- Seach User -->
                            <form action="#" method="get">
                                <div class="input-group mb-3" style="width:60%; margin: 0px auto">
                                    <input name="seach_content" type="text" class="form-control" placeholder="Enter anything you want to seach ...." aria-label="Recipient's username" aria-describedby="button-addon2">
                                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Seach</button>
                                </div>
                            </form>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Are you sure to delete this user ?</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div id="modal_main" class="modal-body">
                                        Please that this action cannot be undone !
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <a id="deleteButton" href="#" class="btn btn-danger">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdropp" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabell">Are you sure to change this user's role ?</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form method="post">
                                        <div id="modal_main" class="modal-body">
                                            <div class="form-check form-switch">
                                                <input name="user_id" id="user_id" type="hidden">
                                                <input name="role" class="form-check-input" type="radio" id="flexSwitchCheckDefault" value='3'>
                                                <label class="form-check-label" for="flexSwitchCheckDefault">General Admin</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input name="role" class="form-check-input" type="radio" id="flexSwitchCheckDefault" value='2'>
                                                <label class="form-check-label" for="flexSwitchCheckDefault">Moderator</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input name="role" class="form-check-input" type="radio" id="flexSwitchCheckDefault" value='1'>
                                                <label class="form-check-label" for="flexSwitchCheckDefault">User</label>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-danger">Change</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-sm">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">UserName</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Password</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($rows as $key => $value) : ?>
                                    <tr>
                                        <th scope="row"><?= $key + 1 ?></th>
                                        <td><?= $value['username'] ?></td>
                                        <td><?= $value['email'] ?></td>
                                        <td><?= md5($value['password']) ?></td>
                                        <td><?= $value['role'] ?></td>
                                        <td>
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdropp" onclick="setRole(<?= $value['id']; ?>)">Edit Role</button>
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="deleteUser(<?= $value['id']; ?>)">Delete</button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function deleteUser(id) {
        document.getElementById('deleteButton').href = "index.php?controller=Admin&action=delete_user&user_id=" + id;
    }

    function setRole(id) {
        document.getElementById('user_id').value = id;

    }
</script>