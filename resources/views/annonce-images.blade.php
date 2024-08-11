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
            background-color: #007bff;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }

        .thumbnail-btn.active {
            background-color: #28a745;
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

        .dropzone .dz-message {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            font-size: 1.2em;
            color: #888;
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

        <section class="px-4 px-xl-0 pt-5 mt-5 container-fluid row justify-content-center">

            <div class="col-lg-12 col-xl-11 col-xxl-9 py-5 bgLight rounded row px-3">

                <div class="pb-4">
                    <h5 class="font-weight-700 float-start text-uppercase">Déposer une annonce</h5>
                    <a href="{{ route('home') }}" class="site-button right-arrow button-sm float-end">Back</a>
                </div>


                <br><br><br><br>

                <div class="InContainer my-4">
                    <h2 class="my-4 darkcolor text-center">{{ $annonce->title }}</h2>
                    <p>Téléchargez les images de votre annonce</p>
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
    @endauth
@endsection
@push('third_party_scripts')
    <script src="{{ asset('assets/scripts/dropzone.min.js') }}"></script>

    <script>
        Dropzone.autoDiscover = false;

        const existingPhotos = @json($existingPhotos);

        const annonceId = {{ $annonce->id }};
        const userId = {{ Auth::user()->id }};
        const maxFilesCount = 2; // Set your desired maximum number of files

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
            maxFiles: maxFilesCount, // Set the maximum number of files
            init: function() {
                const dzMessage = this.element.querySelector('.dz-message');
                // this.on("maxfilesexceeded", function(file) {
                //     alert("No more files please!");
                // });
                // Load existing photos
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
                this.on("success", function(file, response) {
                    const fileId = response.imageId; // Use server ID or fake ID
                    file.previewElement.dataset.fileId = fileId;
                    addThumbnailButton(file, fileId);
                    dzMessage.style.display = 'none'; // Hide message when files are added
                    // Automatically click the first thumbnail button
                    const firstThumbnailBtn = document.querySelector('.thumbnail-btn');
                    if (firstThumbnailBtn) {
                        firstThumbnailBtn.click();
                    }
                });
                this.on("error", function(file, errorMessage) {
                    const fileId = generateFakeId(); // Generate fake ID for demonstration
                    file.previewElement.dataset.fileId = fileId;
                    addThumbnailButton(file, fileId);
                    dzMessage.style.display = 'none'; // Hide message when files are added
                });
                this.on("removedfile", function(file) {
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
                            console.log("Fichier supprimé avec succès", response);
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
    </script>
@endpush
