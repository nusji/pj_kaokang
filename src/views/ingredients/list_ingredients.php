<?php
// index.php หรือไฟล์เริ่มต้นของโปรเจกต์
set_include_path(get_include_path() . PATH_SEPARATOR . $_SERVER['DOCUMENT_ROOT'] . '/src/models');
require_once('ingredient_model.php');
$ingredients = ingredient::getAllIngredients();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Material List</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../public/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="mt-5">จัดการวัตถุดิบ</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>รหัสวัตถุดิบ</th>
                    <th>ชื่อวัตถุดิบ</th>
                    <th>จำนวนคงเหลือ</th>
                    <th>หน่วยวัตถุดิบ</th>
                </tr>
            </thead>
            <tbody>
                <?php if (isset($ingredients) && is_iterable($ingredients)) : ?>
                    <?php foreach ($ingredients as $ingre) : ?>
                        <tr>
                            <td><?= htmlspecialchars($ingre->getId(), ENT_QUOTES, 'UTF-8') ?></td>
                            <td><?= htmlspecialchars($ingre->getName(), ENT_QUOTES, 'UTF-8') ?></td>
                            <td><?= htmlspecialchars($ingre->getQuantity(), ENT_QUOTES, 'UTF-8') ?></td>
                            <td><?= htmlspecialchars($ingre->getUnit(), ENT_QUOTES, 'UTF-8') ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
        <!-- Pagination Links -->
        <nav>
            <ul class="pagination">
                <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
                    <li class="page-item <?= ($page == $i) ? 'active' : '' ?>">
                        <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                    </li>
                <?php endfor; ?>
            </ul>
        </nav>

    </div>

    <!-- Bootstrap JS and dependencies (Popper.js and jQuery) -->
    <script src="https://code.jquery.com/jquery-3.6.0.minscript/script>
    <script src=" https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="../../public/js/bootstrap.min.js"></script>
</body>

</html>