@include('Dashboard.inc.DashBoardNavbars')






<section class="mx-0 mx-sm-3 my-4 px-2 py-4  ">



    <h1 class="darkcolor font20 mx-2 ">Importer des annonces</h1>



    <div class="BlocksBackground dark-box-shadow rounded  p-4 mt-md-3 mb-md-0 m-2 bgwhite">


        <p class="darkcolor">UTILISEZ CE FORMULAIRE POUR AJOUTER LA NOUVELLE ANNONCE À LA BASE DE DONNÉES DE LA PLATEFORME.</p>
        <p class="darkcolor">Les annonces ajoutées seront filtrées et les doublons seront supprimés. Si une annonce est déjà dans notre base de données, elle ne sera pas ajoutée, et les voitures accidentées seront automatiquement supprimées.</p>
        <div class="container mt-5">

            <form id="file-upload-form" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="fileInput" class="form-label">Choose files</label>
                    <input class="form-control" type="file" id="fileInput" name="files[]" multiple>
                </div>
                <button type="submit" class="btn btn-primary">Upload Files</button>
            </form>
            <div class="progress mt-3" style="height: 25px;">
                <div id="progress-bar" class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
            </div>
        </div>



    </div>







</section>











@include('dashboard.inc.DashBoardFooter')
