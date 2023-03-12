<div class="card-grid-item is-raised" style="text-align: left">
    <h3 class="dark-inverted mb-1">Enroll Student</h3>
    <div class="field">
        <form>
            @csrf
            <div class="control has-icon has-validation">
                <input type="text" class="input is-primary-focus" placeholder="name">
                <div class="form-icon">
                    <i data-feather="user"></i>
                </div>
            </div>
            <div class="control has-icon has-validation">
                <input type="number" class="input is-primary-focus" placeholder="mobile">
                <div class="form-icon">
                    <i data-feather="phone"></i>
                </div>
            </div>
            <div class="control has-validation">
                <div class="select" style="display: block !important;">
                    <select style="width: 100%">
                        <option selected disabled>Gender</option>
                        <option>Boy</option>
                        <option>Girl</option>
                    </select>
                </div>
            </div>

            <p class="label title">Enroll to Class : <span class="text-danger">*</span></p>
            <div class="control has-validation">
                <div class="select" style="display: block !important;">
                    <select style="width: 100%">
                        <option disabled selected>Select a "Class" to enroll</option>
                        <option class="subtitle">American English File</option>
                    </select>
                </div>
            </div>
            <p class="label title">Enroll to Course : <span class="text-danger">*</span></p>
            <div class="control has-validation">
                <div class="select" style="display: block !important;">
                    <select style="width: 100%">
                        <option disabled selected>Select a "Course" to enroll</option>
                        <option class="subtitle">American English File Starter</option>
                        <option class="subtitle">American English File 1</option>
                        <option class="subtitle">American English File 2</option>
                    </select>
                </div>
            </div>
            <p class="label title">Enroll to Section : <span class="text-danger">*</span></p>
            <div class="control has-validation">
                <div class="select" style="display: block !important;">
                    <select style="width: 100%">
                        <option disabled selected>Select a "Section" to enroll</option>
                        <option class="subtitle">Section A</option>
                        <option class="subtitle">Section B</option>
                    </select>
                </div>
            </div>
            <button
                    type="submit" class="button h-button is-primary mt-5">
                Enroll
            </button>
        </form>
    </div>
</div>