        <form class="editor" action="editors/user/userUpdate.php" method="post">
            <span class="editor-close">X</span>
            <div class="editor-content">
                <div class="editor-data-info">
                    <label>User ID</label>
                    <input type="text" name="id" readonly>
                </div>
                <div class="editor-data-info">
                    <label>Username</label>
                    <input type="text" name="username" readonly required>
                </div>
                <div class="editor-data-info">
                    <label>Email</label>
                    <input type="text" name="email" readonly required>
                </div>
                <div class="editor-data-info">
                    <label>User Role</label>
                    <input type="number" name="role" min="0" max="1" required>
                </div>
            </div>
            <input type="submit" class="edit-submit" name="user-edit">
        </form>