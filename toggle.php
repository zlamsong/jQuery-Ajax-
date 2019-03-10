<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<blockquote>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate dignissimos dolor eligendi excepturi
        exercitationem fuga illo nihil optio pariatur provident, quidem quo, reiciendis tenetur! Consectetur fuga
        in quos recusandae tempore?
    </p>
    <button id="hide">click</button>
</blockquote>

<script src="jQuery.js"></script>
<script>
    $(document).ready(function () {
        $('#hide').click(function () {
            $('p').toggle('slow');
        });
    });
</script>

</body>
</html>