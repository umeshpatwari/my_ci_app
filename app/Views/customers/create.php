<?= view('templates/header'); ?>

<div class="container mt-4">
    <h2>Create Customer</h2>
    <form id="createCustomerForm" action="<?= base_url('/customers/store') ?>" method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="mb-3">
            <label for="mobile" class="form-label">Mobile</label>
            <input type="text" class="form-control" id="mobile" name="mobile" required>
        </div>

        <div class="mb-3">
            <label for="branch_id" class="form-label">Branch</label>
            <select class="form-control" id="branch_id" name="branch_id" required>
                <?php foreach ($branches as $branch) : ?>
                    <option value="<?= $branch['id']; ?>"><?= $branch['name']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="country" class="form-label">Country</label>
            <select class="form-control" id="country" name="country" required>
                <?php foreach ($countries as $country) : ?>
                    <option value="<?= $country['id']; ?>"><?= $country['name']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="city" class="form-label">City</label>
            <input type="text" class="form-control" id="city" name="city" required>
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
        </div>


        <!-- Add more fields as needed -->

        <button type="submit" class="btn btn-primary">Create Customer</button>
    </form>
</div>

<?= view('templates/footer'); ?>
