<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header"><?php echo $title; ?></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <form action="/admin/edit/<?php echo $data['id']; ?>" method="post" >
                            <div class="form-group">
                                <label>Название</label>
                                <input class="form-control" type="text" value="<?php echo htmlspecialchars($data['name'], ENT_QUOTES); ?>" name="name">
                            </div>
                            <div class="form-group">
                                <label>Описание</label>
                                <input class="form-control" type="text" value="<?php echo htmlspecialchars($data['description'], ENT_QUOTES); ?>" name="description">
                            </div>
                            <div class="form-group">
                                <label>Текст</label>
                                <input class="form-control" type="text" name="price" value="<?php echo htmlspecialchars($data['price'], ENT_QUOTES); ?>"onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                            </div>                       
                            <div class="form-group">
                                <label>Изображение</label>
                                <input class="form-control" type="file" name="img">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block" onclick="$("form").submit(function(){$(this).find("input[type=text], select").val("");});">>Сохранить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>