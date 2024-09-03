<?php
// User information
$fullname = "James Francis M. Barlisan";
$address = "P2, Poblacion 1, Clarin, Misamis Occidental, 7201";
$contactNumber = "+639165009028";
$hobbies = ["graphic designing", "listening to music", "spending a lot of time on screens"];
$socialMedia = [
    "Facebook" => "https://www.facebook.com/james.mendoza.58",
    "Instagram" => "https://www.instagram.com/itsmendozajames/"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
            text-align: center;
        }
        .profile-info, .hobbies, .social-media {
            margin-bottom: 20px;
        }
        .profile-info p {
            margin: 10px 0;
            font-size: 16px;
        }
        .profile-info i {
            margin-right: 8px;
            color: #333;
        }
        .hobbies ul {
            list-style: none;
            padding: 0;
        }
        .hobbies ul li {
            margin-bottom: 5px;
        }
        .social-media a {
            color: #0066cc;
            text-decoration: none;
        }
        .social-media a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>My Profile</h1>
    
    <div class="profile-info">
        <p><i class="fas fa-user"></i>Hi! I'm <strong><?php echo $fullname; ?></strong></p>
        <p><i class="fas fa-map-marker-alt"></i>I reside in <?php echo $address; ?></p>
        <p><i class="fas fa-phone"></i>You can reach me at <?php echo $contactNumber; ?></p>
    </div>
    
    <div class="hobbies">
        <p>My interests include:</p>
        <ol>
            <?php foreach ($hobbies as $hobby): ?>
                <li><?php echo $hobby; ?></li>
            <?php endforeach; ?>
        </ol>
    </div>
    
    <div class="social-media">
        <p>Social Media Links:</p>
        <ul>
            <?php foreach ($socialMedia as $platform => $link): ?>
                <li><strong><?php echo $platform; ?>:</strong> <a href="<?php echo $link; ?>" target="_blank"><?php echo $link; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>

</body>
</html>
