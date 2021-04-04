<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>
                <?php if ($user['id']): ?>
                    Update user <b><?php echo $user['manifacture'] ?></b>
                <?php else: ?>
                    Create new User
                <?php endif ?>
            </h3>
        </div>
        <div class="card-body">

            <form method="POST" enctype="multipart/form-data"
                  action="">
                <div class="form-group">
                    <label>Car Manifacture</label>
                    <input name="manifacture" value="<?php echo $user['manifacture'] ?>"
                           class="form-control <?php echo $errors['manifacture'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['manifacture'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>Year</label>
                    <input name="year" value="<?php echo $user['year'] ?>"
                           class="form-control <?php echo $errors['year'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['year'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>Car model</label>
                    <input name="model" value="<?php echo $user['model'] ?>"
                           class="form-control  <?php echo $errors['model'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['model'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>Motor type</label>
                    <input name="type" value="<?php echo $user['type'] ?>"
                           class="form-control  <?php echo $errors['type'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['type'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input name="price" value="<?php echo $user['price'] ?>"
                           class="form-control  <?php echo $errors['price'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['price'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input name="picture" type="file" class="form-control-file">
                </div>

                <button class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</div>