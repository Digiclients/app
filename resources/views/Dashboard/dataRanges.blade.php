@include('dashboard.inc.DashBoardNavbars')






<section class="mx-0 mx-sm-3 my-4 px-2 py-4  ">



    <h1 class="darkcolor font20 mx-2 ">Gestion des valeurs minimales et maximales des données</h1>


    
    <div class="BlocksBackground dark-box-shadow rounded  p-4 mt-md-3 mb-md-0 m-2 bgwhite">

    here will be select bow with all the marques
    and a model srach by Name
    and button
    <form action="">
        <div class="row py-3">

            <div class="col-md-4  px-3">
                <label for="SelectRole" class="textcolor font14 pb-2">Choisir une marque *</label>
                <select class="form-select customSelect py-2" id="SelectRole">
                    <option hidden="" disabled="" selected="" value=""></option>
                    <option value="admin">Audi</option>
                    <option value="manager">Renaut</option>
                    <option value="particulier">Clio</option>
                    <option value="professionnel">Toyota</option>
                </select>
            </div>


            <div class="col-md-4 px-3">
                <label for="SelectStatus" class="textcolor font14 pb-2">model</label>
                <input type="text" class="form-control bgwhiteopacity py-2" placeholder="model">
            </div>


            <div class="col-md-4 px-3">
                <label for="Recherche" class="textcolor font14 pb-2">Recherche :</label>

                <button class="primarybtn minibtn d-block w-100 mx-auto text-center">
                    Recherche
                </button>
            </div>


        </div>

    </form>

    </div>

    <br>


    <div class="BlocksBackground dark-box-shadow rounded  p-4 mt-md-3 mb-md-0 m-2 bgwhite">

    
        here the data inputs id with js


    </div>






</section>











@include('dashboard.inc.DashBoardFooter')