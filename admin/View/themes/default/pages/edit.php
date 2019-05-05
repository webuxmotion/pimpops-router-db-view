<?php $this->theme->header(); ?>

<?php
$data['ctx'] = $this;
$this->theme->block('components/navbar/navbar', $data);
?>

<section class="hero is-primary">
    <div class="hero-body">
        <div class="container">
            <h1 class="title">
                Update page - <?=$page->title?>
            </h1>
        </div>
    </div>
</section>

<div class="container has-padding-top-50">
    <div class="column is-half">
        <form>
            <input type="hidden" id="page_id" value="<?=$page->id?>">
            <div class="field">
                <label class="label">Title</label>
                <div class="control">
                    <input id="page_title" class="input" type="text" placeholder="Page Title" value="<?=$page->title?>">
                </div>
            </div>
            <div class="field">
                <label class="label">Content</label>
                <div class="control">
                    <textarea id="editor" class="textarea" placeholder="10 lines of textarea" rows="10"><?=$page->content?></textarea>
                </div>
            </div>
            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" onclick="page.update(event)">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>


<?php $this->theme->footer(); ?>
