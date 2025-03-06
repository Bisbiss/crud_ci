<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Data</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100">
    <div class="container max-w-3xl mx-auto bg-white p-8 my-8 rounded-xl shadow-md">
        <div class="flex justify-between items-center">
            <h1 class="text-3xl font-bold my-8">List Data</h1>
            <a href="/tambah" class="bg-blue-500 text-sm hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Tambah</a>
        </div>
        <table class="table-auto border-collapse w-full">
            <thead>
                <tr>
                    <th class="border border-gray-600 px-4 py-2">No</th>
                    <th class="border border-gray-600 px-4 py-2">Name</th>
                    <th class="border border-gray-600 px-4 py-2">Email</th>
                    <th class="border border-gray-600 px-4 py-2">Phone</th>
                    <th class="border border-gray-600 px-4 py-2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; foreach ($users as $user) : ?>
                    <tr>
                        <td class="border border-gray-600 px-4 py-2"><?= $no++ ?></td>
                        <td class="border border-gray-600 px-4 py-2"><?= $user['name'] ?></td>
                        <td class="border border-gray-600 px-4 py-2"><?= $user['email'] ?></td>
                        <td class="border border-gray-600 px-4 py-2"><?= $user['phone'] ?></td>
                        <td class="border border-gray-600 px-4 py-2">
                            <a href="<?= '/ubah/'.$user['id'] ?>" class="bg-yellow-500 hover:bg-yellow-700 text-white text-xs font-bold py-2 px-4 rounded">Edit</a>
                            <a href="<?= '/hapus/'.$user['id'] ?>" class="bg-red-500 hover:bg-red-700 text-white text-xs font-bold py-2 px-4 rounded">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
</body>
</html>