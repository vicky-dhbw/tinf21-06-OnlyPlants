<?php
session_start();
if(isset($_SESSION['sign-in-sign-out'])){
    $sign_in_sign_out=$_SESSION['sign-in-sign-out'];
    $user=$_SESSION['user'];
}
else{
    $sign_in_sign_out=0;
    $user="no user";
}
$Logo="../../assets/images/logo_.png";
$plants_page="../plants.php";
$premiumContent_page="../premiumContent.php";
$contact_page="../contact.php";
$home_page="../../index.php";
$signin_page="../signin.php";
$controlButtonPage='../controlButton.php';
$currentPage='privacyPolicy';
$admin_page="../adminPage.php";
$profile="../profile.php";
$imprint = "imprint.php";
$privacyPolicy ="#";
$termsOfUse ="termsOfUse.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Privacy Policy</title>
    <link rel="icon" href="../../favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/footer.css">
    <style>
        h1 {
            margin-top: 100px;
        }
        li {
            margin-left: 20px;
        }
    </style>
</head>

<body>

<?php include __DIR__ . '/../templates/nav.php' ; ?>



<div style="margin: 10%">
    <h1>Privacy Policy</h1>
<hr>
<p>
 <b>General notice and mandatory information <br>
    Designation of the responsible entity</b>
</p>
    <p>
    The responsible entity for data processing on this website is:<br>
</p>
<p>
    OnlyPlants<br>
    Daniel Wierbicki<br>
    Schloss 2<br>
    97980 Bad Mergentheim<br>
</p>
<p>
    The responsible body decides alone or jointly with others on the purposes and means of the processing of personal data (e.g. names, contact details or similar).
</p>
 <b>Revocation of your consent to data processing</b><br>
<p>Some data processing operations are only possible with your express consent. A revocation of your already given consent is possible at any time. An informal communication by e-mail is sufficient for the revocation. The legality of the data processing carried out until the revocation remains unaffected by the revocation.
<br>Right to complain to the competent supervisory authority
<br>As a data subject, you have the right to complain to the competent supervisory authority in the event of a data protection violation. The competent supervisory authority regarding data protection issues is the state data protection commissioner of the federal state in which our company's registered office is located. The following link provides a list of data protection officers and their contact details: https://www.bfdi.bund.de/DE/Infothek/Anschriften_Links/anschriften_links-node.html.
</p>


    <b>Right to data portability</b>
  <p>You have the right to have data that we process automatically on the basis of your consent or in fulfillment of a contract handed over to you or to third parties. The data will be provided in a machine-readable format. If you request the direct transfer of the data to another responsible party, this will only be done insofar as it is technically feasible.
    Right to information, correction, blocking, deletion
    Within the framework of the applicable legal provisions, you have the right at any time to free information about your stored personal data, the origin of the data, their recipients and the purpose of data processing and, if applicable, a right to correction, blocking or deletion of this data. In this regard, and also for further questions on the subject of personal data, you can contact us at any time via the contact options listed in the imprint.
  </p>

    <b>    SSL or TLS encryption</b><br>
<p>
    For security reasons and to protect the transmission of confidential content that you send to us as site operator, our website uses SSL or TLS encryption. This means that data you transmit via this website cannot be read by third parties. You can recognize an encrypted connection by the "https://" address line of your browser and the lock symbol in the browser line.
</p>

    <b>Server log files</b>
<p>
    In server log files, the provider of the website automatically collects and stores information that your browser automatically transmits to us. These are:
</p>
<p>

    <li> Visited page on our domain
    <li> Date and time of the server request</li>
    <li> Browser type and browser version</li>
    <li> Operating system used</li>
    <li> Referrer URL</li>
    <li> Host name of the accessing computer</li>
    <li> IP address</li>
</p>
<p>
    There is no merging of this data with other data sources. The data processing is based on Art. 6 (1) lit. b DSGVO, which permits the processing of data for the fulfillment of a contract or pre-contractual measures.
</p>
    <b>Data transmission upon conclusion of a contract for the purchase and shipment of goods </b>
<p>
       Personal data will only be transmitted to third parties if there is a necessity in the context of the execution of the contract. Third parties can be, for example, payment service providers or logistics companies. A further transmission of data does not take place or only if you have expressly agreed to it.
       The basis for data processing is Art. 6 para. 1 lit. b DSGVO, which permits the processing of data for the fulfillment of a contract or pre-contractual measures.
</p>

    <b>  Contact form </b>
<p>
    Data transmitted via contact form will be stored, including your contact data, in order to be able to process your inquiry or to be available for follow-up questions. This data will not be passed on without your consent.
    The processing of the data entered in the contact form is based exclusively on your consent (Art. 6 para. 1 lit. a DSGVO). A revocation of your already given consent is possible at any time. An informal communication by e-mail is sufficient for the revocation. The legality of the data processing operations carried out until the revocation remains unaffected by the revocation.
    Data transmitted via the contact form will remain with us until you request us to delete it, revoke your consent to store it or there is no longer any need to store it. Mandatory legal provisions - in particular retention periods - remain unaffected.
    Storage period of contributions and comments
    Contributions and comments as well as related data, such as IP addresses, are stored. The content remains on our website until it has been completely deleted or had to be deleted for legal reasons.
    The storage of contributions and comments is based on your consent (Art. 6 para. 1 lit. a DSGVO). A revocation of your already given consent is possible at any time. An informal communication by e-mail is sufficient for the revocation. The legality of data processing operations that have already taken place remains unaffected by the revocation.
</p>
</div>








<?php include __DIR__ . '/../templates/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>
</html>