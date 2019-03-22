<form method="POST">
    <div class="form-group">
        <label>Brand: </label>
        <input type="text" name="brand" class="form-control" required value="<?=$car['brand']?>">
    </div>
    <div class="form-group">
        <label>Year: </label>
        <input type="num" name="year" class="form-control" required value="<?=$car['year']?>">
    </div>
    <input class="btn btn-primary" type="submit" value="Aceptar">
    <a href="/cars" class="btn btn-danger">Cancelar</a>
</form>