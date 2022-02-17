<?php include 'header.php'; ?>

<form action="">
    <div class="form-group">
        <label for="birthday">section reserve aux adultes : </label>
        <select name="birthday" id="birthday" class="form-control">
            <?php for($i=2010 ; $i > 1900 ; $i--): ?>
                <option value="<?= $i ?>"> <?= $i ?></option>
                <?php endfor ?>
        </select>
    
    </div>
    <button type="submit">envoyer</button>

</form>
<?php include 'footer.php' ?>