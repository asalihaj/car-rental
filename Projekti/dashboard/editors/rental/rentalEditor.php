        <form class="editor" title="edit-only" action="../../database/rentalValidation.php" method="post">
            <span class="editor-close">X</span>
            <div class="editor-content">
                <div class="editor-data-info">
                    <label>Rental ID</label>
                    <input type="text" name="id">
                </div>
                <div class="editor-data-info">
                    <label>Rental Date</label>
                    <div class="date-container">
                        <input type="date" name="rental-date">
                        <input type="time" name="rental-date">
                    </div>
                </div>
                <div class="editor-data-info">
                    <label>Return Date</label>
                    <input type="text" name="return-date">
                </div>
                <div class="editor-data-info">
                    <label>Pick up location</label>
                    <input type="text" name="pu-location">
                </div>
                <div class="editor-data-info">
                    <label>Drop off location</label>
                    <input type="text" name="do-location">
                </div>
                <div class="editor-data-info">
                    <label>User ID</label>
                    <input type="text" name="user">
                </div>
                <div class="editor-data-info">
                    <label>Car ID</label>
                    <input type="text" name="car">
                </div>
                <div class="editor-data-info">
                    <label>Total</label>
                    <input type="text" name="total">
                </div>
            </div>
            <input type="submit" class="edit-submit" name="rental-edit">
        </form>