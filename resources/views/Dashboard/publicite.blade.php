@include('Dashboard.inc.DashBoardNavbars')






<section class="mx-0 mx-sm-3 my-4 px-2 py-4  ">



    <h1 class="darkcolor font20 mx-2 ">publicité</h1>



    <div class="BlocksBackground dark-box-shadow rounded  p-4 mt-md-3 mb-md-0 m-2 bgwhite">

        <div class="container">
            <div class="row justify-content-center">
                <!-- First Form (Portrait) -->
                <div class="col-md-4">
                    <div class="form-container">
                        <img src="https://via.placeholder.com/400x600" alt="Portrait Preview" class="img-preview mb-3">
                        <form id="form-portrait" enctype="multipart/form-data">
                            <div class="mb-3">
                                <input class="form-control" type="file" id="fileInputPortrait" name="file">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>

                <!-- Second Form (Landscape) -->
                <div class="col-md-8">
                    <div class="form-container">
                        <img src="https://via.placeholder.com/800x400" alt="Landscape Preview" class="img-preview mb-3">
                        <form id="form-landscape" enctype="multipart/form-data">
                            <div class="mb-3">
                                <input class="form-control" type="file" id="fileInputLandscape" name="file">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>







</section>











@include('dashboard.inc.DashBoardFooter')
