<?php $this->theme->header(); ?>
<main>
    <div class="container">

        <div class="row">
            <div class="col">
                        
                <h3>Create page</h3>

            </div>
        </div>

        <div class="row">
            <div class="col-9">
                <form>
                    <div class="mb-3">
                        <label for="formTitle" class="form-label">Title</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Title page...">
                    </div>
                    <div class="mb-3">
                        <label for="formContent" class="form-label">Content</label>
                        <textarea class="form-control"  id="formContent"></textarea>
                    </div>
                </form>

            </div>

            <div class="col-3">
                <div>
                    <p>Publish this page</p>
                    <button type="submit" class="btn btn-primary">Publish</button>
                </div>
            </div>
        </div>

      
    </div>
</main>

<?php $this->theme->footer(); ?>
