<?
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $file = '/tmp/sample-app.log';
    $message = file_get_contents('php://input');
    file_put_contents($file, date('Y-m-d H:i:s') . " Received message: " . $message . "\n", FILE_APPEND);
} else {
?>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Assignment 3</title>
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster+Two" type="text/css">
        <link rel="icon" href="https://awsmedia.s3.amazonaws.com/favicon.ico" type="image/ico">
        <link rel="shortcut icon" href="https://awsmedia.s3.amazonaws.com/favicon.ico" type="image/ico">
        <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <link rel="stylesheet" href="/styles.css" type="text/css">
    </head>

    <body>
        <section class="homecontent">
            <h2>Welcome to Energy Recommendation System,</h2>
            <p>Motivation behind this idea is the lack of existence of the system which can help visualize the appliance level electricity consumption data which can ultimately lead to</p>
            <p>It is a system which allows a user to register itself on the portal, login to see their electricity usage appliance wise data to monitor the energy consumption pattern to the end user as well the energy supplier.</p>
            <p>This system can be used as a novel stand-alone system as well as extension to the existing user/account management system offered by energy supply companies. This system has various potential such as implementation of anomaly detection for fault detecting in appliances as well as sensors.</p>
            <p>This fault detection can help reduce the risk of fire due to fault in appliance and can help for maintenance of sensors. Using high resolution data, companies can help manage peak hour usage using pattern of energy consumption.</p>
        </section>

        <section class="functions">
            <ul class="menu">
                <li><a href="https://d23o8qcv26cssk.cloudfront.net">Dashboard</a></li>
            </ul>
            <h2>Functions</h2>
            <ul>
                <li>Visualise energy usage</li>
                <li>Pattern analysis</li>
                <li>Export data</li>
            </ul>
            <footer class="footer">
                <p> Devansh Parmar(S3793557), Ravikumar Balar(S3798098)</p>
            </footer>
        </section>
    </body>

    </html>
<?
}
?>