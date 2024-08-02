@extends('layouts.profile')

@section('ProfileContent')
    <div>
        <h5 class="font-weight-700 float-start text-uppercase">Importez votre galerie </h5>
        <a href="index.html" class="site-button right-arrow button-sm float-end">Back</a>
    </div>

    <br><br><br><br>

    <div class="InContainer my-4">


        <h3 class="my-4 font16 darkcolor text-center">title of the anounce use the id to get this and also youcan do
            profile/announcePhotos/{id} to make it more good</h1>
            <p>Téléchargez les images de votre annonce</p>
            <form action="/upload" class="dropzone" id="imageDropzone" data-anounce-id="12345">
                <div class="dz-message">Téléchargez des fichiers</div>
            </form>


            <button type="submit" class="primarybtn d-block my-5 mx-auto">
                Enregistrer et publier l’annonce
            </button>
    </div>






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
    <!-- END style -->



    <!-- START scripts -->

    <script src="{{ asset('assets/scripts/dropzone.min.js') }}"></script>


    <script>
        Dropzone.autoDiscover = false;

        const anounceId = document.getElementById('imageDropzone').dataset.anounceId;

        // Placeholder images with IDs and main photo indication
        const existingPhotos = [{
                id: '1',
                url: 'https://via.placeholder.com/150',
                isMain: false
            },
            {
                id: '2',
                url: 'https://via.placeholder.com/150/0000FF',
                isMain: true
            },
            {
                id: '3',
                url: 'https://via.placeholder.com/150/FF0000',
                isMain: false
            }
        ];

        const imageDropzone = new Dropzone("#imageDropzone", {
            url: "/upload",
            autoProcessQueue: true,
            addRemoveLinks: true,
            acceptedFiles: "image/*",
            dictDefaultMessage: "Téléchargez des fichiers",
            dictRemoveFile: "Supprimer le fichier",
            init: function() {
                const dzMessage = this.element.querySelector('.dz-message');

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
                    formData.append("anounceId", anounceId);
                });
                this.on("success", function(file, response) {
                    const fileId = response.id || generateFakeId(); // Use server ID or fake ID
                    file.previewElement.dataset.fileId = fileId;
                    addThumbnailButton(file, fileId);
                    dzMessage.style.display = 'none'; // Hide message when files are added
                });
                this.on("error", function(file, errorMessage) {
                    const fileId = generateFakeId(); // Generate fake ID for demonstration
                    file.previewElement.dataset.fileId = fileId;
                    addThumbnailButton(file, fileId);
                    dzMessage.style.display = 'none'; // Hide message when files are added
                });
                this.on("removedfile", function(file) {
                    const fileId = file.previewElement.dataset.fileId;
                    axios.post('/delete', {
                        fileId: fileId,
                        anounceId: anounceId
                    }, {
                        withCredentials: true
                    }).then(response => {
                        console.log("Fichier supprimé avec succès", response);
                    }).catch(error => {
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
            thumbnailBtn.addEventListener('click', function(event) {
                event.preventDefault();
                setAsThumbnail(fileId, thumbnailBtn);
            });

            const fileIdElement = document.createElement('div');
            fileIdElement.classList.add('file-id');
            fileIdElement.innerText = `ID: ${fileId}`;

            file.previewElement.appendChild(thumbnailBtn);
            file.previewElement.appendChild(fileIdElement);
        }

        function setAsThumbnail(fileId, btn) {
            document.querySelectorAll('.thumbnail-btn').forEach(button => button.classList.remove('active'));
            btn.classList.add('active');

            axios.post('/set-thumbnail', {
                fileId: fileId,
                anounceId: anounceId
            }, {
                withCredentials: true
            }).then(response => {
                console.log("Miniature définie avec succès sur le serveur", response);
            }).catch(error => {
                console.error("Erreur de définition de la miniature sur le serveur", error);
            });
        }
    </script>


    <!-- END scripts -->
@endsection

@php
    $active = 'AddAnnounce'; // or any other section that should be active
@endphp
