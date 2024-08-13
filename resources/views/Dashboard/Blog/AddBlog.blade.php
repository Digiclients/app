@include('Dashboard.inc.DashBoardNavbars')



<script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>
<script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.polyfills.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />



<section class="mx-0 mx-sm-3 my-4 px-2 py-4  ">



    <h1 class="darkcolor font20 mx-2 "> Add Blog </h1>




    {{-- ===================================================================== --}}
    {{-- =========== START OF Add Blog  section =================  --}}
    {{-- ===================================================================== --}}




    <section id="AddBlogSection" class="row pt-4">


        {{-- ===================================================================== --}}
        {{-- =========== START OF LEFT SIDE CONTENT =================  --}}
        {{-- ===================================================================== --}}


        <div class="col-md-8">


            {{-- ############################################################### --}}
            {{-- ################### START OF TITLE INPUT CONTENT #################  --}}
            {{-- ############################################################### --}}

            <div class="BlocksBackground dark-box-shadow rounded  p-4 mt-md-3 mb-md-0 m-2 bgwhite">

                <h5 class="font18 darkcolor mb-3">Title</h5>

                <input type="text" class="form-control bgwhiteopacity py-2" placeholder="Title">

            </div>

            {{-- ############################################################### --}}
            {{-- ################### END OF TITLE INPUT CONTENT #################  --}}
            {{-- ############################################################### --}}

            {{-- ######################################################################### --}}
            {{-- ################### START OF TEXT AREA EDITOR INPUT CONTENT #################  --}}
            {{-- ######################################################################## --}}

            <div class="BlocksBackground dark-box-shadow rounded mt-md-3 mb-md-0 m-2 bgwhite">

                <textarea id="open-source-plugins"></textarea>

                <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>


                <script>
                    var useDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;

                    tinymce.init({
                        selector: 'textarea#open-source-plugins',
                        plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor  insertdatetime advlist lists wordcount  textpattern noneditable help charmap quickbars emoticons',
                        imagetools_cors_hosts: ['picsum.photos'],
                        menubar: 'file edit view insert format tools table help',
                        toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
                        toolbar_sticky: true,
                        autosave_ask_before_unload: true,
                        autosave_interval: '30s',
                        autosave_prefix: '{path}{query}-{id}-',
                        autosave_restore_when_empty: false,
                        autosave_retention: '2m',
                        image_advtab: true,
                        link_list: [{
                                title: 'My page 1',
                                value: 'https://www.tiny.cloud'
                            },
                            {
                                title: 'My page 2',
                                value: 'http://www.moxiecode.com'
                            }
                        ],
                        image_list: [{
                                title: 'My page 1',
                                value: 'https://www.tiny.cloud'
                            },
                            {
                                title: 'My page 2',
                                value: 'http://www.moxiecode.com'
                            }
                        ],
                        image_class_list: [{
                                title: 'None',
                                value: ''
                            },
                            {
                                title: 'Some class',
                                value: 'class-name'
                            }
                        ],
                        importcss_append: true,
                        file_picker_callback: function(callback, value, meta) {
                            /* Provide file and text for the link dialog */
                            if (meta.filetype === 'file') {
                                callback('https://www.google.com/logos/google.jpg', {
                                    text: 'My text'
                                });
                            }

                            /* Provide image and alt text for the image dialog */
                            if (meta.filetype === 'image') {
                                callback('https://www.google.com/logos/google.jpg', {
                                    alt: 'My alt text'
                                });
                            }

                            /* Provide alternative source and posted for the media dialog */
                            if (meta.filetype === 'media') {
                                callback('movie.mp4', {
                                    source2: 'alt.ogg',
                                    poster: 'https://www.google.com/logos/google.jpg'
                                });
                            }
                        },
                        templates: [{
                                title: 'New Table',
                                description: 'creates a new table',
                                content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>'
                            },
                            {
                                title: 'Starting my story',
                                description: 'A cure for writers block',
                                content: 'Once upon a time...'
                            },
                            {
                                title: 'New list with dates',
                                description: 'New List with dates',
                                content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>'
                            }
                        ],
                        template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
                        template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
                        height: 600,
                        image_caption: true,
                        quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
                        noneditable_noneditable_class: 'mceNonEditable',
                        toolbar_mode: 'sliding',
                        contextmenu: 'link image  table',
                        skin: useDarkMode ? 'oxide-dark' : 'oxide',
                        content_css: useDarkMode ? 'dark' : 'default',
                        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
                    });
                </script>


            </div>


            {{-- ######################################################################### --}}
            {{-- ################### END OF TEXT AREA EDITOR INPUT CONTENT #################  --}}
            {{-- ######################################################################## --}}







            {{-- ######################################################################### --}}
            {{-- ################### START OF Excerpt Custom Accordion CONTENT #################  --}}
            {{-- ######################################################################## --}}
            <div class="accordion CustomAccordion  mx-auto">

                <div class="accordion-item mt-md-3 mb-md-0 m-2">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#ExcerptAccordionItem" aria-expanded="false"
                            aria-controls="ExcerptAccordionItem">
                            Excerpt
                        </button>
                    </h2>
                    <div id="ExcerptAccordionItem" class="accordion-collapse collapse show">
                        <div class="accordion-body">

                            <label for="Excerpt" class="darkcolor col-form-label font14"> Excerpt
                            </label>
                            <textarea id="Excerpt" class="form-control bgwhiteopacity py-2" rows="3"></textarea>
                            <p class="font12 textcolor">Excerpts are optional hand-crafted summaries of your content
                                that can be used in your theme. </p>


                        </div>
                    </div>

                </div>


            </div>




            {{-- ######################################################################### --}}
            {{-- ################### END OF Excerpt Custom Accordion CONTENT #################  --}}
            {{-- ######################################################################## --}}



            {{-- ######################################################################### --}}
            {{-- ################### START OF CustomFields Custom Accordion CONTENT #################  --}}
            {{-- ######################################################################## --}}



            <div class="accordion CustomAccordion  mx-auto">

                <div class="accordion-item mt-md-3 mb-md-0 m-2">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#CustomFieldsAccordionItem" aria-expanded="false"
                            aria-controls="CustomFieldsAccordionItem">
                            Custom Fields
                        </button>
                    </h2>
                    <div id="CustomFieldsAccordionItem" class="accordion-collapse collapse show">
                        <div class="accordion-body">


                            <h5 class="font16 darkcolor my-3">Add New Custom Field:</h5>


                            <div class="row">
                                <div class="col-md-6 pe-2">
                                    <label for="Title" class="darkcolor col-form-label font14"> Title
                                    </label>
                                    <input type="text" id="Title" class="form-control bgwhiteopacity py-2"
                                        placeholder="Title">
                                </div>
                                <div class="col-md-6 ps-2">
                                    <label for="Value" class="darkcolor col-form-label font14">
                                        Value
                                    </label>
                                    <textarea id="Value" class="form-control bgwhiteopacity py-2" rows="3"></textarea>
                                </div>


                            </div>

                            <button class="primarybtn minibtn mb-2"> Add Custom Field </button>

                            <p class="font12 textcolor"> Custom fields can be used to extra metadata to a post that you
                                can use in your theme. </p>

                        </div>
                    </div>
                </div>

            </div>


            {{-- ######################################################################### --}}
            {{-- ################### END OF CustomFields Custom Accordion CONTENT #################  --}}
            {{-- ######################################################################## --}}





            {{-- ######################################################################### --}}
            {{-- ################### START OF Discussion Custom Accordion CONTENT #################  --}}
            {{-- ######################################################################## --}}



            <div class="accordion CustomAccordion  mx-auto">

                <div class="accordion-item mt-md-3 mb-md-0 m-2">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#DiscussionAccordionItem" aria-expanded="false"
                            aria-controls="DiscussionAccordionItem">
                            Discussion
                        </button>
                    </h2>
                    <div id="DiscussionAccordionItem" class="accordion-collapse collapse show">
                        <div class="accordion-body my-2 d-flex justify-content-start">
                            <input class="form-check-input me-2 my-auto" type="checkbox" id="AllowComments">
                            <label class="form-check-label font14 graycolor my-auto" for="AllowComments">
                                Allow comments.
                            </label>

                        </div>
                    </div>
                </div>

            </div>


            {{-- ######################################################################### --}}
            {{-- ################### END OF Discussion Custom Accordion CONTENT #################  --}}
            {{-- ######################################################################## --}}




            {{-- ######################################################################### --}}
            {{-- ################### START OF Slug Custom Accordion CONTENT #################  --}}
            {{-- ######################################################################## --}}


            <div class="accordion CustomAccordion  mx-auto">

                <div class="accordion-item mt-md-3 mb-md-0 m-2">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#SlugAccordionItem" aria-expanded="false" aria-controls="SlugAccordionItem">
                            Slug
                        </button>
                    </h2>
                    <div id="SlugAccordionItem" class="accordion-collapse collapse show">
                        <div class="accordion-body">


                            <div class="mb-2">
                                <label for="Slug" class="darkcolor col-form-label font14">Slug</label>
                                <input type="text" id="Slug" class="form-control bgwhiteopacity py-2"
                                    placeholder="text-text-text">
                            </div>


                        </div>
                    </div>
                </div>

            </div>


            {{-- ######################################################################### --}}
            {{-- ################### END OF Slug Custom Accordion CONTENT #################  --}}
            {{-- ######################################################################## --}}








            {{-- ######################################################################### --}}
            {{-- ################### START OF Author Custom Accordion CONTENT #################  --}}
            {{-- ######################################################################## --}}


            <div class="accordion CustomAccordion  mx-auto">

                <div class="accordion-item mt-md-3 mb-md-0 m-2">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#AuthorAccordionItem" aria-expanded="false"
                            aria-controls="AuthorAccordionItem">
                            Author
                        </button>
                    </h2>
                    <div id="AuthorAccordionItem" class="accordion-collapse collapse show">
                        <div class="accordion-body">



                            <label for="Author" class="col-form-label darkcolor font14">Author</label>
                            <input class="form-control bgwhiteopacity py-2" id="Author" list="datalistOptions"
                                placeholder="Type to search For user By userName...">
                            <datalist id="datalistOptions">
                                <option value="luffySan">
                                <option value="joyboy">
                                <option value="sanji">
                                <option value="zoro44">
                                <option value="godusop">
                                <option value="Talon">
                                <option value="Caden">
                                <option value="Jaren">
                                <option value="Ludwig">
                                <option value="Alena">
                                <option value="Destinee">
                                <option value="Keshaun">
                                <option value="Kiarra">
                                <option value="Dedric">
                                <option value="Mabel">
                                <option value="Kenny">
                                <option value="Allison">
                            </datalist>

                        </div>
                    </div>
                </div>

            </div>

            {{-- ######################################################################### --}}
            {{-- ################### END OF Author Custom Accordion CONTENT #################  --}}
            {{-- ######################################################################## --}}







            {{-- ######################################################################### --}}
            {{-- ################### START OF Seo Custom Accordion CONTENT #################  --}}
            {{-- ######################################################################## --}}



            <div class="accordion CustomAccordion  mx-auto">

                <div class="accordion-item mt-md-3 mb-md-0 m-2">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#SeoAccordionItem" aria-expanded="false"
                            aria-controls="SeoAccordionItem">
                            Seo
                        </button>
                    </h2>
                    <div id="SeoAccordionItem" class="accordion-collapse collapse show">
                        <div class="accordion-body darkcolor">



                            <label for="PageTitle" class="darkcolor col-form-label font14"> Page Title </label>
                            <input type="text" id="PageTitle" class="form-control bgwhiteopacity py-2"
                                placeholder="Page Title">


                            <div class="row py-2">
                                <div class="col-md-6 pe-2">
                                    <label for="Keywords" class="darkcolor col-form-label font14"> Keywords
                                    </label>
                                    <input type="text" id="Keywords" class="form-control bgwhiteopacity py-2"
                                        placeholder="Enter meta Keywords">
                                </div>
                                <div class="col-md-6 ps-2">
                                    <label for="Descriptions" class="darkcolor col-form-label font14">
                                        Descriptions
                                    </label>
                                    <textarea type="text" id="Descriptions" class="form-control bgwhiteopacity py-2"
                                        placeholder="Enter meta Keywords" rows="3"></textarea>
                                </div>


                            </div>

                        </div>
                    </div>
                </div>

            </div>

            {{-- ######################################################################### --}}
            {{-- ################### END OF Seo Custom Accordion CONTENT #################  --}}
            {{-- ######################################################################## --}}











        </div>



        {{-- ===================================================================== --}}
        {{-- =========== END OF LEFT SIDE CONTENT =================  --}}
        {{-- ===================================================================== --}}




        {{-- ===================================================================== --}}
        {{-- =========== START OF RIGHT SIDE CONTENT =================  --}}
        {{-- ===================================================================== --}}


        <div class="col-md-4">

            {{-- ######################################################################### --}}
            {{-- ################### START OF Published Custom Accordion CONTENT #################  --}}
            {{-- ######################################################################## --}}


            <div class="accordion CustomAccordion CustomAccordion mx-auto">
                <div class="accordion-item mt-md-3 mb-md-0 m-2">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#PublishedAccordionItem" aria-expanded="true"
                            aria-controls="PublishedAccordionItem">
                            Published
                        </button>
                    </h2>
                    <div id="PublishedAccordionItem" class="accordion-collapse collapse show">
                        <div class="accordion-body ">



                            {{--    START OF BLOG StatusInput Accordion  --}}
                            <div class="StatusInput">

                                <div class="d-flex my-3">
                                    <div class="d-flex my-auto ">
                                        <span class="iconify font22 me-2 mx-auto darkcolor"
                                            data-icon="ic:outline-remove-red-eye"></span>
                                    </div>

                                    <div class="my-auto">
                                        <div class="darkcolor font16"> Status : <b class="textcolor mx-1 font16">
                                                Published </b>
                                            <a class="font16 mx-1 primarycolor" href="#"
                                                data-bs-toggle="collapse" data-bs-target="#BlogStatusCollapse">
                                                Edit </a>
                                        </div>
                                    </div>

                                </div>

                                <div id="BlogStatusCollapse"
                                    class="collapse border border-secondary rounded py-3 px-3  mx-auto">
                                    <label for="SelectStatus" class="textcolor font14 pb-2">Select Status</label>
                                    <select class="form-select customSelect py-2" id="SelectStatus">
                                        <option hidden disabled selected value> </option>
                                        <option value="Published">Published</option>
                                        <option value="Draft">Draft</option>
                                        <option value="Private">Private</option>
                                        <option value="Pending">Pending</option>

                                    </select>

                                    <div class="d-flex pt-3 gap-2  justify-content-md-start">
                                        <button class="primarybtn minibtn" data-bs-toggle="collapse"
                                            data-bs-target="#BlogStatusCollapse"> Ok </button>
                                        <button class="btn btn-danger" data-bs-toggle="collapse"
                                            data-bs-target="#BlogStatusCollapse"> Cancel </button>
                                    </div>

                                </div>

                            </div>
                            {{--    END OF blog StatusInput Accordion  --}}






                            {{--    START OF BLOG SecurityInput Accordion  --}}
                            <div class="SecurityInput">

                                <div class="d-flex my-3">
                                    <div class="d-flex my-auto ">
                                        <span class="iconify font22 me-2 mx-auto darkcolor"
                                            data-icon="material-symbols:lock-outline"></span>
                                    </div>

                                    <div class="my-auto">
                                        <div class="darkcolor font16"> Security : <b class="textcolor mx-1 font16">
                                                Public </b>
                                            <a class="font16 mx-1 primarycolor" href="#"
                                                data-bs-toggle="collapse" data-bs-target="#BlogSecurityCollapse">
                                                Edit </a>
                                        </div>
                                    </div>

                                </div>

                                <div id="BlogSecurityCollapse"
                                    class="collapse border border-secondary rounded py-3 px-3  mx-auto">
                                    <label for="SelectSecurity" class="textcolor font14 pb-2">Select
                                        Security</label>
                                    <select class="form-select customSelect py-2" id="SelectSecurity">
                                        <option hidden disabled selected value> </option>
                                        <option value="Public"> Public </option>
                                        <option value="PasswordProtected"> Password Protected </option>
                                        <option value="Private"> Private </option>

                                    </select>

                                    <div class="d-flex pt-3 gap-2  justify-content-md-start">
                                        <button class="primarybtn minibtn" data-bs-toggle="collapse"
                                            data-bs-target="#BlogSecurityCollapse"> Ok </button>
                                        <button class="btn btn-danger" data-bs-toggle="collapse"
                                            data-bs-target="#BlogSecurityCollapse"> Cancel </button>
                                    </div>

                                </div>

                            </div>
                            {{--    END OF blog SecurityInput Accordion  --}}












                            {{--    START OF BLOG PublishDateInput Accordion  --}}
                            <div class="PublishDateInput">

                                <div class="d-flex my-3">
                                    <div class="d-flex my-auto ">
                                        <span class="iconify font22 me-2 mx-auto darkcolor"
                                            data-icon="bx:calendar"></span>
                                    </div>

                                    <div class="my-auto">
                                        <div class="darkcolor font16"> Published : <b class="textcolor mx-1 font16">
                                                on : 24-09-2023 16:22:52 </b>
                                            <a class="font16 mx-1 primarycolor" href="#"
                                                data-bs-toggle="collapse" data-bs-target="#BlogPublishDateCollapse">
                                                Edit </a>
                                        </div>
                                    </div>

                                </div>

                                <div id="BlogPublishDateCollapse"
                                    class="collapse border border-secondary rounded py-3 px-3  mx-auto">
                                    <label for="SelectPublishDate" class="textcolor font14 pb-2">Select Publish
                                        Date</label>

                                    <input type="date" class="form-control bgwhiteopacity py-2"
                                        value="2023-05-24">
                                    <div class="d-flex pt-3 gap-2  justify-content-md-start">
                                        <button class="primarybtn minibtn" data-bs-toggle="collapse"
                                            data-bs-target="#BlogPublishDateCollapse"> Ok </button>
                                        <button class="btn btn-danger" data-bs-toggle="collapse"
                                            data-bs-target="#BlogPublishDateCollapse"> Cancel </button>
                                    </div>

                                </div>

                            </div>
                            {{--    END OF blog PublishDateInput Accordion  --}}





                        </div>


                        <hr class="textcolor m-0">


                        {{-- Start of Blog Publish Button --}}
                        <div class="d-flex justify-content-md-end AccordionFooter py-3 px-4">
                            <button class="primarybtn minibtn"> Publish </button>

                        </div>

                        {{-- END of Blog Publish Button --}}


                    </div>
                </div>
            </div>

            {{-- ######################################################################### --}}
            {{-- ################### END OF Published Custom Accordion CONTENT #################  --}}
            {{-- ######################################################################## --}}




            {{-- ######################################################################### --}}
            {{-- ################### START OF Categories Custom Accordion CONTENT #################  --}}
            {{-- ######################################################################## --}}

            <div class="accordion CustomAccordion  mx-auto">

                <div class="accordion-item mt-md-3 mb-md-0 m-2">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#CategoriesAccordionItem" aria-expanded="false"
                            aria-controls="CategoriesAccordionItem">
                            Categories
                        </button>
                    </h2>
                    <div id="CategoriesAccordionItem" class="accordion-collapse collapse show">
                        <div class="accordion-body">


                            <div id="SelectCategories"
                                class="overflow-auto border border-secondary rounded py-2 px-3  mx-auto"
                                style="height:28vh;">



                                <div class="my-2 d-flex justify-content-start">
                                    <input name="categories" class="form-check-input me-2 my-auto" type="checkbox"
                                        id="AllowComments">
                                    <label class="form-check-label font14 graycolor my-auto" for="AllowComments">
                                        Communications
                                    </label>
                                </div>


                                <div class="my-2 d-flex justify-content-start">
                                    <input name="categories" class="form-check-input me-2 my-auto" type="checkbox"
                                        id="AllowComments">
                                    <label class="form-check-label font14 graycolor my-auto" for="AllowComments">
                                        Brand
                                    </label>
                                </div>


                                <div class="my-2 d-flex justify-content-start">
                                    <input name="categories" class="form-check-input me-2 my-auto" type="checkbox"
                                        id="AllowComments">
                                    <label class="form-check-label font14 graycolor my-auto" for="AllowComments">
                                        Mobility
                                    </label>
                                </div>



                                <div class="my-2 d-flex justify-content-start">
                                    <input name="categories" class="form-check-input me-2 my-auto" type="checkbox"
                                        id="AllowComments">
                                    <label class="form-check-label font14 graycolor my-auto" for="AllowComments">
                                        Tactics
                                    </label>
                                </div>



                                <div class="my-2 d-flex justify-content-start">
                                    <input name="categories" class="form-check-input me-2 my-auto" type="checkbox"
                                        id="AllowComments">
                                    <label class="form-check-label font14 graycolor my-auto" for="AllowComments">
                                        Solutions
                                    </label>
                                </div>




                                <div class="my-2 d-flex justify-content-start">
                                    <input name="categories" class="form-check-input me-2 my-auto" type="checkbox"
                                        id="AllowComments">
                                    <label class="form-check-label font14 graycolor my-auto" for="AllowComments">
                                        Accountability
                                    </label>
                                </div>







                                <div class="my-2 d-flex justify-content-start">
                                    <input name="categories" class="form-check-input me-2 my-auto" type="checkbox"
                                        id="AllowComments">
                                    <label class="form-check-label font14 graycolor my-auto" for="AllowComments">
                                        Division
                                    </label>
                                </div>







                                <div class="my-2 d-flex justify-content-start">
                                    <input name="categories" class="form-check-input me-2 my-auto" type="checkbox"
                                        id="AllowComments">
                                    <label class="form-check-label font14 graycolor my-auto" for="AllowComments">
                                        Quality
                                    </label>
                                </div>







                                <div class="my-2 d-flex justify-content-start">
                                    <input name="categories" class="form-check-input me-2 my-auto" type="checkbox"
                                        id="AllowComments">
                                    <label class="form-check-label font14 graycolor my-auto" for="AllowComments">
                                        Identity
                                    </label>
                                </div>







                                <div class="my-2 d-flex justify-content-start">
                                    <input name="categories" class="form-check-input me-2 my-auto" type="checkbox"
                                        id="AllowComments">
                                    <label class="form-check-label font14 graycolor my-auto" for="AllowComments">
                                        Marketing
                                    </label>
                                </div>







                                <div class="my-2 d-flex justify-content-start">
                                    <input name="categories" class="form-check-input me-2 my-auto" type="checkbox"
                                        id="AllowComments">
                                    <label class="form-check-label font14 graycolor my-auto" for="AllowComments">
                                        Optimization
                                    </label>
                                </div>



                            </div>

                        </div>



                        <hr class="textcolor m-0">


                        {{-- Start of Blog Add New Categories Button --}}
                        <div class="d-flex justify-content-md-end AccordionFooter py-3 px-4">
                            <button class="primarybtn minibtn"> Add New Categories </button>

                        </div>

                        {{-- END of Blog Add New Categories Button --}}



                    </div>
                </div>
            </div>
            {{-- ######################################################################### --}}
            {{-- ################### END OF Categories Custom Accordion CONTENT #################  --}}
            {{-- ######################################################################## --}}









            {{-- ######################################################################### --}}
            {{-- ################### START OF Tag Custom Accordion CONTENT #################  --}}
            {{-- ######################################################################## --}}

            <div class="accordion CustomAccordion  mx-auto">

                <div class="accordion-item mt-md-3 mb-md-0 m-2">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#TagAccordionItem" aria-expanded="false"
                            aria-controls="TagAccordionItem">
                            Tag
                        </button>
                    </h2>
                    <div id="TagAccordionItem" class="accordion-collapse collapse show">
                        <div class="accordion-body tagifyInput">

                            {{-- tags using tagify --}}
                            {{-- https://github.com/yairEO/tagify --}}
                            <label for="Tags" class="darkcolor col-form-label font14">Tags</label>
                            <input type="text" id="TagsBlogInput" class="form-control bgwhiteopacity py-2">

                            <script>
                                var TagsBlogInput = document.querySelector('#TagsBlogInput'),
                                    tagify = new Tagify(TagsBlogInput);
                            </script>
                        </div>
                    </div>
                </div>

            </div>

            {{-- ######################################################################### --}}
            {{-- ################### END OF Tag Custom Accordion CONTENT #################  --}}
            {{-- ######################################################################## --}}







            {{-- ######################################################################### --}}
            {{-- ################### START OF FeaturedImage Custom Accordion CONTENT #################  --}}
            {{-- ######################################################################## --}}

            <div class="accordion CustomAccordion  mx-auto">

                <div class="accordion-item mt-md-3 mb-md-0 m-2">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#FeaturedImageAccordionItem" aria-expanded="false"
                            aria-controls="FeaturedImageAccordionItem">
                            Featured Image
                        </button>
                    </h2>
                    <div id="FeaturedImageAccordionItem" class="accordion-collapse collapse show">
                        <div class="accordion-body darkcolor">
                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until
                            the
                            collapse plugin adds the appropriate classes that we use to style each element. These
                            classes
                            control the overall appearance, as well as the showing and hiding via CSS transitions.
                            You
                            can
                            modify any of this with custom CSS or overriding our default variables. It's also worth
                            noting
                            that just about any HTML can go within the <code>.accordion-body</code>, though the
                            transition
                            does limit overflow.
                        </div>
                    </div>
                </div>

            </div>

            {{-- ######################################################################### --}}
            {{-- ################### END OF FeaturedImage Custom Accordion CONTENT #################  --}}
            {{-- ######################################################################## --}}








        </div>


        {{-- ===================================================================== --}}
        {{-- =========== END OF RIGHT SIDE CONTENT =================  --}}
        {{-- ===================================================================== --}}




    </section>


    {{-- ===================================================================== --}}
    {{-- =========== END OF Add Blog section =================  --}}
    {{-- ===================================================================== --}}







    @include('dashboard.inc.DashBoardFooter')
