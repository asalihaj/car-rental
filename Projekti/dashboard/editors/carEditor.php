        <form class="editor car-editor" action="../../database/carValidation.php">
            <span class="editor-close">X</span>
            <div class="editor-content">
                <div class="editor-data-info">
                    <label>Car ID</label>
                    <input title="car-id" type="text">
                </div>
                <div class="editor-data-info">
                    <label>Manufacturer</label>
                    <input type="text" name="manufacturer">
                </div>
                <div class="editor-data-info">
                    <label>Model</label>
                    <input type="text" name="model">
                </div>
                <div class="editor-data-info">
                    <label>Color</label>
                    <input type="text" name="color">
                </div>
                <div class="editor-data-info">
                    <label>Prod. Year</label>
                    <input type="text" name="prod-year">
                </div>
                <div class="editor-data-info">
                    <label>Transmission</label>
                    <input type="text" name="transmission">
                </div>
                <div class="editor-data-info">
                    <label>Category</label>
                    <select name="category">
                        <option value="coupe">Coupe</option>
                        <option value="sedan">Sedan</option>
                        <option value="hatchback">Hatchback</option>
                        <option value="suv">SUV</option>
                        <option value="sport">Sport</option>
                    </select>
                </div>
                <div class="editor-data-info">
                    <label>Image</label>
                    <input type="file" name="car-image" accept="image/*">
                </div>
                <div class="editor-data-info">
                    <label>Rental Rate</label>
                    <input type="text" name="rental-date">
                </div>
                <div class="editor-data-info">
                    <label>Capacity</label>
                    <input type="text" name="capacity">
                </div>
            </div>
            <input type="submit" class="edit-submit" name="car-add">
        </form>