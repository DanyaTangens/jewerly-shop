<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header"><?php echo $title; ?></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <form action="/admin/add" method="post">
                            <div class="form-group">
                                <label>Название изделия</label>
                                <input class="form-control" type="text" name="name">
                            </div>
                            <div class="form-group">
                                <label>Описание</label>
                                <input class="form-control" type="text" name="description">
                            </div>
                            <div class="form-group">
                                <label>Цена</label>
                                <input class="form-control" type="text" name="price" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                            </div>
                            <div class="form-group">
                                <label>Категория изделия</label>
                                <select class="form-control" name="category">
                                    <option value="1">Браслеты</option>
                                    <option value="2">Сережки</option>
                                    <option value="3">Кольца</option>
                                    <option value="4">Ожерелья, цепочки (все что на шею)</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Изображение</label>
                                <input class="form-control" type="file" name="img">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block" onclick="$("form").submit(function(){$(this).find("input[type=text], select").val("");});">>Добавить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>