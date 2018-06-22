
<!-- using two one unit columns in bootstrap to center the chat window on separate rows. Can be removed for mobile units -->
<div id="chatContainer" class="row text-light">

<div class="col-1"></div>
<!-- main chat display window -->
<div id="chat" class="col-10  py-5 px-3 bg-primary">
    <?php echo  $_SESSION["userName"]; ?>   
</div>
<div class="col-1"></div>

    <div class="col-1"></div>
<!-- space reserved for msg -->
    <div id="chatMsg" class="col-8 px-3 bg-dark"></div>
<!-- space reserved for submit button to msg -->
    <div class="col-2 bg-secondary"></div>
    <div class="col-1"></div>
</div>

<div class="row">
    <a class="btn btn-danger mx-auto my-3 text-light" href="logout.php">Log Out</a>
</div>
