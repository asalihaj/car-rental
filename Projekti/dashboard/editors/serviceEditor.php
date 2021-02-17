        <form class="editor" action="../../database/serviceValidation.php">
            <span class="editor-close">X</span>
            <div class="editor-content">
                <div class="editor-content" hidden>
                    <label>Service ID</label>
                    <input name="service-id" type="text" hidden>
                </div>
                <div class="editor-content">
                    <label>Title</label>
                    <input name="service-title" type="text">
                </div>
                <div class="editor-content">
                    <label>Description</label>
                    <input name="service-desc" type="text">
                </div>
                <div class="editor-content">
                    <label>Last Update</label>
                    <input name="service-update" type="text">
                </div>
                <div class="editor-content">
                    <label>Updated By User</label>
                    <input name="service-user" type="text">
                </div>
            </div>
            <input type="submit" class="edit-submit" name="service-add">
        </form>