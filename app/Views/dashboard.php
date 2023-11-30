<!-- app/Views/dashboard/index.php -->

<?= view('templates/header'); ?>

<div class="container mt-4">
    <h2>Customer List</h2>
<a href="<?= base_url('customers/create'); ?>">Create Customer</a>
    <?php if (!empty($customers)) : ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <!-- Add more columns as needed -->
                </tr>
            </thead>
            <tbody>
                <?php foreach ($customers as $customer) : ?>
                    <tr>
                        <td><?= $customer['name']; ?></td>
                        <td><?= $customer['email']; ?></td>
                        <!-- Add more columns as needed -->
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <!-- Display pagination links -->
        <?= $pager->links() ?>
    <?php else : ?>
        <p>No customers found.</p>
    <?php endif; ?>
</div>

<?= view('templates/footer'); ?>
