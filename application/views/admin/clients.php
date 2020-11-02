<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card mb-3">
            <?php if (empty($data)): ?>
                <p>Список клиентов пуст</p>
            <?php else: ?>
               <div class="table-responsive">
                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">ФИО</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Телефон</th>
                            <th scope="col">Сообщение</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($data as $val): ?>
                            <tr>
                                <th scope="row"><?php echo htmlspecialchars($val['id'], ENT_QUOTES); ?></th>
                                <td><?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?></td>
                                <td><?php echo htmlspecialchars($val['email'], ENT_QUOTES); ?></td>
                                <td><?php echo htmlspecialchars($val['phone'], ENT_QUOTES); ?></td>
                                <td><?php echo htmlspecialchars($val['message'], ENT_QUOTES); ?></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>     
                </div>                   
            <?php endif; ?>
        </div>
    </div>
</div>