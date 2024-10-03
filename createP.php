<?php include('./header.php'); ?>
<style>
    body{
        background-image:url('https://images.pexels.com/photos/255379/pexels-photo-255379.jpeg?auto=compress&cs=tinysrgb&w=2260&h=4000&dpr=5');
    }
</style>
<body>
    <main class="content mt-3">
        <section>
            <div class="container">
                <div class="row">
                    <div class=" col-xl-6 mx-auto">
                        <div class="bg-primary-soft p-4 p-sm-5 border border- shadow mt-3">
                            <div class="text-center mb-3">
                                <h2 class="login_title">SmartFolio</h2>
                            </div>
                            <h1 class="text-center my-4 ">Create your Profile</h1>
                            <!-- form -->
                            <form action="createInfo.php" method="POST" enctype="multipart/form-data">
                            <div class="">
                                    <label for="uname" class="form-label mb-3">Enter Username : </label>
                                    <input type="text" id="uname" name="uname" required/>
                                </div>  
                                <div class="mb-3">
                                    <label for="avatar" class="form-label ">Insert Image as a Profile
                                        Picture</label>
                                    <input type="file" id="avatar" name="img1" accept="image/png,image/jpeg" />
                                </div>
                                <div class="mb-3">
                                    <label for="work" class="form-label ">
                                        Insert Image of your Past Work</label>
                                    <input type="file" id="work" name="img2" accept="image/png, image/jpeg" />
                                </div>
                                <div class="services-dropdown mb-3 ">
                                    <label for="service-names">Choose a Category</label>
                                    <select name="selects" id="service-names">
                                        <option value="Musician">Musician</option>
                                        <option value="Web Developement">Web Developement</option>
                                        <option value="Fitness">Fitness</option>
                                        <option value="Illustrator">Illustrator</option>
                                        <option value="Dancer">Dancer</option>
                                        <option value="Tutor">Tutor</option>
                                    </select>
                                </div>
                                <div class="aboutUser mb-4">
                                    <label for="abt" class="form-label mb-3">About Yourself</label>
                                    <textarea type="text" name="about" class="form-control" id="abt" required>
                                    </textarea>
                                </div>
                                <div class="mb-3">
                                    <h4>
                                        <label for="" class="form-label ">Insert links of
                                            your Social Media Handles</label>
                                    </h4>
                                </div>
                                <div class="Links-user mb-3 ">
                                    <label for="instagramuser" class="insta-label">
                                        Instagram</label><br>
                                        <input type="url" id="instagramuser" name="link1" accept="href" required/>
                                </div>
                                <div class="Links-user mb-3">
                                    <label for="fbuser" class="insta-label">
                                        Facebook</label><br>
                                    <input type="url" id="fbuser" name="link2" accept="href" required/>
                                </div>
                                <div class="Links-user mb-3">
                                    <label for="tw" class="insta-label">
                                        Twitter</label><br>
                                    <input type="url" id="tw" name="link3" accept="href" required/>
                                </div>
                                <div class="Links-user mb-3">
                                    <label for="li" class="insta-label">
                                        LinkedIn </label><br>
                                    <input type="url" id="li" name="link4" accept="href" required/>
                                </div>
                                <div class="Links-user mb-3">
                                    <label for="gh" class="insta-label">
                                        Github </label><br>
                                    <input type="url" id="gh" name="link5" accept="href" required/>
                                </div>
                                <div class="submitedited text-center">
                                    <button type="submit" name="submitC" class="btn btn-primary mt-2"
                                        value="submit">submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include('./footer.php'); ?>
</body>