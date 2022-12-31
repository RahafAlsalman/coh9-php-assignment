<h1>Edit tag</h1>

<form action="/tags/update" method="POST" class="w-50">
    <input type="hidden" name="id" value="<?= $data->tag->id ?>">
    <div class="mb-3">
        <label for="tag-title" class="form-label">tag Title</label>
        <input type="text" class="form-control" id="tag-title" name="title" value="<?= $data->tag->title ?>">
    </div>
    <div class="form-floating">
        <textarea class="form-control" placeholder="Your tag content.." id="tag-content" style="height: 100px" name="content"><?= $data->tag->content ?></textarea>
        <label for="tag-content">tag Content</label>
    </div>
    <div class="my-3">
        <label for="tag-tags">Tags</label>
        <select class="form-select" multiple aria-label="multiple select example" name="tags[]">
            <?php foreach ($data->tag->tags as $tag) : ?>
                <option value="<?= $tag->id ?>"><?= $tag->name ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <button type="submit" class="btn btn-warning mt-4">Update</button>
</form>