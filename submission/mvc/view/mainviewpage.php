<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- This HTML code snippet contains a few lines that connect CSS stylesheets to a webpage. 
    It brings in styles from Bootstrap, x3dom, a custom stylesheet, "blob.css", and jQuery FancyBox. 
    All these stylesheets are stored in the `../submission/mvc/assets/css/` directory. 
    The `crossorigin="anonymous"` attribute in some of the links makes sure that when these 
    CSS files are requested, they don't carry any credential data and are considered anonymous 
    by the server. -->
    <link rel="stylesheet" href="../submission/mvc/assets/css/bootstrap.css" crossorigin="anonymous">
    <link rel='stylesheet' type='text/css' href='../submission/mvc/assets/css/x3dom.css'>
    <link rel="stylesheet" href="../submission/mvc/assets/css/custom.css" crossorigin="anonymous">
    <link rel="stylesheet" href="../submission/mvc/assets/css/blob.css" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="../submission/mvc/assets/css/jquery.fancybox.min.css">
    <title>Submission</title>

  </head>
  <body id="bodyColor">
    <!--The HTML code describes a sticky, responsive navigation bar that features a Coca-Cola theme. 
    It uses special classes to make sure the navbar remains fixed at the top of the page and adjusts 
    well to different screen sizes. The logo area shows the brand name. There's a toggle button that 
    lets the navbar open or close on smaller screens. 
    The menu that can be hidden includes links to the Home, About, and Models sections, 
    placed on the right side. This design makes sure the navbar looks good and works well on all devices.-->
      <nav id="headerColor" class="navbar sticky-top navbar-expand-sm navbar_coca_cola">
        <div class="logo">
          <a class="navbar-brand" href="#">
            <h1>1oca</h1>
            <h2>Cola</h2>
            <h3>Gallery</h3>
            <p>A top refreshing beverage for over a century</p>
          </a>
        </div>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a id="navHome" class="nav-link active" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a id="navAbout" class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a id="navModels" class="nav-link"  href="#">Models</a>
            </li>
          </ul>
        </div>
      </nav>
      <!--At the heart of the application is the "container-fluid" class. 
      This makes sure that the layout spreads smoothly across the whole width of the screen, 
      fitting different screen sizes and making it look better. This type of flexible layout 
      is very important for modern web applications because being responsive and adaptable is 
      essential.-->
      <div class="container-fluid">
          <div id="home" class="main_contents">
            <div class="row"> 
            <div id="main_text" class="col-4">
                <h1 class="title"><span class="title-part line-1">Coca Cola</span></h1>
                <h2 class="title"><span class="title-part line-5">Great Britain</span></h2>
                <h3 class="title"><span class="title-part line-5">Established by Dr. John S. Pemberton</span></h3>
                <h3 class="title"><span class="title-part line-4">The Coca Cola Company is the top global producer, marketer, and distributor of drink concentrates and syrups</span></h3>
            </div>
              <div class ="col-sm-6">
                <x3d width='600px' height='600px'>
                  <scene>
                    <Transform id="modelTransform1" rotation="0 0 0 1">
                      <inline url="../submission/mvc/assets/x3d/fanta.x3d" > </inline>
                    </Transform>
                  </scene>          
                </x3d>
                <div class="blob">
                </div>
              </div>  
            </div> 
          </div>  
          <div id="about" class="main_contents" style="display:none;">
          <!--The application is divided into several main areas, each designed to provide detailed information 
          and interactive experiences. The #home section is the first thing you see and focuses on Coca-Cola's brand. 
          Along with this information, there is a 3D model viewer on the page. This lets users look 
          at a Coca-Cola model in a dynamic and interactive way.-->
            <div class="col-sm-4">
              <div class="card-body">  
                  <div id="title_coke" class="card-title drinksText"></div>
              </div>
            </div>
            <div class="col-sm-12">
                <div class="card text-left">
                    <div class="card-body">
                        <div class="card-title title_gallery drinksText"></div>
                        <div class="gallery" id="gallery"></div>
                        <div class="card-text description_gallery drinksText"></div>
                    </div>
                </div> 
            </div>
            <!--The like #about and #models, which are hidden. These sections 
            open up when users click or use other navigation actions. The #about section displays 
            cards and galleries, using FancyBox to show close-up previews of images. This provides 
            a detailed and visually appealing story of Coca-Cola's history and impact. The #models 
            section offers a deeper look at different Coca-Cola products with 3D models and detailed 
            descriptions.-->
            <div class="row">
                  <div class="col-sm-4">
                      <a href="../submission/mvc/assets/images/renderImages/cinema4d.jpg" data-fancybox data-caption="3D Coke Can in Cinema4D">
                        <img class="card-img-top img-fluid img-thumbnail" src="../submission/mvc/assets/images/cinema4d.jpg" alt="Coca Cola">
                      </a>
                      <div class="card img-narrow">
                          <div class="card-body">
                                <div id="title_left" class="card-title drinksText"></div>
                                <div id="subTitle_left" class="card-subtitle drinksText"></div>
                                <div id="description_left" class="card-text drinksText"></div>   
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-4">
                      <a href="../submission/mvc/assets/images/renderImages/photoshop.jpg" data-fancybox data-caption="Texture for 3D Coke Can ">
                        <img class="card-img-top img-fluid img-thumbnail" src="../submission/mvc/assets/images/photoshop.jpg" alt="Coca Cola">
                      </a>
                      <div class="card">
                          <div class="card-body">
                            <div id="title_centre" class="card-title drinksText"></div>
                            <div id="subTitle_centre" class="card-subtitle drinksText"></div>
                            <div id="description_centre" class="card-text drinksText"></div>   
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-4">
                      <a href="../submission/mvc/assets/images/renderImages/vrml.jpg" data-fancybox data-caption="3D Coke Can in castle model viewer">
                        <img class="card-img-top img-fluid img-thumbnail" src="../submission/mvc/assets/images/vrml.jpg" alt="Coca Cola">
                      </a>
                      <div class="card img-narrow">
                          <div class="card-body">
                            <div id="title_right" class="card-title drinksText"></div>
                            <div id="subTitle_right" class="card-subtitle drinksText"></div>
                            <div id="description_right" class="card-text drinksText"></div>   
                          </div>
                      </div>
                  </div>
            </div>
          </div>  
          <div id="models" class="main_contents" style="display:none;">
            <div class="row">
              <div class="col-sm-4">
                <div class="card text-left">
                  <div class="card-Title">
                    <h3>X3D Models</h3>
                  </div>
                  <div class="card-body">
                      <div>
                          <button type="button" class="btn btn-outline-light btn-responsive" onMouseUp="cokeScene(); cokeDescription();">Coke</button>
                          <button type="button" class="btn btn-outline-light btn-responsive" onMouseUp="spriteScene(); spriteDescription();">Sprite</button>
                          <button type="button" class="btn btn-outline-light btn-responsive" onMouseUp="pepperScene(); pepperDescription();">Dr Pepper</button>
                        <div> 
                          <x3d id="wire">
                            <scene>
                                <Switch whichChoice="0" id='SceneSwitch'>
                                    <transform>
                                        <inline nameSpaceName="model" mapDEFToID="true"  url="../submission/mvc/assets/x3d/coke28.x3d" id="coke"></inline>
                                    </transform>
                                    <transform>
                                        <inline nameSpaceName="model" mapDEFToID="true" url="../submission/mvc/assets/x3d/sprite.x3d" id="sprite"></inline>
                                    </transform>
                                    <transform>
                                        <inline nameSpaceName="model" mapDEFToID="true"  url="../submission/mvc/assets/x3d/drpepper.x3d" id="pepper"></inline>
                                    </transform>
                                </Switch>
                            </scene>
                          </x3d>
                        </div> 
                        <div id="x3dCreationMethod_coke" class="card-text drinksText"></div>
                        <div id="x3dCreationMethod_sprite" class="card-text drinksText"></div>
                        <div id="x3dCreationMethod_pepper" class="card-text drinksText"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <?php for ($i=0; $i <count ($data); $i++){ ?>
                  <div class="title">
                    <div class="title-part line-1">
                      <h2><?php echo $data[$i]['x3dModelTitle'] ?></h2>
                    </div>
                    <div class="title-part line-2">
                      <h2><?php echo $data[$i]['modelTitle'] ?></h2>
                   </div>
                   <div class="title-part line-3">
                      <h2><?php echo $data[$i]['modelDescription'] ?></h2>
                    </div>
                  </div>
                <?php } ?>
              </div> 
              <div class ="col-sm-3">
                  <x3d width='600px' height='600px'>
                    <scene>
                        <Transform id="modelTransform1" rotation="0 0 0 1">
                          <inline url="../submission/mvc/assets/x3d/cokecup1.x3d" > </inline>
                        </Transform>
                    </scene>          
                  </x3d>
              </div>   
            </div> 
          </div> 
          <!--The application goes beyond just showing pictures; it also offers a more advanced way 
          to interact through the "#interaction" section. Here, users can find different controls 
          that let them move the camera around and make 3D models move. They can also change settings 
          like the wireframe and lighting. This makes it feel like they are handling real objects, 
          allowing them to turn them around, see them from different sides, and notice small details 
          in the designs.-->
          <div id="interaction" class="row" style="display:none;">
                <div class="col-sm-4">
                    <div class="card text-left">
                        <div class="card-body">
                          <div class="card-Title x3dCamera_Subtitle drinksText">
                            <h3>Camera Views</h3>
                          </div>                            
                          <a href="#" class="btn btn-outline-light btn-responsive" onclick="cameraFront();">Default</a>
                          <a href="#" class="btn btn-outline-dark btn-responsive" onclick="cameraBack();">Back</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraLeft();">Left</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraRight();">Right</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraTop();">Top</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraBottom();">Bottom</a>
                          <div class="card-text x3dCameraDescription drinksText">
                            <p>Select viewpoints buttons</p>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="col-sm-4">
                    <div class="card text-left">
                        <div class="card-body">
                          <div class="card-Title x3dAnimationSubtitle drinksText">
                            <h3>Animation Options</h3>
                          </div>
                          <a href="#" class="btn btn-outline-light btn-responsive" onclick="animateModel();">RotCola</a>
                          <a href="#" class="btn btn-outline-light btn-responsive" onclick="animateModel2();">RotSprite</a>
                          <a href="#" class="btn btn-outline-light btn-responsive" onclick="animateModel3();">RotDrPepper</a>
                          <a href="#" class="btn btn-outline-dark btn-responsive" onclick="stopRotation();">StopCola</a>
                          <a href="#" class="btn btn-outline-dark btn-responsive" onclick="stopRotation2();">StopSprite</a>
                          <a href="#" class="btn btn-outline-dark btn-responsive" onclick="stopRotation3();">StopDrPepper</a>
                          <div class="card-text x3dAnimationDescription drinksText">
                              <p>Select animation buttons</p>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="col-sm-4">
                    <div class="card text-left">
                        <div class="card-body">
                          <div class="card-Title x3dRendersubtitle drinksText">
                            <h3>Wireframe and Lighting Options</h3>
                          </div>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="wireFrame();">Wire</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="headLight();">Headlight</a>
                          <a href="#" class="btn btn-outline-dark btn-responsive" onclick="headLight();">Default</a>
                          <a href="#" class="btn btn-outline-dark btn-responsive" onclick="headLight();">Headlight On/Off</a>
                          <div class="card-text x3dRenderDescription drinksText">
                              <p>Select a wireframe and lighting options buttons</p>
                          </div>
                        </div>
                      </div>
                </div>
                <!--Lastly, the use of interactive buttons and links shows the application. 
                They can do simple things like adjusting the camera angle or more complex actions like animating the 3D models. -->
                  <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div id="title_coke" class="card-title drinksText"></div>
                                <div id="subTitle_coke" class="card-subtitle drinksText"></div>
                                <div id="description_coke" class="card-text drinksText"></div>   
                            </div>
                        </div>
                  </div> 
          </div> 
      </div> 
      <!-- The footer is placed inside a "nav" element and uses several classes like "navbar", 
      "navbar-expand-sm", and "footer". These classes make sure that the footer adjusts well on 
      different screen sizes and looks good on all devices. -->
      <nav id="footerColor" class="navbar navbar-expand-sm footer">
          <div class="container-fluid">   
              <div class="navbar-text float-left copyright">
                  <p><span class="align-baseline">&copy 2024-05-15 Mobile&Web 3D</span></p>
              </div>
              <div class="navbar-text float-right social">
                  <a href="https://github.com/Moka364mz"><i class="fab fa-github-square fa-2x"></i></a>
              </div>
          </div>
      </nav> 
      <!-- The HTML code includes a variety of JavaScript files that add special features and make the web application work better. 
      Libraries like jQuery and Bootstrap help make the website responsive and easy to use, which means it looks good on both 
      phones and computers. Popper.js helps with placing elements like tooltips exactly where they need to be. 
      Icons from FontAwesome make the website look nicer and easier to navigate by using simple graphics. 
      The custom scripts like `custom.js` and `gallery_generator.js` are used to make specific parts of the website work in special ways, 
      such as loading images beautifully and managing data smoothly. -->
      <script src="../submission/mvc/assets/js/jquery-3.2.1.js" crossorigin="anonymous"></script>
      <script src="../submission/mvc/assets/js/popper.min.js" crossorigin="anonymous"></script>
      <script src="../submission/mvc/assets/js/bootstrap.min.js" crossorigin="anonymous"></script>
      <script src="../submission/mvc/assets/js/fontawesome-all.min.js"></script>
      <script src="../submission/mvc/assets/js/custom.js" crossorigin="anonymous"></script>
      <script src="../submission/mvc/assets/js/swap_restyle.js"></script>
      <script type='text/javascript' src='../submission/mvc/assets/js/x3dom-1.7.2/x3dom.js'></script>
      <script type="text/javascript" src="../submission/mvc/assets/js/gallery_generator.js"></script>
      <script src="../submission/mvc/assets/js/getJsonData.js"></script>
      <script src="../submission/mvc/assets/js/modelInteractions.js"></script>
      <script src="../submission/mvc/assets/js/modelInteractions2.js"></script>
      <script src="../submission/mvc/assets/js/jquery.fancybox.min.js"></script>
  </body>
</html>