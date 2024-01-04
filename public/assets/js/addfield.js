function addFields() {
    var container = document.getElementById("fields-container");

    var newTitleField = document.createElement("div");
    newTitleField.classList.add("form-group");
    newTitleField.innerHTML = `
      <div class="row">
        <div class="col-8">
          <div class="form-group pb-3">
            <input type="text" class="form-control" name="title[]" placeholder="أدخل الخدمة الاضافية">
          </div>
        </div>
        <div class="col-4">
          <div class="form-group pb-3">
            <input type="text" class="form-control" name="price[]" placeholder="أدخل السعر">
          </div>
        </div>
      </div>
    `;
    container.appendChild(newTitleField);
  }
  function addduration() {
    var container = document.getElementById("fields-container");

    var newTitleField = document.createElement("div");
    newTitleField.classList.add("form-group");
    newTitleField.innerHTML = `
      <div class="row">
        <div class="col-8">
          <div class="form-group pb-3">
            <input type="time" class="form-control" name="title[]" placeholder="أدخل الخدمة الاضافية">
          </div>
        </div>
        <div class="col-4">
          <div class="form-group pb-3">
            <input type="time" class="form-control" name="price[]" placeholder="أدخل السعر">
          </div>
        </div>
      </div>
    `;
    container.appendChild(newTitleField);
  }  