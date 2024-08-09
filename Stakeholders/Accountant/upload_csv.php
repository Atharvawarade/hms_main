<div class="modal-content">
    <div class="modal-header" style="display:block !important;">
        <h1 class="modal-title fs-5" id="staticBackdropLabel" style="text-align:center;">Upload New Admission Students CSV</h1>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
    </div>
    <div class="modal-body d-flex flex-column align-items-center pt-0">
        <dotlottie-player src="https://lottie.host/b0eba376-8743-4aa1-b462-b1f2d1cabc66/kGdcXPkNMJ.json" background="transparent" speed="1" style="width: 30%; height: 30%;" loop autoplay></dotlottie-player>
        
        <form action="Upload.php" method="POST" enctype="multipart/form-data" class="w-100 mt-0">
            <div class="mb-3">
                <label for="batch" class="form-label">Select Batch</label>
                <select id="batch" name="batch" class="form-select" required>
                    <option value="">Choose...</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="csvFile" class="form-label">Upload CSV File</label>
                <input type="file" id="csvFile" name="csvFile" class="form-control" accept=".csv" required>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Upload</button>
            </div>
        </form>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Understood</button> -->
    </div>
</div>
