<?php
// get json file as string
$cv_contents = file_get_contents("./cv.json");
$cv2 = json_decode($cv_contents, associative: true);


echo '<pre>';
// print_r($cv2['education']);
echo '</pre>';

echo '<br>';

foreach ($cv2['experience'] as $works) {
    echo '<pre>';
    // print_r($works);
    echo '</pre>';
}
foreach ($cv2['projects'] as $project) {
    echo '<pre>';
    print_r($project);
    echo '</pre>';
};
