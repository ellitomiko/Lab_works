<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .feedback-item {
            display: flex;
            flex-direction: row;
            margin: 5px;
            border: 1px solid black;
        }

        .name, .email, .phone {
            min-width: 200px;
        }
        
    </style>
</head>

<body>

    <?php
    
    $root = simplexml_load_file("data.xml") or die("Error: Cannot create object");
    
    foreach ($root->children() as $node) {
    ?>
        <div class="feedback-item">
            <div class="name"><a href="edit.php?id=<?= $node['id'] ?>"><?= $node->name ?></a></div>
            <div class="phone"><?= $node->phone ?></div>
            <div class="email"><?= $node['email'] ?></div>
            <div class="message"><?= $node->message ?></div>
        </div>
    <?php
    }
    ?>
</body>

</html>