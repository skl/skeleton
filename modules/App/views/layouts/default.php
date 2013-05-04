<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Orno</title>
        <meta name="viewport" content="width=device-width">
        <style>
            body { font-family: Helvetica, Arial; margin: 0; padding: 0; background: #e8e8e8; }
            header { border-bottom: 3px solid #222; height: 40px; background-color: #680000; background-image: linear-gradient(90deg, rgba(255,255,255,.07) 50%, transparent 50%), linear-gradient(90deg, rgba(255,255,255,.13) 50%, transparent 50%), linear-gradient(90deg, transparent 50%, rgba(255,255,255,.17) 50%), linear-gradient(90deg, transparent 50%, rgba(255,255,255,.19) 50%); background-size: 13px, 29px, 37px, 53px; }
            section { width: 600px; margin: 40px auto 40px auto; padding: 40px; background: #fff; box-shadow: 0 0 5px #c0c0c0; }
            h1 { font-size: 40px; color: #680000; line-height: 40px; font-weight: normal; margin: 0 0 20px 0; }
            p { font-size: 15px; margin: 0 0 20px 0; padding: 0; }
            p:last-child { margin: 0; }
            a, a:active, a:visited { color: #3399cc; }
            a:hover { color: #680000; }
        </style>
    </head>
    <body>
        <header>&nbsp;</header>
        <section>
            <?= $this->region('content') ?>
        </section>
    </body>
</html>
