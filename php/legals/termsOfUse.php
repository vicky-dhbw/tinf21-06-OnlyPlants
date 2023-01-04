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
$currentPage='termsOfUse';
$admin_page="../adminPage.php";
$profile="../profile.php";
$imprint = "imprint.php";
$privacyPolicy ="privacyPolicy.php";
$termsOfUse ="#";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Terms of use</title>
    <link rel="icon" href="../../favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/footer.css">
    <style>
        h1 {
            margin-top: 100px;
        }
        li {
            list-style: none;
            margin-left: 5px;
        }
    </style>
</head>

<body>

<?php include __DIR__ . '/../templates/nav.php' ; ?>

<div style="margin: 10%">
    <h1>Terms of use</h1>
    <hr>
<p>
    Special terms of use for forum registration
    in the (name of your domain) forum:
</p>
    <b>
    § 1 Scope </b>
<p>
    (1) The following terms and conditions apply to the use of the (name of your domain) forum.
    hereinafter referred to as "Our Website" - Forum. It is important for the use of the forum
    that you as a user accept the following forum rules and conditions.
    The registration and use of our forum is free of charge.</p>
<p>
    (2) By registering, you agree to the terms of use of our website.
    agree. By agreeing, you guarantee us that you will not create any contributions
    that violate the terms of use.</p>
    </p>
    (3) By using our website no contract between the user and us is concluded.
    users and us.</p>
<b>
    § 2 Duties as forum users </b>
<p>
    (1) One of your duties as a user is not to post any messages that violate these forum rules or any other rules,
    against these forum rules, against morality or otherwise against applicable German law.
    law.</p>
    <p>
    You are not permitted to do the following:
  <li>
    1. to publish content that is untrue and whose publication constitutes a
    criminal offense or a misdemeanor, </li>
  <li>
    2. sending spam via the forum to other forum users/form users,</li>
  <li>
    3. use of contents protected by copyright and trademark law without
    lawful authorization (e.g. press releases etc.),</li>
  <li>
    4. actions that are anti-competitive,</li>
  <li>
    5. multiple posting of topics in the forum (so-called double postings),</li>
  <li>
    6. to carry out own advertising, consequently surreptitious advertising, and</li>
  <li>
    7. to publish contents which are insulting, racist, discriminatory or have pornographic
    pornographic elements towards other users and the general public.
    general public.</li></p>
  <p>
    Your duty as a forum user is to refer to § 2 para. 1 nos. 1-7 of this
    terms of use, before you publish your contribution in the forum and to
    check whether you have adhered to these points.</p>
  <p>
    (2) Should you violate § 2 para. 1 nos. 1-7 of these terms of use, we reserve the right to
    reserve the right to take the following steps against you:</p>
  <p>
  <li>
    1. delete your posted contributions and modify them,</li>
  <li>
    2. prohibition to continue posting in the forum and </li>
  <li>
    3. blocking your access as a user. </li>
  </p>
  <p>
    (3) If you, as a forum user, have not observed the forum rules and if possible legal violations have
    possible legal violations that have arisen as a result of the content you have posted in our forum (breach of duty).
    our forum (breach of duty), you undertake as a user to indemnify us from any
    user to indemnify us from any claims, including claims for damages,
    and to reimburse the costs of such claims.
    In addition, the user is obligated to indemnify us in the event of claims for damages regarding
    the defense against the legal violation caused by him/her (breach of duty, see above), and to
    and to bear the costs of an appropriate legal defense for us.</p>
    <p>
    (4) By your agreement you guarantee us that you will not create any amounts that
    violate the terms of use. The same applies to the setting of
    external links and the signatures.</p>

  <b>  § 3 Transfer of rights of use</b>
  <p>
    You, as a forum user have the sole responsibility of the copyright
    copyright law when publishing contributions and topics in the forum.
    observe. As a user you only grant us with the publication of your contribution on their homepage
    the right to make the contribution permanently available for retrieval. Furthermore
    our team has the right to delete, edit and move your topics and contributions within their
    within their homepage, to link them with other content or to close them.
    close them.</p>

  <b>  § 4 Limitation of liability </b>
  <p>
    (1) We do not assume any liability for the contributions, topics, external links and the resulting
    topics, external links and the resulting content, in particular not for their correctness
    for their correctness, completeness and topicality. We are also not obligated
    to permanently monitor the transmitted and stored contributions of the users or to investigate the
    or to investigate under the circumstances whether they indicate illegal content.
    illegal content. We are only liable in the case of intentional or grossly negligent breach of duty.
    breach of duty.
    (2) We expressly point out that the legal contributions and discussions in the
    forum are completely non-binding. The use of the contributions and their exploitation
    takes place at your own risk.
    (3) In the case of advertisements, we assume no liability for the content and the
    accuracy. The respective author is solely responsible for the content of the advertisements.
    The same applies to the content of the advertised website. When displaying the
    advertising on our website, we are not at the same time with the illegal content
    agree. Therefore, the liability lies solely with the advertiser.
    (4) It is not guaranteed for a constant uninterrupted access to the website.
    A liability in this regard is hereby expressly excluded. Even with great
    Unfortunately, downtimes cannot be ruled out, even with great care. </p>

    <b>§ 5 Copyright </b>
  <p>
    All texts, images and other information and data published on our website are subject to the
    data published on our website are - unless otherwise indicated - subject to the copyright of our site. Any
    form of reproduction and / or modification may only be made with the written permission
    by us. Otherwise, we reserve the right to take legal action against this
    legal action against this infringement. All costs caused by a violation of rights on the part of a user
    user will be charged to the user.</p>

  <b>§ 6 Reservation of right to change </b>
  <p>
    We have the right to change the terms of use at any time. The change will then be
    published by forum entry on the website. </p>

 <b>§ 7 Termination and term of membership in our website. </b>
 <p>
    The duration of the membership begins with the registration and with the agreement
    our terms of use and exists for an indefinite period. The membership
    can be terminated at any time without notice.</p>

 <b>§ 8 Severability clause</b>
 <p>
    This Forum Terms of Use is to be considered as part of our website from which
    is referred to this page. If individual formulations of this forum
    terms of use are no longer wholly or partly in conformity with the current legal situation
    legal situation, it is to be assumed that the remaining provisions of the Forum Terms of
    Terms of Use shall remain in force.</p>
</div>










<?php include __DIR__ . '/../templates/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>
</html>