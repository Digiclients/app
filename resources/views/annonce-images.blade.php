@extends('layouts.app')
@push('third_party_stylesheets')
    <style>
        .step-progress {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .step {
            text-align: center;
            width: 25%;
        }

        .step-marker {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: #ccc;
            margin: auto;
            line-height: 30px;
            color: #fff;
        }

        .step-label {
            margin-top: 10px;
        }

        .form-step {
            display: none;
        }

        .form-step-active {
            display: block;
        }

        .is-invalid {
            border-color: #dc3545;
        }
    </style>


    <link rel="stylesheet" href="{{ asset('assets/styles/dropzone.min.css') }}">



    <!-- START style -->
    <style>
        .thumbnail-btn {
            display: block;
            margin-top: 5px;
            background-color: var(--primarycolor);
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            font-family: var(--primaryfont), sans-serif;
            font-weight: 600;
            border-radius: 12px;
        }

        .thumbnail-btn.active {
            background-color: var(--color-success);
            ;
        }

        .file-id {
            margin-top: 5px;
            font-size: 0.9em;
            color: #555;
        }

        h1,
        p {
            text-align: center;
        }

        .dropzone {
            position: relative;
        }

        .dropzone {
            min-height: 150px;
            border: 2px solid var(--primarycolor);
            background: var(--white);
            padding: 20px 20px;
            border-radius: 12px;
        }

        @media (max-width: 818px) {

            /* Example: Adjust the layout of a container */
            .dropzone {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
            }
        }


        .dropzone .dz-message {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            font-size: 1.2em;
            color: var(--primarycolor) !important;
            font-weight: 600;
            margin: 0px !important;
        }

        .dropzone .dz-preview .dz-image img {

            height: 120px;
            width: 120px;
            object-fit: cover;
        }

        .dropzone .dz-filename {
            display: none;

        }

        .dropzone .dz-filename {
            display: none;

        }

        .dropzone .dz-preview .dz-image {

            margin-right: auto !important;
            margin-left: auto !important;
        }
    </style>
@endpush

@section('content')
    @auth
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <br><br>

        <section class="px-4 px-xl-0 pt-5 mt-5 container-fluid row justify-content-center">

            <div class="col-lg-12 col-xl-11 col-xxl-9 py-5 bgLight rounded row px-3">

                <div class="pb-4">
                    <h5 class="font30 float-start text-uppercase fontwbold primarycolor primaryfont ms-2">Téléverser les photos
                        de votre annonce</h5>
                    {{-- <a href="{{ route('home') }}" class="site-button right-arrow button-sm float-end">Back</a> --}}
                </div>


                <br><br><br><br>

                <div class="InContainer my-4">
                    <h2 class="d-none d-md-block my-4 mx-0 mx-md-5 px-0 px-md-5 darkcolor font26 text-center">
                        {{ $annonce->title }}</h2>
                    <h2 class="d-block d-md-none my-4 mx-0 mx-md-4 px-0 px-md-5 darkcolor font18 text-center">
                        {{ $annonce->title }}</h2>
                    <p>Téléchargez les images de votre annonce <span id="MAXALLOWEDID"></span> </p>

               <div id="dropzone-error"></div>
       

                    <form action="{{ route('uploadImage', $annonce->id) }}" class="dropzone" id="imageDropzone"
                        data-anounce-id="12345">
                        @csrf
                        <div class="dz-message">Téléchargez des fichiers</div>
                    </form>
                    <form action="{{ route('checkPhotos', $annonce->id) }}" method="post">
                        @csrf
                        <button type="submit" class="primarybtn d-block my-5 mx-auto">
                            Enregistrer et publier l’annonce
                        </button>
                    </form>
                </div>
            </div>

        </section>

        <br><br><br>
    @endauth
@endsection
@push('third_party_scripts')
    <script src="{{ asset('assets/scripts/dropzone.min.js') }}"></script>

    <script>
        Dropzone.autoDiscover = false;

        const maxTotalFiles = 4; // Total number of files allowed (existing + new)
        document.getElementById("MAXALLOWEDID").innerHTML = "( " + maxTotalFiles + " images max)"
        const existingPhotos = @json($existingPhotos);

        const annonceId = {{ $annonce->id }};
        const userId = {{ Auth::user()->id }};
        // const maxFilesCount = 2; // Set your desired maximum number of files

        let existingPhotosCount = existingPhotos.length; // Initial number of existing photos
        DynamicMaxFiles = maxTotalFiles - existingPhotosCount
        // let maxAdditionalFiles ;
        // Function to update the Dropzone maxFiles based on current existing photos
        function updateMaxFiles() {
            //  maxAdditionalFiles = maxTotalFiles - existingPhotosCount;
            // imageDropzone.options.maxFiles = maxAdditionalFiles; // Update Dropzone options
            // imageDropzone.removeAllFiles(true); // Optionally remove files to reset Dropzone
        }

        updateMaxFiles();

        var myDropZone;

        const imageDropzone = new Dropzone("#imageDropzone", {
            // url: "/upload",
            url: `{{ route('uploadImage', ['annonceId' => ':annonceId']) }}`.replace(':annonceId', annonceId),
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            autoProcessQueue: true,
            addRemoveLinks: true,
            acceptedFiles: "image/*",
            dictDefaultMessage: "Téléchargez des fichiers",
            dictRemoveFile: "Supprimer le fichier",
            maxFiles: DynamicMaxFiles, // Set the maximum number of files
            init: function() {
                myDropzone = this;

                const dzMessage = this.element.querySelector('.dz-message');

                // this.on("addedfile", function(file) {
                //     existingPhotosCount++;
                //     console.log(existingPhotosCount)
                //     // if (this.getAcceptedFiles().length > maxAdditionalFiles) {
                //     //     // If adding this file exceeds the limit, remove it
                //     //     this.removeFile(file);
                //     //     alert("Vous ne pouvez pas télécharger plus de " + maxTotalFiles + " fichiers.");
                //     // }
                //     // if(existingPhotosCount == maxTotalFiles){
                //     //     this.removeFile(file);
                //     //     alert("Vous ne pouvez pas télécharger plus de " + maxTotalFiles + " fichiers.");
                //     // }
                //     if (existingPhotosCount > maxTotalFiles) {
                //         existingPhotosCount--;
                //         this.removeFile(file);
                //         console.log("Vous ne pouvez pas télécharger plus de " + maxTotalFiles + " fichiers.");
                //     }
                // });

                //     this.on("maxfilesexceeded", function(file) {
                //     alert("Vous ne pouvez pas télécharger plus de " + maxTotalFiles + " fichiers.");
                //     this.removeFile(file); // Optionally remove the file
                // });

                // // // Example: Updating max files when an existing photo is removed
                // this.on("removedfile", function(file) {
                //     // Simulate removing an existing photo (adjust the count as needed)
                //     existingPhotosCount--; // Update existing photo count
                //     // updateMaxFiles(); // Update Dropzone max files
                // });

                // Example: Handling successful file uploads to adjust the count dynamically
                // this.on("success", function(file, response) {
                //     // Assume response includes information about the uploaded photo
                //     // If needed, adjust existingPhotosCount based on the response
                //     // existingPhotosCount++; // Update count if necessary
                //     updateMaxFiles(); // Update Dropzone max files
                // });
                // this.on("maxfilesexceeded", function(file) {
                //     alert("No more files please!");
                // });
                // Load existing photos
                this.on("maxfilesexceeded", function(file) {
                    handleDropzoneError("Nombre maximum de fichiers dépassé.");
                });
                // this.on("maxfilesexceeded", function(file) {
                //     // Optional: Alert or notify the user when the file limit is exceeded
                //     alert("Vous ne pouvez pas télécharger plus de " + maxFilesCount + " fichiers.");

                //     // Optionally, remove the file from Dropzone
                //     this.removeFile(file);
                // });

                existingPhotos.forEach(photo => {
                    const mockFile = {
                        name: photo.id,
                        size: 12345
                    }; // Mock file with ID as name and dummy size
                    this.emit("addedfile", mockFile);
                    this.emit("thumbnail", mockFile, photo.url);
                    this.emit("complete", mockFile);
                    mockFile.previewElement.dataset.fileId = photo.id;
                    addThumbnailButton(mockFile, photo.id);
                    if (photo.isMain) {
                        mockFile.previewElement.querySelector('.thumbnail-btn').classList.add('active');
                    }
                });

                this.on("sending", function(file, xhr, formData) {
                    // console.log(file)
                    formData.append("annonceId", annonceId);
                    formData.append("userId", userId);
                    // formData.append("file", file);
                });


                //     this.on("sending", function(file, xhr, formData) {
                //     // Check if the file exceeds the limit before sending
                //     console.log("this.getAcceptedFiles().length + existingPhotosCount ")
                //     console.log(this.getAcceptedFiles().length)
                //     if (this.getAcceptedFiles().length > maxTotalFiles) {
                //         xhr.abort(); // Abort the upload if it exceeds the allowed limit
                //     } else {
                //         formData.append("annonceId", annonceId);
                //         formData.append("userId", userId);
                //     }
                // });


                this.on("success", function(file, response) {
                    const fileId = response.imageId; // Use server ID or fake ID
                    file.previewElement.dataset.fileId = fileId;
                    addThumbnailButton(file, fileId);
                    dzMessage.style.display = 'none'; // Hide message when files are added
                    // Automatically click the first thumbnail button
                    const firstThumbnailBtn = document.querySelector('.thumbnail-btn');
                    if (firstThumbnailBtn && existingPhotosCount == 0) {
                        firstThumbnailBtn.click();
                    }

                    // existingPhotosCount++;
                    // document.querySelectorAll(".dropzone")[0].dropzone.options.maxFiles = null
                    // document.querySelectorAll(".dropzone")[0].dropzone.options.maxFiles = maxTotalFiles - existingPhotosCount;


                    // FilesInTheDropZone =  imageDropzone.files.length  + existingPhotosCount ;
                    // imageDropzone.options.maxFiles = maxTotalFiles - existingPhotosCount + FilesInTheDropZone;
                    // console.log(imageDropzone.options.maxFiles)
                });
                this.on("error", function(file, errorMessage) {

                    if (errorMessage.includes("File is too big")) {
                        handleDropzoneError("La taille du fichier dépasse la limite autorisée.");
                    }

                    const fileId = generateFakeId(); // Generate fake ID for demonstration
                    file.previewElement.dataset.fileId = fileId;
                    addThumbnailButton(file, fileId);
                    dzMessage.style.display = 'none'; // Hide message when files are added
                    console.log("nooooooo")
                    this.removeFile(file); // Optionally remove the file

                });
                this.on("removedfile", function(file) {

                    console.log("this is a delete action")
                    const fileId = file.previewElement.dataset.fileId;
                    axios.delete(
                            `{{ route('deleteImage', ['annonceId' => ':annonceId', 'imageId' => ':imageId']) }}`
                            .replace(':annonceId', annonceId)
                            .replace(':imageId', fileId), {
                                headers: {
                                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                                        .getAttribute('content'),
                                    'Content-Type': 'application/json' // Ensure the content type is set to JSON
                                },
                                data: {
                                    userId: userId // Include userId in the request payload
                                }
                            })
                        .then(response => {
                            // console.log()
                            // console.log(existingPhotos)
                            if (existingPhotos.find(existingFile => existingFile.id == file
                                    .previewElement.attributes["data-file-id"].value)) {
                                DynamicMaxFiles++;
                                imageDropzone.options.maxFiles = DynamicMaxFiles;

                                console.log("This file is from the existing files list.");
                                // Handle existing file deletion
                            }
                            console.log("Fichier supprimé avec succès", response);
                            // document.querySelectorAll(".dropzone")[0].dropzone.options.maxFiles = null
                            //         document.querySelectorAll(".dropzone")[0].dropzone.options.maxFiles = maxTotalFiles - existingPhotosCount;
                            //  console.log(document.querySelectorAll(".dropzone")[0].dropzone.options.maxFiles)

                            // myDropzone.options.maxFiles = maxTotalFiles - existingPhotosCount;
                            // console.log(myDropzone.options.maxFiles)


                            // FilesInTheDropZone =  imageDropzone.files.length  + existingPhotosCount ;
                            // imageDropzone.options.maxFiles = maxTotalFiles - existingPhotosCount + FilesInTheDropZone;
                            // console.log(imageDropzone.options.maxFiles)
                        })
                        .catch(error => {
                            console.error("Erreur de suppression de fichier", error);
                        });
                    if (this.files.length === 0) {
                        dzMessage.style.display = 'block'; // Show message when no files are present
                    }
                });


                if (this.files.length === 0) {
                    dzMessage.style.display = 'block'; // Show message when no files are present
                } else {
                    dzMessage.style.display = 'none'; // Hide message when files are present
                }
            }
        });

        axios.defaults.withCredentials = true; // Ensure cookies and session data are included with each request

        function generateFakeId() {
            return 'id-' + Math.random().toString(36).substr(2, 9);
        }

        function addThumbnailButton(file, fileId) {
            const thumbnailBtn = document.createElement('button');
            thumbnailBtn.classList.add('thumbnail-btn');
            thumbnailBtn.innerText = "Définir comme miniature";

            // Check initial status and set the button state
            if (file.previewElement.dataset.featureImg === 'true') {
                thumbnailBtn.classList.add('active');
            }

            thumbnailBtn.addEventListener('click', function(event) {
                event.preventDefault();
                setAsThumbnail(fileId, thumbnailBtn);
            });

            // const fileIdElement = document.createElement('div');
            // fileIdElement.classList.add('file-id');
            // fileIdElement.innerText = `ID: ${fileId}`;

            file.previewElement.appendChild(thumbnailBtn);
            // file.previewElement.appendChild(fileIdElement);
        }

        function setAsThumbnail(fileId, btn) {
            const isActive = btn.classList.contains('active');
            const featureImg = !isActive; // Toggle the value

            axios.post(`{{ route('setThumbnail', ['annonceId' => ':annonceId', 'imageId' => ':imageId']) }}`
                .replace(':annonceId', annonceId)
                .replace(':imageId', fileId), {
                    userId: userId,
                    feature_img: featureImg
                }, {
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    }
                }).then(response => {
                if (featureImg) {
                    document.querySelectorAll('.thumbnail-btn').forEach(button => button.classList.remove(
                        'active'));
                    btn.classList.add('active');
                } else {
                    btn.classList.remove('active');
                }
            }).catch(error => {
                console.error("Error updating thumbnail status", error);
            });
        }




        function handleDropzoneError(message) {
            const errorAlert = document.getElementById("dropzone-error");
            if (errorAlert) {
                errorAlert.innerHTML =  ` 
               
                <div class="alert alert-danger alert-dismissible fade show my-2 col-md-8 mx-auto"  role="alert">
                ${message}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                      `;
            }
        }``
    </script>
@endpush
