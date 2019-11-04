<h1>Admin panel</h1>
<a href="/admin/default/create" class="btn btn-primary">Создать</a>
<table class="table">
    <thead>
    <tr>
        <td>#</td>
        <td>Назввание</td>
        <td>Действия</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($tasks as $task): ?>
        <tr>
            <td><?= $task->id; ?></td>
            <td><?= $task->title; ?></td>
            <td>
                <a href="/admin/default/edit/<?= $task->id; ?>">Редактировать</a>
                <a href="/admin/default/delete/<?= $task->id; ?>">Удалить</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>