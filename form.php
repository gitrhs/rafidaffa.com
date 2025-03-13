<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Head content remains unchanged -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Formulir pendaftaran data diri kepengurusan PPIM (Persatuan Pelajar Indonesia Malaysia) 2025-2026. Isi data lengkap anda untuk bergabung dengan kepengurusan.">
    <meta name="keywords"
        content="PPIM, Persatuan Pelajar Indonesia Malaysia, kepengurusan, pendaftaran, mahasiswa Indonesia, Malaysia">
    <meta name="author" content="PPIM">
    <meta name="language" content="id">

    <meta property="og:title" content="Kepengurusan PPIM 2024-2025">
    <meta property="og:description" content="Formulir Data Diri Kepengurusan PPIM 2024-2025">
    <meta property="og:image" content="/ppimbanner.jpg">
    <meta property="og:url" content="https://ppim.org/form">
    <meta property="og:type" content="website">
    <link rel="icon" href="/ppim-small.png" type="image/png">
    <link rel="shortcut icon" href="/ppim-small.png" type="image/png">
    <link rel="apple-touch-icon" href="/ppim-small.png">
    <title>Formulir Data Diri Kepengurusan PPIM 2024-2025</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="main.css" />
    <style>
    .file-upload-container {
        width: 100%;
        margin-top: 5px;
    }

    .dropbox {
        border: 2px dashed #ccc;
        border-radius: 8px;
        padding: 20px;
        text-align: center;
        cursor: pointer;
        background-color: #f9f9f9;
        transition: all 0.3s ease;
        position: relative;
        min-height: 120px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .dropbox:hover {
        border-color: #999;
        background-color: #f0f0f0;
    }

    .dropbox.dragover {
        border-color: #4a90e2;
        background-color: #e8f2fd;
    }

    .upload-icon {
        font-size: 2em;
        margin-bottom: 10px;
        display: block;
    }

    .upload-hint {
        color: #999;
        font-size: 0.8em;
        margin-top: 5px;
    }

    #preview-container {
        width: 100%;
        top: 0;
        left: 0;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .preview-image {
        max-width: 100%;
        max-height: 100%;
        border-radius: 4px;
        object-fit: contain;
    }

    .cancel-button {
        position: absolute;
        top: 10px;
        right: 10px;
        background-color: rgba(0, 0, 0, 0.5);
        color: white;
        border: none;
        border-radius: 50%;
        width: 24px;
        height: 24px;
        font-size: 12px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0;
        line-height: 1;
    }

    .cancel-button:hover {
        background-color: rgba(0, 0, 0, 0.7);
    }
    
    /* Added styles for photo examples */
    .photo-example {
        border: 1px solid #ddd;
        border-radius: 10px;
        padding: 4px;
        max-height: 200px;
        width: auto;
        margin-bottom: 8px;
    }
    
    .example-caption {
        font-size: 0.85rem;
        text-align: center;
        margin-bottom: 15px;
    }
    </style>
</head>

<body class="main-content">
    <div class="d-flex align-items-center">
        <div class="container" style="width: 98%; max-width: 800px">
            <br>
            <div style="width: 100%; text-align: center;">
                <img src="/uploads/BANNERPPIM25-08.jpg" alt="" class="projectimg" style="border: solid 1px #ccced2 !important;">
            </div>
            <h5>Data Diri Kepengurusan PPIM 2024-2025</h5>
            <hr>
            <form id="contactForm" method="POST" action="saveform.php" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-12 col-md-6" style="margin-top: 10px;">
                        <span class="animated-label" id="nameLabel">Nama Lengkap</span>
                        <input type="text" class="contact-control form-control contact-form required-field" name="name"
                            placeholder="Nama Lengkap" id="nameInput">
                    </div>
                    <div class="col-12 col-md-6" style="margin-top: 10px;">
                        <span class="animated-label" id="asalLabel">Asal Kampus</span>
                        <input type="text" class="contact-control form-control contact-form required-field" name="from"
                            placeholder="Asal Kampus" id="asalInput">
                    </div>
                    <div class="col-12" style="margin-top: 10px;">
                        <span class="animated-label" id="departmentLabel">Departemen</span>
                        <select class="contact-control form-control contact-form required-field" name="department"
                            id="departmentInput">
                            <option value="">Nama Departemen</option>
                            <option value="KSA">Biro Kesekretariatan dan Administrasi</option>
                            <option value="Pusdatin">Biro Pusat Data dan Informasi</option>
                            <option value="Danus">Departemen Dana dan Usaha</option>
                            <option value="Huvoks">Departemen Hukum dan Advokasi</option>
                            <option value="Keagamaan">Departemen Keagamaan</option>
                            <option value="Kelembagaan">Departemen Kelembagaan</option>
                            <option value="Kominfo Desain">Departemen Komunikasi dan Informasi (Desain Grafis)</option>
                            <option value="Kominfo Mulmet">Departemen Komunikasi dan Informasi (Multimedia)</option>
                            <option value="Kominfo Sosmed">Departemen Komunikasi dan Informasi (Sosial Media)</option>
                            <option value="Pendidikan">Departemen Pendidikan</option>
                            <option value="Penkastrat">Departemen Penelitian dan Kajian Strategis</option>
                            <option value="Sosmas">Departemen Sosial Masyarakat</option>
                            <option value="Segaya">Departemen Seni, Budaya, dan Olahraga</option>
                        </select>
                    </div>
                </div>

                <div class="col-12" style="margin-top: 20px;">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <span class="animated-label" id="formalPhotoLabel">Formal Photo</span>
                            <div class="file-upload-container">
                                <input type="file" id="formalPhotoInput" name="formal_photo"
                                    class="contact-form file-input required-field" accept="image/*" style="display: none;">
                                <div id="formalDropbox" class="dropbox">
                                    <div id="formal-upload-prompt">
                                        <span class="upload-icon">ðŸ“·</span>
                                        <p>Formal Photo</p>
                                        <p class="upload-hint">JPG, PNG or JPEG (max. 5MB)</p>
                                    </div>
                                    <div id="formal-preview-container" style="display: none;">
                                        <img id="formal-image-preview" src="" alt="Preview" class="preview-image">
                                        <button type="button" id="formal-cancel-upload" class="cancel-button">âœ•</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <span class="animated-label" id="nonFormalPhotoLabel">Non-Formal Photo</span>
                            <div class="file-upload-container">
                                <input type="file" id="nonFormalPhotoInput" name="non_formal_photo"
                                    class="contact-form file-input required-field" accept="image/*" style="display: none;">
                                <div id="nonFormalDropbox" class="dropbox">
                                    <div id="non-formal-upload-prompt">
                                        <span class="upload-icon">ðŸ“·</span>
                                        <p>Non-Formal Photo</p>
                                        <p class="upload-hint">JPG, PNG or JPEG (max. 5MB)</p>
                                    </div>
                                    <div id="non-formal-preview-container" style="display: none;">
                                        <img id="non-formal-image-preview" src="" alt="Preview" class="preview-image">
                                        <button type="button" id="non-formal-cancel-upload"
                                            class="cancel-button">âœ•</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="text-primary" style="font-size: 0.9em; text-decoration: none;"
                        data-bs-toggle="modal" data-bs-target="#photoGuidelinesModal">Lihat persyaratan foto</a>
                </div>

                <div class="modal fade" id="photoGuidelinesModal" tabindex="-1"
                    aria-labelledby="photoGuidelinesModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content"
                            style="border-radius: 12px; border: none; box-shadow: 0 2px 12px rgba(0,0,0,0.1);">
                            <div class="modal-header border-0 pb-0">
                                <h5 class="modal-title fw-semibold" id="photoGuidelinesModalLabel"
                                    style="font-size: 1.1rem;">Persyaratan Foto</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body pt-2">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex flex-column gap-2 mb-3">
                                            <div class="d-flex align-items-center gap-2">
                                                <div class="text-primary">â€¢</div>
                                                <div>Baju putih (semi formal)</div>
                                            </div>
                                            <div class="d-flex align-items-center gap-2">
                                                <div class="text-primary">â€¢</div>
                                                <div>Foto dari pinggang ke atas</div>
                                            </div>
                                            <div class="d-flex align-items-center gap-2">
                                                <div class="text-primary">â€¢</div>
                                                <div>Kualitas foto HD</div>
                                            </div>
                                            <div class="d-flex align-items-center gap-2">
                                                <div class="text-primary">â€¢</div>
                                                <div>Pencahayaan cukup</div>
                                            </div>
                                            <div class="d-flex align-items-center gap-2">
                                                <div class="text-primary">â€¢</div>
                                                <div>Jilbab putih/hitam bagi yang berhijab</div>
                                            </div>
                                            <div class="d-flex align-items-center gap-2">
                                                <div class="text-primary">â€¢</div>
                                                <div>Ukuran file maks. 5 MB</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6">
                                                <img src="/uploads/formal.jpeg" alt="Formal Photo Example" class="photo-example mx-auto d-block" loading="lazy">
                                                <p class="example-caption">Contoh Foto Formal</p>
                                            </div>
                                            <div class="col-6">
                                                <img src="/uploads/nonformal.jpeg" alt="Non-Formal Photo Example" class="photo-example mx-auto d-block" loading="lazy">
                                                <p class="example-caption">Contoh Foto Non-Formal</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Error container -->
                <div id="form-errors" class="alert alert-danger mt-3" style="display: none;">
                    <strong>Error!</strong>
                    <ul id="error-list"></ul>
                </div>

                <br>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-main active btn-submit" id="submitContact" disabled>Submit</button>
                </div>
                <br><br>
            </form>
        </div>
    </div>

    <!-- Loading Modal -->
    <div class="modal fade" id="loadingModal" tabindex="-1" aria-labelledby="loadingModalLabel" aria-hidden="true"
        data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center py-4">
                    <div class="spinner-border text-primary mb-3" role="status" style="width: 3rem; height: 3rem;">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <h5>Processing your submission...</h5>
                    <p class="text-muted mb-0">Please wait while we upload your data.</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="https://unpkg.com/external-svg-loader@latest/svg-loader.min.js" async></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
    function toggleLabel(input, label) {
        if (input.value.trim()) {
            label.classList.add("visible");
        } else {
            label.classList.remove("visible");
        }
    }

    // Function to handle textarea auto-expand
    function autoExpandTextarea(textarea) {
        textarea.style.height = "auto";
        textarea.style.height = textarea.scrollHeight + "px";
    }

    function setupPhotoUpload() {
        function setupUploadArea(config) {
            const {
                dropboxId,
                inputId,
                previewContainerId,
                imagePreviewId,
                uploadPromptId,
                cancelButtonId,
                labelId
            } = config;

            const dropbox = document.getElementById(dropboxId);
            const fileInput = document.getElementById(inputId);
            const previewContainer = document.getElementById(previewContainerId);
            const imagePreview = document.getElementById(imagePreviewId);
            const uploadPrompt = document.getElementById(uploadPromptId);
            const cancelButton = document.getElementById(cancelButtonId);
            const photoLabel = document.getElementById(labelId);

            function handleFileSelect(file) {
                if (!file.type.match('image.*')) {
                    alert('Please select an image file (JPG, PNG or JPEG)');
                    return;
                }

                if (file.size > 5 * 1024 * 1024) {
                    alert('File size should be less than 5MB');
                    return;
                }

                const reader = new FileReader();

                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                    previewContainer.style.display = 'flex';
                    uploadPrompt.style.display = 'none';
                    photoLabel.classList.add('visible');
                    validateForm(); // Check form validation when file is uploaded
                };

                reader.readAsDataURL(file);
            }

            dropbox.addEventListener('click', function() {
                fileInput.click();
            });

            fileInput.addEventListener('change', function() {
                if (this.files.length > 0) {
                    handleFileSelect(this.files[0]);
                }
            });

            ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
                dropbox.addEventListener(eventName, preventDefaults, false);
            });

            ['dragenter', 'dragover'].forEach(eventName => {
                dropbox.addEventListener(eventName, () => dropbox.classList.add('dragover'), false);
            });

            ['dragleave', 'drop'].forEach(eventName => {
                dropbox.addEventListener(eventName, () => dropbox.classList.remove('dragover'), false);
            });

            dropbox.addEventListener('drop', function(e) {
                const dt = e.dataTransfer;
                const files = dt.files;

                if (files.length > 0) {
                    handleFileSelect(files[0]);
                }
            });

            cancelButton.addEventListener('click', function(e) {
                e.stopPropagation();
                fileInput.value = '';
                previewContainer.style.display = 'none';
                uploadPrompt.style.display = 'block';
                photoLabel.classList.remove('visible');
                validateForm(); // Check form validation when file is removed
            });
        }

        function preventDefaults(e) {
            e.preventDefault();
            e.stopPropagation();
        }

        setupUploadArea({
            dropboxId: 'formalDropbox',
            inputId: 'formalPhotoInput',
            previewContainerId: 'formal-preview-container',
            imagePreviewId: 'formal-image-preview',
            uploadPromptId: 'formal-upload-prompt',
            cancelButtonId: 'formal-cancel-upload',
            labelId: 'formalPhotoLabel'
        });

        setupUploadArea({
            dropboxId: 'nonFormalDropbox',
            inputId: 'nonFormalPhotoInput',
            previewContainerId: 'non-formal-preview-container',
            imagePreviewId: 'non-formal-image-preview',
            uploadPromptId: 'non-formal-upload-prompt',
            cancelButtonId: 'non-formal-cancel-upload',
            labelId: 'nonFormalPhotoLabel'
        });
    }

    // Form validation function
    function validateForm() {
        const submitButton = document.getElementById('submitContact');
        const requiredFields = document.querySelectorAll('.required-field');
        let isValid = true;
        
        requiredFields.forEach(field => {
            if (field.tagName === 'SELECT') {
                if (field.value === '') {
                    isValid = false;
                }
            } else if (field.type === 'file') {
                // For file inputs, check if there is a file selected
                if (field.files.length === 0) {
                    isValid = false;
                }
            } else {
                if (!field.value.trim()) {
                    isValid = false;
                }
            }
        });
        
        submitButton.disabled = !isValid;
    }

    document.addEventListener("DOMContentLoaded", function() {
        const formFields = document.querySelectorAll('.contact-form');

        formFields.forEach(field => {
            let label;

            if (field.tagName === 'TEXTAREA') {
                label = document.querySelector(`label[for="${field.id}"]`);

                field.addEventListener('input', function() {
                    if (label) toggleLabel(field, label);
                    autoExpandTextarea(field);
                    validateForm(); // Check form validation on input
                });
            } else if (field.tagName === 'SELECT') {
                label = document.getElementById(`${field.id.replace('Input', '')}Label`);

                field.addEventListener('change', function() {
                    if (label) toggleLabel(field, label);
                    validateForm(); // Check form validation on change
                });
            } else if (field.type !== 'file') {
                label = document.getElementById(`${field.id.replace('Input', '')}Label`);

                field.addEventListener('input', function() {
                    if (label) toggleLabel(field, label);
                    validateForm(); // Check form validation on input
                });
            }

            if (label) toggleLabel(field, label);
        });

        setupPhotoUpload();
        validateForm(); // Initial validation check

        $("#contactForm").submit(function(event) {
            event.preventDefault();

            $("#form-errors").hide();

            var loadingModal = new bootstrap.Modal(document.getElementById('loadingModal'));
            loadingModal.show();

            const submitBtn = $("#submitContact");
            const originalBtnText = submitBtn.html();
            submitBtn.html(
                '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Submitting...'
            );
            submitBtn.prop('disabled', true);

            var formData = new FormData(this);

            $.ajax({
                type: "POST",
                url: "saveform.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    loadingModal.hide();

                    submitBtn.html(originalBtnText);
                    submitBtn.prop('disabled', false);

                    if (response.success) {
                        const successModal = `
                            <div class="modal fade" id="successModal" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header bg-success text-white">
                                            <h5 class="modal-title">Success</h5>
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body text-center py-4">
                                            <i class="fas fa-check-circle text-success mb-3" style="font-size: 3rem;"></i>
                                            <h5>Form submitted successfully!</h5>
                                            <p class="text-muted mb-0">Thank you for submitting your information.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `;
                        
                        $('body').append(successModal);
                        
                        const modalElement = new bootstrap.Modal(document.getElementById('successModal'));
                        modalElement.show();
                        
                        $('#successModal').on('hidden.bs.modal', function () {
                            $(this).remove();
                            
                            $("#contactForm")[0].reset();
                            
                            document.getElementById('formal-preview-container').style.display = 'none';
                            document.getElementById('formal-upload-prompt').style.display = 'block';
                            document.getElementById('non-formal-preview-container').style.display = 'none';
                            document.getElementById('non-formal-upload-prompt').style.display = 'block';
                            
                            document.querySelectorAll('.animated-label').forEach(function(label) {
                                label.classList.remove('visible');
                            });
                            
                            validateForm(); // Revalidate form after reset
                        });
                    } else {
                        if (response.errors && response.errors.length > 0) {
                            const errorList = $("#error-list");
                            errorList.empty();

                            response.errors.forEach(function(error) {
                                errorList.append('<li>' + error + '</li>');
                            });

                            $("#form-errors").show();

                            $('html, body').animate({
                                scrollTop: $("#form-errors").offset().top - 100
                            }, 200);
                        } else {
                            alert(
                                "There was an error submitting the form. Please try again."
                            );
                        }
                    }
                },
                error: function(xhr, status, error) {
                    loadingModal.hide();

                    submitBtn.html(originalBtnText);
                    submitBtn.prop('disabled', false);

                    console.error(error);
                    alert(
                        "There was an error connecting to the server. Please try again later."
                    );
                }
            });
        });
    });
    </script>

</body>

</html>