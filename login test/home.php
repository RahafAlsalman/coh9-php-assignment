<?php require './header.php'

?>
<main class="container my-5">

    <h1 class="text-center">Featured Courses</h1>
    <hr class="w-50 m-auto">

    <div id="htu-courses" class="mt-5 row">

        
            <div class="htu-card-wrapper col-12 col-md-6 col-lg-4 col-xl-3 mb-5">
                <div class="card">
                    <img src="./assets/images/c1.jpeg" class="card-img-top" alt="PHP">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?= $course->title ?>
                        </h5>
                        <p class="card-text">
                            <?= $course->excerpt ?>
                        </p>
                        <a href="./course.php?id=<?= $course->id ?>" class="btn btn-primary">Check Course</a>
                    </div>
                </div>
            </div>
       

    </div>
</main>
<?php require './footer.php' ;?>