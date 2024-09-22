<?php
// get json file as string
$cv_contents = file_get_contents("./cv.json");
$cv = json_decode($cv_contents, associative: true);
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title><?php echo  $cv["name"]; ?></title>
</head>

<body>
    <?php include 'header.php' ?>

    <div class="content">
        <h1>Name: <?= $cv['name']; ?></h1>
        <!-- <img src=<?= $cv['contact_information']['img']; ?> alt="rakib"> -->
        <p><?= $cv["profile"] ?></p>

        <h2>Contact Information</h2>
        <li>Email: <?= $cv["contact_information"]["email"] ?></li>
        <li>Address: <?= $cv["contact_information"]["address"] ?></li>
        <li>Phone: <?= $cv["contact_information"]["phone"] ?></li>
        <li>Linkdin: <?= $cv["contact_information"]["linkedin"] ?></li>
        <li>Website: <?= $cv["contact_information"]["website"] ?></li>
        <!-- <img> <?= $cv["contact_information"]["img"] ?></img> -->
        <img src=<?= $cv["contact_information"]["img"] ?> alt="rakib">


        <br><br>

        <h2>Skills</h2>
        <ul>
            <?php foreach ($cv['skills'] as $skill): ?>
                <li><?php echo $skill; ?></li>
            <?php endforeach; ?>
        </ul>

        <h2>Experience</h2>
        <?php foreach ($cv['experience'] as $job): ?>
            <h3><?php echo $job['position']; ?> at <?php echo $job['company']; ?> (<?php echo $job['duration']; ?>)</h3>
            <p><?php echo $job['location']; ?></p>
            <ul>
                <?php foreach ($job['responsibilities'] as $responsibility): ?>
                    <li><?php echo $responsibility; ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endforeach; ?>

        <h2>Education</h2>
        <?php foreach ($cv['education'] as $teaching): ?>
            <h3><?php echo $teaching['degree']; ?> - <?php echo $teaching['institution']; ?></h3>

        <?php endforeach; ?>

        <h2>Certifications</h2>
        <?php foreach ($cv['certifications'] as $certification): ?>
            <li><?php echo $certification['name']; ?> (<?php echo $certification['issue_date']; ?>) - <?php echo $certification['issuing_organization']; ?></li>

        <?php endforeach; ?>


        <h2>Projects</h2>

        <?php foreach ($cv['projects'] as $project): ?>
            <h3><?php echo $project['name']; ?></h3>
            <p><?php echo $project['description']; ?></p>
            <p><strong>Technologies used:</strong> </p>
            <ol>
                <?php foreach ($project['technologies'] as $portfolio): ?>
                    <li><?php echo $portfolio; ?></li>
                <?php endforeach ?>
            </ol>
            <?php endforeach; ?>;



            <h2>References</h2>
            <?php foreach ($cv['references'] as $reference): ?>
                <li><?php echo $reference['name']; ?> (<?php echo $reference['position']; ?>) - (<?php echo $reference['email']; ?>)- (<?php echo $reference['phone']; ?>)</li>

            <?php endforeach; ?>




    </div>






    <?php include 'footer.php' ?>
</body>

</html>