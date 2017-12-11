<div>
    <div class="row column text-center">

    </div>
</div>
<hr>

<div class="row column">
    <h3>Edit details</h3>
    <div class="row column text-left">
        <form method="POST">
            <label>Name</label>
            <input type="text" name="name" value="<?php echo $property['name']; ?>">
            <label>Description</label>
            <textarea name="description"><?php echo $property['description']; ?></textarea>
            <input class="button success" type="submit" name="" value="SAVE">
        </form>
    </div>
</div>
